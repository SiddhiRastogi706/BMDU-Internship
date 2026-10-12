<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use Cloudinary\Cloudinary;
use Dotenv\Dotenv;

// Project root ki .env file load karega
$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->safeLoad();

$cloudName = $_ENV['CLOUDINARY_CLOUD_NAME'] ?? '';
$apiKey = $_ENV['CLOUDINARY_API_KEY'] ?? '';
$apiSecret = $_ENV['CLOUDINARY_API_SECRET'] ?? '';

if ($cloudName === '' || $apiKey === '' || $apiSecret === '') {
    throw new RuntimeException(
        'Cloudinary credentials are missing. Please check your .env file.'
    );
}

return new Cloudinary([
    'cloud' => [
        'cloud_name' => $cloudName,
        'api_key' => $apiKey,
        'api_secret' => $apiSecret,
    ],
    'url' => [
        'secure' => true,
    ],
]);