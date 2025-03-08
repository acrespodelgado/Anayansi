<?php
/**
 * Template Name: Page Home
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
	<div id="main-slider">
		<?php masterslider("ms-1-2"); ?>
		<?php masterslider("ms-1-2-1"); ?>
	</div>
	<div id="go-here"></div>
	<main class="site-main" id="main" role="main">
		<div class="container" id="content">
			<div class="row">
				<div class="col-md-12 content-area text-center">
					<p class="green big amsterdam font-weight-normal"><?php _e( 'En Anayansi ofrecemos un', 'understrap-master' ); ?>
						<strong><?php _e( ' espacio de paz para desarrollar Retiros y talleres para el descanso y crecimiento personal.', 'understrap-master' ); ?></strong>
						<br><?php _e( 'Puedes unirte a nuestra propuesta de actividades para el bienestar o desarrollar tu propio Retiro. Si buscas un lugar para conectar, 
						respirar naturaleza, tomar unas vacaciones y descubrir nuevas experiencias, ¡Ven a vivir la experiencia con nosotros!', 'understrap-master' ); ?>
					</p>
				</div><!-- #primary -->
			</div><!-- .row end -->
			<div class="row green bitter text-center" id="square-blocks">
				<div class="col-md-6">
					<div class="block">
						<a href="<?php echo get_site_url();?>/nuestras-instalaciones/" title='<?php _e( 'Ir a Nuestras Instalaciones', 'understrap-master' ); ?>'>
							<img class='img-responsive' src='<?php echo get_site_url();?>/img/icon-housing.svg' alt="Icono Nuestras Instalaciones">
							<h4 class="mt-lg-5 mt-3"><?php _e( 'Nuestras Instalaciones', 'understrap-master' ); ?></h4>
						</a>
					</div>
				</div>
				<?php /* Oculto temporalmente
				<div class="col-md-4">
					<div class="block">
						<a href="<?php echo get_site_url();?>/actividades-para-el-bienestar/" title='<?php _e( 'Ir a Actividades para el bienestar', 'understrap-master' ); ?>'>
							<img class='img-responsive' src='<?php echo get_site_url();?>/img/icon-activity.svg' alt="Icono Actividades para el bienestar">
							<h4 class="mt-lg-5 mt-3"><?php _e( 'Actividades para el bienestar', 'understrap-master' ); ?></h4>
						</a>
					</div>
				</div>
				*/ ?>
				<div class="col-md-6">
					<div class="block">
						<a href="<?php echo get_site_url();?>/eventos/" title='<?php _e( 'Ir a eventos y retiros', 'understrap-master' ); ?>'>
							<img class='img-responsive' src='<?php echo get_site_url();?>/img/icon-tipi.svg' alt="Icono eventos">
							<h4 class="mt-lg-5 mt-3"><?php _e( 'Eventos y Retiros', 'understrap-master' ); ?></h4>
						</a>
					</div>
				</div>
			</div>
			<?php /*
			<div class="row green bitter text-center" id="activity-blocks">
				<div class="col-12 col-md-10 offset-md-1 mb-4">
					<h4><?php _e( 'Anayansi, un espacio de paz que cuida de tu bienestar.', 'understrap-master' ); ?></h4>
					<p class="big brown"><?php _e( 'Ofrecemos cursos y talleres de Coaching, Mindfulness, Hatha Yoga y Chamanismo en plena naturaleza, en Vejer, Cádiz.', 'understrap-master' ); ?></p>
					<p class="big brown"><?php _e( 'Tómate un momento para tu autocuidado y bienestar, aquí y ahora. ¿Cómo quieres empezar a cuidarte?', 'understrap-master' ); ?></p>
				</div>
				<div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
					<div class="block">
						<a href="<?php echo get_site_url();?>/coaching/" class="" title="<?php _e( 'Ir a Coaching', 'understrap-master' ); ?>">
							<img class='img-responsive' src='<?php echo get_site_url();?>/img/activity-coaching.jpg' alt='<?php _e( 'Imagen Coaching', 'understrap-master' ); ?>'>
							<h6 class="big playfair mt-2 mb-2"><?php _e( 'Coaching', 'understrap-master' ); ?></h6>
							<p class="black opensans pl-3 pr-3"><?php _e( 'Encuentra tu propósito en la vida.', 'understrap-master' ); ?></p>
						</a>
						<a href="<?php echo get_site_url();?>/coaching/" class="btn w-100 no-radius" title="<?php _e( 'Ir a Coaching', 'understrap-master' ); ?>">
							<?php _e( 'Ver más', 'understrap-master' ); ?>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
					<div class="block">
						<a href="<?php echo get_site_url();?>/mindfulness-y-autocompasion/" class="" title="<?php _e( 'Ir a Mindfulness y Autocompasión', 'understrap-master' ); ?>">
							<img class='img-responsive' src='<?php echo get_site_url();?>/img/activity-mindfullness.jpg' alt='<?php _e( 'Imagen Mindfulness y Autocompasión', 'understrap-master' ); ?>'>
							<h6 class="big playfair mt-2 mb-2"><?php _e( 'Mindfulness y Autocompasión ', 'understrap-master' ); ?></h6>
							<p class="black opensans pl-3 pr-3"><?php _e( 'Descubre tu presencia amorosa conectada.', 'understrap-master' ); ?></p>
						</a>
						<a href="<?php echo get_site_url();?>/mindfulness-y-autocompasion/" class="btn w-100 no-radius" title="<?php _e( 'Ir a Mindfulness y Autocompasión', 'understrap-master' ); ?>">
							<?php _e( 'Ver más', 'understrap-master' ); ?>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
					<div class="block">
						<a href="<?php echo get_site_url();?>/hatha-yoga/" class="" title="<?php _e( 'Ir a Hatha Yoga', 'understrap-master' ); ?>">
							<img class='img-responsive' src='<?php echo get_site_url();?>/img/activity-yoga.jpg' alt='<?php _e( 'Imagen Hatha Yoga', 'understrap-master' ); ?>'>
							<h6 class="big playfair mt-2 mb-2"><?php _e( 'Hatha Yoga', 'understrap-master' ); ?></h6>
							<p class="black opensans pl-3 pr-3"><?php _e( 'Cuida de tu cuerpo, mente y corazón.', 'understrap-master' ); ?></p>
						</a>
						<a href="<?php echo get_site_url();?>/hatha-yoga/" class="btn w-100 no-radius" title="<?php _e( 'Ir a Hatha Yoga', 'understrap-master' ); ?>">
							<?php _e( 'Ver más', 'understrap-master' ); ?>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
					<div class="block">
						<a href="<?php echo get_site_url();?>/chamanismo/" class="" title="<?php _e( 'Ir a Chamanismo', 'understrap-master' ); ?>">
							<img class='img-responsive' src='<?php echo get_site_url();?>/img/activity-chamanismo.jpg' alt='<?php _e( 'Imagen Chamanismo', 'understrap-master' ); ?>'>
							<h6 class="big playfair mt-2 mb-2"><?php _e( 'Chamanismo', 'understrap-master' ); ?></h6>
							<p class="black opensans pl-3 pr-3"><?php _e( 'Siéntete en conexión con los poderes de la naturaleza.', 'understrap-master' ); ?></p>
						</a>
						<a href="<?php echo get_site_url();?>/chamanismo/" class="btn w-100 no-radius" title="<?php _e( 'Ir a Chamanismo', 'understrap-master' ); ?>">
							<?php _e( 'Ver más', 'understrap-master' ); ?>
						</a>
					</div>
				</div>
			</div>
			*/ ?>
			<div class="row text-center bitter green" id="contact-banner">
				<div class="col-md-12 block">
					<div class="inner">
						<h4><?php _e( '¿Quieres organizar tu propio taller o retiro en nuestro espacio?', 'understrap-master' ); ?></h4>
						<p class="big brown"><?php _e( 'Alquilamos nuestro espacio de paz para que puedas crear un retiro o experiencia de bienestar en un entorno sublime.', 'understrap-master' ); ?></p>
						<p class="big brown"><?php _e( 'La naturaleza será tu gran aliada, los tipis te acompañarán con su presencia serena y nuestra acogedora sala será testigo de la magia que puedes crear.', 'understrap-master' ); ?></p>
						<a href="<?php echo get_site_url();?>/contacto/" class="btn btn-outline-primary mt-4" title="Organiza tu retiro con Anayansi"><?php _e( 'Organiza tu retiro con Anayansi', 'understrap-master' ); ?></a>
					</div>
				</div>
			</div>
		</div><!-- #content -->
	</main><!-- #main -->
	<?php /*
		<div class="container" id="covid-announce">
			<div class="row text-center fira white">
				<div class="col-12 block">
					<div class="inner">
						<h3 class="bitter mb-4"><?php _e( 'Protocolo COVID-19:', 'understrap-master' ); ?></h3>
						<ul class="list-unstyled mb-0">
							<li>- <?php _e( 'Aforo reducido a la mitad para garantizar las distancias de seguridad.', 'understrap-master' ); ?></li>
							<li>- <?php _e( 'Amplios espacios abiertos en la naturaleza.', 'understrap-master' ); ?></li>
							<li>- <?php _e( 'Sala y zonas interiores desinfectadas y con todas las medidas de cuidado y amor.', 'understrap-master' ); ?></li>
							<li>- <?php _e( 'Gel desinfectante de manos disponible.', 'understrap-master' ); ?></li>
							<li>- <?php _e( 'Cada participante debe traer su propia esterilla o zafú.', 'understrap-master' ); ?></li>
							<li>- <?php _e( 'En caso de necesidad se valorará la opción de retrasar alguna Actividad o su continuidad online.', 'understrap-master' ); ?> </li>
							<li>- <?php _e( 'Confiamos en que todo va a ir bien.', 'understrap-master' ); ?></li>
						</ul>
					</div>
				</div>
			</div>
			<div id="next-events-anchor"></div>
		</div>
	*/ ?>

	<?php masterslider(17); ?>
	
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

