<?php

declare(strict_types=1);

use Cloudinary\Cloudinary;

class CloudinaryUploader
{
    private Cloudinary $cloudinary;

    public function __construct()
    {
        $this->cloudinary = require __DIR__ . '/../config/cloudinary.php';
    }

    /**
     * Local temporary file ko Cloudinary par upload karta hai.
     *
     * @param string $localFilePath Temporary local file path
     * @param string $folderName Cloudinary folder
     * @param string $resourceType image, video, raw or auto
     *
     * @return array Cloudinary upload response
     */
    public function uploadToCloudinary(
        string $localFilePath,
        string $folderName = 'conquer11/uploads',
        string $resourceType = 'auto'
    ): array {
        $allowedResourceTypes = [
            'image',
            'video',
            'raw',
            'auto',
        ];

        if ($localFilePath === '' || !is_file($localFilePath)) {
            throw new InvalidArgumentException(
                'Upload file does not exist.'
            );
        }

        if (!in_array($resourceType, $allowedResourceTypes, true)) {
            $this->deleteLocalTemporaryFile($localFilePath);

            throw new InvalidArgumentException(
                'Invalid resource type. Allowed: image, video, raw or auto.'
            );
        }

        try {
            $uploadResult = $this->cloudinary
                ->uploadApi()
                ->upload($localFilePath, [
                    'folder' => trim($folderName, '/'),
                    'resource_type' => $resourceType,
                    'use_filename' => true,
                    'unique_filename' => true,
                    'overwrite' => false,
                ]);

            $response = [
                'secure_url' => $uploadResult['secure_url'] ?? null,
                'public_id' => $uploadResult['public_id'] ?? null,
                'asset_id' => $uploadResult['asset_id'] ?? null,
                'resource_type' => $uploadResult['resource_type']
                    ?? $resourceType,
                'format' => $uploadResult['format'] ?? null,
                'width' => $uploadResult['width'] ?? null,
                'height' => $uploadResult['height'] ?? null,
                'bytes' => $uploadResult['bytes'] ?? null,
                'created_at' => $uploadResult['created_at'] ?? null,
                'original_filename' => $uploadResult[
                    'original_filename'
                ] ?? null,
            ];

            if (empty($response['secure_url']) || empty($response['public_id'])) {
                throw new RuntimeException(
                    'Cloudinary did not return the uploaded file URL.'
                );
            }

            $this->deleteLocalTemporaryFile($localFilePath);

            return $response;
        } catch (Throwable $error) {
            $this->deleteLocalTemporaryFile($localFilePath);

            throw new RuntimeException(
                'Cloudinary upload failed: ' . $error->getMessage(),
                0,
                $error
            );
        }
    }

    /**
     * Cloudinary asset ko public ID se delete karta hai.
     */
    public function deleteFromCloudinary(
        string $publicId,
        string $resourceType = 'image'
    ): array {
        $allowedResourceTypes = [
            'image',
            'video',
            'raw',
        ];

        if (trim($publicId) === '') {
            throw new InvalidArgumentException(
                'Cloudinary public ID is required.'
            );
        }

        if (!in_array($resourceType, $allowedResourceTypes, true)) {
            throw new InvalidArgumentException(
                'Invalid delete resource type.'
            );
        }

        try {
            $deleteResult = $this->cloudinary
                ->uploadApi()
                ->destroy($publicId, [
                    'resource_type' => $resourceType,
                    'invalidate' => true,
                ]);

            return [
                'success' => ($deleteResult['result'] ?? '') === 'ok',
                'result' => $deleteResult['result'] ?? 'unknown',
                'public_id' => $publicId,
            ];
        } catch (Throwable $error) {
            throw new RuntimeException(
                'Cloudinary deletion failed: ' . $error->getMessage(),
                0,
                $error
            );
        }
    }

    /**
     * Server ki temporary local file delete karta hai.
     */
    private function deleteLocalTemporaryFile(string $filePath): void
    {
        if (is_file($filePath) && !unlink($filePath)) {
            error_log(
                'Temporary file could not be deleted: ' . $filePath
            );
        }
    }
}