<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../../includes/db.php';

// Redirect to login if not authenticated
if (empty($_SESSION['admin_id'])) {
    header('Location: ' . ADMIN_BASE_URL . 'admin/login.php');
    exit;
}

// Simple 30-minute idle timeout
$timeout = 1800;
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $timeout)) {
    session_unset();
    session_destroy();
    header('Location: ' . ADMIN_BASE_URL . 'admin/login.php?expired=1');
    exit;
}
$_SESSION['last_activity'] = time();