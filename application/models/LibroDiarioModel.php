<?php
class LibroDiarioModel extends CI_Model
{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function addAccount(){
		$data= array(
					'account'=>$this->input->post('cuenta'),
					'date'=>$this->input->post('fecha'),
					'payrate'=>$this->input->post('saldo'),
					'type'=>$this->input->post('tipoTransaccion')
					);
		$this->db->insert('transaction', $data);
	}
	public function getAllTransactions(){
		$query = $this->db->get('transaction');
		return $query->result();
	}
}

?>