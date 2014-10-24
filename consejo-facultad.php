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
			if ($archivoActual == 'index.php'){
				# code...
				headerWebInicio();
			} 
			elseif ($archivoActual == 'nosotros.php'){
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
			elseif (($archivoActual == 'pregrado-epii.php') or ($archivoActual == 'pregrado-epis.php')) {
		 		# code...
		 		headerWebPregrado();
		 	}
		 	elseif (($archivoActual == 'postgrado-epii.php') or ($archivoActual == 'postgrado-epis.php')) {
				# code...
				headerWebPostgrado();
			} 
		?>
		<!-- Gigantic Heading -->
			<section class="wrapper style1">
				<div class="container">
					<header class="major">
						<h2>Consejo de Facultad</h2>
					</header>
				</div>
			</section>
		<!-- Posts -->
			<section class="wrapper style2">
				<div class="container">
					<div class="row">
						<section class="6u">
							<div class="box post">
								<a href="documents/consejo.pdf" class="image left" target="_blank"><img src="images/pic01.jpg" alt="" /></a>
								<div class="inner">
									<a  href="documents/consejo.pdf" target="_blank"><h3>¿Que es el consejo de Facultad?</h3>
									<p>Artículos conforme a la nueva "Ley Universitaria".</p></a>
								</div>
							</div>
						</section>
						<section class="6u">
							<div class="box post">
								<a href="#" class="image left"><img src="images/agenda.jpg" alt="" /></a>
								<div class ="panel-heading">
								<div class="inner">
									<h3>Agenda</h3>
									<p>Fechas de las reuniones.</p>
								</div>
								</div>
							</div>
						</section>
					</div>
					<div class="row">
						<section class="6u">
							<div class="box post">
								<a href="#" class="image left"><img src="images/acuerdo.gif" alt="" /></a>
								<div class="inner">
									<h3>Acuerdos</h3>
									<p>Disposiciones hechas al finalizar un consejo.</p>
								</div>
							</div>
						</section>
						<section class="6u">
							<div class="box post">
								<a href="#" class="image left"><img src="images/miembros.jpg" alt="" /></a>
								<div class="inner">
									<h3>Miembros del Consejo</h3>
									<p>Profesores y Administrativos pertenecientes.</p>
								</div>
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