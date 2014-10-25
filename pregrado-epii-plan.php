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
			elseif (($archivoActual == 'pregrado-epii.php') or ($archivoActual == 'pregrado-epis.php') or ($archivoActual == 'pregrado-epii-perfil.php') or ($archivoActual == 'pregrado-epii-plan.php')) {
		 		# code...
		 		headerWebPregrado();
		 	}
		 	elseif (($archivoActual == 'postgrado-epii.php') or ($archivoActual == 'postgrado-epis.php')) {
				# code...
				headerWebPostgrado();
			} 
		?>

		<!-- Gigantic Heading -->
			<section class="wrapper style2">
				<div class="container">
					<header class="major">
						<h2>Plan de estudios Industrial</h2>
					</header>
				</div>
			</section>

		<section class="wrapper style1">
			<div class="container">
				<div class="row">
					<a><img align="center" src="images/sistemas1.png" /></a>
							<a><img src="images/sistemas2.png" /></a>
							<div class="inner"></div>	
										
				</div>
			</div>
		</section>		
		<?php
			FooterWeb(); //Llama a la funcion para generar el de todo el footer
		?>
	</body>
</html>