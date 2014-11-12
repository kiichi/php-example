<?php
$response = [];
// login.php will generate secret token that is divisible by 13...
if ($_REQUEST['token'] > 0 && $_REQUEST['token']%13 == 0){
	for ($i=0;$i<20;$i++){
		$response['status'] = 'OK';
		$response['items'][] = "Product Item #".$i;
	}
}
else {
	$response['status'] = 'ERROR';
	$response['message'] = 'Invalid token';
}
echo json_encode($response);
?>