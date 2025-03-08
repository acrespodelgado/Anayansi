<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="" id="wrapper-footer">

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<footer class="site-footer bitter green" id="colophon">
					<div class="row">
						<div class="col-lg-3 col-md-3">
							<p><?php _e( 'Centro Anayansi', 'understrap-master' ); ?></p>
							<p><?php _e( 'Camino de la Ponderosa, nº 215. La Muela de Vejer de la Frontera (Cádiz)', 'understrap-master' ); ?></p>
							<ul class="list-unstyled list-inline social-links">
								<li class="list-inline-item"><a href="https://www.facebook.com/centroanayansi" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
								<li class="list-inline-item"><a href="https://www.instagram.com/anayansiluz" target="_blank"><i class="fab fa-instagram"></i></a></li>
							</ul>
						</div>
						<div class="col-lg-3 offset-lg-1 col-md-3">
							<?php /*
							<ul class="list-unstyled">
								<li><a href="<?php echo get_site_url();?>/coaching/" title="<?php _e( 'Coaching', 'understrap-master' ); ?>"><?php _e( 'Coaching', 'understrap-master' ); ?></a></li>
								<li><a href="<?php echo get_site_url();?>/mindfulness-y-autocompasion/" title="<?php _e( 'Mindfulness y Autocompasión', 'understrap-master' ); ?>"><?php _e( 'Mindfulness y Autocompasión', 'understrap-master' ); ?></a></li>
								<li><a href="<?php echo get_site_url();?>/hatha-yoga/" title="<?php _e( 'Hatha Yoga', 'understrap-master' ); ?>"><?php _e( 'Hatha Yoga', 'understrap-master' ); ?></a></li>
								<li><a href="<?php echo get_site_url();?>/chamanismo/" title="<?php _e( 'Chamanismo', 'understrap-master' ); ?>"><?php _e( 'Chamanismo', 'understrap-master' ); ?></a></li>
							</ul>
							*/ ?>
						</div>
						<div class="col-lg-3 col-md-3">
							<ul class="list-unstyled">
								<li><a href="<?php echo get_site_url();?>/nuestras-instalaciones/" title="<?php _e( 'Nuestras Instalaciones', 'understrap-master' ); ?>"><?php _e( 'Nuestras Instalaciones', 'understrap-master' ); ?></a></li>
								<?php /* <li><a href="<?php echo get_site_url();?>" title="<?php _e( 'Actividades para el bienestar', 'understrap-master' ); ?>"><?php _e( 'Actividades para el bienestar', 'understrap-master' ); ?></a></li> */ ?>
								<li><a href="<?php echo get_site_url();?>/eventos-y-retiros/" title="<?php _e( 'Eventos y retiros', 'understrap-master' ); ?>"><?php _e( 'Eventos y retiros', 'understrap-master' ); ?></a></li>
							</ul>
						</div>
						<div class="col-lg-2 col-md-3">
							<ul class="list-unstyled">
								<li><a href="<?php echo get_site_url();?>/quienes-somos/" title="<?php _e( 'Quiénes somos', 'understrap-master' ); ?>"><?php _e( 'Quiénes somos', 'understrap-master' ); ?></a></li>
								<li><a href="<?php echo get_site_url();?>/contacto/" title="<?php _e( 'Contacto', 'understrap-master' ); ?>"><?php _e( 'Contacto', 'understrap-master' ); ?></a></li>
							</ul>
						</div>
					</div>
					<div class="site-info">
						<div class="row">
							<div class="col-md-12">
								<ul class="m-0 list-unstyled list-inline float-md-left">
									<li class="list-inline-item"><a href="<?php echo get_site_url();?>/politica-privacidad" title="<?php _e( 'Política de privacidad ', 'understrap-master' ); ?>"><?php _e( 'Política de privacidad ', 'understrap-master' ); ?></a></li>
									<li class="list-inline-item"><a href="<?php echo get_site_url();?>/politica-cookies" title="<?php _e( 'Política de cookies', 'understrap-master' ); ?>"><?php _e( 'Política de cookies', 'understrap-master' ); ?></a></li>
								</ul>
								<a class="float-md-right" href="http://agenciaenbloque.com/" target="_blank" title="Enbloque: Diseño y Desarrollo web">
									<img class='img-responsive mt-md-0 mt-4' src='<?php echo get_site_url();?>/img/enbloque.svg' alt='<?php _e( 'Logo Enbloque', 'understrap-master' ); ?>'>
								</a>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-12">
								<p>©<?php echo date("Y"); ?> <?php _e( 'EnBloque Todos los derechos reservados.', 'understrap-master' ); ?></p>
							</div>
						</div>
					</div><!-- .site-info -->
				</footer><!-- #colophon -->
			</div><!--col end -->
		</div><!-- row end -->
	</div><!-- container end -->
</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

