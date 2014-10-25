<!DOCTYPE HTML>
<html>
	<head>
		<title>FIIS UNAC</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>
		<?php 
			include ("web-lib.php") //Lama a la libreria creada
		?>
		<?php
		
		//Elegir la funcion para generar el codigo del header
		$archivoActual = basename($_SERVER['PHP_SELF']);
			if (($archivoActual == 'index.php')or ($archivoActual == 'mensaje-decano.php')){
			# code...
			headerWebInicio();
		} 
			elseif (($archivoActual == 'nosotros.php') or ($archivoActual == 'resena-historica.php') or ($archivoActual == 'plan-estrategico.php')or ($archivoActual == 'organigrama.php')){
			# code...
			headerWebNosotros();
		}
		elseif ($archivoActual == 'consejo-facultad.php'){
			# code...
			headerWebConsejo();
		}
		elseif ($archivoActual == 'biblioteca.php'){
			# code...
			headerWebBiblioteca();
		}
		elseif (($archivoActual == 'pregrado-epii.php') or ($archivoActual == 'pregrado-epis.php') or ($archivoActual == 'pregrado-epii-perfil.php')or ($archivoActual == 'pregrado-epis-perfil.php')) {
		 		# code...
		 		headerWebPregrado();
		} 		
		elseif (($archivoActual == 'postgrado.php') or ($archivoActual == 'postgrado-maestrias.php')or ($archivoActual == 'postgrado-diplomados.php') or ($archivoActual == 'postgrado-epii-planestudios.php') or ($archivoActual == 'postgrado-epis-planestudios.php') or ($archivoActual == 'postgrado-informes.php')) {
			# code...
			headerWebPostgrado();
		}
		elseif (($archivoActual == 'grados-titulos-mdp.php') or ($archivoActual == 'grados-titulos-rgyt.php')) {
		 		# code...
		 		headerWebGradosytitulos();
		} 		
	?>
			
			<section class="presentacion">
			
			<h2>Presentación</h2>
			<p style="text-align:justify">La Facultad de Ingeniería Industrial y de Sistemas es una organización universitaria líder, 
				emprendedora e innovadora, con perfil propio al servicio del desarrollo del país, dedicada a una formación profesional 
				basada en una educación de excelencia académica que se sustenta en el conocimiento de principios científicos, tecnológicos y
				 humanísticos y en la práctica de valores culturales, nacionales, institucionales, éticos y morales; así como en el desarrollo 
				 de la autoestima, la preservación del medio ambiente y el respeto a las ideas de los demás.</p>
			</section>
			

		<!-- Highlights -->
			<section class="wrapper style1">
				<div class="container">
					<div class="row double">
						<section class="6u">
							<div class="box highlight">
								<img src="images/MISION.jpg"/>
								<h3>Misión</h3>
								<p style="text-align:justify">La Facultad de Ingeniería Industrial y de Sistemas forma profesionales en Ingeniería Industrial e Ingeniería de Sistemas 
									altamente competitivos en dirección, control de operaciones así como de sistematización de procesos con enfoque sistémico 
									utilizando tecnología de optimización de procesos de operaciones de tecnología informática y computacional para contribuir 
									al cuidado del medio ambiente y al desarrollo de la Región Callao y del País.</p>
							</div>
						</section>
						<section class="6u">
							<div class="box highlight">
								<img src="images/vision.jpg"/>
								<h3>Visión</h3>
								<p style="text-align:justify">Ser una Facultad acreditada y con liderazgo a nivel nacional e internacional, gestora del conocimiento, formadora de profesionales 
									con ética y responsabilidad social, con docentes altamente competitivos, con infraestructura moderna, que se desarrolla en alianzas 
									estratégicas con instituciones públicas y privadas.</p>
							</div>
						</section>

					</div>
				</div>
			</section>
		<!-- Highlights -->
			<section class="wrapper style1">
				<div class="container">
					<div class="row double">
						<section class="4u">
							<div class="box highlight">
								<i class="icon major fa-paper-plane"></i>
								<h3>Reseña Historica</h3>
								<p></p><a href="resena-historica.php" class="button">Ver más</a>
							</div>
						</section>
						<section class="4u">
							<div class="box highlight">
								<i class="icon major fa-pencil"></i>
								<h3>Plan Estrategico</h3>
								<p> </p><a href="plan-estrategico.php" class="button">Ver más</a>
							</div>
						</section>
						<section class="4u">
							<div class="box highlight">
								<i class="icon major fa-wrench"></i>
								<h3>Organigrama</h3>
								<p> </p><a href="organigrama.php" class="button">Ver más</a>
							</div>
						</section>
					</div>
				</div>
			</section>
		<?php
			FooterWeb(); //Llama a la funcion para generar el de todo el footer
		?>
	</body>
</html>