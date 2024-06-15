<?php

require_once __DIR__ . '/../services/dbService.php';
require_once __DIR__ . '/../controllers/authController.php';

$authController = new AuthController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $authController->register($username, $password);
}
?>