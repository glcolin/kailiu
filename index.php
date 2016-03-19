<?php

if(isset($_GET['p'])){
	$page = $_GET['p'];
}else{
	$page = 'index';
}

switch($page){

	case 'index':
		//BEGIN:::
		$title = 'Food Photographer | Affordable Food Photographer | New York-Kai Liu Visual';
		$description = 'Kai Liu is a New York based photographer and videographer. He specialize in food photography. Food Photographer. Interior Photographer. Videographer. ';
		$keywords = 'food photographer, affordable food photographer, New York food photographer, New York food photography';
		//:::END
		$parts = array(
				'portfolio','highlight','about','whatsinkai','clients'
			);
		break;
	case 'gallery':
		//BEGIN:::
		$title = 'Kai Liu Visual Portfolio';
		$description = '';
		$keywords = 'new york food photographer, new york interior photographer, new york event photographer';
		//:::END
		$parts =array(
				'portfolio','gallery','about','clients'
			);
		$type = $_GET['type'];
		break;
	case 'about':
		//BEGIN:::
		$title = 'About Kai Liu Food Photographer';
		$description = 'I am a New York based freelance photographer/videographer. I spealize in food photography. I am also doing video for event, shows, wedding, music video and commercial video.';
		$keywords = 'food photographer, Affordable food photographer';
		//:::END
		$parts =array(
				'portfolio','aboutkai','whatsinkai','clients'
			);
		break;
	case 'contact':
		//BEGIN:::
		$title = 'Contact Kai Liu Food Photographer';
		$description = 'phone number and e-mail address of Kai Liu Visual';
		$keywords = 'Food Photographer, New York food photographer, New York food photography';
		//:::END
		$parts =array(
				'portfolio','contact','about','clients'
			);
		break;
	case 'testimonial':
		//BEGIN:::
		$title = 'Review of Kai Liu Visual';
		$description = 'see what clients say about Kai Liu Visual';
		$keywords = 'New York food photographer, new york affordable food photographer';
		//:::END
		$parts =array(
				'portfolio','testimonial','about','clients'
			);
		break;
	case 'services':
		//BEGIN:::
		$title = 'Service of Kai Liu Visual';
		$description = 'Kai Liu Visual provides high quality food photography service with best price in New York.';
		$keywords = 'new york food photography, new york affordable food photographer, new york low cost food photographer,';
		//:::END
		$parts =array(
				'portfolio','services','whatsinkai','clients'
			);
		break;
	case 'blog':
		//BEGIN:::
		$title = 'Blog of Kai Liu Food photography';
		$description = '';
		$keywords = 'new york food photography blog, new york food photographer blog,';
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
		$keywords = $pool[$index].', '; unset($pool[$index]);$pool = array_values($pool);
		$index = strlen($title)%count($pool);
		$keywords .= $pool[$index].', '; unset($pool[$index]);$pool = array_values($pool);
		$index = strlen($description)%count($pool);
		$keywords .= $pool[$index];
		$parts =array(
				'portfolio','article','whatsinkai','clients'
			);
		break;
	case 'video':
		//BEGIN:::
		$title = 'Kai Liu videographer | film maker';
		$description = 'Kai Liu Visual provide video service';
		$keywords = 'New York videographer, New York film maker, New York event videographer';
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