<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
		<div id="site-generator">
		<a name="contacts">L’APAGE (L’Association pour une Publication sur les Artistes à GEnève) — 12 rue de la Coulouvrenière — CH-1204 Genève</a><br />

		</div>
		<div id="lang"></div><?php get_sidebar('foot'); ?>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>