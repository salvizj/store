<?php
session_start();

$default_language = 'en';

function set_language($lang) {
    $_SESSION['lang'] = $lang;
    setcookie('lang', $lang, [
        'expires' => time() + (86400 * 30), 
        'path' => '/',
        'domain' => $_SERVER['HTTP_HOST'],
        'secure' => true,
        'httponly' => true,
        'samesite' => 'None', 
    ]);
}

if (isset($_GET['lang']) && ($_GET['lang'] === 'en' || $_GET['lang'] === 'lv')) {
    $selected_language = $_GET['lang'];
    set_language($selected_language);
    echo json_encode(['success' => true]);
    exit; 
} else {
    if (isset($_SESSION['lang'])) {
        $selected_language = $_SESSION['lang'];
    } elseif (isset($_COOKIE['lang'])) {
        $selected_language = $_COOKIE['lang'];
    } else {
        $selected_language = $default_language;
        set_language($selected_language);
    }
}

require_once 'src/language/' . $selected_language . '.php';

global $lang;

function lang($key) {
    global $lang;
    return isset($lang[$key]) ? $lang[$key] : $key;
}
?>