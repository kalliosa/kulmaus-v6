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
          <li><a href="https://twitter.com/kalliosa">Twitter</a></li>
          <li><a href="https://fi.linkedin.com/pub/sami-kallio/2a/70a/6b3">LinkedIn</a></li>
          <li><a href="https://github.com/kalliosa">Github</a></li>
        </ul>
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
      </div><!-- .site-info -->
    </footer>

  <?php wp_footer(); ?>

</body>
</html>
