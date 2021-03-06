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
			elseif (($archivoActual == 'pregrado-epii.php') or ($archivoActual == 'pregrado-epis.php') or ($archivoActual == 'pregrado-epii-perfil.php')or ($archivoActual == 'pregrado-epis-perfil.php')) {
		 		# code...
		 		headerWebPregrado();
		 	}
		 	elseif (($archivoActual == 'postgrado-epii.php') or ($archivoActual == 'postgrado-epis.php')) {
				# code...
				headerWebPostgrado();
			} 
		?>
		<section class="wrapper style1">
			<div class="container">
				<div class="row">
					<section class="12u">
						<div class="box post">
							<a class="image left"><img src="images/pic01.jpg"/></a>
							<div class="inner">
								<h3>Perfil Profesional</h3>
								<p>El Ingeniero de Sistemas egresado en la Universidad Nacional del Callao, tiene una formación profesional que le permite analizar, diseñar e implementar sistemas de información, manejar tecnologías y comunicación para la solución de problemas en la toma de decisiones generales, en el proceso de gestión de los sistemas de producción de bienes y/o servicios en la evaluación, desarrollo e implementación de automatización organizacional.</p>
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