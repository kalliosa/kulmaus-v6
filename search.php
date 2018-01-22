<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package kulmaus
 */

get_header(); ?>

	<header class="page-header">
		<h1 class="page-title"><?php printf( esc_html__( 'Search results with keyword: %s', 'kulmaus' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
	</header><!-- .page-header -->

	<div class="container">
		<section class="content-area">
			<main class="site-main">

			<?php	if ( have_posts() ) : ?>

					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'search' ); ?>

					<?php endwhile;

				else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

			</main>
		</section>
	</div>

<?php
get_footer();