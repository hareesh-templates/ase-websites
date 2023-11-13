<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() { 
        parent::__construct(); 
        $this->load->library('form_validation'); 
        $this->load->model('user'); 
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 
    } 
    public function loggedin(){
        if($this->isUserLoggedIn){ 
            $con = array( 
                'id' => $this->session->userdata('id'), 
            ); 
            $data['user'] = $this->user->getRows($con); 
        $this->load->view('adminpanel/header', $data);
        }else{ 
                redirect('adminpanel/login/eswarihomes'); 
            } 
    }
	public function index()
	{
		    $data = array(); 
            $this->loggedin();
            $this->load->view('adminpanel/home', $data); 
            $this->load->view('adminpanel/footer', $data); 
	}

	public function logout(){ 
        $this->session->unset_userdata('isUserLoggedIn'); 
        $this->session->unset_userdata('id'); 
        $this->session->sess_destroy(); 
        redirect('adminpanel/login/eswarihomes'); 
    } 
	
}
