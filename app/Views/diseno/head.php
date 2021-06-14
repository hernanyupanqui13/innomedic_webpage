<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<meta name="title" content="Innomedic.pe - Bienvenidos a la clinica  Innomedic International">
    <meta http-equiv="Content-Type" content="text/html; ISO-8859-1">
    <meta name="description" content="En la clínica innomedic international nos dedicamos a ofrecer servicios en la gestión de salud ocupacional.">
    <link rel="canonical" href="https://www.innomedic.pe/">
    <link rel="alternate" hreflang="es" href="https://www.innomedic.pe/">
		<link rel="shortcut icon" href="<?php echo base_url().'/public/';?>assets/images/favicon.ico?v=<?php echo rand();?>">
    <meta name="keywords" content="innomedic international, innomedic, clínica innomedic, salud ocupacional lima, medicina ocupacional, examenes medicos ocupacionales lima, salud ocupacional digesa, ocupacional la victoria">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="Spanish">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="Area de Sistemas Innomedic">
    <meta http-equiv="pragma" content="cache" />
    <meta http-equiv="content-type" content="text/html;UTF-8">
    <meta name="url" content="https://www.innomedic.pe/">
    <meta name="identifier-URL" content="https://www.innomedic.pe/">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Expires" content="0" />
    <meta http-equiv="content-language" content="es">
    <meta property="og:title" content="Innomedic.pe"/>
    <meta property="og:description" content="En la clínica innomedic international nos dedicamos a ofrecer servicios en la gestión de salud ocupacional.">
    <meta property="og:type" content="Salud Ocupacional Innomedic International" />
    <meta property="og:url" content="https://www.innomedic.pe/" />
    <meta property="og:image" content="<?php echo base_url().'/public/assets/';?>images/innomedic.png?v=<?php echo rand();?>" /> 
    <meta name="og:title" content="Innomedic.pe">
    <meta name="og:country-name" content="PE" />
    <meta name="og:site_name" content="InnomedicPE"/>
    <meta name="og:description" content="En la clínica innomedic international nos dedicamos a ofrecer servicios en la gestión de salud ocupacional."/>
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 2022 1:00:00 GMT" />
    <meta charset="iso-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

	<title><?php echo $title[0];?></title>
    
	<!-- Stylesheets -->
	<link href="<?php echo base_url().'/public/';?>assets/vendor/slick/slick.css" rel="stylesheet">
	<link href="<?php echo base_url().'/public/';?>assets/vendor/animate/animate.min.css" rel="stylesheet">
	<link href="<?php echo base_url().'/public/';?>assets/icons/style.css?v=<?php echo rand();?>" rel="stylesheet">
	<link href="<?php echo base_url().'/public/';?>assets/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css" rel="stylesheet">
	<link href="<?php echo base_url().'/public/';?>assets/css/style-color-5.css?v=<?php echo rand(); ?>" rel="stylesheet">
    <link href="<?php echo base_url().'/public/';?>assets/css/style_.css?v=<?php echo rand(); ?>" rel="stylesheet">
	<link href="<?php echo base_url().'/public/';?>assets/color/color.css" rel="stylesheet">

	<!--Favicon-->
	<link rel="icon" href="<?php echo base_url().'/public/';?>assets/images/favicon.ico?v=<?php echo rand();?>" type="image/x-icon">
	<script src="https://kit.fontawesome.com/dc5ae8b9ac.js" crossorigin="anonymous"></script>
	<!-- Google Fonts -->

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
	
	<!-- Google map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiFdr5Z0WRIXKUOqoRRvzRQ5SkzhkUVjk"></script>

	<link href="<?php echo base_url().'/public/';?>css/evaristo.css?v=<?php echo rand();?>" rel="stylesheet">


</head>

<?php
$request = \Config\Services::request(); 
// Funcion para ejecutar las lista de la pagina web 
foreach ($list_employe as $xx) {
	$emailx = $xx->email;
	$adress1 = $xx->name;
	$adress2 = $xx->address_one;
	$telephone = $xx->telephone;
	$phone_one = $xx->phone_one;
} ?>



