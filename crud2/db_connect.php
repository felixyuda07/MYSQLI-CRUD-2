<?php
$dsn = "mysql:host=localhost;dbname=crud2;charset=utf8mb4";
$user   = 'root';
$pass   = '';

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Koneksi berhasil";
} catch (PDOException $e) {
    echo "KOneksi gagal: " . $e->getMessage();
}
?>