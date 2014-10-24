<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
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
			
					
		<!-- Posts -->
			
			<section class="requisitos">
				<h3 style="color:black"><b>REQUISITOS</b></h3>
				<ul>
					<li>- Carpeta de postulante (CTA.SCOTIABANK)</li>
					<li>- Recibo de pago de derecho de inscripción (CTA.SCOTIABANK)</li>
					<li>- Copia autentificada de grado académico de bachiller, si el grado 
						ha sido obtenido en el extranjero debe ser traducido oficialmente al 
						castellano y visado por el Consulado Peruano de país de procedencia y 
						por el Ministerio de Relaciones Exteriores del Perú</li>
					<li>- Curriculum vitae simple</li>
					<li>- Copia legalizada de DNI</li>

				</ul>
					

			</section>
		
			<section class="inversion">
				<h3 style="color:black" align="right"><b>INVERSIÓN</b></h3>

				<table>
					<tr><td colspan="2" align="right">CTA. CTE. SCOTIABANK 3747336</td></tr>
					<tr><td colspan="2" align="right"><b>MAESTRIAS</b></td></tr>
					<tr><td align="right">Carpeta	</td><td align="right">S/.25.00</td></tr>
					<tr><td align="right">Inscripción	</td><td align="right">S/.120.00</td></tr>
					<tr><td align="right">Matricula</td><td align="right">S/.200.00</td></tr>
					<tr><td align="right">Pensión</td><td align="right">S/.300.00</td></tr>
					<tr><td colspan="2" align="right"><b align="right">DIPLOMADO</b></td></tr>
					<tr><td align="right">Carpeta</td><td align="right">S/.40.00</td></tr>
					<tr><td align="right">Inscripción</td><td align="right">S/.40.00</td></tr>
				</table>
		
			</section>

			<section class="informes">
				<h3 style="color:black"><b>CONTACTACNOS</b></h3>
				<ul>
					<li>Facultad de ingeniería industrial y de sistemas
					Secretaria del decano FIIS (3er Piso)</li>
					<li>Telf.:429-9740 anexo 241</li>
					<li>Telefax: 469-0701 </li>
					<br>
					<li>Sección de Post Grado FIIS</li>
					<li>Av. Juan Pablo II N 306 Bellavista – Callao</li>
					<li>Pabellón FIIS (2do piso)</li>
					<li>Telf. : 465-6265 / 945-043-812</li>
					<li>E-mail: posgradofiis@unac.pe</li>

				</ul>
			</section>

		<!-- Footer -->
		<?php
		FooterWeb(); //Llama a la funcion para generar el de todo el footer
		?>
	</body>
</html>