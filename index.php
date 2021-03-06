<?php
/**
 * The template for displaying all pages
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package thenobility
 */

get_header();
?>

<div style="background-image: url(<?php the_post_thumbnail_url('large') ?>);" class="thenobility-page-title-area">
	<div class="container">
		<div class="row ">
			<div class="col-md-12 text-<?php echo esc_html($text_title_direction); ?>">				
				<h2><?php echo esc_html(the_title()); ?></h2>			
			</div>
		</div>
	</div>
</div>

<div id="primary" class="content-area thenobility-content-area-padding">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">
			<?php
			$full_width = cs_get_option('blog_full_width'); //From Codestar Theme Option

		?>
					<div class="<?php if($full_width != false) { echo "col-md-12";} else{ echo "col-md-8";}	?>">

						<div class="thenobility-article-list">
							<?php
							if ( have_posts() ) :
								if ( is_home() && ! is_front_page() ) : ?>
									<header>
										<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
									</header>
								<?php
								endif;
								/* Start the Loop */
								while ( have_posts() ) : the_post();
									/*
									 * Include the Post-Format-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
									 */
									get_template_part( 'template-parts/content', get_post_format() );
								endwhile; ?>	

								<div class="pagination-link">
									<?php
										post_pagination();
									?>
								</div>	

								<?php
							else :
								get_template_part( 'template-parts/content', 'none' );
						endif; ?>
						</div>
					</div>						
						<?php if($full_width == false){ get_sidebar(); }?>														
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
