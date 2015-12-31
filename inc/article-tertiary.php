<?php 
    $home_page_excerpt = get_field('home_page_excerpt');
?>
<div class="col-lg-2 col-sm-4 col-xs-12">
    <p class="post-category"><?php the_category(', '); ?></p>
    <?php the_title( sprintf( '<p class="article-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></p>' ); 
    echo "<p>" . $home_page_excerpt . "</p>"; 
    the_excerpt(); ?>
    <p class="featured-text"><a href="<?php echo esc_url( get_permalink() ); ?>" class="continue">More...</a></p>
    <div class="post-details row no-gutter">
        <!--div class="share col-md-3 col-xs-2"><i class="fa fa-share"></i></div-->
        <div class="comments col-md-4 col-xs-10"><i class="fa fa-comments"></i> <?php comments_number( '0', '1', '%' ); ?></div>
        <div class="post-date col-md-5 hidden-xs"><?php the_time('m/d/y'); ?></div>
    </div>
</div>