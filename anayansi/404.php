<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="error-404-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md-12 content-area pb-6" id="primary">

				<main class="site-main text-center" id="main">
					<h2 class="bitter green"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'understrap' ); ?></h1>
					
					<h5 class="font-weight-normal mt-6"><?php esc_html_e( 'Parece que aquí no hay nada. Si quieres, puedes volver a la página de inicio', 'understrap' ); ?></h5>

					<a class="btn no-radius mt-5 " href="<?php echo get_site_url();?>"> <?php _e( 'Volver a la pagina de inicio', 'understrap-master' ); ?> </a>
				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #error-404-wrapper -->

<?php get_footer();
