<?php
$dsn = "mysql:host=localhost;dbname=mydatabase";
$username = "user";
$password = "pass";

try {
    $pdo = new PDO($dsn, $username, $password);
    echo "Connected to the database successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}