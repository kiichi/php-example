<?php
echo "This is from url: ".$_GET["id"];
//echo "This is from url: ".htmlspecialchars($_GET["id"]);
echo "<hr/>";
if (isset($_GET["id"])) {
	echo "id is entered";
}
else {
	echo "id is NOT entered";
}
echo "<hr/>";
echo "This is from form input: ".$_POST["address"];	
echo "<hr/>";
echo "This is for both: ".$_REQUEST["id"]." / ".$_REQUEST["address"];
?>
<form method="POST" action="example3_request.php">
	Address:<input type="text" name="address"/>
	<input type="submit"/>
</form>