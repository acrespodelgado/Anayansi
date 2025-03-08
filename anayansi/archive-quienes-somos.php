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
?>

<div class="wrapper" id="full-width-page-wrapper">
	<main class="site-main" id="main">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 col-md-12 text-center">
					<h4 class="pacifico green font-weight-normal mb-5"><?php _e( '“Mucha gente pequeña, haciendo pequeñas cosas, pueden cambiar el mundo” (Eduardo Galeano)', 'understrap-master' ); ?></h4>	
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1 col-md-12">
					<?php if ( have_posts() ) : ?>
						<div class="row">
							<?php while ( have_posts() ) : the_post(); ?>
								<div class="col-md-6">
									<?php get_template_part( 'loop-templates/content', get_post_format() ); ?>	
								</div>
							<?php endwhile; ?>
						</div>
					<?php else : ?>
						<?php get_template_part( 'loop-templates/content', 'none' ); ?>
					<?php endif; ?>
					<!-- The pagination component -->
					<?php understrap_pagination(); ?>
				</div>
			</div>
		</div>	
	</main><!-- #main -->
</div><!-- #archive-wrapper -->

<?php get_footer();
