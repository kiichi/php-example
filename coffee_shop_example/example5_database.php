<?php
// 1. Connect DB
$db = new PDO("mysql:host=localhost;dbname=store","storeuser","secret");


//$db->exec("UPDATE menu SET price=2.19 WHERE menu_id=2");

$id = $_GET["id"];

// 2. Query

// Intended query: 
// SELECT * FROM menu WHERE menu_id=2

// SELECT * FROM menu WHERE menu_id=2 OR true=true

//$result = $db->query("SELECT * FROM menu WHERE menu_id=".$id);

$st = $db->prepare("SELECT * FROM menu WHERE menu_id=:menu_id");

$st->bindParam("menu_id",$id);

$st->execute();

$result = $st->fetchAll(PDO::FETCH_ASSOC);

// 3. Loop through array (results)
// foreach($result as $row){
// 	echo $row["item"]."<br/>";
// }

echo json_encode($result);


// 4. Close the connection
$db = null;
?>