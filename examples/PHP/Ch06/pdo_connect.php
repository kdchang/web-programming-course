<?php
$pdo = new PDO("mysql:host=localhost;dbname=database", 'username', 'password');
$query = "SELECT * FROM `member`;";
$result = $pdo->query($query)->fetchAll();
print_r($result);
?>