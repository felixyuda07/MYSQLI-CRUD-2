<?php
require 'db_connect.php';

$username   = $_POST['username'];
$email      = $_POST['email'];

$sql    = "INSERT INTO users (username, email) values (:username, :email)";
$stmt   = $pdo->prepare($sql);

$stmt->execute(['username' => $username, 'email' => $email]);

echo "User berhasil ditambahkan!";
