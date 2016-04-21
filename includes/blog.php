<div class="gallery col-md-8 col-sm-12">	
<div class="tablet-only title highlight">About Kai</div>
<div class="divider"></div>	
<article class="kai">
	
	<h2>Welcome to Kai Liu(The food photographer)'s Blog</h2>
	<p>
	All articles are my original contents.
	</p>
	
	<div class="blog-list">
	<?php
	$articles = array();
	$category = NULL;
	$di = new RecursiveDirectoryIterator('photography/blog/');
	foreach (new RecursiveIteratorIterator($di) as $filename => $file) {
		$filename =str_replace("\\","/",$filename);
		if(substr($filename, -2)=='..') continue;
		if($filename=='photography/blog/.') continue;
		if(substr($filename, -1)=='.'){
			$arr = explode('/',$filename);
			$category = $arr[count($arr)-2];
			echo '<div class="title highlight">'.$category.'</div><div class="divider"></div>';
			continue;
		}
		
		if(substr($filename, -5)!='.html') continue;
		
		$pattern = '/^\d+\-/';
		echo '<p><a href="'.$category.'-'.substr(basename($filename),0,-5).'">'.str_replace('-', ' ' , substr(preg_replace($pattern, '', basename($filename)),0,-5)).'</a></p>';
		
	}
	?>
	</div>
	
</article>
<div class="clear"></div>

<p>&nbsp;</p>
</div>
