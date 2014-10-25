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
			<section class="wrapper style2">
				<div class="container">
					<header class="major">
						<h2>Docentes de la Escuela Profesional de Ingenieria de Sistemas - EPIS</h2>
					</header>
				</div>
			</section>
		<!-- Posts -->
		<!-- El codigo de aca debe ser generado con php segun mi parecer pero se necesitaria una BD (Borrar esto cuando se aya realizado esto) -->
			<section class="wrapper style1">
				<div class="container">
					<h1>Lista de descripciones de los docentes</h1>
					<table class="table table-hover">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Cargo</th>
							<th>Cursos a dictar</th>
							<th>curriculum</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>Nombre01</th>
							<th>Cargo01</th>
							<th>Cursos a dictar01</th>
							<th>curriculum01</th>
						</tr>
						<tr>
							<th>Nombre02</th>
							<th>Cargo02</th>
							<th>Cursos a dictar02</th>
							<th>curriculum02</th>
						</tr>
						<tr>
							<th>Nombre03</th>
							<th>Cargo03</th>
							<th>Cursos a dictar03</th>
							<th>curriculum03</th>
						</tr>
						<tr>
							<th>Nombre04</th>
							<th>Cargo04</th>
							<th>Cursos a dictar04</th>
							<th>curriculum04</th>
						</tr>
						<tr>
							<th>Nombre05</th>
							<th>Cargo05</th>
							<th>Cursos a dictar05</th>
							<th>curriculum05</th>
						</tr>
						<tr>
							<th>Nombre06</th>
							<th>Cargo06</th>
							<th>Cursos a dictar06</th>
							<th>curriculum06</th>
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