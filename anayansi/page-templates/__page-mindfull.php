<?php
/**
 * Template Name: Page Mindfull
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
			<?php masterslider(8); ?>
		</div>
		<div id="go-here"></div>
		<div class="container green" id="content">
			<div class="row mt-6 text-center">
				<div class="col-lg-10 offset-lg-1 col-md-12 col-12">
					<h4 class="font-weight-bold bitter mb-4"><?php _e( 'Sumérgete en el aprendizaje experiencial a través del Mindfulness y la Autocompasión en un entorno natural.', 'understrap-master' ); ?></h5>
				</div>
				<div class="col-lg-12 col-md-12 col-12">
					<p class="big brown"><?php _e( 'En Anayansi ofrecemos las siguientes formaciones de Mindfulness y Autocompasión:', 'understrap-master' ); ?></p>
				</div>
			</div>
			<div id="anchors" class="row space text-center">
				<div class="col-lg-10 offset-lg-1 col-md-12">
					<div class="row">
						<div class="col-md-4">
							<a href="#" class="go-to" target="formacionime" time="150000" title="<?php _e( '', 'understrap-master' ); ?>">
								<span class="circle anime-me"></span>
								<h6 class="bitter mt-3"><?php _e( 'Formación IME', 'understrap-master' ); ?></h6>
							</a>
						</div>
						<div class="col-md-4">
							<a href="#" class="go-to" target="formacionmsc" timeto="150000" title="<?php _e( '', 'understrap-master' ); ?>">
								<span class="circle anime-me black"></span>
								<h6 class="bitter mt-3"><?php _e( 'Formación oficial en el Programa MSC', 'understrap-master' ); ?></h6>
							</a>
						</div>
						<div class="col-md-4">
							<a href="#" class="go-to" target="silencioamable" timeto="150000" title="<?php _e( '', 'understrap-master' ); ?>">
								<span class="circle anime-me brown"></span>
								<h6 class="bitter mt-3"><?php _e( 'Retiros de silencio amable', 'understrap-master' ); ?></h6>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-6" id="formacionime">
				<div class="col-xl-7 col-lg-6 col-md-6">
					<h5 class="text-uppercase bitter mb-2"><?php _e( 'Formación IME', 'understrap-master' ); ?></h5>
					<h6 class="font-weight-normal mb-xl-5 mb-4"><?php _e( '(Instructor/a de Mindfulness en Educación). Certificada por la Consejería de Educación (Junta de Andalucía).', 'understrap-master' ); ?></h6>
				
					<p><?php _e( 'Una de las pocas formaciones homologadas por la Consejería de Educación (Junta de Andalucía).', 'understrap-master' ); ?></p>
					<p><?php _e( 'IME es una formación innovadora basada en Mindfulness y Compasión que ofrece un gran soporte de herramientas para implantar Mindfulness en educación. 
					Se desarrolla en un entorno rodeado de naturaleza viva (fuera de las aulas) para sumergirte en el aprendizaje experiencial.', 'understrap-master' ); ?></p>
					<p><?php _e( 'La ciencia contemplativa ha demostrado que al practicar mindfulness se fortalecen los circuitos cerebrales responsables de la atención, el autocontrol, la empatía, 
					la compasión o la resiliencia ante las situaciones cotidianas generadoras de estrés, lo cual es fundamental para el aprendizaje y la memorización. (Hölzel et al., 2011).', 'understrap-master' ); ?></p>
					<p><?php _e( 'Ahora más que nunca tenemos que apostar por la promoción del bienestar socioemocional en los niños/as, educadores/as y escuelas.', 'understrap-master' ); ?></p>
				
					<a class="btn no-radius btn-primary big mt-xl-5 mt-4" href="<?php echo get_site_url();?>/contacto" title="<?php _e( 'Ir a Contacto', 'understrap-master' ); ?>"><?php _e( 'Me interesa, quiero más información ', 'understrap-master' ); ?></a>
				</div>
				<div class="col-xl-4 offset-xl-1 col-md-6">
					<img class='no-responsive pull-left mt-md-5 mt-md-0 mt-5' src='<?php echo get_site_url();?>/img/mindfulness-1.jpg' alt='<?php _e( 'Coaching Anayansi Imagen 1', 'understrap-master' ); ?>'>
				</div>
			</div>
			<div class="row space">
				<div class="col-lg-6 col-md-12 text-md-center">
					<img class='no-responsive float-lg-right mt-xl-0 mt-4' src='<?php echo get_site_url();?>/img/mindfulness-2.jpg' alt='<?php _e( 'Centro Anayansi Imagen 1', 'understrap-master' ); ?>'>
				</div>
				<div class="col-xl-5 offset-xl-1 col-lg-6 col-md-12 mt-lg-0 mt-5">
					<p class="mb-4"><?php _e( '<strong>IME es más que una formación, es una transformación</strong> concebida para que el educador/a pueda permitirse un momento para parar, escucharse, atenderse, 
					disfrutar de la experiencia, y aprender al mismo tiempo. ¡Cada Seminario es un regalo!', 'understrap-master' ); ?></p>
					<p class="mb-4"><?php _e( '¿Te interesa ser instructor/a de Mindfulness para niños/as?', 'understrap-master' ); ?></p>
					<p class="mt-5 mb-4 big"><strong><?php _e( 'Qué incluye la formación:', 'understrap-master' ); ?></strong></p>

					<ul class="list-unstyled">
						<?php /*
						<li class="mb-3">• <?php _e( '<strong>5 Seminarios intensivos presenciales</strong> de fin de semana, acompañados por  expertos a nivel nacional en Mindfulness y Compasión: 
						Coral Selfa, Carlos García, Mariló Gascón, y Noemí Soto. (El primer encuentro incluye retiro de silencio).', 'understrap-master' ); ?></li>
						*/ ?>
						<li class="mb-3">• <?php _e( '1 Retiro presencial, con opción Streaming y 4 Seminarios Online en directo acompañados por Expertos de Mindfulness a nivel nacional.', 'understrap-master' ); ?></li>
						<li class="mb-3">• <?php _e( 'Certificado de asistencia al curso de 67 horas, emitido por Mindala Mindful  Learning. Reconocido y homologado 55 horas por la Consejería de 
						Educación (Junta de Andalucía).*', 'understrap-master' ); ?></li>
						<li class="mb-3">• <?php _e( 'Acceso a una plataforma virtual Moodle con materiales de soporte de cada Seminario.', 'understrap-master' ); ?></li>
						<li class="mb-3">• <?php _e( 'Acceso a un grupo privado de Facebook sobre Mindfulness Educativo, donde compartimos materiales, audios, recursos y experiencias de interés docente.', 'understrap-master' ); ?></li>
						<li class="mb-3">• <?php _e( 'Herramientas pedagógicas mindful: carpeta, diario mindful, y carteles (script)  visuales para el aula.', 'understrap-master' ); ?></li>	
						<li class="mb-3">* <?php _e( 'Si cubrimos el 20% de la plantilla con docentes activos.', 'understrap-master' ); ?></li>	
					</ul>
				</div>
			</div>			
			<div class="row mt-6">
				<div class="col-md-12 mb-xl-5 mb-4">
					<h3 class="bitter text-uppercase text-center"><?php _e( 'Estructura', 'understrap-master' ); ?></h3>
				</div>
				<?php /*
				<div class="col-lg-5 col-md-6">
					<ul class="list-unstyled">
						<li class="mb-3">• <strong><?php _e('Duración','understrap-master');?></strong> <?php _e('67 horas (60 horas presenciales y 7 horas de trabajo online).','understrap-master');?></li>
						<li class="mb-3">• <strong><?php _e('Lugar','understrap-master');?></strong> <?php _e('Centro Anayansi. La Muela de Vejer (Cádiz). Con  opción de alojamiento y comida.','understrap-master');?></li>
						<li class="mb-3">• <strong><?php _e('Inversión','understrap-master');?></strong> <?php _e('600€ (120€/seminario). Antes del 15 de Agosto   2020. Después del 15 de Agosto 2020: 650€. (130€/seminario). 
						Opción de pago a plazos. Impuestos no incluídos.','understrap-master');?></li>
						<li class="mb-3">• <strong><?php _e('Matrícula','understrap-master');?></strong> <?php _e('Reserva y materiales: 50€ (no reembolsables). Están incluidos todos los gastos de la formación excepto 
						comidas y alojamiento. ','understrap-master');?></li>
					</ul>
				</div>
				<div class="col-lg-6 offset-lg-1 col-md-6">	
				*/ ?>
				<div class="col-lg-10 offset-lg-1 col-md-12">		
					<p><?php _e( 'Ofrecemos ayudas para estudiantes y personas desempleadas (descuentos no acumulables). Si tienes dificultad económica, pero estás muy interesado/a, por favor, contacta conmigo por 
					privado: <strong>info@mindalamindful.com.</strong>', 'understrap-master' ); ?></p>
					<h6 class="mt-xl-5 mt-4 mb-4"><?php _e( 'Dirigido:', 'understrap-master' ); ?></h6>
					<p><?php _e( 'Especialmente a profesionales del ámbito educativo y de la salud: Maestros/as, educadores/as, psicólogos/as, trabajadores/as sociales, etc. Que tengan inquietudes por aplicar Mindfulness 
					en sus vidas y su trabajo.', 'understrap-master' ); ?></p>
					<p><?php _e( 'Así como, también es de interés para padres y madres que quieran practicar Mindfulness en su hogar, y cualquier persona que trabaje con niños/as.', 'understrap-master' ); ?></p>
					<a class="btn no-radius btn-primary big mt-4" href="<?php echo get_site_url();?>/contacto/"><?php _e( 'Me interesa', 'understrap-master' ); ?></a>
				</div>
			</div>
		</div><!-- #content -->

		<div class="container-fluid plant-background-1 mt-6">
			<div class="row">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-12">
							<img class='no-responsive pull-right' src='<?php echo get_site_url();?>/img/mindfulness-3.jpg' alt='<?php _e( 'Coaching Image', 'understrap-master' ); ?>'>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid white green-block text-center" id="aristoteles">
			<div class="row">
				<div class="container">
					<div class="row">
						<div class="col-md-12 pt-5 pb-5">
							<h3 class="h4 mb-5 pacifico font-weight-normal"><?php _e( '“Educar la mente sin educar el corazón no es educar en absoluto” ', 'understrap-master' ); ?></h3>
							<h4 class="font-weight-normal pacifico"><?php _e( '- Aristóteles -', 'understrap-master' ); ?></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid plant-background-3">
			<div class="row">
				<div class="container mt-6 green">
					<div class="row mt-6">
						<div class="col-md-7">
							<h4 class="bitter mb-4"><?php _e( 'Sesiones de la Formación IME:', 'understrap-master' ); ?></h4>
							<ul class="list-unstyled">
								<li class="mb-2">• <?php _e( '<strong>Seminario 1:</strong> Introducción al Mindfulness y la Autocompasión.', 'understrap-master' ); ?></li><?php /* Coral Selfa. */ ?>
								<li class="mb-2">• <?php _e( '<strong>Seminario 2:</strong> Descubrir el Mindfulness en la Educación.', 'understrap-master' ); ?></li><?php /* Carlos García. */ ?>
								<li class="mb-2">• <?php _e( '<strong>Seminario 3:</strong> La corporalidad y el movimiento consciente.', 'understrap-master' ); ?></li><?php /* Noemí Soto y Coral Selfa. */ ?>
								<li class="mb-2">• <?php _e( '<strong>Seminario 4:</strong> Cultivar la Compasión y la autorregulación emocional.', 'understrap-master' ); ?></li><?php /* Mariló Gascón. */ ?>
								<li class="mb-2">• <?php _e( '<strong>Seminario 5:</strong> El educador/a consciente.', 'understrap-master' ); ?></li><?php /* Coral Selfa */ ?>
							</ul>
							<p class="font-weight-bold mt-5 mb-3"><?php _e( 'Se valora para la inscripción:', 'understrap-master' ); ?></p>
							<ul class="list-unstyled">
								<li class="mb-2">- <?php _e( 'Haber participado en un programa de MBSR/MBCT/MSC de 8 semanas, impartido por un instructor/a certificado.', 'understrap-master' ); ?></li>
								<li class="mb-2">- <?php _e( 'Desarrollar su actividad profesional con niños/as y jóvenes.', 'understrap-master' ); ?></li>
							</ul>
							<p class="font-weight-bold mt-4 mb-3"><?php _e( 'Esta formación tiene como objetivos:', 'understrap-master' ); ?></p>
							<ul class="list-unstyled">
								<li class="mb-2">- <?php _e( 'Capacitar a profesionales de la educación para implantar Mindfulness en el ámbito educativo con niños/as y jóvenes.', 'understrap-master' ); ?></li>
								<li class="mb-2">- <?php _e( 'Conocer la base científica del Mindfulness en educación.', 'understrap-master' ); ?></li>
								<li class="mb-2">- <?php _e( 'Encarnar las actitudes de Mindfulness y Compasión para conectar con tus fortalezas internas.', 'understrap-master' ); ?></li>
								<li class="mb-2">- <?php _e( 'Aprender a desarrollar tu propio calendario de intervención didáctica de Mindfulness en Educación.', 'understrap-master' ); ?></li>
								<li class="mb-2">- <?php _e( 'Capacitación para ofrecer talleres y entrenamientos de Mindfulness para niños/as y familias desde tu propia experiencia personal.', 'understrap-master' ); ?></li>
								<li class="mb-2">- <?php _e( 'Promover una comunidad de aprendizaje que aliente el desarrollo socioemocional del alumnado.', 'understrap-master' ); ?></li>
								<li class="mb-2">- <?php _e( 'Ampliar tus salidas profesionales.', 'understrap-master' ); ?></li>
							</ul>
						</div>
						<div class="col-xl-4 offset-xl-1 col-lg-5 col-md-5">
							<img class='no-responsive pull-left mt-xl-0 mt-6' src='<?php echo get_site_url();?>/img/mindfulness-4.jpg' alt='<?php _e( 'Coaching Anayansi Imagen 1', 'understrap-master' ); ?>'>
						</div>
					</div>
							
					<div class="row mt-6">
						<div class="col-lg-6 col-md-6">
							<h6 class="bitter mb-2"><?php _e( 'Metodología:', 'understrap-master' ); ?></h6>
							<p><?php _e( 'La metodología de la Formación de Instructor/a de Mindfulness en Educación (IME) combina los fundamentos teóricos con la práctica experiencial, basada en dinámicas que ayudan 
							a comprender nuestro cuerpo, nuestra mente y nuestras emociones. Poniendo énfasis en la perspectiva fenomenológica de “learning by doing” o aprender haciendo, para acceder al conocimiento 
							a través de nuestra propia experiencia personal. "No puedes enseñar un camino que no has recorrido".', 'understrap-master' ); ?></p>
							<a class="btn no-radius btn-primary big mt-4 mb-md-0 mb-4" href="<?php echo get_site_url();?>/contacto/"><?php _e( '¡Me apunto!', 'understrap-master' ); ?></a>
							<p class="font-weight-bold mt-3"><?php _e( 'PLAZAS AGOTADAS', 'understrap-master' ); ?></p>
						</div>
						
						<div class="col-lg-6 col-md-6">
							<h6 class="bitter mb-2"><?php _e( 'Requisitos para la certificación:', 'understrap-master' ); ?></h6>
							<ul class="list-unstyled">
								<li class="mb-2">- <?php _e( 'Asistencia al 100% de los seminarios formativos (a no ser que esté justificado por enfermedad o causas mayores).', 'understrap-master' ); ?></li>
								<li class="mb-2">- <?php _e( 'Participación activa en las prácticas y momentos de indagación.', 'understrap-master' ); ?></li>
								<li class="mb-2">- <?php _e( 'Compromiso de práctica en casa.', 'understrap-master' ); ?></li>
								<li class="mb-2">- <?php _e( 'Presentación de un calendario didáctico de Mindfulness en las aulas', 'understrap-master' ); ?></li>
								<li class="mb-2">- <?php _e( 'Exposición de una práctica guiada.', 'understrap-master' ); ?></li>
							</ul>
						</div>
					</div>
				</div>
			</div>	
		</div>	
		<div class="container-fluid black" id="teachers">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 offset-lg-3 col-md-8 offset-md-4">
						<h4 class="brown-line  bitter mb-md-5 mb-0"><?php _e( 'Equipo Docente IME:', 'understrap-master' ); ?></h4>
					</div>
				</div>
				<div class="owl-carousel">
					<div class="item">				
						<div class="row">
							<div class="col-lg-3 col-md-4">
								<img class='img-fluid mt-lg-0 mt-5' src='<?php echo get_site_url();?>/img/equipo_mind_coral.jpg' alt='<?php _e( '', 'understrap-master' ); ?>'>
							</div>
							<div class="col-lg-9 col-md-8">
								<p class="bitter font-weight-bold mb-3 teacher-title mt-md-0 mt-4"><?php _e( 'Coral Selfa García', 'understrap-master' ); ?></p>
								<p class="bitter "><?php _e( 'Directora Formación IME', 'understrap-master' ); ?></p>
								<p class="mt-lg-5 mt-0"><?php _e( 'Psicóloga por la Universitat Oberta de Catalunya y Trabajadora social por la Universitat de València. Especialista Universitaria en Mindfulness 
								y Educación Consciente. Experta en Terapia Familiar Sistémica. Certificada en “Mindful Educator Essentials” por la Organización Internacional de Mindful Schools para niñ@s 
								y jóvenes. Formada en Positive Neuroplasticity por Rick Hanson Ph.D (Nirakara). Teacher Trained en MSC (Mindful Self-Compassion). Colabora como docente en el 
								“Especialista Universitario de Mindfulness en contextos educativos” de la Universidad de Extremadura. Creadora de Mindala Mindful Learning, Escuelas Amables y los recursos 
								educativos de Mindala. Con más de 10 años de experiencia ofreciendo Mindfulness a niños/as. con y sin diversidad funcional (TEA). Actualmente ofrece formaciones de 
								entrenamiento en Mindfulness y Compasión para toda la comunidad educativa. Colabora con la Universidad de Cádiz, CEP de Cádiz y CEP de Jerez.', 'understrap-master' ); ?></p>
							</div>
						</div>
					</div>
					<div class="item">				
						<div class="row">
							<div class="col-lg-3 col-md-4">
								<img class='img-fluid mt-lg-0 mt-5' src='<?php echo get_site_url();?>/img/equipo_mind_carlos.jpg' alt='<?php _e( '', 'understrap-master' ); ?>'>
							</div>
							<div class="col-lg-9 col-md-8">
								<p class="bitter font-weight-bold mb-3 teacher-title mt-md-0 mt-4"><?php _e( 'Carlos García', 'understrap-master' ); ?></p>
								<p class="mt-lg-5 mt-0"><?php _e( 'Licenciado en Psicología por la Universidad Autónoma de Madrid. Investigador en la Facultad de Psicología de la UAM. Su investigación versa sobre 
								la eficacia de la aplicación de mindfulness en el contexto educativo. Experto en Mindfulness en Contextos de Salud por la Universidad Complutense de Madrid. Co-creador del Programa 
								basado en Mindfulness Crecer Respirando para el contexto escolar y colaborador en el Instituto Nirakara. Formado por la organización Mindful Schools y en el protocolo .b 
								(Mindfulness in the Schools Project). Ha recibido el Francisco Varela Award del Mind and Life Europe para medir el impacto de la práctica de mindfulness en niños en contextos 
								vulnerables, y ha realizado varias estancias de investigación, una de ellas al Laboratorio de Desarrollo Socio-emocional dirigido por la profesora Kimberly Schonert-Reichl en la 
								Universidad de la British Columbia (Vancouver, Canada).', 'understrap-master' ); ?></p>
							</div>
						</div>
					</div>
					<div class="item">				
						<div class="row">
							<div class="col-lg-3 col-md-4">
								<img class='img-fluid mt-lg-0 mt-5' src='<?php echo get_site_url();?>/img/equipo_mind_noemi.jpg' alt='<?php _e( '', 'understrap-master' ); ?>'>
							</div>
							<div class="col-lg-9 col-md-8">
								<p class="bitter font-weight-bold mb-3 teacher-title mt-md-0 mt-4"><?php _e( 'Noemí Soto', 'understrap-master' ); ?></p>
								<p class="mt-lg-5 mt-0"><?php _e( 'Creadora y Maestra de Ancestral Dance (técnica de meditación en movimiento a través de la expresión libre y natural del cuerpo). Maestra de Spaceholder 
								en 5ritmos. Maestra de Chikung. Bailarina profesional, Trabajadora social especializada en infancia, familias y adolescencia. Especialista en acompañamiento emocional. En el presente dirige 
								su Centro Nydo y facilita talleres compartiendo sus conocimientos, uniendo todo lo que ella es y ha experimentado.', 'understrap-master' ); ?></p>
							</div>
						</div>
					</div>
					<div class="item">				
						<div class="row">
							<div class="col-lg-3 col-md-4">
								<img class='img-fluid mt-lg-0 mt-5' src='<?php echo get_site_url();?>/img/equipo_mind_marilo.jpg' alt='<?php _e( '', 'understrap-master' ); ?>'>
							</div>
							<div class="col-lg-9 col-md-8">
								<p class="bitter font-weight-bold mb-3 teacher-title mt-md-0 mt-4"><?php _e( 'Mariló Gascón', 'understrap-master' ); ?></p>
								<p class="mt-lg-5 mt-0"><?php _e( 'Es Licenciada en Psicología. Psicóloga General Sanitaria. Experta en Mediación Familiar. Especialista en Psicoterapia y Mindfulness. Máster en Terapia Familiar 
								Sistémica. Postgrado en Programación Neurolingüística. Teacher Trained en Programa MSC (Mindfulness Self-Compassion). Con más de 12 años de experiencia en Psicología, desarrollando intervenciones 
								y formación para el Desarrollo de Habilidades Personales y Sociales; Cursos y Talleres de Mindfulness y Gestión Emocional para distintos colectivos (Psicólogos, Trabajadores Sociales, Profesores, 
								Entrenadores deportivos, Familias, Personal Sanitario, Empresas, etc.). Centra sus intervenciones en los últimos avances de la Neurociencia en Mindfulness, Inteligencia Emocional y Psicología 
								Positiva. Gestiona y dirige el grupo de prácticas de la Asociación Española de Mindfulness en Sevilla. Fundadora de NORAX Salud y Bienestar. ', 'understrap-master' ); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container mt-6 green" id="formacionmsc">
			<div class="row mt-6">
				<div class="col-md-7">
					<h4 class="bitter mb-4"><?php _e( 'Formación oficial en el Programa MSC (Mindful Self-Compassion)', 'understrap-master' ); ?></h4>
					<p><?php _e( '“La práctica de la meditación no se trata de intentar mirar hacia otro lugar para convertirse en algo mejor. Se trata de hacerse amigo de lo que ya somos” Pema Chödrön.', 'understrap-master' ); ?></p>
					<p><?php _e( 'El programa MSC fue diseñado en EEUU y avalado por la Universidad de San Diego (California), desarrollado por Christopher Germer, PhD, líder en la integración de mindfulness y psicoterapia (www.chrisgermer.com) 
					y Kristin Neff, PhD, investigadora pionera en el campo de la autocompasión (www.Self-Compassion.org).', 'understrap-master' ); ?></p>
					<p>
						<?php _e( 'Numerosos estudios de investigación muestran que el entrenamiento en este Programa aumenta la autocompasión o amor incondicional hacia uno mismo, la compasión hacia los otros, reduce la ansiedad, el estrés 
						y la depresión. Más información sobre ciencia y Autocompasión en:', 'understrap-master' ); ?>
						<a href="https://www.mindfulnessyautocompasion.com" title="<?php _e( 'Ir a Mindfulness y Autocompasión', 'understrap-master' ); ?>" target="_blank">https://www.mindfulnessyautocompasion.com</a>
					</p>
					<p><?php _e( 'El objetivo del MSC es cultivar una presencia amorosa conectada que nos ayude a descubrir nuestros propios recursos internos para conocernos mejor y desarrollar la capacidad de 
					responder a situaciones difíciles con mayor amabilidad y comprensión.', 'understrap-master' ); ?></p>
				</div>
				<div class="col-xl-4 offset-xl-1 col-lg-5 col-md-5">
					<img class='no-responsive pull-left mt-xl-0 mt-5' src='<?php echo get_site_url();?>/img/mindfulness-5.jpg' alt='<?php _e( 'Coaching Anayansi Imagen 5', 'understrap-master' ); ?>'>
				</div>
			</div>
			<div class="row space">
				<div class="col-lg-6  col-md-6">
					<img class='no-responsive pull-right ' src='<?php echo get_site_url();?>/img/mindfulness-6.jpg' alt='<?php _e( 'Centro Anayansi Imagen 6', 'understrap-master' ); ?>'>
				</div>
				<div class="col-xl-5 offset-xl-1 col-lg-6 col-md-6">
					<h6 class="mb-xl-5 mb-4 mt-md-0 mt-5"><?php _e( 'Abierto Plazo de Inscripción II edición ', 'understrap-master' ); ?></h6>
					<ul class="list-unstyled">
						<li class="mb-4">• <strong><?php _e( 'Duración:', 'understrap-master' ); ?></strong> <?php _e( '31 horas presenciales.', 'understrap-master' ); ?></li>
						<li class="mb-4">• <strong><?php _e( 'Lugar:', 'understrap-master' ); ?></strong><?php _e( 'Centro Anayansi. La Muela de Vejer (Cádiz).', 'understrap-master' ); ?></li>
						<li class="mb-4">• <strong><?php _e( 'Instructora:', 'understrap-master' ); ?></strong><?php _e( 'Coral Selfa, Psicóloga. Teacher Trained en Mindful Self-Compassion.', 'understrap-master' ); ?></li>
						
						<?php /*
						<li class="mb-4">
							<p>• <strong><?php _e( 'Inversión:', 'understrap-master' ); ?></strong></p>
							<p class="mb-2"><?php _e( 'Hasta el 17 de Enero 2021: 290€.', 'understrap-master' ); ?></p>
							<p class="mb-2"><?php _e( 'Después del 17 de Enero 2021: 340€.', 'understrap-master' ); ?></p>
							<p class="mb-2">
								<?php _e( 'Beca de colaborador/a: Si eres psicólog@ clínico y quieres realizar la formación como asistente colaborador/a, puedes escribirnos a:', 'understrap-master' ); ?> 
								<a href="mailto:info@mindalamindful.com" title= "<?php _e( 'Enviar correo a: info@mindalamindful.com', 'understrap-master' ); ?>">info@mindalamindful.com</a>
							</p>
						</li>
						*/ ?>
					</ul>
					<a class="btn no-radius btn-primary big mt-xl-5 mt-4 w-100" href="<?php echo get_site_url();?>/contacto" title="<?php _e( 'Ir a Contacto', 'understrap-master' ); ?>"><?php _e( 'Me interesa, quiero más información ', 'understrap-master' ); ?></a>
				</div>
			</div>
			<div class="row mt-6">
				<div class="col-xl-5 col-md-6">
					<h6 class="bitter mb-4"><?php _e( 'Qué incluye la formación:', 'understrap-master' ); ?></h6>
					<ul class="list-unstyled">
						<li class="mb-3">• <?php _e('8 sesiones semanales teórico-prácticas de 3 horas.','understrap-master');?></li>
						<li class="mb-3">• <?php _e('Retiro de silencio amable de 7 horas.','understrap-master');?></li>
						<li class="mb-3">• <?php _e('Acompañamiento por una instructora certificada durante 2 meses (a través de email y whatsapp).','understrap-master');?></li>
						<li class="mb-3">• <?php _e('Dossier que recoge todas las prácticas.','understrap-master');?></li>
						<li class="mb-3">• <?php _e('Audios del Programa MSC.','understrap-master');?></li>
						<li class="mb-3">• <?php _e('Certificado oficial conforme a los estándares internacionales de Mindfulness y Compasión. Válido  para el Itinerario Profesional de Teacher Training en MSC. 
						Más información en','understrap-master');?> <a href="www.centerformsc.org" target="_blank" title="<?php _e( 'Ir a www.centerformsc.org', 'understrap-master' ); ?>">www.centerformsc.org</a></li>
					</ul>
					<p class="mb-3 mt-4"><?php _e( 'El Programa consta de 8 sesiones y 1 retiro, divididos en los siguientes contenidos:', 'understrap-master' ); ?></p>
					<ol class="pl-3">
						<li class="mb-3"><?php _e('Descubre qué es la Autocompasión o conciencia amable.','understrap-master');?></li>
						<li class="mb-3"><?php _e('Practicando Mindfulness.','understrap-master');?></li>
						<li class="mb-3"><?php _e('Practicando la bondad amorosa.','understrap-master');?></li>
						<li class="mb-3"><?php _e('Descubriendo tu voz amable y compasiva.','understrap-master');?></li>
						<li class="mb-3"><?php _e('Viviendo profundamente.','understrap-master');?></li>
						<li class="mb-3"><?php _e('Manejando las emociones difíciles.','understrap-master');?></li>
						<li class="mb-3"><?php _e('Transformando las relaciones difíciles.','understrap-master');?></li>
						<li class="mb-3"><?php _e('Abrazando tu vida.','understrap-master');?></li>
					</ol>
					<p class="mt-4"><?php _e( 'Retiro de silencio amable e integración (7 horas).', 'understrap-master' ); ?></p>
				</div>

				<div class="col-xl-6 offset-xl-1 col-md-6">		
					<h6 class="bitter mb-3"><?php _e( 'Objetivos:', 'understrap-master' ); ?></h6>
					<p class="big mb-4 font-weight-bold"><?php _e( 'General:', 'understrap-master' ); ?></p>
					<p><?php _e( 'Enseñar principios y prácticas para cultivar habilidades de Mindfulness y Auto-compasión que permitan responder a situaciones difíciles con amabilidad y comprensión.', 'understrap-master' ); ?></p>
					<p class="big mt-5 mb-4 font-weight-bold"><?php _e( 'Específicos:', 'understrap-master' ); ?></p>
					<ul class="list-unstyled">
						<li class="mb-3">- <?php _e('Mejorar la relación que tienes contigo mismo/a.','understrap-master');?></li>
						<li class="mb-3">- <?php _e('Manejar emociones difíciles con mayor facilidad.','understrap-master');?></li>
						<li class="mb-3">- <?php _e('Encarnar habilidades para ser más resiliente.','understrap-master');?></li>
						<li class="mb-3">- <?php _e('Aprender a hablarte con una voz más amable y menos crítica.','understrap-master');?></li>
						<li class="mb-3">- <?php _e('Transformar las relaciones difíciles en otras más saludables.','understrap-master');?></li>
						<li class="mb-3">- <?php _e('Manejar la fatiga del cuidador- educador.','understrap-master');?></li>
						<li class="mb-3">- <?php _e('Dejar de tratarte con dureza o exigencia.','understrap-master');?></li>
						<li class="mb-3">- <?php _e('Aprender a ser tu mejor amigo, maestro y aliado.','understrap-master');?></li>
						<li class="mb-3">- <?php _e('Saborear la vida. Cultivar la felicidad y el agradecimiento.','understrap-master');?></li>
					</ul>
					<p><?php _e( 'Instructora: Coral Selfa. Psicóloga, Teacher Trained en el Programa Mindful Self-Compassion.', 'understrap-master' ); ?></p>
					<a class="btn no-radius  big mt-4" href="<?php echo get_site_url();?>/contacto" title="<?php _e( 'Ir a Contacto', 'understrap-master' ); ?>"><?php _e( 'Me interesa', 'understrap-master' ); ?></a>
				</div>
			</div>
		</div>
		<div class="container-fluid white green-block text-center mt-6 mindfull-banner" id="silencioamable">
			<div class="container">
				<div class="row">
					<div class="col-md-12 pt-5 pb-5">
						<h3 class="mb-5 bitter"><?php _e( ' Retiros de silencio amable', 'understrap-master' ); ?></h3>
						<h5 class="bitter mb-4"><?php _e( '“El que mora en el silencio se vive a sí mismo sin reservas y serenamente, pues todo lo serena el silencio”', 'understrap-master' ); ?></h4>
						<h5 class="bitter"><?php _e( ' P. Moratiel', 'understrap-master' ); ?></h4>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 green mt-5">
					<p><?php _e( 'Cuando quiera que haya silencio a tu alrededor, escúchalo. Eso significa, simplemente, que has de darte cuenta de él. 
					Presta atención al silencio. Escuchar el silencio te conecta con la quietud dentro de ti, porque solo la quietud te permite ser consciente del silencio. (Eckart Tolle).', 'understrap-master' ); ?></p>
					<p><?php _e( 'Mira un árbol, una flor, una planta. Deja que tu consciencia repose en la sabiduría de la naturaleza. El silencio nos trae la paz y plenitud.', 'understrap-master' ); ?></p>
					<p><?php _e( '“El silencio nos ayuda a detener nuestro propio ruido interno, nos enseña a escuchar, a tomar conciencia, a ver y sentir”.', 'understrap-master' ); ?></p>
					<p><?php _e( 'Hay momentos en la vida en los que necesitamos reencontrarnos con nuestro ser interno e iniciamos un camino de búsqueda, ¿quién soy realmente? ¿cúal es mi misión en la vida?', 'understrap-master' ); ?></p>
					<p><?php _e( 'Hacer un retiro de silencio en Anayansi te permite conectar con la esencia de la naturaleza, para encontrar el camino a tu propio yo, es un camino que puede cambiar la vida profundamente y avanzar en tu práctica meditativa.', 'understrap-master' ); ?></p>
					<p class="font-weight-bold mt-5"><?php _e( 'Próximo retiro: 5 días de Silencio Amable. Julio 2021.', 'understrap-master' ); ?></p>
					<a class="btn no-radius  big mt-4" href="<?php echo get_site_url();?>/contacto" title="<?php _e( 'Ir a Contacto', 'understrap-master' ); ?>"><?php _e( 'Me interesa', 'understrap-master' ); ?></a>
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
						<a href="<?php echo get_site_url();?>/coaching/" class="" title="<?php _e( 'Ir a Coaching', 'understrap-master' ); ?>">
							<img class='img-responsive' src='<?php echo get_site_url();?>/img/anayansi-activity-coaching
							.jpg' alt='<?php _e( 'Imagen Coaching', 'understrap-master' ); ?>'>
							<h6 class="big mt-2 mb-2"><?php _e( 'Coaching', 'understrap-master' ); ?></h6>
							<p class="black fira pl-3 pr-3"><?php _e( 'Encuentra tu propósito en la vida.', 'understrap-master' ); ?></p>
						</a>
						<a href="<?php echo get_site_url();?>/coaching/" class="btn w-100 no-radius" title="<?php _e( 'Ir a Coaching', 'understrap-master' ); ?>">
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
