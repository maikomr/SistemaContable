<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class LibroMayor extends CI_CONTROLLER
    {
    	function __construct(){
    		parent::__construct(); 
            $this->load->model('LibroMayorModel');
            $this->load->helper('url');
            $this->load->database();
            
    	}
    	public function index()
        {
            $data['transactions'] = $this->LibroMayorModel->getAllTransactions();


            $data['accounts'] = $this->LibroMayorModel->getAllAccounts();
            $accounts = $data['accounts'];

            $data['arrayDebeSuma'] = $this->LibroMayorModel->getSumOfAllAccount('DEBE');
            $data['arrayHaberSuma'] = $this->LibroMayorModel->getSumOfAllAccount('HABER');

            $this->load->view('templates/header');
            $this->load->view('libro-mayor/index',$data);
            $this->load->view('templates/footer');
        }


    }
?>