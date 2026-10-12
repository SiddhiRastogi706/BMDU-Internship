<?php
// ── Database connection ──────────────────────────────────
// Update these if your local/live DB credentials differ.
// NOTE: Your local XAMPP MySQL is running on port 3309 (not the default 3306) —
// confirmed from your phpMyAdmin screenshot ("Server: 127.0.0.1:3309").
// This usually happens when another MySQL instance is already using 3306.
define('DB_HOST', 'localhost');
define('DB_PORT', '3306');   // change back to '3306' if you fix the port conflict later, or on live server
define('DB_NAME', 'conquer_services');
define('DB_USER', 'root');
define('DB_PASS', '');

try {
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME . ";charset=utf8mb4",
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_TIMEOUT            => 3, // fail fast instead of hanging if MySQL is down
        ]
    );
} catch (PDOException $e) {
    // On localhost, show the real error so we can debug it.
    // On a live server, this always shows the generic message (never leaks DB details to visitors).
    $is_local = in_array($_SERVER['REMOTE_ADDR'] ?? '', ['127.0.0.1', '::1']) || strpos($_SERVER['HTTP_HOST'] ?? '', 'localhost') !== false;

    if ($is_local) {
        die('Database connection failed: ' . $e->getMessage());
    } else {
        die('Database connection failed. Please check your DB credentials in includes/db.php.');
    }
}

// ── Portable BASE_URL detection (works on XAMPP subfolder AND live domain root) ──
if (!defined('ADMIN_BASE_URL')) {
    $script = str_replace('\\', '/', $_SERVER['SCRIPT_NAME']);
    $root   = preg_replace('#/admin/.*$#', '', $script);
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
    define('ADMIN_BASE_URL', $protocol . $_SERVER['HTTP_HOST'] . $root . '/');
}