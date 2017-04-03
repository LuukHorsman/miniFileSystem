<?php
function filePath($urlPath, $separator) {
	$folder = explode('-', $urlPath);
	$filePath = "";
	foreach($folder as $folderName) {
		$filePath .= $folderName . $separator;
	}
	return $filePath;
}