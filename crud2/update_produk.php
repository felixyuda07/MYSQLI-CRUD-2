<?php
require 'koneksi_produk.php';

$id = 1;
$price= 17500.00;

try{
    $sql = "UPDATE products SET price = :price Where id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['price' => $price, 'id' => $id]);

    echo "Harga produk berhasil diperbarui!";
}catch(PDOException $e){
    echo "Harga produk gagal diperbarui: " . $e->getMessage();
}
?>