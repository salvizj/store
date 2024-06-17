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

switch ($path) {
    case '/':
        $route = '/';
        break;
    case '/sign-up':
        $route = '/sign-up';
        break;
    case '/sign-in':
        $route = '/sign-in';
        break;
    default:
        $route = '/404'; 
        http_response_code(404);
        echo '<h1>404 Not Found</h1>';
        echo '<p>The page you requested could not be found.</p>';
        exit; 
}

?>