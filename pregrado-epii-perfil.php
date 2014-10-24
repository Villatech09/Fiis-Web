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
								<h3>Perfil Profesional</h3>
								<p>El Ingeniero Industrial egresado de la Universidad Nacional del Callao, tiene una formación profesional que se vale de los conocimientos y posibilidades especiales que brindan las matemáticas, la física, las ciencias sociales y la administración, para especificar, predecir y evaluar los resultados que se obtendrán de los sistemas productivos de bienes y/o servicios, integrados por personas, materiales, equipos, energía, información y tecnología, la capacidad de abstracción, el buen razonamiento matemático, para ver situaciones de manera global, y ser un innovador permanente; además posee interés por el trabajo con personas en tareas de organización que impliquen asumir roles de coordinación, comportarse como un agente de cambio y tomar decisiones de la manera más eficiente.</p>
								<p>Posee una preparación integral y multidisciplinaria que abarca las áreas de ciencias básicas, administración y finanzas, humanidades y ciencias sociales, ingeniería básica e ingeniería industrial. Cabe resaltar, además, que a través de la elección de determinadas asignaturas, el Ingeniero Industrial de nuestra Universidad puede optar las Menciones de Operaciones; y en Comercialización, especialidades íntimamente ligadas al quehacer de nuestra Provincia Constitucional del Callao.</p>
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