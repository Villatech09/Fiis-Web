<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
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
					
		<!-- Posts -->
			
			<section class="presentacion">
			
			<h2>Presentación</h2>
			<p style="text-align:justify">La Escuela de Post Grado, a través de su Sección de Post Grado de la facultad de Ingeniería de Industrial y de Sistemas, Gerencia de Logística y Gerencia de calidad en Productividad y Relaciones Industriales, invitan a participar en esta Maestría  a los bachilleres, titulados en Ingeniería Industrial, en Ingeniería de Sistemas, Ingenierías y áreas afines.
			En esta época de desafíos que presenta la economía global y en respuesta a esta demanda llama a participar en la formación de profesionales de alto nivel científico y tecnológico aptos para la obtención de grado de MAESTRO: DE INGENIERÍA DE SISTEMAS, EN PRODUCTIVIDAD Y EN RELACIONES INDUSTRIALES, EN INGENIERIA INSDUSTRIAL CON MENCIÓN EN GERENCIA DE LOGÍSTICA Y GERENCIA DE CALIDAD.
			El objetivo es ofrecer una sólida formación de tecnologías para la optimización de procesos de gestión en dirección estratégica de talento humano y manejo de instrumentos técnicos para investigación tecnológica.
			</p>
			</section>
			

			<section class="wrapper style1">
				<div class="container">
					<div class="row double">
						<section class="4u">
							<div class="box highlight">
								<i class="icon major fa-paper-plane"></i>
								<h3>Requisitos</h3>
								<p></p><a href="postgrado-informes.php" class="button">Ver más</a>
							</div>
						</section>
						<section class="4u">
							<div class="box highlight">
								<i class="icon major fa-pencil"></i>
								<h3>Inversion</h3>
								<p> </p><a href="postgrado-informes.php" class="button">Ver más</a>
							</div>
						</section>
						<section class="4u">
							<div class="box highlight">
								<i class="icon major fa-wrench"></i>
								<h3>Contactanos</h3>
								<p> </p><a href="postgrado-informes.php" class="button">Ver más</a>
							</div>
						</section>
					</div>
				</div>
			</section>

		<!-- Footer -->
		<?php
		FooterWeb(); //Llama a la funcion para generar el de todo el footer
		?>
	</body>
</html>