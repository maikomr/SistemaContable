<?php
class LibroMayorModel extends CI_Model
{
	function __construct(){
		parent::__construct();
		$this->load->database();
		
	}
	public function getAllTransactions(){
		$query = $this->db->get('transaction');
		return $query->result();
	}

	public function getAllAccounts(){
		$this->db->distinct();
		$this->db->group_by('account');
		$query = $this->db->get('transaction');

		
		if($query->num_rows() > 0 )
        {
            return $query->result();
        }

	}
}

?>