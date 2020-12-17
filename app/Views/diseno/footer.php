<!-- Estart of footer -->

<div class="">
	<br><br>
	<div class="container-fluid px-0">	
		<div class="title-wrap text-center">
			<h2 class="h1" ><span class="theme-color">Ubícanos</span></h2>
			<div class="h-decor"></div>
		</div>
		<div class="banner-center bg-cover">
			<iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.356645417313!2d-77.00072238457506!3d-12.087719045956215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c7381a11b45d%3A0x7757a26d8d254df4!2sINNOMEDIC%20(%20SEDES%20JAVIER%20PRADO)!5e0!3m2!1ses!2spe!4v1591974754216!5m2!1ses!2spe"   frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</div>
	</div>
</div>



<style>
	.iframe{
		max-width: 100%;
		width: 100%;
		height: 450px;
		max-height: 500px;
	}
</style>
<?php 
    foreach ($lista_employes_data as $data) {
     	$namex = $data->name;
     	$emailx = $data->email;
     	$addressx = $data->address;
     	$address_onex = $data->address_one;
     	$telephonex  = $data->telephone;
     	$phone_onex = $data->phone_one;
     	$sms_mailx = $data->sms_mail;
     	$facebookx = $data->facebook;
		$twiterx = $data->twiter;
		$googlex = $data->google;
		$logox = $data->logo;
		$linkedinx = $data->linkedin;
		$instagramx = $data->instagram;
		$addressx = $data->address;
		$address_onex = $data->address_one;
		$logox = $data->logo;
     } ?>



