<?php

$customer_name = $_POST["customer_name"];
$comment = $_POST["comment"];

echo $customer_name."<br/>";
echo $comment."<br/>";

	
	
	
?>
<html>
	<body>
		<form method="POST" action="example3_request2.php">
			Your Name:<input type="text" name="customer_name" value="<?=$customer_name?>"/><br/>
			Comment:<input type="text" name="comment" value="<?=$comment?>"/><br/>
			<input type="submit"/>
		</form>
	</body>
</html>