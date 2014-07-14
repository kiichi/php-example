<?php
$db = new PDO("mysql:host=localhost;dbname=store", 'storeuser', 'secret');
$st = $db->prepare("SELECT * FROM cafe");
$st->execute();
$result = $st->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($result);
$db = null;
?>