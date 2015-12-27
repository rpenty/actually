<?php 
    $home_page_excerpt = get_field('home_page_excerpt');
?>
<div class="col-lg-3 col-xs-6">
    <?php if (is_null($archive_post_number)) { ?>
    <p class="post-category hidden-xs"><?php the_category(', '); ?></p>
    <?php } ?>
    <?php
	if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
		the_post_thumbnail();
	} ?>
    <?php if (is_null($archive_post_number)) { ?>
        <p class="post-category visible-xs-block"><?php the_category(', '); ?></p>
    <?php } ?>
    
    <?php the_title( sprintf( '<p class="article-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></p>' );
    echo "<p>" . $home_page_excerpt . "</p>"; ?>
    <p class="featured-text hidden-xs"><a href="<?php echo esc_url( get_permalink() ); ?>" class="continue">Continue reading...</a></p>
    <div class="post-details row no-gutter">
        <div class="share col-sm-2 col-xs-5"><i class="fa fa-share"></i> <span class="visible-xs-inline">SHARE</span></div>
        <div class="comments col-sm-3 col-xs-7"><i class="fa fa-comments"></i> 3 <span class="visible-xs-inline">COMMENTS</span></div>
        <div class="post-date col-sm-7 hidden-xs"><?php the_date(); ?></div>
    </div>
</div>