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
    $month = isset($_POST['month']) && !empty($_POST['month']) ? intval($_POST['month']) : null;
    $year = isset($_POST['year']) && !empty($_POST['year']) ? intval($_POST['year']) : null;
    
    // Configurar las consultas según los parámetros disponibles
    $args_with_custom_field = array(
        'post_type' => 'eventos-y-retiros',
        'posts_per_page' => 999,
        'orderby' => 'meta_value_num',
        'meta_key' => 'wpcf-fecha_calendario',
        'order' => 'DESC',
    );
    
    $args_without_custom_field = array(
        'post_type' => 'eventos-y-retiros',
        'posts_per_page' => 999,
        'orderby' => 'date',
        'order' => 'DESC',
        'meta_query' => array(
            array(
                'key' => 'wpcf-fecha_calendario',
                'compare' => 'NOT EXISTS'
            )
        )
    );
    
    // Configurar meta_query para posts con campo personalizado
    if ($month !== null && $year !== null) {
        // Tenemos mes y año específicos
        $start_date = mktime(0, 0, 0, $month, 1, $year);
        $end_date = mktime(23, 59, 59, $month + 1, 0, $year); // Último día del mes
        
        $args_with_custom_field['meta_query'] = array(
            array(
                'key' => 'wpcf-fecha_calendario',
                'value' => array($start_date, $end_date),
                'compare' => 'BETWEEN',
                'type' => 'NUMERIC'
            )
        );
    } elseif ($year !== null) {
        // Solo tenemos año - buscar en todo el año
        $start_date = mktime(0, 0, 0, 1, 1, $year);
        $end_date = mktime(23, 59, 59, 12, 31, $year);
        
        $args_with_custom_field['meta_query'] = array(
            array(
                'key' => 'wpcf-fecha_calendario',
                'value' => array($start_date, $end_date),
                'compare' => 'BETWEEN',
                'type' => 'NUMERIC'
            )
        );
    } elseif ($month !== null) {
        // Solo tenemos mes - buscar ese mes en cualquier año
        // En este caso, obtenemos todos los posts con el campo personalizado
        // y luego filtramos por mes manualmente
        $args_with_custom_field['meta_query'] = array(
            array(
                'key' => 'wpcf-fecha_calendario',
                'compare' => 'EXISTS',
            )
        );
    }
    
    // Configurar date_query para posts sin campo personalizado
    if ($month !== null && $year !== null) {
        $args_without_custom_field['date_query'] = array(
            array(
                'year' => $year,
                'month' => $month
            )
        );
    } elseif ($year !== null) {
        $args_without_custom_field['date_query'] = array(
            array(
                'year' => $year
            )
        );
    } elseif ($month !== null) {
        $args_without_custom_field['date_query'] = array(
            array(
                'month' => $month
            )
        );
    }
    
    // Ejecutar las consultas
    $posts_with_custom_field = new WP_Query($args_with_custom_field);
    $posts_without_custom_field = new WP_Query($args_without_custom_field);
    
    $response = array();
    $processed_ids = array(); // Array para rastrear IDs procesados
    
    // Procesar posts con campo personalizado
    if ($posts_with_custom_field->have_posts()) {
        while ($posts_with_custom_field->have_posts()) {
            $posts_with_custom_field->the_post();
            $id = get_the_ID();
            
            // Si solo tenemos mes, necesitamos filtrar manualmente
            if ($month !== null && $year === null) {
                $fecha_calendario = get_post_meta($id, 'wpcf-fecha_calendario', true);
                if (!empty($fecha_calendario)) {
                    $post_month = date('n', intval($fecha_calendario));
                    if ($post_month != $month) {
                        continue; // Saltar este post si el mes no coincide
                    }
                }
            }
            
            if (!in_array($id, $processed_ids)) {
                $processed_ids[] = $id;
                ob_start();
                get_template_part('loop-templates/content-eventos-y-retiros-small', get_post_format());
                $post_html = ob_get_clean();
                $response[] = $post_html;
            }
        }
    }
    
    // Procesar posts sin campo personalizado
    if ($posts_without_custom_field->have_posts()) {
        while ($posts_without_custom_field->have_posts()) {
            $posts_without_custom_field->the_post();
            $id = get_the_ID();
            if (!in_array($id, $processed_ids)) {
                $processed_ids[] = $id;
                ob_start();
                get_template_part('loop-templates/content-eventos-y-retiros-small', get_post_format());
                $post_html = ob_get_clean();
                $response[] = $post_html;
            }
        }
    }
    
    wp_reset_postdata();
    
    if (!empty($response)) {
        wp_send_json($response);
    } else {
        wp_send_json(array('<p>No hay eventos y retiros para esta fecha.</p>'));
    }
    
    die();
}
