<?php
/**
 * Template Name: Page Alojamiento
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
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-12 mt-lg-5 text-lg-left text-center">
					<h3 class="mb-4"><?php _e( 'Alojamiento y naturaleza', 'understrap-master' ); ?></h3>
					<p class="big brown"><?php _e( 'Un espacio natural en Vejer de la Frontera donde realizar actividades para tu bienestar, respirar y vivir.', 'understrap-master' ); ?></p>
					<p class="big brown"><?php _e( 'El lugar es una finca rodeada de arboleda compuesta de pinos piñoneros, acebuches, chaparros y campos de cultivo. Tiene 5 hectáreas, 4 de ellas totalmente 
					silvestres y entregadas a la Madre Tierra. Allí podremos pasear, descansar en la naturaleza, escuchar el sonido de los pájaros, contemplar la vegetación autóctona... dándonos un buen 
					baño de bosque.', 'understrap-master' ); ?></p>
				</div>
				<div class="col-xl-7 offset-xl-1 col-lg-8  col-md-12">
					<img class='no-responsive pull-left mt-lg-0 mt-5' src='<?php echo get_site_url();?>/img/alojamiento-1.jpg' alt='<?php _e( 'Centro Anayansi Imagen 1', 'understrap-master' ); ?>'>
				</div>
			</div>
		</div>
		<div class="container-fluid plant-background-4 pt-md-5 pt-0">		
			<div class="row">
				<div class="col-md-12 p-0">
					<div class="container-fluid pb-6 plant-background-5">
						<div class="container">
							<div class="row space">
								<div class="col-lg-5 col-md-6">
									<p class="big brown font-weight-normal mt-6"><?php _e( 'Tenemos opción de alojamiento en nuestro <strong>Albergue rural</strong> con capacidad para 12 personas en habitaciones compartidas con literas, 
									un comedor-cocina, aseos y duchas.', 'understrap-master' ); ?></p>
									<p class="big brown font-weight-normal"><?php _e( 'Todo construido en un estilo sencillo y funcional, donde se convive compartiendo y colaborando en las tareas de limpieza y orden.', 'understrap-master' ); ?></p>
									<p class="big brown font-weight-normal"><?php _e( 'Además contamos con un gran <strong>Tipi indio</strong> donde puedes meditar en silencio o pasar una noche cerca de las estrellas.', 'understrap-master' ); ?></p>
									<a href="<?php echo get_site_url();?>/contacto/" class="btn w-100 no-radius mt-lg-5 mt-3" title="<?php _e( 'Contactar con Anayansi', 'understrap-master' ); ?>">
										<?php _e( 'Me interesa alojarme en Anayansi', 'understrap-master' ); ?>
									</a>
								</div>
								<div class="col-lg-7 offset-lg-0 col-md-6 mt-lg-3 mt-5">
									<img class='img-fluid pull-right' src='<?php echo get_site_url();?>/img/alojamiento-2.jpg' alt='<?php _e( 'Centro Anayansi Imagen 1', 'understrap-master' ); ?>'>
								</div>
							</div>
						</div><!-- #content -->
					</div>
				</div>
			</div>
		</div>

	</main><!-- #main -->

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php masterslider(13); ?>		
			</div>
		</div>
	</div>
	
</div><!-- #full-width-page-wrapper -->

<?php get_footer();
