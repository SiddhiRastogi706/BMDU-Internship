<?php
if (session_status() === PHP_SESSION_NONE) session_start();
require_once __DIR__ . '/../includes/db.php';

// Already logged in? Go straight to dashboard.
if (!empty($_SESSION['admin_id'])) {
    header('Location: ' . ADMIN_BASE_URL . 'admin/dashboard.php');
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email    = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($email === '' || $password === '') {
        $error = 'Please enter both email and password.';
    } else {
        $stmt = $pdo->prepare('SELECT * FROM admin_users WHERE email = ? LIMIT 1');
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password_hash'])) {
            $_SESSION['admin_id']    = $user['id'];
            $_SESSION['admin_name']  = $user['name'];
            $_SESSION['admin_role']  = $user['role'];
            $_SESSION['last_activity'] = time();
            header('Location: ' . ADMIN_BASE_URL . 'admin/dashboard.php');
            exit;
        } else {
            $error = 'Invalid email or password.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Login | Conquer Services</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-[#0A0A0A] min-h-screen flex items-center justify-center px-4">
  <div class="w-full max-w-sm">
    <div class="text-center mb-8">
      <h1 class="text-white font-black text-2xl">Conquer <span class="text-[#F2CF4A]">Services</span></h1>
      <p class="text-white/40 text-xs uppercase tracking-widest mt-1">Admin Panel</p>
    </div>
    <div class="bg-white rounded-2xl p-8 shadow-xl">
      <h2 class="text-lg font-bold text-[#0A0A0A] mb-6">Sign in to your account</h2>

      <?php if (isset($_GET['expired'])): ?>
        <div class="bg-yellow-50 border border-yellow-200 text-yellow-700 text-xs rounded-lg px-4 py-3 mb-4">Your session expired. Please log in again.</div>
      <?php endif; ?>
      <?php if ($error): ?>
        <div class="bg-red-50 border border-red-200 text-red-600 text-xs rounded-lg px-4 py-3 mb-4"><?php echo htmlspecialchars($error); ?></div>
      <?php endif; ?>

      <form method="POST" class="space-y-4">
        <div>
          <label class="text-gray-500 text-xs font-semibold uppercase tracking-wider mb-1 block">Email</label>
          <input type="email" name="email" required class="w-full px-4 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:border-[#F2CF4A]" placeholder="admin@conquerservices.com" />
        </div>
        <div>
          <label class="text-gray-500 text-xs font-semibold uppercase tracking-wider mb-1 block">Password</label>
          <input type="password" name="password" required class="w-full px-4 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:border-[#F2CF4A]" placeholder="••••••••" />
        </div>
        <button type="submit" class="w-full bg-[#0A0A0A] hover:bg-gray-800 text-white font-bold py-3 rounded-lg text-sm transition-colors">Sign In</button>
      </form>
      <a href="forgot-password.php" class="mt-4 block text-center text-xs font-semibold text-gray-500 hover:text-[#0A0A0A]">Forgot your password?</a>
    </div>
  </div>
</body>
</html>