<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lighting_diyas extends CI_Controller {

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
            $success_msg = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if($this->session->userdata('error_msg')){
            $error_msg = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }
        if($this->input->post('upload_pic')){
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('mobile', 'Mobile', 'required');
            $this->form_validation->set_rules('customer_type', 'Customer Type', 'required');

             if(!empty($_FILES['pic']['name'])){
                $config['upload_path'] = 'uploads/selfie_pic/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['pic']['name'];
                
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('pic')){
                    $uploadData = $this->upload->data();
                    $pic = $uploadData['file_name'];
                }else{
                    $pic = '';
                }
            }else{
                $pic = '';
            }
            
            $project_name = $this->input->post('project_name');
            $flat_number = $this->input->post('flat_number');
            $wish_to_buy_a_property = $this->input->post('wish_to_buy_a_property');
            $area = $this->input->post('area');
            $flat = $this->input->post('flat');
            $budget = $this->input->post('budget');

            if($project_name == ''){
               $project_name = '-'; 
            }else{
                $project_name = $this->input->post('project_name');; 
            }
            if($flat_number == ''){
               $flat_number = '-'; 
            }else{
                $flat_number = $this->input->post('flat_number');; 
            }
            if($wish_to_buy_a_property == ''){
               $wish_to_buy_a_property = '-'; 
            }else{
                $wish_to_buy_a_property = $this->input->post('wish_to_buy_a_property');; 
            }
            if($area == ''){
               $area = '-'; 
            }else{
                $area = $this->input->post('area');; 
            }
            if($flat == ''){
               $flat = '-'; 
            }else{
                $flat = $this->input->post('flat');; 
            }
            if($budget == ''){
               $budget = '-'; 
            }else{
                $budget = $this->input->post('budget');; 
            }

            $postData = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'customer_type' => $this->input->post('customer_type'),
                'contest' => $this->input->post('contest'),
                'pic' => $pic,
                'project_name' => $project_name,
                'flat_number' => $flat_number,
                'wish_to_buy_a_property' => $wish_to_buy_a_property,
                'area' => $area,
                'flat' => $flat,
                'budget' => $budget,
                'added_on' => date('d-m-Y')
            );
            if($this->form_validation->run() == true){
                  //echo '<pre>'; print_r($postData); die();
                $insert = $this->user->selfie_pic($postData);

                if($insert){
                    echo '<script language="javascript">';
                    echo 'alert("Your Selfie has been uploaded successfully.")';
                    echo '</script>';
                 
                }else{
                   echo '<p>Error</p>';
                }
            }
        }

		$this->load->view('selfie_navaratri');
		$this->load->view('footer');
	}
}
