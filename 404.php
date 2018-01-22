<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package kulmaus
 */

get_header(); ?>

	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Oh-noes!', 'kulmaus' ); ?></h1>
	</header>

	<div class="container">
		<div class="content-area full-width cf">
			<main class="site-main">

				<h2><?php esc_html_e( 'Page not found.', 'kulmaus' ); ?></h2>
				<p><?php esc_html_e( 'It was not found what you were looking for.', 'kulmaus' ); ?></p>
				<p><a href="<?php bloginfo('url'); ?>"><?php esc_html_e( 'Back to the home page', 'kulmaus' ); ?></a></p>

			</main>
		</div>
	</div>

<?php
get_footer();