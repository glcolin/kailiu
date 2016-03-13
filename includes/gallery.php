
<?php
function make_thumb($src, $dest, $desired_width) {

	/* read the source image */
	$source_image = imagecreatefromjpeg($src);
	$width = imagesx($source_image);
	$height = imagesy($source_image);
	
	/* find the "desired height" of this thumbnail, relative to the desired width  */
	$desired_height = floor($height * ($desired_width / $width));
	
	/* create a new, "virtual" image */
	$virtual_image = imagecreatetruecolor($desired_width, $desired_height);
	
	/* copy source image at a resized size */
	imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);
	
	/* create the physical thumbnail image to its destination */
	imagejpeg($virtual_image, $dest);
}
function compress_image($source_url, $destination_url, $quality) {
	$info = getimagesize($source_url);
 
	if ($info['mime'] == 'image/jpeg') $image = imagecreatefromjpeg($source_url);
	elseif ($info['mime'] == 'image/gif') $image = imagecreatefromgif($source_url);
	elseif ($info['mime'] == 'image/png') $image = imagecreatefrompng($source_url);
 
	//save file
	imagejpeg($image, $destination_url, $quality);
 
	//return destination file
	return $destination_url;
}
?>





<?php
$images = array();
$di = new RecursiveDirectoryIterator('photography/images/'.$type.'/');

foreach (new RecursiveIteratorIterator($di) as $filename => $file) {

	$filename =str_replace("\\","/",$filename);

	if(substr($filename, -1)!='.'){
		if (!file_exists('tmp/thumbs/'.dirname($filename))) {
			mkdir('tmp/thumbs/'.dirname($filename), 0777, true);
		}
		if (!file_exists('tmp/thumbs/'.$filename)) {
			make_thumb($filename,'tmp/thumbs/'.$filename, 200);
		}
		array_push($images,$filename);
	}
}
?>

<div class="gallery col-md-8 col-sm-12">	
<div class="tablet-only title highlight">Gallery</div>
<div class="divider"></div>	
		<div id="masonry-grid">
			<div class="gutter-sizer"></div>
		<?php foreach($images as $image){ ?>
			<div class="grid-item">
				<a href="<?php echo $image;?>"><img border="0" src="<?php echo 'tmp/thumbs/'.$image;?>" class="thumb" /></a>
			</div>
		<?php } ?>
		</div>
	
<div class="clear"></div>
<div class="divider"></div>
<p class="claim">Claim : all photos are produced by Kai liu, please don't use it on any purposes without asking Kai Liu</p>
</div>

<script>
$(window).load(function(){ 
	var $container = jQuery('#masonry-grid');
	// initialize
	$container.masonry({
	  columnWidth: 1,
	  itemSelector: '.grid-item'
	});
});
</script>