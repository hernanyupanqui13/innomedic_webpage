<?php namespace App\Models;
use CodeIgniter\Model;


class FormulariosModel extends Model
{
	//coneccion a la base de datos
	public function __construct()
	{
		$this->db = \Config\Database::connect();
		
	}

    public function registerAnswers() {

        $this->db->query("USE bd_intra;");
        $query = $this->db->query("INSERT INTO forms_personas_datos(
            nombres, apellido_paterno, apellido_materno, numero_documento
            , fecha_nacimiento, sexo, raza, talla, peso
            , numero_telefono, direccion_id, es_migrante, pais_origen
        )");

        //return json_encode($query->getResult());
    }

    public function getAllCountries() {

        $this->db->query("USE bd_intra;");
        $query = $this->db->query("SELECT `name`
            FROM countries"
        );
        
        $result = [];
        foreach($query->getResult() as $item) {
            $result[] = $item->name;
        }

        return json_encode($result);
    }

    public function getAllDepartments() {
        $this->db->query("USE bd_intra;");
        $query = $this->db->query("SELECT `name` FROM ubigeo_peru_departments");
        $result = [];
        foreach($query->getResult() as $item) {
            $result[] = $item->name;
        }

        return json_encode($result);

    }

    public function getProvincias($department_name) {
        $this->db->query("USE bd_intra;");
        $query = $this->db->query("SELECT p.`name`
            FROM ubigeo_peru_provinces p
                INNER JOIN ubigeo_peru_departments d
                    ON d.id = p.department_id
            WHERE d.`name` LIKE '%$department_name%'
        ");

        $result = [];
        foreach($query->getResult() as $item) {
            $result[] = $item->name;
        }

        return json_encode($result);
    }

    public function getDistritos($province_name) {
        $this->db->query("USE bd_intra;");
        $query = $this->db->query("SELECT d.`name`
            FROM ubigeo_peru_districts d
                INNER JOIN ubigeo_peru_provinces p
                    ON p.id = d.province_id
            WHERE p.`name` LIKE '%$province_name%'
        ");

        $result = [];
        foreach($query->getResult() as $item) {
            $result[] = $item->name;
        }

        return json_encode($result);
    }
}