<body class="shop-page layout-landing">


<!-- Barra de ajustes--><!--
<div class="settings-panel">
	<div class="settings-panel-buy-now">
		<a href="#" data-toggle="modal" data-target="#modalBookingForm" class="settings-panel-btn btn-primary">
			<img src="<?php echo base_url('public/assets/color/icon-settings.png')?>?v=<?php echo rand();?>" alt=""> Contacto
		</a>
	</div>
	<div class="settings-panel-colorswatch js-settings-panel-item">
		<div class="settings-panel-btn btn-primary js-settings-panel-btn">
			<img src="<?php echo base_url('public/assets/color/contacto.png')?>?v=<?php echo rand();?>" alt="">
		</div>
		<div class="settings-panel-inside">
			<a href="#" class="colorswatch1 active js-swatch-color"></a>
			<a href="#" class="colorswatch2 js-swatch-color" data-color="1"></a>
			<a href="#" class="colorswatch3 js-swatch-color" data-color="2"></a>
			<a href="#" class="colorswatch4 js-swatch-color" data-color="3"></a>
			<a href="#" class="colorswatch5 js-swatch-color" data-color="4"></a>
			<a href="#" class="colorswatch6 js-swatch-color" data-color="5"></a>
			<div class="clearfix"></div>
			<div class="title">Accesibilidad</div>
		</div>
	</div>
</div>-->





<!-- Header -->
<header class="header">
	<div class="header-quickLinks js-header-quickLinks d-lg-none">
		<div class="quickLinks-top js-quickLinks-top"></div>
		<div class="js-quickLinks-wrap-m">
		</div>
	</div>
	<div class="header-topline d-none d-lg-flex">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-auto col-sm-12 d-flex align-items-center">

					<div class="header-phone">
						<i class="icon-telephone"></i>
						<a href="tel:<?php echo esc($telephone); ?>"><?php echo esc($telephone); ?> </a>
						<a href="tel:<?php echo esc($phone_one);?>">&nbsp; - &nbsp;<?php echo esc($phone_one); ?></a>
						<a href="tel:(+51) 986 007 946">&nbsp; - &nbsp;(+51) 986 007 946</a>
					</div>
					<div class="header-info">
						<i class="icon-black-envelope"></i>
						<a href="mailto:ventasn@innomedic.pe"><?= esc($emailx); ?></a> / 
						<a href="mailto:ventas.in@innomedic.pe">ventas.in@innomedic.pe</a> /
						<a href="mailto:ventas.inno0@innomedic.pe">ventas.inno@innomedic.pe</a>
					</div>
				</div>
				<div class="col-auto ml-auto d-flex align-items-center">
					<div class="like_button_container"><a href="javascript:void(0)" title="Me gusta"><i class="fas fa-thumbs-up like_button-active" id="like_button"></i></a></div>
					<span class="header-social">
						<a target="_blank" href="https://es-la.facebook.com/InnomedicInternational/" class="hovicon"><i class="icon-facebook-logo-circle"></i></a>
						<!--<a target="_blank" href="https://twitter.com/Innomedic_Peru" class="hovicon"><i class="icon-twitter-logo-circle"></i></a>-->
						<a target="_blank" href="https://www.instagram.com/innomedic_salud/" class="hovicon"><i class="icon-instagram-circle"></i></a>
						<a target="_blank" href="https://www.linkedin.com/in/innomedic-international-300125ba/" class="hovicon"><i  class="icon-linkedin"></i></a>
						<a href="http://intranet.innomedic.pe/" target="_blank"  class="hovicon" data-toggle="tooltip" data-placement="bottom" title="Ingresar al Sistema"><i  class="icon-user"></i></a>
					</span>
				</div>
			</div>
		</div>
	</div>
	<div class="header-content">
		<div class="container">
			<div class="row align-items-lg-center">
				<button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarNavDropdown">
					<span class="icon-menu"></span>
				</button>
				<div class="col-lg-auto col-lg-2 d-flex align-items-lg-center">
					<a href="<?php echo base_url();?>" class="header-logo"><img src="<?php echo base_url('public/assets/images/logo.png')?>?v=<?php echo rand();?>" alt="" class="img-fluid"></a>
				</div>
				<div class="col-lg ml-auto header-nav-wrap">
					<div class="header-nav js-header-nav">
						<nav class="navbar navbar-expand-lg btco-hover-menu">
							<div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
								<ul class="navbar-nav">
									<li class="nav-item">
										<a class="nav-link link-inside" href="#aboutSection">Nosotros</a>
									</li>
									<li class="nav-item">
										<a class="nav-link link-inside" href="#departmentsSection">Especialidades</a>
									</li>
									<li class="nav-item">
										<a class="nav-link link-inside" href="#servicesSection">Servicios</a>
									</li>
									<li class="nav-item">
										<a class="nav-link link-inside" href="#faqSection">Preguntas</a>
									</li>
									<li class="nav-item">
										<a class="nav-link link-inside" href="#specialistsSection">Especialistas</a>
									</li>
									<!--<li class="nav-item">
										<a class="nav-link link-inside" href="#eventsSection">Eventos</a>
									</li>-->
									<!--<li class="nav-item">
										<a class="nav-link link-inside" href="#contactSection">Contacto</a>
									</li>-->
									<li class="nav-item dropdown">
										<a href="javascript:void(0);" class="nav-link dropdown-toggle" data-toggle="dropdown">En línea</a>
										<ul class="dropdown-menu">
											<li><a target="_blank" class="dropdown-item" href="http://200.4.213.137:8021/">Resultados</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</nav>
					</div>
					<div class="header-search">
						<form action="javascript:vodi(0)" class="form-inline" method="post">
							<i class="icon-search"></i>
							<input type="text" placeholder="Buscar" id="data" value="">
							<button type="button" onclick="return mensaje();"><i class="icon-search"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>




