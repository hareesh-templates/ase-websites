<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() { 
        parent::__construct(); 
        $this->load->library('form_validation'); 
        $this->load->model('emp_user'); 
        $this->load->model('Bookingform'); 
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 
    } 
    public function loggedin(){
        if($this->isUserLoggedIn){ 
            $con = array( 
                'id' => $this->session->userdata('id'), 
            ); 
            $data['user'] = $this->emp_user->getRows($con); 
        $this->load->view('employee-desk/header', $data);
        }else{ 
                redirect('employee-desk/login'); 
            } 
    }
	public function index()
	{
		    $data = array(); 
            $this->loggedin();
           
            $data['emp_dob_date'] = $this->emp_user->emp_dob_date();
            $data['booking_count'] = $this->emp_user->booking_count();
            $data['agreement_count']  = $this->emp_user->agreement_count();
            $data['registeration_count'] = $this->emp_user->registeration_count();
            $data['cancelled_count'] = $this->emp_user->cancelled_count();
            $data['bookings'] = $this->Bookingform->getRowsbookingproject(); 
            $data['booking'] = $this->Bookingform->getRows(); 
            $this->load->view('employee-desk/home', $data); 
            $this->load->view('employee-desk/footer', $data); 
	}

	public function logout(){ 
        $this->session->unset_userdata('isUserLoggedIn'); 
        $this->session->unset_userdata('id'); 
        $this->session->sess_destroy(); 
        redirect('employee-desk/login'); 
    } 
	
}
