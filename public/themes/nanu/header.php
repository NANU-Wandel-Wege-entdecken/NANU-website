<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nanu
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<div id="page" class="site">

		<header id="masthead" class="site-header bg-beige pt-2" role="banner">

			<div class="container container-fluid m-auto grid grid-cols-2 gap-2">

                <div class="site-branding">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/dist/images/nanu-logo.png" alt="NANU Logo" title="NANU - Wandel Wege gehen">
                    </a>
                </div><!-- .site-branding -->

		    </div><!-- .container-fluid -->

	    </header><!-- #masthead -->

	<div id="content" class="site-content">
