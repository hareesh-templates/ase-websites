<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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
    
	public function activeuserslist()
	{
            $this->loggedin();
            $data['adminusers'] = $this->user->userslist('active');
			$this->load->view('adminpanel/activeuserslist', $data);
			$this->load->view('adminpanel/footer', $data);
	}

    public function pendinguserslist()
    {
            $this->loggedin();
            $data['adminusers'] = $this->user->userslist('pending');
            $this->load->view('adminpanel/inactiveuserslist', $data);
            $this->load->view('adminpanel/footer', $data);
    }

    public function agentslist()
    {
            $this->loggedin();
            $data['adminusers'] = $this->user->agentslist('active');
            $this->load->view('adminpanel/agentslist', $data);
            $this->load->view('adminpanel/footer', $data);
    }

    public function dealerview($status, $id){
        $this->loggedin();
        $data = array();
        $data['dealer'] = $this->user->userslist('', $id);
        $this->load->view('adminpanel/dealerview', $data);
        $this->load->view('adminpanel/footer', $data);
        
    }

    public function approvedealer($id){
        $updateData = array(
                'status' => 1
            );
        $approve = $this->user->updatestatus($updateData, $id);

                if($approve){
                    $this->session->set_userdata('success_msg', 'Dealer has been activated successfully.');
                    redirect('adminpanel/users/activeuserslist');
                }else{
                    echo 'Some problems occurred, please try again.';
                }
    }
    public function selfie_navaratri_userslist($contest)
    {
            $this->loggedin();
            $data['users'] = $this->user->selfie_navaratri_userslist($contest);
            $this->load->view('adminpanel/selfie_navaratri_userslist', $data);
            $this->load->view('adminpanel/footer', $data);
    }
    public function selfie_navaatri_user_details($id){
        $this->loggedin();
        $data = array();
        $data['user'] = $this->user->selfie_navaratri_userdetails($id);
        $this->load->view('adminpanel/selfie_navaatri_user_details', $data);
        $this->load->view('adminpanel/footer', $data);
        
    }
    public function enquiry_form_list()
    {
            $this->loggedin();
            $data['users'] = $this->user->enquiry_form_list();
            $this->load->view('adminpanel/enquiry_form_list', $data);
            $this->load->view('adminpanel/footer', $data);
    }
       public function credai_form_list()
    {
            $this->loggedin();
            $data['users'] = $this->user->credai_form_list();
            $this->load->view('adminpanel/credai_form_list', $data);
            $this->load->view('adminpanel/footer', $data);
    }
}
