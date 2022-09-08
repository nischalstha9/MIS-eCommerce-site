<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cosmobit
 */

get_header();
$cosmobit_archive_pg_sidebar_option=get_theme_mod('cosmobit_archive_pg_sidebar_option', 'right_sidebar');
?>
<section class="dt__posts dt__posts--one dt-py-default">
	<div class="dt-container">
		<div class="dt-row dt-g-5">
			<?php if($cosmobit_archive_pg_sidebar_option == 'left_sidebar'): get_sidebar(); endif; ?>
			<?php if($cosmobit_archive_pg_sidebar_option == 'no_sidebar'): ?>
				<div class="dt-col-lg-12 dt-col-md-12 dt-col-12 wow fadeIn">
			<?php else: ?>	
				<div class="dt-col-lg-8 dt-col-md-12 dt-col-12 wow fadeIn">
			<?php endif; ?>	
				<?php if( have_posts() ): ?>
					<?php 
					// Start the loop.
					while( have_posts() ) : the_post();
							get_template_part('template-parts/content','page'); 
					endwhile; 
					// End the loop.
					
						 // Pagination.
						the_posts_pagination( array(
							'prev_text'          => '<i class="fa fa-angle-double-left"></i>',
							'next_text'          => '<i class="fa fa-angle-double-right"></i>'
						) );
						
						// If no content, include the "No posts found" template.
					else: 
						get_template_part('template-parts/content','none'); 
					endif; ?>
			</div>
			<?php if($cosmobit_archive_pg_sidebar_option == 'right_sidebar'): get_sidebar(); endif; ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
