<!DOCTYPE html>
<html lang="en">
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
						<div class="8u">
							<div id="content">

								<!-- Content -->
							
									<article>
										<header>
											<h2>Diplomados</h2>
											
										</header>
										
										<span class="image featured"><img src="images/banner.jpg" alt="" /></span>
										
																			
										<h3>DIPLOMADO EN GESTIÓN PÚBLICA</h3>
										<p align="justify">El diplomado en GESTIÓN PÚBLICA está dirigido a:
										<ul>
	    									<li>Profesionales que ocupen cargos directivos y especialistas de las entidades del sector público.
    										<li>Profesionales de empresas, organismos no gubernamentales, gremios y universidades que tengan al sector estatal como socio o destinatario de su trabajo.
    										<li>Profesionales de línea de entidades del sector público provenientes de entidades de nivel nacional, regional y local.
    										<li>Profesionales con responsabilidades en el diseño y ejecución de políticas y programas públicos.
    										<li>Consultores del sector público o de empresas contratistas del estado, gobiernos regionales y locales.
										</ul>
										</p>
										<h4>PLAN DE ESTUDIOS</h4>
										<ul>	
											<li>Planeamiento Estratégico en el Estado</li>
											<li>Gestión estratégica en organizaciones públicas</li>
											<li>Gestión pública por procesos</li>
											<li>Presupuesto público</li>
											<li>Procesos de selección</li>
											<li>Modalidades especiales de selección</li>
											<li>Gestión pública del factor humano</li>
											<li>Gestión de la contratación pública</li>
											<li>SEACE y contrataciones electrónicas</li>
											<li>Gestión de presupuesto público</li>
											<li>Gestión de la inversión pública</li>
											<li>Gestión de proyectos públicos</li>
											</ul>	
									</article>
						
							</div>
						</div>
						<div class="4u">
							<div id="sidebar">

								<!-- Sidebar -->
							
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
	
	<?php
		FooterWeb(); //Llama a la funcion para generar el de todo el footer
	?>
</body>
</html>