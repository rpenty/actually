<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package actually
 */

?>

<?php
$post_number = $wp_query->current_post;
?>

<!--article id="post-<?php the_ID(); ?>" <?php post_class(); ?>-->

<?php if ($post_number == 0) {  ?>

	<div class="row featured-article">
        <div class="col-lg-8 col-md-6 col-xs-12">
            <?php
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				the_post_thumbnail();
			}
			?>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12">
            <p class="post-category"><?php the_category(', '); ?></p>
            <?php the_title( sprintf( '<p class="article-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></p>' ); ?>
            <div class="post-date"><?php the_date(); ?></div>
            <?php the_excerpt(); ?>
            <p class="featured-text"><a href="<?php echo esc_url( get_permalink() ); ?>" class="continue">Continue reading...</a></p>
            <div class="post-details row no-gutter">
                <div class="share col-md-5 col-xs-3"><i class="fa fa-share"></i> Share</div>
                <div class="comments col-md-7 col-xs-5"><i class="fa fa-comments"></i> 3 Comments</div>
                <div class="post-date col-xs-4 hidden-lg hidden-md"><?php the_date(); ?></div>
            </div>
        </div>
    </div>
    <hr class="visible-xs-block visible-sm-block">
<?php } else if ($post_number == 1 || $post_number == 2) { 
	if ($post_number == 1) { echo '<div class="row recent-articles">'; } ?>
        <div class="col-md-6 col-xs-12">
            <p class="post-category"><?php the_category(', '); ?></p>
            <?php
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				the_post_thumbnail();
			}
			the_title( sprintf( '<p class="article-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></p>' );
            the_excerpt(); ?>
            <p class="featured-text"><a href="<?php echo esc_url( get_permalink() ); ?>" class="continue">Continue reading...</a></p>
            <div class="post-details row no-gutter">
                <div class="share col-xs-3"><i class="fa fa-share"></i> Share</div>
                <div class="comments col-xs-5"><i class="fa fa-comments"></i> 3 Comments</div>
                <div class="post-date col-xs-4"><?php the_date(); ?></div>
            </div>
        </div>
    <?php if ($post_number == 2) { echo '</div><hr>'; }

  	} else if ($post_number >= 3 && $post_number <= 6) { 
  		if ($post_number == 3) { echo '<div class="row sub-articles">'; }
  		?>
  		<div class="col-lg-3 col-xs-6">
            <p class="post-category hidden-xs"><?php the_category(', '); ?></p>
            <?php
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				the_post_thumbnail();
			} ?>
            <p class="post-category visible-xs-block"><?php the_category(', '); ?></p>
            <?php the_title( sprintf( '<p class="article-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></p>' );
            the_excerpt(); ?>
            <p class="featured-text hidden-xs"><a href="<?php echo esc_url( get_permalink() ); ?>" class="continue">Continue reading...</a></p>
            <div class="post-details row no-gutter">
                <div class="share col-sm-2 col-xs-5"><i class="fa fa-share"></i> <span class="visible-xs-inline">SHARE</span></div>
                <div class="comments col-sm-3 col-xs-7"><i class="fa fa-comments"></i> 3 <span class="visible-xs-inline">COMMENTS</span></div>
                <div class="post-date col-sm-7 hidden-xs"><?php the_date(); ?></div>
            </div>
        </div>
  		<?php
		if ($post_number == 6) { echo '</div><hr>'; }

	} else if ($post_number >= 7 && $post_number <= 13) { 
		if ($post_number == 7) { echo '<div class="row tertiary-articles"><h1>Some Title</h1>'; } ?>
            <div class="col-lg-2 col-sm-4 col-xs-6">
                <p class="post-category"><?php the_category(', '); ?></p>
                <?php the_title( sprintf( '<p class="article-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></p>' ); 
                the_excerpt(); ?>
                <p class="featured-text"><a href="<?php echo esc_url( get_permalink() ); ?>" class="continue">Continue...</a></p>
                <div class="post-details row no-gutter">
                    <div class="share col-md-3 col-xs-2"><i class="fa fa-share"></i></div>
                    <div class="comments col-md-4 col-xs-10"><i class="fa fa-comments"></i> 3</div>
                    <div class="post-date col-md-5 hidden-xs"><?php the_date(); ?></div>
                </div>
            </div>
    <?php

     	if ($post_number == 13) { echo '</div>'; }

	 } ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<!--div class="entry-meta"-->
			<?php //actually_posted_on(); ?>
		<!--/div--><!-- .entry-meta -->
		<?php endif; ?>
	<!--/header--><!-- .entry-header -->

	<!--div class="entry-content"-->

		<?php

			//the_content( sprintf(
				/* translators: %s: Name of current post. */
				//wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'actually' ), array( 'span' => array( 'class' => array() ) ) ),
				//the_title( '<span class="screen-reader-text">"', '"</span>', false )
			//) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'actually' ),
				'after'  => '</div>',
			) );
		?>
	<!--/div--><!-- .entry-content -->

	<!--footer class="entry-footer"-->
		<?php //actually_entry_footer(); ?>
	<!--/footer--><!-- .entry-footer -->
<!--/article--><!-- #post-## -->
