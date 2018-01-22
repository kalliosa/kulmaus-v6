<?php
/**
 * Template Name: Full width
 */

/**
 * The template for displaying a full width page without a sidebar.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kulmaus
 */

get_header(); ?>

  <header class="page-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </header>

  <div class="container">
    <div class="content-area full-width cf">
      <main class="site-main">

        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'template-parts/content', 'page' ); ?>

        <?php endwhile; // End of the loop. ?>

      </main>
    </div>
  </div>

<?php
get_footer();
