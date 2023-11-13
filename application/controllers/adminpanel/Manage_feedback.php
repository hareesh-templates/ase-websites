<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
 
class Manage_feedback extends CI_Controller { 
     
    function __construct() { 
        parent::__construct(); 
         
        $this->load->helper('form'); 
        $this->load->library('form_validation'); 
        $this->load->model('property'); 
        $this->load->model('feedback'); 
        $this->controller = 'manage_feedback'; 
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
    
    public function index(){ 
        $data = array(); 
        
       
          $con = array( 
                'id' => $this->session->userdata('id'), 
            );
           $data['user'] = $this->user->getRows($con); 
         if($data['user']['admin_type'] == 'dealer' || $data['user']['admin_type'] == 'superadmin'){
         $this->loggedin();
        if($this->session->userdata('success_msg')){ 
            $data['success_msg'] = $this->session->userdata('success_msg'); 
            $this->session->unset_userdata('success_msg'); 
        } 
        if($this->session->userdata('error_msg')){ 
            $data['error_msg'] = $this->session->userdata('error_msg'); 
            $this->session->unset_userdata('error_msg'); 
        } 
 
        $data['property'] = $this->feedback->getRows(); 
          $data['status'] = 'All';
        // Load the list page view 
        $this->load->view('adminpanel/manage_feedback/index', $data); 
         $this->load->view('adminpanel/footer');
        } else{
            echo 'This Page access for only Dealers.';
        }
    } 


     public function feedbackresult(){ 
        $data = array(); 
        
       
          $con = array( 
                'id' => $this->session->userdata('id'), 
            );
           $data['user'] = $this->user->getRows($con); 
         if($data['user']['admin_type'] == 'dealer' || $data['user']['admin_type'] == 'superadmin'){
         $this->loggedin();
        if($this->session->userdata('success_msg')){ 
            $data['success_msg'] = $this->session->userdata('success_msg'); 
            $this->session->unset_userdata('success_msg'); 
        } 
        if($this->session->userdata('error_msg')){ 
            $data['error_msg'] = $this->session->userdata('error_msg'); 
            $this->session->unset_userdata('error_msg'); 
        } 
 
        $data['property'] = $this->feedback->getRows_feedbak(); 
          $data['status'] = 'All';
        // Load the list page view 
        $this->load->view('adminpanel/manage_feedback/feedbackresult', $data); 
         $this->load->view('adminpanel/footer');
        } else{
            echo 'This Page access for only Dealers.';
        }
    } 
     
    public function view($id){
        $data = array(); 
        
          $con = array( 
                'id' => $this->session->userdata('id'), 
            );
         $data['user'] = $this->user->getRows($con); 
         $this->loggedin();
                // Check whether id is not empty 
                if(!empty($id)){ 
                    $data['property'] = $this->feedback->getRows($id); 
                    // Load the details page view 
                    $this->load->view('adminpanel/manage_feedback/view', $data); 
                    $this->load->view('adminpanel/footer'); 
                }else{ 
                    redirect($this->controller); 
                }
         
    } 
     
    public function add(){ 
         $this->loggedin();
        $data = $propertydata = array(); 
        $errorUpload = ''; 
        // If add request is submitted 
        if($this->input->post('imgSubmit')){ 
            // Form field validation rules 
            $this->form_validation->set_rules('name', 'Name', 'required'); 
            $this->form_validation->set_rules('email', 'Email', 'required'); 
            $this->form_validation->set_rules('mobile', 'Mobile', 'required'); 
           
            $propertydata = array( 
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'), 
                'mobile' => $this->input->post('mobile')
            ); 

            // Validate submitted form data 
            if($this->form_validation->run() == true){ 
                // Insert gallery data 
                $insert = $this->feedback->insert($propertydata); 
                $galleryID = $insert;  
                 
                if($insert){ 
                     $this->session->set_userdata('success_msg', 'Feedback User has been added successfully.'.$errorUpload); 
                    redirect('adminpanel/'.$this->controller); 
                }else{ 
                    $data['error_msg'] = 'Some problems occurred, please try again.'; 
                } 
            } 
        } 
         
        $data['property'] = $propertydata; 
        $data['title'] = 'Create Property'; 
        $data['action'] = 'Add'; 
         
        // Load the add page view 
       $this->load->view('adminpanel/manage_feedback/add-edit', $data);
        $this->load->view('adminpanel/footer'); 
    } 
     
    public function edit($id){ 
        
          $con = array( 
                'id' => $this->session->userdata('id'), 
            );
           $data['user'] = $this->user->getRows($con);          
        $data = $propertydata = array(); 
        $propertydata = $this->feedback->getRows($id); 
        // If update request is submitted 
        $this->loggedin();
        if($this->input->post('imgSubmit')){ 
            // Form field validation rules 
             $this->form_validation->set_rules('name', 'Name', 'required'); 
            $this->form_validation->set_rules('email', 'Email', 'required'); 
            $this->form_validation->set_rules('mobile', 'Mobile', 'required'); 
           
            $propertydata = array( 
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'), 
                'mobile' => $this->input->post('mobile')
            ); 
             
            // Validate submitted form data 
            if($this->form_validation->run() == true){ 
                // Update Property data 
                $update = $this->feedback->update($propertydata, $id); 
 
                if($update){  
                    $this->session->set_userdata('success_msg', 'Feedback User has been updated successfully.'.$errorUpload); 
                    redirect('adminpanel/'.$this->controller); 
                }else{ 
                    $data['error_msg'] = 'Some problems occurred, please try again.'; 
                } 
            } 
        } 
 
         
        $data['property'] = $propertydata; 
        $data['title'] = 'Update Property'; 
        $data['action'] = 'Edit'; 
         
        // Load the edit page view 
        $this->load->view('adminpanel/manage_feedback/add-edit', $data); 
        $this->load->view('adminpanel/footer'); 
    
    } 
   
     
    public function delete($id){ 
        // Check whether id is not empty 
        if($id){ 
            $propertydata = $this->feedback->getRows($id); 
             
            // Delete gallery data 
            $delete = $this->feedback->delete($id); 
             
            if($delete){ 
                
                $this->session->set_userdata('success_msg', 'Feedback User has been removed successfully.'); 
            }else{ 
                $this->session->set_userdata('error_msg', 'Some problems occurred, please try again.'); 
            } 
        } 
 
        redirect('adminpanel/'.$this->controller); 
    } 

     public function delete_other_images($id){ 
        if($id){ 
            $delete = $this->event->delete_other_images($id); 
            if($delete){ 
                $this->session->set_userdata('success_msg', 'Evnet images has been removed successfully.'); 
            }else{ 
                $this->session->set_userdata('error_msg', 'Some problems occurred, please try again.'); 
            } 
        } 
 
        redirect('adminpanel/'.$this->controller); 
    } 
     
    public function deleteImage(){ 
        $status  = 'err';  
        // If post request is submitted via ajax 
        if($this->input->post('id')){ 
            $id = $this->input->post('id'); 
            $imgData = $this->gallery->getImgRow($id); 
             
            // Delete image data 
            $con = array('id' => $id); 
            $delete = $this->gallery->deleteImage($con); 
             
            if($delete){ 
                // Remove files from the server  
                @unlink('uploads/images/'.$imgData['file_name']);  
                $status = 'ok';  
            } 
        } 
        echo $status;die;  
    } 
}