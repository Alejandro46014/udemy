<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" />
  
	<link rel="stylesheet" href="css/main.css">
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	
	<?php
	$archivo=basename($_SERVER['PHP_SELF']);
	$pagina=str_replace(".php","",$archivo);
	
	if($pagina==='invitados' || $pagina==='index'){
		
		echo('<link rel="stylesheet" href="css/colorbox.css">');
	}elseif($pagina==='conferencias'){
		
		echo('<link rel="stylesheet" href="css/lightbox.css">');
	}
	?>
</head>

<body class="<?php echo($pagina); ?>">
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <header class="site-header">
	<div class="hero">
	  <div class="contenido-header">
		<nav class="redes-sociales">
		    <a href="#"><i class="fab fa-facebook-square" aria-hidden="true"></i></a>
			<a href="#"><i class=" fab fa-twitter-square" aria-hidden="true"></i></a>
			<a href="#"><i class="fab fa-pinterest-square" aria-hidden="true"></i></a>
			<a href="#"><i class="fab fa-youtube-square" aria-hidden="true"></i></a>
			<a href="#"><i class="fab fa-instagram-square" aria-hidden="true"></i></a>
			
		  </nav>
		  <div class="informacion-evento">
			  <div class="clearfix">
		  <p class="fecha"><i class="fas fa-calendar-alt"></i> 25-Jul-2018</p>
			  <p class="ciudad"><i class="fas fa-map-marker-alt"></i> Valencia, España</p>
		  </div>
		  <a href="index.php">
			  <h1 class="nombre-sitio">GDLWEBCAMP</h1>
			  </a>
		  <p class="slogan">La mejor conferencia de <span>diseño web</span></p>
		  </div><!--.INFORMACION-EVENTO-->
		  </div>
	  </div><!--.HERO-->
	</header>
	
	<div class="barra">
		<div class="contenedor clearfix">
	<div class="logo">
		<img src="img/logo.svg" alt="Logo">
		</div>
		<div class="menu-movil">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<nav class="navegacion-principal clearfix">
			<a href="conferencias.php">Conferencias</a>
			<a href="calendario.php">Calendario</a>
			<a href="invitados.php">Invitados</a>
			<a href="registro.php">Reservas</a>
		</nav>
	</div><!--.contenedor+clearfix-->
</div><!--.barra-->
