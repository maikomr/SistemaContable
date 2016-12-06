<?php
class BalanceSumasSaldosModel extends CI_Model
{
    function __construct(){
        parent::__construct();
        $this->load->database();
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
}
?>