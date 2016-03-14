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
		$type = $_GET['type'];
		break;
	case 'about':
		$parts =array(
				'portfolio','aboutkai','whatsinkai','clients'
			);
		break;
	case 'contact':
		$parts =array(
				'portfolio','contact','about','clients'
			);
		break;
	case 'testimonial':
		$parts =array(
				'portfolio','testimonial','about','clients'
			);
		break;
	case 'services':
		$parts =array(
				'portfolio','services','whatsinkai','clients'
			);
		break;
	case 'blog':
		$parts =array(
				'portfolio','blog','whatsinkai','clients'
			);
		break;
	case 'article':
		$parts =array(
				'portfolio','article','whatsinkai','clients'
			);
		break;
	case 'video':
		$parts =array(
				'portfolio','video','about','clients'
			);
		break;
	default;
		die('PAGE NOT EXIST');
		break;
}

include_once('layout/template.php');