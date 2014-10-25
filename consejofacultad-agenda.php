<!DOCTYPE html>
<html lang="en">
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
		elseif (($archivoActual == 'consejo-facultad.php') or ($archivoActual == 'consejofacultad-agenda.php')){
			# code...
			headerWebConsejo();
		}
		elseif ($archivoActual == 'biblioteca.php'){
			# code...
			headerWebBiblioteca();
		}
		elseif (($archivoActual == 'pregrado-epii.php') or ($archivoActual == 'pregrado-epis.php') or ($archivoActual == 'pregrado-epii-perfil.php')or ($archivoActual == 'pregrado-epis-perfil.php') or ($archivoActual == 'pregrado-epis-plan.php')or ($archivoActual == 'pregrado-epii-plan.php')) {
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
	
	<!-- Main -->
			<section class="wrapper style1">
				<div class="container">
					<div class="row double">
						<div class="3u">
							<div id="sidebar1">

								<!-- Sidebar 1 -->
							
									<section>
										<h3>Just a Subheading</h3>
										<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus. 
										Praesent semper mod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat. 
										Aliquam luctus et mattis lectus sit amet pulvinar. Nam turpis et nisi etiam.</p>
										<footer>
											<a href="#" class="button">Continue Reading</a>
										</footer>
									</section>

									<section>
										<h3>Another Subheading</h3>
										<ul class="links">
											<li><a href="#">Amet turpis, feugiat sit amet</a></li>
											<li><a href="#">Ornare in hendrerit lectus</a></li>
											<li><a href="#">Semper mod quis eget dolore</a></li>
											<li><a href="#">Consequat lorem phasellus</a></li>
											<li><a href="#">Amet turpis feugiat amet</a></li>
											<li><a href="#">Semper mod quisturpis nisi</a></li>
										</ul>
										<footer>
											<a href="#" class="button">More Random Links</a>
										</footer>
									</section>
						
							</div>
						</div>
						<div class="6u skel-cell-important">
							<div id="content">

								<!-- Content -->
							
									<article>
										<header>
											<h2>Agenda de Consejo de Facultad</h2>
											
										</header>
										
										<span class="image featured"><img src="images/banner.jpg" alt="" /></span>
										
										<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus. 
										Praesent semper mod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat. 
										Aliquam luctus et mattis lectus sit amet pulvinar. Nam turpis nisi 
										consequat etiam lorem ipsum dolor sit amet nullam.</p>
										
										<h3>And Yet Another Subheading</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac quam risus, at tempus 
										justo. Sed dictum rutrum massa eu volutpat. Quisque vitae hendrerit sem. Pellentesque lorem felis, 
										ultricies a bibendum id, bibendum sit amet nisl. Mauris et lorem quam. Maecenas rutrum imperdiet 
										rhoncus dui quis euismod. Maecenas lorem tellus, congue et condimentum ac, ullamcorper non sapien. 
										Donec sagittis massa et leo semper a scelerisque metus faucibus. Morbi congue mattis mi. 
										Phasellus sed nisl vitae risus tristique volutpat. Cras rutrum commodo luctus.</p>

										<p>Phasellus odio risus, faucibus et viverra vitae, eleifend ac purus. Praesent mattis, enim 
										quis hendrerit porttitor, sapien tortor viverra magna, sit amet rhoncus nisl lacus nec arcu. 
										Maecenas tortor mauris, consectetur pellentesque dapibus eget, tincidunt vitae arcu. 
										Vestibulum purus augue, tincidunt sit amet iaculis id, porta eu purus.</p>
									</article>
						
							</div>
						</div>
						<div class="3u">
							<div id="sidebar2">

								<!-- Sidebar 2 -->

									<section>
										<h3>Another Subheading</h3>
										<ul class="links">
											<li><a href="#">Amet turpis, feugiat sit amet</a></li>
											<li><a href="#">Ornare in hendrerit lectus</a></li>
											<li><a href="#">Semper mod quis eget dolore</a></li>
											<li><a href="#">Consequat lorem phasellus</a></li>
											<li><a href="#">Amet turpis feugiat amet</a></li>
											<li><a href="#">Semper mod quisturpis nisi</a></li>
										</ul>
										<footer>
											<a href="#" class="button">More Random Links</a>
										</footer>
									</section>
													
									<section>
										<h3>Just a Subheading</h3>
										<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus. 
										Praesent semper mod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat. 
										Aliquam luctus et mattis lectus sit amet pulvinar. Nam turpis et nisi etiam.</p>
										<footer>
											<a href="#" class="button">Continue Reading</a>
										</footer>
									</section>

							</div>
						</div>
					</div>
				</div>
			</section>
	<?php
		FooterWeb(); //Llama a la funcion para generar el de todo el footer
	?>
</body>
</html>