<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BalanceSumasSaldos extends CI_CONTROLLER
{
    function __construct() {
        parent::__construct(); 
        $this->load->model('BalanceSumasSaldosModel');
    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('balance-sumas-saldos/index');
        $this->load->view('templates/footer');
    }
}
?>