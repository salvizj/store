<?php
session_start();

$default_language = 'en';

function getLanguage() {
    if (isset($_COOKIE['lang'])) {
        return $_COOKIE['lang'];
    } elseif (isset($_SESSION['lang'])) {
        return $_SESSION['lang'];
    } else {
        return 'en'; 
    }
}

// Get current language
$selected_language = getLanguage();

// Function to set language in session and cookie
function setLanguage($lang) {
    $_SESSION['lang'] = $lang;
    setcookie('lang', $lang, time() + (30 * 24 * 60 * 60), '/'); 
}

// Handle language switch
if (isset($_GET['lang'])) {
    $selected_language = $_GET['lang'];
    setLanguage($selected_language);

    // Redirect back to the same page after language switch
    if (isset($_GET['redirect'])) {
        header('Location: ' . $_GET['redirect']);
        exit;
    } else {
        header('Location: /store-php/'); 
        exit;
    }
}

switch ($selected_language) {
    case 'en':
        include __DIR__ . '/../language/en.php';
        break;
    case 'lv':
        include __DIR__ . '/../language/lv.php';
        break;
    default:
        include __DIR__ . '/../language/en.php'; 
        break;
}

function lang($key) {
    global $lang;
    return $lang[$key] ?? $key;
}
?>