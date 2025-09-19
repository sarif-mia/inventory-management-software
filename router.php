<?php
// router.php
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = ltrim($path, '/');

if (file_exists($path)) {
    // If the file exists, serve it directly.
    return false;
} else {
    // Otherwise, serve the index.php file.
    include 'index.php';
}
