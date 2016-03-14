<div class="gallery col-md-8 col-sm-12">	
<div class="tablet-only title highlight">About Kai</div>
<div class="divider"></div>	
<article class="kai">
	
	<style>
	.wra .blog-article h2{
		font-size:18px;
		text-align:center;
	}
	.blog-article p{
		line-height:20px;
		font-size:13px;
	}
	.blog-article p.editor{
		font-size:11px;
		text-align:center;
		margin:15px;
	}
	</style>
	
	<div class="blog-article">
	<p class="bread"><a href="/">Home</a> > <a href="blog">Blog</a> > <?php echo str_replace('-', ' ' ,$_GET['f']);?> > <?php echo str_replace('-', ' ' ,$_GET['f']);?></p>
	<?php
		require_once('photography/blog/'.$_GET['d'].'/'.$_GET['f'].'.html');
	?>
	</div>
	
</article>
<div class="clear"></div>

<p>&nbsp;</p>
</div>
