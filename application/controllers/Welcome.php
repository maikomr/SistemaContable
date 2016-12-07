<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	 function __construct(){
            parent::__construct(); 
            $this->load->model('LoginModel');
        }
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/welcome');
		$this->load->view('templates/footer');

		if ($this->input->post('ingresar')) {
				$data= array(
					'usuario'=> $this->LoginModel->loggin()
					);
				if ( $data === "") {
					$this->load->view('http://sistema-contable/index.php/libro-diario');
				}
			}	
	}
}
