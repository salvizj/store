<?php
session_start();

$default_language = 'en'; 

$url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', $url_path);
$selected_language = isset($segments[2]) ? $segments[2] : $default_language;

if ($selected_language !== 'en' && $selected_language !== 'lv') {
    $selected_language = $default_language;
}

$_SESSION['lang'] = $selected_language;

require_once 'src/language/' . $selected_language . '.php';

global $lang;

function lang($key) {
    global $lang;
    return isset($lang[$key]) ? $lang[$key] : $key;
}
?>

<!DOCTYPE html>
<html lang="<?php echo $selected_language; ?>">

<head>
    <meta charset="UTF-8">
    <title>Multi-Language Example</title>
    <link rel="stylesheet" href="assets/css/styles.css" </head>

<body>
    <?php include 'src/views/templates/header.php'; ?>
    <h1><?php echo lang('welcome_message'); ?></h1>
</body>

</html>