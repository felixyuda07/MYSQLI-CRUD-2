<?php
require 'db_connect.php';

$sql = "SELECT * FROM users";
$stmt = $pdo->query($sql);

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo "<br>" . $row['username'] . " - " . $row['email'] . "<br>";
}
?>