<?php /*

$args = array(
		'post_type' => 'eventos-y-retiros',
		'posts_per_page' => 3,
		'orderby' => 'date',
		'order' => 'DESC'
	);
	
	$query = new WP_Query( $args );
	if($query->have_posts()) : ?>

	<div class="container bitter green text-center mb-5">
		<div class="row">
			<div class="col-12 block">
				<h5 class="bitter my-4 my-5 py-4"><?php _e( 'Ver más eventos y talleres', 'understrap-master' ); ?></h5>
			</div>
		</div>
		<div class="row">
			<?php
			while($query->have_posts()) : 
				$query->the_post(); ?>
				<div class="col-md-4 text-left event event-small d-flex flex-column">
					<div class="img-container">
						<?php if( get_the_post_thumbnail( $post->ID, 'full' ) ) : ?>
							<?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
						<?php else : ?>
							<img class='img-fluid' src='<?php echo get_site_url();?>/img/foto_no_foto.jpg' alt='<?php _e( '', 'understrap-master' ); ?>'>
						<?php endif; ?>
					</div>
					<div class="p-4 d-flex flex-column mb-auto secondary-bg">
						<h4 class="bitter mb-2"><?php echo get_the_title();?></h4>
						<?php if(types_render_field('subtitulo')) : ?>
							<h5 class="mb-2"><?php echo(types_render_field('subtitulo')); ?></h5>
						<?php endif; ?>
						<ul class="list-unstyled mt-2">
							<?php if(types_render_field('instructor')) : ?>
								<li><i class="fas fa-align-justify"></i> <?php echo(types_render_field('instructor')); ?></li>
							<?php endif; ?>
							<?php if(types_render_field('fecha')) : ?>
								<li><i class="fas fa-align-justify"></i> <?php echo(types_render_field('fecha')); ?></li>
							<?php endif; ?>
							<?php if(types_render_field('localizacion')) : ?>
								<li><i class="fas fa-align-justify"></i> <?php echo(types_render_field('localizacion')); ?></li>
							<?php endif; ?>
						</ul>
					</div>
					<div class="d-flex flex-row mt-auto">
						<div class="f-column">
							<a class="btn btn-secondary bordered-primary no-radius w-100" href="<?php echo get_site_url();?>/contacto/">
								<?php _e( 'Contactar', 'understrap-master' ); ?>
							</a>
						</div>
						<?php if (get_the_content()) : ?>
							<div class="f-column">
								<a class="btn btn-primary no-radius w-100" href="<?php echo get_post_field( 'post_name', get_post() ) ?>">
									<?php _e( 'Ver más', 'understrap-master' ); ?>
								</a>
							</div>
						<?php endif; ?>
					</div>
				</div>
			<?php endwhile; ?>
		
		</div>
	</div>
<?php 
	wp_reset_postdata(); 
	endif; */?>

	<div class="container-fluid"  id="instagram-feed">
		<div class="container">
			<div class="row text-center bitter green">
				<div class="col-12 block">
					<div class="inner">
						<p class="mt-4 font-weight-normal"><?php _e( '¡Síguenos en instagram!', 'understrap-master' ); ?></p>
						<a class="font-weight-normal" target="_blank" href="https://www.instagram.com/espacioanayansi/"><?php _e( '@espacioanayansi', 'understrap-master' ); ?></a>
						<?php //echo do_shortcode('[instagram-feed num=4 cols=4 showfollow=false]'); ?>
						<?php echo do_shortcode('[instagram-feed feed=1]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- #full-width-page-wrapper -->

<?php get_footer();
