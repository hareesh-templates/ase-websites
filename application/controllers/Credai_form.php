<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Credai_form extends CI_Controller {

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


public function index(){
    //$this->loggedin();
     $this->load->view('header3');
         $data = array();
         
        $postData = array();
         if($this->session->userdata('success_msg')){
            $success_msg = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if($this->session->userdata('error_msg')){
            $error_msg = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }
        if($this->input->post('upload_pic')){
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('mobile', 'Mobile', 'required');
            $this->form_validation->set_rules('property', 'Property', 'required');
            $this->form_validation->set_rules('location', 'Preffered Location', 'required');
            $this->form_validation->set_rules('budget', 'Budget', 'required');
            $this->form_validation->set_rules('employee', 'Employee Name', 'required');

            $name = $this->input->post('name');
            $mobile = $this->input->post('mobile');
            $property = $this->input->post('property');
            $location = $this->input->post('location');
            $budget = $this->input->post('budget');
            $employee = $this->input->post('employee');

             $postData = array(
                'name' => $this->input->post('name'),
                'property' => $this->input->post('property'),
                'mobile' => $this->input->post('mobile'),
                'location' => $this->input->post('location'),
                'budget' => $this->input->post('budget'),
                'employee' => $this->input->post('employee'),
                'team' => 'Team2',
                'added_on' => date('d-m-Y')
            );
              if($this->form_validation->run() == true){
                $insert = $this->user->credai($postData);

                if($insert){
                    echo '<script language="javascript">';
                    echo 'alert("Thank you.. We will get back to you soon..!")';
                    echo '</script>';
                 
                }else{
                   echo '<p>Error</p>';
                }
            }
        }
        $this->load->view('credai');
       // $this->load->view('footer');
}
}