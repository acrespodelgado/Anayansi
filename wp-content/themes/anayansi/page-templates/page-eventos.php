<?php
/**
 * Template Name: Page Eventos
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
global $paged;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
	'post_type' => 'eventos-y-retiros',
	'posts_per_page' => 4,
	'paged' => $paged,
	'orderby' => 'date',
	'order' => 'DESC'
);

$args2 = array(
	'post_type' => 'eventos-y-retiros',
	'posts_per_page' => -1,
	'paged' => $paged,
	'orderby' => 'date',
	'order' => 'DESC'
);

$query = new WP_Query( $args );
$query2 = new WP_Query( $args2 );
$wp_query = $query;

?>

<?php
$datesM = array(); 
$datesY = array(); 
if ( $query2->have_posts() ) : 
	while ( $query2->have_posts() ) : $query2->the_post();
		$date = get_the_date('n F'); 
		if ( !in_array( $date, $datesM ) ) :
			$datesM[] = $date;
		endif;
		$date = get_the_date('Y'); 
		if ( !in_array( $date, $datesY ) ) :
			$datesY[] = $date;
		endif;
	endwhile;
endif;
?>

<div class="wrapper" id="full-width-page-wrapper">
	<main class="site-main" id="main">
		<div id="main-slider">
			<?php masterslider(16); ?>
		</div>
		<div id="go-here"></div>
		<div class="container" id="events">
			<div class="row mt-6">
				<div class="col-12">
					<h4 class="mb-4 green bitter"><?php _e( 'Descubre todos los talleres y Retiros que podemos ofrecerte desde Anayansi, tu espacio de paz en Vejer, Cádiz.', 'understrap-master' ); ?></h2>
					<p class="mb-5 big brown"><?php _e( 'A veces caminar entre tanto ruido y prisas...nos arrastra, nos confunde y nos saca del camino. Es importante parar para volver a tu centro, 
						seguir tu camino, el verdadero anhelo de tu corazón. Los retiros son una oportunidad para escuchar tu voz interna, y conectar contigo mismo de una forma profunda.', 'understrap-master' ); ?>
					</p>

					<div class="filters">
						<div class="selector">
							<p class="mb-2 brown">Ver por meses</p>
							<select id="month-selector" class="green">
								<option value="0">Seleccione un mes</option>
								<?php foreach ( $datesM as $month ) : ?>
									<?php $month_splited = explode(" ", $month); ?>
									<option value="<?php echo $month_splited[0]; ?>"><?php echo $month_splited[1]; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						
						<div class="selector">
							<p class="mb-2 brown">Ver por años</p>
							<select id="year-selector" class="green">
								<option value="0">Seleccione un año</option>
								<?php foreach ( $datesY as $date ) : ?>
									<?php $year = substr( $date, -4 ); ?>
									<option value="<?php echo $year; ?>"><?php echo $year; ?></option>
								<?php endforeach; ?>
							</select>
						</div>

						<button id="clear" class="btn btn-secondary">Limpiar</button>
					</div>

					<?php if ( $query->have_posts() ) : ?>
						<?php $iteration = 0; ?>
						<div class="row mt-5 row-posts">
							<?php while ( $query->have_posts() ) : $query->the_post(); ?>
								<?php if ( $iteration == 0 ) : ?>
									<div class="col-12 post post-large">
										<?php get_template_part( 'loop-templates/content-eventos-y-retiros-large', get_post_format() ); ?>	
									</div>
								<?php else : ?>
									<div class="col-xs-12 col-md-4 post">
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
						understrap_pagination( [
							'current' => $paged,
							'total'   => $query->max_num_pages,
						] );
					?>
				</div>
			</div>
		</div>
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
	</main><!-- #main -->
</div><!-- #archive-wrapper -->

<?php get_footer();
