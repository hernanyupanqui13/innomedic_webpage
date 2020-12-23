<?php namespace App\Controllers;


use App\Models\InicioModel;
use CodeIgniter\Controller;
use PHPMailer\PHPMailer\PHPMailer;


class Inicio extends BaseController {

	/*
	Esta funcion es llamada cuando se carga la pagina. 
	Consulta la data y renderiza la vista
	*/ 
	public function index() {
		$model = new InicioModel();

		$data = array(
			'title' =>array("Innomedic | Clínica Innomedic International | Salud ocupacional","") ,
			'list_employe' => $model->lisatemploye(),
			'news_slider' => $model->getNews(),
			'lista_servicios' => $model->lista_servicios(),
			'static_view_one' => $model->static_view_one(),
			'lista_consultorios' => $model->lista_consultorios(),
			'lista_t_view_service' => $model->lista_t_view_service(),
			'lista_empleado' => $model->lista_empleado(),
			'lista_empleado_categoria' => $model->lista_empleado_categoria(),
			'lista_employes_data' => $model->lista_employes_data(),
			'lista_preguntas' => $model->lista_preguntas(),

		);

		echo view("diseno/head",$data);
		echo view("body/index",$data);
		echo view("diseno/footer",$data);
	}
	
	
	/* 
	Esta funcion cuenta el numero de visitas de la pagina. El numero esta en la parte inferior en el footer. 
	Es solo para el desarrollador, no deberia salir en la pagina final 
	*/
	public function cantidad_registro() {
		if ($this->request->getMethod() === 'post') {
			$db   = \Config\Database::connect();
			$query = $db->query("select *,count(*) as total from t_visitas");

	        foreach($query->getResult() as $row){
	            echo $row->total;
	        } 
		}else{
			return $this->_cargaError();
		}
		
	}

	//mandar a registrar de formulario de cotizacion
	//
	
	public function process_booking	()
	{
		$model = new InicioModel();

		if ($this->request->getMethod() === 'post') {
			$data = array(
				'email' => $this->request->getPost('bookingemail'),
				'name' =>  $this->request->getPost('bookingname'),
				'phone' => $this->request->getPost('bookingphone'),
				'ruc'=>  $this->request->getPost('bookingruc'),
				'date' => date('Y-m-d h:i:s'),
				'time' =>  $this->request->getPost('bookingtime'),
				'service'=>  $this->request->getPost('bookingservice'),
				'age'=>  $this->request->getPost('bookingage'),
				'message' =>  $this->request->getPost('bookingmessage'),
				'employe' =>  $this->request->getPost('bookingemploye'),
			);
			$model->process_booking($data);
		}else{
			return $this->_cargaError();
		}
		
	}

	/*
	Esta funcion enviar el correo de las personas que desean suscribirse a noticias
	Toma los datos, se conecta con la base de datos e inserta los nuevos emails si no
	han sido añadidos antes
	*/
	public function enviarSuscriptor() {
		if ($this->request->getMethod() === 'post') {

			$db = \Config\Database::connect();
			$model = new InicioModel();

			// Preguntamos si existe la inscripcion por email
	        $query = $db->query("select * from t_suscriptor where email='".$this->request->getPost('email')."'");
	        $row = $query->getRow();
			
			// Cuando es mayor que vacio o cero, ya esta registrado
			if(isset($row)){ 
	           echo json_encode(array('alerta'=>'Verificamos en el sistema que usted ya se registro'));
	           $this->response->setStatusCode(400);
	        } else {
	        	$data = array(
					'email' =>$this->request->getPost('email'),
					'fecha' =>date('Y-m-d h:i:s')
				);

				$model->enviarSuscriptorDb($data);

				echo json_encode(array("msg"=>"Se registro correctamente"));
	        }
			
		} else {
			return $this->_cargaError();
		}
		
	}
	



	/* 
	Esta funcion recopge los datos del View y los envia al Model para que se cargen en la base de datos
	Se espera implementar mas funciones que solo guardar la informacion en la base de datos (POR IMPLEMENTAR)
	*/
	public function process_contactform	() {

		$model = new InicioModel();

		if ($this->request->getMethod() === 'post') {
			$data = array(
				'name' => $this->request->getPost('name'),
				'phone' =>  $this->request->getPost('phone'),
				'email' => $this->request->getPost('email'),
				'date' => date('Y-m-d h:i:s'),
				'employe' =>  $this->request->getPost('usuario'),
				'ruc'=>  $this->request->getPost('rucx'),
				'message' =>  $this->request->getPost('message'),
			);
			$model->process_contactform($data);
		} else {
			return $this->_cargaError();
		}
	}





