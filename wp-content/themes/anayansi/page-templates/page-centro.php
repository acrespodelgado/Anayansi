<?php
/**
 * Template Name: Page Centro
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
			<div class="row mb-5">
				<div class="col-md-6 col-12">
					<h5 class="font-weight-normal mt-4"><?php _e( '“Ve despacio, que a donde tienes que llegar es tí mismo”', 'understrap-master' ); ?></h5>
				</div>
				<div class="col-lg-6 col-md-6 col-12">
					<h2><?php _e( 'Centro Anayansi, espacio de paz', 'understrap-master' ); ?></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<img class='no-responsive pull-right' src='<?php echo get_site_url();?>/img/anayansi-casa-1.jpg' alt='<?php _e( 'Centro Anayansi Imagen 1', 'understrap-master' ); ?>'>
				</div>
				<div class="col-lg-4 col-md-12 mt-xl-5 mt-lg-3 mt-5 text-lg-left text-center">
					<p class="big"><?php _e( 'Es uno de los <strong>pioneros en la provincia de Cádiz</strong> que se creó hace 20 años con una <strong>visión integral para el desarrollo personal, físico, mental y espiritual.</strong>', 'understrap-master' ); ?></p>
					<p class="big"><?php _e( 'Nace de la inspiración de vida consciente de una familia, y se nutre y crece con el apoyo de muchos y queridos amigos y amigas a los que estaremos agradecidos para siempre. 
					Es un espacio donde se vive y <strong>se realizan actividades enfocadas en el despertar de la conciencia personal y universal</strong>, en el descubrimiento de aquello que realmente somos y en el resurgimiento del 
					verdadero ser humano que podemos llegar a ser disfrutando de la paz interna y la alegría de vivir.', 'understrap-master' ); ?></p>
				</div>
			</div>
			<div class="row space">
				<div class="col-md-5 col-lg-4 mt-xl-0 mt-lg-5 mt-0">
					<p class="big brown font-weight-bold"><?php _e( 'ANAYANSI es una palabra quechua que significa “la llave de tu felicidad”.', 'understrap-master' ); ?></p>
					<p class="big"><?php _e( 'Entendemos la felicidad como algo intrínseco, que está dentro de nosotros. No se trata de buscar la felicidad fuera, sino de vivir en aceptación y amorosidad con lo que hay y con lo que somos, transitando lo que tenga que ser.', 'understrap-master' ); ?></p>
					<p class="big"><?php _e( 'En Anayansi te ofrecemos diferentes caminos dirigidos a tu crecimiento personal, pero <strong>solo tú puedes encontrar la llave que abre la puerta a tu propio bienestar</strong> socioemocional, a tu felicidad interna.', 'understrap-master' ); ?></p>
				</div>
				<div class="col-xl-7 offset-xl-1 col-lg-8 col-md-7 mt-lg-3 mt-6">
					<img class='img-fluid pull-right' src='<?php echo get_site_url();?>/img/anayansi-casa-2.jpg' alt='<?php _e( 'Centro Anayansi Imagen 1', 'understrap-master' ); ?>'>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-4 col-md-5 mt-lg-0 mt-5">
					<img class='no-responsive pull-right' src='<?php echo get_site_url();?>/img/anayansi-casa-3.jpg' alt='<?php _e( 'Centro Anayansi Imagen 1', 'understrap-master' ); ?>'>
				</div>
				<div class="col-xl-7 offset-xl-1 col-md-7 mt-lg-5 mt-0">
					<h4 class="brown font-weight-bold mb-4 mt-md-0 mt-4"><?php _e( 'Espacios en Anayansi:', 'understrap-master' ); ?></h4>
					<p class="big"><?php _e( 'Estamos situados en un enclave natural, rodeados de un bosque de pinos piñoneros, lejos de la ciudad, de la contaminación acústica, del movimiento de la población…
Concretamente en La Muela, una bonita y antigua pedanía de Vejer de la Frontera (Cádiz). Nuestros espacios son: La Sala Anayansi, El Domo Azul, El Temazcal, El Tipi indio, La Jaima y el Albergue.', 'understrap-master' ); ?></p>
					<p class="big"><?php _e( 'Valoramos mucho la comunidad de La Muela donde estamos viviendo desde hace muchos años. El respeto a las costumbres y usos, la cortesía, la amabilidad y la sencillez son nuestros 
					valores para integrarnos como uno más. También, compartimos los trabajos de campo, jardinería y mantenimiento que se generan en el centro y en la finca con la comunidad de vecinos y vecinas que nos rodean. ', 'understrap-master' ); ?></p>
				</div>
			</div>
		</div><!-- #content -->
	</main><!-- #main -->
	<div class="container mt-6">
		<div class="row">
			<div class="col-md-12">
				<?php masterslider(6); ?>
			</div>
		</div>
	</div>
</div><!-- #full-width-page-wrapper -->

<?php get_footer();
