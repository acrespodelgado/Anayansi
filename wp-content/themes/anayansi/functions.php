<?php
/**
 * UnderStrap functions and definitions
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
	'/my-functions.php',                      // Load deprecated functions.
);

foreach ( $understrap_includes as $file ) {
	require_once get_template_directory() . '/inc' . $file;
}

function my_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            width: auto !important;
            background-image: url("<?php echo get_site_url();?>/img/anayansi_login.png") !important;
            background-size: auto !important;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_custom_script() {
	wp_enqueue_script('my-custom-script', get_site_url().'/wp-content/themes/anayansi/js/anayansi.js', array('jquery'));
	wp_localize_script( 'my-custom-script', 'myAjax', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}

add_action('wp_enqueue_scripts', 'my_custom_script');

add_action( 'wp_ajax_filter_posts', 'filter_posts' );
add_action( 'wp_ajax_nopriv_filter_posts', 'filter_posts' );

function filter_posts() {
  	$args = array(
		'post_type' => 'eventos-y-retiros',
		'posts_per_page' => 999,
		'orderby' => 'date',
		'order' => 'DESC',
		'year' => 0,
		'monthnum' => 0
  	);

  	if (isset($_POST['month']) && $_POST['month'] != '') {
        $args['monthnum'] = $_POST['month'];
    }

    if (isset($_POST['year']) && $_POST['year'] != '') {
        $args['year'] = $_POST['year'];
    }

    $posts = new WP_Query($args);
    $response = array();

    if ($posts->have_posts()) {
        while ($posts->have_posts()) {
            $posts->the_post();
            $id = get_the_ID();
            if (!in_array($id, $response)) {
                ob_start();
                get_template_part('loop-templates/content-eventos-y-retiros-small', get_post_format());
                $post_html = ob_get_clean();
                $response[] = $post_html;
            }
        }
        wp_send_json($response);
    } else {
        wp_send_json('<p>No hay eventos y retiros para esta fecha.</p>');
    }

	wp_reset_postdata();

	die();
}