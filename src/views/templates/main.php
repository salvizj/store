<!DOCTYPE html>
<html lang="<?php echo $selected_language; ?>">

<?php include 'src/views/templates/head.php'; ?>

<body>
    <?php include 'src/views/templates/nav.php'; ?>
    <div class="content">
        <?php include $view; ?>
    </div>
</body>

</html>