	/* 
	Esta funcion controla los resultados de loa busqueda en la pagina web. 
	Carga la plantilla de View/Reusltados y conecta con el Inicio Model  
	*/
	public function Resultados()
	{
	 	$model = new InicioModel();

		$data = array(
			'title' =>array("Innomedic | Clínica Innomedic International | Salud ocupacional","") ,
			'list_employe' => $model->lisatemploye(),
			'news_slider' => $model->getNews(),
			'lista_servicios' => $model->lista_servicios(),
			'static_view_one' => $model->static_view_one(),
			'lista_consultorios' => $model->lista_consultorios(),
			'lista_t_view_service' => $model->lista_t_view_service(),
			'lista_empleado' => $model->lista_empleado(),
			'lista_empleado_categoria' => $model->lista_empleado_categoria(),
			'lista_employes_data' => $model->lista_employes_data(),
			'lista_preguntas' => $model->lista_preguntas(),
		);

	 	echo view("body/duplicate/head",$data);
		echo view("body/resultados");
		echo view("body/duplicate/footer",$data);
	}


	private function _cargaError()
	{
		return redirect()->to(base_url('Inicio/Zona_roja/'));
	}
	

	public function Zona_roja()
	{
		echo view("errors/html/error_501");
	}


	




	


	public function Blog() {
		$model = new InicioModel();

		$data = array(
			'title' =>array("Innomedic | Clínica Innomedic International | Salud ocupacional","") ,
			'list_employe' => $model->lisatemploye(),
			'news_slider' => $model->getNews(),
			'lista_servicios' => $model->lista_servicios(),
			'static_view_one' => $model->static_view_one(),
			'lista_consultorios' => $model->lista_consultorios(),
			'lista_t_view_service' => $model->lista_t_view_service(),
			
			
			'lista_employes_data' => $model->lista_employes_data(),
			

		);

		echo view("diseno/head",$data);
		echo view("blog/detalles",$data);
		echo view("diseno/footer",$data);
		
	}


	public function detalles_blog() {

		$model = new InicioModel();

		$data = array(
			'title' =>array("Innomedic | Clínica Innomedic International | Salud ocupacional","") ,
			'list_employe' => $model->lisatemploye(),
			'news_slider' => $model->getNews(),
			'lista_servicios' => $model->lista_servicios(),
			'static_view_one' => $model->static_view_one(),
			'lista_consultorios' => $model->lista_consultorios(),
			'lista_t_view_service' => $model->lista_t_view_service(),
			'lista_employes_data' => $model->lista_employes_data(),
		);

		echo view("diseno/head",$data);
		echo view("blog/index",$data);
		echo view("diseno/footer",$data);
	}


	/* 
	Esta funcion recoge la informacion se conecta con el modelo para pedir la informacion de los paquetes
	Devuelve un unico paquete con el ID que se solicita
	*/
	public function recoger_informacion() {
		
		$model = new InicioModel();
		$id_paquete = $this->request->getPost('id_paquete');

		$data = $model->mostramos_data_recopilada($id_paquete);

		echo json_encode($data);
	}

