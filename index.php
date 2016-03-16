<?php

if(isset($_GET['p'])){
	$page = $_GET['p'];
}else{
	$page = 'index';
}

switch($page){

	case 'index':
		//BEGIN:::
		$title = 'Kai Liu Visual - The most affordable food photographer in New York';
		$description = 'Kai Liu is a New York based all around photographer and videographer. He specialize in food photography.';
		$keywords = 'food photographer, low cost food photographer, New York food photographer, New York food photography';
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
		//set keywords, title and description:
		$title = str_replace('-', ' ' ,$_GET['d']).' photography blog -'.preg_replace('/^\d+/' ,'' ,str_replace('-', ' ' ,$_GET['f']));
		$article_content = file_get_contents('photography/blog/'.$_GET['d'].'/'.$_GET['f'].'.html');
		$description = preg_replace('/^[^\.]*\./','',substr(preg_replace('/<h\d>.*<\/h\d>|<\s*img.*>|<[^>]*>|"/','',($article_content)),80,300));
		$pool = array('ny food photography','ny food photographer','new york food photography','new york food photographer','nyc food photography','nyc food photographer','new york affordable food photographer','food photographer ny','food photographer nyc','nyc affordable food photographer','ny affordable food photographer','food photographer new york');
		$index = strlen($article_content)%count($pool);
		$keywords = $pool[$index].', '; unset($pool[$index]);
		$index = strlen($title)%count($pool);
		$keywords .= $pool[$index].', '; unset($pool[$index]);
		$index = strlen($description)%count($pool);
		$keywords .= $pool[$index];
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