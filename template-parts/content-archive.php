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
$archive_post_number = $wp_query->current_post;
$archive_post_number = $archive_post_number + 1;
?>

<!--article id="post-<?php the_ID(); ?>" <?php post_class(); ?>-->

<?php  
  	if ($archive_post_number == 1) { echo '<div class="row sub-articles">'; }
	
	//get_template_part( 'inc/article', 'sub' );
	include(locate_template('inc/article-sub.php'));

	if (($archive_post_number % 4 == 0) && $archive_post_number != 1 ) { echo '</div><hr><div class="row sub-articles">'; }

//echo "rp test: " . $archive_post_number;
?>

		<?php
			/*wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'actually' ),
				'after'  => '</div>',
			) );*/
		?>
	<!--/div--><!-- .entry-content -->

	<!--footer class="entry-footer"-->
		<?php //actually_entry_footer(); ?>
	<!--/footer--><!-- .entry-footer -->
<!--/article--><!-- #post-## -->
