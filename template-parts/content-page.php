<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package actually
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row article">
    	<div class="article-main col-lg-8 col-md-6 col-xs-12">
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->
			<div class="entry-content">
				<?php the_content(); ?>
				<?php
					/*wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'actually' ),
						'after'  => '</div>',
					) );*/
				?>
			</div><!-- .entry-content -->
		</div><!-- .article-main -->
		<div class="right-section col-lg-4 col-md-6 col-xs-12">
	        <?php get_sidebar(); ?>
		</div><!-- .right-section -->
	</div><!-- .row .article -->
</article><!-- #post-## -->

