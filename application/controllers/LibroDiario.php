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
                $data= array('transactions'=> $this->LibroDiarioModel->getAllTransactions());
                
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