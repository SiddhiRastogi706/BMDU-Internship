<?php
require_once __DIR__ . '/includes/auth.php';

if (!empty($_GET['id'])) {
    $stmt = $pdo->prepare("DELETE FROM leads WHERE id = ?");
    $stmt->execute([$_GET['id']]);
}

header('Location: leads.php');
exit;