<?php
function my_print($dict){
	echo "<hr/>";
	echo "<pre>";
	echo var_dump($dict);
	echo "</pre>";
	echo "<hr/>";
}

function add_them($a, $b){
	return $a + $b;
}


// This is some comments
$is_basics = true; // false
$num = 10;
$money = 12.34;
$str = "Here is \"some\" string values!";
$str = 'The Value';


if ($num == 10){
	//echo "this is 10!!";
	$num++;	
}

$both = $str." is ".$num;
$both .= "!!!!";
echo $both;

echo "<hr/>";

for ($i=0; $i<3; $i++){
	echo "hello ";
}


$arr = [];
$arr = [1,2,3,4,5];
$arr = [1,2,3, "Coffee","Beans", 12.34, true];
$arr[] = "Additional Item";
$arr[1] = "Overwrite 2 with something else";

for ($i=0; $i<count($arr); $i++){
	echo $arr[$i]."<br/>";
}

my_print($arr);

$dict = [];
$dict["name"] = "John";
$dict["age"] = 30;
$dict[100] = "some string";
//$dict["nested"] = $arr;



foreach ($dict as $key=>$val){
	echo $key."-".$val."<br/>";
}

echo "<hr/>";



my_print($dict);


echo add_them(5,6);

























?>