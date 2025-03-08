<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class('text-center mb-5 green-bg event'); ?> id="post-<?php the_ID(); ?>">
	<div class="row">
		<div class="col-12 col-md-4">
            <div class="img-container">
                <?php if( get_the_post_thumbnail( $post->ID, 'full' ) ) : ?>
                    <?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
                <?php else : ?>
                    <img class='img-fluid' src='<?php echo get_site_url();?>/img/foto_no_foto.jpg' alt='<?php _e( '', 'understrap-master' ); ?>'>
                <?php endif; ?>
            </div>
        </div>
        <div class="d-flex flex-column col-12 col-md-8 text-left">
            <div class="row px-4 mb-auto">
                <div class="d-flex flex-row bitter w-100">
                    <h4 class="mt-4 mr-auto pr-4"><?php echo get_the_title();?></h4>
                    <?php if(types_render_field('precio')) : ?>
                        <h4 class="mt-4"><?php echo(types_render_field('precio')); ?>€</h4>
                    <?php endif; ?>
                </div>
                <?php if(types_render_field('subtitulo')) : ?>
                    <h5><?php echo(types_render_field('subtitulo')); ?></h5>
                <?php endif; ?>
                <ul class="list-unstyled mt-4">
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
            <div class="row">
                <div class="col-4 pr-0">
                    <a class="btn btn-secondary no-radius w-100" href="<?php echo get_site_url();?>/contacto/">
					    <?php _e( 'Regala esta experiencia', 'understrap-master' ); ?>
                    </a>
                </div>
                <div class="col-4">
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
						<div class="col-4 pl-0">
							<a class="btn btn-secondary no-radius w-100" target="_blank" href="<?php echo(types_render_field('redireccion-link-externo')); ?>">
								<?php _e( 'Ver enlace', 'understrap-master' ); ?>
							</a>
						</div>
					<?php else : ?>
                        <div class="col-4 pl-0">
                            <a class="btn btn-secondary no-radius w-100" href="<?php echo get_site_url();?>/eventos-y-retiros/<?php echo basename( get_permalink() ); ?>">
                                <?php _e( 'Ver más', 'understrap-master' ); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
		</div>
	</div>
	
</article><!-- #post-## -->
