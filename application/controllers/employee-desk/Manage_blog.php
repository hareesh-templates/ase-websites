<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
 
class Manage_blog extends CI_Controller { 
     
    function __construct() { 
        parent::__construct(); 
         
        $this->load->helper('form'); 
        $this->load->library('form_validation'); 
        $this->load->model('property'); 
        $this->load->model('blog'); 
        $this->controller = 'manage_blog'; 
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
 
        $data['property'] = $this->blog->getRows(); 
          $data['status'] = 'All';
        // Load the list page view 
        $this->load->view('adminpanel/manage_blog/index', $data); 
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
         if($data['user']['admin_type'] == 'dealer'){
         $this->loggedin();
                // Check whether id is not empty 
                if(!empty($id)){ 
                    $data['property'] = $this->blog->getRows($id); 
                    $data['title'] = $data['property']['title']; 
                    // Load the details page view 
                    $this->load->view('property/view', $data); 
                    $this->load->view('footer'); 
                }else{ 
                    redirect($this->controller); 
                }
         } else{
            echo 'This Page access for only Dealers.';
        } 
    } 
     
    public function add(){ 
         $this->loggedin();
        $data = $propertydata = array(); 
        $errorUpload = ''; 
        // If add request is submitted 
        if($this->input->post('imgSubmit')){ 
            // Form field validation rules 
            $this->form_validation->set_rules('title', 'Event title', 'required'); 
            $this->form_validation->set_rules('area', 'Area', 'required'); 
            $this->form_validation->set_rules('content', 'Content', 'required'); 
            $this->form_validation->set_rules('key_url', 'key url', 'required'); 
           
            $propertydata = array( 
                'title' => $this->input->post('title'),
                'area' => strip_tags($this->input->post('area')), 
                'content' => $this->input->post('content'), 
                'event_date' => $this->input->post('event_date'), 
                'key_url' => $this->input->post('key_url'), 
                'added_by' => $this->session->userdata('id'),
                'status' => 1  
            ); 

            // Validate submitted form data 
            if($this->form_validation->run() == true){ 
                // Insert gallery data 
                $insert = $this->blog->insert($propertydata); 
                $galleryID = $insert;  
                 
                if($insert){ 
                    if(!empty($_FILES['images']['name'])){ 
                        $filesCount = count($_FILES['images']['name']); 
                        for($i = 0; $i < $filesCount; $i++){ 
                            $_FILES['file']['name']     = $_FILES['images']['name'][$i]; 
                            $_FILES['file']['type']     = $_FILES['images']['type'][$i]; 
                            $_FILES['file']['tmp_name'] = $_FILES['images']['tmp_name'][$i]; 
                            $_FILES['file']['error']    = $_FILES['images']['error'][$i]; 
                            $_FILES['file']['size']     = $_FILES['images']['size'][$i]; 
                             
                            // File upload configuration 
                            $uploadPath = 'uploads/blogs/'; 
                            $config['upload_path'] = $uploadPath; 
                            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
                             
                            // Load and initialize upload library 
                            $this->load->library('upload', $config); 
                            $this->upload->initialize($config); 
                             
                            // Upload file to server 
                            if($this->upload->do_upload('file')){ 
                                // Uploaded file data 
                                $fileData = $this->upload->data(); 
                                $uploadData[$i]['property_id'] = $galleryID; 
                                $uploadData[$i]['file_name'] = $fileData['file_name']; 
                                $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s"); 
                            }else{ 
                                $errorUpload .= $fileImages[$key].'('.$this->upload->display_errors('', '').') | ';  
                            } 
                        } 
                         
                        // File upload error message 
                        $errorUpload = !empty($errorUpload)?' Upload Error: '.trim($errorUpload, ' | '):''; 
                         
                        if(!empty($uploadData)){ 
                            // Insert files info into the database 
                            $insert = $this->blog->insertImage($uploadData); 
                        } 
                    } 
                     
                    $this->session->set_userdata('success_msg', 'Blog has been added successfully.'.$errorUpload); 
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
       $this->load->view('adminpanel/manage_blog/add-edit', $data);
        $this->load->view('adminpanel/footer'); 
    } 
     
    public function edit($id){ 
        
          $con = array( 
                'id' => $this->session->userdata('id'), 
            );
           $data['user'] = $this->user->getRows($con);          
        $data = $propertydata = array(); 
        $propertydata = $this->blog->getRows($id); 
        // If update request is submitted 
        if($propertydata['added_by'] == $this->session->userdata('id')){
        $this->loggedin();
        if($this->input->post('imgSubmit')){ 
            // Form field validation rules 
            $this->form_validation->set_rules('title', 'Property title', 'required'); 
            $this->form_validation->set_rules('area', 'Area', 'required'); 
            $this->form_validation->set_rules('content', 'Content', 'required'); 
         
        
             
            // Prepare Property data 
            $propertydata = array( 
                'title' => $this->input->post('title'),
                'area' => strip_tags($this->input->post('area')), 
                'content' => $this->input->post('content'), 
                 'event_date' => $this->input->post('event_date'), 
                'added_by' => $this->session->userdata('id'), 
            ); 
             
            // Validate submitted form data 
            if($this->form_validation->run() == true){ 
                // Update Property data 
                $update = $this->blog->update($propertydata, $id); 
 
                if($update){ 
                    if(!empty($_FILES['images']['name'])){ 
                        $filesCount = count($_FILES['images']['name']); 
                        for($i = 0; $i < $filesCount; $i++){ 
                            $_FILES['file']['name']     = $_FILES['images']['name'][$i]; 
                            $_FILES['file']['type']     = $_FILES['images']['type'][$i]; 
                            $_FILES['file']['tmp_name'] = $_FILES['images']['tmp_name'][$i]; 
                            $_FILES['file']['error']    = $_FILES['images']['error'][$i]; 
                            $_FILES['file']['size']     = $_FILES['images']['size'][$i]; 
                             
                            // File upload configuration 
                            $uploadPath = 'uploads/blogs/'; 
                            $config['upload_path'] = $uploadPath; 
                            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
                             
                            // Load and initialize upload library 
                            $this->load->library('upload', $config); 
                            $this->upload->initialize($config); 
                             
                            // Upload file to server 
                            if($this->upload->do_upload('file')){ 
                                // Uploaded file data 
                                $fileData = $this->upload->data(); 
                                $uploadData[$i]['property_id'] = $id; 
                                $uploadData[$i]['file_name'] = $fileData['file_name']; 
                                $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s"); 
                            }else{ 
                              //  $errorUpload .= $fileImages[$key].'('.$this->upload->display_errors('', '').') | ';  
                            } 
                        } 
                         
                        // File upload error message 
                     //   $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
                         
                        if(!empty($uploadData)){ 
                            // Insert files data into the database 
                            $insert = $this->blog->insertImage($uploadData); 
                        } 
                    } 
 
                    $this->session->set_userdata('success_msg', 'Event has been updated successfully.'.$errorUpload); 
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
        $this->load->view('adminpanel/manage_blog/add-edit', $data); 
        $this->load->view('adminpanel/footer'); 
    }else{
        echo 'You have no permission access for this page';
    }
    } 
   
     
    public function delete($id){ 
        // Check whether id is not empty 
        if($id){ 
            $propertydata = $this->blog->getRows($id); 
             
            // Delete gallery data 
            $delete = $this->blog->delete($id); 
             
            if($delete){ 
                // Delete images data  
                $condition = array('property_id' => $id);  
                $deleteImg = $this->blog->deleteImage($condition);  
                  
                // Remove files from the server  
                if(!empty($propertydata['images'])){  
                    foreach($propertydata['images'] as $img){  
                        @unlink('uploads/blogs/'.$img['file_name']);  
                    }  
                }  
                 
                $this->session->set_userdata('success_msg', 'Blog has been removed successfully.'); 
            }else{ 
                $this->session->set_userdata('error_msg', 'Some problems occurred, please try again.'); 
            } 
        } 
 
        redirect('adminpanel/'.$this->controller); 
    } 

     public function delete_other_images($id){ 
        if($id){ 
            $delete = $this->blog->delete_other_images($id); 
            if($delete){ 
                $this->session->set_userdata('success_msg', 'Blog images has been removed successfully.'); 
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