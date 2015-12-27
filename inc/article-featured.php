<?php 
    $home_page_excerpt = get_field('home_page_excerpt');
?>
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
        <?php echo "<p>" . $home_page_excerpt . "</p>"; ?>
        <p class="featured-text"><a href="<?php echo esc_url( get_permalink() ); ?>" class="continue">Continue reading...</a></p>
        <div class="post-details row no-gutter">
            <div class="share col-md-5 col-xs-3"><i class="fa fa-share"></i> Share</div>
            <div class="comments col-md-7 col-xs-5"><i class="fa fa-comments"></i> 3 Comments</div>
            <div class="post-date col-xs-4 hidden-lg hidden-md"><?php the_date(); ?></div>
        </div>
    </div>
</div>