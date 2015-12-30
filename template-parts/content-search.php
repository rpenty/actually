<?php
/**
 * Template part for displaying results in search pages.
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

<?php  
  	if ($archive_post_number == 1) { echo '<div class="row sub-articles">'; }
	
	include(locate_template('inc/article-sub.php'));

	if (($archive_post_number % 4 == 0) && $archive_post_number != 1 ) { echo '</div><hr><div class="row sub-articles">'; }

?>

<!--article id="post-<?php the_ID(); ?>" <?php post_class(); ?>-->
	<!--header class="entry-header"-->
		<?php //the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php //if ( 'post' == get_post_type() ) : ?>
		<!--div class="entry-meta"-->
			<?php //actually_posted_on(); ?>
		<!--/div--><!-- .entry-meta -->
		<?php //endif; ?>
	<!--/header--><!-- .entry-header -->

	<!--div class="entry-summary"-->
		<?php //the_excerpt(); ?>
	<!--/div--><!-- .entry-summary -->

	<!--footer class="entry-footer"-->
		<?php //actually_entry_footer(); ?>
	<!--/footer--><!-- .entry-footer -->
<!--/article--><!-- #post-## -->

