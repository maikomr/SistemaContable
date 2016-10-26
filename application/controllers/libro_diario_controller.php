<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Libro_diario_controller extends CI_Controller {
	function __construct(){
		parent::__construct(); 
		$this->load->model('libro_diario');
	}

	public function index()
	{
		$this->load->view('libro_diario/registrarTransaccion');
	}
	public function addAccount(){
		$this->load->view('libro_diario/registrarTransaccion');
		if ($this->input->post('guardar')) {
				$this->libro_diario->addAccount();
				redirect(base_url().'libro_diario_controller/guardado');
			}	
	}
	public function guardado(){
		echo "se guardo con exito :)";
	}

}
