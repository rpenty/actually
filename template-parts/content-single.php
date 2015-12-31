<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package actually
 */

$article_page_tagline = get_field('article_page_tagline');

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row article">
    	<div class="article-main col-lg-8 col-md-6 col-xs-12">
			<header class="entry-header">
				<div class="post-category"><?php the_category(', '); ?></div>
				<?php
					the_title( '<div class="article-title">', '</div>' );
					echo '<div class="article-teaser">' . $article_page_tagline . '</div>';
				?>
				<div class="row article-details">
                    <!--div class="share col-xs-5"><i class="fa fa-share"></i> Share></div-->
                    <div class="comments col-xs-6"><i class="fa fa-comments"></i> <?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?></div>
                    <div class="post-date col-xs-6 text-right"><?php the_date(); ?></div>
                </div>
                <?php
	        	if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					the_post_thumbnail();
				}
				?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_content(); ?>
				<?php the_post_navigation(); ?>
			</div><!-- .entry-content -->
		</div><!-- .article-main -->
		<div class="right-section col-lg-4 col-md-6 col-xs-12">
	        <?php get_sidebar(); ?>
		</div>

	</div><!-- .row .article-->
</article><!-- #post-## -->

