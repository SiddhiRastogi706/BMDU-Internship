<?php
require_once __DIR__ . '/includes/auth.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$post = null;
$existing_tags = '';

if ($id) {
    $stmt = $pdo->prepare("SELECT * FROM blog_posts WHERE id = ?");
    $stmt->execute([$id]);
    $post = $stmt->fetch();
    if (!$post) {
        header('Location: blog.php');
        exit;
    }
    $tagStmt = $pdo->prepare("SELECT t.name FROM blog_tags t JOIN blog_post_tags pt ON pt.tag_id = t.id WHERE pt.post_id = ?");
    $tagStmt->execute([$id]);
    $existing_tags = implode(', ', array_column($tagStmt->fetchAll(), 'name'));
}

$page_title = $post ? 'Edit Post' : 'New Post';
$errors = [];

function slugify(string $text): string
{
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);
    $text = trim($text, '-');
    $text = strtolower($text);
    $text = preg_replace('~[^-a-z0-9]+~', '', $text);
    return $text !== '' ? $text : 'post-' . time();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title             = trim($_POST['title'] ?? '');
    $slug              = trim($_POST['slug'] ?? '') !== '' ? slugify($_POST['slug']) : slugify($title);
    $excerpt           = trim($_POST['excerpt'] ?? '');
    $content           = $_POST['content'] ?? '';
    $featured_image    = trim($_POST['featured_image'] ?? '');
    $meta_title        = trim($_POST['meta_title'] ?? '');
    $meta_description  = trim($_POST['meta_description'] ?? '');
    $status            = in_array($_POST['status'] ?? '', ['draft', 'scheduled', 'published']) ? $_POST['status'] : 'draft';
    $publish_at_input  = trim($_POST['publish_at'] ?? '');
    $tags_input        = trim($_POST['tags'] ?? '');

    if ($title === '') {
        $errors[] = 'Title is required.';
    }

    if ($status === 'scheduled' && $publish_at_input === '') {
        $errors[] = 'Scheduled posts need a publish date/time.';
        $publish_at = null;
    } elseif ($status === 'published' && $publish_at_input === '') {
        $publish_at = date('Y-m-d H:i:s');
    } else {
        $publish_at = $publish_at_input !== '' ? date('Y-m-d H:i:s', strtotime($publish_at_input)) : null;
    }

    if (empty($errors)) {
        $checkStmt = $pdo->prepare("SELECT id FROM blog_posts WHERE slug = ? AND id != ?");
        $checkStmt->execute([$slug, $id]);
        if ($checkStmt->fetch()) {
            $slug .= '-' . substr(uniqid(), -5);
        }
    }

    if (empty($errors)) {
        if ($post) {
            $stmt = $pdo->prepare("UPDATE blog_posts SET title=?, slug=?, excerpt=?, content=?, featured_image=?, meta_title=?, meta_description=?, status=?, publish_at=? WHERE id=?");
            $stmt->execute([$title, $slug, $excerpt, $content, $featured_image, $meta_title, $meta_description, $status, $publish_at, $id]);
            $post_id = $id;
        } else {
            $stmt = $pdo->prepare("INSERT INTO blog_posts (title, slug, excerpt, content, featured_image, meta_title, meta_description, status, publish_at) VALUES (?,?,?,?,?,?,?,?,?)");
            $stmt->execute([$title, $slug, $excerpt, $content, $featured_image, $meta_title, $meta_description, $status, $publish_at]);
            $post_id = (int)$pdo->lastInsertId();
        }

        $pdo->prepare("DELETE FROM blog_post_tags WHERE post_id = ?")->execute([$post_id]);
        if ($tags_input !== '') {
            foreach (array_filter(array_map('trim', explode(',', $tags_input))) as $tagName) {
                $tagStmt = $pdo->prepare("INSERT INTO blog_tags (name) VALUES (?) ON DUPLICATE KEY UPDATE name = name");
                $tagStmt->execute([$tagName]);
                $tagIdStmt = $pdo->prepare("SELECT id FROM blog_tags WHERE name = ?");
                $tagIdStmt->execute([$tagName]);
                $tagId = $tagIdStmt->fetchColumn();
                $pdo->prepare("INSERT IGNORE INTO blog_post_tags (post_id, tag_id) VALUES (?, ?)")->execute([$post_id, $tagId]);
            }
        }

        header('Location: blog.php?saved=1');
        exit;
    }

    $post = ['id' => $id, 'title' => $title, 'slug' => $slug, 'excerpt' => $excerpt, 'content' => $content,
             'featured_image' => $featured_image, 'meta_title' => $meta_title, 'meta_description' => $meta_description,
             'status' => $status, 'publish_at' => $publish_at_input];
    $existing_tags = $tags_input;
}

include __DIR__ . '/includes/header.php';
?>

