<?php 
    $home_page_excerpt = get_field('home_page_excerpt');
?>
<div class="col-lg-3 col-sm-6 col-xs-12">
    <?php if (is_null($archive_post_number)) { ?>
    <!--p class="post-category hidden-xs"--><?php //the_category(', '); ?><!--/p-->
    <?php } ?>
    <?php
	if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
		the_post_thumbnail();
	} ?>
    <?php if (is_null($archive_post_number)) { ?>
        <!--p class="post-category visible-xs-block"--><?php //the_category(', '); ?><!--/p-->
    <?php } ?>
    
    <?php the_title( sprintf( '<p class="article-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></p>' );
    echo "<p>" . $home_page_excerpt . "</p>"; ?>
    <p class="featured-text hidden-xs"><a href="<?php echo esc_url( get_permalink() ); ?>" class="continue">Read more...</a></p>
    <div class="post-details row no-gutter">
        <!--div class="share col-sm-2 col-xs-5"><i class="fa fa-share"></i> <span class="visible-xs-inline">SHARE</span></div-->
        <div class="comments col-sm-5 col-xs-12"><i class="fa fa-comments"></i> <?php comments_number( '', '1 <span class="visible-xs-inline">COMMENT</span>', '% <span class="visible-xs-inline">COMMENTS</span>' ); ?></div>
        <div class="post-date col-sm-7 hidden-xs text-right"><?php the_time('F j, Y'); ?></div>
    </div>
</div>