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
		$this->db->order_by('name');
		$query = $this->db->get('accounts');
		
		if ($query->num_rows() > 0) {
            return $query->result();
        } else {
        	return false;
        }
	}

	public function getAccountName($id) {
		$this->db->select('name');
		$this->db->from('accounts');
		$this->db->where('id',$id);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
            return $query->result()[0]->name;
        } else {
        	return false;
        }
	}

	public function getDebit($id) {
		$this->db->select('payrate');
		$this->db->from('transaction');
		$this->db->where('accountId',$id);
		$this->db->where('type','DEBE');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
            return $query->result();
        } else {
        	return false;
        }
	}

	public function getCredit($id) {
		$this->db->select('payrate');
		$this->db->from('transaction');
		$this->db->where('accountId',$id);
		$this->db->where('type','HABER');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
            return $query->result();
        } else {
        	return false;
        }
	}
	
	public function getSumOfAllAccount($type){
		if($type == 'HABER'){
			$this->db->select_sum('payrate');
			$this->db->select('account');
			$this->db->from('transaction');
			$this->db->where('type',$type);
			$this->db->group_by('account');
			$query = $this->db->get();
		}else{
			if($type == 'DEBE'){
				$this->db->select_sum('payrate');
				$this->db->select('account');
				$this->db->from('transaction');
				$this->db->where('type',$type);
				$this->db->group_by('account');
				$query = $this->db->get();
			}
		}
		if($query->num_rows() > 0 )
        {
            return $query->result();
        }

	
	}
}

?>