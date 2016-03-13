<?php

//Generate Thumbs:

$di = new RecursiveDirectoryIterator('photography/images/');
foreach (new RecursiveIteratorIterator($di) as $filename => $file) {
	if(substr($filename, -1)!='.'){
		if (!file_exists('thumbs/'.dirname($filename))) {
			mkdir('thumbs/'.dirname($filename), 0777, true);
		}
		make_thumb($filename,'thumbs/'.$filename, 230);
		echo 'thumbs/'.$filename.'is generated.';
	}		
}
