<?php

	foreach($_POST as $key => $type) {
		switch($key) {
			case 'save':
				$newFile->updateFileContent($_POST['content']);
				$newFile->updateFileName('files/' . $_POST['fileTitle']);
				header('location:/edit/' . $url[1] . '/' . $_POST['fileTitle']);
			break;
			case 'delete':
				
			break;
		}
	}