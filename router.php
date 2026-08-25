<?php
/**
 * Router for PHP's built-in server, emulating the WordPress .htaccess rules.
 * Usage: php -S localhost:8080 -t /path/to/wordpress router.php
 */
$root = rtrim($_SERVER['DOCUMENT_ROOT'], '/');
$path = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$file = $root . $path;

// A directory: serve its index.php if there is one (e.g. /wp-admin/).
if (is_dir($file)) {
    $index = rtrim($file, '/') . '/index.php';
    if (is_file($index)) {
        $_SERVER['SCRIPT_NAME'] = rtrim($path, '/') . '/index.php';
        $_SERVER['SCRIPT_FILENAME'] = $index;
        require $index;
        return true;
    }
}

// A real file: let the built-in server serve or execute it.
if (is_file($file)) {
    return false;
}

// Anything else: hand it to WordPress's front controller.
$_SERVER['SCRIPT_NAME'] = '/index.php';
$_SERVER['SCRIPT_FILENAME'] = $root . '/index.php';
require $root . '/index.php';
