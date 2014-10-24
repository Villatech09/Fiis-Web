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
		<!-- Gigantic Heading -->
			<section class="wrapper style2">
				<div class="container">
					<header class="major">
						<h2>Escuela Profesional de Ingenieria de Sistemas - EPIS</h2>
						<p>Pregrado</p>
					</header>
				</div>
			</section>
		<!-- Posts -->
			<section class="wrapper style1">
				<div class="container">
					<div class="row">
						<section class="6u">
							<div class="box post">
								<a href="pregrado-epis-perfil.php" class="image left"><img src="images/pic01.jpg" alt="" /></a>
								<div class="inner">
									<h3>Perfil Profesional</h3>
									<p>El alumno estara en la capacidad de ...</p>
								</div>
							</div>
						</section>
						<section class="6u">
							<div class="box post">
								<a href="pregrado-epis-plan.php" class="image left"><img src="images/pic01.jpg" alt="" /></a>
								<div class="inner">
									<h3>Plan de estudios</h3>
									<p>Los cursos ha llevar a lo largo de la carrera universitaria seran ....</p>
								</div>
							</div>
						</section>
						
					</div>
					<div class="row">
						<section class="6u">
							<div class="box post">
								<a href="#" class="image left"><img src="images/pic02.jpg" alt="" /></a>
								<div class="inner">
									<h3>Plana docente</h3>
									<p>Profesores a dictar los cursos.</p>
								</div>
							</div>
						</section>
						<section class="6u">
							<div class="box post">
								<a href="#" class="image left"><img src="images/pic03.jpg" alt="" /></a>
								<div class="inner">
									<h3>Malla curricular</h3>
									<p>distribucion de los cursos por ciclo</p>
								</div>
							</div>
						</section>
					</div>
					<div class="row">
						<section class="6u">
							<div class="box post">
								<a href="#" class="image left"><img src="images/pic04.jpg" alt="" /></a>
								<div class="inner">
									<h3>Autoridades</h3>
									<p>encargados de...</p>
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