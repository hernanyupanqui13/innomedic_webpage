<?php namespace App\Models;
use CodeIgniter\Model;


/* Esta clase contiene todas las fucnieons que solicitan lan informacion a la base de datos para la pagina.
Para acceder a la base de datos, los controladores solo crean una instalcia de esta clase y usan sus metodos 
cuando se requiere*/ 
class InicioModel extends Model
{
	//coneccion a la base de datos
	function __construct()
	{
		//$db = \Config\Database::connect();
		
	}

    public function lisatemploye()
	{
	   $db = db_connect();
	   $query = $db->query("select * from th_employe");
	   return $query->getResult();
	}

	public function getNews()
	{
	   $db   = \Config\Database::connect();
	   $query = $db->query("select * from t_slider where estado=1 order by Id desc");
	   return $query->getResult();
	}
	public function lista_servicios()
	{
	   $db   = \Config\Database::connect();
	   $query = $db->query("select * from t_servicio");
	   return $query->getResult();
	}
	public function static_view_one()
	{
	   $db   = \Config\Database::connect();
	   $query = $db->query("select * from t_static_one");
	   return $query->getResult();
	}
	public function lista_consultorios()
	{
	   $db   = \Config\Database::connect();
	   $query = $db->query("select * from t_areas");
	   return $query->getResult();
	}

	public function lista_t_view_service()
	{
	   $db   = \Config\Database::connect();
	   $query = $db->query("select * from t_view_service order by Id asc");
	   return $query->getResult();
	}
	public function lista_empleado()
	{
	   $db   = \Config\Database::connect();
	   $query = $db->query("select * from t_categoria_empleado order by Id asc");
	   return $query->getResult();
	}
	
	public function lista_empleado_categoria()
	{
	   $db   = \Config\Database::connect();
	   $query = $db->query("select * from t_empleado where estado = 1 order by Id asc");
	   return $query->getResult();
	}

	public function lista_employes_data()
	{
	   $db   = \Config\Database::connect();
	   $query = $db->query("select * from th_employe");
	   return $query->getResult();
	}

	public function lista_preguntas()
	{
	   $db   = \Config\Database::connect();
	   $query = $db->query("select * from t_preguntas_frecuentes limit 5");
	   return $query->getResult();
	}

	/* Este metodo sube la informacion a la tabla t_cita en la base de datos del servidor
	El parametro $data contiene una matriz de cada valor y su respectivo indext. Los index coniciden con 
	el nombre de las columnas en la base de datos */
	public function process_booking($data)
	{
		$db   = \Config\Database::connect();
		$builder = $db->table('t_cita');

		$builder->set($data);
		$builder->insert();  
	}

	public function enviarSuscriptorDb($data)
	{
		$db   = \Config\Database::connect();
		$builder = $db->table('t_suscriptor');

		$builder->set($data);
		$builder->insert();  
	}
	public function process_contactform($data)
	{
		$db   = \Config\Database::connect();
		$builder = $db->table('t_cita');

		$builder->set($data);
		$builder->insert();  
	}

	public function process_question($data)
	{
		$db   = \Config\Database::connect();
		$builder = $db->table('t_preguntas');

		$builder->set($data);
		$builder->insert();  
	}

	public function mostrmos_data_recopilado($id)
	{
		$db   = \Config\Database::connect();
		$builder = $db->query('select * from t_paquetes where Id="'.$id.'"');
		return $builder->getRow();
	}

	public function mostrmos_data_recopilado1($id)
	{
		$db   = \Config\Database::connect();
		$builder = $db->query('select * from t_paquetes where Id="'.$id.'"');
		return $builder->getResult();
	}
	

	


	

	
	


    
}

