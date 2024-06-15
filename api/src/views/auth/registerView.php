<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>

<body>
    <?php include '../templates/HeaderView.php'; ?>
    <h2>Register</h2>
    <form method="POST" action="/register_handler.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Username" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Password" required><br>
        <button type="submit">Register</button>
    </form>
    <?php include '../template/footer.php'; ?>
</body>

</html>