<div class="eventos-y-retiros-post mt-5 green">
	<header class="entry-header bitter">
		<h1><?php echo get_the_title();?></h1>
		<div class="d-flex flex-row">
			<div class="d-flex flex-column mr-auto">
				<?php if(types_render_field('subtitulo')) : ?>
					<h2 class="mb-2"><?php echo(types_render_field('subtitulo')); ?></h2>
				<?php endif; ?>
				<ul class="list-unstyled mt-4 mb-4">
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
			<?php if(types_render_field('precio')) : ?>
				<div class="d-flex flex-column">
					<h2 class="font-weight-bold">Precio</h2>
					<h3 class="mb-4"><?php echo(types_render_field('precio')); ?>€</h3>
					<a class="btn btn-primary no-radius" href="<?php echo get_site_url();?>/contacto/">
						<?php _e( 'Contactar', 'understrap-master' ); ?>
					</a>
				</div>
			<?php endif; ?>
		</div>
	</header><!-- .entry-header -->

	<div class="w-100 my-4">
		<?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
	</div>

	<div class="entry-content fira my-4">
		<div class="my-5"><?php the_content(); ?></div>
		<?php if(types_render_field('cita-destacada')) : ?>
			<p class="cita pacifico my-5"><?php echo(types_render_field('cita-destacada')); ?></p>
		<?php endif; ?>
		<?php if(types_render_field('contenidos')) : ?>
			<h4 class="my-4">Contenidos</h4>
			<p class="my-4"><?php echo(types_render_field('contenidos')); ?></p>
		<?php endif; ?>
		<?php if(types_render_field('organizacion')) : ?>
			<h4 class="my-4">Organizacion</h4>
			<p class="my-4"><?php echo(types_render_field('organizacion')); ?></p>
		<?php endif; ?>
	</div><!-- .entry-content -->

	<div class="contact-block fira my-5">
		<div class="p-4">
			<p><strong><?php _e( 'RESERVAS:', 'understrap-master' ); ?></strong></p>
			<?php if(types_render_field('instructor')) : ?>
				<p><?php echo(types_render_field('instructor')); ?> 
				<?php if(types_render_field('telefono')) : ?>
					<?php _e( ' Tl. ', 'understrap-master' ); ?><?php echo(types_render_field('telefono')); ?>
				<?php endif; ?>
				</p>
			<?php endif; ?>
			<?php /* 
			No necesario el mail ni web temporalmente deshabilitado
			<p><?php _e( 'centro.anayansi@gmail.com', 'understrap-master' ); ?></p>
			<p><?php _e( 'www.centroanayansi.es', 'understrap-master' ); ?></p>
			*/ ?>
		</div>
		<?php if(types_render_field('telefono')) : ?>
			<a class="btn btn-secondary no-radius w-100" href="tel:<?php echo(types_render_field('telefono')); ?>">
				<?php _e( 'Contactar', 'understrap-master' ); ?>
			</a>
		<?php else: ?>
			<a class="btn btn-secondary no-radius w-100" href="<?php echo get_site_url();?>/contacto/">
				<?php _e( 'Contactar', 'understrap-master' ); ?>
			</a>
		<?php endif; ?>
	</div>
</div>

<?php

$args = array(
		'post_type' => 'eventos-y-retiros',
		'posts_per_page' => 3,
		'orderby' => 'date',
		'order' => 'DESC'
	);
	
	$query = new WP_Query( $args );
	if($query->have_posts()) : ?>

	<div class="container bitter green text-center">
		<div class="row">
			<div class="col-12 block">
				<h5 class="bitter my-4 my-5 py-4"><?php _e( 'Ver más eventos y talleres', 'understrap-master' ); ?></h5>
			</div>
		</div>
		<div class="row">
			<?php
			while($query->have_posts()) : 
				$query->the_post(); ?>
				<div class="col-md-4 text-left event event-small d-flex flex-column">
					<div class="img-container">
						<?php if( get_the_post_thumbnail( $post->ID, 'full' ) ) : ?>
							<?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
						<?php else : ?>
							<img class='img-fluid' src='<?php echo get_site_url();?>/img/foto_no_foto.jpg' alt='<?php _e( '', 'understrap-master' ); ?>'>
						<?php endif; ?>
					</div>
					<div class="p-4 d-flex flex-column mb-auto secondary-bg">
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
							<a class="btn btn-secondary bordered-primary no-radius w-100" href="<?php echo get_site_url();?>/contacto/">
								<?php _e( 'Contactar', 'understrap-master' ); ?>
							</a>
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
									<?php /* <a class="btn btn-primary no-radius w-100" href="<?php echo get_post_field( 'post_name', get_post() ) ?>"> */ ?>
										<?php _e( 'Ver más', 'understrap-master' ); ?>
									</a>
								</div>
							<?php endif; ?>
						<?php endif; ?>
					</div>
				</div>
			<?php endwhile; ?>
		
		</div>
	</div>
<?php 
	wp_reset_postdata(); 
	endif; ?>
