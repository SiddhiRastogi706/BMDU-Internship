<?php
require_once __DIR__ . '/../includes/db.php';

$slug = trim($_GET['slug'] ?? '');
if ($slug === '') {
    header('HTTP/1.0 404 Not Found');
    include __DIR__ . '/../404.php';
    exit;
}

$stmt = $pdo->prepare("
    SELECT * FROM blog_posts
    WHERE slug = ?
      AND status = 'published'
      AND (publish_at IS NULL OR publish_at <= NOW())
    LIMIT 1
");
$stmt->execute([$slug]);
$post = $stmt->fetch();

if (!$post) {
    header('HTTP/1.0 404 Not Found');
    include __DIR__ . '/../404.php';
    exit;
}

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$viewed_key = 'viewed_post_' . $post['id'];
if (empty($_SESSION[$viewed_key])) {
    $pdo->prepare("UPDATE blog_posts SET view_count = view_count + 1 WHERE id = ?")->execute([$post['id']]);
    $_SESSION[$viewed_key] = true;
    $post['view_count']++;
}

$tagStmt = $pdo->prepare("SELECT t.name FROM blog_tags t JOIN blog_post_tags pt ON pt.tag_id = t.id WHERE pt.post_id = ?");
$tagStmt->execute([$post['id']]);
$tags = array_column($tagStmt->fetchAll(), 'name');

$comment_submitted = false;
$comment_error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['comment'])) {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $comment = trim($_POST['comment'] ?? '');
    $parent_id = !empty($_POST['parent_id']) ? (int)$_POST['parent_id'] : null;

    if ($name === '' || $email === '' || $comment === '') {
        $comment_error = 'Please fill in your name, email, and comment.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $comment_error = 'Please enter a valid email address.';
    } else {
        $ins = $pdo->prepare("INSERT INTO blog_comments (post_id, parent_id, name, email, comment, status) VALUES (?,?,?,?,?, 'pending')");
        $ins->execute([$post['id'], $parent_id, $name, $email, $comment]);
        $comment_submitted = true;
    }
}

$cStmt = $pdo->prepare("SELECT * FROM blog_comments WHERE post_id = ? AND status = 'approved' ORDER BY COALESCE(parent_id, id), parent_id IS NOT NULL, created_at");
$cStmt->execute([$post['id']]);
$all_comments = $cStmt->fetchAll();
$by_parent = [];
foreach ($all_comments as $c) {
    $by_parent[$c['parent_id'] ?? 0][] = $c;
}

$page_title       = ($post['meta_title'] ?: $post['title']) . ' — Conquer Services Blog';
$page_description = $post['meta_description'] ?: $post['excerpt'];
$active_page      = 'blog';
$base_path        = '../';
include __DIR__ . '/../includes/header.php';

function render_comment($c, $by_parent, $depth, $post_slug) {
    ?>
    <div class="border-b border-gray-100 py-5" style="margin-left: <?php echo $depth * 32; ?>px;">
      <div class="flex items-center gap-2 mb-1">
        <span class="font-bold text-brand-dark text-sm"><?php echo htmlspecialchars($c['name']); ?></span>
        <span class="text-gray-400 text-xs"><?php echo date('d M Y', strtotime($c['created_at'])); ?></span>
      </div>
      <p class="text-gray-600 text-sm mb-2"><?php echo nl2br(htmlspecialchars($c['comment'])); ?></p>
      <button type="button" onclick="showReplyForm(<?php echo $c['id']; ?>)" class="text-xs font-bold text-brand-dark hover:text-[#C9A91E]">Reply</button>
      <div id="reply-form-<?php echo $c['id']; ?>" class="hidden mt-3"><?php render_comment_form($post_slug, $c['id']); ?></div>
      <?php
      if (!empty($by_parent[$c['id']])) {
          foreach ($by_parent[$c['id']] as $child) {
              render_comment($child, $by_parent, $depth + 1, $post_slug);
          }
      }
      ?>
    </div>
    <?php
}

function render_comment_form($post_slug, $parent_id = null) {
    ?>
    <form method="post" class="space-y-3 bg-gray-50 rounded-xl p-4">
      <input type="hidden" name="parent_id" value="<?php echo $parent_id ? (int)$parent_id : ''; ?>">
      <div class="grid sm:grid-cols-2 gap-3">
        <input type="text" name="name" required placeholder="Your name" class="border border-gray-200 rounded-lg px-3 py-2 text-sm">
        <input type="email" name="email" required placeholder="Your email" class="border border-gray-200 rounded-lg px-3 py-2 text-sm">
      </div>
      <textarea name="comment" required rows="3" placeholder="Write a comment..." class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm"></textarea>
      <button type="submit" class="bg-brand-dark text-white text-sm font-bold px-5 py-2 rounded-lg">Post Comment</button>
    </form>
    <?php
}
?>

<article class="py-16 bg-white">
  <div class="max-w-3xl mx-auto px-4 sm:px-6">

    <?php if (!empty($tags)): ?>
    <div class="flex flex-wrap gap-2 mb-4">
      <?php foreach ($tags as $tag): ?>
      <span class="bg-brand-yellow/20 text-brand-dark text-[11px] font-bold uppercase tracking-wider px-3 py-1 rounded-full"><?php echo htmlspecialchars($tag); ?></span>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>

    <h1 class="font-display font-black text-3xl sm:text-4xl text-brand-dark leading-tight mb-4"><?php echo htmlspecialchars($post['title']); ?></h1>

    <div class="flex items-center gap-4 text-gray-400 text-xs mb-8">
      <span><i class="fa fa-calendar-alt mr-1"></i><?php echo date('d M Y', strtotime($post['publish_at'] ?: $post['created_at'])); ?></span>
      <span><i class="fa fa-eye mr-1"></i><?php echo (int)$post['view_count']; ?> views</span>
    </div>

    <?php if (!empty($post['featured_image'])): ?>
    <img src="<?php echo htmlspecialchars($post['featured_image']); ?>" alt="<?php echo htmlspecialchars($post['title']); ?>" class="w-full rounded-2xl mb-10 object-cover">
    <?php endif; ?>

    <div class="prose max-w-none text-gray-700 leading-relaxed mb-16">
      <?php echo $post['content']; // trusted admin-authored HTML ?>
    </div>

    <hr class="border-gray-200 mb-10">

    <h2 class="font-display font-bold text-2xl text-brand-dark mb-6">Comments (<?php echo count($all_comments); ?>)</h2>

    <?php if ($comment_submitted): ?>
    <div class="bg-green-50 border border-green-200 text-green-700 text-sm rounded-lg p-4 mb-6">
      Thanks! Your comment has been submitted and will appear once approved.
    </div>
    <?php elseif ($comment_error): ?>
    <div class="bg-red-50 border border-red-200 text-red-700 text-sm rounded-lg p-4 mb-6"><?php echo htmlspecialchars($comment_error); ?></div>
    <?php endif; ?>

    <div class="mb-10">
      <?php if (!empty($by_parent[0])) foreach ($by_parent[0] as $c) render_comment($c, $by_parent, 0, $slug); ?>
      <?php if (empty($all_comments)): ?>
      <p class="text-gray-400 text-sm">Be the first to comment.</p>
      <?php endif; ?>
    </div>

    <h3 class="font-bold text-brand-dark text-base mb-4">Leave a Comment</h3>
    <?php render_comment_form($slug); ?>

  </div>
</article>

<script>
function showReplyForm(id) {
  const form = document.getElementById('reply-form-' + id);
  form.classList.toggle('hidden');
}
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>