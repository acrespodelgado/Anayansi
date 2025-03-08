<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_site_url();?>/img/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_site_url();?>/img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_site_url();?>/img/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900
	&family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900
	&family=Pacifico&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
<div id="wrapper-navbar" class="fixed-top <?php if (is_front_page() || (get_page_template_slug() == 'page-templates/page-tipi.php') || (get_page_template_slug() == 'page-templates/page-chamanismo.php') || (get_page_template_slug() == 'page-templates/page-yoga.php') || (get_page_template_slug() == 'page-templates/page-coaching.php') || (get_page_template_slug() == 'page-templates/page-mindfull.php') ) : ?>transparent<?php endif; ?>">
		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>
		<nav id="myNav" class="overlay">
			<a href="javascript:void(0)" class="closebtn" id="closeNav">
				<img class="" src="<?php echo get_site_url();?>/img/icon-close.svg" alt="<?php _e( 'Close icon', 'understrap-master' ); ?>">
			</a>
			<!-- The WordPress Menu goes here -->
			<?php wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container_class' => 'overlay-content',
					'container_id'    => 'navbarNavDropdown',
					'menu_class'      => 'navbar-nav ml-auto',
					'fallback_cb'     => '',
					'menu_id'         => 'main-menu',
					'depth'           => 2,
					'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
				)
			); ?>
		</nav>


		<nav id="main-nav" class="navbar" aria-labelledby="main-nav-label">
			<div class="fixed-action-btn">
				<button class="btn-floating btn-lg turquoise" id="openNav" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="lnr lnr-menu"></span>
				</button>
			</div>

			<!-- Your site title as branding in the menu -->
			<?php if ( ! has_custom_logo() ): ?>
				<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
					<?php if (is_front_page() || (get_page_template_slug() == 'page-templates/page-tipi.php') || (get_page_template_slug() == 'page-templates/page-chamanismo.php') || (get_page_template_slug() == 'page-templates/page-yoga.php') || (get_page_template_slug() == 'page-templates/page-coaching.php') || (get_page_template_slug() == 'page-templates/page-mindfull.php') ) : ?>
							<?php if ((get_page_template_slug() == 'page-templates/page-chamanismo.php') || (get_page_template_slug() == 'page-templates/page-yoga.php') || (get_page_template_slug() == 'page-templates/page-coaching.php') || (get_page_template_slug() == 'page-templates/page-mindfull.php')): ?>
								<img class="logo logo-text" src="<?php echo get_site_url();?>/img/logo-white.svg" alt="<?php _e( 'Anayansi', 'understrap-master' ); ?>">
							<?php else: ?>
								<img class="logo logo-text  d-none d-md-block" src="<?php echo get_site_url();?>/img/logo-text.svg" alt="<?php _e( 'Anayansi', 'understrap-master' ); ?>">
								<img class="logo logo-text d-block d-md-none" src="<?php echo get_site_url();?>/img/logo-white.svg" alt="<?php _e( 'Anayansi', 'understrap-master' ); ?>">
							<?php endif; ?>
							<img class="logo" src="<?php echo get_site_url();?>/img/logo.svg" alt="<?php _e( 'Anayansi', 'understrap-master' ); ?>">
					<?php else : ?>
						<img class="logo" src="<?php echo get_site_url();?>/img/logo.svg" alt="<?php _e( 'Anayansi', 'understrap-master' ); ?>">
					<?php endif; ?>
				</a>
			<?php endif; ?>
			<div class="contact-info text-right">
				<div class="d-none d-md-block">
					<a href="mailto:espacioanayansi@gmail.com"  title= "<?php _e( 'Contactar con Anayansi', 'understrap-master' ); ?>" >espacioanayansi@gmail.com</a>    
					<span class="bar">|</span>    
					<a href="tel:+34613017266" title="<?php _e( 'Llamar a Anayansi', 'understrap-master' ); ?>">+34 613 01 72 66</a>
				</div>
				<div class="d-block d-md-none">
					<a href="mailto:espacioanayansi@gmail.com"  title= "<?php _e( 'Contactar con Anayansi', 'understrap-master' ); ?>" ><span class="lnr lnr-envelope"></span></a>    
					<span class="bar">|</span>    
					<a href="tel:+34613017266" title="<?php _e( 'Llamar a Anayansi', 'understrap-master' ); ?>"><span class="lnr lnr-phone-handset"></span></a>
				</div>
			</div>
		</nav><!-- .navbar -->
	</div><!-- #wrapper-navbar end -->
