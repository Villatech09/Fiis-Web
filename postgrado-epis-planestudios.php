<!DOCTYPE html>
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

		<!-- Header -->
								<?php
								include ("web-lib.php");
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
											<h2>MAESTRIA EN INGENIERIA DE SISTEMAS</h2>
											
										</header>
										
										<span class="image featured"><img src="images/banner.jpg" alt="" /></span>
										
																			
										<p align="justify">El diplomado en GESTIÓN PÚBLICA está dirigido a:
										<ul>
	    									<ul>
												<li>Aplica en forma óptima la metodología de sistemas.</li>
												<li>Posee el conocimiento tecnológico y científico que le permite integrarse a equipos multidisciplinarios para la solución de los problemas que afronta el país.</li>
												<li>Apoya a la orientación de un desarrollo nacional adecuado al área de sistemas que contemple las implicaciones sociales y su desarrollo científico y tecnológico.</li>
												<li>Define y desarrolla sistemas computacionales eficientes que permite cumplir con los objetivos de las organizaciones.</li>
												<li>Desarrolla el soporte lógico de base o de apoyo a usuarios, adecuado a las necesidades del medio. </li>
												<li>Administra eficientemente la gestión sistemática. </li>
												<li>Esta capacitado para dirigir o integrar equipos de investigación cuyo campo de acción total o parcial sea el que hacer sistémico.</li>

											</ul>
										</ul>
										</p>
										<h4>PLAN DE ESTUDIOS</h4>
										<li style="color:#37c0fb"><b>PRIMER CICLO</b></li>
										<ul>
										<li>Introducción a la ingeniería de sistemas</li>
										<li>Metodología de la investigación</li>
										<li>Matemática aplicada</li>
										<li>Teoría de lenguaje de programación</li>
										</ul>

										<li style="color:#37c0fb"><b>SEGUNDO CICLO</b></li>
										<ul>
											<li>Arquitectura del computador</li>
											<li>Probabilidad y estadística</li>
											<li>Gestión de base de datos</li>
											<li>Análisis y diseño de sistemas</li>
											</ul>

										<li style="color:#37c0fb"><b>TERCER CICLO</b></li>
										<ul>
											<li>Sistemas operativos</li>
											<li>Análisis de sistemas blandos</li>
											<li>Redes de computadoras y sistemas distribuidos</li>
											<li>Investigación operativa</li>
										</ul>

										<li style="color:#37c0fb"><b>CUARTO CICLO</b></li>
										<ul>
											<li>Planificación estratégica de sistemas</li>
											<li>Sistema de información gerencial</li>
											<li>Administración de proyectos informáticos</li>
											<li>Seminario de investigación de sistemas</li>
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