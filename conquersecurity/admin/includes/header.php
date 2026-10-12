<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo isset($page_title) ? $page_title . ' | ' : ''; ?>Admin Panel — Conquer Services</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-50 min-h-screen">

<div class="flex min-h-screen">

  <!-- Sidebar -->
  <aside class="w-16 sm:w-56 bg-[#0A0A0A] flex-shrink-0 flex flex-col">
    <div class="h-16 flex items-center justify-center sm:justify-start sm:px-5 border-b border-white/10">
      <span class="hidden sm:block text-white font-black text-sm">Conquer <span class="text-[#F2CF4A]">Admin</span></span>
      <span class="sm:hidden text-[#F2CF4A] font-black text-lg">C</span>
    </div>
    <nav class="flex-1 py-4 space-y-1">
      <?php
        $nav_items = [
  ['href' => 'dashboard.php', 'icon' => 'fa-gauge', 'label' => 'Dashboard'],
  ['href' => 'leads.php',     'icon' => 'fa-users',  'label' => 'Leads'],
  ['href' => 'blog.php',      'icon' => 'fa-newspaper', 'label' => 'Blog'],
  ['href' => 'comments.php',  'icon' => 'fa-comments',  'label' => 'Comments'],
];
        $current = basename($_SERVER['SCRIPT_NAME']);
foreach ($nav_items as $item):
  $item_base = str_replace('.php', '', $item['href']);
  $active = ($current === $item['href']) || strpos($current, $item_base) === 0;
      ?>
      <a href="<?php echo $item['href']; ?>" class="flex items-center gap-3 px-5 sm:px-5 py-3 justify-center sm:justify-start text-sm transition-colors <?php echo $active ? 'bg-[#F2CF4A] text-[#0A0A0A] font-bold' : 'text-white/60 hover:text-white hover:bg-white/5'; ?>">
        <i class="fa <?php echo $item['icon']; ?> w-4 text-center"></i>
        <span class="hidden sm:inline"><?php echo $item['label']; ?></span>
      </a>
      <?php endforeach; ?>
    </nav>
    <div class="border-t border-white/10 p-3">
      <a href="logout.php" class="flex items-center gap-3 px-2 py-2.5 justify-center sm:justify-start text-white/60 hover:text-red-400 text-sm transition-colors">
        <i class="fa fa-right-from-bracket w-4 text-center"></i>
        <span class="hidden sm:inline">Logout</span>
      </a>
    </div>
  </aside>

  <!-- Main content -->
  <div class="flex-1 flex flex-col min-w-0">
    <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-4 sm:px-8">
      <h1 class="font-bold text-[#0A0A0A] text-base sm:text-lg"><?php echo $page_title ?? 'Dashboard'; ?></h1>
      <div class="flex items-center gap-2 text-xs sm:text-sm text-gray-500">
        <i class="fa fa-user-circle text-lg"></i>
        <span class="hidden sm:inline"><?php echo htmlspecialchars($_SESSION['admin_name'] ?? 'Admin'); ?></span>
      </div>
    </header>
    <main class="flex-1 p-4 sm:p-8">