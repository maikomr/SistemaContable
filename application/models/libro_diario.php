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
					'payrate'=>$this->input->post('saldo'),
					'type'=>$this->input->post('tipoTransaccion')
					);
		$this->db->insert('transaction', $data);
	}
	public function getAccount(){
		$consulta= $this->db->query('Select * from transaction');
		//$consulta= $this ->db->get('transaction');
		return $consulta->result();
	}
}

?>