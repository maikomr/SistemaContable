<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller
{
	 function __construct(){
        parent::__construct();
        $this->load->library('session');
    }

	public function index()
	{
		if( $this->session->userdata('isLoggedIn')) {
	        $this->load->view('templates/header');
			$this->load->view('pages/welcome');
			$this->load->view('templates/footer');
	    } else {
	    	$this->show_login(false);
	    }
	}

	function show_login( $show_error = false ) {
	    $data['error'] = $show_error;

	    $this->load->helper('form');
	    $this->load->view('templates/header', $data);
		$this->load->view('pages/welcome');
		$this->load->view('templates/footer');
	}

	function login_user() {
        // Create an instance of the user model
        $this->load->model('UserModel');
        // Grab the username and password from the form POST
        $username = $this->input->post('username');
        $password  = $this->input->post('password');
        //Ensure values exist for username and password, and validate the user's credentials
        if( $username && $password && $this->UserModel->validate_user($username,$password)) {
            // If the user is valid, make the menu available to the user
            $this->load->view('templates/header');
			$this->load->view('pages/welcome');
			$this->load->view('templates/footer');
        } else {
            // Otherwise show an error message.
            $this->show_login(true);
        }
    }

    function logout_user() {
      $this->session->sess_destroy();
      redirect('http://sistema-contable/index.php/');
    }
}
