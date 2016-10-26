<?php
    class LibroDiario extends CI_CONTROLLER
    {
        public function view($page = 'index')
        {
            if (!file_exists(APPPATH.'views/pages/libro-diario/'.$page.'.php')) {
                // we don't have a page for that
                echo 'no existe',$page;
                show_404();
            } else {
                // load the page
                $this->load->view('pages/libro-diario/'.$page);
            }
        }
    }
?>