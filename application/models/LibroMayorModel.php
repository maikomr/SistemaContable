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