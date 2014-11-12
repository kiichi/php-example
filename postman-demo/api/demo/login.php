<?php
$response = [];
if ($_REQUEST['username'] == 'gavi' && $_REQUEST['password'] == 'hello'){
	$response['status'] = 'OK';
	$response['token'] = 13 * (rand()%100);
	$response['message'] = 'Success (gavi)';
}
else {
	$response['status'] = 'ERROR';
	$response['token'] = null;
	$response['message'] = 'Invalid username or password';
}
echo json_encode($response);
?>