<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Careers extends CI_Controller {

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
		 $data = array();
		 
        $postData = array();
         if($this->session->userdata('success_msg')){
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if($this->session->userdata('error_msg')){
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }
        if($this->input->post('postSubmit')){
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('phno', 'Phone Number', 'required');
            
              $config['upload_path'] = 'uploads/resumes/';
                $config['allowed_types'] = 'doc|docx|pdf|xlsx';
                $config['file_name'] = $_FILES['resume']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('resume')){
                    $uploadData = $this->upload->data();
                    $resume = $uploadData['file_name'];
                }else{
                    $resume = '';
                }

            $postData = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'phno' => $this->input->post('phno'),
                'content' => $this->input->post('content'),
                'applied_on' => date("d-m-Y"),
                'resume' => $resume
            );
            
            if($this->form_validation->run() == true){
                $insert = $this->user->careers($postData);

                if($insert){
                    $data['success_msg'] = 'Resume has been uploaded successfully.';
                 
                }else{
                	$data['error_msg'] = 'Error';
                }
            }


        }
		$this->load->view('careers',$data);
		$this->load->view('footer');
	}

	
}
