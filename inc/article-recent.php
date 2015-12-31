<?php 
    $home_page_excerpt = get_field('home_page_excerpt');
?>
<div class="col-md-6 col-xs-12">
    <p class="post-category"><?php the_category(', '); ?></p>
    <?php
	if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
		the_post_thumbnail();
	}
	the_title( sprintf( '<p class="article-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></p>' );
    echo "<p>" . $home_page_excerpt . "</p>"; 
    ?>
    <p class="featured-text"><a href="<?php echo esc_url( get_permalink() ); ?>" class="continue">Read more...</a></p>
    <div class="post-details row no-gutter">
        <!--div class="share col-xs-3"><i class="fa fa-share"></i> Share</div-->
        <div class="comments col-xs-6"><i class="fa fa-comments"></i> <?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?></div>
        <div class="post-date col-xs-6 text-right"><?php the_time('F j, Y'); ?></div>
    </div>
</div>