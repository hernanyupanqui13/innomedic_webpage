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
			'static_one' => $model->static_view_one(),
			'lista_consultorios' => $model->lista_consultorios(),
			'lista_t_view_service' => $model->lista_t_view_service(),
			'lista_empleado' => $model->lista_empleado(),
			'lista_empleado_categoria' => $model->lista_empleado_categoria(),
			'lista_employes_data' => $model->lista_employes_data(),
			'lista_preguntas' => $model->lista_preguntas(),
			'lista_empresas_clientes' => $model->lista_empresas_clientes(),
			'time_table' => $model->obtenerTablaDeTiempo(),
			'consultoriasname' => $model->obtenerListaConsultorias(),
			'lista_ventajas_a' => $model->obtenerListaVentajas(0,7),
			'lista_ventajas_b' => $model->obtenerListaVentajas(7,14)


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
	Esta funcion recoge los datos del View y los envia al Model para que se cargen en la base de datos
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
				'ruc'=>  $this->request->getPost('identification_number'),
				'message' =>  $this->request->getPost('message'),
			);
			$model->process_contactform($data);
		} else {
			return $this->_cargaError();
		}
	}

		
	/* 
	Responde al questionForm 
	Guarda la informacion del interesado en la base de datos 
	*/
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


	// Mandar a registrar de formulario de cotizacion
	public function process_booking	() {

		$model = new InicioModel();

		if ($this->request->getMethod() === 'post') {
			$data = array(
				'email' => $this->request->getPost('email'),
				'name' =>  $this->request->getPost('name'),
				'phone' => $this->request->getPost('phone'),
				'ruc'=>  $this->request->getPost('identification_number'),
				'date' => date('Y-m-d h:i:s'),
				'time' =>  $this->request->getPost('bookingtime'), // para eliminar, es nulo en la tabla y en todo lo demas
				'service'=>  $this->request->getPost('bookingservice'), // para eliminar, es nulo en la tabla y en todo lo demas
				'age'=>  $this->request->getPost('bookingage'), // para eliminar, es nulo en la tabla y en todo lo demas
				'message' =>  $this->request->getPost('message'),
				'employe' =>  $this->request->getPost('usuario'),
			);
			$model->process_booking($data);
		} else {
			return $this->_cargaError();
		}
	}

	/*
	Esta funcion envia correos a personas de ventas y otros interesados quienes responden
	de manera personalizada al usuario
	Tiene un argumento que se pasa desde el lado del cliente por medio del URL
	*/
	public function enviarCorreo($tipo_correo="empresas") {


		if ($this->request->getMethod() === 'post') {

			// Deifniendo los tipos de correo con sus plantillas
			$tipos_de_correo = array("personas"=>"body_personas", "empresas"=>"body_empresas");

			
			$mail = new PHPMailer();

			// Obteniendo la informacion del Post method
			$name = $this->request->getPost('name');
			$phone = $this->request->getPost('phone');
			$email = $this->request->getPost('email');
			$fecha_envio = date('Y-m-d h:i:s');
			$usuario =  $this->request->getPost('usuario');
			$identification_number =  $this->request->getPost('identification_number');

			if($tipo_correo=="personas" || $identification_number == "" ) {$usuario = $name;}	// En caso de personas el encabezado cambia 
			$mensaje = $this->request->getPost('message');
			$paquete =  $this->request->getPost('paquete');

			// Pasando las variables a un array para pasarlas al View
			$data = array(
				'name' => $name,
				'phone' => $phone,
				'email' => $email,
				'fecha_envio' => $fecha_envio,
				'usuario' => $usuario,
				'identification_number' => $identification_number,
				'message' => $mensaje,
				'paquete' => $paquete
			);


			// Creando la configuracion del correo
			$mail->isSMTP();
			$mail->Host     = 'smtp.gmail.com';
			$mail->SMTPDebug  = 3;
			$mail->Username = 'sistemas.innomedic@gmail.com';
			$mail->Password = 's1st3m4s2411';
			$mail->SMTPAuth = true;
			$mail->SMTPSecure = 'tls';   
			$mail->Port     = 587;
			$mail->CharSet = 'UTF-8';
			$mail->AllowEmpty = true;   

			// De: 
			$mail->setFrom('sistemas.innomedic@gmail.com',  "Sistemas Sistemas");

			// Configurando el boton de responder
			$mail->addReplyTo($email, 'Pedido de Cotizacion - Pagina web  Web innomedic');
			
			
			// Add a recipient
			$mail->addAddress('reenviadores@innomedic.pe');
			//$mail->addAddress('avera@innomedic.pe');
			//$mail->addAddress('eestrada@innomedic.pe');
		

			// Add cc or bcc 
			//$mail->addCC('ventas@innomedic.pe');
			//$mail->addCC('ventas.in@innomedic.pe');
			$mail->addCC('ventas.inno@innomedic.pe');


			
			// Email subject
			$mail->Subject = 'Realizar cotizacion para '.$name.' - Pagina web Innomedic.pe';
			
			// Set email format to HTML
			$mail->isHTML(true);

			$mailContent = view('email/'.$tipos_de_correo[$tipo_correo], $data);

			$mail->Body = $mailContent;

			// Enviando email. Notese que send() devuelve true ó false a parte de enviar el correo
			if(!$mail->send()){
				echo json_encode(array("error"=>"Su peticion no ha sido enviada"));
				$this->output->set_status_header(400);
			} else {
				echo json_encode(array("sms"=>"Su peticion ha sido enviada"));
			}

		} else {
		 	echo "Mala sintaxis en el pedido";
	   	}
	}

}

?>