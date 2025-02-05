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
				<div class="col-lg-6 col-md-12 text-lg-left text-center">
					<h3 class="mb-4"><?php _e( 'Alojamiento Oasis de Anayansi', 'understrap-master' ); ?></h3>
					<p class="big brown"><?php _e( 'Un espacio natural en Vejer de la Frontera donde realizar retiros o vacaciones para tu bienestar, respirar y desconectar.', 'understrap-master' ); ?></p>
					<p class="big brown"><?php _e( 'El lugar es una finca rodeada de arboleda compuesta de pinos piñoneros, acebuches, chaparros y campos de cultivo. Tiene 5 hectáreas, 4 de ellas totalmente 
						silvestres y entregadas a la Madre Tierra. Allí puedes pasear, descansar en la naturaleza, escuchar el sonido de los pájaros, contemplar la vegetación autóctona...
						y darte un buen baño de bosque.', 'understrap-master' ); ?></p>
					<p class="big brown"><?php _e( 'Existe una piscina de arena, con rocallas y agua salada, rodeada de césped natural que embellece el entorno y da protagonismo al elemento agua. 
					Ideal para darse un buen baño.', 'understrap-master' ); ?></p>
				</div>
				<div class="col-lg-6 col-md-12">
					<img class='img-responsive' src='<?php echo get_site_url();?>/img/alojamiento-1-new.jpg' alt='<?php _e( 'Centro Anayansi Imagen 1', 'understrap-master' ); ?>'>
				</div>
			</div>
		</div>
		<div class="container-fluid plant-background-4 pt-md-5 pt-0">		
			<div class="row mt-4">
				<div class="col-md-12 p-0">
					<div class="container-fluid pb-6 plant-background-5">
						<div class="container">
							<div class="row space">
								<div class="col-12">
									<div class="row align-center">
										<div class="col-12 col-md-6 col-lg-4">
											<ul class="brown">
												<li><p class="big brown font-weight-normal"><?php _e( 'Cabañas de madera (habitaciones dobles con baño privado). Se ha buscado un diseño integrador con la naturaleza, creando un espacio con mucho encanto.', 'understrap-master' ); ?></p></li>
											</ul>
										</div>
										<div class="col-12 col-md-6 col-lg-8">
											<?php echo do_shortcode('[iheu_ultimate_oxi  id="2"]'); ?>
										</div>
									</div>
									<div class="row align-center">
										<div class="col-12 col-md-6 col-lg-4">
											<ul class="brown">
												<li><p class="big brown font-weight-normal"><?php _e( '2 Habitaciones familiares (habitaciones, tipo albergue, con tres literas cada una y baño exterior).', 'understrap-master' ); ?></p></li>
											</ul>
										</div>
										<div class="col-12 col-md-6 col-lg-8">
											<?php echo do_shortcode('[iheu_ultimate_oxi  id="3"]'); ?>
										</div>
									</div>
									<div class="row align-center">
										<div class="col-12 col-md-6 col-lg-4">
											<ul class="brown">
												<li><p class="big brown font-weight-normal"><?php _e( 'Tipi indio (con dos camas y baño privado exterior). Disponible solo en verano. Una experiencia única, dormir en un autentico tipi indio.', 'understrap-master' ); ?></p></li>
											</ul>
										</div>
										<div class="col-12 col-md-6 col-lg-8">
											<?php echo do_shortcode('[iheu_ultimate_oxi  id="4"]'); ?>
										</div>
									</div>
										<?php /*
										<div class="col-12 col-md-3 col-lg-4">
											<div class="overflow-img">
												<img class='w-100 mt-2' src='<?php echo get_site_url();?>/img/alojamiento-2-new.jpg' alt='<?php _e( 'Centro Anayansi Imagen 2', 'understrap-master' ); ?>'>
											</div>
											<div class="overflow-img">
												<img class='w-100 mt-2' src='<?php echo get_site_url();?>/img/alojamiento-3-new.jpg' alt='<?php _e( 'Centro Anayansi Imagen 3', 'understrap-master' ); ?>'>
											</div>
											<div class="overflow-img">
												<img class='w-100 mt-2' src='<?php echo get_site_url();?>/img/alojamiento-4-new.jpg' alt='<?php _e( 'Centro Anayansi Imagen 4', 'understrap-master' ); ?>'>
											</div>
										</div>
										<div class="col-12 col-md-3 col-lg-4">
											<div class="overflow-img">
												<img class='w-100 mt-2' src='<?php echo get_site_url();?>/img/alojamiento-5-new.jpg' alt='<?php _e( 'Centro Anayansi Imagen 5', 'understrap-master' ); ?>'>
											</div>
											<div class="overflow-img">
												<img class='w-100 mt-2' src='<?php echo get_site_url();?>/img/alojamiento-6-new.jpg' alt='<?php _e( 'Centro Anayansi Imagen 6', 'understrap-master' ); ?>'>
											</div>
											<div class="overflow-img">
												<img class='w-100 mt-2' src='<?php echo get_site_url();?>/img/alojamiento-7-new.jpg' alt='<?php _e( 'Centro Anayansi Imagen 7', 'understrap-master' ); ?>'>
											</div>
										</div> */ ?>
								</div>
							</div>
							<div class="row space">
								<div class="col-12">
									<p class="big brown font-weight-normal"><?php _e( 'Zonas comunes:', 'understrap-master' ); ?></p>
									<div class="row">
										<div class="col-12 col-md-5">
											<ul class="brown">
												<li><p class="big brown font-weight-normal"><?php _e( 'Sala para talleres y retiros, de 90 m2 diáfanos. Equipada con aire acondicionado, suelo de parquet, estufa de pellet, equipo de música y vistas a la naturaleza.', 'understrap-master' ); ?></p></li>
												<li><p class="big brown font-weight-normal"><?php _e( 'Comedor con cocina.', 'understrap-master' ); ?></p></li>
												<li><p class="big brown font-weight-normal"><?php _e( 'Jardín exterior, equipado con mesas y sillas, bajo la sombra de un maravilloso pinar.', 'understrap-master' ); ?></p></li>
												<li><p class="big brown font-weight-normal"><?php _e( 'Piscina Oasis de agua salada, rodeada de césped natural.', 'understrap-master' ); ?></p></li>
											</ul>
										</div>
										<div class="col-12 col-md-7">
											<img class='img-responsive' src='<?php echo get_site_url();?>/wp-content/uploads/2020/09/Anayansi_galeria8.jpg' alt='<?php _e( 'Centro Anayansi Imagen 8', 'understrap-master' ); ?>'>
										</div>
									</div>
								</div>
							</div>
							<div class="row space">
								<div class="col-12">
									<div class="row">
										<div class="col-12 col-md-5 col-lg-4">
											<p class="big brown font-weight-normal mt-6"><?php _e( 'Todo construido en un estilo práctico y funcional, donde se convive compartiendo y colaborando en las tareas de limpieza y orden. Respetando el medio natural en el 
												que nos encontramos, evitando la contaminación lumínica y acústica, para no alterar a la fauna local.', 'understrap-master' ); ?></p>
										</div>
										<div class="col-12 col-md-7 col-lg-8">
											<img class='img-responsive' src='<?php echo get_site_url();?>/img/alojamiento-9-new.jpg' alt='<?php _e( 'Centro Anayansi Imagen 9', 'understrap-master' ); ?>'>
										</div>
									</div>
									
									<a href="<?php echo get_site_url();?>/contacto/" class="btn w-100 no-radius mt-lg-5 mt-3" title="<?php _e( 'Contactar con Anayansi', 'understrap-master' ); ?>">
										<?php _e( 'Me interesa alojarme en Anayansi', 'understrap-master' ); ?>
									</a>
								</div>
							</div>
						</div><!-- #content -->
					</div>
				</div>
			</div>
		</div>

		<?php /*
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php masterslider(13); ?>		
				</div>
			</div>
		</div> */ ?>

		<?php 

		$args = array(
			'post_type' => 'evento',
			'posts_per_page' => 3,
			'orderby' => 'date',
			'order' => 'DESC'
		);
		
		$query = new WP_Query( $args );
		if($query->have_posts()) : ?>

		<div class="container-fluid"  id="next-events">
			<div class="container bitter green text-center">
				<div class="row ">
					<div class="col-12 block">
						<h5 class="bitter mb-4"><?php _e( 'Próximos eventos', 'understrap-master' ); ?></h5>
						<h6 class="mb-5"><?php _e( 'Para estar al día de nuestras actividades', 'understrap-master' ); ?></h6>
					</div>
				</div>
				<div class="row justify-content-center">
					<?php
					while($query->have_posts()) : 
						$query->the_post(); ?>
						<div class="col-md-4">
							<div class="inner">
								<a href="<?php echo( types_render_field( 'enlace-del-evento', array('output' => 'raw'))); ?>" title="<?php echo get_the_title(); ?>">
									<?php if (get_the_post_thumbnail()): ?>
										<?php the_post_thumbnail( 'full', array('class' => 'img-fluid'));?>
									<?php else: ?>
										<img class='img-responsive' src='<?php echo get_site_url();?>/img/white.jpg' alt='<?php _e( '', 'understrap-master' ); ?>'>
									<?php endif; ?>
									<h6 class="big mt-4"><?php _e( 'Más info', 'understrap-master' ); ?></h6>
								</a>
							</div>
						</div>
					<?php endwhile; ?>
				
				</div>
			</div>
		</div>
		<?php 
		wp_reset_postdata();
		endif; ?>

	</main><!-- #main -->
	
</div><!-- #full-width-page-wrapper -->

<?php get_footer();
