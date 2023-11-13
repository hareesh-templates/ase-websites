<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry_Form extends CI_Controller {

	function __construct(){
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
          if($this->input->post('postSubmit')){
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('mobile', 'Mobile', 'required');
            $this->form_validation->set_rules('flat', 'Flat', 'required');
            $this->form_validation->set_rules('location', 'Location', 'required');
            $this->form_validation->set_rules('budget', 'Budget', 'required');
             $postData = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'flat' => $this->input->post('flat'),
                'location' => $this->input->post('location'),
                'budget' => $this->input->post('budget'),
                'added_on' => date('d-m-Y')
            );
            
            if($this->form_validation->run() == true){
                $insert = $this->user->enquiry_form($postData);

                if($insert){
                    $data['success_msg'] = 'Thank you..We will get in touch with you shortly...';
                }else{
                    $data['error_msg'] = 'Some problems occurred, please try again.';
                }
            }
        }
        
        $data['post'] = $postData;


		$this->load->view('Enquiry_Form', $data);
		$this->load->view('footer');
	}
}