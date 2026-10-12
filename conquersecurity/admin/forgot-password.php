<?php
if (session_status() === PHP_SESSION_NONE) session_start();
require_once __DIR__ . '/../includes/db.php';
require __DIR__ . '/../includes/PHPMailer/PHPMailer.php';
require __DIR__ . '/../includes/PHPMailer/SMTP.php';
require __DIR__ . '/../includes/PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// SMTP_EMAIL / SMTP_PASSWORD are already defined in includes/config.php,
// which was loaded above via includes/db.php — no need to redeclare them here.

$message = '';
$error   = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');

    if ($email === '') {
        $error = 'Please enter your email address.';
    } else {
        $stmt = $pdo->prepare("SELECT * FROM admin_users WHERE email = ? LIMIT 1");
        $stmt->execute([$email]);
        $admin = $stmt->fetch();

        // Always show the same message whether or not the email exists,
        // so we don't reveal which emails are registered admins.
        $message = "If an account exists for {$email}, a 6-digit code has been sent to it.";

        if ($admin) {
            $otp        = str_pad((string) random_int(0, 999999), 6, '0', STR_PAD_LEFT);
            $otp_hash   = password_hash($otp, PASSWORD_DEFAULT);
            $expires_at = date('Y-m-d H:i:s', strtotime('+10 minutes'));

            // Invalidate any older unused codes for this admin
            $pdo->prepare("UPDATE password_resets SET used = 1 WHERE admin_id = ? AND used = 0")
                ->execute([$admin['id']]);

            $pdo->prepare("INSERT INTO password_resets (admin_id, otp_hash, expires_at) VALUES (?, ?, ?)")
                ->execute([$admin['id'], $otp_hash, $expires_at]);

            // Send the OTP by email
            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = SMTP_EMAIL;
                $mail->Password   = SMTP_PASSWORD;
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port       = 587;

                $mail->setFrom(SMTP_EMAIL, 'Conquer Services Admin');
                $mail->addAddress($admin['email'], $admin['name']);
                $mail->isHTML(true);
                $mail->Subject = 'Your Admin Password Reset Code';
                $mail->Body    = "
                    <p style='font-family:sans-serif;font-size:14px;'>Hi " . htmlspecialchars($admin['name']) . ",</p>
                    <p style='font-family:sans-serif;font-size:14px;'>Your password reset code is:</p>
                    <p style='font-family:sans-serif;font-size:28px;font-weight:bold;letter-spacing:4px;'>{$otp}</p>
                    <p style='font-family:sans-serif;font-size:13px;color:#888;'>This code expires in 10 minutes. If you didn't request this, you can ignore this email.</p>
                ";
                $mail->send();

                // Remember the email in session so reset-password.php can prefill it
                $_SESSION['reset_email'] = $email;
            } catch (Exception $e) {
                error_log('OTP email failed: ' . $mail->ErrorInfo);
                // Still show the generic message — don't leak whether sending failed
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
<title>Forgot Password | Admin — Conquer Services</title>
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
      <h2 class="text-lg font-bold text-[#0A0A0A] mb-1">Forgot Password</h2>
      <p class="text-gray-500 text-xs mb-6">Enter your admin email and we'll send you a 6-digit reset code.</p>

      <?php if ($error): ?>
        <div class="bg-red-50 border border-red-200 text-red-600 text-xs rounded-lg px-4 py-3 mb-4"><?php echo htmlspecialchars($error); ?></div>
      <?php endif; ?>
      <?php if ($message): ?>
        <div class="bg-green-50 border border-green-200 text-green-700 text-xs rounded-lg px-4 py-3 mb-4"><?php echo htmlspecialchars($message); ?></div>
      <?php endif; ?>

      <form method="POST" class="space-y-4">
        <div>
          <label class="text-gray-500 text-xs font-semibold uppercase tracking-wider mb-1 block">Email</label>
          <input type="email" name="email" required class="w-full px-4 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:border-[#F2CF4A]" placeholder="admin@conquerservices.com" />
        </div>
        <button type="submit" class="w-full bg-[#0A0A0A] hover:bg-gray-800 text-white font-bold py-3 rounded-lg text-sm transition-colors">Send Reset Code</button>
      </form>

      <?php if ($message): ?>
      <a href="reset-password.php" class="mt-4 block text-center text-xs font-bold text-[#0A0A0A] hover:text-[#C9A91E]">Already have a code? Enter it here <i class="fa fa-arrow-right ml-1"></i></a>
      <?php endif; ?>

      <a href="login.php" class="mt-4 block text-center text-xs text-gray-400 hover:text-gray-600">← Back to Login</a>
    </div>
  </div>
</body>
</html>