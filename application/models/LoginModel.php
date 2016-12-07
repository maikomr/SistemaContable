<?php
class LoginModel extends CI_Model
{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function loggin(){
		$loginUsuario = $this->input->post('usuario');
		$loginContrasena = $this->input->post('contrasena');

		//$query = $this->db->query('SELECT U.login FROM usuario U WHERE U.login= $loginUsuario and U.password = '$loginContrasena'');
		//return $query->result();
		$this->db->select('login');
		$this->db->from('usuario');
		$this->db->where('login',$loginUsuario);
		$this->db->where('password',$loginContrasena);
		
	}
	
}

?>