<?php

declare(strict_types=1);

require_once __DIR__ . '/../utils/CloudinaryUploader.php';

function sendJsonResponse(bool $success, string $message, array $data = [], int $statusCode = 200): never
{
    http_response_code($statusCode);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['success' => $success, 'message' => $message, 'data' => $data], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    exit;
}

$temporaryFilePath = null;

try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        sendJsonResponse(false, 'Only POST request is allowed.', [], 405);
    }

    if (!isset($_FILES['image'])) {
        throw new RuntimeException('Please select an image.');
    }

    $uploadedFile = $_FILES['image'];

    if ($uploadedFile['error'] !== UPLOAD_ERR_OK) {
        throw new RuntimeException('File upload error code: ' . $uploadedFile['error']);
    }

    $maximumFileSize = 5 * 1024 * 1024;
    if ($uploadedFile['size'] > $maximumFileSize) {
        throw new RuntimeException('Image size must be less than 5 MB.');
    }

    $allowedMimeTypes = ['image/jpeg' => 'jpg', 'image/png' => 'png', 'image/webp' => 'webp'];
    $fileInfo = new finfo(FILEINFO_MIME_TYPE);
    $mimeType = $fileInfo->file($uploadedFile['tmp_name']);

    if ($mimeType === false || !array_key_exists($mimeType, $allowedMimeTypes)) {
        throw new RuntimeException('Only JPG, PNG and WebP images are allowed.');
    }

    $temporaryDirectory = __DIR__ . '/../uploads/temp/';
    if (!is_dir($temporaryDirectory) && !mkdir($temporaryDirectory, 0755, true) && !is_dir($temporaryDirectory)) {
        throw new RuntimeException('Temporary upload directory could not be created.');
    }

    $temporaryFilePath = $temporaryDirectory . uniqid('blog_', true) . '.' . $allowedMimeTypes[$mimeType];

    if (!move_uploaded_file($uploadedFile['tmp_name'], $temporaryFilePath)) {
        throw new RuntimeException('Could not save temporary uploaded file.');
    }

    $cloudinaryUploader = new CloudinaryUploader();
    $uploadResponse = $cloudinaryUploader->uploadToCloudinary($temporaryFilePath, 'conquer11/blog', 'image');

    if (is_file($temporaryFilePath)) {
        unlink($temporaryFilePath);
    }
    $temporaryFilePath = null;

    sendJsonResponse(true, 'Image uploaded successfully.', $uploadResponse);
} catch (Throwable $error) {
    if ($temporaryFilePath !== null && is_file($temporaryFilePath)) {
        unlink($temporaryFilePath);
    }
    sendJsonResponse(false, $error->getMessage(), [], 400);
}