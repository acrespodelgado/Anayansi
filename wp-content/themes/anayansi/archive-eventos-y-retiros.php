<?php
/**
 * The template for displaying archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
//$paged = (get_query_var('paged')) ? get_query_var('paged') : 4;

$args = array(
	'post_type' => 'eventos-y-retiros',
	'posts_per_page' => 4,
	'orderby' => 'date',
	'order' => 'DESC'
);

$query = new WP_Query( $args );
$wp_query = $query;

?>

<div class="wrapper" id="full-width-page-wrapper">
	<main class="site-main" id="main">
		<div id="main-slider">
			<?php masterslider(16); ?>
		</div>
		<div id="go-here"></div>
		<div class="container" id="content">
			<div class="row mt-6">
				<div class="col-12">
					<?php if ( $query->have_posts() ) : ?>
						<?php $iteration = 0; ?>
						<div class="row">
							<?php while ( $query->have_posts() ) : $query->the_post(); ?>
								<?php if ( $iteration == 0 ) : ?>
									<div class="col-12">
										<?php get_template_part( 'loop-templates/content-eventos-y-retiros-large', get_post_format() ); ?>	
									</div>
								<?php else : ?>
									<div class="col-xs-12 col-md-4">
										<?php get_template_part( 'loop-templates/content-eventos-y-retiros-small', get_post_format() ); ?>	
									</div>
								<?php endif; ?>
								<?php $iteration += 1; ?>
							<?php endwhile; ?>
						</div>
					<?php else : ?>
						<?php get_template_part( 'loop-templates/content-eventos-y-retiros', 'none' ); ?>
					<?php endif; ?>
					<!-- The pagination component -->
					<?php
						understrap_pagination();
					?>
				</div>
			</div>
		</div>	
	</main><!-- #main -->
</div><!-- #archive-wrapper -->

<?php get_footer();
