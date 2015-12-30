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
                    <div class="share col-xs-5"><!--i class="fa fa-share"></i> Share--><?php do_action('addthis_widget',get_permalink($post->ID), get_the_title($post->ID), 'large_toolbox'); ?></div>
                    <div class="comments col-xs-3"><i class="fa fa-comments"></i> 3 Comments</div>
                    <div class="post-date col-xs-4 text-right"><?php the_date(); ?></div>
                </div>
                <?php
	        	if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					the_post_thumbnail();
				}
				?>

				<!--div class="entry-meta"-->
					<?php //actually_posted_on(); ?>
				<!--/div--><!-- .entry-meta -->
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_content(); ?>
				<?php
					/*wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'actually' ),
						'after'  => '</div>',
					) );*/
				?>
				<?php the_post_navigation(); ?>
			</div><!-- .entry-content -->
		</div><!-- .article-main -->
		<div class="right-section col-lg-4 col-md-6 col-xs-12">
	        <!--p class="title">Most Popular</p>
	        <div class="right-tout">
	            <img src="images/article-test-1.jpg">
	            <p class="article-title">Article Title</p>
	            <p class="featured-text">Morbi aliquam auctor tempus.</p>
	            <p class="featured-text"><a href="#" class="continue">Continue reading...</a></p>
	            <div class="row post-details">
	                <div class="share col-xs-2"><i class="fa fa-share"></i></div>
	                <div class="comments col-xs-10"><i class="fa fa-comments"></i> 3</div>
	            </div>
	        </div-->
	        <?php get_sidebar(); ?>

		</div>

	</div><!-- .row .article-->
	<!--footer class="entry-footer"-->
		<?php //actually_entry_footer(); ?>
	<!--/footer--><!-- .entry-footer -->
</article><!-- #post-## -->

