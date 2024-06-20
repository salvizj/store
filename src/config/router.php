<?php
$request_uri = $_SERVER['REQUEST_URI'];
$base_path = '/store-php';

$path = substr($request_uri, strlen($base_path));

if (preg_match('~^/(en|lv)$~', $path, $matches)) {
    $lang = $matches[1];
    $current_path = preg_replace('~^/(en|lv)~', '', $path);
    header("Location: {$base_path}{$current_path}?lang={$lang}");
    exit;
}

$routes = [
    '/' => 'src/controllers/home.php',
    '/sign-up' => 'src/controllers/sign-up.php',
    '/sign-in' => 'src/controllers/sign-in.php'
];

if (array_key_exists($path, $routes)) {
    include $routes[$path];
} else {
    http_response_code(404);
    echo '<h1>404 Not Found</h1>';
    echo '<p>The page you requested could not be found.</p>';
    exit;
}
?>