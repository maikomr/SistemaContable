<?php
class Libro_diario extends CI_Model
{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function addAccount(){
		$data= array(
					'account'=>$this->input->post('cuenta'),
					'date'=>$this->input->post('fecha'), 
					'payrate'=>$this->input->post('saldo')
					);
		$this->db->insert('transaction', $data);
	}
}

?>