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

            //calculate total debit and total credit
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
            

            $this->load->view('templates/header');
            $this->load->view('libro-mayor/index',$data);
            $this->load->view('templates/footer');
        }

    }
?>