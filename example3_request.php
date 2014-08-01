<?php
$products[1] = "This is our premium organic coffee from Columbia!";
$products[2] = "Try our special soy latte!";
$products[3] = "Blueberry is good for your eyes";

$id = $_GET["id"];

	
echo "<strong>".$products[$id]."</strong>";

?>

<hr/>
<a href="test.html">Go Back</a>