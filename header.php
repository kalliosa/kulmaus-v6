<?php
/**
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kulmaus
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700|Oswald:500" rel="stylesheet">

<!-- Generate favicons: http://realfavicongenerator.net/ -->
<link rel="icon" type="image/png" href="<?php echo IMAGES; ?>/favicons/favicon.png" sizes="192x192">

<?php wp_head(); ?>
</head>
<?php
// Echo class "subpage" to body classes if page is not front page
$curpage = '';
if(!is_front_page()) {
	$curpage = 'subpage';
}
?>
<body <?php body_class($curpage); ?>>
<div class="site">
	<header class="site-header cf">
		<div class="site-branding cf">
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<span class="logo">
						<span>SK</span>
					</span>
					<?php bloginfo( 'name' ); ?>
				</a>
			</h1>
			<?php	$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description">// <?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php	endif; ?>
		</div><!-- .site-branding -->

		<nav class="primary cf" role="navigation">
			<?php
				wp_nav_menu( array(
					'theme_location'    => 'primary',
					'container'       	=> false,
					'depth'             => 4,
					'menu_class'        => 'menu-items',
					'menu_id' 					=> '',
					'echo'            	=> true
					)
				);
			?>
		</nav>
	</header>