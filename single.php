<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package thenobility
 */

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

<div <?php if(has_post_thumbnail()) : ?> style="background-image: url(<?php the_post_thumbnail_url('large') ?>);"<?php endif; ?> class="thenobility-page-title-area">
	<div class="container">
		<div class="row ">
			<div class="col-md-12 text-<?php echo $text_title_direction; ?>">				
				<h2><?php the_title(); ?></h2>		
				<?php if(function_exists('bcn_display')){bcn_display(); } ?>				
			</div>
		</div>
	</div>
</div>

<div id="primary" class="content-area thenobility-content-area-padding">
		<main id="main" class="site-main">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="thenobility-article-list">
					<?php

						get_template_part( 'template-parts/content', get_post_type() );

						$single_post_pagenation = cs_get_option('enable_single_post_pagination');

							if($single_post_pagenation != false) {the_post_navigation(); }

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;		
					?>
				</div>
			</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php endwhile; ?> <!--End of the loop.--> 

<?php
get_footer();
