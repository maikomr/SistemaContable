<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class LibroMayor extends CI_CONTROLLER
    {
    	function __construct(){
    		parent::__construct(); 
            $this->load->model('LibroMayorModel');
            $this->load->helper('url');
    	}

    	public function index()
        {
            $data['accounts'] = $this->LibroMayorModel->getAllAccounts();
            $this->load->view('templates/header');
            $this->load->view('libro-mayor/index',$data);
            $this->load->view('templates/footer');
        }

        public function verLibroMayor($id)
        {
            // $data['libroMayor'] = $this->LibroMayorModel->getLibroMayor($id);
            $data['id'] = $id;
            $this->load->view('templates/header');
            $this->load->view('libro-mayor/libro-mayor',$data);
            $this->load->view('templates/footer');
        }
    }
?>