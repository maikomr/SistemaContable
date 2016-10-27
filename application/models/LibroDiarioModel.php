<?php
class LibroDiarioModel extends CI_Model
{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function registerTransaction(){
		$data= array(
			'account'=>$this->input->post('cuenta'),
			'date'=>$this->input->post('fecha'),
			'type'=>$this->input->post('tipoTransaccion'),
			'payrate'=>$this->input->post('asientoContable'),
		);
		return $this->db->insert('transaction', $data);
	}
	
	public function getAllTransactions(){
		$query = $this->db->get('transaction');
		return $query->result();
	}
}

?>