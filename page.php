<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package DanfossProject
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
		<div class="newsplace container">
		<div class="row allnews">
				<div class="col-md-4 col-sm-12">
				<div class="news new1">
					<?php if(is_active_sidebar('box1')) : ?>
            <?php dynamic_sidebar('box1'); ?>
          <?php endif; ?>

				</div>
				</div>


				<div class="col-md-4 col-sm-12">
				<div class="news new2">
					<?php if(is_active_sidebar('box2')) : ?>
						<?php dynamic_sidebar('box2'); ?>
					<?php endif; ?>
				</div>
				</div>


				<div class="col-md-4 col-sm-12">
				<div class="news new3">
					<?php if(is_active_sidebar('box3')) : ?>
 					 <?php dynamic_sidebar('box3'); ?>
 				 <?php endif; ?>
				</div>
				</div>
		</div>
		</div>

	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
