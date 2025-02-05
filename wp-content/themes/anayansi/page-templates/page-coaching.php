<?php
/**
 * Template Name: Page Coaching
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
	<main class="site-main overflow-hidden plant-background-2" id="main" role="main">
		<div id="main-slider">
			<?php masterslider(7); ?>
		</div>
		<div id="go-here"></div>
		<div class="container green" id="content">
			<div class="row mt-6 text-center">
				<div class="col-md-12 col-12">
					<h4 class="font-weight-bold bitter mb-4"><?php _e( '¿Qué es el coaching?', 'understrap-master' ); ?></h5>
				</div>
				<div class="col-lg-12 col-md-12 col-12">
					<p class="big brown"><?php _e( 'Es un proceso de entrenamiento personalizado y confidencial, mediante un gran conjunto de herramientas que ayudan al cliente a conseguir sus objetivos personales y profesionales (ASESCO). <br>Es ayudar a alguien a pensar por sí mismo, a encontrar sus propias respuestas, a descubrir dentro de sí su potencial, en definitiva, a conseguir sus propios objetivos, sea a nivel profesional como personal… 
 <br>(John Whitmore).', 'understrap-master' ); ?></p>
				</div>
			</div>
			<div class="row mt-6">
				<div class="col-xl-7 col-lg-5 col-md-12">
					<h5 class="text-uppercase bitter mt-5 mb-3"><?php _e( 'Formación de experto en coaching personal con enfoque transpersonal', 'understrap-master' ); ?></h5>
					<?php /* <h6 class="brown font-weight-normal mb-xl-5 mb-3"><?php _e( 'Abierto plazo de inscripción VII Promoción 2020-21', 'understrap-master' ); ?></h6>*/ ?>
					<ul class="list-unstyled features-list p">
						<li class="mb-3"><strong class="brown"><?php _e( 'Duración', 'understrap-master' ); ?>:</strong> <?php _e( '9 Módulos intensivos de fin de semana. 140 horas y 30 horas de prácticas', 'understrap-master' ); ?></li>
				
						<li class="mb-3"><strong class="brown"><?php _e( 'Lugar', 'understrap-master' ); ?>:</strong> <?php _e( 'Anayansi, Espacio de Paz. La Muela de Vejer (Cádiz).', 'understrap-master' ); ?>.</li>
						<li class="mb-3"><strong class="brown"><?php _e( 'Directora', 'understrap-master' ); ?>:</strong> <?php _e( 'Pepa Bermúdez, Coach personal y ejecutivo por la Universidad Camilo José Cela de Madrid y su equipo de colaboradores', 'understrap-master' ); ?>.</li>
						<li class="mb-3"><strong class="brown"><?php _e( 'Inversión', 'understrap-master' ); ?>:</strong> <?php _e( '100€ de matrícula (incluye reserva de plaza y materiales). Mensualidad 130€/ Módulo. Infórmate de nuestras becas', 'understrap-master' ); ?>.</li>
					</ul>
					<a class="btn no-radius btn-primary big mt-4" href="<?php echo get_site_url();?>/contacto/"><?php _e( 'Me interesa, quiero más información ', 'understrap-master' ); ?></a>
				</div>
				<div class="col-xl-4 offset-xl-0 col-lg-7 col-md-12 order-lg-last order-first mb-md-5">
					<img class='no-responsive pull-left mt-lg-5' src='<?php echo get_site_url();?>/img/coaching-1.jpg' alt='<?php _e( 'Coaching Anayansi Imagen 1', 'understrap-master' ); ?>'>
				</div>
			</div>
			<div class="row space">
				<div class="col-lg-5  col-md-12 text-md-center mt-6 order-lg-first order-last">
					<img class='no-responsive float-lg-right' src='<?php echo get_site_url();?>/img/coaching-2.jpg' alt='<?php _e( 'Centro Anayansi Imagen 1', 'understrap-master' ); ?>'>
				</div>
				<div class="col-xl-6 offset-xl-1 col-lg-7 col-md-12">
					<p class="mb-4"><?php _e( 'En esta formación no sólo aprenderás a planificar objetivos y a establecer planes de acción coherentes y efectivos; sino que además desarrollarás la consciencia en todas las dimensiones y desde tu verdadero centro de 
					equilibrio: físico, mental, emocional y espiritual. La espiritualidad acompañada de lo pragmático te ayudará a incorporar prácticas muy concretas para avanzar en la vida. ', 'understrap-master' ); ?></p>
					<p class="mb-4"><?php _e( 'En esta formación no sólo aprenderás a planificar objetivos y a establecer planes de acción coherentes y efectivos; sino que además desarrollarás la consciencia en todas las dimensiones y desde tu verdadero centro 
					de equilibrio: físico, mental, emocional y espiritual. La espiritualidad acompañada de lo pragmático te ayudará a incorporar prácticas muy concretas para avanzar en la vida. ', 'understrap-master' ); ?></p>
					<p class="mb-4"><?php _e( 'Esta formación  sigue los estándares de la más reconocida Asociación de Coaching a nivel nacional (Asesco) y te capacita para solicitar la certificación de la misma en ASESCO en la modalidad de <strong class="brown">Curriculum libre
					 siempre según los criterios que tenga en cada momento dicha entidad.</strong>', 'understrap-master' ); ?></p>
					<p class="mb-4"><?php _e( 'Con esta formación obtendrás el título de COACH PERSONAL logrando los siguientes <strong class="brown">objetivos</strong>:', 'understrap-master' ); ?></p>
					<ul class="list-unstyled">
						<li class="mb-2">• <?php _e( 'Acercar el mundo del coaching al alumnado desde su base hasta nuestros  
					días, y especificando las distintas disciplinas de las que se nutre el coaching, 
					así como  sus corrientes actuales y tipos de coaching.', 'understrap-master' ); ?></li>
						<li class="mb-2">• <?php _e( 'Obtener  competencias para el ejercicio del coaching personal, profesional y 
					transpersonal.', 'understrap-master' ); ?></li>
						<li class="mb-2">• <?php _e( 'Descubrir el propio talento para apoyar profesionalmente a otras personas. 
					Psicología Transpersonal.', 'understrap-master' ); ?></li>
						<li class="mb-2">• <?php _e( 'Vivir un autoconocimiento personal a través de herramientas de coaching 
					que después utilizarás con tus clientes.', 'understrap-master' ); ?></li>
						<li class="mb-2">• <?php _e( 'Vivenciar la deconstrucción del Ego. Mindfulness.', 'understrap-master' ); ?></li>
						<li class="mb-2">• <?php _e( 'Reconocer  el liderazgo personal y el de los demás.', 'understrap-master' ); ?></li>
						<li class="mb-2">• <?php _e( 'Mejorar la automotivación y autoestima. Coach profesional.', 'understrap-master' ); ?></li>
						<li class="mb-2">• <?php _e( 'Experimentar la conciencia corporal, con el movimiento y los sentidos.', 'understrap-master' ); ?></li>
						<li class="mb-2">• <?php _e( 'Aprender a escuchar los mensajes de la Vida. Chamanismo.', 'understrap-master' ); ?></li>
						<li class="mb-2">• <?php _e( 'Capacitación para acreditarte como COACH.', 'understrap-master' ); ?></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="green-block white text-center" id="cita-coaching">
					<div class="col-lg-10 offset-lg-1 col-md-12">
						<h5 class="bitter mb-5"><?php _e( 'Citando a John Whitmore, en su libro Coaching:', 'understrap-master' ); ?></h5>
						<p><?php _e( '“A través de los niveles más profundos del coaching llegamos a acceder a nuestro subconsciente, donde se esconden gran parte de nuestro dolor y de nuestro potencial. 
						La parte dolorosa es lo que Freud denominó Inconsciente Inferior, en analogía con los sótanos de una casa: frío, húmedo, oscuro y lleno de esqueletos y de arañas”.', 'understrap-master' ); ?></p>
					</div>
				</div>
			</div>
			
			<div class="row mt-6">
				<div class="col-md-12 mb-5">
					<h3 class="bitter text-uppercase text-center"><?php _e( 'Programa formativo', 'understrap-master' ); ?></h3>
				</div>
				<div class="col-lg-5 col-md-6">
					<ul class="list-unstyled">
						<li class="mb-2">• <?php _e('Fundamentos del coaching. Introducción al coaching. 
						Fundamentos y bases teóricas y prácticas.  Definición y 
						concepto de Coaching. Definición de Coaching según 
						ASESCO y código ético.','understrap-master');?></li>
						<li class="mb-2">• <?php _e('Fases y metodología a seguir en las sesiones de proceso 
						de coaching.','understrap-master');?></li>
						<li class="mb-2">• <?php _e('Cualidades, competencias y habilidades del coach.','understrap-master');?></li>
						<li class="mb-2">• <?php _e('Inteligencia Emocional: El Ser y el Limitante.','understrap-master');?></li>
						<li class="mb-2">• <?php _e('Superación de bloqueos: identificación y gestión de 
						emociones limitantes en un proceso de coaching.','understrap-master');?></li>
						<li class="mb-2">• <?php _e('Metodología del coaching personal','understrap-master');?></li>
						<li class="mb-2">• <?php _e('Disciplinas que apoyan al Coaching: PNL, Mindfulness, 
						movimiento corporal y Chamanismo','understrap-master');?></li>
						<li class="mb-2">• <?php _e('Coaching de equipos.','understrap-master');?></li>
						<li class="mb-2">• <?php _e('Coach Transpersonal','understrap-master');?></li>
						<li class="mb-2">• <?php _e('La sesión individual de coaching.','understrap-master');?></li>
						<li class="mb-2">• <?php _e('Marca personal como Coach,  personal branding del Coach.','understrap-master');?></li>
					</ul>
				</div>
				<div class="col-lg-6 offset-lg-1 col-md-6">
					<h6 class="mb-4 mt-md-0 mt-5"><?php _e( 'Certificado:', 'understrap-master' ); ?></h6>
					<p><?php _e( 'Para obtener la certificación es necesario asistir al menos al 90% de las horas y haber entregado las bitácoras de 30 horas de prácticas.', 'understrap-master' ); ?></p>
					<a class="btn no-radius btn-primary big mt-md-5 mt-3" href="<?php echo get_site_url();?>/contacto/"><?php _e( '¡Me apunto!', 'understrap-master' ); ?></a>
				</div>
			</div>
		</div><!-- #content -->

		<div class="container-fluid black mt-6" id="teachers">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 offset-lg-3 col-md-8 offset-md-4">
						<h4 class="brown-line  bitter mb-md-5 mb-0"><?php _e( 'Equipo docente:', 'understrap-master' ); ?></h4>
					</div>
				</div>
				<div class="owl-carousel">
					<div class="item">				
						<div class="row">
							<div class="col-lg-3 col-md-4">
								<img class='img-fluid mt-lg-0 mt-5' src='<?php echo get_site_url();?>/img/equipo_coaching_pepa.jpg' alt='<?php _e( '', 'understrap-master' ); ?>'>
							</div>
							<div class="col-lg-9 col-md-8">
								<p class="bitter font-weight-bold mb-3 teacher-title mt-md-0 mt-4"><?php _e( 'Pepa Bermunez', 'understrap-master' ); ?></p>
								<p class="bitter "><?php _e( 'Directora de la Formación de Coaching Personal', 'understrap-master' ); ?></p>
								<p class="mt-lg-5 mt-0"><?php _e( 'Coach personal y ejecutivo por la Universidad Camilo José Cela de Madrid. Coach profesional certificada nº 10.302. 
								Directora del Experto en Coaching Personal en el centro Anayansi de Vejer de la Frontera, VII Edición. Experto en Psicología Transpersonal por el 
								Institute Gestalt (Barcelona). Formadora de Coaching laboral en la Asociación Profesional de Orientadores de Laborales (AOSLA). Coach consultora en 
								AGFORMACIÓN. Entrenadora de programas de Inteligencia Emocional en IDICOACHING. Practitioner PNL, certificada por Society of Neuro-Linguistic 
								Programming of Richard Bandler. Formada en básico de Bioneuroemoción. Certificada en la 1ª Promoción de Neurociencia e Inteligencia Emocional 
								por EFIC, reconocida de interés sanitario por el Servicio Andaluz de Salud. ', 'understrap-master' ); ?></p>
							</div>
						</div>
					</div>
					<div class="item">				
						<div class="row">
							<div class="col-lg-3 col-md-4">
								<img class='img-fluid mt-lg-0 mt-5' src='<?php echo get_site_url();?>/img/equipo_coaching_david.jpg' alt='<?php _e( '', 'understrap-master' ); ?>'>
							</div>
							<div class="col-lg-9 col-md-8">
								<p class="bitter font-weight-bold mb-3 teacher-title mt-md-0 mt-4"><?php _e( 'David Barreda', 'understrap-master' ); ?></p>
								<p class="mt-lg-5 mt-0"><?php _e( 'Facilita Procesos de Estrategia Personal, fortaleciendo la estructura humana y emocional de los Equipo y desarrollando habilidades para la Docencia de la Formación. 
								Formador y Consultor, con más de 9600 horas de experiencia en formación y acompañamiento de procesos colectivos, dinamizando a grupos y equipos desde 1999. Desde 2008, acumula más 
								de 600 horas acompañando procesos individuales de estrategia personal. Emprendedor, en 2003 creó y gestionó durante 10 años Centro de Estudios Academo, centro de formación, para continuar 
								con www.procesosyaprendizaje.es desde 2013 hasta ahora. Ha impartido formación en España, Honduras, El Salvador y Panamá. Sus áreas de trabajo son: la formación de formadores, la empleabilidad 
								y el emprendimiento, el desarrollo profesional y la marca personal, la inteligencia colectiva y el desarrollo personal. Máster en Dirección y Gestión de RRHH, Experto en Coaching Personal, Experto 
								en Coaching Ejecutivo y Licenciado en Derecho.  ', 'understrap-master' ); ?></p>
							</div>
						</div>
					</div>
					<div class="item">				
						<div class="row">
							<div class="col-lg-3 col-md-4">
								<img class='img-fluid mt-lg-0 mt-5' src='<?php echo get_site_url();?>/img/equipo_coaching_jose.jpg' alt='<?php _e( '', 'understrap-master' ); ?>'>
							</div>
							<div class="col-lg-9 col-md-8">
								<p class="bitter font-weight-bold mb-3 teacher-title mt-md-0 mt-4"><?php _e( 'José Luis Fuentes', 'understrap-master' ); ?></p>
								<p class="mt-lg-5 mt-0"><?php _e( 'Coach Personal y Ejecutivo, Experto en coaching Organizacional con liderazgo e Inteligencia Emocional. Diplomado en Ciencias de la Educación por la Universidad de Sevilla, 
								Máster en Coaching Profesional por la Universidad Camilo José Cela, Certificado en Psicología del Deporte de Alto Rendimiento con el Futbol Club Barcelona y la Universidad Siglo XXI. Ha cursado estudios de 
								Neuropsicoeduación con la prestigiosa Asociación Educar de la mano del Dr neurobiólogo Carlos Logart, Argentina. Miembro de la Asociación Nacional de Inteligencia Emocional.', 'understrap-master' ); ?></p>
								<p><?php _e( 'Escritor, consultor coach, conferenciante motivacional, ha trabajado en organizaciones e instituciones a nivel nacional e internacional creando equipos de alto rendimiento. Ha formado empresas 
								y directivos para liderar desde las emociones. Expertisse en Gestión del Talento, Liderazgo Emocional y felicidad productiva entre otras disciplinas.', 'understrap-master' ); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid plant-background-1 mt-6">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-12">
						<img class='no-responsive pull-right' src='<?php echo get_site_url();?>/img/coaching-3.jpg' alt='<?php _e( 'Coaching Image', 'understrap-master' ); ?>'>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid white green-block text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-12 pt-5 pb-5">
						<h3 class="mb-5 bitter text-uppercase"><?php _e( 'Testimonios de participantes <br>en formaciones anteriores', 'understrap-master' ); ?></h3>
						<div class="owl-carousel-testimonio owl-carousel">
							<div class="item">	
								<h6 class="font-weight-normal"><?php _e( '“… es del todo recomendable. Estoy muy feliz de haber decidido hacerlo, tanto para mi actividad profesional como a nivel personal. 
								Hay un antes y un después. Doy las gracias a todo el profesorado, con la coordinación de Pepa Bermúdez, por la calidad  del curso y su belleza humana.”', 'understrap-master' ); ?></h6>
								<p class="big mt-5 bitter font-italic"><?php _e( 'Anne Bernabeu, Naturópata-Nutricionista (I Promoción)', 'understrap-master' ); ?></p>
							</div>
							<div class="item">	
								<h6 class="font-weight-normal"><?php _e( '“Este curso ha superado con creces mis expectativas en todos los aspectos de mi vida, profesional y personal. Ha supuesto un antes y un después en 
								mi vida. Lo recomiendo a todo el mundo. A mí me ha ayudado a conseguir la META de mi vida.”', 'understrap-master' ); ?></h6>
								<p class="big mt-5 bitter font-italic"><?php _e( 'Jamie de Sola, Empresario (II Promoción)', 'understrap-master' ); ?></p>
							</div>
							<div class="item">	
								<h6 class="font-weight-normal"><?php _e( '“… para todo aquel que quiera formarse como coach y sobre todo evolucionar como persona. A mí me cambió la vida… para mejor. Pepa Bermúdez, Anayansi, y demás 
								colaboradores hacen que se vivan unos fines de semana mágicos.”', 'understrap-master' ); ?></h6>
								<p class="big mt-5 bitter font-italic"><?php _e( 'Ana Ávila (IV Promoción)', 'understrap-master' ); ?></p>
							</div>
							<div class="item">	
								<h6 class="font-weight-normal"><?php _e( '“Este curso es de lo mejor que he hecho en formaciones. Mejora tu vida y la de los demás. ¡Super recomendable!”', 'understrap-master' ); ?></h6>
								<p class="big mt-5 bitter font-italic"><?php _e( 'Rocío Mora, Esteticista: Belleza y Bienestar (V Promoción)', 'understrap-master' ); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main><!-- #main -->
	
	<div class="container mt-6">
		<div class="row green bitter text-center" id="activity-blocks">
				<div class="col-12 col-md-10 offset-md-1 mb-4">
					<h5><?php _e( 'Consulta otras actividades de Anayansi', 'understrap-master' ); ?></h5>
				</div>
				<div class="col-md-4">
					<div class="block">
						<a href="<?php echo get_site_url();?>/mindfulness-y-autocompasion/" class="" title="<?php _e( 'Ir a Mindfulness y Autocompasión', 'understrap-master' ); ?>">
							<img class='img-responsive' src='<?php echo get_site_url();?>/img/anayansi-activity-mindfull
							.jpg' alt='<?php _e( 'Imagen Mindfulness y Autocompasión', 'understrap-master' ); ?>'>
							<h6 class="big mt-2 mb-2"><?php _e( 'Mindfulness y Autocompasión', 'understrap-master' ); ?></h6>
							<p class="black fira pl-3 pr-3"><?php _e( 'Descubre tu presencia amorosa conectada.', 'understrap-master' ); ?></p>
						</a>
						<a href="<?php echo get_site_url();?>/mindfulness-y-autocompasion/" class="btn w-100 no-radius" title="<?php _e( 'Ir a Mindfulness y Autocompasión', 'understrap-master' ); ?>">
							<?php _e( 'Ver más', 'understrap-master' ); ?>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="block">
						<a href="<?php echo get_site_url();?>/hatha-yoga/" class="" title="<?php _e( 'Ir a Hatha Yoga', 'understrap-master' ); ?>">
							<img class='img-responsive' src='<?php echo get_site_url();?>/img/anayansi-activity-yoga.jpg' alt='<?php _e( 'Imagen Hatha Yoga', 'understrap-master' ); ?>'>
							<h6 class="big mt-2 mb-2"><?php _e( 'Hatha Yoga', 'understrap-master' ); ?></h6>
							<p class="black fira pl-3 pr-3"><?php _e( 'Cuida de tu cuerpo, mente y corazón.', 'understrap-master' ); ?></p>
						</a>
						<a href="<?php echo get_site_url();?>/hatha-yoga/" class="btn w-100 no-radius" title="<?php _e( 'Ir a Hatha Yoga', 'understrap-master' ); ?>">
							<?php _e( 'Ver más', 'understrap-master' ); ?>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="block">
						<a href="<?php echo get_site_url();?>/chamanismo/" class="" title="<?php _e( 'Ir a Chamanismo', 'understrap-master' ); ?>">
							<img class='img-responsive' src='<?php echo get_site_url();?>/img/anayansi-activity-chamanismo.jpg' alt='<?php _e( 'Imagen Chamanismo', 'understrap-master' ); ?>'>
							<h6 class="big mt-2 mb-2"><?php _e( 'Chamanismo', 'understrap-master' ); ?></h6>
							<p class="black fira pl-3 pr-3"><?php _e( 'Siéntete en conexión con los poderes de la naturaleza.', 'understrap-master' ); ?></p>
						</a>
						<a href="<?php echo get_site_url();?>/chamanismo/" class="btn w-100 no-radius" title="<?php _e( 'Ir a Chamanismo', 'understrap-master' ); ?>">
							<?php _e( 'Ver más', 'understrap-master' ); ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- #full-width-page-wrapper -->

<?php get_footer();
