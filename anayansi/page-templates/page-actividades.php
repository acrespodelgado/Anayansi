<?php
/**
 * Template Name: Page Actividades
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


<div class="wrapper" id="full-width-page-wrapper">
	<main class="site-main overflow-hidden" id="main" role="main">
		<div class="container green" id="content">	
			<div class="row green bitter text-center">
				<div class="col-12 col-md-10 offset-md-1 mb-4">
					<h5><?php _e( 'Actividades para el bienestar', 'understrap-master' ); ?></h5>
				</div>
			</div>
			
			<div class="row green bitter text-center" id="activity-blocks">
				<div class="col-md-6 mb-5">
					<div class="block">
						<a href="<?php echo get_site_url();?>/coaching/" class="" title="<?php _e( 'Ir a Coaching', 'understrap-master' ); ?>">
							<img class='img-responsive' src='<?php echo get_site_url();?>/img/anayansi-large-coaching
							.jpg' alt='<?php _e( 'Imagen Coaching', 'understrap-master' ); ?>'>
							<h6 class="big mt-2 mb-2"><?php _e( 'Coaching', 'understrap-master' ); ?></h6>
							<p class="black fira pl-3 pr-3"><?php _e( 'Encuentra tu propósito en la vida.', 'understrap-master' ); ?></p>
						</a>
						<a href="<?php echo get_site_url();?>/coaching/" class="btn w-100 no-radius mt-4" title="<?php _e( 'Ir a Coaching', 'understrap-master' ); ?>">
							<?php _e( 'Ver más', 'understrap-master' ); ?>
						</a>
					</div>
				</div>
				<div class="col-md-6 mb-5">
					<div class="block">
						<a href="<?php echo get_site_url();?>/mindfulness-y-autocompasion/" class="" title="<?php _e( 'Ir a Mindfulness y Autocompasión', 'understrap-master' ); ?>">
							<img class='img-responsive' src='<?php echo get_site_url();?>/img/anayansi-large-mindfull
							.jpg' alt='<?php _e( 'Imagen Mindfulness y Autocompasión', 'understrap-master' ); ?>'>
							<h6 class="big mt-2 mb-2"><?php _e( 'Mindfulness y Autocompasión', 'understrap-master' ); ?></h6>
							<p class="black fira pl-3 pr-3"><?php _e( 'Descubre tu presencia amorosa conectada.', 'understrap-master' ); ?></p>
						</a>
						<a href="<?php echo get_site_url();?>/mindfulness-y-autocompasion/" class="btn w-100 no-radius mt-4" title="<?php _e( 'Ir a Mindfulness y Autocompasión', 'understrap-master' ); ?>">
							<?php _e( 'Ver más', 'understrap-master' ); ?>
						</a>
					</div>
				</div>
				<div class="col-md-6 mb-5">
					<div class="block">
						<a href="<?php echo get_site_url();?>/hatha-yoga/" class="" title="<?php _e( 'Ir a Hatha Yoga', 'understrap-master' ); ?>">
							<img class='img-responsive' src='<?php echo get_site_url();?>/img/anayansi-large-yoga.jpg' alt='<?php _e( 'Imagen Hatha Yoga', 'understrap-master' ); ?>'>
							<h6 class="big mt-2 mb-2"><?php _e( 'Hatha Yoga', 'understrap-master' ); ?></h6>
							<p class="black fira pl-3 pr-3"><?php _e( 'Cuida de tu cuerpo, mente y corazón.', 'understrap-master' ); ?></p>
						</a>
						<a href="<?php echo get_site_url();?>/hatha-yoga/" class="btn w-100 no-radius mt-4" title="<?php _e( 'Ir a Hatha Yoga', 'understrap-master' ); ?>">
							<?php _e( 'Ver más', 'understrap-master' ); ?>
						</a>
					</div>
				</div>
				<div class="col-md-6 mb-5">
					<div class="block">
						<a href="<?php echo get_site_url();?>/chamanismo/" class="" title="<?php _e( 'Ir a Chamanismo', 'understrap-master' ); ?>">
							<img class='img-responsive' src='<?php echo get_site_url();?>/img/anayansi-large-chamanismo.jpg' alt='<?php _e( 'Imagen Chamanismo', 'understrap-master' ); ?>'>
							<h6 class="big mt-2 mb-2"><?php _e( 'Chamanismo', 'understrap-master' ); ?></h6>
							<p class="black fira pl-3 pr-3"><?php _e( 'Siéntete en conexión con los poderes de la naturaleza.', 'understrap-master' ); ?></p>
						</a>
						<a href="<?php echo get_site_url();?>/chamanismo/" class="btn w-100 no-radius mt-4" title="<?php _e( 'Ir a Chamanismo', 'understrap-master' ); ?>">
							<?php _e( 'Ver más', 'understrap-master' ); ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</main><!-- #main -->	
</div><!-- #full-width-page-wrapper -->

<?php get_footer();
