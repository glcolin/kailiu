<?php

if(isset($_GET['p'])){
	$page = $_GET['p'];
}else{
	$page = 'index';
}

switch($page){

	case 'index':
		$parts = array(
				'whatsinkai','portfolio','highlight','about','clients'
			);
		break;
	case 'gallery':
		$parts =array(
				'portfolio','gallery','about','clients'
			);
		break;
	default;
		die('PAGE NOT EXIST');
		break;
}

include_once('layout/template.php');