<?php
sleep(3);
$db = new PDO("mysql:host=localhost;dbname=store","storeuser","secret");
$id = $_GET["id"];
$st = $db->prepare("SELECT menu_id,item,price FROM menu");
$st->execute();
$result = $st->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($result);
$db = null;
?>