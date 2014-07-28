<?php
	
	
$id = htmlspecialchars($_GET["id"]);

if (!is_numeric($id)){
	echo "Error";
	exit();
}

if ($id > 100){
	echo "Unknown product";
	exit();
}


echo $id;
	
?>