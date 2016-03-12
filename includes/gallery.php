<div class="tablet-only title highlight">Highlight</div>
<div class="tablet-only divider"></div>


<?php
$images = array();
$di = new RecursiveDirectoryIterator('photography/images/');
foreach (new RecursiveIteratorIterator($di) as $filename => $file) {
	if(substr($filename, -1)!='.'){
		array_push($images,$filename);
	}
}
?>
<div class="gallery col-md-8 col-sm-12">	
	

		<?php foreach($images as $image){ ?>
			<a href="<?php echo $image;?>"><img border="0" src="<?php echo $image;?>" class="thumb" /></a>
		<?php } ?>

	
<div class="clear"></div>

</div>