<!--footer-->
<div class="footer mt-0">
	<div class="container">
		<div class="row py-1 py-md-2 px-lg-0">
			<div class="col-lg-4 footer-col1">
				<div class="row flex-column flex-md-row flex-lg-column">
					<div class="col-md col-lg-auto">
						<div class="footer-logo">
							<img src="<?php echo esc(base_url('public/assets/images/footer-logo.png'));?>?v=<?php echo rand();?>" alt="" class="img-fluid">
						</div>
						<div class="mt-2 mt-lg-0"></div>
						<div class="footer-social d-none d-md-block d-lg-none">
									<?php if ($facebookx=="" and $facebookx==null) {?>
								<a href="javascript:void(0)" class="hovicon"><i class="icon-facebook-logo-circle"></i></a>
							<?php }else{?>
								<a target="_blank" href="<?php echo $facebookx;?>" class="hovicon"><i class="icon-facebook-logo-circle"></i></a>
							<?php } ?>

							<?php if ($twiterx=="" and $twiterx==null) {?>
								<a href="javascript:void(0)" class="hovicon"><i class="icon-twitter-logo-circle"></i></a>
							<?php }else{?>
								<a target="_blank" href="<?php echo $twiterx;?>" class="hovicon"><i class="icon-twitter-logo-circle"></i></a>
							<?php } ?>

							<?php if ($linkedinx=="" and $linkedinx==null) {?>
								<a href="javascript:void(0)" class="hovicon"><i class="icon-linkedin"></i></a>
							<?php }else{?>
								<a target="_blank" href="<?php echo $linkedinx; ?>" class="hovicon"><i class="icon-linkedin"></i></a>
							<?php } ?>

							<?php if ($instagramx=="" and $instagramx==null) {?>
								<a href="javascript:void(0)" class="hovicon"><i class="icon-instagram"></i></a>
							<?php }else{?>
								<a target="_blank" href="<?php echo $instagramx; ?>" class="hovicon"><i class="icon-instagram"></i></a>
							<?php } ?>
						</div>
						
					</div>
					<div class="col-md">
						<div class="footer-text mt-1 mt-lg-2">
							<p><?php echo $sms_mailx; ?></p>
							<small style="display: none; text-align: center; color: red;" id="error" role="alert">Ingrese un e-mail valido</small>
							<form action="" method="post" id="enviararchivos" class="footer-subscribe">
								<div class="input-group">
									<input name="email" id="email" type="text" class="form-control" placeholder="Ingrese su email *" />
									<span><i class="icon-black-envelope"></i></span>
								</div>
							</form>
						</div>
						<div class="footer-social d-md-none d-lg-block">
							<?php if ($facebookx=="" and $facebookx==null) {?>
								<a href="javascript:void(0)" class="hovicon"><i class="icon-facebook-logo-circle"></i></a>
							<?php }else{?>
								<a target="_blank" href="<?php echo $facebookx;?>" class="hovicon"><i class="icon-facebook-logo-circle"></i></a>
							<?php } ?>

							<?php if ($twiterx=="" and $twiterx==null) {?>
								<a href="javascript:void(0)" class="hovicon"><i class="icon-twitter-logo-circle"></i></a>
							<?php }else{?>
								<a target="_blank" href="<?php echo $twiterx;?>" class="hovicon"><i class="icon-twitter-logo-circle"></i></a>
							<?php } ?>

							<?php if ($linkedinx=="" and $linkedinx==null) {?>
								<a href="javascript:void(0)" class="hovicon"><i class="icon-linkedin"></i></a>
							<?php }else{?>
								<a target="_blank" href="<?php echo $linkedinx; ?>" class="hovicon"><i class="icon-linkedin"></i></a>
							<?php } ?>

							<?php if ($instagramx=="" and $instagramx==null) {?>
								<a href="javascript:void(0)" class="hovicon"><i class="icon-instagram"></i></a>
							<?php }else{?>
								<a target="_blank" href="<?php echo $instagramx; ?>" class="hovicon"><i class="icon-instagram"></i></a>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4">
				<h3>Blog Posts</h3>
				<div class="h-decor"></div>
				
					<?php 
						$db   = \Config\Database::connect();
						$query_blog= $db->query("SET lc_time_names = 'es_PE'");
		    			$query_blog = $db->query("select *, DATE_FORMAT(created,'%d %M  %Y') AS mes from t_blog where estado=1 order by Id desc limit 3");
		    			
	    				 foreach ($query_blog->getResult() as $blog) {?>
	    					<div class="footer-post d-flex">
								<div class="footer-post-photo"><img src="<?php echo base_url().'/public/assets/'; ?>images/content/<?php echo $blog->img;?>?=<?php echo rand();?>" alt="" class="img-fluid"></div>
								<div class="footer-post-text">
									<div class="footer-post-title"><a href="javascript:void(0)"><?php echo $blog->title;?></a>&nbsp;<i class="icon-right-arrow"></i></div>
									<p><?php echo $blog->mes; ?></p>
								</div>
							</div>
	    				<?php } ?>
				 
								
			</div>
			<div class="col-sm-6 col-lg-4">
				<h3>Contacto</h3>
				<div class="h-decor"></div>
				<ul class="icn-list">
					<li><i class="icon-placeholder2"></i><?php echo $address_onex;?>
						<br>
						<a target="_blank" href="https://goo.gl/maps/Qx3mJi6ihRd3CPDS8" class="btn btn-xs btn-gradient"><i class="icon-placeholder2"></i><span>Obtener indicaciones en el mapa</span><i class="icon-right-arrow"></i></a>-
					</li>
					<li><i class="icon-placeholder2"></i><?php echo $namex;?>
						<br>
						<a target="_blank" href="https://goo.gl/maps/jUQkd5wTNoRxdyMe8" class="btn btn-xs btn-gradient"><i class="icon-placeholder2"></i><span>Obtener indicaciones en el mapa</span><i class="icon-right-arrow"></i></a>-
					</li>
					<li><i class="icon-smartphone"></i><b><span class="phone"><a href="tel:<?php echo $telephonex; ?>" class="phone"><span class="text-nowrap"><?php echo $telephonex; ?></span></a></span></b>
					</li>
					<li><i class="icon-smartphone"></i><b><span class="phone"><a href="tel:<?php echo $phone_onex;?>" class="phone"><span class="text-nowrap"><?php echo $phone_onex; ?></span></a></span></b>
					</li>
					<li><i class="icon-black-envelope"></i><a href="mailto:<?php echo $emailx; ?>"><?php echo $emailx; ?></a></li>
					<li><i class="icon-black-envelope"></i><a href="mailto:ventas.in@innomedic.pe"><?php echo "ventas.in@innomedic.pe" ?></a></li>
				</ul>

				
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row text-center text-md-left">
				<div class="col-sm">Copyright &copy; 2012 - <?php echo date('Y');?> <a href="<?php echo base_url();?>">Innomedic International E.I.R.L</a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>
					<a href="javascript:void(0)">Privacy Policy</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; Total <span id="results"></span>&nbsp;Visitas</span></div>
				<div class="col-sm-auto ml-auto"><span class="d-none d-sm-inline">Ponte en contacto&nbsp;&nbsp;&nbsp;</span><i class="icon-telephone"></i>&nbsp;&nbsp;<b><a href="tel:<?php echo $telephonex; ?>"><?php echo $telephonex; ?></a>&nbsp;<a href="tel:<?php echo $phone_onex; ?>"><?php echo $phone_onex; ?></a></b>&nbsp;&nbsp;&nbsp;<a class="font-weight-bold" target="_blank" href="https://www.facebook.com/escudero05">By design</a></div>
			</div>
		</div>
	</div>
</div>
<!--//footer-->
<div class="backToTop js-backToTop">
	<i class="icon icon-up-arrow"></i>
</div>
<div class="modal modal-form  fade" id="modalQuestionForm" data-backdrop="static" data-keyboard="false" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content border_style">
			<button aria-label='Close' class='close' data-dismiss='modal'>
				<i class="icon-error"></i>
			</button>
			<div class="modal-body">
				<div class="modal-form">
					<h3 class="text-center">Hacer una pregunta</h3>
					<p class="text-center">Ponte en contacto con nuestro asesor<a target="_blank" href="https://wa.me/51966392469" class=""> CLIK AQUI!</a></p>
					<form class="mt-15" id="questionForm" method="post" novalidate>
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
							<input type="text" name="name" class="form-control" autocomplete="off" placeholder="Nombres*"/>
						</div>
						<div class="input-group">
								<span>
									<i class="icon-email2"></i>
								</span>
							<input type="text" name="email" class="form-control" autocomplete="off" placeholder="E-mail*"/>
						</div>
						<div class="input-group">
								<span>
									<i class="icon-smartphone"></i>
								</span>
							<input type="text" name="phone" class="form-control" autocomplete="off" placeholder="Celular"/>
						</div>
						<textarea name="message" class="form-control" placeholder="Tu comentario*"></textarea>
						<div class="text-right mt-2">
							<button type="submit" class="btn btn-sm btn-hover-fill"> <i class="fas fa-paper-plane"></i>&nbsp;Preguntar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal modal-form fade grgergrvgveg" id="modalBookingForm" data-backdrop="static" data-keyboard="false" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content border_style">
			<button aria-label='Close' class='close' data-dismiss='modal'>
				<i class="icon-error"></i>
			</button>
			<div class="modal-body">
				<div class="modal-form">
					<h1 class="theme-color" style="text-align: center;">Solicita una cotización</h1>
					<div class="text-center">
						<img src="<?php echo base_url().'/public/assets/';?>images/<?php echo $logox;?>?v=<?php echo rand();?>" alt=""><br><br>
						<span>Nuestro equipo se contactará inmediatamente contigo. Cuidamos de ti, de tu equipo y empresa</span>
					</div>
					<br>
					<form class="mt-15" id="bookingForm" method="post" novalidate="">
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
							<input type="text" name="bookingname" class="form-control" autocomplete="off" placeholder="Nombres y apellidos " value="<?= old('lima') ?>" />
						</div>

						<div class="row row-xs-space mt-1">
							<div class="col-sm-8">
								<div class="input-group">
										<span>
											<i class="icon-email2"></i>
										</span>
									<input type="text" class="form-control" name="nruc" id="nrucx" placeholder="Ingrese Ruc y presione la tecla 'enter' " maxlength="11" pattern="([0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]|[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9])" onkeydown="return soloNumeros(event)">
								</div>
							</div>
							<div class="col-sm-4 mt-1 mt-sm-0">
								<button type="button"  class="btn btn-outline-success btn-rounded btn-sm" name="btn-submit" id="btn-submitx">
		                     	 <span id="id_hidde"><i  class="fa fa-search"></i> Buscar</span>
		                     	 <div id="agregar_clase" class=""></span>
		                       </button>


		                       
								
							</div>

						</div>

						<div class="input-group">
							<span>
								<i class="icon-user"></i>
							</span>
							<input type="text" name="bookingruc" id="rucxx" class="form-control" autocomplete="off" readonly="" placeholder="Empresa " />
						</div>
						<div class="input-group">
							<span>
								<i class="icon-user"></i>
							</span>
							<input type="text" name="bookingemploye" id="usuariox" class="form-control" autocomplete="off" readonly="" placeholder="Ruc " />
						</div>
						<div class="row row-xs-space mt-1">
							<div class="col-sm-12">
								<div class="input-group">
									<span>
										<i class="icon-email2"></i>
									</span>
									<input type="text" name="bookingemail" class="form-control" autocomplete="off" placeholder="Ingrese su e-mail" />
								</div>
							</div>
						</div>
							<!--telñefono-->
						<div class="row row-xs-space mt-1">
							<div class="col-sm-12 ">
								<div class="input-group">
									<span>
										<i class="icon-smartphone"></i>
									</span>
									<input type="number" name="bookingphone" class="form-control" autocomplete="off" placeholder="Ingrese su teléfono" />
								</div>
							</div>
						</div>
						<textarea name="bookingmessage" class="form-control" placeholder="Mensaje" rows="6"></textarea>
						<div class="text-center mt-2">
							<button type="submit" class="btn btn-sm btn-hover-fill "><i class="fas fa-paper-plane cambiar_texto"></i>&nbsp;Enviar cotización</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<style>
		.border_style{
			border-radius: 1.5em;
		}


		.preloader {
			  width: 25px;
			  height: 25px;
			  border: 10px solid #eee;
			  border-top: 10px solid #666;
			  border-radius: 50%;
			  animation-name: girar;
			  animation-duration: 2s;
			  animation-iteration-count: infinite;
			}
			@keyframes girar {
			  from {
			    transform: rotate(0deg);
			  }
			  to {
			    transform: rotate(360deg);
			  }
			}

		
		

		@media only screen and (min-width: 880px) {
	  .slick-dots {
	    display: none;
	  }
	}

		
		
	
	</style>

<!--aqui carga el chat de online-->
<div id="WAButton"></div>
<!--
 Código de instalación Cliengo para innomedicperu@gmail.com -- <script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/5f05f60dbb9ae0002ac5dd49/5f05f60ebb9ae0002ac5dd4c.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>

-->

<script>
	function validate(valor) {
		Swal.fire(
		  'Lo siento',
		  'Aun no exite información de - <strong>'+valor+'</strong> ',
		  'info'
		)
	}

	function soloNumeros(e)
        {
            if(e.shiftKey)
           {
                e.preventDefault();
           }

           if (e.keyCode == 46 || e.keyCode == 8)    {
           }
           else {
                if (e.keyCode < 95) {
                  if (e.keyCode < 48 || e.keyCode > 57) {
                        e.preventDefault();
                  }
                } 
                else {
                      if (e.keyCode < 96 || e.keyCode > 105) {
                          e.preventDefault();
                      }
                }
              }
        }
</script>

<?php 
		$db   = \Config\Database::connect();
		$builder = $db->table('t_visitas');
          // Pregunto si la variable counte existe
        if (!isset($_COOKIE['counte'])) 
        {
 
            // $dtz = new DateTimeZone("America/Lima"); //Your timezone
            // $currentv = new DateTime('NOW');
            // $currentv = $currentv->format('Y-m-d H:i:s'); // had to format this  
 
            $dtz = new DateTimeZone("America/Lima"); //Your timezone
            $currentv = new DateTime('NOW', $dtz);
            $currentv = $currentv->format("Y-m-d H:i:s");   

            $array = [
	        'fecha'   => $currentv,
	        'direccionip'  => $_SERVER['REMOTE_ADDR'],
	        'direccionip4' => ip2long($_SERVER['REMOTE_ADDR']),
			];

			$builder->set($array);
			$builder->insert();                 
            
 
        }
 
        setcookie('counte', 1, time()+3600);
 
        // Realizo una query a la la tabla visitas
        
     ?>

<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v7.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="413978685311343"
  		theme_color="#0084ff"
  		logged_in_greeting=" ¡Hola! como podemos ayudarte?"
  		logged_out_greeting=" ¡Hola! como podemos ayudarte?"
  		greeting_dialog_display="show"
  		>
      </div>




<!-- Vendors -->
<script src="<?= esc(base_url()).'/public/';?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="<?= esc(base_url()).'/public/';?>assets/vendor/jquery-migrate/jquery-migrate-3.0.1.min.js"></script>
<script src="<?= esc(base_url()).'/public/';?>assets/vendor/cookie/jquery.cookie.js"></script>
<script src="<?= esc(base_url()).'/public/';?>assets/vendor/bootstrap-datetimepicker/moment.js"></script>
<script src="<?= esc(base_url()).'/public/';?>assets/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script src="<?= esc(base_url()).'/public/';?>assets/vendor/popper/popper.min.js"></script>
<script src="<?= esc(base_url()).'/public/';?>assets/vendor/bootstrap/bootstrap.min.js"></script>
<script src="<?= esc(base_url()).'/public/';?>assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="<?= esc(base_url()).'/public/';?>assets/vendor/waypoints/sticky.min.js"></script>
<script src="<?= esc(base_url()).'/public/';?>assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="<?= esc(base_url()).'/public/';?>assets/vendor/slick/slick.min.js"></script>
<script src="<?= esc(base_url()).'/public/';?>assets/vendor/scroll-with-ease/jquery.scroll-with-ease.min.js"></script>
<script src="<?= esc(base_url()).'/public/';?>assets/vendor/countTo/jquery.countTo.js"></script>
<script src="<?= esc(base_url()).'/public/';?>assets/vendor/form-validation/jquery.form.js"></script>
<script src="<?= esc(base_url()).'/public/';?>assets/vendor/form-validation/jquery.validate.min.js"></script>
<script src="<?= esc(base_url()).'/public/';?>assets/vendor/isotope/isotope.pkgd.min.js"></script>
<!-- Custom Scripts -->
<script src="<?= esc(base_url()).'/public/';?>assets/js/app.js?v=<?php echo rand();?>"></script>
<script src="<?= esc(base_url()).'/public/';?>assets/js/app-shop.js"></script>
<!--<script src="<?= esc(base_url()).'/public/';?>assets/form/forms.js?v=<?php echo rand();?>"></script>-->

<!-- Vendors -->

<!-- Custom Scripts -->

<script src="<?= esc(base_url()).'/public/';?>assets/color/color.js?v=<?php echo rand();?>"></script>

<!--da font asome-->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<script src="<?php echo base_url().'/public/assets/';?>color/chat.js?v=<?php echo time();?>"></script>
<!--swla alert-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.14.2/dist/sweetalert2.all.min.js" type="text/javascript" charset="utf-8" async defer></script>

<!--Floating WhatsApp css-->
<link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
<!--Floating WhatsApp javascript-->
<script type="text/javascript" src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js"></script>
<script>
	    $('#email').on('keypress', function() {
	    var re = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(this.value);
	    if(!re) {
	        $('#error').show();
	    } else {
	        $('#error').hide();
	    }
	})
	</script>
<script>  
            //nuevo registro
        $(document).on('submit', '#enviararchivos', function(event){  
             event.preventDefault();  
             var email = $("#email").val();
           

             //validacion de nombre;

            if (email.length=="") {
                Swal.fire({
                  position: 'top-end',
                  type: 'error',
                  text: 'El campo link esta vacio',
                  showConfirmButton: false,
                  timer: 1500
                })
                return false;
            }else{

            }  

          $.ajax({  
               url:"<?php echo base_url('Inicio/SendMail/');?>",  
               method:'POST',  
               data:new FormData(this),  
               contentType:false,  
               processData:false,  
               success:function(data)  
               {  
                var json =JSON.parse(data);
                  Swal.fire({
                    title: 'Muy Bien',
                    text: ""+json.msg+"",
                    icon: 'success',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Gracias!'
                  }).then((result) => {
                    if (result.value) {

                        $("#email").val("");
                    }
                  })
                 
                //$('#div_load').load(location.href+" #div_load>*","");
                
                 
               },statusCode:{
              400: function(xhr){

                var json = JSON.parse(xhr.responseText);
                if (json.alerta) {
                  Swal.fire({
                      title: 'Lo siento mucho ',
                      text: ""+json.alerta+"",
                      icon: 'info',
                      showCancelButton: false,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'OK!'
                    }).then((result) => {
                      if (result.value) {
                        
                      }
                    })
                 /* $("#alert").html('<div class="alert alert-success text-center" id="alerta" role="alert">'+json.alerta+'</div>'); */
                }
                
              },401: function(xhr){
            var json = JSON.parse(xhr.responseText);
            if (json.error) {
                  Swal.fire({
                      title: 'Lo siento mucho',
                      text: ""+json.error+"",
                      icon: 'info',
                      showCancelButton: false,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Ok!'
                    }).then((result) => {
                      if (result.value) {
                        
                      }
                    })
                
                }
        },
            error: function()
                                 {
                       Swal.fire({
                        title: 'Lo siento mucho',
                        text: "Algo paso con el sistema Vuelva a intentar una vez mas",
                        icon: 'error',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ok!'
                      }).then((result) => {
                        if (result.value) {
                         
                        }
                      })
                  }
              }
            

          });  
          
             

        });  
    </script>
<script>
    function sendRequest(){
    
      $.ajax({
        url: "<?php echo base_url('Inicio/cantidad_registro/');?>",
        method:"POST",
        contentType:false,
        processData:false,
        success:
          function(result){ 
    /* si es success mostramos resultados */
           $('#results').text(result);
        },
        complete: function() { 
    /* solo una vez que la petición se completa (success o no success) 
       pedimos una nueva petición en 3 segundos */
           setTimeout(function(){
             sendRequest();
           }, 3000);
          }
        });
      };

    /* primera petición que echa a andar la maquinaria */
    $(function() {
        sendRequest();
    });






</script>

<script>
			(function ($) {

			"use strict";

			var $document = $(document),
				$window = $(window),
				forms = {
				contactForm: $('#contactForm'),
				questionForm: $('#questionForm'),
				bookingForm: $('#bookingForm'),
				requestForm: $('#requestForm')
			};

			$document.ready(function () {
				
				// datepicker
				if ($('.datetimepicker').length) {
					$('.datetimepicker').datetimepicker({
						format: 'DD/MM/YYYY',
						ignoreReadonly: true,
						icons: {
							time: 'icon icon-clock',
							date: 'icon icon-calendar2',
							up: 'icon icon-top',
							down: 'icon icon-bottom',
							previous: 'icon icon-left',
							next: 'icon icon-right',
							today: 'icon icon-tick',
							clear: 'icon icon-close',
							close: 'icon icon-close'
						}
					});
				}
				if ($('.timepicker').length) {
					$('.timepicker').datetimepicker({
						format: 'LT',
						ignoreReadonly: true,
						icons: {
							time: 'icon icon-clock',
							up: 'icon icon-top',
							down: 'icon icon-bottom',
							previous: 'icon icon-left',
							next: 'icon icon-right'
						}
					});
				}
								
				// contact page form
				if (forms.contactForm.length) {
					var $contactform = forms.contactForm;
					$contactform.validate({
						rules: {
							name: {
								required: true,
								minlength: 2
							},
							
							phone: {
								required: true,
								minlength: 9
							},
							usuario: {
								required: true,
								minlength: 5
							},
							rucx: {
								required: true,
								minlength: 11
							},
							message: {
								required: true,
								minlength: 20
							},
							email: {
								required: true,
								email: true
							}

						},
						messages: {
							name: {
								required: "Por favor, escriba su nombre",
								minlength: "Su nombre debe constar de al menos 2 caracteres."
							},
							phone: {
								required: "Por favor, Ingrese su celular",
								minlength: "Su celular debe constar de 9 caracteres."
							},
							
							usuario: {
								required: "Por favor, Ingrese Ruc y presione Enter",
								
							},
							rucx: {
								required: "Por favor, Ingrese Ruc y presione Enter",
								
							},
							message: {
								required: "Por favor ingrese el mensaje",
								minlength: "Su mensaje debe tener al menos 20 caracteres."
							},
							email: {
								required: "Por favor, Ingrese su email"
							}
						},
						submitHandler: function submitHandler(form) {

							//manda a la base de datos
							$(form).ajaxSubmit({
								type: "POST",
								data: $(form).serialize(),
								url: "<?php echo esc(base_url('Inicio/process_contactform'))?>",
								success: function success() {
									$('.successform', $contactform).fadeIn();
									$contactform.get(0).reset();
								},
								error: function error() {
									$('.errorform', $contactform).fadeIn();
								}
							});


							$(form).ajaxSubmit({
								type: "POST",
								data: $(form).serialize(),
								url: "<?php echo base_url('Inicio/enviar_datos_mailer_phone/');?>",
								success: function success() {
									$('.successform', $contactform).fadeIn();
									$contactform.get(0).reset();
								},
								error: function error() {
									$('.errorform', $contactform).fadeIn();
								}
							});
						}
					});
				}

				// question form
				if (forms.questionForm.length) {
					var $questionForm = forms.questionForm;
					$questionForm.validate({
						rules: {
							name: {
								required: true,
								minlength: 10
							},
							messages: {
								required: true,
								minlength: 20
							},
							email: {
								required: true,
								email: true
							}
						},
						messages: {
							name: {
								required: "Por favor, escriba su nombre",
								minlength: "Su nombre debe constar de al menos 10 caracteres."
							},
							message: {
								required: "Por favor ingrese el mensaje",
								minlength: "Su mensaje debe tener al menos 20 caracteres."
							},
							email: {
								required: "Por favor introduzca su correo electrónico"
							}
						},
						submitHandler: function submitHandler(form) {

							//realizar mediante a la base de datos
							//
							$(form).ajaxSubmit({
								type: "POST",
								data: $(form).serialize(),
								url: "<?php echo base_url('Inicio/process_question')?>",
								success: function success() {
									$('.successform', $questionForm).fadeIn();
									$questionForm.get(0).reset();
								},
								error: function error() {
									$('.errorform', $questionForm).fadeIn();
								}
							});
							//
							//end fin
							$(form).ajaxSubmit({
								type: "POST",
								data: $(form).serialize(),
								url: "<?php echo base_url('Inicio/enviar_datos_mailer_phone/');?>",
								success: function success() {
									$('.successform', $questionForm).fadeIn();
									$questionForm.get(0).reset();
								},
								error: function error() {
									$('.errorform', $questionForm).fadeIn();
								}
							});
						}
					});
				}
				
				// booking form
				if (forms.bookingForm.length) {
					var $bookingForm = forms.bookingForm;
					$bookingForm.validate({
						rules: {
							bookingname: {
								required: true,
								minlength: 2
							},
							bookingruc: {
								required: true,
								minlength: 11
							},
							
							bookingemploye: {
								required: true,
								minlength: 5
							},
							
							bookingphone: {
								required: true,
								minlength: 9
							},

							bookingmessage: {
								required: true,
								minlength: 20
							},
							bookingemail: {
								required: true,
								email: true
							}

						},
						messages: {
							bookingname: {
								required: "Por favor, escriba sus nombres completos",
								minlength: "Sus nombres completos debe constar de al menos 10 caracteres."
							},
							bookingruc: {
								required: "Por favor, Ingrese Ruc y presione Enter",
							},
							bookingemploye: {
								required: "Por favor, Ingrese Ruc y presione Enter",
								
							},
							bookingphone: {
								required: "Por favor, Ingrese su celular",
								minlength: "Su celular debe constar de 9 caracteres."
							},
							bookingmessage: {
								required: "Por favor ingrese su mensaje",
								minlength: "e tener al menos 20 caracteres."
							},
							bookingemail: {
								required: "Por favor introduzca su correo electrónico"
							}
						},
						submitHandler: function submitHandler(form) {
							//esto manda a la base de datos
							//$('.cambiar_texto').text('Enviado....');
							$(form).ajaxSubmit({
								type: "POST",
								data: $(form).serialize(),
								url: "<?php echo esc(base_url('Inicio/process_booking'))?>",
								success: function success() {
									$('.successform', $bookingForm).fadeIn();
									$bookingForm.get(0).reset();
									//$('.cambiar_texto').text('Enviar cotización');
								},
								error: function error() {
									$('.errorform', $bookingForm).fadeIn();
								}
							});

							$(form).ajaxSubmit({
								type: "POST",
								data: $(form).serialize(),
								url: "<?php echo base_url('Inicio/enviar_process_boquin_email/');?>",
								success: function success() {
									$('.successform', $bookingForm).fadeIn();
									$bookingForm.get(0).reset();

								},
								error: function error() {
									$('.errorform', $bookingForm).fadeIn();
								}
							});

						}
					});
				}
				
				// request form
				if (forms.requestForm.length) {
					var $requestForm = forms.requestForm;
					$requestForm.validate({
						rules: {
							requestname: {
								required: true,
								minlength: 2
							},
							requestmessages: {
								required: true,
								minlength: 20
							},
							requestemail: {
								required: true,
								email: true
							}

						},
						messages: {
							requestname: {
								required: "Please enter your name",
								minlength: "Your name must consist of at least 2 characters"
							},
							requestmessage: {
								required: "Please enter message",
								minlength: "Your message must consist of at least 20 characters"
							},
							requestemail: {
								required: "Please enter your email"
							}
						},
						submitHandler: function submitHandler(form) {
							$(form).ajaxSubmit({
								type: "POST",
								data: $(form).serialize(),
								//url: "form/process-request.php",
								success: function success() {
									$('.successform', $requestForm).fadeIn();
									$requestForm.get(0).reset();
								},
								error: function error() {
									$('.errorform', $requestForm).fadeIn();
								}
							});
						}
					});
				}

			
			});
			
		})(jQuery);
</script>

<script src="<?php echo base_url().'/public/sunatphp-master/';?>example/js/ajaxview.js?v=<?php echo rand();?>"></script>
    <script>
      $(document).ready(function(){
        $("#btn-submit").click(function(e){
        	
        	

        	var nruc = $("#nruc").val();
        	if (nruc=="" || nruc ==null) {
        		Swal.fire({
				  icon: 'error',
				  title: 'Oops...',
				  text: 'Ingrese RUC O DNI',
				  //footer: '<a href>Why do I have this issue?</a>'
				})
        		return false;
        	}

        	$("#agregar_clase_x").addClass('preloader');
        	$("#id_hidde_x").hide();

        //$('#btn-submit').on('click', function(){
          var $this = $(this);
          e.preventDefault();
          //$this.button('loading');
          //$.ajaxblock(); con esto carga el loading, al quitar esto ya elimina el loading de la pagina web
          $.ajax({
            data: { "nruc" : $("#nruc").val() },
            type: "POST",
            dataType: "json",
            url: "<?php echo base_url('public/sunatphp-master/example/consulta.php/');?>",
          }).done(function( data, textStatus, jqXHR ){
            if(data['success']!="false" && data['success']!=false)
            {
              $("#json_code").text(JSON.stringify(data, null, '\t'));
              if(typeof(data['result'])!='undefined')
              {
                $("#tbody").html("");
                $.each(data['result'], function(i, v)
                {
                  $("#usuario").val(data['result']['razon_social']);
                  $("#rucx").val(data['result']['ruc']);
                  $("#direccionx").val(data['result']['direccion']);
                  
                });
              }
              //$this.button('reset');
              $("#error").hide();
              $(".result").show();
              //mostramos los resultados que esta pasando
              $("#agregar_clase_x").removeClass('preloader');
        	  $("#id_hidde_x").show();
              $.ajaxunblock();
            }
            else
            {
              if(typeof(data['msg'])!='undefined')
              {
                alert( data['msg'] );
              }
              //$this.button('reset');
              $.ajaxunblock();
            }
          }).fail(function( jqXHR, textStatus, errorThrown ){
            alert( "Solicitud fallida:" + textStatus );
            $this.button('reset');
            $.ajaxunblock();
          });
        });
      });
    </script>

    <!--esto lo que esta haciendo es repetir el codigo-->
        <script>
      $(document).ready(function(){
        $("#btn-submitx").click(function(e){
        	var nrucx = $("#nrucx").val();
        	if (nrucx=="" || nrucx ==null) {
        		Swal.fire({
				  icon: 'error',
				  title: 'Oops...',
				  text: 'Ingrese RUC O DNI',
				  //footer: '<a href>Why do I have this issue?</a>'
				})
        		return false;
        	}
        	$("#agregar_clase").addClass('preloader');
        	$("#id_hidde").hide();
        //$('#btn-submit').on('click', function(){
          var $this = $(this);
          e.preventDefault();
          //$this.button('loading');
          //$.ajaxblock(); con esto carga el loading, al quitar esto ya elimina el loading de la pagina web
          $.ajax({
            data: { "nruc" : $("#nrucx").val() },
            type: "POST",
            dataType: "json",
            url: "<?php echo base_url('public/sunatphp-master/example/consulta.php/');?>",
          }).done(function( data, textStatus, jqXHR ){
            if(data['success']!="false" && data['success']!=false)
            {
              $("#json_code").text(JSON.stringify(data, null, '\t'));
              if(typeof(data['result'])!='undefined')
              {
                $("#tbody").html("");
                $.each(data['result'], function(i, v)
                {
                  $("#usuariox").val(data['result']['razon_social']);
                  $("#rucxx").val(data['result']['ruc']);
                  $("#direccionx").val(data['result']['direccion']);
                  
                });
              }
              //$this.button('reset');
              $("#error").hide();
              $(".result").show();
              //agremos las clases para que actulizen todos
             $("#agregar_clase").removeClass('preloader');
        	 $("#id_hidde").show();
              $.ajaxunblock();
            }
            else
            {
              if(typeof(data['msg'])!='undefined')
              {
                alert( data['msg'] );
              }
              //$this.button('reset');
              $.ajaxunblock();
            }
          }).fail(function( jqXHR, textStatus, errorThrown ){
            alert( "Solicitud fallida:" + textStatus );
            $this.button('reset');
            $.ajaxunblock();
          });
        });
      });
    </script>


</body>

</html>