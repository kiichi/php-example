<?php
// Install "JSON View" Chrome Plugin!
$data['status'] = 'ok';
$data['lat'] = 40.67;
$data['lng'] = -73.94;
$data['poi'] = 'School';
$tags = ['education','activity','academic'];
$data['tags'] = $tags;
echo json_encode($data);
?>