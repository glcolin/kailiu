<?php

if(isset($_GET['p'])){
	$page = $_GET['p'];
}else{
	$page = 'index';
}

switch($page){

	case 'index':
		//BEGIN:::
		$title = 'The most affordable food photographer in NYC';
		$description = 'I am a New York based freelance photographer/videographer. I spealize in food photography. I am also doing video for event, shows, wedding, music video and commercial video.';
		$keywords = 'food photographer, low cost food photographer, ny food photographer, ny food photography';
		//:::END
		$parts = array(
				'whatsinkai','portfolio','highlight','about','clients'
			);
		break;
	case 'gallery':
		//BEGIN:::
		$title = '';
		$description = '';
		$keywords = '';
		//:::END
		$parts =array(
				'portfolio','gallery','about','clients'
			);
		$type = $_GET['type'];
		break;
	case 'about':
		//BEGIN:::
		$title = 'About Kai Liu';
		$description = 'I am a New York based freelance photographer/videographer. I spealize in food photography. I am also doing video for event, shows, wedding, music video and commercial video.';
		$keywords = 'food photographer, low cost food photographer';
		//:::END
		$parts =array(
				'portfolio','aboutkai','whatsinkai','clients'
			);
		break;
	case 'contact':
		//BEGIN:::
		$title = '';
		$description = '';
		$keywords = '';
		//:::END
		$parts =array(
				'portfolio','contact','about','clients'
			);
		break;
	case 'testimonial':
		//BEGIN:::
		$title = '';
		$description = '';
		$keywords = '';
		//:::END
		$parts =array(
				'portfolio','testimonial','about','clients'
			);
		break;
	case 'services':
		//BEGIN:::
		$title = '';
		$description = '';
		$keywords = '';
		//:::END
		$parts =array(
				'portfolio','services','whatsinkai','clients'
			);
		break;
	case 'blog':
		//BEGIN:::
		$title = '';
		$description = '';
		$keywords = '';
		//:::END
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
		//BEGIN:::
		$title = '';
		$description = '';
		$keywords = '';
		//:::END
		$parts =array(
				'portfolio','video','about','clients'
			);
		break;
	default;
		die('PAGE NOT EXIST');
		break;
}

include_once('layout/template.php');