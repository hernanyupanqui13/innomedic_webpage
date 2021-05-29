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
		$data = $this->request->getPost();
		$this->model->registerAnswers($data);
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

	public function getFullResultsById($id) {

		echo json_encode($this->model->getFullResultsById($id));
	}


	public function QRcode($token) {
		$urlRedirection = "http://intranet.innomedic.pe/";
		$url = "https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=$urlRedirection%2F&choe=UTF-8";
		$data = array("url"=>$url);

		echo view('formularios/qrResult', $data);

	}
}
	