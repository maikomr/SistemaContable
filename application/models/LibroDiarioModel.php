<?php
class LibroDiarioModel extends CI_Model
{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function registerTransaction(){
		$accountName = $this->input->post('cuenta');
		$accountId;
		$this->db->trans_start();
		$this->db->select('id');
		$this->db->from('accounts');
		$this->db->where('name', $accountName);
		$query = $this->db->get();
		if ($query->num_rows() != 0) {
			$accountId = $query->result_array()[0]['id'];
		} else {
			$account = array('name'=>$accountName);
			$this->db->insert('accounts', $account);
			$accountId = $this->db->insert_id();
		}
		$transaction = array(
			'date'=>$this->input->post('fecha'),
			'type'=>$this->input->post('tipoTransaccion'),
			'payrate'=>$this->input->post('asientoContable'),
			'accountId'=>$accountId,
		);
		$result = $this->db->insert('transaction', $transaction);
		$this->db->trans_complete();
		return $result;
	}
	
	public function getAllTransactions(){
		$query = $this->db->query('SELECT A.name as account, T.idTransaction, T.date, T.type, T.payrate FROM accounts A, transaction T WHERE A.id = T.accountId ORDER BY idTransaction');
		return $query->result();
	}

	public function getAccount($id) {
		$this->db->select('*');
		$this->db->from('accounts');
		$this->db->where('id', $id);
		return $this->db->get();
	}
}

?>