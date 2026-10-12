<?php
require_once __DIR__ . '/includes/auth.php';
$page_title = 'Blog Posts';

$search = trim($_GET['q'] ?? '');
$status_filter = $_GET['status'] ?? '';

$where = [];
$params = [];
if ($search !== '') {
    $where[] = '(title LIKE ? OR excerpt LIKE ?)';
    $params[] = "%$search%"; $params[] = "%$search%";
}
if ($status_filter !== '') {
    $where[] = 'status = ?';
    $params[] = $status_filter;
}
$whereSql = $where ? ('WHERE ' . implode(' AND ', $where)) : '';

$per_page = 15;
$page = max(1, (int)($_GET['page'] ?? 1));
$total = $pdo->prepare("SELECT COUNT(*) FROM blog_posts $whereSql");
$total->execute($params);
$total_rows = $total->fetchColumn();
$total_pages = max(1, ceil($total_rows / $per_page));
$offset = ($page - 1) * $per_page;

$stmt = $pdo->prepare("SELECT * FROM blog_posts $whereSql ORDER BY created_at DESC LIMIT $per_page OFFSET $offset");
$stmt->execute($params);
$posts = $stmt->fetchAll();

include __DIR__ . '/includes/header.php';
?>

<div class="flex items-center justify-between mb-6 gap-3 flex-wrap">
  <form method="get" class="flex gap-2 flex-wrap">
    <input type="text" name="q" value="<?php echo htmlspecialchars($search); ?>" placeholder="Search posts..."
           class="border border-gray-200 rounded-lg px-3 py-2 text-sm w-56">
    <select name="status" class="border border-gray-200 rounded-lg px-3 py-2 text-sm">
      <option value="">All Status</option>
      <?php foreach (['draft','scheduled','published'] as $s): ?>
      <option value="<?php echo $s; ?>" <?php echo $status_filter === $s ? 'selected' : ''; ?>><?php echo ucfirst($s); ?></option>
      <?php endforeach; ?>
    </select>
    <button class="bg-[#0A0A0A] text-white text-sm font-bold px-4 py-2 rounded-lg">Filter</button>
  </form>
  <a href="blog-form.php" class="bg-[#F2CF4A] text-[#0A0A0A] text-sm font-bold px-4 py-2 rounded-lg flex items-center gap-2">
    <i class="fa fa-plus"></i> New Post
  </a>
</div>

<div class="bg-white border border-gray-200 rounded-xl overflow-hidden">
  <div class="overflow-x-auto">
    <table class="w-full min-w-[700px] text-sm">
      <thead>
        <tr class="bg-gray-50 text-left text-gray-500 text-xs uppercase tracking-wider">
          <th class="px-5 py-3">Title</th>
          <th class="px-5 py-3">Status</th>
          <th class="px-5 py-3">Views</th>
          <th class="px-5 py-3">Publish Date</th>
          <th class="px-5 py-3 text-right">Actions</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-100">
        <?php if (empty($posts)): ?>
        <tr><td colspan="5" class="px-5 py-8 text-center text-gray-400">No posts yet.</td></tr>
        <?php else: foreach ($posts as $post): ?>
        <tr>
          <td class="px-5 py-3 font-semibold text-[#0A0A0A]"><?php echo htmlspecialchars($post['title']); ?></td>
          <td class="px-5 py-3">
            <?php
              $badge = ['draft'=>'bg-gray-100 text-gray-600','scheduled'=>'bg-yellow-100 text-yellow-700','published'=>'bg-green-100 text-green-700'];
              $cls = $badge[$post['status']] ?? 'bg-gray-100 text-gray-600';
            ?>
            <span class="px-2.5 py-1 rounded-full text-[10px] font-bold uppercase <?php echo $cls; ?>"><?php echo $post['status']; ?></span>
          </td>
          <td class="px-5 py-3 text-gray-500"><?php echo (int)$post['view_count']; ?></td>
          <td class="px-5 py-3 text-gray-400 text-xs">
            <?php echo $post['publish_at'] ? date('d M Y, h:i A', strtotime($post['publish_at'])) : '—'; ?>
          </td>
          <td class="px-5 py-3 text-right space-x-3 whitespace-nowrap">
            <a href="blog-form.php?id=<?php echo $post['id']; ?>" class="text-blue-600 hover:underline text-xs font-bold">Edit</a>
            <a href="blog-delete.php?id=<?php echo $post['id']; ?>"
               onclick="return confirm('Delete this post permanently?');"
               class="text-red-600 hover:underline text-xs font-bold">Delete</a>
          </td>
        </tr>
        <?php endforeach; endif; ?>
      </tbody>
    </table>
  </div>
  <?php if ($total_pages > 1): ?>
  <div class="flex items-center justify-between px-5 py-4 border-t border-gray-200 text-sm">
    <span class="text-gray-500">Page <?php echo $page; ?> of <?php echo $total_pages; ?></span>
    <div class="flex gap-2">
      <?php for ($i = 1; $i <= $total_pages; $i++): ?>
      <a href="?page=<?php echo $i; ?>&q=<?php echo urlencode($search); ?>&status=<?php echo urlencode($status_filter); ?>"
         class="w-8 h-8 flex items-center justify-center rounded-lg <?php echo $i === $page ? 'bg-[#0A0A0A] text-white' : 'bg-gray-100 text-gray-600'; ?>">
        <?php echo $i; ?>
      </a>
      <?php endfor; ?>
    </div>
  </div>
  <?php endif; ?>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>