<?php
$array = explode(',', $_POST['newFile']);
$url = explode(',', $_POST['url']);
$path = explode('-', $url[0]);



$pathName = "";
foreach($path as $name) {
	$pathName .= $name . "/";
}
$count = 0;
foreach($array as $file) {
	$array[$count] = $pathName . $file;
	$count++;
}
	$newFile = new fileHandler('');

	$newFile->multipleFiles($array, "");
	
	$return['url'] = "/folder/" . $_POST['url'];
	echo json_encode($return);