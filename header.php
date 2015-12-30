<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package actually
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

<div id="page" class="hfeed site">
	<nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'container' => false, 'items_wrap' => '<ul id="%1$s" class="%2$s nav navbar-nav">%3$s</ul>') ); ?>
                <div class="search-icon pull-right" style="margin-top: 24px; font-size: 12pt;">
                    <i class="fa fa-search"></i>
                    <div id="nav-search">
                        <form role="search" method="get" class="search-form" action="http://dev.wordpress.local:8888/">
                            <input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search for:">
                            <input type="submit" class="search-submit" value="Search" style="display: none;">
                        </form>
                    </div>
                </div>
            </div><!--/.navbar-collapse -->
        </div>
    </nav>
	<!--a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'actually' ); ?></a-->

	<!--header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
		</div--><!-- .site-branding -->

		<!--nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'actually' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav--><!-- #site-navigation -->
	<!--/header--><!-- #masthead -->

	<div id="content" class="site-content container">
