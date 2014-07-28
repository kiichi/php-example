<?php
$dict = [];
$dict["name"] = "John";
$dict["age"] = 30;
$dict[100] = "some string";
$dict[101] = "some string 2";
$dict[102] = "some string 3";
$dict[103] = "some string 4";

$arr = [1,2,3,4,5];

$d2["cat"] = "black cat";
$d2["dog"] = "white dog";
$d2["another"] = $arr;

$dict["nested"] = $arr;
$dict["animal"] = $d2;

$id = $_GET["id"];

echo json_encode($dict);
?>