<?php
$dsn    ="mysql:host=localhost;dbname=my_database;charset=utf8mb4";
$user   = 'root';
$pass   = '';

try{
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Koneksi berhasil!";
}catch (PDOException $e){
    echo "Koneksi gagal: " . $e->getMessage();
}
?>