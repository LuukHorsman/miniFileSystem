<?php
	$error = [];
	if(isset($_POST['realurl']) && isset($_POST['content']) && isset($_POST['newFileName']) && isset($_POST['oldFileName'])) {
		$realPath = filePath($_POST['realurl'], '/');
		$file =  $realPath . $_POST['newFileName'];
		$oldFile = $realPath . $_POST['oldFileName'];

		if(!file_exists($file)) {
			$newFile = new fileHandler($file);
			$newFile->updateAllContent($oldFile, $file, $_POST['content']);
			$error['url'] = "/edit/" . $_POST['realurl'] . "/" . $_POST['newFileName'];
		} else {
			$newFile = new fileHandler($file);
			$newFile->updateFileContent($file, $_POST['content']);
			$error['message'] = "File has been succesfully edited.";
		}

		echo json_encode($error);

	} else {

		$error['empty'] = true;
		echo json_encode($error);
	}