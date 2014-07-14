<?php

$db = new PDO("mysql:host=localhost;dbname=store", 'storeuser', 'secret');

echo "ok - db is connected";
echo "<hr/>";
//Tokyo Cafe,35.67,139.77,1000
//New York Shop,40.67,-73.94,1200
//London Tea Shop,51.52,-0.1,1105

//$db->exec("INSERT INTO coffeeshops (name,lat,lng) VALUES('Tokyo Store',35.67,139.77)");
//$db->exec("INSERT INTO coffeeshops (name,lat,lng) VALUES('New York Store',40.67,-73.94)");
//$db->exec("INSERT INTO coffeeshops (name,lat,lng) VALUES('London',51.52,-0.1)");

$result = $db->query("SELECT * FROM cafe");
//$result = $db->query("SELECT * FROM books WHERE store_id = 2");
//$result = $db->query("SELECT * FROM books WHERE name = 'New York Store'");
foreach ($result as $row) {
	echo $row['name'].','.$row['sqft'].' sqft<br/>';
}
$db = null;
?>