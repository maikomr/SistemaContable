<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class LibroDiario extends CI_CONTROLLER
    {
        function __construct(){
            parent::__construct(); 
            $this->load->model('libro_diario');
        }

        public function view($page = 'index')
        {
            if (!file_exists(APPPATH.'views/pages/libro-diario/'.$page.'.php')) {
                // we don't have a page for that
                echo 'no existe',$page;
                show_404();
            } else {
                // load the page
                $data= array('detalle'=> $this->libro_diario->getAccount());
                $this->load->view('pages/libro-diario/'.$page, $data);
            }
        }

        public function addAccount() {
            if ($this->input->post('guardar')) {
                $this->libro_diario->addAccount();
                redirect('libro-diario/index');
            }
        }
    }
?>