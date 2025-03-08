<?php
/**
 * Template Name: Page Yoga
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


<div class="wrapper no-padding-top" id="full-width-page-wrapper">
	<main class="site-main overflow-hidden" id="main" role="main">
		<div id="main-slider">
			<?php masterslider(9); ?>
		</div>
		<div id="go-here"></div>
		<div class="container-fluid green plant-background-4 pb-6" id="content">
			<div class="container">
				<div class="row mt-6 text-center">
					<div class="col-md-12 col-12">
						<h4 class="font-weight-bold bitter mb-4"><?php _e( '¿Qué es el Yoga?', 'understrap-master' ); ?></h5>
					</div>
					<div class="col-lg-12 col-md-12 col-12">
						<p class="big brown"><?php _e( '«El Yoga le da prioridad al cuerpo físico, que es el soporte de la existencia 
						del alma y su actividad. La pureza de la mente es imposible sin la pureza del cuerpo en la que este funciona y por la cual se ve afectado». - Swami Vishnudevananada', 'understrap-master' ); ?></p>
						<p class="big brown"><?php _e( 'Descubre nuestras clases semanales de Yoga en Anayansi.', 'understrap-master' ); ?></p>
						<a class="btn no-radius btn-primary big mt-4" href="<?php echo get_site_url();?>/contacto/"><?php _e( 'Más información ', 'understrap-master' ); ?></a>
					</div>
				</div>
				<div class="row mt-6">
					<div class="col-xl-7 col-lg-7 col-md-12 ">
						<p><?php _e( 'El Yoga anima a cada persona a reconocer que son soberanos de su propio ser y, por lo tanto, deben ingresar a la práctica de manera responsable, 
						tratándose con amabilidad y aceptación, explorando sus zonas de confort y desafiando sus límites, mientras se abstienen de forzar en la práctica de asana o cualquier otro ejercicio.', 'understrap-master' ); ?></p>
						<p><?php _e( 'Durante las sesiones utilizamos una variedad de prácticas que incluyen: asana, pranayama, bandha, mantra, mudhra y diferentes técnicas de meditación, extraídas de la sabiduría del Hatha Yoga 
						tradicional, así como del Kundalini Yoga. La práctica tiene un enfoque espiritual, aunque no religioso. La unión (yoga) comienza dentro, uniendo todas las partes de nuestro ser, luego se expande para 
						conectarnos con la divinidad de la naturaleza, el cosmos y todo el universo. «Debes tener en cuenta que el cuerpo, la mente y el espíritu no son tres, son uno». - Hatha Yoga Pradipika.', 'understrap-master' ); ?></p>
						<?php /*<p><?php _e( '<strong>Instructora:</strong> Julia, Licenciada en Artes Corporales por la Universidad Estadual de Campines (Brasil). Conoció el Yoga en el 2003 y sintió que había encontrado lo que buscaba. A partir 
						de entonces, en 2004 se hizo instructora de Yoga,  más de 500 h, practicó la Tradición Vedanta durante 5 años en India.', 'understrap-master' ); ?></p>
						<p><?php _e( 'En paralelo, se hizo Doula y fue madre, acercándose al mundo del embarazo, el parto y la crianza. Se especializó en Yoga Pre y Post Natal y Lactancia Materna. Actualmente sigue estudiando, practicando 
						y con un profundo agradecimiento al Yoga, compartiendo sus experiencias para vivir más consciente.', 'understrap-master' ); ?></p> */ ?>
						<div class="mt-4">
							<h4 class="font-weight-bold bitter mb-4"><?php _e( '¿Qué es el Chi Kung?', 'understrap-master' ); ?></h5>
							<p><?php _e( 'El Chi Kung o Qi Gong, es una técnica de sanación, procedente de la tradición china y sostiene sus principios en la importancia de canalizar de forma adecuada la energía vital a través de los diferentes meridianos que recorren nuestro cuerpo.', 'understrap-master' ); ?></p>
							<p><?php _e( 'La técnica del Chi kung, busca la sincronía armónica de los tres procesos vitales, cuerpo, mente (corazón) y respiración. La tradición oriental se refiere a estos tres procesos como los “tres tesoros”. Por ello, al trabajar correctamente, en todos y cada uno de estos procesos, 
							se abren los canales o meridianos por los que circula nuestra energía vital, permitiendo que ésta fluya de forma correcta.', 'understrap-master' ); ?></p>
							<p class="big brown"><?php _e( 'Infórmate de nuestros talleres semanales de Yoga y Chi Kung en Anayansi.', 'understrap-master' ); ?></p>
							<a class="btn no-radius btn-primary big mt-4" href="<?php echo get_site_url();?>/contacto/"><?php _e( 'Más información ', 'understrap-master' ); ?></a>
						</div>
					</div>
					<div class="col-xl-5 offset-xl-0 col-lg-5 col-md-12 order-lg-last order-first mb-5">
						<img class='img-responsive' src='<?php echo get_site_url();?>/wp-content/uploads/2022/07/D2_9934.jpg' alt='<?php _e( 'Hatha Yoga Anayansi Imagen 1', 'understrap-master' ); ?>'>
					</div>
				</div>
			</div><!-- #content -->
		</div>
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-12">
						<?php masterslider(10); ?>
					</div>
				</div>
			</div>
		</div>
	</main><!-- #main -->
	
	<div class="container mt-6">
		<div class="row green bitter text-center" id="activity-blocks">
				<div class="col-12 col-md-10 offset-md-1 mb-4">
					<h5><?php _e( 'Consulta otras actividades de Anayansi', 'understrap-master' ); ?></h5>
				</div>
				<div class="col-md-4">
					<div class="block">
						<a href="<?php echo get_site_url();?>/mindfulness-y-autocompasion/" class="" title="<?php _e( 'Ir a Mindfulness y Autocompasión', 'understrap-master' ); ?>">
							<img class='img-responsive' src='<?php echo get_site_url();?>/img/anayansi-activity-mindfull
							.jpg' alt='<?php _e( 'Imagen Mindfulness y Autocompasión', 'understrap-master' ); ?>'>
							<h6 class="big mt-2 mb-2"><?php _e( 'Mindfulness y Autocompasión', 'understrap-master' ); ?></h6>
							<p class="black fira pl-3 pr-3"><?php _e( 'Descubre tu presencia amorosa conectada.', 'understrap-master' ); ?></p>
						</a>
						<a href="<?php echo get_site_url();?>/mindfulness-y-autocompasion/" class="btn w-100 no-radius" title="<?php _e( 'Ir a Mindfulness y Autocompasión', 'understrap-master' ); ?>">
							<?php _e( 'Ver más', 'understrap-master' ); ?>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="block">
						<a href="<?php echo get_site_url();?>/coaching/" class="" title="<?php _e( 'Ir a Coaching', 'understrap-master' ); ?>">
							<img class='img-responsive' src='<?php echo get_site_url();?>/img/anayansi-activity-coaching
							.jpg' alt='<?php _e( 'Imagen Coaching', 'understrap-master' ); ?>'>
							<h6 class="big mt-2 mb-2"><?php _e( 'Coaching', 'understrap-master' ); ?></h6>
							<p class="black fira pl-3 pr-3"><?php _e( 'Encuentra tu propósito en la vida.', 'understrap-master' ); ?></p>
						</a>
						<a href="<?php echo get_site_url();?>/coaching/" class="btn w-100 no-radius" title="<?php _e( 'Ir a Coaching', 'understrap-master' ); ?>">
							<?php _e( 'Ver más', 'understrap-master' ); ?>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="block">
						<a href="<?php echo get_site_url();?>/chamanismo/" class="" title="<?php _e( 'Ir a Chamanismo', 'understrap-master' ); ?>">
							<img class='img-responsive' src='<?php echo get_site_url();?>/img/anayansi-activity-chamanismo.jpg' alt='<?php _e( 'Imagen Chamanismo', 'understrap-master' ); ?>'>
							<h6 class="big mt-2 mb-2"><?php _e( 'Chamanismo', 'understrap-master' ); ?></h6>
							<p class="black fira pl-3 pr-3"><?php _e( 'Siéntete en conexión con los poderes de la naturaleza.', 'understrap-master' ); ?></p>
						</a>
						<a href="<?php echo get_site_url();?>/chamanismo/" class="btn w-100 no-radius" title="<?php _e( 'Ir a Chamanismo', 'understrap-master' ); ?>">
							<?php _e( 'Ver más', 'understrap-master' ); ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- #full-width-page-wrapper -->

<?php get_footer();
