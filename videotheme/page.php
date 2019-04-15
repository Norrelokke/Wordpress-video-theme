<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 */

get_header(); ?>

	<?php dynamic_sidebar( 'header-ad' ); ?>

			<div id="primary" class="content-area">

				<div id="main" class="site-main" >

					<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', 'page' );
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							endwhile; 
					?>

				</div><!-- #main -->
			</div><!-- #primary -->

	<?php
get_sidebar();
get_footer();