	/*
	Esta funcion es llamada cuando el usuario desde el cliente envia el formulario para solicitar cotizacion.
	Se toman los datos del cliente, se configura un email, y se envia un email automatico a las direcciones interezadas
	
	Responde al formualrio Enviamos_los_datos_del_paciente del View
	*/
	public function enviar_correo() {
		
		if ($this->request->getMethod() === 'post') {	

			$reponder = $this->request->getPost('nombres_completos').' - '. $this->request->getPost('dni_mostrar_dni');

			// Obteniendo variables
			$mail = new PHPMailer();
			$email = $this->request->getPost('bookingemail');
			$nombres_completos  =  $this->request->getPost('nombres_completos');
			$celular = $this->request->getPost('bookingphone');
			$ruc =  $this->request->getPost('dni_mostrar_dni');
			$fecha_envio = date('Y-m-d h:i:s');
			$mensaje =  $this->request->getPost('bookingmessage');
			$nombre_paquete =  $this->request->getPost('paquete');

			// Pasando las variables a un array para pasarlas al View
			$data = array(
				'nombre_paquete' => $nombre_paquete,
				'reponder' => $reponder,
				'nombres_completos' => $nombres_completos,
				'ruc' => $ruc,
				'fecha_envio' => $fecha_envio,
				'celular' => $celular,
				'email' => $email,
				'mensaje' => $mensaje,
			);
		   
			// Creando la configuracion del correo
			$mail->isSMTP();
			$mail->Host     = 'ssl://p3plzcpnl434616.prod.phx3.secureserver.net';
			$mail->SMTPSecure = false;
			$mail->SMTPDebug  = 3;
			$mail->Username = 'reenviadores@innomedic.pe';
			$mail->Password = 'Sistemas20**';
			$mail->SMTPAuth = true;
			$mail->SMTPAutoTLS = false; 
			$mail->SMTPSecure = 'ssl';
			$mail->Port     = 465;
			$mail->CharSet = 'UTF-8';
			$mail->AllowEmpty = true;

			// De: 
			$mail->setFrom('reenviadores@innomedic.pe',  $nombres_completos.'-'.$ruc);		
			
			// Esto configura el boton de "responder a este email" en el correo
			$mail->addReplyTo($email, 'Pedido de Cotizacion - Pagina web  Web innomedic');
		   
			// Para: 
			$mail->addAddress('prueba@innomedic.pe');
			$mail->addAddress('reenviadores@innomedic.pe');


			// Add cc or bcc 
			//$mail->addCC('ventas@innomedic.pe');
			//$mail->addBCC('ventas.in@innomedic.pe');
			
			// Email subject
			$mail->Subject = 'Realizar cotizacion para '.$nombres_completos.' - Paquetes Preventivos';
			
			// Set email format to HTML
			$mail->isHTML(true);

			
			   
			// Juntando todo el contenido del correo. Renderizando el HTML del email
			$mailContent = view('email/body', $data);

			// Definiendo el cuerpo del correo como el contenido previamente configurado
	   		$mail->Body = $mailContent;
			

			// Enviando email. Notese que send() devuelve true ó false a parte de enviar el correo
			if(!$mail->send()){
				echo json_encode(array("error"=>"Su petición no ha sido enviada"));
				$this->output->set_status_header(400);
			} else {
				echo json_encode(array("sms"=>"Su petición ha sido enviada"));
			}

			

		} else {
		 	echo "Mala sintaxis en el pedido";
	   	}

	}


	// Funcion que responde al bookingForm de view
	public function enviar_process_boquin_email() {
		
		if ($this->request->getMethod() === 'post') {
			
			$mail = new PHPMailer();

			$reponder = $this->request->getPost('bookingemploye').' - '. $this->request->getPost('bookingruc');
			$email = $this->request->getPost('bookingemail');
			$nombres_completos  =  $this->request->getPost('bookingname');
			$celular = $this->request->getPost('bookingphone');
			$ruc =  $this->request->getPost('bookingruc');
			$fecha_envio = date('Y-m-d h:i:s');
			$mensaje =  $this->request->getPost('bookingmessage');
			$empresa = $this->request->getPost('bookingemploye');

			// Pasando las variables a un array para pasarlas al View
			$data = array(
				'reponder' => $reponder,
				'email' => $email,
				'nombres_completos' => $nombres_completos,
				'ruc' => $ruc,
				'fecha_envio' => $fecha_envio,
				'celular' => $celular,
				'empresa' => $empresa,
				'mensaje' => $mensaje,
			);
			

			// Creando la configuracion del correo
			$mail->isSMTP();
			$mail->Host     = 'ssl://p3plzcpnl434616.prod.phx3.secureserver.net';
			$mail->SMTPSecure = false;
			$mail->SMTPDebug  = 3;
			$mail->Username = 'reenviadores@innomedic.pe';
			$mail->Password = 'Sistemas20**';
			$mail->SMTPAuth = true;
			$mail->SMTPAutoTLS = false; 
			$mail->SMTPSecure = 'ssl';
			$mail->Port     = 465;
			$mail->CharSet = 'UTF-8';
			$mail->AllowEmpty = true;



			// De: 
       		$mail->setFrom('reenviadores@innomedic.pe',  $empresa.'-'.$ruc);
  
			// Esto configura el boton de "responder a este email" en el correo
			$mail->addReplyTo($email, 'Pedido de Cotizacion - Pagina web  Web innomedic');
			
			// Add a recipient
			$mail->addAddress('reenviadores@innomedic.pe');
			//$mail->addAddress('avera@innomedic.pe');
			//$mail->addAddress('eestrada@innomedic.pe');

        
			// Add cc or bcc 
			//$mail->addCC('ventas@innomedic.pe');
			//$mail->addBCC('ventas.in@innomedic.pe');
			
			// Email subject
			$mail->Subject = 'Realizar cotizacion para '.$empresa.' - Pagina web Innomedic.pe';
			
			// Set email format to HTML
			$mail->isHTML(true);

			// Jalando la pantilla de email del view
			$mailContent = view('email/body_empresas', $data);
			$mail->Body = $mailContent;
			
			// Enviando email. Notese que send() devuelve true ó false a parte de enviar el correo
			if(!$mail->send()){
				echo json_encode(array("error"=>"Su petición no ha sido enviada"));
				$this->output->set_status_header(400);
			} else {
				echo json_encode(array("sms"=>"Su petición ha sido enviada"));
			}

			

		} else {
		 	echo "Mala sintaxis en el pedido";
	   	}
	}



