<?php
	require('ass011_files_class.php'); 
	
	$url = '';
	if(isset($_GET['url']) && $_GET['url'] != '')
		$url = explode('/',$_GET['url']);
	
	require('setPath.php');

	switch($url[0]){
		case '' :
			header('location: /folder/files');
		break;
		case 'edit':
			require('ass011_files_formhandling.php');
			$page = 'edit.php';
			require('master_files.php');
		break;
		case 'new':
			$page = 'newfile.php';
			require('master_files.php');
		break;
		case 'folder':
			
			if(!isset($url[1]) || $url[1] == "") {
				header("location: /folder/files");
			}

			include('ass011_overzicht.php');
		break;
		case 'ajax':
			include($url[1]);
		default:
			$page = '404.php';
	}