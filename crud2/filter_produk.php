<form method='POST' action='filter_produk.php'>;
Harga Minimum: <input type='number' name='min_price' step='0.01' value='" . htmlspecialchars($min_price) . "'>;
<input type='submit' value='Filter'>;
</form>;

<?php
require 'koneksi_produk.php';

$min_price = isset($_POST['min_price']) ? $_POST['min_price'] : 0;

try{
    $sql = "SELECT name, price FROM products WHERE price > :min_price";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['min_price' => $min_price]);

    echo "<table border='1'>";
    echo "<tr><th>Name</th><th>Price</th></tr>";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo "<tr><td>" . htmlspecialchars($row['name']) . "</td><td>" . htmlspecialchars($row['price']) . "</td></tr>";
    }

    echo "</table>";
}catch(PDOException $e){
    echo "Gagal memfilter produk: " . $e->getMessage();
}
?>

   