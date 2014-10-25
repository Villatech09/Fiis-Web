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
		<section class="wrapper style1">
			<div class="container">
				<div class="row">
					<section class="12u">
						<div class="box post">
							<a class="image left"><img src="images/pic01.jpg"/></a>
							<div class="inner">
								<h3>Mensaje del decano</h3>
								<p align="justify">Nuestra Facultad de Ingeniería Industrial y de Sistemas es una institución educativa de excelencia. Se distingue, entre otros méritos, por: un ambiente muy propicio para el estudio, cordiales relaciones interpersonales entre profesores y alumnos, unas facilidades físicas que invitan al aprendizaje, un centro de acceso a la información con la más avanzada tecnología, un cuerpo estudiantil de impresionantes credenciales, un magnífico personal de apoyo comprometido con nuestra misión educativa y un profesorado compuesto por distinguidos juristas, cuya excelencia pedagógica, publicaciones, preparación académica, experiencia profesional y compromiso social, contribuye a garantizar que los estudiantes obtengan una sólida formación jurídica.</p>
								<p align="justify">La Facultad es, pues, un lugar óptimo para el estudio. En ella también hay: profundas discusiones sobre los más variados temas, interesantes actividades, desarrollo de destrezas profesionales y servicio a la sociedad, dentro de un ambiente de respeto y sosiego. En fin, una comunidad en la cual día tras día tenemos experiencias de gran significado en nuestras vidas.
								</p>
								<p>Nos alegra que seas parte de nuestra Facultad de Ingeniería Industrial y de Sistemas.</p>
								<p>
								Atte. Decano y Catedrático
								</p>
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