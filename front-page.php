<?php
/**
 * Template Name: Front page 
 */

/**
 * The template for displaying front page.
 *
 * Contains the closing of the #content div and all content after.
 * Initial styles for front page template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/template-partials
 *
 * @package kulmaus
 */

get_header(); ?>

	<div class="welcome">
		<main class="site-main">

			<?php	while ( have_posts() ) : the_post(); ?>

        <h2><?php echo get_the_content(); ?></h2>

			<?php endwhile; // End of the loop. ?>

		</main>
	</div>
	
<?php
get_footer();