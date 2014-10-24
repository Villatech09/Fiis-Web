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

	<section class="plandeestudios">
	<h2 align="center"><a name="arriba">Maestrias en Ingenieria Industrial</a></h2>
	<p>Maestria con mencion en:</p>
	<a href="#calidad">Gerencia de la calidad y productividad</a><br></br>
    <a href="#logistica">Gerencia en logistica</a><br></br>
    <a href="#productividad">Productividad y relaciones industriales</a><br></br>
    <br></br>
    <br></br>
    <br></br> 

<h3 style= "text-align:center"><a name="calidad">MAESTRIAS EN INGENIERIA INDUSTRIAL CON MENCION EN: GERENCIA DE LA CALIDAD Y PRODUCTIVIDAD</a></h3><br></br>

<ul>
	<li><b>PERFIL PROFESIONAL</b></li><br></br>
	<ul>
		<li>Liderar equipos de investigación y desarrollo de la gerencia en logística y a la gerencia de la calidad y productividad.</li>
		<li>Formular lineamientos de política y de estrategias para el desarrollo de la gerencia en logística y/o de la gerencia de la calidad y productividad.</li>
		<li>Ejercer la docencia de alto nivel académico en las universidades.</li>
		<li>Constituir empresas de investigación y consultoría en: Gerencia en logística y/o en gerencia de la calidad y productividad.</li>
		<li>Poseer el conocimiento científico y tecnológico que le permite integrarse a equipos multidisciplinarios para la solución de los problemas que afronta el país.</li>
		<li>Administrar eficientemente la gerencia en logística o la gerencia de la calidad y productividad.</li>
		<li>Aplicar en forma óptima la metodología y las técnicas modernas pertinentes a la ingeniería industrial que garanticen unas competencias básicas y avanzadas en esta rama de la ingeniería.</li>

	</ul>
	<li><b>PLAN DE ESTUDIOS</b></li><br></br>
	<li style="color:#37c0fb"><b>PRIMER CICLO</b></li>
	<ul>
		<li>Optimización de investigación de operaciones</li>
		<li>Ingeniería de productividad y calidad</li>
		<li>Gestión de operaciones</li>
		<li>Investigación científica y tecnológica I</li>
	</ul>

	<li style="color:#37c0fb"><b>SEGUNDO CICLO</b></li>
	<ul>
		<li>Estadística e informática aplicada a la gerencia de la calidad y productividad</li>
		<li>Gerencia logística</li>
		<li>Comportamiento y desarrollo organizacional para la gerencia de la calidad y productividad</li>
	</ul>

	<li style="color:#37c0fb"><b>TERCER CICLO</b></li>
	<ul>
		<li>Simulación de sistemas de calidad y productividad</li>
		<li>Investigación científica y tecnológica II</li>
		<li>Ingeniería de costos de calidad</li>
		<li>Software industrial aplicado a la administración de la productividad y calidad</li>
	</ul>

	<li style="color:#37c0fb"><b>CUARTO CICLO</b></li>
	<ul>
		<li>Gerencia de proyectos en calidad y productividad</li>
		<li>Seguridad y defensa Nacional</li>
		<li>Ingeniería ambiental para la calidad y productividad</li>
		<li>Investigación científica y tecnológica III</li>
	</ul>	
