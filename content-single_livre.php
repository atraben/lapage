<?php
/**
 * @package Toolbox
 */
?>

<articlelivre id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		
	<div class="entry-content">
	
		 <?php the_field('presentation_livre'); ?>
	
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		
			</footer><!-- .entry-meta -->
</articlelivre><!-- #post-<?php the_ID(); ?> -->
