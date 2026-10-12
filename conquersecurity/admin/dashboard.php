<?php
require_once __DIR__ . '/includes/auth.php';
$page_title = 'Dashboard';

$total_leads   = $pdo->query("SELECT COUNT(*) FROM leads")->fetchColumn();
$new_leads     = $pdo->query("SELECT COUNT(*) FROM leads WHERE status = 'new'")->fetchColumn();
$week_leads    = $pdo->query("SELECT COUNT(*) FROM leads WHERE created_at >= DATE_SUB(NOW(), INTERVAL 7 DAY)")->fetchColumn();
$total_posts   = $pdo->query("SELECT COUNT(*) FROM blog_posts")->fetchColumn();
$published     = $pdo->query("SELECT COUNT(*) FROM blog_posts WHERE status = 'published'")->fetchColumn();
$pending_comments = (int)$pdo->query("SELECT COUNT(*) FROM blog_comments WHERE status = 'pending'")->fetchColumn();

$recent_leads = $pdo->query("SELECT * FROM leads ORDER BY created_at DESC LIMIT 6")->fetchAll();

include __DIR__ . '/includes/header.php';
?>

<div class="grid grid-cols-2 lg:grid-cols-5 gap-3 sm:gap-4 mb-8">
  <div class="bg-white border border-gray-200 rounded-xl p-4 sm:p-5">
    <div class="w-9 h-9 rounded-lg bg-[#F2CF4A]/20 flex items-center justify-center mb-3"><i class="fa fa-users text-[#0A0A0A]"></i></div>
    <div class="text-2xl font-black text-[#0A0A0A]"><?php echo $total_leads; ?></div>
    <div class="text-gray-500 text-xs mt-1">Total Leads</div>
  </div>
  <div class="bg-white border border-gray-200 rounded-xl p-4 sm:p-5">
    <div class="w-9 h-9 rounded-lg bg-blue-100 flex items-center justify-center mb-3"><i class="fa fa-bell text-blue-600"></i></div>
    <div class="text-2xl font-black text-[#0A0A0A]"><?php echo $new_leads; ?></div>
    <div class="text-gray-500 text-xs mt-1">New (Unactioned)</div>
  </div>
  <div class="bg-white border border-gray-200 rounded-xl p-4 sm:p-5">
    <div class="w-9 h-9 rounded-lg bg-green-100 flex items-center justify-center mb-3"><i class="fa fa-calendar-week text-green-600"></i></div>
    <div class="text-2xl font-black text-[#0A0A0A]"><?php echo $week_leads; ?></div>
    <div class="text-gray-500 text-xs mt-1">Leads This Week</div>
  </div>
  <div class="bg-white border border-gray-200 rounded-xl p-4 sm:p-5">
    <div class="w-9 h-9 rounded-lg bg-purple-100 flex items-center justify-center mb-3"><i class="fa fa-newspaper text-purple-600"></i></div>
    <div class="text-2xl font-black text-[#0A0A0A]"><?php echo $published; ?>/<?php echo $total_posts; ?></div>
    <div class="text-gray-500 text-xs mt-1">Published Posts</div>
  </div>
  <div class="bg-white border border-gray-200 rounded-xl p-4 sm:p-5">
  <div class="w-9 h-9 rounded-lg bg-yellow-100 flex items-center justify-center mb-3"><i class="fa fa-comments text-yellow-600"></i></div>
  <div class="text-2xl font-black text-[#0A0A0A]"><?php echo $pending_comments; ?></div>
  <div class="text-gray-500 text-xs mt-1">Comments Awaiting Review</div>
</div>
</div>

<div class="bg-white border border-gray-200 rounded-xl overflow-hidden">
  <div class="flex items-center justify-between px-5 py-4 border-b border-gray-200">
    <h3 class="font-bold text-[#0A0A0A] text-sm">Recent Leads</h3>
    <a href="leads.php" class="text-xs font-bold text-[#0A0A0A] hover:text-[#C9A91E]">View All <i class="fa fa-arrow-right ml-1"></i></a>
  </div>
  <div class="overflow-x-auto">
    <table class="w-full min-w-[600px] text-sm">
      <thead>
        <tr class="bg-gray-50 text-left text-gray-500 text-xs uppercase tracking-wider">
          <th class="px-5 py-3">Name</th>
          <th class="px-5 py-3">Phone</th>
          <th class="px-5 py-3">Form</th>
          <th class="px-5 py-3">Status</th>
          <th class="px-5 py-3">Date</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-100">
        <?php if (empty($recent_leads)): ?>
        <tr><td colspan="5" class="px-5 py-8 text-center text-gray-400">No leads yet. They'll show up here as soon as someone submits a form.</td></tr>
        <?php else: foreach ($recent_leads as $lead): ?>
        <tr>
          <td class="px-5 py-3 font-semibold text-[#0A0A0A]"><?php echo htmlspecialchars($lead['name']); ?></td>
          <td class="px-5 py-3 text-gray-500"><?php echo htmlspecialchars($lead['phone']); ?></td>
          <td class="px-5 py-3 text-gray-500"><?php echo htmlspecialchars($lead['form_type']); ?></td>
          <td class="px-5 py-3">
            <?php
              $badge = ['new'=>'bg-blue-100 text-blue-700','contacted'=>'bg-yellow-100 text-yellow-700','qualified'=>'bg-purple-100 text-purple-700','converted'=>'bg-green-100 text-green-700','lost'=>'bg-red-100 text-red-700'];
              $cls = $badge[$lead['status']] ?? 'bg-gray-100 text-gray-600';
            ?>
            <span class="px-2.5 py-1 rounded-full text-[10px] font-bold uppercase <?php echo $cls; ?>"><?php echo $lead['status']; ?></span>
          </td>
          <td class="px-5 py-3 text-gray-400 text-xs"><?php echo date('d M, h:i A', strtotime($lead['created_at'])); ?></td>
        </tr>
        <?php endforeach; endif; ?>
      </tbody>
    </table>
  </div>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>