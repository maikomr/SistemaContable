<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class LibroDiario extends CI_CONTROLLER
    {
        function __construct(){
            parent::__construct(); 
            $this->load->model('LibroDiarioModel');
        }

        public function view($page = 'index')
        {
            if (!file_exists(APPPATH.'views/pages/libro-diario/'.$page.'.php')) {
                // we don't have a page for that
                show_404();
            } else {
                // load the page
                $data= array('detalle'=> $this->LibroDiarioModel->getAccount());
                $this->load->view('pages/libro-diario/'.$page, $data);
            }
        }

        public function addAccount() {
            if ($this->input->post('guardar')) {
                $this->LibroDiarioModel->addAccount();
                redirect('libro-diario/index');
            }
        }
    }
?>