<?php	
	if(isset($url[1]) && isset($url[2])){
		$error = [];
		if(!isset($url[2])) 
			$error['fileName'] = true;
		if(!file_exists(filePath($url[1], '/') . $url[2]))
			$error['noFile'] = true;
		if($url[2] == '')
			$error['empty'] = true;
	} else {
		die("not a valid url, try something else");
	}
	
	
	if(is_array($error) && empty($error)) {
		$newFile = new fileHandler(filePath($url[1], '/') . $url[2]);
	} else {
		die("not a valid url, try something else");
	}