<!DOCTYPE HTML>
<html>
	<head>
		<title>FIIS-UNAC</title>
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
		<!-- Gigantic Heading -->
			<section class="wrapper style2">
				<div class="container">
					<header class="major">
						<h2>Biblioteca Especializada</h2>
					</header>
				</div>
			</section>
		<!-- Posts -->
		<!-- El codigo de aca debe ser generado con php segun mi parecer pero se necesitaria una BD (Borrar esto cuando se aya realizado esto) -->
			<!-- Main -->
			<section class="wrapper style1">
				<div class="container">
					<div class="row double">
						<div class="8u">
							<div id="content">

								<!-- Content -->
							
									<article>
										
										
										<span class="image featured"><img src="images/banner.jpg" alt="" /></span>
										
																			
										</article>
						
							</div>
						</div>
						<div class="4u">
							<div id="sidebar">
		
							</div>
						</div>
					</div>
				</div>
			</section>			




			<section class="wrapper style1">
				<div class="container">
					<h1>Lista de Adquisiciones Recientes</h1>
					<table class="table table-hover">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Autor</th>
							<th>Descripción</th>
							<th>Donante</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>Nombre 01</th>
							<th>Autor 01</th>
							<th>Descripción 01</th>
							<th>Donante 01</th>
						</tr>
						<tr>
							<th>Nombre 02</th>
							<th>Autor 02</th>
							<th>Descripción 02</th>
							<th>Donante 02</th>
						</tr>
						<tr>
							<th>Nombre 03</th>
							<th>Autor 03</th>
							<th>Descripción 03</th>
							<th>Donante 03</th>
						</tr>
						<tr>
							<th>Nombre 04</th>
							<th>Autor 04</th>
							<th>Descripción 04</th>
							<th>Donante 04</th>
						</tr>
						<tr>
							<th>Nombre 05</th>
							<th>Autor 05</th>
							<th>Descripción 05</th>
							<th>Donante 05</th>
						</tr>
						<tr>
							<th>Nombre 06</th>
							<th>Autor 06</th>
							<th>Descripción 06</th>
							<th>Donante 06</th>
						</tr>
					</tbody>
					</table>
				</div>
			</section>



		<?php
			FooterWeb(); //Llama a la funcion para generar el de todo el footer
		?>
	</body>
</html>