<?php
require_once __DIR__ . '/includes/auth.php';
$page_title = 'Comments';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $comment_id = (int)($_POST['comment_id'] ?? 0);
    if ($comment_id && isset($_POST['action'])) {
        if ($_POST['action'] === 'delete') {
            $pdo->prepare("DELETE FROM blog_comments WHERE id = ?")->execute([$comment_id]);
        } elseif (in_array($_POST['action'], ['approved', 'spam', 'pending'])) {
            $pdo->prepare("UPDATE blog_comments SET status = ? WHERE id = ?")->execute([$_POST['action'], $comment_id]);
        }
    }
    header('Location: comments.php?' . http_build_query($_GET));
    exit;
}

$status_filter = $_GET['status'] ?? 'pending';
$where = $status_filter !== 'all' ? 'WHERE c.status = ?' : '';
$params = $status_filter !== 'all' ? [$status_filter] : [];

$stmt = $pdo->prepare("
    SELECT c.*, p.title AS post_title, p.slug AS post_slug
    FROM blog_comments c
    JOIN blog_posts p ON p.id = c.post_id
    $where
    ORDER BY c.post_id, COALESCE(c.parent_id, c.id), c.parent_id IS NOT NULL, c.created_at
");
$stmt->execute($params);
$all_comments = $stmt->fetchAll();

$by_parent = [];
foreach ($all_comments as $c) {
    $by_parent[$c['parent_id'] ?? 0][] = $c;
}

$counts = $pdo->query("SELECT status, COUNT(*) c FROM blog_comments GROUP BY status")->fetchAll(PDO::FETCH_KEY_PAIR);

include __DIR__ . '/includes/header.php';

function render_comment_row($c, $depth) {
    $badge = ['pending' => 'bg-yellow-100 text-yellow-700', 'approved' => 'bg-green-100 text-green-700', 'spam' => 'bg-red-100 text-red-700'];
    $cls = $badge[$c['status']] ?? 'bg-gray-100 text-gray-600';
    ?>
    <div class="border-b border-gray-100 py-4 px-5" style="padding-left: <?php echo 20 + $depth * 32; ?>px;">
      <div class="flex items-start justify-between gap-4 flex-wrap">
        <div class="min-w-0">
          <div class="flex items-center gap-2 mb-1 flex-wrap">
            <span class="font-bold text-[#0A0A0A] text-sm"><?php echo htmlspecialchars($c['name']); ?></span>
            <span class="text-gray-400 text-xs"><?php echo htmlspecialchars($c['email']); ?></span>
            <span class="px-2 py-0.5 rounded-full text-[10px] font-bold uppercase <?php echo $cls; ?>"><?php echo $c['status']; ?></span>
          </div>
          <p class="text-gray-700 text-sm mb-1"><?php echo nl2br(htmlspecialchars($c['comment'])); ?></p>
          <div class="text-xs text-gray-400">
            on <a href="../blog/<?php echo htmlspecialchars($c['post_slug']); ?>" target="_blank" class="text-blue-600 hover:underline"><?php echo htmlspecialchars($c['post_title']); ?></a>
            · <?php echo date('d M Y, h:i A', strtotime($c['created_at'])); ?>
          </div>
        </div>
        <div class="flex gap-2 flex-shrink-0">
          <?php if ($c['status'] !== 'approved'): ?>
          <form method="post"><input type="hidden" name="comment_id" value="<?php echo $c['id']; ?>"><input type="hidden" name="action" value="approved">
            <button class="text-green-600 hover:underline text-xs font-bold">Approve</button></form>
          <?php endif; ?>
          <?php if ($c['status'] !== 'spam'): ?>
          <form method="post"><input type="hidden" name="comment_id" value="<?php echo $c['id']; ?>"><input type="hidden" name="action" value="spam">
            <button class="text-yellow-600 hover:underline text-xs font-bold">Spam</button></form>
          <?php endif; ?>
          <form method="post" onsubmit="return confirm('Delete this comment and any replies to it?');">
            <input type="hidden" name="comment_id" value="<?php echo $c['id']; ?>"><input type="hidden" name="action" value="delete">
            <button class="text-red-600 hover:underline text-xs font-bold">Delete</button>
          </form>
        </div>
      </div>
    </div>
    <?php
}

function render_thread($by_parent, $parent_id, $depth) {
    if (empty($by_parent[$parent_id])) return;
    foreach ($by_parent[$parent_id] as $c) {
        render_comment_row($c, $depth);
        render_thread($by_parent, $c['id'], $depth + 1);
    }
}
?>

<div class="flex gap-2 mb-6">
  <?php foreach (['pending' => 'Pending', 'approved' => 'Approved', 'spam' => 'Spam', 'all' => 'All'] as $key => $label): ?>
  <a href="?status=<?php echo $key; ?>"
     class="px-4 py-2 rounded-lg text-sm font-bold <?php echo $status_filter === $key ? 'bg-[#0A0A0A] text-white' : 'bg-gray-100 text-gray-600'; ?>">
    <?php echo $label; ?> <?php if ($key !== 'all'): ?>(<?php echo $counts[$key] ?? 0; ?>)<?php endif; ?>
  </a>
  <?php endforeach; ?>
</div>

<div class="bg-white border border-gray-200 rounded-xl overflow-hidden">
  <?php if (empty($all_comments)): ?>
  <div class="px-5 py-10 text-center text-gray-400">No comments here.</div>
  <?php else: ?>
    <?php
    if (!empty($by_parent[0])) {
        foreach ($by_parent[0] as $c) {
            render_comment_row($c, 0);
            render_thread($by_parent, $c['id'], 1);
        }
    }
    ?>
  <?php endif; ?>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>