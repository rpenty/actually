<?php
/**
Template Name: Home Page
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package actually
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<hr>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php //get_template_part( 'template-parts/content', 'front' ); 

				$post_number = 0;
				$category_post_number = 0;

				

				global $post;
				$myposts = get_posts('numberposts=7');


				$home_page_category = get_field('category');
				$home_page_tag = get_field('tag');

				foreach($myposts as $post) :
				
					if ($post_number == 0) { 
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
					}

					$post_number++;

				endforeach;
				
				$args = array ('numberposts' => 6, 'offset' => 7, 'category_name' => $home_page_category);
				$mycatposts = get_posts($args);
				foreach($mycatposts as $post) :

					if ($category_post_number == 0) { echo '<div class="row tertiary-articles"><h1>' . $home_page_category . '</h1>'; }
            			get_template_part( 'inc/article', 'tertiary' );
     				if ($category_post_number == 5) { echo '</div>'; }

					$category_post_number++;
				endforeach;


 			?>


			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