<form method="post" class="max-w-4xl space-y-6">
  <?php if (!empty($errors)): ?>
  <div class="bg-red-50 border border-red-200 text-red-700 text-sm rounded-lg p-4">
    <?php foreach ($errors as $e) echo '<div>' . htmlspecialchars($e) . '</div>'; ?>
  </div>
  <?php endif; ?>

  <div class="bg-white border border-gray-200 rounded-xl p-6 space-y-4">
    <div>
      <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Title</label>
      <input type="text" name="title" required value="<?php echo htmlspecialchars($post['title'] ?? ''); ?>"
             class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm">
    </div>
    <div>
      <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Slug <span class="normal-case font-normal text-gray-400">(leave blank to auto-generate from title)</span></label>
      <input type="text" name="slug" value="<?php echo htmlspecialchars($post['slug'] ?? ''); ?>"
             class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm">
    </div>
    <div>
      <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Excerpt</label>
      <textarea name="excerpt" rows="2" class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm"><?php echo htmlspecialchars($post['excerpt'] ?? ''); ?></textarea>
    </div>
    <div>
      <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Content (HTML allowed)</label>
      <textarea name="content" rows="14" class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm font-mono"><?php echo htmlspecialchars($post['content'] ?? ''); ?></textarea>
    </div>
    <div>
      <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Tags <span class="normal-case font-normal text-gray-400">(comma separated)</span></label>
      <input type="text" name="tags" value="<?php echo htmlspecialchars($existing_tags); ?>" placeholder="security, corporate, tips"
             class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm">
    </div>
  </div>

  <div class="bg-white border border-gray-200 rounded-xl p-6 space-y-4">
    <h3 class="font-bold text-sm text-[#0A0A0A]">Featured Image</h3>
    <input type="file" id="image-input" accept="image/jpeg,image/png,image/webp" class="text-sm">
    <div id="upload-status" class="text-xs text-gray-500"></div>
    <img id="image-preview" src="<?php echo htmlspecialchars($post['featured_image'] ?? ''); ?>"
         class="<?php echo empty($post['featured_image']) ? 'hidden' : ''; ?> max-h-48 rounded-lg border border-gray-200">
    <input type="hidden" name="featured_image" id="featured_image" value="<?php echo htmlspecialchars($post['featured_image'] ?? ''); ?>">
  </div>

  <div class="bg-white border border-gray-200 rounded-xl p-6 space-y-4">
    <h3 class="font-bold text-sm text-[#0A0A0A]">SEO</h3>
    <div>
      <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Meta Title</label>
      <input type="text" name="meta_title" value="<?php echo htmlspecialchars($post['meta_title'] ?? ''); ?>"
             class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm">
    </div>
    <div>
      <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Meta Description</label>
      <textarea name="meta_description" rows="2" class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm"><?php echo htmlspecialchars($post['meta_description'] ?? ''); ?></textarea>
    </div>
  </div>

  <div class="bg-white border border-gray-200 rounded-xl p-6 space-y-4">
    <h3 class="font-bold text-sm text-[#0A0A0A]">Publishing</h3>
    <div class="flex gap-4 flex-wrap">
      <div>
        <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Status</label>
        <select name="status" id="status-select" class="border border-gray-200 rounded-lg px-3 py-2 text-sm">
          <?php foreach (['draft','scheduled','published'] as $s): ?>
          <option value="<?php echo $s; ?>" <?php echo ($post['status'] ?? 'draft') === $s ? 'selected' : ''; ?>><?php echo ucfirst($s); ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div>
        <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Publish Date/Time</label>
        <input type="datetime-local" name="publish_at" id="publish_at"
               value="<?php echo !empty($post['publish_at']) ? date('Y-m-d\TH:i', strtotime($post['publish_at'])) : ''; ?>"
               class="border border-gray-200 rounded-lg px-3 py-2 text-sm">
      </div>
    </div>
  </div>

  <div class="flex gap-3">
    <button type="submit" class="bg-[#F2CF4A] text-[#0A0A0A] font-bold px-6 py-2.5 rounded-lg text-sm">Save Post</button>
    <a href="blog.php" class="border border-gray-200 text-gray-600 font-bold px-6 py-2.5 rounded-lg text-sm">Cancel</a>
  </div>
</form>

<script>
document.getElementById('image-input').addEventListener('change', async function () {
  const file = this.files[0];
  if (!file) return;
  const status = document.getElementById('upload-status');
  status.textContent = 'Uploading...';
  status.className = 'text-xs text-gray-500';

  const formData = new FormData();
  formData.append('image', file);

  try {
    const res = await fetch('../includes/upload-blog-image.php', { method: 'POST', body: formData });
    const raw = await res.text();

    let data;
    try {
      data = JSON.parse(raw);
    } catch (parseErr) {
      console.error('Upload endpoint did not return JSON. Raw response:', raw);
      status.textContent = 'Upload failed — server returned an unexpected response (HTTP ' + res.status + '). Check browser console for details.';
      status.className = 'text-xs text-red-600';
      return;
    }

    if (data.success) {
      document.getElementById('featured_image').value = data.data.secure_url;
      const preview = document.getElementById('image-preview');
      preview.src = data.data.secure_url;
      preview.classList.remove('hidden');
      status.textContent = 'Uploaded ✓';
      status.className = 'text-xs text-green-600';
    } else {
      status.textContent = 'Error: ' + data.message;
      status.className = 'text-xs text-red-600';
    }
  } catch (err) {
    console.error('Upload request failed:', err);
    status.textContent = 'Upload failed — network or connection error. Check browser console.';
    status.className = 'text-xs text-red-600';
  }
});
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>