	// Responder al questionForm del View y envia email 
	public function enviar_datos_mailer_phone() {
		
		//$mensaje = "HOLA ESTA ESTA UNA PRUEBA";
		if ($this->request->getMethod() === 'post') {
			
			$mail = new PHPMailer();
			$reponder = $this->request->getPost('usuario').' - '. $this->request->getPost('rucx');
			$nombres_completos = $this->request->getPost('name');
			$celular = $this->request->getPost('phone');
			$email = $this->request->getPost('email');
			$fecha_envio = date('Y-m-d h:i:s');
			$empresa =  $this->request->getPost('usuario');
			$ruc =  $this->request->getPost('rucx');
			$mensaje = $this->request->getPost('message');

			// Pasando las variables a un array para pasarlas al View
			$data = array(
				'reponder' => $reponder,
				'nombres_completos' => $nombres_completos,
				'celular' => $celular,
				'email' => $email,
				'fecha_envio' => $fecha_envio,
				'empresa' => $empresa,
				'ruc' => $ruc,
				'mensaje' => $mensaje,
			);


			// Creando la configuracion del correo
			$mail->isSMTP();
			$mail->Host     = 'ssl://p3plzcpnl434616.prod.phx3.secureserver.net';
			$mail->SMTPSecure = false;
			$mail->SMTPDebug  = 3;
			$mail->Username = 'reenviadores@innomedic.pe';
			$mail->Password = 'Sistemas20**';
			$mail->SMTPAuth = true;
			$mail->SMTPAutoTLS = false; 
			$mail->SMTPSecure = 'ssl';
			$mail->Port     = 465;
			$mail->CharSet = 'UTF-8';
			$mail->AllowEmpty = true;



			$mail->setFrom('reenviadores@innomedic.pe',  $empresa.'-'.$ruc);

	
			$mail->addReplyTo($email, 'Pedido de Cotizacion - Pagina web  Web innomedic');
			
			
			// Add a recipient
			$mail->addAddress('reenviadores@innomedic.pe');
			//$mail->addAddress('avera@innomedic.pe');
			//$mail->addAddress('eestrada@innomedic.pe');
			//$mail->addAddress('escudero0594@hotmail.com');
		

			
			// Add cc or bcc 
			//$mail->addCC('ventas@innomedic.pe');
			//$mail->addBCC('ventas.in@innomedic.pe');
			
			// Email subject
			$mail->Subject = 'Realizar cotizacion para '.$empresa.' - Pagina web Innomedic.pe';
			
			// Set email format to HTML
			$mail->isHTML(true);

			$mailContent = view('email/body_empresas', $data);



			$mail->Body = $mailContent;
        
        // Enviando email. Notese que send() devuelve true ó false a parte de enviar el correo
			if(!$mail->send()){
				echo json_encode(array("error"=>"Su petición no ha sido enviada"));
				$this->output->set_status_header(400);
			} else {
				echo json_encode(array("sms"=>"Su petición ha sido enviada"));
			}

			

		} else {
		 	echo "Mala sintaxis en el pedido";
	   	}
	}


	
	// Responde al questionForm 
	public function process_question() {
		$model = new InicioModel();
		if ($this->request->getMethod() === 'post') {
				$data = array(
					'name' => $this->request->getPost('name'),
					'phone' =>  $this->request->getPost('phone'),
					'email' => $this->request->getPost('email'),
					'date' => date('Y-m-d h:i:s'),
					'message' =>  $this->request->getPost('message'),
				);
			$model->process_question($data);

		} else {
			return $this->_cargaError();
		}
		
	}




} ?>