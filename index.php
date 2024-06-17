<?php
require_once 'src/config/language.php';
require_once 'src/config/router.php';
?>

<!DOCTYPE html>
<html lang="<?php echo $selected_language; ?>">

<head>
    <meta charset="UTF-8">
    <title>Store</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
    <script src="/store-php/assets/js/language.js"></script>
</head>

<body>
    <?php include 'src/views/templates/header.php'; ?>
    <div class="container mx-auto">
        <?php
        switch ($route) {
            case '/':
                include 'src/views/home.php';
                break;
            case '/sign-up':
                include 'src/views/auth/signUp.php';
                break;
            case '/sign-in':
                include 'src/views/auth/signIn.php';
                break;
            default:
                http_response_code(404);
                echo '<h1>404 Not Found</h1>';
                echo '<p>The page you requested could not be found.</p>';
                break;
        }
        ?>
    </div>
</body>

</html>