<?php
require_once 'src/config/language.php';
?>

<!DOCTYPE html>
<html lang="<?php echo $selected_language; ?>">

<?php include 'src/views/templates/head.php'; ?>

<body class="bg-gray-100">
    <?php include 'src/views/templates/header.php'; ?>

    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-4"><?php echo lang('welcome_message'); ?></h1>
    </div>

</body>

</html>