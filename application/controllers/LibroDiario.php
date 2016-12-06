<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class LibroDiario extends CI_CONTROLLER
    {
        function __construct(){
            parent::__construct(); 
            $this->load->model('LibroDiarioModel');
            $this->load->helper('url');
        }

        public function index()
        {
            $data['transactions'] = $this->LibroDiarioModel->getAllTransactions();

            // calculate total debit and total credit
            $transactions = $data['transactions'];
            $totalDebit = 0;
            $totalCredit = 0;                
            foreach ($transactions as $transaction) {
                if($transaction->type == 'DEBE') {
                    $totalDebit += $transaction->payrate;
                } else if($transaction->type == 'HABER') {
                    $totalCredit += $transaction->payrate;
                }
            }
            $data['totalDebit'] = $totalDebit;
            $data['totalCredit'] = $totalCredit;

            if ($totalDebit == $totalCredit) {
                $data['comprobacionTotales'] = 'iguales';
            } else {
                $data['comprobacionTotales'] = 'distintos';
            }

            $this->load->view('templates/header');
            $this->load->view('libro-diario/index', $data);
            $this->load->view('templates/footer');
        }

        public function registrar()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $this->form_validation->set_rules('cuenta', 'Cuenta corriente', 'required');
            $this->form_validation->set_rules('fecha', 'Fecha', 'required');
            $this->form_validation->set_rules('tipoTransaccion', 'Tipo de transaccion', 'required');
            $this->form_validation->set_rules('asientoContable', 'Asiento contable', 'required');

            if ($this->form_validation->run() === FALSE) {
                $this->load->view('templates/header');
                $this->load->view('libro-diario/registrar');
                $this->load->view('templates/footer');
            } else {
                $this->LibroDiarioModel->registerTransaction();
                redirect('http://sistema-contable/index.php/libro-diario');
            }
        }
    }
?>