
<?php 
$db = \Config\Database::connect();

$query_ss = $db->query("select * from th_employe");
    foreach ($query_ss->getResult() as $datas) {
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
     } ?>	


<?php $gallery = $db->query("select * from t_gallery");
	foreach ($gallery->getResult() as $galy) {
     	$img_aboutx = $galy->img_about;
     	$img_about1x = $galy->img_about1;
     	$img_about2x = $galy->img_about2;
     	$img_aboutx3 = $galy->img_about3;
     	$img_aboutx4 = $galy->img_about4;
     } ?>

<h1 id="test_h"></h1>
<!--//header-->
<div class="page-content">
	<!--section slider-->
	<div class="section mt-0">
		<div class="quickLinks-wrap js-quickLinks-wrap-d d-none d-lg-flex">
			<div class="quickLinks js-quickLinks closed">
				<div class="container">
					<div class="row no-gutters">
						<div class="col">
							<a href="#" class="link">
								<i class="icon-placeholder"></i><span>Ubicación</span></a>
							<div class="link-drop p-0">
								<div id="googleMapDrop" class="google-map"></div>
							</div>
						</div>
						<div class="col">
							<a href="#" class="link">
								<i class="icon-clock"></i><span>Tiempo de Trabajo</span>
							</a>
							<div class="link-drop">
								<h5 class="link-drop-title"><i class="icon-clock"></i>Tiempo de trabajo</h5>
								
								<table class="row-table">

	 								<!--Por que usar una coneccion directa a la base de datos en el View
									 Porque no usar al Model para obteneer la informacion? Considerese para cambiarse usando la estructura MVC-->
									<?php
								   $time_jobs = $db->query("select * from t_time_job");
								 foreach ($time_jobs->getResult() as $xx) {?>
								<tr>
									<td><i><?php echo $xx->dia;?></i></td>
									<td><?php echo $xx->hours;?></td>
								</tr>
								<?php } ?>
								</table>
							</div>
						</div>
						<div class="col">
							<a href="#" class="link">
								<i class="icon-pencil-writing"></i><span>Contacto</span>
							</a>
							<div class="link-drop">
								
								<h5 class="link-drop-title"><i class="icon-pencil-writing"></i>Recibe una atencion personaizada</h5>
								<!--<form id="requestForm" method="post" novalidate>
									<div class="successform">
										<p>¡Su mensaje fue enviado exitosamente!</p>
									</div>
									<div class="errorform">
										<p>Algo salió mal, intente actualizar y enviar el formulario nuevamente.</p>
									</div>
									<div class="input-group">
											<span>
											<i class="icon-user"></i>
										</span>
										<input name="requestname" type="text" class="form-control" placeholder="Your Name"/>
									</div>
									<div class="row row-sm-space mt-1">
										<div class="col">
											<div class="input-group">
													<span>
													<i class="icon-email2"></i>
												</span>
												<input name="requestemail" type="text" class="form-control" placeholder="Your Email"/>
											</div>
										</div>
										<div class="col">
											<div class="input-group">
													<span>
													<i class="icon-smartphone"></i>
												</span>
												<input name="requestphone" type="text" class="form-control" placeholder="Your Phone"/>
											</div>
										</div>
									</div>
									<div class="selectWrapper input-group mt-1">
											<span>
											<i class="icon-tooth"></i>
										</span>
										<select name="requestservice" class="form-control">
											<option selected="selected" disabled="disabled">Select Service</option>
											<option value="Cosmetic Dentistry">Cosmetic Dentistry</option>
											<option value="General Dentistry">General Dentistry</option>
											<option value="Orthodontics">Orthodontics</option>
											<option value="Children`s Dentistry">Children`s Dentistry</option>
											<option value="Dental Implants">Dental Implants</option>
											<option value="Dental Emergency">Dental Emergency</option>
										</select>
									</div>
									<div class="row row-sm-space mt-1">
										<div class="col-sm-6">
											<div class="input-group flex-nowrap">
													<span>
														<i class="icon-calendar2"></i>
													</span>
												<div class="datepicker-wrap">
													<input name="requestdate" type="text" class="form-control datetimepicker" placeholder="Date" readonly>
												</div>
											</div>
										</div>
										<div class="col-sm-6 mt-1 mt-sm-0">
											<div class="input-group flex-nowrap">
													<span>
															<i class="icon-clock"></i>
													</span>
												<div class="datepicker-wrap">
													<input name="requesttime" type="text" class="form-control timepicker" placeholder="Time" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="text-right mt-2">
										<button type="submit" class="btn btn-sm btn-hover-fill">Request</button>
									</div>
								</form>-->
								<p>Nuestro compromiso es ofrecer el mejor servicio al cliente, garantizando: trato amable, ambientes agradables, altísimos tiempos de respuesta, atención personalizada, equipamiento de última generación, historia clínica digital, plataforma online del cliente y diversos recursos tecnológicos que harán de sus servicios con nosotros una experiencia satisfactoria.</p>
								<p class="text-right mt-2"><a  href="#" data-toggle="modal" data-target="#modalBookingForm" class="btn btn-sm btn-hover-fill link-inside">Ponte en contacto</a></p>
							</div>
						</div>
						<!--<div class="col">
							<a href="#" class="link">
								<i class="icon-calendar"></i><span>Doctors Timetable</span>
							</a>
							<div class="link-drop">
								<h5 class="link-drop-title"><i class="icon-calendar"></i>Doctors Timetable</h5>
								<p>This simply works as a guide and helps you to connect with dentists of your choice. Please confirm the doctor’s availability before leaving your premises.</p>
								<p class="text-right"><a href="#specialistsSection" class="btn btn-sm btn-hover-fill link-inside">Details</a></p>
							</div>
						</div>-->
						<!--<div class="col">
							<a href="#" class="link">
								<i class="icon-price-tag"></i><span>Calculator</span>
							</a>
							<div class="link-drop">
								<h5 class="link-drop-title"><i class="icon-price-tag"></i>Quick Pricing</h5>
								<table class="row-table">
									<tr>
										<td>Initial Consultation</td>
										<td>$10</td>
									</tr>
									<tr>
										<td>Dental check-up</td>
										<td>$15</td>
									</tr>
									<tr>
										<td>Routine Exam (no xrays)</td>
										<td>$50</td>
									</tr>
									<tr>
										<td>Simple Removal of a tooth</td>
										<td>$122</td>
									</tr>
									<tr>
										<td>Teeth cleaning</td>
										<td>$50 - $75</td>
									</tr>
									<tr>
										<td>X-ray image</td>
										<td>$10</td>
									</tr>
								</table>
							</div>
						</div>-->
						<div class="col">
							<a href="#" class="link">
								<i class="icon-emergency-call"></i><span>Comunicate con nosotros</span></a>
							<div class="link-drop">
								<h5 class="link-drop-title"><i class="icon-emergency-call"></i>Comunicate con nosotros</h5>
									<p>Es posible que necesite una atención de uno de nuestros asesores</p>
								<ul class="icn-list">

									<li><i class="icon-telephone"></i><span class="phone"><a href="tel:<?php echo $telephonex;?>"><?php echo $telephonex;?></a><br><a href="tel:<?php echo $phone_onex; ?>"><?php echo $phone_onex;?></a></span>
									</li>
									<li><i class="icon-black-envelope"></i><a href="mailto:<?php echo $emailx;?>"><?php echo $emailx; ?></a> <br><a href="mailto:ventas.in@innomedic.pe"><?php echo "ventas.in@innomedic.pe" ?></a></li>
								</ul>
								<p class="text-right mt-2"><a href="#contactForm" class="btn btn-sm btn-hover-fill link-inside">Ponte en contacto</a></p>
							</div>
						</div>
						<div class="col col-close"><a href="#" class="js-quickLinks-close"><i class="icon-top" data-toggle="tooltip" data-placement="top" title="Close panel"></i></a></div>
					</div>
				</div>
				<div class="quickLinks-open js-quickLinks-open"><span data-toggle="tooltip" data-placement="left" title="Open panel">+</span></div>
			</div>
		</div>
		<div id="mainSliderWrapper">
			<div class="loading-content">
				<div class="inner-circles-loader"></div>
			</div>
			<div class="main-slider mb-0 arrows-white arrows-bottom" id="mainSlider" data-slick='{"arrows": false, "dots": true}'>

				<?php foreach ($news_slider as $xx) {?>
				<div class="slide">
					<div class="img--holder" data-bg="<?= esc(base_url('public/assets/images/content/slider/'.$xx->img));?>?v=<?php echo time(); ?>"></div>
					<div class="slide-content center">
						<div class="vert-wrap container">
							<div class="vert">
								<div class="container">
									<div class="slide-txt1 text-right" data-animation="fadeInDown" data-animation-delay="1s"><!--Quality Healthcare.<br>-->
										<b><?= $xx->title;?></b></div>
									<div style="margin-left: 270px;" class="slide-txt2 text-right" data-animation="fadeInUp" data-animation-delay="1.5s"><?= esc($xx->description) ?></div>
									<div class="slide-btn text-right"><a href="<?php echo $xx->url; ?>" class="btn link-inside" data-animation="fadeInUp" data-animation-delay="2s"><i class="icon-right-arrow"></i><span><?= esc($xx->btn);?></span><i class="icon-right-arrow"></i></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
				
				
			</div>
		</div>
	</div>
	<!--//section slider-->
	<section id="paquetes_preventivos_view" style="background-image: url('<?= esc(base_url('public/assets/images/content/slider/testimonials-1-shape-4.png'))?>?v=<?= rand();?>'); background-repeat: no-repeat; background-size: cover;">
	<div class="container  p-3">
	   <div class="block-title text-center">
	   	 <div class="h-sub theme-color">Elija nuestro precio</div>
	   	<h2 data-title="¡Nuestros Planes!"><span>Nuestros planes  <br class="d-lg-none">  <span class="theme-color">de precios</span></span></h2>
	    
	      <span>Es importante realizar chequeos preventivos para detectar a tiempo enfermedades y posibles factores de riesgo. <br>
En Innomedic, cuidamos la integridad de tu salud. 👨‍👩‍👦</span>
	   </div>
	   <!-- /.block-title text-center -->
	   <!-- /.list-inline -->
	   <div class="tabed-content">
	      <div id="month">
	         <div class="row">
	         	<?php $paquetes = $db->query("select * from t_paquetes");
	         		foreach ($paquetes->getResult() as $xx) {?>
	         			<?php if ($xx->number=="02") {
	         				$btn_danger ="";
	         			}else{
	         				$btn_danger ="";
	         			} ?>
	         			<div class="col-xl-4 col-lg-4 animated fadeInLeft " >
			               <div class="pricing-one__single" style="<?php echo $btn_danger; ?>">
			                  <div class="circle">
			                     <div class="count">
			                        <h4><?php echo $xx->number; ?></h4>
			                     </div>
			                  </div>
			                  <div class="price">
			                     <h2>S/<?php echo $xx->price; ?></h2>
			                     <p class="font-weight-bold"><?php echo $xx->title; ?></p>
			                  </div>
			                  <hr>
			                  <ul class="list-unstyled pricing-one__list">
			                     <?php echo $xx->text; ?>
			                  </ul>
			                  <a href="<?php echo $xx->url; ?>" onclick="return mesnaje('<?php echo $xx->Id; ?>')" class="thm-btn pricing-one__btn"><span><?php echo $xx->btn; ?></span></a>
			               </div>
			            </div>
	         		<?php }
	         	?>
	            
	            
	         </div>
	      </div>
	      
	   </div>
	</div>
	</section>
   <!-- popup end-->







	<!--section contact-->
	<div class="section" id="contactSection">
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
							<form class="contact-form" id="contactForm" method="post" novalidate="novalidate">
								<div class="successform">
									<p>¡Su mensaje fue enviado exitosamente!</p>
								</div>
								<div class="errorform">
									<p>Algo salió mal, intente actualizar y enviar el formulario nuevamente.</p>
								</div>
								<div>
									<input type="text" class="form-control" name="name" placeholder="Nombre*">
								</div>
								<div class="row row-sm-space mt-15">
									<div class="col-sm-6"><input type="text" class="form-control" name="phone" placeholder="Celular"></div>
									<div class="col-sm-6 mt-15 mt-sm-0"><input type="text" class="form-control" name="email" placeholder="Email*"></div>
								</div>
								<div class="row row-sm-space mt-15"> 
									<div class="col-sm-8">
										<input type="text" class="form-control" name="nruc" id="nruc" placeholder="Ingrese Ruc y presione la tecla 'enter' " maxlength="11" pattern="([0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]|[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9])" onkeydown="return soloNumeros(event)">
									</div>
									<div class="col-sm-4">
				                    	<button type="submit" class="btn btn-outline-success btn-rounded btn-sm" name="btn-submit" id="btn-submit">
				                        <span id="id_hidde_x"><i  class="fa fa-search"></i> Buscar</span>
		                     	 		<div id="agregar_clase_x" class=""></span>
				                   		 </button>
				                 	</div>
								</div>
								<div class="row row-sm-space mt-15">
									<div class="col-sm-6 mt-15 mt-sm-0"><input type="text" class="form-control" name="usuario" id="usuario" placeholder="Empresa" readonly=""></div>
									<div class="col-sm-6 mt-15 mt-sm-0"><input type="text" class="form-control" name="rucx" id="rucx" placeholder="Ruc" readonly=""></div>
								</div>
								<div class="mt-15">
									<textarea class="form-control" name="message" placeholder="Message"></textarea>
								</div>
								<div class="mt-2 mt-lg-4 text-center text-md-left">
									<button type="submit" class="btn"><i class="icon-right-arrow"></i><span>Cotizar Ahora</span><i class="icon-right-arrow"></i></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section contact-->
	<!--section-->
	<div class="section mt-0 shadow-bot pt-2 pb-0 py-sm-4 mb-2">
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
	</div> 
	<!--//section-->
	<?php foreach ($static_view_one as $static_one) {
		$titlexx = $static_one->title;
		$subtitlexx = $static_one->subtitle;
		$descriptionxx = $static_one->description;
		$subtitle_reserxx = $static_one->subtitle_reser;
		$videoxx = $static_one->video;
	} ?>
	<!--section about-->
	<div class="section" id="aboutSection" >
		<div class="container pt-lg-2">
			<div class="row mt-2 mt-md-3 mt-lg-0">
				<div class="col-md-6">
					<div class="title-wrap text-center text-md-left">
						<div class="h-sub"><?= esc($subtitlexx);?></div>
						<h2 class="h1">Bienvenido <span class="theme-color"><?=	esc($titlexx);?></span></h2>
					</div>
					<div class="pr-xl-1">
						<p><?= $descriptionxx;?></p>
						<!--<ul class="marker-list-md">
							<li>Equipped for all stages of care, from prevention to rehabilitation</li>
							<li>Quality assessment program helps ensure smooth, effective operation</li>
							<li>Prepared to treat a high volume of trauma patients 24/7</li>
						</ul>-->
					</div>
					<div class="text-center text-md-left mt-2 mt-md-3">
						<a href="#" class="btn-link" data-toggle="modal" data-target="#modalBookingForm">Ver mas sobre nosotros<i class="icon-right-arrow"></i></a>
					</div>
				</div>
				<div class="col-md-6 mt-4 mt-md-0">
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
					<!-- Video Modal -->
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
	</div>
	<!--//section about-->
	<!--section departments-->
	<div class="section" id="departmentsSection" >
		<div class="container">
			<div class="title-wrap text-center">
				<h2 class="h1">Nuestro Departments</h2>
				<div class="h-decor"></div>
			</div>
			<p class="text-center max-500">Innomedic International se especializa en diferentes servicios médicos.</p>
			<div class="row mt-lg-4">
				<div class="col-lg-8 col-xl-9">
					<div class="department-tabs js-department-tabs d-none d-sm-flex">
						

						<?php foreach ($lista_consultorios as $xx) {?>
							<?php if ($xx->Id == 1) {
								$active = "active";
							}else{
								$active = "";
							} ?>
							<div class="department-tab <?= esc($active);?>">
								<div class="department-tab-icon"><i class="<?= esc($xx->icon);?>"></i></div>
								<div class="department-tab-text"><?= esc($xx->name);?></div>
							</div>
						<?php } ?>
						
					</div>
				</div>
				<div class="col-lg-4 col-xl-3">
					<div class="department-carousel js-department-carousel">
						<?php foreach ($lista_consultorios as $xx) {?>
							<?php if ($xx->Id == 1) {
								$active = "active";
							}else{
								$active = "";
							} ?>
							<div class="department-item">
								<h3 data-title="<?= esc($xx->name);?>"><span><?= esc($xx->name);?></span></h3>
								<div class="department-tab">
									<div class="department-tab-icon"><i class="<?= esc($xx->icon);?>"></i></div>
									<div class="department-tab-text"><?= esc($xx->name);?></div>
								</div>
								<p><?= esc($xx->description);?></p>
							</div>
						<?php } ?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section  departments-->


		<!--//Nuestras areas-->
	<div class="section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="title-wrap">
							<h2 class="h1" style="font-size: 2.5em;">Nuestras <span class="theme-color">Áreas</span></h2>
							<div class="h-decor"></div>
						</div>
						<p><?php echo "" ?></p>
						<div class="mt-4"></div>
						<div class="mt-lg-4"></div>
						<ul class="marker-list-md">
							<?php $consultoriasname = $db->query("select * from  t_consultorias order by Id asc");
							foreach ($consultoriasname->getResult() as $xx) {?>
								<li><?php echo $xx->name;?></li>
							<?php } ?>
						</ul>
					</div>
					<div class="col-lg-8 mt-4 mt-lg-0">
						<div class="slider-gallery">

							<!--aqui se tiene que hacer con ajax-->
							<ul class="slider-gallery-main list-unstyled js-slider-gallery-main">
								<?php $query = $db->query("select * from  t_consultorias order by Id asc");
								foreach ($query->getResult() as $evaristo) {?>
								 	<li><img src="<?php echo base_url().'/public/assets/';?>images/content/<?php echo $evaristo->img;?>?v=<?php echo rand();?>" alt=""></li>
								 <?php } ?>
							</ul>
							<ul class="slider-gallery-thumbs list-unstyled js-slider-gallery-thumbs">
								<?php $query = $db->query("select * from  t_consultorias order by Id asc");
								foreach ($query->getResult() as $eva) {?>
									<li><img src="<?php echo base_url().'/public/assets/';?>images/content/<?php echo $eva->img_small;?>?v=<?php echo rand();?>" alt=""></li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

	<!--//Nuestras areas-->


	

	<!--section-->
	<div class="section">
		<div class="container-fluid px-0 text-image-block">
			<div class="row no-gutters">
				<div class="col-md-6 image-col"><img src="<?php echo base_url('public/assets/images/content/why-choose-us.png');?>?v=<?php  echo rand();?>" alt=""></div>
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
	</div>
	<!--//section-->
	<!--section services-->
	<div class="section" id="servicesSection">
		<div class="container">
			<div class="title-wrap text-center">
				<h2 class="h1">Nuestros <span class="theme-color">Servicios</span></h2>
				<div class="h-decor"></div>
			</div>
			<div class="row js-service-card-style2-carousel">
				<?php foreach ($lista_t_view_service as $xx) {?>
					<div class="col-md-6 col-lg-4">
						<div class="service-card-style2">
							<div class="service-card-icon">
								<i class="<?php echo esc($xx->icon);?>"></i>
							</div>
							<h5 class="service-card-name"><?php echo esc($xx->title);?></h5>
							<p><?php echo $xx->desc;?></p>
							<!--<ul class="marker-list-md">
								<li>Complete Family Health Care</li>
								<li>EKG</li>
								<li>X-Ray</li>
								<li>Ultrasound</li>
								<li>Acute and Chronic Care</li>
								<li>Well Woman’s Exam</li>
							</ul>-->
						</div>
					</div>
				<?php } ?>
				
				
			</div>
		</div>
	</div>
	<!--//section services-->

	<!--//Nuetsras ventajas-->
		<div class="">
			<div class="container-fluid p-5">
				<div class="row no-gutters">
					<div class="col-sm-12 col-xl-7  "><!--<<<<---bg-grey-->
						<div class="max-670 mx-lg-auto px-15">
							<div class="title-wrap">
								<h2 class="h1">Nuestras  <span class="theme-color">ventajas</span></h2>
							</div>
							<div class="mt-lg-5"></div>
							<div class="row">
								<div class="col-sm-6">
									<ul class="marker-list-md">
										<?php $lista7_areas = $db->query("select * from  t_ventajas order by Id asc  limit 0,7");
										 foreach ($lista7_areas->getResult() as $xx) {?>
											<li><?php echo $xx->name;?></li>
										<?php } ?>
									</ul>
								</div>
								<div class="col-sm-6 mt-1 mt-sm-0">
									<ul class="marker-list-md">
										<?php $lista_ventajas_mas = $db->query("select * from  t_ventajas order by Id asc limit 7,50 ");
										 foreach ($lista_ventajas_mas->getResult() as $xxx) {?>
											<li><?php echo $xxx->name;?></li>
										<?php } ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-xl-5  banner-left bg-full" 
					style="background-image: url('<?php  echo base_url().'/public/assets/';?>images/content/<?php echo $img_aboutx4;?>?v=<?php echo rand();?>')"></div>
				</div>
			</div>
		</div>
		<!--//Nuetsras ventajas-->
	<!--section faq-->
	<div class="section bg-grey py-0" id="faqSection">
		<div class="container-fluid px-0">
			<div class="row no-gutters">
				<div class="col-xl-6 order-2 order-xl-1">
					<div class="faq-wrap px-15 px-lg-8">
						<div class="title-wrap">
							<h2 class="h1">Preguntas mas frecuentes</h2>
						</div>
						<div class="mt-2 mt-lg-4"></div>
						<?php
						$count =0;
						 foreach ($lista_preguntas as $xx) {
						 	$count +=1;
						 	?>
							<?php if ($xx->Id==1) {
								$active = "show";
							}else{
								$active = "";
							} ?>
							<div class="faq-item">
								<a data-toggle="collapse" data-parent="#faqAccordion1" href="#<?php echo $xx->identificador;?>" aria-expanded="true"><span><?php echo $count; ?>.</span><span><?php  echo $xx->title; ?></span></a>
								<div id="<?php 	echo $xx->identificador;?>" class="collapse <?php echo $active;?> faq-item-content" role="tabpanel">
									<div>
										<?php if ($xx->description =="" or $xx->description==NULL) {?>
											<p>Estamos agregando la información.</p>
										<?php }else{?>
											<?php echo $xx->description;?>
										<?php } ?>
									</div>
								</div>
							</div>
						<?php } ?>

						<a href="#" class="btn mt-15 mt-sm-3" data-toggle="modal" data-target="#modalQuestionForm"><i class="icon-right-arrow"></i><span>Realizar Pregunta</span><i class="icon-right-arrow"></i></a>
					</div>
				</div>
				<div class="col-xl-6 banner-left bg-cover order-1 order-xl-2" style="background-image: url('<?php echo base_url('public/assets/images/content/banner-left.jpg');?>?v=<?php echo rand(); ?>')"></div>
			</div>
		</div>
	</div>
	<!--//section faq-->
	<!--section specialists-->
	<div class="section" id="specialistsSection">
		<div class="container">
			<div class="title-wrap text-center">
				<div class="h-sub theme-color">Conocer al equipo</div>
				<h1>Nuestras especialistas</h1>
				<div class="h-decor"></div>
			</div>
			<p class="text-center max-600">Ofrecemos atención médica altamente especializada, de algunos de los principales especialistas nacionales en sus campos de medicina.</p>
			<form class="filterCarousel">
				<div class="selectWrapper input-group">
					<select class="form-control">
						<option value="all">Todos</option>
						<?php foreach ($lista_empleado as $xx) {?>
							<option value=".<?php echo esc($xx->categoria_);?>"><?php echo esc($xx->categoria);?></option>
						<?php } ?>
						
					</select>
				</div>
			</form>
			<div class="row specialist-carousel js-specialist-carousel">
				<?php foreach ($lista_empleado_categoria as  $x) {?>
					<div class="col-sm-6 col-md-4 col-lg-3 <?php echo $x->categoria;?>" >
						<div class="doctor-box doctor-box-style2 text-center">
							<!--<div class="doctor-box-photo">-->
							<div class="doctor-box-photo">
								<center><img src="<?php echo esc(base_url('public/assets/images/content/'.$x->image));?>" class="img-fluid img-responsive img-circle" alt="" style="width: 124px; height: 121px;"></center>
							</div>
							<div class="doctor-box-top">
								<h5 class="doctor-box-name"><?php echo esc($x->name);?></h5>
								<div class="doctor-box-position"><?php echo esc($x->description);?></div>
							</div>
							<div class="doctor-box-booking">
								<a href="javascript:void(0)" onclick="return validate('<?php echo $x->name;?>')">Ver mas<i class="icon-right-arrow"></i></a>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<!--//section specialists-->
	<!--section testimonials-->

	<!--section-->
	<div class="section py-0" id="testimonialsSectionS">
		<div class="container-fluid px-0">
			<div class="row no-gutters" style="background-image: url('<?php echo base_url('public/assets/images/content/reviews-bg.jpg');?>');">
				
				
				<div class="col-sm-4 col-md-2 col-lg-2 col-xl-2">
				
				</div>
				

			</div>
		</div>
	</div>


	<!--section services-->
	<div class="section bg-grey mt-0" id="testimonialsSection">
		<div class="container">
			<div class="title-wrap text-center text-md-left">
				<h2 class="h1 title-with-clone" data-title="Our Clients"><span>Nuestros <span class="theme-color">Clientes</span></span></h2>
			</div>
			<div class="row">
				<div class="col-md-9">
					<div class="row js-services-tabs-carousel">
						<?php
						$query = $db->query("select * from t_clientes_empresas where status=1 order by Id desc");
			 			foreach ($query->getResult() as $xx) {?>
			 				<?php if ($xx->Id==1) {
			 					$active = "active";
			 				}else{
			 					$active = "";
			 				} ?>
							<div class="col-md-6 col-lg-4">
								<div class="service-card-style3 <?php echo $active;?>">
									<div class="service-card-icon">
										<!--<i class="icon-eye-1"></i>-->
										<img src="<?php echo base_url('public/assets/images/content/'.$xx->img);?>" alt="">
									</div>
									<h5 class="service-card-name"><?= $xx->name;?></h5>
									<p><?php echo $xx->subtitle;?></p>
									<div class="mt-2 mt-md-4"></div>
									<a href="<?php echo $xx->url;?>" target="_blank" class="btn-link" >Mas Información<i class="icon-right-arrow"></i></a>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>

				<?php $query = $db->query("select count(*) as total from t_clientes_empresas where status=1");
					$row = $query->getRow();
					if (isset($row)) {
						$data = $row->total;
					}
				 ?>

				<div class="col-md-3 service-info-carousel-wrap">
					<div class="service-info-carousel js-services-info">
						<?php
						$query = $db->query("select * from t_clientes_empresas where status=1 order by Id desc");
						$count =0;
			 			foreach ($query->getResult() as $xx) {
			 				$count +=1;?>
						<div class="service-info">
							<div class="service-info-num"><span><?php echo $count; ?></span>/ <?php echo $data; ?></div>
							<p><?php echo $xx->description;?></p>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section  services-->
	<!--//section testimonials-->



	<!--section events-->
	<div class="section" id="eventsSection">
		<div class="container">
			<div class="title-wrap text-center">
				<h2 class="h1">Eventos Clínicos</h2>
				<div class="h-decor"></div>
			</div>
		</div>
	</div>
	<!--//section events-->
	<!--section online appointment-->
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
							<a href="#" class="btn mt-2 mt-sm-3 mt-lg-4" data-toggle="modal" data-target="#modalBookingForm"><i class="icon-right-arrow"></i><span>Solicitar una cotización</span><i class="icon-right-arrow"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section online appointment-->
	
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  


	<?php
		# Iniciando la variable de control que permitirá mostrar o no el modal
		$exibirModal = false;
		# Verificando si existe o no la cookie
		if(!isset($_COOKIE["mostrarModal"]))
		{
		# Caso no exista la cookie entra aquí
		# Creamos la cookie con la duración que queramos
			
		$expirar = 3600; // Muestra cada 1 hora
		
		setcookie('mostrarModal', 'SI', (time() + $expirar)); // mostrará cada 12 horas.
		# Ahora nuestra variable de control pasará a tener el valor TRUE (Verdadero)
		$exibirModal = false;   // Esta es la ultima linea de codigo para mostrar el modal. Si es falso no se muestar nunca. Si es verdadero se mostrara segun la logica previa
		}
	?>

	<?php 
		if($exibirModal === true) : // Si nuestra variable de control "$exibirModal" es igual a TRUE activa nuestro modal y será visible a nuestro usuario.// 
	?>
	
	<script>
		$(document).ready(function() {
		// id de nuestro modal
		$('.grgergrvgveg').modal("show");
		// $('#modalBookingForm').modal('toggle')
		});
	</script>

	<?php endif; ?>

	<script>
		function mesnaje(id) {
			var id_paciente = id;
			// body...
			$.ajax({
				url: '<?php echo base_url('Inicio/recoger_informacion/');?>',
				type: 'POST',
				dataType: 'json',
				data: {id_paquete: id},
			})
			.done(function(data) {
				console.log("success");
				$(".grgergrvgvegqsqsqsqsq").modal("show");
				$("#paquete").text(data.title);
				$("#paquete_texto").val(data.title)
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});


			$.ajax({
				url: '<?php echo base_url('Inicio/recoger_informacion1/');?>',
					method: 'POST',
					//dataType: 'json',
					data: {id_paciente: id_paciente},
				})
				.done(function(datas) {
					console.log("success");
					var resultado = JSON.parse(datas);
	                var contenido = '';                
	                $.each(resultado, function(index, value) {
	                	contenido += `
	    				<ul class="list-unstyled pricing-one__list">
			                  `+value.text+`
			            </ul>`;

					});


	                $("#aplicamos_archivos2").html(contenido);
				})
				.fail(function() {
					console.log("error");
				})
				.always(function() {
					console.log("complete");
				});
			
		}
	</script>











	

	<!-- Reservar citas | Personas -->
	<div class="modal modal-form fade grgergrvgvegqsqsqsqsq" id="modalBookingForm" data-backdrop="static" data-keyboard="false" tabindex="-1">
		<div class="modal-dialog   modal-xl">
			<div class="modal-content border_style">
				<button aria-label='Close' class='close' data-dismiss='modal'>
					<i class="icon-error"></i>
				</button>
				<div class="modal-body">


					<!-- Inicio del Modal -->
					<div class="modal-form">

						<!-- Encabezado --> 
						<h1 class="theme-color" style="text-align: center;"><span id="paquete"></span> A SOLICITAR</h1>
						<div class="text-center">
							<img src="<?php echo base_url().'/public/assets/';?>images/<?php echo $logox;?>?v=<?php echo rand();?>" alt=""><br><br>
							<span>Nuestro equipo se contactará inmediatamente contigo. Cuidamos de ti</span>
						</div>

						<br>

						<!-- Formulario -->
						<form class="mt-15" id="Enviamos_los_datos_del_paciente" method="post" >
							<div class="h-sub theme-color">La forma más rápida de reservar tu cita</div>
							<span id="aplicamos_archivos2"></span>


							<!-- Ingreso de DNI -->
							<div class="row row-xs-space mt-1">
								<div class="col-sm-8">
									<div class="input-group">
											<span>
												<i class="icon-email2"></i>
											</span>
										<input type="text" class="form-control" id="dni" name="dni" placeholder="Ingrese DNI presione enter" maxlength="8" pattern="([0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]|[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9])" onkeydown="return soloNumeros(event)">
									</div>
								</div>
								<div class="col-sm-4 mt-1 mt-sm-0">
									<button id="botoncito" class="botoncito btn btn-outline-success" onclick="test2()">
			                     	 <span id="id_hiddexx"><i  class="fa fa-search"></i> Buscar</span>
			                     	 <div id="agregar_clase_xx" class=""></span>
			                      </button>
								</div>

							</div>

							<!-- Nombres completos - vista solo -->
							<div class="input-group">
								<span>
									<i class="icon-user"></i>
								</span>
								<input type="text" name="nombres_completos" id="nombres_completos" class="form-control" autocomplete="off" readonly="" placeholder="Nombres Completos " />
							</div>

							<!-- DNI - vista solo -->
							<div class="input-group">
								<span>
									<i class="icon-user"></i>
								</span>
								<input type="text" name="dni_mostrar_dni" id="dni_mostrar_dni" class="form-control" autocomplete="off" readonly="" placeholder="Dni " />
							</div>

							<!-- Email -->
							<div class="row row-xs-space mt-1">
								<div class="col-sm-12">
									<div class="input-group">
										<span>
											<i class="icon-email2"></i>
										</span>
										<input type="text" name="bookingemail" class="form-control" autocomplete="off" placeholder="Ingrese su e-mail"  required="" />
									</div>
								</div>
							</div>
							
							
							<!-- Telefono -->
							<div class="row row-xs-space mt-1">
								<div class="col-sm-12 ">
									<div class="input-group">
										<span>
											<i class="icon-smartphone"></i>
										</span>
										<input type="number" name="bookingphone" class="form-control" autocomplete="off" placeholder="Ingrese su teléfono"  required="" />
									</div>
								</div>
							</div>

							<!-- Cuadro de Ingrese Mensaje  -->
							<input type="hidden" value="" name="paquete" id="paquete_texto">
							<textarea name="bookingmessage" class="form-control" placeholder="Mensaje" rows="6"></textarea>
							<div class="text-center mt-2">
								<button type="submit" class="btn btn-sm btn-hover-fill " id="lista"><i class="fas fa-paper-plane cambiar_texto" > </i>&nbsp;Reserva tu cita</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Agendar Citas | Script -->
	<script>

		$(function(){
            $('#botoncito').on('click', function(){
            	$("#agregar_clase_xx").addClass('preloader');
        		$("#id_hiddexx").hide();
                var dni = $('#dni').val();
                var url = '<?php echo base_url('public/reniec/consulta_reniec.php/');?>';
                $.ajax({
                type:'POST',
                url:url,
                data:'dni='+dni,
                success: function(datos_dni){
                    var datos = eval(datos_dni);
                       $('#dni_mostrar_dni').val(datos[1]);

                        var nombre =  datos[2]+" ";
                        var apellido = datos[3];
                        var apellido1 = datos[4];

                        var nombres_completos_data = nombre.concat(apellido,' ',apellido1);

                        $("#nombres_completos").val(nombres_completos_data);

                        $("#agregar_clase_xx").removeClass('preloader');
        	  			$("#id_hiddexx").show();
                       
                }
            });
            return false;
            });
        });

        $(document).on('submit', '#Enviamos_los_datos_del_paciente', function(event) {
        	event.preventDefault();
        	/* Act on the event */
        	$("#lista").html(`<i class="fas fa-paper-plane cambiar_texto" > </i>&nbsp;Enviando Cita.......`);

        	var dni = $("#nombres_completos").val();
        	if (dni == null || dni.length == 0 || /^\s+$/.test(dni) ) {
        		Swal.fire({
                      title: 'Campos Vacios ',
                      text: "Ingrese su DNI y presiona Enter",
                      icon: 'error',
                      showCancelButton: false,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'ok'
                    }).then((result) => {
                      if (result.value) {
                        $("#lista").html(`<i class="fas fa-paper-plane cambiar_texto" > </i>&nbsp;Reservar cita`);

                      }
                    })
                return false;
        	}

        	$.ajax({
        		url: '<?php echo base_url('Inicio/enviar_correo/');?>',
        		type: 'POST',
        		data: $("#Enviamos_los_datos_del_paciente").serialize(),
        		statusCode:{
              	400: function(xhr){

                var json = JSON.parse(xhr.responseText);
				console.log("falla");
                if (json.error) {
                  Swal.fire({
                      title: 'Lo siento mucho ',
                      text: ""+json.error+"",
                      icon: 'info',
                      showCancelButton: false,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'OK!'
                    }).then((result) => {
                      if (result.value) {
                        $("#Enviamos_los_datos_del_paciente")[0].reset();
                         $("#lista").html(`<i class="fas fa-paper-plane cambiar_texto" > </i>&nbsp;Reservar cita`);
                      }
                    }) 
                }
                
              }

          		}
        	})
        	.done(function(data) {

        		console.log("success");
				console.log(data);

				Swal.fire({
				title: 'Muy Bien',
				text: "Su petición ha sido enviada con exito!",
				icon: 'success',
				showCancelButton: false,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Gracias!'
				}).then((result) => {
				if (result.value) {
					$("#Enviamos_los_datos_del_paciente")[0].reset();
					$(".grgergrvgvegqsqsqsqsq").modal("hide");
						$("#lista").html(`<i class="fas fa-paper-plane cambiar_texto" > </i>&nbsp;Reservar cita`);
				}
				})
        	})
        	.fail(function(data) {
        		console.log("error");
				console.log(data);
        		Swal.fire({
                    title: 'Oposs',
                    text: "Tu cita no pudo ser enviada, Intente Nuevamente",
                    icon: 'error',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Gracias!'
                  }).then((result) => {
                    if (result.value) {
                    	 $("#lista").html(`<i class="fas fa-paper-plane cambiar_texto" > </i>&nbsp;Reservar cita`);
                    }
                  })
        	})
        	.always(function() {
        		console.log("complete");
        	});
        	
        });

	</script>


