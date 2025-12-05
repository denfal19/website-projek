<?php
$files = array_filter(glob('../gambar/*'), 'is_file');

$response = [];

foreach ($file as $file) {
	$response[] = basename($file);
}

header('Content-Type: application/json');
echo json_encode($response);
die();
?>