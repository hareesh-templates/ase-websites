<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('form_validation'); 
        $this->load->model('user'); 
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 
	}

	
	public function eswarihomes()
	{
		 $data = array(); 
         
        // Get messages from the session 
        if($this->session->userdata('success_msg')){ 
            $data['success_msg'] = $this->session->userdata('success_msg'); 
            $this->session->unset_userdata('success_msg'); 
        } 
        if($this->session->userdata('error_msg')){ 
            $data['error_msg'] = $this->session->userdata('error_msg'); 
            $this->session->unset_userdata('error_msg'); 
        } 
         
        // If login request submitted 
        if($this->input->post('loginSubmit')){ 
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email'); 
            $this->form_validation->set_rules('password', 'password', 'required'); 
             
           if($this->form_validation->run() == true){ 
                $con = array( 
                    'returnType' => 'single', 
                    'conditions' => array( 
                        'admin_email'=> $this->input->post('email'), 
                        'admin_password' => $this->input->post('password'), 
                       // 'admin_type' => 'superadmin',
                        'status' => 1 
                    ) 
                ); 
                $checkLogin = $this->user->getRows($con);
                if($checkLogin){ 
                    $this->session->set_userdata('isUserLoggedIn', TRUE); 
                    $this->session->set_userdata('id', $checkLogin['id']); 
                    redirect('adminpanel/home'); 
                }else{
                	echo 'Wrong email or password, please try again.';
                    $data['error_msg'] = 'Wrong Email or Password, please try again.'; 
                } 
            }
            else{ 
                $data['error_msg'] = 'Please fill all the mandatory fields.'; 
            } 
        } 
		$this->load->view('adminpanel/eswarihomeslogin');
	}
   
    public function register(){
        $data = $userData = array(); 
         
        // If registration request is submitted 
        if($this->input->post('signupSubmit')){ 
            $this->form_validation->set_rules('admin_firstname', 'First Name', 'required'); 
            $this->form_validation->set_rules('admin_lastname', 'Last Name', 'required'); 
            $this->form_validation->set_rules('admin_email', 'Email', 'required|valid_email|callback_email_check'); 
            $this->form_validation->set_rules('admin_pwd', 'password', 'required'); 
            $this->form_validation->set_rules('admin_mobile', 'Mobile', 'required'); 
            $this->form_validation->set_rules('admin_area', 'Area', 'required'); 
            $this->form_validation->set_rules('admin_city', 'City', 'required'); 
            $this->form_validation->set_rules('admin_district', 'District', 'required'); 
            $this->form_validation->set_rules('admin_state', 'state', 'required'); 
            $this->form_validation->set_rules('admin_pincode', 'Pincode', 'required'); 
            $this->form_validation->set_rules('admin_company', 'Company', 'required'); 
           // $this->form_validation->set_rules('conf_password', 'confirm password', 'required|matches[password]'); 
 
            $userData = array( 
                'admin_firstname' => strip_tags($this->input->post('admin_firstname')), 
                'admin_lastname' => strip_tags($this->input->post('admin_lastname')), 
                'admin_email' => strip_tags($this->input->post('admin_email')), 
                'admin_pwd' => md5($this->input->post('admin_pwd')), 
                'admin_password' => $this->input->post('admin_pwd'), 
                'admin_mobile' => $this->input->post('admin_mobile'), 
                'admin_area' => $this->input->post('admin_area'), 
                'admin_city' => $this->input->post('admin_city'), 
                'admin_district' => $this->input->post('admin_district'), 
                'admin_state' => $this->input->post('admin_state'), 
                'admin_pincode' => $this->input->post('admin_pincode'), 
                'admin_company' => $this->input->post('admin_company'), 
                'admin_type' => 'dealer', 
            ); 
 
            if($this->form_validation->run() == true){ 
                $insert = $this->user->insert($userData); 
                if($insert){ 
                     
                    $data['success_msg'] = 'Your account registration has been successful.'; 
                }else{ 
                    $data['error_msg'] = 'Some problems occured, please try again.'; 
                } 
            }else{ 
                $data['error_msg'] = 'Please fill all the mandatory fields.'; 
            } 
        } 
         
        // Posted data 
        $data['user'] = $userData; 
          
        $this->load->view('adminpanel/register', $data);
    }

    // Existing email check during validation 
    public function email_check($str){ 
        $con = array( 
            'returnType' => 'count', 
            'conditions' => array( 
                'admin_email' => $str 
            ) 
        ); 
        $checkEmail = $this->user->getRows($con); 
        if($checkEmail > 0){ 
            $this->form_validation->set_message('email_check', 'The given email already exists.'); 
            return FALSE; 
        }else{ 
            return TRUE; 
        } 
    }


}
