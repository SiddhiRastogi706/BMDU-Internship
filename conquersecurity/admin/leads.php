<?php
require_once __DIR__ . '/includes/auth.php';
$page_title = 'Leads';

// Handle status update
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_status'])) {
    $stmt = $pdo->prepare("UPDATE leads SET status = ? WHERE id = ?");
    $stmt->execute([$_POST['status'], $_POST['lead_id']]);
    header('Location: leads.php?' . http_build_query($_GET) . '&updated=1');
    exit;
}

// Filters
$status_filter = $_GET['status'] ?? '';
$search        = trim($_GET['q'] ?? '');

$where  = [];
$params = [];
if ($status_filter !== '') {
    $where[] = 'status = ?';
    $params[] = $status_filter;
}
if ($search !== '') {
    $where[] = '(name LIKE ? OR phone LIKE ? OR company LIKE ?)';
    $params[] = "%$search%"; $params[] = "%$search%"; $params[] = "%$search%";
}
$whereSql = $where ? ('WHERE ' . implode(' AND ', $where)) : '';

// Pagination
$per_page = 15;
$page = max(1, (int)($_GET['page'] ?? 1));
$total = $pdo->prepare("SELECT COUNT(*) FROM leads $whereSql");
$total->execute($params);
$total_rows = $total->fetchColumn();
$total_pages = max(1, ceil($total_rows / $per_page));
$offset = ($page - 1) * $per_page;

$stmt = $pdo->prepare("SELECT * FROM leads $whereSql ORDER BY created_at DESC LIMIT $per_page OFFSET $offset");
$stmt->execute($params);
$leads = $stmt->fetchAll();

include __DIR__ . '/includes/header.php';
?>

<!-- Filters -->
<form method="GET" class="flex flex-wrap gap-3 mb-5">
  <input type="text" name="q" value="<?php echo htmlspecialchars($search); ?>" placeholder="Search name, phone, company..." class="flex-1 min-w-[200px] px-4 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:border-[#F2CF4A]" />
  <select name="status" class="px-4 py-2.5 border border-gray-200 rounded-lg text-sm">
    <option value="">All Statuses</option>
    <?php foreach (['new','contacted','qualified','converted','lost'] as $s): ?>
    <option value="<?php echo $s; ?>" <?php echo $status_filter===$s?'selected':''; ?>><?php echo ucfirst($s); ?></option>
    <?php endforeach; ?>
  </select>
  <button type="submit" class="bg-[#0A0A0A] hover:bg-gray-800 text-white font-bold px-5 py-2.5 rounded-lg text-sm transition-colors">Filter</button>
  <?php if ($status_filter || $search): ?>
  <a href="leads.php" class="text-gray-400 hover:text-gray-600 text-sm self-center">Clear</a>
  <?php endif; ?>
</form>

<?php if (isset($_GET['updated'])): ?>
<div class="bg-green-50 border border-green-200 text-green-700 text-sm rounded-lg px-4 py-3 mb-4"><i class="fa fa-check-circle mr-1"></i> Status updated.</div>
<?php endif; ?>

<div class="bg-white border border-gray-200 rounded-xl overflow-hidden">
  <div class="overflow-x-auto">
    <table class="w-full min-w-[850px] text-sm">
      <thead>
        <tr class="bg-gray-50 text-left text-gray-500 text-xs uppercase tracking-wider">
          <th class="px-5 py-3">Name / Contact</th>
          <th class="px-5 py-3">Form</th>
          <th class="px-5 py-3">Location</th>
          <th class="px-5 py-3">Service</th>
          <th class="px-5 py-3">Status</th>
          <th class="px-5 py-3">Date</th>
          <th class="px-5 py-3 text-right">Actions</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-100">
        <?php if (empty($leads)): ?>
        <tr><td colspan="7" class="px-5 py-10 text-center text-gray-400">No leads found.</td></tr>
        <?php else: foreach ($leads as $lead): ?>
        <tr class="hover:bg-gray-50/50">
          <td class="px-5 py-3">
            <div class="font-semibold text-[#0A0A0A]"><?php echo htmlspecialchars($lead['name']); ?></div>
            <div class="text-gray-400 text-xs"><?php echo htmlspecialchars($lead['phone']); ?><?php echo $lead['email'] ? ' · ' . htmlspecialchars($lead['email']) : ''; ?></div>
          </td>
          <td class="px-5 py-3 text-gray-500 text-xs"><?php echo htmlspecialchars($lead['form_type']); ?></td>
          <td class="px-5 py-3 text-gray-500 text-xs"><?php echo htmlspecialchars($lead['location'] ?: '—'); ?></td>
          <td class="px-5 py-3 text-gray-500 text-xs"><?php echo htmlspecialchars($lead['service'] ?: '—'); ?></td>
          <td class="px-5 py-3">
            <form method="POST" class="inline">
              <input type="hidden" name="lead_id" value="<?php echo $lead['id']; ?>">
              <input type="hidden" name="update_status" value="1">
              <select name="status" onchange="this.form.submit()" class="text-[10px] font-bold uppercase px-2 py-1.5 rounded-lg border border-gray-200 focus:outline-none">
                <?php foreach (['new','contacted','qualified','converted','lost'] as $s): ?>
                <option value="<?php echo $s; ?>" <?php echo $lead['status']===$s?'selected':''; ?>><?php echo ucfirst($s); ?></option>
                <?php endforeach; ?>
              </select>
            </form>
          </td>
          <td class="px-5 py-3 text-gray-400 text-xs"><?php echo date('d M, h:i A', strtotime($lead['created_at'])); ?></td>
          <td class="px-5 py-3 text-right whitespace-nowrap">
            <button onclick="document.getElementById('view-<?php echo $lead['id']; ?>').classList.toggle('hidden')" class="text-gray-400 hover:text-[#0A0A0A] mr-3"><i class="fa fa-eye"></i></button>
            <a href="lead-delete.php?id=<?php echo $lead['id']; ?>" onclick="return confirm('Delete this lead permanently?')" class="text-gray-400 hover:text-red-500"><i class="fa fa-trash"></i></a>
          </td>
        </tr>
        <tr id="view-<?php echo $lead['id']; ?>" class="hidden bg-gray-50">
          <td colspan="7" class="px-5 py-4 text-xs text-gray-600">
            <strong>Message:</strong> <?php echo nl2br(htmlspecialchars($lead['message'] ?: 'No message provided.')); ?>
            <?php if ($lead['company']): ?><br><strong>Company/Society:</strong> <?php echo htmlspecialchars($lead['company']); ?><?php endif; ?>
          </td>
        </tr>
        <?php endforeach; endif; ?>
      </tbody>
    </table>
  </div>
</div>

<?php if ($total_pages > 1): ?>
<div class="flex justify-center gap-1 mt-5">
  <?php for ($i = 1; $i <= $total_pages; $i++): ?>
  <a href="?<?php echo http_build_query(array_merge($_GET, ['page' => $i])); ?>" class="w-8 h-8 flex items-center justify-center rounded-lg text-xs font-bold <?php echo $i===$page ? 'bg-[#0A0A0A] text-white' : 'bg-white border border-gray-200 text-gray-500 hover:border-[#F2CF4A]'; ?>"><?php echo $i; ?></a>
  <?php endfor; ?>
</div>
<?php endif; ?>

<?php include __DIR__ . '/includes/footer.php'; ?>