<?php
if (session_status() === PHP_SESSION_NONE) session_start();
require_once __DIR__ . '/../includes/db.php';

$error   = '';
$success = false;
$prefill_email = $_SESSION['reset_email'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email    = trim($_POST['email'] ?? '');
    $otp      = trim($_POST['otp'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm  = $_POST['confirm_password'] ?? '';

    if ($email === '' || $otp === '' || $password === '' || $confirm === '') {
        $error = 'Please fill in all fields.';
    } elseif (strlen($password) < 8) {
        $error = 'New password must be at least 8 characters.';
    } elseif ($password !== $confirm) {
        $error = 'Passwords do not match.';
    } else {
        $stmt = $pdo->prepare("SELECT * FROM admin_users WHERE email = ? LIMIT 1");
        $stmt->execute([$email]);
        $admin = $stmt->fetch();

        if (!$admin) {
            $error = 'Invalid email or code.';
        } else {
            // Get the most recent unused, unexpired reset code for this admin
            $stmt = $pdo->prepare(
                "SELECT * FROM password_resets
                 WHERE admin_id = ? AND used = 0 AND expires_at >= NOW()
                 ORDER BY id DESC LIMIT 1"
            );
            $stmt->execute([$admin['id']]);
            $reset = $stmt->fetch();

            if (!$reset || !password_verify($otp, $reset['otp_hash'])) {
                $error = 'Invalid or expired code. Please request a new one.';
            } else {
                // All good — update the password and burn the code
                $new_hash = password_hash($password, PASSWORD_DEFAULT);
                $pdo->prepare("UPDATE admin_users SET password_hash = ? WHERE id = ?")
                    ->execute([$new_hash, $admin['id']]);
                $pdo->prepare("UPDATE password_resets SET used = 1 WHERE id = ?")
                    ->execute([$reset['id']]);

                unset($_SESSION['reset_email']);
                $success = true;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reset Password | Admin — Conquer Services</title>
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

      <?php if ($success): ?>
        <div class="text-center">
          <div class="w-14 h-14 rounded-full bg-green-100 flex items-center justify-center mx-auto mb-4">
            <i class="fa fa-check text-green-600 text-2xl"></i>
          </div>
          <h2 class="text-lg font-bold text-[#0A0A0A] mb-2">Password Reset!</h2>
          <p class="text-gray-500 text-xs mb-6">Your password has been updated. You can now log in with your new password.</p>
          <a href="login.php" class="block w-full bg-[#0A0A0A] hover:bg-gray-800 text-white font-bold py-3 rounded-lg text-sm transition-colors">Go to Login</a>
        </div>
      <?php else: ?>

        <h2 class="text-lg font-bold text-[#0A0A0A] mb-1">Reset Password</h2>
        <p class="text-gray-500 text-xs mb-6">Enter the 6-digit code sent to your email along with your new password.</p>

        <?php if ($error): ?>
          <div class="bg-red-50 border border-red-200 text-red-600 text-xs rounded-lg px-4 py-3 mb-4"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>

        <form method="POST" class="space-y-4">
          <div>
            <label class="text-gray-500 text-xs font-semibold uppercase tracking-wider mb-1 block">Email</label>
            <input type="email" name="email" required value="<?php echo htmlspecialchars($prefill_email); ?>" class="w-full px-4 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:border-[#F2CF4A]" placeholder="admin@conquerservices.com" />
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold uppercase tracking-wider mb-1 block">6-Digit Code</label>
            <input type="text" name="otp" required maxlength="6" pattern="\d{6}" class="w-full px-4 py-2.5 border border-gray-200 rounded-lg text-sm tracking-[6px] text-center font-bold focus:outline-none focus:border-[#F2CF4A]" placeholder="000000" />
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold uppercase tracking-wider mb-1 block">New Password</label>
            <input type="password" name="password" required minlength="8" class="w-full px-4 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:border-[#F2CF4A]" placeholder="At least 8 characters" />
          </div>
          <div>
            <label class="text-gray-500 text-xs font-semibold uppercase tracking-wider mb-1 block">Confirm New Password</label>
            <input type="password" name="confirm_password" required minlength="8" class="w-full px-4 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:border-[#F2CF4A]" placeholder="Re-enter new password" />
          </div>
          <button type="submit" class="w-full bg-[#0A0A0A] hover:bg-gray-800 text-white font-bold py-3 rounded-lg text-sm transition-colors">Reset Password</button>
        </form>

        <a href="forgot-password.php" class="mt-4 block text-center text-xs text-gray-400 hover:text-gray-600">Didn't get a code? Request again</a>
      <?php endif; ?>

    </div>
  </div>
</body>
</html>