</ul>
<p align="right"><a href="#arriba">subir</a></p>
<br></br>
<br></br>	
<h3 style="text-align:center"><a name="logistica">MAESTRIAS EN INGENIERIA INDUSTRIAL CON MENCION EN: GERENCIA EN LOGISTICA </a></h3>
<br></br>
<ul>
	<li><b>PERFIL PROFESIONAL</b></li><br></br>
	<ul>
		<li>Liderar equipos de investigación y desarrollo de la gerencia en logística y a la gerencia de la calidad y productividad.</li>
		<li>Formular lineamientos de política y de estrategias para el desarrollo de la gerencia en logística y/o de la gerencia de la calidad y productividad.</li>
		<li>Ejercer la docencia de alto nivel académico en las universidades.</li>
		<li>Constituir empresas de investigación y consultoría en: Gerencia en logística y/o en gerencia de la calidad y productividad.</li>
		<li>Poseer el conocimiento científico y tecnológico que le permite integrarse a equipos multidisciplinarios para la solución de los problemas que afronta el país.</li>
		<li>Administrar eficientemente la gerencia en logística o la gerencia de la calidad y productividad.</li>
		<li>Aplicar en forma óptima la metodología y las técnicas modernas pertinentes a la ingeniería industrial que garanticen unas competencias básicas y avanzadas en esta rama de la ingeniería.</li>

	</ul>
	<li><b>PLAN DE ESTUDIOS</b></li><br></br>
	<li style="color:#37c0fb"><b>PRIMER CICLO</b></li>
	<ul>
		<li>Simulación de sistemas logísticos</li>
		<li>Estadística e informática aplicada a la gerencia de logística</li>
		<li>Logística integral</li>
		<li>Investigación científica y tecnológica I</li>
	</ul>

	<li style="color:#37c0fb"><b>SEGUNDO CICLO</b></li>
	<ul>
		<li>Ingeniería de productividad y calidad </li>
		<li>Estrategias y diseños de cadenas logísticas</li>
		<li>Comportamiento y desarrollo organizacional para la gerencia logística</li>
		<li>Métodos cuantitativos para la toma de decisiones</li>
	</ul>

	<li style="color:#37c0fb"><b>TERCER CICLO</b></li>
	<ul>
		<li>Gerencia de proyectos</li>
		<li>Investigación científica y tecnológica II</li>
		<li>Gestión de competitividad</li>
		<li>Software industrial aplicado a la administración de logística</li>
	</ul>

	<li style="color:#37c0fb"><b>CUARTO CICLO</b></li>
	<ul>
		<li>Logística internacional </li>
		<li>Tecnologías de información para la gestión logística</li>
		<li>Seguridad y defensa nacional</li>
		<li>Investigación científica y tecnológica III</li>
	</ul>
</ul>
<p align="right"><a href="#arriba">subir</a></p>
<br></br>
<br></br>	
<h3 style="text-align:center"><a name="productividad">MAESTRIAS EN PRODUCTIVIDAD Y RELACIONES INDUSTRIALES</a></h3>
<br></br>
<ul>
	<li><b>PERFIL PROFESIONAL</b></li><p></p>
	<ul>
		<li>Formular, implementar, conducir y evaluar políticas y actividades con criterio técnico para incrementar la productividad empresarial y la armonía laboral. Medir la productividad parcial y total para emplear sus resultados en la toma de decisiones de producción, remuneraciones, carga de trabajo, rentabilidad empresarial. </li>
		<li>Formular, implementar, conducir y evaluar la efectividad de la dirección y gestión del personal. </li>
		<li>Maximizar el aporte y participación del ingeniero industrial en el proceso de desarrollo del potencial humano laboral de las empresas e instituciones.</li>
		
	</ul>

	<li><b>PLAN DE ESTUDIOS</b></li><br></br>
	<li style="color:#37c0fb"><b>PRIMER CICLO</b></li>
	<ul>
		<li>Políticas y estrategias empresariales</li>
		<li>Doctrinas y praxis de las relaciones industriales</li>
		<li>Metodología de la investigación socio – laboral</li>
		<li>Gestión de la productividad</li>
	</ul>

	<li style="color:#37c0fb"><b>SEGUNDO CICLO</b></li>
	<ul>
		<li>Dirección y gestión de personal</li>
		<li>Productividad administrativa y laboral</li>
		<li>Economía del trabajo y remuneración</li>
		<li>Estadística socio – laboral</li>
	</ul>

	<li style="color:#37c0fb"><b>TERCER CICLO</b></li>
	<ul>
		<li>Análisis de sistemas de relaciones de trabajo</li>
		<li>Administración pública de trabajo</li>
		<li>Convenios OIT</li>
		<li>Administración de seguridad social</li>
		<li>Procedimientos laborales</li>
	</ul>

	<li style="color:#37c0fb"><b>CUARTO CICLO</b></li>
	<ul>
		<li>Análisis de sistemas de relaciones de trabajo II</li>
		<li>Seguridad, higiene y medicina ocupacional</li>
		<li>Políticas y estrategias de relaciones industriales</li>
		<li>Análisis de la dinámica del trabajo</li>
		<li>Informática socio – laboral</li>
	</ul>
</ul>
<p align="right"><a href="#arriba">subir</a></p>
	</section>

	<?php
		FooterWeb(); //Llama a la funcion para generar el de todo el footer
	?>
	</body>
</html>