<?php

require_once __DIR__ . '/../services/dbService.php';

class AuthController
{
    private $db;

    public function __construct()
    {
        $this->db = (new DatabaseService())->getConnection();
    }

    public function register($username, $password)
    {
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Prepare and execute the insert query
        $stmt = $this->db->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $hashedPassword);

        if ($stmt->execute()) {
            echo "Registration successful!";
            header("Location: /login.php");
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}