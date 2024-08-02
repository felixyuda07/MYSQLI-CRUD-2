<?php
require 'koneksi_produk.php';

$id = 2;

try{
    $sql = "DELETE FROM products WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);

    echo "Produk berhasil dihapus!";
}catch(PDOException $e){
    echo "Gagal menghapus produk: " . $e->getMessage();
}
?>