<?php 
$db = \Config\Database::connect();

foreach ($list_employe as $datas) {
	$namex = $datas->name;
	$emailx = $datas->email;
	$addressx = $datas->address;
	$telephonex  = $datas->telephone;
	$phone_onex = $datas->phone_one;
	$sms_mailx = $datas->sms_mail;
	$facebookx = $datas->facebook;
	$twiterx = $datas->twiter;
	$googlex = $datas->google;
	$instagramx = $datas->instagram; 
	$addressx = $datas->address;
	$address_onex = $datas->address_one;
	$logox = $datas->logo;
	$aboutx = $datas->about;
	$viewsx = $datas->views;
}
?>	  



<div class="page-content">

	<!-- Seccion Slider -->
	<section class="section mt-0">
		<!-- Links Rapidos -->
		<div class="quickLinks-wrap js-quickLinks-wrap-d d-none d-lg-flex">
			<div class="quickLinks js-quickLinks closed">
				<div class="container">
					<div class="row no-gutters">
						<!-- Ubicacion -->
						<div class="col">
							<a href="#" class="link">
								<i class="icon-placeholder"></i><span>Ubicación</span></a>
							<div class="link-drop p-0">
								<div id="googleMapDrop" class="google-map"></div>
							</div>
						</div>
						<!-- Tiempo de Trabajo -->
						<div class="col">
							<a href="#" class="link">
								<i class="icon-clock"></i><span>Tiempo de Trabajo</span>
							</a>
							<div class="link-drop">
								<h5 class="link-drop-title"><i class="icon-clock"></i>Tiempo de trabajo</h5>
								
								<table class="row-table">

	 								<!-- to review-->
									<?php foreach ($time_table as $item) {?>

									<tr>
										<td><?php echo $item->dia;?></td>
										<td><?php echo $item->hours;?></td>
									</tr>

									<?php } ?>
								</table>
							</div>
						</div>
						<!-- Contacto -->
						<div class="col">
							<a href="#" class="link">
								<i class="icon-pencil-writing"></i><span>Contacto</span>
							</a>
							<div class="link-drop">
								<h5 class="link-drop-title"><i class="icon-pencil-writing"></i>Recibe una atencion personalizada</h5>
								<p>Nuestro compromiso es ofrecer el mejor servicio al cliente, garantizando: trato amable, ambientes agradables, altísimos tiempos de respuesta, atención personalizada, equipamiento de última generación, historia clínica digital, plataforma online del cliente y diversos recursos tecnológicos que harán de sus servicios con nosotros una experiencia satisfactoria.</p>
								<p class="text-right mt-2"><a  href="#" data-toggle="modal" data-target="#modalBookingForm" class="btn btn-sm btn-hover-fill link-inside">Ponte en contacto</a></p>
								<!--<p class="text-right mt-2"><a  href="#" class="btn btn-sm btn-hover-fill link-inside">Ponte en contacto</a></p>-->
							</div>
						</div>
						<!-- Comunicate con nosotros -->
						<div class="col">
							<a href="#" class="link">
								<i class="icon-emergency-call"></i><span>Comunicate con nosotros</span></a>
							<div class="link-drop">
								<h5 class="link-drop-title"><i class="icon-emergency-call"></i>Comunicate con nosotros</h5>
									<p>Es posible que necesite una atención de uno de nuestros asesores</p>
								<ul class="icn-list">

									<li>
										<i class="icon-telephone"></i>
										<span class="phone">
											<a href="tel:<?php echo $telephonex;?>"><?php echo $telephonex;?></a><br>
											<a href="tel:<?php echo $phone_onex; ?>"><?php echo $phone_onex;?></a><br>
											<a href="tel:(+51) 986 007 946">(+51) 986 007 946</a><br>
										</span>
									</li>
									<li>
										<i class="icon-black-envelope"></i>
										<a href="mailto:<?php echo $emailx;?>"><?php echo $emailx; ?></a><br>
										<a href="mailto:ventas.in@innomedic.pe"><?php echo "ventas.in@innomedic.pe" ?></a>
										<a href="mailto:ventas.inno@innomedic.pe">ventas.inno@innomedic.pe</a>
									</li>
								</ul>
								<p class="text-right mt-2"><a href="javascript:void(0)" data-toggle="modal" data-target="#modalBookingForm" class="btn btn-sm btn-hover-fill link-inside">Ponte en contacto</a></p>
							</div>
						</div>

						<div class="col col-close"><a href="#" class="js-quickLinks-close"><i class="icon-top" data-toggle="tooltip" data-placement="top" title="Close panel"></i></a></div>
					</div>
				</div>
				<div class="quickLinks-open js-quickLinks-open"><span data-toggle="tooltip" data-placement="left" title="Open panel">+</span></div>
			</div>
		</div>

		<!-- Slides -->
		<div id="mainSliderWrapper">
			<div class="loading-content">
				<div class="inner-circles-loader"></div>
			</div>
			<div class="main-slider mb-0 arrows-white arrows-bottom" id="mainSlider" data-slick='{"arrows": false, "dots": true}'>

				<?php foreach ($news_slider as $slide_item) {?>

				<div class="slide">
					<div class="img--holder" data-bg="<?= esc(base_url('public/assets/images/content/slider/'.$slide_item->img));?>"></div>
					<div class="slide-content center">
						<div class="vert-wrap container">
							<div class="vert">
								<div class="container">
									<div class="slide-txt1 text-right" data-animation="fadeInDown" data-animation-delay="1s"><!--Quality Healthcare.<br>-->
										<b><?= $slide_item->title;?></b></div>
									<div style="margin-left: 270px;" class="slide-txt2 text-right" data-animation="fadeInUp" data-animation-delay="1.5s"><?= esc($slide_item->description) ?></div>
									<div class="slide-btn text-right"><a href="<?php echo $slide_item->url; ?>" class="btn link-inside" data-animation="fadeInUp" data-animation-delay="2s"><i class="icon-right-arrow"></i><span><?= esc($slide_item->btn);?></span><i class="icon-right-arrow"></i></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<?php } ?>
			</div>
		</div>
	</section>


	<!-- Seccion Nuestros Planes -->
	<section id="paquetes_preventivos_view" style="background-image: url('<?= esc(base_url('public/assets/images/content/slider/testimonials-1-shape-4.png'))?>'); background-repeat: no-repeat; background-size: cover;">
		<div class="container  p-3">
			<div class="block-title text-center">
				<div class="h-sub theme-color">Elija nuestro precio</div>
				<h2 data-title="¡Nuestros Planes!"><span>Nuestros planes  <br class="d-lg-none">  <span class="theme-color">y precios</span></span></h2>
				
				<span>Es importante realizar chequeos preventivos para detectar a tiempo enfermedades y posibles factores de riesgo. <br>
				En Innomedic, cuidamos la integridad de tu salud. 👨‍👩‍👦</span>
			</div>
		
			<!-- Contenido dinamico -->
			<div class="tabed-content">
				<div id="month">
					<div class="row dinamic-content">
						<?php 
							$paquetes = $db->query("SELECT * FROM t_paquetes WHERE mostrar = 1 ORDER BY `number`");
							foreach ($paquetes->getResult() as $xx) { ?>
								<?php if ($xx->number=="02") {
									$btn_danger ="";
								} else {
									$btn_danger ="";
								} ?>
								<div class="col-xl-4 col-lg-4 animated fadeInLeft paquete_item" >
								<div class="pricing-one__single" style="<?php echo $btn_danger; ?>">
									<div class="circle">
										<div class="count">
											<h4><?php echo $xx->number; ?></h4>
										</div>
									</div>
									<div class="price">
										<h2 class="h2"><?php echo $xx->price; ?></h2>
										<p class="font-weight-bold theme-color"><?php echo $xx->title; ?></p>
									</div>
									<hr>
									<ul class="list-unstyled pricing-one__list">
										<?php echo $xx->text; ?>
									</ul>
									<!-- Boton de paquetes -->
									<a href="<?php echo $xx->url; ?>" onclick="return mostrarPaquetes('<?php echo $xx->Id; ?>')" class="thm-btn pricing-one__btn"><span><?php echo $xx->btn; ?></span></a>
								</div>
								</div>
							<?php }
						?>
						
						
					</div>
				</div>
			</div>
		</div>
	</section>






	<!-- Seccion Informes Aqui | View-->
	<!--<section class="section" id="contactSection">
		<div class="banner-contact-us" style="background-image: url('<?= esc(base_url('public/assets/images/content/contact-bg.png')) ?>?v=<?= rand();?>')">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-sm-6 col-lg-6 order-2 order-sm-1 mt-3 mt-md-0 text-center text-md-right d-flex align-items-end">
						<img src="<?= esc(base_url('public/assets/images/content/banner-callus.png'));?>?v=<?= rand();?>" alt="" class="shift-left">
					</div>
					<div class="col-sm-6 col-lg-6 order-1 order-sm-2 d-flex">
						<div class="pt-2 pt-lg-6">
							<h2 data-title="¡Informes aquí!"><span>¡INFORMES <br class="d-lg-none">  <span class="theme-color">AQUÍ!</span></span></h2>
							<p>Nuestro equipo se contactará inmediatamente contigo. Cuidamos de ti, de tu equipo y empresa</p>
							
							<!-- Inicio del formulario --
							<form class="contact-form" id="contactForm" method="post" novalidate="novalidate">
								<div class="successform">
									<p>¡Su mensaje fue enviado exitosamente!</p>
								</div>
								<div class="errorform">
									<p>Algo salió mal, intente actualizar y enviar el formulario nuevamente.</p>
								</div>
								<!-- Nombre --
								<div>
									<input type="text" class="form-control" name="name" placeholder="Nombre">
								</div>
								<div class="row row-sm-space mt-15">
									<!-- Celular --
								<div class="col-sm-6"><input type="text" class="form-control" name="phone" placeholder="Celular"></div>
									<!--Email--
								<div class="col-sm-6 mt-15 mt-sm-0"><input type="text" class="form-control" name="email" placeholder="Email"></div>
								</div>

								<!-- Buscador de RUC --
								<div class="row row-sm-space mt-15"> 
									<div class="col-sm-8">
										<input type="text" class="form-control" name="nruc" id="nruc" placeholder="Ingrese Ruc y de click en 'Buscar'" maxlength="11" pattern="([0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]|[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9])" onkeydown="return soloNumeros(event)">
									</div>
									<div class="col-sm-4">
				                    	<button type="submit" class="btn btn-outline-success btn-rounded btn-sm" name="btn-submit" id="btn-submit">
											<span id="id_hidde_x"><i  class="fa fa-search"></i> Buscar</span>
											<div id="agregar_clase_x" class=""></span>
				                   		</button>
									</div>
								</div>
								<!-- Empresa y RUC - View Only --
								<div class="row row-sm-space mt-15">
									<div class="col-sm-6 mt-15 mt-sm-0"><input type="text" class="form-control" name="usuario" id="usuario" placeholder="Empresa" readonly=""></div>
									<div class="col-sm-6 mt-15 mt-sm-0"><input type="text" class="form-control" name="identification_number" id="rucx" placeholder="Ruc" readonly=""></div>
								</div>
								<!-- Mensaje --
								<div class="mt-15">
									<textarea class="form-control" name="message" placeholder="Message"></textarea>
								</div>
								<!-- Cotizar ahora - Boton --
								<div class="mt-2 mt-lg-4 text-center text-md-left">
									<button type="submit" class="btn"><i class="icon-right-arrow"></i><span>Cotizar Ahora</span><i class="icon-right-arrow"></i></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>-->






	<!-- Seccion Calidad de Servicios -->
	<section class="section mt-0 shadow-bot pt-2 pb-0 py-sm-4 mb-2">
		<div class="container">
			<div class="row js-icn-text-alt-carousel">
				<?php foreach ($lista_servicios as $xx) {?>
					<div class="col-md-6 col-lg-4 col-xl-4">
						<div class="icn-text-alt">
							<div class="icn-text-alt-icn"><i class="<?php echo esc($xx->icon);?>"></i></div>
							<div>
								<h4 class="icn-text-alt-title"><?= esc($xx->title);?></h4>
								<p><?= esc($xx->description);?></p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section> 


	<!-- Sección - Acerca de nosotros -->
	<section class="section" id="aboutSection" >
		<div class="container pt-lg-2">
			<div class="row mt-2 mt-md-3 mt-lg-0">
				<!-- Texto -->
				<div class="col-md-6">
					<div class="title-wrap text-center text-md-left">
						<div class="h-sub"><?= esc($static_one->subtitle);?></div>
						<h2 class="h1">Bienvenido <span class="theme-color"><?=	esc($static_one->title);?></span></h2>
					</div>
					<div class="pr-xl-1">
						<p><?= $static_one->description;?></p>
					</div>
					<div class="text-center text-md-left mt-2 mt-md-3">
						<!--<a href="#" class="btn-link" data-toggle="modal" data-target="#modalBookingForm">Ver mas sobre nosotros<i class="icon-right-arrow"></i></a>-->
						<a href="javascript:void(0);" class="btn-link">Ver mas sobre nosotros<i class="icon-right-arrow"></i></a>
					</div>
				</div>
				<!-- Video -->
				<div class="col-md-6 mt-4 mt-md-0">
					<!-- Static -->
					<div class="video-box">
						<div class="video-box-poster">
							<img src="<?= esc(base_url('public/assets/images/content/video-poster.jpg')) ?>?v=<?php echo time();?>" alt="" class="img-fluid">
						</div>
						<a href="#" class="video-btn js-video-btn" data-toggle="modal" data-src="https://player.vimeo.com/video/266811190" data-target="#videoModal">
							<span>Ver video</span>
							<span><i class="icon-play"></i></span>
						</a>
						<div class="video-box-bg"><img src="images/content/video-poster-bg.png" alt=""></div>
					</div>

					<!-- Modal -->
					<div class="modal fade" id="videoModal">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-body">
									<div class="embed-responsive embed-responsive-16by9">
										<iframe class="embed-responsive-item video" src="" allowscriptaccess="always" allow="autoplay"></iframe>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>






	<!--Sección - Nuestras especialidades-->
	<section class="section" id="departmentsSection" >
		<div class="container">
			<div class="title-wrap text-center">
				<h2 class="h1">Nuestras Especialidades</h2>
				<div class="h-decor"></div>
			</div>
			<p class="text-center max-500">Innomedic International se especializa en diferentes servicios médicos.</p>
			<div class="row mt-lg-4">
				<div class="col-lg-8 col-xl-9">
					<div class="department-tabs js-department-tabs d-none d-sm-flex">
						

						<?php foreach ($lista_consultorios as $consultorio) {?>
							<?php if ($consultorio->orden_visualizacion == 1) {
								$state = "active";
								} else {
									$state = "";
								} ?>
							<div class="department-tab <?= esc($state);?>">
								<div class="department-tab-icon"><i class="<?= esc($consultorio->icon);?>"></i></div>
								<div class="department-tab-text"><?= esc($consultorio->name);?></div>
							</div>
						<?php } ?>
						
					</div>
				</div>
				<div class="col-lg-4 col-xl-3">
					<div class="department-carousel js-department-carousel">
						<?php foreach ($lista_consultorios as $consultorio) {?>

							<div class="department-item">
								<h3 data-title="<?= esc($consultorio->name);?>"><span><?= esc($consultorio->name);?></span></h3>
								<div class="department-tab">
									<div class="department-tab-icon"><i class="<?= esc($consultorio->icon);?>"></i></div>
									<div class="department-tab-text"><?= esc($consultorio->name);?></div>
								</div>
								<p><?= $consultorio->description;?></p>
							</div>

						<?php } ?>
						
					</div>
				</div>
			</div>
		</div>
	</section>

	




	<!-- Nuestras areas -->
	<section class="section" >
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="title-wrap">
						<h2 class="h1" style="font-size: 2.5em;">Nuestras <span class="theme-color">Áreas</span></h2>
						<div class="h-decor"></div>
					</div>
					<div class="mt-4"></div>
					<div class="mt-lg-4"></div>
					<ul class="marker-list-md">
						<?php
						foreach ($consultoriasname as $area) {?>
							<li><?php echo $area->name;?></li>
						<?php } ?>
					</ul>
				</div>
				<div class="col-lg-8 mt-4 mt-lg-0">
					<div class="slider-gallery">

						<!-- Obteniendo las imagenes de la base de datos -->
						<ul class="slider-gallery-main list-unstyled js-slider-gallery-main">
							<?php
							foreach ($consultoriasname as $area) {?>
								<li><img src="<?php echo base_url().'/public/assets/';?>images/content/<?php echo $area->img;?>" alt="Area Img Large"></li>
							<?php } ?>
						</ul>
						<ul class="slider-gallery-thumbs list-unstyled js-slider-gallery-thumbs">
							<?php $query = $db->query("select * from  t_consultorias order by Id asc");
							foreach ($consultoriasname as $area) {?>
								<li><img src="<?php echo base_url().'/public/assets/';?>images/content/<?php echo $area->img_small;?>" alt="Area Img Small"></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>




	

	<!-- Sección ¿Por que elegirnos? -->
	<section class="section" id="porQueElegirnos">
		<div class="container-fluid px-0 text-image-block">
			<div class="row no-gutters">
				<div class="col-md-6 image-col"><img src="<?php echo base_url('public/assets/images/content/why-choose-us.png');?>" alt="Medicos y Doctores"></div>
				<div class="col-md-6 text-col">
					<div class="title-wrap">
						<div class="h-sub theme-color">Ver la diferencia</div>
						<h2 class="h1" data-title="¿Por qué elegirnos?"><span>¿Por qué elegirnos?</span></h2>
					</div>
					<div class="mt-2 mt-lg-4"></div>
					<ul class="numbered-list-xl">
						<li data-num='01.'>
							<h5>Centrado en el paciente</h5>
							Si bien nuestro equipo aporta experiencia y conocimientos importantes, sabemos que cada paciente es el experto en su propia vida.
						</li>
						<li data-num='02.'>
							<h5>Exhaustivo</h5>
							Ofrecemos atención médica integral centrada en la persona completa, en todas las edades y etapas de la vida.
						</li>
						<li data-num='03.'>
							<h5>Horarios</h5>
							Tenemos horarios flexibles.
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>






	<!-- Seccion Nuestros Servicios -->
	<section class="section" id="servicesSection">
		<div class="container">
			<div class="title-wrap text-center">
				<h2 class="h1">Nuestros <span class="theme-color">Servicios</span></h2>
				<div class="h-decor"></div>
			</div>
			<div class="row js-service-card-style2-carousel">
				<?php foreach ($lista_t_view_service as $service) {?>
					<div class="col-md-6 col-lg-4">
						<div class="service-card-style2">
							<div class="service-card-icon">
								<i class="<?php echo esc($service->icon);?>"></i>
							</div>
							<h5 class="service-card-name"><?php echo esc($service->title);?></h5>
							<p><?php echo $service->desc;?></p>
						</div>
					</div>
				<?php } ?>	
			</div>
		</div>
	</section>






	<!-- Seccion Nuestras ventajas -->
	<section class="">
		<div class="container-fluid p-5">
			<div class="row no-gutters">
				<div class="col-sm-12 col-xl-7  ">
					<div class="max-670 mx-lg-auto px-15">
						<div class="title-wrap">
							<h2 class="h1">Nuestras  <span class="theme-color">ventajas</span></h2>
						</div>
						<div class="mt-lg-5"></div>
						<div class="row">
							<div class="col-sm-6">
								<ul class="marker-list-md">
									<?php
										foreach ($lista_ventajas_a as $ventaja_item) {?>
										<li><?php echo $ventaja_item->name;?></li>
									<?php } ?>
								</ul>
							</div>
							<div class="col-sm-6 mt-1 mt-sm-0">
								<ul class="marker-list-md">
									<?php
										foreach ($lista_ventajas_b as $ventaja_item) {?>
										<li><?php echo $ventaja_item->name;?></li>
									<?php } ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-xl-5  banner-left bg-full" 
					style="background-image: url(<?php  echo base_url().'/public/assets/images/content/banner-right.jpg'?>)">
				</div>
			</div>
		</div>
	</section>






	<!-- Seccion Preguntas -->
	<section class="section bg-grey py-0" id="faqSection">
		<div class="container-fluid px-0">
			<div class="row no-gutters">
				<div class="col-xl-6 order-2 order-xl-1">
					<div class="faq-wrap px-15 px-lg-8">
						<div class="title-wrap">
							<h2 class="h1">Preguntas más frecuentes</h2>
						</div>
						<div class="mt-2 mt-lg-4"></div>
						<?php
						$count =0;
						foreach ($lista_preguntas as $pregunta_item) {
							$count +=1;
								
							if ($pregunta_item->Id==1) {
								$state = "show";
							} else {
								$state = "";
							} ?>

							<div class="faq-item">
								<a data-toggle="collapse" data-parent="#faqAccordion1" href="#<?php echo $pregunta_item->identificador;?>" aria-expanded="true"><span><?php echo $count; ?>.</span><span><?php  echo $pregunta_item->title; ?></span></a>
								<div id="<?php 	echo $pregunta_item->identificador;?>" class="collapse <?php echo $state;?> faq-item-content" role="tabpanel">
									<div>
										<?php 
										if ($pregunta_item->description =="" or $pregunta_item->description==NULL) {?>
											<p>Estamos agregando la información.</p>
										<?php 
										} else { ?>
											<?php echo $pregunta_item->description;?>
										<?php 
										} ?>
									</div>
								</div>
							</div>
						<?php } ?>

						<!--<a href="#" class="btn mt-15 mt-sm-3" data-toggle="modal" data-target="#modalQuestionForm"><i class="icon-right-arrow"></i><span>Realizar Pregunta</span><i class="icon-right-arrow"></i></a>-->
					</div>
				</div>
				<div class="col-xl-6 banner-left bg-cover order-1 order-xl-2" style="background-image: url('<?php echo base_url('public/assets/images/content/banner-left.jpg');?>')"></div>
			</div>
		</div>
	</section>







	<!-- Seccion Nuestros Especialistas -->
	<section class="section" id="specialistsSection">
		<div class="container">
			<div class="title-wrap text-center">
				<div class="h-sub theme-color">Conocer al equipo</div>
				<h1>Nuestros especialistas</h1>
				<div class="h-decor"></div>
			</div>
			<p class="text-center max-600">Ofrecemos atención médica altamente especializada, de algunos de los principales especialistas nacionales en sus campos de medicina.</p>
			<form class="filterCarousel">
				<div class="selectWrapper input-group">
					<select class="form-control">
						<option value="all">Todos</option>
						<?php foreach ($lista_empleado as $empleado) {?>
							<option value=".<?php echo esc($empleado->categoria_);?>"><?php echo esc($empleado->categoria);?></option>
						<?php } ?>
						
					</select>
				</div>
			</form>
			<div class="row specialist-carousel js-specialist-carousel">
				<?php foreach ($lista_empleado_categoria as  $categoria_item) {?>
					<div class="col-sm-6 col-md-4 col-lg-3 <?php echo $categoria_item->categoria;?>" >
						<div class="doctor-box doctor-box-style2 text-center">
							<!--<div class="doctor-box-photo">-->
							<div class="doctor-box-photo">
								<div class="d-flex justify-content-center"><img src="<?php echo esc(base_url('public/assets/images/content/'.$categoria_item->image));?>" class="img-fluid img-responsive img-circle" alt="Img " style="width: 124px; height: 121px;"></div>
							</div>
							<div class="doctor-box-top">
								<h5 class="doctor-box-name"><?php echo esc($categoria_item->name);?></h5>
								<div class="doctor-box-position"><?php echo esc($categoria_item->description);?></div>
							</div>
							<div class="doctor-box-booking">
								<a href="javascript:void(0)" onclick="return validate('<?php echo $categoria_item->name;?>')">Ver mas<i class="icon-right-arrow"></i></a>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>






	<!-- Seccion Nuestros Clientes -->
	<section class="section bg-grey mt-0" id="testimonialsSection">
		<div class="container">
			<div class="title-wrap text-center text-md-left">
				<h2 class="h1 title-with-clone" data-title="Our Clients"><span>Nuestros <span class="theme-color">Clientes</span></span></h2>
			</div>
			
			<div class="row">
				<!-- Lista clientes -->
				<div class="col-md-9">
					<div class="row js-services-tabs-carousel">
						<?php foreach ($lista_empresas_clientes as $empresa) {?>

							<!-- Cliente - Item -->
							<div class="col-md-6 col-lg-4">
								<div class="service-card-style3">
									<div class="service-card-icon">
										<img src="<?php echo base_url('public/assets/images/content/'.$empresa->img);?>" alt="Logo Empresa">
									</div>
									<h5 class="service-card-name"><?= $empresa->name;?></h5>
									<p><?php echo $empresa->subtitle;?></p>
									<div class="mt-2 mt-md-4"></div>
									<a href="<?php echo $empresa->url;?>" target="_blank" class="btn-link" >Mas Información<i class="icon-right-arrow"></i></a>
								</div>
							</div>

						<?php } ?>
					</div>
				</div>
				
				<!-- Panel lado derecho -->
				<div class="col-md-3 service-info-carousel-wrap">
					<div class="service-info-carousel js-services-info">
						<?php

						$count =0;
			 			foreach ($lista_empresas_clientes as $empresa) {

			 				$count +=1;?>

							<div class="service-info">
								<div class="service-info-num"><span><?php echo $count; ?></span>/ <?php echo count($lista_empresas_clientes); ?></div>
								<p><?php echo $empresa->description;?></p>
							</div>

						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>






	<!-- Seccion Eventos Clínicos -->
	<section>
		<div class="section" id="eventsSection">
			<div class="container">
				<div class="title-wrap text-center">
					<h2 class="h1">Eventos Clínicos</h2>
					<div class="h-decor"></div>
				</div>
			</div>
		</div>
		<!-- esto continua siendo parte de eventos clinicos -->						
		<div class="section">
			<div class="container-fluid px-0">
				<div class="block-full-appointment bg-cover" style="background-image: url(<?php echo base_url('public/assets/images/content/online-appointment-bg.jpg');?>?v=<?php echo time();?>)">
					<div class="container">
						<div class="row">
							<div class="col-sm-6">
								<div class="box-progress">
									<div class="box-progress-number">150<sup>K</sup></div>
									<div class="box-progress-text"><h5>Servicios de alta gama</h5>
										<p>Durante más de 7 años, hemos deleitado a nuestros clientes y les brindamos los servicios necesarios.</p></div>
								</div>
								<div class="box-progress">
									<div class="box-progress-number">100<sup>%</sup></div>
									<div class="box-progress-text"><h5>Clientes felices</h5>
										<p>Absolutamente todos nuestros clientes están listos para asegurarle la alta calidad de nuestros servicios.</p></div>
								</div>
							</div>
							<div class="col-sm-6 mt-5 mt-md-0 text-center text-md-right">
								<h2 class="text1">¡Consigue lo que siempre <br>has deseado!</h2>
								<div class="text2">Ahora puede reservar citas en línea</div>
								<!--<a class="btn mt-2 mt-sm-3 mt-lg-4"><i class="icon-right-arrow"></i><span>Solicitar una cotización</span><i class="icon-right-arrow"></i></a>-->
								<a href="#" class="btn mt-2 mt-sm-3 mt-lg-4" data-toggle="modal" data-target="#modalBookingForm"><i class="icon-right-arrow"></i><span>Solicitar una cotización</span><i class="icon-right-arrow"></i></a>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
</div>