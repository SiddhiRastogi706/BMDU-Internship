
<?php

define(
    'CLOUDINARY_CLOUD_NAME',
    'gg0gqaua'
);

function cloudinaryImage(
    string $path,
    string $transformation = 'f_auto,q_auto'
): string {
    return 'https://res.cloudinary.com/'
        . CLOUDINARY_CLOUD_NAME
        . '/image/upload/'
        . $transformation
        . '/'
        . ltrim($path, '/');
}

function cloudinaryVideo(
    string $path,
    string $transformation = 'q_auto'
): string {
    return 'https://res.cloudinary.com/'
        . CLOUDINARY_CLOUD_NAME
        . '/video/upload/'
        . $transformation
        . '/'
        . ltrim($path, '/');
}