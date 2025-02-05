<?php
/**
 * Template Name: Page Tipi
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
			<?php masterslider(15); ?>
		</div>
		<div id="go-here"></div>
		
		
	</main><!-- #main -->
	
</div><!-- #full-width-page-wrapper -->

<?php get_footer();
