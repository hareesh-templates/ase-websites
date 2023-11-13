<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Privacy extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('form_validation'); 
        $this->load->model('user'); 
        $this->load->model('Property'); 
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 
	}
 public function loggedin(){
        if($this->isUserLoggedIn){ 
            $con = array( 
                'id' => $this->session->userdata('id'), 
            ); 
            $data['user'] = $this->user->getRows($con); 
        $this->load->view('header2', $data);
        }else{ 
            $this->load->view('header');
            } 
    }

	public function index()
	{
		$this->loggedin();
		$this->load->view('privacy');
		$this->load->view('footer');
	}
}
