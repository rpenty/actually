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
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php
	include(locate_template('inc/article-sub.php'));
?>
	</article>
<?php	
	if (($archive_post_number % 4 == 0) && $archive_post_number != 1 ) { echo '</div><hr><div class="row sub-articles">'; }

?>

