<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kulmaus
 */

?>

</div>

	<footer class="site-footer">
		<div class="site-info">
      <ul class="some">
        <li><a href="#">Twitter</a></li>
        <li><a href="#">LinkedIn</a></li>
        <li><a href="#">Github</a></li>
      </ul>
			<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
		</div><!-- .site-info -->
	</footer>

<?php wp_footer(); ?>

</body>
</html>
