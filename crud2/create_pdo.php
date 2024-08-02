<?php
require 'db_connect.php';

$username   = 'user123';
$email      = 'userr123@example.com';

$sql    = "INSERT INTO users (username, email) values (:username, :email)";
$stmt   = $pdo->prepare($sql);

$stmt->execute(['username' => $username, 'email' => $email]);

echo "User berhasil ditambahkan!";
?>