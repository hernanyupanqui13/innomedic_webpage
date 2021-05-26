<?php namespace App\Models;

use CodeIgniter\Debug\Toolbar\Collectors\History;
use CodeIgniter\Model;
use CodeIgniter\Throttle\ThrottlerInterface;
use org\bovigo\vfs\QuotaTestCase;
use phpDocumentor\Reflection\Types\This;

class FormulariosModel extends Model
{
	//coneccion a la base de datos
	public function __construct()
	{
		$this->db = \Config\Database::connect();
		
	}
    
    public function registerAnswers($data) {
        
        $this->db->query("USE bd_intra;");
        $this->db->transStart();

        $this->registerDireccion($data);
        $this->registerEmpresa($data);
        $this->registerPersona($data);
        $this->registerDatosPersonales($data);
        $this->registerSintomatologico($data);
        $this->registerAntecedentesEyP($data);



        $this->db->transComplete();

    }

    public function getAllCountries() {

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
        $query = $this->db->query("SELECT `name` FROM ubigeo_peru_departments");
        $result = [];
        foreach($query->getResult() as $item) {
            $result[] = $item->name;
        }

        return json_encode($result);

    }

    public function getProvincias($department_name) {
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

    public function registerDireccion($data) {

        $direccion = $data["residencia-text"];
        $distrito = $data["residencia-distrito"];
        $departamento = $data["residencia-departamento"];
        $provincia = $data["residencia-provincia"];

        $this->db->query("INSERT INTO direcciones (direccion, distrito_id)
            VALUE ('$direccion', (SELECT dis.id 
                FROM ubigeo_peru_districts dis 
                    INNER JOIN ubigeo_peru_provinces p 
                        ON p.id = dis.province_id 
                    INNER JOIN ubigeo_peru_departments dep
                        ON dep.id = dis.department_id 
                WHERE dis.`name` = '$distrito'
                    AND dep.`name` = '$departamento'
                    AND p.`name` = '$provincia')
            )"
        );

        $this->db->query("SET @direccion_id = LAST_INSERT_ID()");
        $direccion_id = $this->db->query("SELECT @direccion_id AS id;");
        $direccion_id = $direccion_id->getRow();
        $direccion_id = $direccion_id->id;
        return $direccion_id;
    }




    /* Esta funcion registra a una empresa del formulario en la base de datos solo si esta no ha sido ingresada antes
    En cualquier caso devuelve el Id de la fila de la base de datos donde se aloja la empresa */
    public function registerEmpresa($data) {
        // Esto esta por implementar. Por ahora no hace nada. En un futuro deberia permitir que la funcion se use en cualquier escenario
        if (!isset($data["ruc"])) {
            return false;
        }
        // Variables
        $ruc = $data["empresa-ruc"];
        $razon_social = $data["empresa-razon_social"];

        $query = $this->db->query("SELECT * FROM bd_intra.ts_empresas
            WHERE ruc = '$ruc';
        ");

        $array = $query->getResult();

        // If it exists, we only return the Id of that row
        if (count($array) == 1) {
            $id = $array[0]->Id;
            $this->db->query("SET @empresa_id = $id");
            return $id;
        }



        $this->db->query("INSERT INTO ts_empresas (ruc, razon_social)
        VALUES ('$ruc', '$razon_social');");

        $this->db->query("SET @empresa_id = LAST_INSERT_ID();");
        $empresa_id = $this->db->query("SELECT @empresa_id AS id");
        $empresa_id = $empresa_id->getRow();
        $empresa_id = $empresa_id->id;
        return $empresa_id;

    }

    /* Esta funcion registra a una persona del formulario en la base de datos solo si esta no ha sido ingresada antes
    En cualquier caso devuelve el Id de la fila de la base de datos donde se aloja la persona */
    public function registerPersona($data) {
        // Esto esta por implementar. Por ahora no hace nada. En un futuro deberia permitir que la funcion se use en cualquier escenario
        if(!isset($data["dni"])) {
            return false;
        }

        // Variables
        $nombres = $data["nombres"];
        $apellido_paterno = $data["apellido_paterno"];
        $apellido_materno = $data["apellido_materno"];
        $numero_documento = $data["dni"];
        $fecha_nacimiento = $data["fecha_nacimiento"];
        $sexo = $data["sexo"];


        // Checking if the persona already exists on the database
        $query = $this->db->query("SELECT *
            FROM personas_datos 
            WHERE numero_documento = '$numero_documento'
        ");

        $array = $query->getResult();

        // If it exists, we only return the Id of that row
        if (count($array) == 1) {
            $id = $array[0]->Id;
            $this->db->query("SET @persona_id = $id");
            return $id;
        }

        // If it doesn't exist, we will insert the person

        $this->db->query("INSERT INTO personas_datos(nombres
            , apellido_paterno
            , apellido_materno
            , numero_documento
            , fecha_nacimiento
            , sexo)
        VALUES ('$nombres'
            , '$apellido_paterno'
            , '$apellido_materno'
            , '$numero_documento'
            , '$fecha_nacimiento'
            , '$sexo'
        );");

        $this->db->query("SET @persona_id = LAST_INSERT_ID();");
        $persona_id = $this->db->query("SELECT @persona_id AS id;");
        $persona_id = $persona_id->getRow();
        $persona_id = $persona_id->id;
        return $persona_id;

    }

    function registerDatosPersonales($data) {
        
        // FORM DATOS PERSONALES
        $raza = $data["raza"] ;
        $talla = $data["talla"];
        $peso = $data["peso"];
        $numero_telefono = $data["numero_telefono"];
        $direccion_id = "";
        $es_migrante = $data["es_migrante"];
        $pais_origen = $es_migrante == "no" ? NULL : $data["pais_origen"];

        $this->db->query("INSERT INTO forms_personas_datos (raza
            , talla
            , peso
            ,numero_telefono
            ,direccion_id
            ,es_migrante
            ,pais_origen
            , persona_id)
        VALUES ('$raza'
            , $talla
            , $peso
            , '$numero_telefono'
            , @direccion_id
            , '$es_migrante'
            , (SELECT Id FROM countries WHERE `name` = '$pais_origen')
            , @persona_id
        );");

        $this->db->query("SET @personal_data_id = LAST_INSERT_ID();");
        $personal_data_id = $this->db->query("SELECT @personal_data_id AS id");
        $personal_data_id = $personal_data_id->getRow();
        $personal_data_id = $personal_data_id->id;
        return $personal_data_id;

    }

    public function registerSintomatologico($data) {
        // SINTOMATOLOGICO
        $fiebre = $data["ultimos_sintomas-1"];
        $perdida_gusto = $data["ultimos_sintomas-2"];
        $perdida_olfato = $data["ultimos_sintomas-3"];
        $dificultad_respirar = $data["ultimos_sintomas-4"];
        $expectoracion = $data["ultimos_sintomas-5"];
        $malestar_general = $data["ultimos_sintomas-6"];
        $diarrea = $data["ultimos_sintomas-7"];
        $nauseas_vomitos = $data["ultimos_sintomas-8"];
        $contacto_covid19 = $data["ultimos_sintomas-9"];
        $tomando_medicina = $data["ultimos_sintomas-10"];
        $medicinas = $data["ultimas_medicinas"];
        $factores_rzg = json_encode($data["factores-rzg"]);

        $query_string = <<< QS
        INSERT INTO forms_sintomatologico (pregunta_1
            , fiebre
            , perdida_gusto
            , perdida_olfato
            , dificultad_respirar
            , expectoracion
            , malestar_general
            , diarrea
            , nauseas_vomitos
            , contacto_covid19
            , tomando_medicina
            , medicinas)
        VALUES('$factores_rzg'
            , '$fiebre'
            , '$perdida_gusto'
            , '$perdida_olfato'
            , '$dificultad_respirar'
            , '$expectoracion'
            , '$malestar_general'
            , '$diarrea'
            , '$nauseas_vomitos'
            , '$contacto_covid19'
            , '$tomando_medicina'
            , '$medicinas'
        );
        QS;

        $this->db->query($query_string);
        $this->db->query("SET @sintomatologico_id = last_insert_id();");
        $sintomatologico_id = $this->db->query("SELECT @sintomatologico_id AS id;");
        $sintomatologico_id = $sintomatologico_id->getRow();
        $sintomatologico_id = $sintomatologico_id->id;
        return $sintomatologico_id;
    }

    public function registerAntecedentesEyP($data) {
        // ANTECEDENTES EPIDEMIOLOGICOS Y PATOLOGICOS
        $inicio_aislamiento = $data["inicio_aislamiento-date"];
        $inicio_sintomas = $data["inicio_sintomas-date"];
        $es_asintomatico = $data["asintomatico"];
        $lp_infeccion_dep = $data["lp_infeccion-departamento"];
        $lp_infeccion_prov = $data["lp_infeccion-provincia"];
        $lp_infeccion_distr = $data["lp_infeccion-distrito"];
        $sintomas = json_encode($data["sintomas"]);
        $signos = json_encode($data["signos"]);
        $c_comorbilidad = json_encode($data["condiciones_comorbilidad"]);
        $cumplimiento_embarazo = $data["fc_embarazo"];
        $ocupacion = $data["ocupacion"];
        $lugar_trabajo_ipress = $data["trabajo-lugar-ipress"];
        $lt_direccion_dep = $data["trabajo-lugar-departamento"];
        $lt_direccion_prov = $data["trabajo-lugar-provincia"];
        $lt_direccion_distr = $data["trabajo-lugar-distrito"];
        $contacto_directo = $data["ultContacto"];
        $contacto_directo_entorno = $data["entorno-contacto"];



        $query_string_2 = <<< QS
        INSERT INTO forms_antecedentes_eyp (inicio_aislamiento
            , inicio_sintomas
            , es_asintomatico
            , lugar_prob_infeccion
            , sintomas
            , signos
            , c_comorbilidad
            , cumplimiento_embarazo
            , ocupacion
            , lugar_trabajo_ipress
            , lugar_trabajo_direccion
            , contacto_directo
            , contacto_directo_entorno)
        VALUES ( "$inicio_aislamiento"
            , "$inicio_sintomas"
            , "$es_asintomatico"
            , (SELECT dis.id 
            FROM ubigeo_peru_districts dis 
                INNER JOIN ubigeo_peru_provinces p 
                    ON p.id = dis.province_id 
                INNER JOIN ubigeo_peru_departments dep
                    ON dep.id = dis.department_id 
            WHERE dis.`name` = "$lp_infeccion_distr"
                AND dep.`name` = "$lp_infeccion_dep"
                AND p.`name` = "$lp_infeccion_prov")
            , '$sintomas'
            , '$signos'
            , '$c_comorbilidad'
            , "$cumplimiento_embarazo"
            , "$ocupacion"
            , "$lugar_trabajo_ipress"
            , (SELECT dis.id 
            FROM ubigeo_peru_districts dis 
                INNER JOIN ubigeo_peru_provinces p 
                    ON p.id = dis.province_id 
                INNER JOIN ubigeo_peru_departments dep
                    ON dep.id = dis.department_id 
            WHERE dis.`name` = "$lt_direccion_distr"
                AND dep.`name` = "$lt_direccion_dep"
                AND p.`name` = "$lt_direccion_prov") 
            , "$contacto_directo"
            , "$contacto_directo_entorno"
        );

        QS;
        
        $this->db->query($query_string_2);
        $this->db->query("SET @antecedentes_eyp_id = LAST_INSERT_ID();");
        $antecedentes_qyp_id = $this->db->query("SELECT @antecedentes_eyp_id AS id;");
        $antecedentes_qyp_id = $antecedentes_qyp_id->getRow();
        $antecedentes_qyp_id = $antecedentes_qyp_id->id;
        return $antecedentes_qyp_id;
    }

    public function registerAll() {
        $this->db->query("INSERT INTO forms_respuestas (datos_personales_id
            , empresa_id
            , antecedentes_EyP_id
            , sintomatologia_covid19_id
        )
        VALUES ( @personal_data_id
            , @empresa_id 
            , @antecedentes_eyp_id 
            , @sintomatologico_id
        );");

        $id = $this->db->query("SELECT LAST_INSERT_ID() AS lastId;");
        $id = $id->getRow();
        $id = $id->lastId;
        return $id;
    }
}