<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kulmaus
 */

?>

  <header class="page-header">
    <h1 class="page-title"><?php esc_html_e( 'Nothing found', 'kulmaus' ); ?></h1>
  </header><!-- .page-header -->

  <div class="container">
    <section class="no-results not-found">
      <main class="site-main">
        <?php
        if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

          <p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Start here</a>.', 'kulmaus' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

        <?php elseif ( is_search() ) : ?>

          <p><?php esc_html_e( 'Unfortunately we got no search results. Try other word.', 'kulmaus' ); ?></p>
          <?php

        else : ?>

          <p><?php esc_html_e( 'Looks like we don\'t have page you requested. Try other page.', 'kulmaus' ); ?></p>
          <?php

        endif; ?>
      </main><!-- .page-content -->
    </section><!-- .no-results -->
  </div>