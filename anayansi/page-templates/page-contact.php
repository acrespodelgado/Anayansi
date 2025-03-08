<?php
/**
 * Template Name: Page Contact
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() ) : ?>
  <?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>


<div class="wrapper contact" id="full-width-page-wrapper">
	<main class="site-main overflow-hidden text-center" id="main" role="main">
		<div class="container green" id="content">
			<div class="row">
				<div class="col-md-12">
					<h3 class="bitter text-uppercase mb-0"><?php _e( 'Conecta con <br>nosotros', 'understrap-master' ); ?></h3>
				</div>
			</div>
			<div class="row mb-5">
				<div class="col-md-12 mt-5 font-weight-bold">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'loop-templates/content', 'page' ); ?>
					<?php endwhile;?>
				</div>
				
			</div>
			<?php echo do_shortcode( '[contact-form-7 id="90" title="Formulario de contacto"]'); ?>
		</div>
	</main><!-- #main -->

	<div class="container mt-6">
		<div class="row">
			<div class="col-md-12">
				<?php masterslider(14); ?>		
			</div>
		</div>
	</div>
	
</div><!-- #full-width-page-wrapper -->

<?php get_footer();