<script>

	/* 
	Esta funcion envia se ejecuta en el cliente. Recibe la informacion del la barra de busqueda y la envia al servidor donde solicita los resultados.
	Los resultados reenviados al cliente en una nueva direccion URL
	*/
	function mensaje() {


		var data = $('#data').val();

		if (data == "" ) {
			Swal.fire({
			  title: '<strong>Buscar en  <u><a href="http://www.innomedic.pe" title="">Innomedic.pe</a></u></strong>',
			  icon: 'info',
			  html: `<div class="item">
			  	<p>El campo de busqueda esta vacio</p>
			  </div>`,
			  showCloseButton: true,
			  showCancelButton: true,
			  focusConfirm: false,
			  allowOutsideClick: false,
			  confirmButtonText:
			    '<i class="fa fa-thumbs-up"></i> Ok.',
			  confirmButtonAriaLabel: 'Thumbs up, great!',
			  cancelButtonText:
			    '<i class="fa fa-thumbs-down"></i>',
			  cancelButtonAriaLabel: 'Thumbs down'
			}).then((result) => {
			  if (result.value) {
			    
			  }
		})

		} else {
			Swal.fire({
			  title: '<strong>Muy <u>bien.</u></strong>',
			  icon: 'success',
			  html: `<div class="item">
			  	<p>Los resultados de :  <b>`+data+`</b> se encontrarón en el motor de la busqueda</p>
			  </div>`,
			  showCloseButton: true,
			  showCancelButton: true,
			  focusConfirm: false,
			  allowOutsideClick: false,
			  confirmButtonText:
			    '<i class="fa fa-thumbs-up"></i> Click aqui!',
			  confirmButtonAriaLabel: 'Thumbs up, Click aqui!',
			  cancelButtonText:
			    '<i class="fa fa-thumbs-down"></i>',
			  cancelButtonAriaLabel: 'Thumbs down'
			}).then((result) => {

				if (result.value) {
				window.location = "<?php echo base_url('Inicio/Resultados/')?>?q="+data;
				
				}
			})

		}
		
	}
</script>







