<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class('text-center mb-5'); ?> id="post-<?php the_ID(); ?>">
	<div class="row">
		<div class="col-lg-10 offset-lg-1 col-md-12">
			<?php if( get_the_post_thumbnail( $post->ID, 'large' ) ) : ?>
				<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
			<?php else : ?>
				<img class='img-fluid' src='<?php echo get_site_url();?>/img/foto_no_foto.jpg' alt='<?php _e( '', 'understrap-master' ); ?>'>
			<?php endif; ?>
			<h4 class="bitter green mt-4 mb-3"><?php echo get_the_title();?></h4>
			<h6 class="big font-weight-bold green "><?php echo(types_render_field( 'area-o-campo')); ?></h6>
			<?php if (get_the_content()) : ?>
				<button type="button" class="btn btn-primary no-radius mb-5" data-toggle="modal" data-target="#modal-<?php the_ID(); ?>">
					<?php _e( 'Más información', 'understrap-master' ); ?>
				</button>
			<?php endif; ?>
			<?php if (get_the_content()) : ?>
				<div class="modal fade" id="modal-<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="modal-<?php the_ID(); ?>" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">	
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body black fira">
								<?php the_content(); ?>
							</div>
							
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
	
</article><!-- #post-## -->
