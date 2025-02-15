<?php
/**
 * The template for displaying all single posts
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>



<?php while ( have_posts() ) : the_post(); ?>
	
	<?php if( $post->post_type == 'quienes-somos' || $post->post_type == 'evento'): ?>
		<?php include '404.php';?>
		
	<?php else: ?>
		<div class="wrapper" id="single-wrapper">
			<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

				<div class="row">

					<!-- Do the left sidebar check -->
					<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

					<main class="site-main" id="main">
						<?php get_template_part( 'loop-templates/content', 'single' ); ?>
							<?php understrap_post_nav(); ?>

						<?php
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
							?>
					</main><!-- #main -->

				</div><!-- .row -->

			</div><!-- #content -->

		</div><!-- #single-wrapper -->
	<?php endif; ?>
<?php endwhile; // end of the loop. ?>

<?php get_footer();
