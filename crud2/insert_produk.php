<?php
require 'koneksi_produk.php';

$name   = 'Laptop';
$price  = 15000.00;

try{
    $sql = "INSERT INTO products (name, price) VALUES (:name, :price)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $name, 'price' => $price]);

    echo "Produk berhasil ditambahkan";
} catch(PDOException $e){
    echo "Produk gagal ditambahkan: " . $e->getMessage();
}
?>