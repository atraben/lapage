<?php
/**
 * @package Toolbox
 */
?>

<articlelivre id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		
	<div class="entry-content">
	
	<?php 
	if (qtrans_getLanguage() =="en") {
	   $key = "presentation_livre-en";
	   $presentation_livre = get_post_meta($post->ID, $key, true);
	}
	if (qtrans_getLanguage() == "fr") {//default to fr if not found
	   $key = "presentation_livre";
	   $presentation_livre = get_post_meta($post->ID, $key, true);
	}
	echo $presentation_livre;
	?>
	
<!--		 <?php the_field('presentation_livre'); ?>-->
	
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		
			</footer><!-- .entry-meta -->
</articlelivre><!-- #post-<?php the_ID(); ?> -->
