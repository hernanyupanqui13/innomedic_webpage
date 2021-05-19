<?php namespace App\Controllers;

use App\Models\FormulariosModel;

class Formularios extends BaseController {
	
	public function __construct()
	{
		$this->model = new FormulariosModel();
	}

	public function index() {
		//$countries = $this->mode->getAllCountries();
		
		return view("formularios/admision-form");		
	}

	public function registerAnswers() {


		echo json_encode($_POST);

		//echo $this->model->registerAnswers();
	}

	public function getAllCountries() {
		echo $this->model->getAllCountries();
	}

	public function getAllDepartments() {
		echo $this->model->getAllDepartments();
	}

	public function getProvincias($department_name) {
		echo $this->model->getProvincias($department_name);
	}

	public function getDistritos($province_name) {
		echo $this->model->getDistritos($province_name); 
	}



}
	