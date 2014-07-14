<?php
// Language Basics
$is_basics = true;
$num = 10;
$money = 12.34;
// use either single quote or double quote for string
$str = 'The value'; 
// Escape by backslash
$str = "The \"value\"";


// String concatination - note this weak type feature
$both = $str." is ".$num;

// if-statement
if ($num == 10){
	$num++; // increment
	$both .= "!"; // append
}

// for-loop
for ($i=0; $i<3; $i++){
	echo "say hello<br/>";
}

// Array
$arr = [];

$arr = [1,2,3,4,5];

$arr = [1,2,3,"Hello","World",12.34,true,false];

// Insert
$arr[] = "one";
$arr[] = "two";
$arr[] = 3; // flexible for data type

// Echoing the variable is not useful but...
//echo $arr;
// Use var_dump to investigate details
echo var_dump($arr);

echo "<hr/>";
$arr[2] = "two is changed";

echo var_dump($arr);
echo "<hr/>";

// Iterate through
for ($i=0; $i<count($arr); $i++){
	echo $arr[$i]."<br/>";
}

// Dictionary - just like Array
$dict = [];
$dict["name"] = "Kiichi";
$dict["age"] = 35; 
$dict[100] = "index a.k.a key is 100 in this element";
$dict["nested"] = $arr; // nested data structure example

// Use pre tag to show indentation (more readable debug info!)
echo "<hr/><pre>";
echo var_dump($dict);
echo "</pre>";

echo "<hr/>";

// foreach - useful to iterate through dictionary (key/value pairs)
foreach($dict as $key=>$val){
	echo "key is ".$key." and value is ".$val."<br/>";
}
?>