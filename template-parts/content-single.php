<?php
/**
 * Template part for displaying single posts.
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
				<div class="post-category"><?php the_category(', '); ?></div>
				<?php
					the_title( '<div class="article-title">', '</div>' ); 
					echo '<div class="article-teaser">' . get_post_meta($post->ID, 'Tagline', true) . '</div>';
				?>
				<div class="row article-details">
                    <div class="share col-xs-2"><i class="fa fa-share"></i> Share</div>
                    <div class="comments col-xs-3"><i class="fa fa-comments"></i> 3 Comments</div>
                    <div class="post-date col-xs-7"><?php the_date(); ?></div>
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
	        <p class="title">Most Popular</p>
	        <div class="right-tout">
	            <img src="images/article-test-1.jpg">
	            <p class="article-title">Article Title</p>
	            <p class="featured-text">Morbi aliquam auctor tempus.</p>
	            <p class="featured-text"><a href="#" class="continue">Continue reading...</a></p>
	            <div class="row post-details">
	                <div class="share col-xs-2"><i class="fa fa-share"></i></div>
	                <div class="comments col-xs-10"><i class="fa fa-comments"></i> 3</div>
	            </div>
	        </div>
	        <?php get_sidebar(); ?>

	        <!-- MOST POPULAR -->
	        <aside id="wpp-2" class="widget popular-posts">
			<h1 class="widget-title">Popular Articles</h1>
			<ul class="wpp-list">
			<li><a href="http://www.actuallyitsrobpentydotorg.com/it-was-just-a-car/" title="It Was Just A Car" target="_self"><img src="http://www.actuallyitsrobpentydotorg.com/wp-content/uploads/wordpress-popular-posts/990-featured-100x100.jpg" width="100" height="100" title="It Was Just A Car" alt="It Was Just A Car" class="wpp-thumbnail wpp_cached_thumb wpp_featured"></a> <a href="http://www.actuallyitsrobpentydotorg.com/it-was-just-a-car/" title="It Was Just A Car" class="wpp-post-title" target="_self">It Was Just A Car</a>  <span class="post-stats"><span class="wpp-category">under <a href="http://www.actuallyitsrobpentydotorg.com/category/life/" class="cat-id-3">Life</a></span></span> </li>
			<li><a href="http://www.actuallyitsrobpentydotorg.com/7-types-of-privilege-and-shame-you-may-have-missed/" title="7 Types of Privilege and Shame You May Have Missed" target="_self"><img src="http://www.actuallyitsrobpentydotorg.com/wp-content/uploads/wordpress-popular-posts/876-featured-100x100.jpg" width="100" height="100" title="7 Types of Privilege and Shame You May Have Missed" alt="7 Types of Privilege and Shame You May Have Missed" class="wpp-thumbnail wpp_cached_thumb wpp_featured"></a> <a href="http://www.actuallyitsrobpentydotorg.com/7-types-of-privilege-and-shame-you-may-have-missed/" title="7 Types of Privilege and Shame You May Have Missed" class="wpp-post-title" target="_self">7 Types of Privilege and Shame You May Have Missed</a>  <span class="post-stats"><span class="wpp-category">under <a href="http://www.actuallyitsrobpentydotorg.com/category/shorts/" class="cat-id-2">Shorts</a></span></span> </li>
			<li><a href="http://www.actuallyitsrobpentydotorg.com/the-best-song-i-ever-heard/" title="The Best Song I’ve Ever Heard" target="_self"><img src="http://www.actuallyitsrobpentydotorg.com/wp-content/uploads/wordpress-popular-posts/522-featured-100x100.jpg" width="100" height="100" title="The Best Song I’ve Ever Heard" alt="The Best Song I’ve Ever Heard" class="wpp-thumbnail wpp_cached_thumb wpp_featured"></a> <a href="http://www.actuallyitsrobpentydotorg.com/the-best-song-i-ever-heard/" title="The Best Song I’ve Ever Heard" class="wpp-post-title" target="_self">The Best Song I’ve Ever Heard</a>  <span class="post-stats"><span class="wpp-category">under <a href="http://www.actuallyitsrobpentydotorg.com/category/shorts/" class="cat-id-2">Shorts</a></span></span> </li>
			<li><a href="http://www.actuallyitsrobpentydotorg.com/the-porno-bin/" title="The Porno Bin" target="_self"><img src="http://www.actuallyitsrobpentydotorg.com/wp-content/uploads/wordpress-popular-posts/863-featured-100x100.jpg" width="100" height="100" title="The Porno Bin" alt="The Porno Bin" class="wpp-thumbnail wpp_cached_thumb wpp_featured"></a> <a href="http://www.actuallyitsrobpentydotorg.com/the-porno-bin/" title="The Porno Bin" class="wpp-post-title" target="_self">The Porno Bin</a>  <span class="post-stats"><span class="wpp-category">under <a href="http://www.actuallyitsrobpentydotorg.com/category/shorts/" class="cat-id-2">Shorts</a></span></span> </li>
			<li><a href="http://www.actuallyitsrobpentydotorg.com/10-songs-im-not-ashamed-to-admit-that-i-like/" title="10 Songs I’m Not Ashamed to Admit That I Like" target="_self"><img src="http://www.actuallyitsrobpentydotorg.com/wp-content/uploads/wordpress-popular-posts/655-featured-100x100.jpg" width="100" height="100" title="10 Songs I’m Not Ashamed to Admit That I Like" alt="10 Songs I’m Not Ashamed to Admit That I Like" class="wpp-thumbnail wpp_cached_thumb wpp_featured"></a> <a href="http://www.actuallyitsrobpentydotorg.com/10-songs-im-not-ashamed-to-admit-that-i-like/" title="10 Songs I’m Not Ashamed to Admit That I Like" class="wpp-post-title" target="_self">10 Songs I’m Not Ashamed to Admit That I Like</a>  <span class="post-stats"><span class="wpp-category">under <a href="http://www.actuallyitsrobpentydotorg.com/category/entertainment/" class="cat-id-41">Entertainment</a></span></span> </li>

			</ul>
			</aside>

	        <!-- MOST POPULAR -->

		</div>

	</div><!-- .row .article-->
	<!--footer class="entry-footer"-->
		<?php //actually_entry_footer(); ?>
	<!--/footer--><!-- .entry-footer -->
</article><!-- #post-## -->

