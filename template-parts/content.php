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

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php if ($post_number == 0) { 
        get_template_part( 'inc/article', 'featured' );
        echo '<hr class="visible-xs-block visible-sm-block">';
    } else if ($post_number == 1 || $post_number == 2) { 
	   if ($post_number == 1) { echo '<div class="row recent-articles">'; }
            get_template_part( 'inc/article', 'recent' );
        if ($post_number == 2) { echo '</div><hr>'; }

  	} else if ($post_number >= 3 && $post_number <= 6) { 
  		if ($post_number == 3) { echo '<div class="row sub-articles">'; }
  		    get_template_part( 'inc/article', 'sub' );
		if ($post_number == 6) { echo '</div><hr>'; }
	} else if ($post_number >= 7 && $post_number <= 13) { 
		if ($post_number == 7) { echo '<div class="row tertiary-articles"><h1>Some Title</h1>'; }
            get_template_part( 'inc/article', 'tertiary' );
     	if ($post_number == 13) { echo '</div>'; }

	 } ?>

	<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'actually' ),
			'after'  => '</div>',
		) );
	?>


</article><!-- #post-## -->
