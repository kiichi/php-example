<?php
$response = [];
if ($_REQUEST['username'] == 'kiichi' && $_REQUEST['password'] == 'hello'){
	$response['status'] = 'OK';
	$response['token'] = 13 * (rand()%100);
	$response['message'] = 'Success';
}
else {
	$response['status'] = 'ERROR';
	$response['token'] = null;
	$response['message'] = 'Invalid username or password';
}
echo json_encode($response);
?>