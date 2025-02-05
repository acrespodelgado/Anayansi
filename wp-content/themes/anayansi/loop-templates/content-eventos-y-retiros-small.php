<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class('text-center mb-5 secondary-bg event event-small d-flex'); ?> id="post-<?php the_ID(); ?>">
	<div class="row">
		<div class="col-12 text-left d-flex flex-column">
			<div class="img-container">
				<?php if( get_the_post_thumbnail( $post->ID, 'full' ) ) : ?>
					<?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
				<?php else : ?>
					<img class='img-fluid' src='<?php echo get_site_url();?>/img/foto_no_foto.jpg' alt='<?php _e( '', 'understrap-master' ); ?>'>
				<?php endif; ?>
			</div>
			<div class="p-4 d-flex flex-column mb-auto">
				<h4 class="bitter mb-2"><?php echo get_the_title();?></h4>
				<?php if(types_render_field('subtitulo')) : ?>
					<h5 class="mb-2"><?php echo(types_render_field('subtitulo')); ?></h5>
				<?php endif; ?>
				<ul class="list-unstyled mt-2">
					<?php if(types_render_field('localizador')) : ?>
						<li><i class="fas fa-certificate"></i> <?php echo(types_render_field('localizador')); ?></li>
					<?php endif; ?>
					<?php if(types_render_field('instructor')) : ?>
						<li><i class="fas fa-user"></i> <?php echo(types_render_field('instructor')); ?></li>
					<?php endif; ?>
					<?php if(types_render_field('fecha')) : ?>
						<li><i class="fa fa-calendar"></i> <?php echo(types_render_field('fecha')); ?></li>
					<?php endif; ?>
					<?php if(types_render_field('localizacion')) : ?>
						<li><i class="fas fa-home"></i> <?php echo(types_render_field('localizacion')); ?></li>
					<?php endif; ?>
					<?php if(types_render_field('telefono')) : ?>
						<li><i class="fas fa-phone"></i> <?php echo(types_render_field('telefono')); ?></li>
					<?php endif; ?>
				</ul>
			</div>
			<div class="d-flex flex-row mt-auto">
				<div class="f-column">
					<?php if(types_render_field('telefono')) : ?>
						<a class="btn btn-secondary bordered-primary no-radius w-100" href="tel:<?php echo(types_render_field('telefono')); ?>">
							<?php _e( 'Contactar', 'understrap-master' ); ?>
						</a></li>
					<?php else: ?>
						<a class="btn btn-secondary bordered-primary no-radius w-100" href="<?php echo get_site_url();?>/contacto/">
							<?php _e( 'Contactar', 'understrap-master' ); ?>
						</a>
					<?php endif; ?>
				</div>
				<?php if (get_the_content()) : ?>
					<?php if(types_render_field('redireccion-link-externo')) : ?>
						<div class="f-column">
							<a class="btn btn-primary no-radius w-100" target="_blank" href="<?php echo(types_render_field('redireccion-link-externo')); ?>">
								<?php _e( 'Ver enlace', 'understrap-master' ); ?>
							</a>
						</div>
					<?php else : ?>
						<div class="f-column">
							<a class="btn btn-primary no-radius w-100" href="<?php echo get_site_url();?>/eventos-y-retiros/<?php echo basename( get_permalink() ); ?>">
								<?php _e( 'Ver más', 'understrap-master' ); ?>
							</a>
						</div>
					<?php endif; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
	
</article><!-- #post-## -->
