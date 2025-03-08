<?php
/**
 * Template Name: Page Chamanismo
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
			<?php masterslider(11); ?>
		</div>
		<div id="go-here"></div>
		<div class="container-fluid green plant-background-4 pb-6" id="content">
			<div class="container">
				<div class="row mt-6 text-center">
					<div class="col-md-12 col-12">
						<h4 class="font-weight-normal pacifico mb-4"><?php _e( '“Antes de embarcarte en cualquier camino hazte la pregunta: ¿este camino tiene corazón? Carlos Castaneda.”', 'understrap-master' ); ?></h5>
					</div>
					<div class="col-lg-12 col-md-12 col-12">
						<p class="big brown"><?php _e( 'El chamanismo es un conjunto de métodos y habilidades que nuestros antepasados desarrollaron hace miles de años con un propósito de sanación, autoconocimiento, 
						empoderamiento personal y resolución de conflictos. Se ha practicado en muchas culturas indígenas de todo el mundo.', 'understrap-master' ); ?></p>
						
					</div>
				</div>
				<div class="row mt-6">
					<div class="col-lg-7 col-md-12 mt-5">
						<p><?php _e( 'En la actualidad, el chamanismo está volviendo a la vida contemporánea poco a poco. Este regreso ha sido posible gracias a concebir el chamanismo no como una religión, sino como la herramienta humana más antigua 
						utilizada para explorar la realización personal.', 'understrap-master' ); ?></p>
						<p><?php _e( 'El Chamanismo Tolteca es una manera de afrontar la vida, utilizando los dos lados de la conciencia, el lado racional (el arte del acecho) y el lado intuitivo (el arte del ensueño), para caminar en la vida 
						con la totalidad de nosotros mismos hacia el encuentro con la libertad. La impecabilidad, parar el diálogo interno, recapitular la historia personal, trabajar con el desatino controlado, evitar las fugas de energía, 
						practicar los no haceres, vivir en el anhelado silencio interno… son algunas de las herramientas para el despertar de la consciencia.', 'understrap-master' ); ?></p>						
						<p><?php _e( '”Ya me di al poder que mi destino rige, no me agarro ya de nada, para así no tener nada que defender, no tengo pensamientos, para así poder ver. No temo ya a nada, para así poder acordarme de mí, 
						sereno y desprendido, me dejará el águila pasar a la libertad.” El don del águila, Carlos Castaneda.', 'understrap-master' ); ?></p>
						<p><?php _e( '¿Quieres conocer más sobre el Chamanismo?', 'understrap-master' ); ?></p>
						<a class="btn no-radius btn-primary big mt-xl-5 mt-3" href="<?php echo get_site_url();?>/contacto/"><?php _e( 'Informame de próximos talleres', 'understrap-master' ); ?></a>
					</div>
					<div class="col-xl-4 offset-xl-0 col-lg-5 col-md-12 order-lg-last order-first">
						<img class='no-responsive pull-left mt-xl-0 mt-5' src='<?php echo get_site_url();?>/img/chamanismo-1.jpg' alt='<?php _e( 'Chamanismo Anayansi Imagen 1', 'understrap-master' ); ?>'>
					</div>
				</div>
			</div><!-- #content -->
		</div>
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-12">
						<?php masterslider(12); ?>
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
						<a href="<?php echo get_site_url();?>/hatha-yoga/" class="" title="<?php _e( 'Ir a Hatha Yoga', 'understrap-master' ); ?>">
							<img class='img-responsive' src='<?php echo get_site_url();?>/img/anayansi-activity-yoga.jpg' alt='<?php _e( 'Imagen Hatha Yoga', 'understrap-master' ); ?>'>
							<h6 class="big mt-2 mb-2"><?php _e( 'Hatha Yoga', 'understrap-master' ); ?></h6>
							<p class="black fira pl-3 pr-3"><?php _e( 'Cuida de tu cuerpo, mente y corazón.', 'understrap-master' ); ?></p>
						</a>
						<a href="<?php echo get_site_url();?>/hatha-yoga/" class="btn w-100 no-radius" title="<?php _e( 'Ir a Hatha Yoga', 'understrap-master' ); ?>">
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
			</div>
		</div>
	</div>
</div><!-- #full-width-page-wrapper -->

<?php get_footer();
