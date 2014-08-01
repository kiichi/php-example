<?php
// example: item.php?id=3
$db = new PDO("mysql:host=localhost;dbname=store","storeuser","secret");
$id = $_GET["id"];
$st = $db->prepare("SELECT * FROM menu WHERE menu_id=:menu_id");
$st->bindParam("menu_id",$id);
$st->execute();
$result = $st->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($result);
$db = null;
?>