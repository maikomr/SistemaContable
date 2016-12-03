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
            $data['accountName'] = $this->LibroMayorModel->getAccountName($id);
            
            $debit = $this->LibroMayorModel->getDebit($id);
            $credit = $this->LibroMayorModel->getCredit($id);
            
            $totalDebit = 0;
            $totalCredit = 0;
            $saldoDebit = 0;
            $saldoCredit = 0;

            if ($debit != false) {
                foreach ($debit as $transaction) {
                    $totalDebit += $transaction->payrate;
                }
            }
            
            if ($credit != false) {
                foreach ($credit as $transaction) {
                    $totalCredit += $transaction->payrate;
                }
            }
            
            if ($totalDebit > $totalCredit) {
                $saldoDebit = $totalDebit - $totalCredit;
            } else if ($totalCredit > $totalDebit) {
                $saldoCredit = $totalCredit - $totalDebit;
            }

            $data['debit'] = $debit;
            $data['credit'] = $credit;
            $data['totalDebit'] = $totalDebit;
            $data['totalCredit'] = $totalCredit;
            $data['saldoDebit'] = $saldoDebit;
            $data['saldoCredit'] = $saldoCredit;

            $this->load->view('templates/header');
            $this->load->view('libro-mayor/libro-mayor',$data);
            $this->load->view('templates/footer');
        }
    }
?>