<?php

// you can also check if this is number or not, 
// validation, error handling for invalid input, etc...
$cafe_id = $_GET['id'];

$db = new PDO("mysql:host=localhost;dbname=store", 'storeuser', 'secret');
// This is not secure! can you explain why?
//$st = $db->prepare("SELECT * FROM cafe WHERE cafe_id = ".$_GET['id']);
$st = $db->prepare("SELECT * FROM cafe WHERE cafe_id = :cafe_id");
$st->bindParam("cafe_id", $cafe_id);
$st->execute();
$result = $st->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($result);
$db = null;
?>