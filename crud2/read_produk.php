<?php
require 'koneksi_produk.php';

try{
    $sql = "SELECT name, price FROM products";
    $stmt = $pdo->query($sql);

    echo "<table border='1'>";
    echo "<tr><th>Name</th><th>Price</th></tr>";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo "<tr><td>" . htmlspecialchars($row['name']) . "</td><td>" . htmlspecialchars($row['price']) . "</td></tr>";
    }

    echo "</table>";
}catch (PDOException $e){
    echo "Produk tidak terbaca: " . $e->getMessage();
}
?>

