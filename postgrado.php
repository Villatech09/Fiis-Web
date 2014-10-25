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
			

			<!-- Main -->
			<section class="wrapper style1">
				<div class="container">
					<div class="row double">
						<div class="3u">
							<div id="sidebar1">

								<!-- Sidebar 1 -->
							
									<section>
										<h2>Maestrias</h2>
										<h3>Ingenieria Industrial y de Sistemas</h3>
																			
										<footer>
											<a href="postgrado-maestrias.php" class="button">Leer más</a>
										</footer>
									</section>

									<section>
										<h2>Diplomados</h2>
										
										<footer>
											<a href="postgrado-diplomados.php" class="button">Leer más</a>
										</footer>
									</section>

									
						
							</div>
						</div>
						<div class="6u skel-cell-important">
							<div id="content">

								<!-- Content -->
							
									<article>
										<header>
											<h2>Presentacion</h2>
											
										</header>
										
										<span class="image featured"><img src="images/banner.jpg" alt="" /></span>
										
										<p style="text-align:justify">La Escuela de Post Grado, a través de su Sección de Post Grado de la facultad de Ingeniería de Industrial y de Sistemas, Gerencia de Logística y Gerencia de calidad en Productividad y Relaciones Industriales, invitan a participar en esta Maestría  a los bachilleres, titulados en Ingeniería Industrial, en Ingeniería de Sistemas, Ingenierías y áreas afines.
										En esta época de desafíos que presenta la economía global y en respuesta a esta demanda llama a participar en la formación de profesionales de alto nivel científico y tecnológico aptos para la obtención de grado de MAESTRO: DE INGENIERÍA DE SISTEMAS, EN PRODUCTIVIDAD Y EN RELACIONES INDUSTRIALES, EN INGENIERIA INSDUSTRIAL CON MENCIÓN EN GERENCIA DE LOGÍSTICA Y GERENCIA DE CALIDAD.
										El objetivo es ofrecer una sólida formación de tecnologías para la optimización de procesos de gestión en dirección estratégica de talento humano y manejo de instrumentos técnicos para investigación tecnológica.
										</p>
										
															
							</div>
						</div>
						<div class="3u">
							<div id="sidebar2">

								<!-- Sidebar 2 -->

									<section>
										<h2>Informes</h2>
										<ul>
											<li>Costos</li>
											<li>Requisitos</li>
											<li>Contactanos</li>
										</ul>																			
										<footer>
											<a href="postgrado-informes.php" class="button">Leer más</a>
										</footer>
									</section>
										
									
							</div>
						</div>
					</div>
				</div>
			</section>			
		<!-- Footer -->
		<?php
		FooterWeb(); //Llama a la funcion para generar el de todo el footer
		?>
	</body>
</html>