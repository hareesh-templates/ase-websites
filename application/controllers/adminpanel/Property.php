<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Property extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation'); 
        $this->load->model('user'); 
        $this->load->model('Properties_model'); 
        $this->load->model('Bookingform'); 
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
    public function loggedin2(){
        if($this->isUserLoggedIn){ 
            $con = array( 
                'id' => $this->session->userdata('id'), 
            ); 
            $data['user'] = $this->user->getRows($con); 
       // $this->load->view('adminpanel/header', $data);
        }else{ 
                redirect('adminpanel/login/eswarihomes'); 
        } 
    }
	public function index()
	{
		$this->loggedin();
		  if($this->session->userdata('success_msg')){ 
            $data['success_msg'] = $this->session->userdata('success_msg'); 
            $this->session->unset_userdata('success_msg'); 
        } 
        if($this->session->userdata('error_msg')){ 
            $data['error_msg'] = $this->session->userdata('error_msg'); 
            $this->session->unset_userdata('error_msg'); 
        } 
         $data['status'] = 'All';
        $data['property'] = $this->Properties_model->get_properties(); 
        $this->load->view('adminpanel/property', $data); 
        $this->load->view('adminpanel/footer');
	}

	public function pending_proporties(){
		$this->loggedin();
		  if($this->session->userdata('success_msg')){ 
            $data['success_msg'] = $this->session->userdata('success_msg'); 
            $this->session->unset_userdata('success_msg'); 
        } 
        if($this->session->userdata('error_msg')){ 
            $data['error_msg'] = $this->session->userdata('error_msg'); 
            $this->session->unset_userdata('error_msg'); 
        } 
        $data['status'] = 'Pending';
        $data['property'] = $this->Properties_model->get_properties('pending'); 
        $this->load->view('adminpanel/property', $data); 
        $this->load->view('adminpanel/footer');
	}

	public function active_proporties(){
		$this->loggedin();
		  if($this->session->userdata('success_msg')){ 
            $data['success_msg'] = $this->session->userdata('success_msg'); 
            $this->session->unset_userdata('success_msg'); 
        } 
        if($this->session->userdata('error_msg')){ 
            $data['error_msg'] = $this->session->userdata('error_msg'); 
            $this->session->unset_userdata('error_msg'); 
        } 
        $data['status'] = 'Active';
        $data['property'] = $this->Properties_model->get_properties('active'); 
        $this->load->view('adminpanel/property', $data); 
        $this->load->view('adminpanel/footer');
	}

    public function propertyview($status, $id){
        $this->loggedin();
        $data = array();
        
        $data['property'] = $this->Properties_model->get_properties('', $id);
        $data['property_amentities'] = $this->Properties_model->get_property_amentities($id);

        if($this->input->post('postSubmit')){
            $this->form_validation->set_rules('floor', 'Floor', 'required');
            $this->form_validation->set_rules('bhk', 'Bhk', 'required');
            $this->form_validation->set_rules('availability', 'Availability', 'required');
            $this->form_validation->set_rules('facing', 'Facing', 'required');
            $this->form_validation->set_rules('flat_sqft', 'Flat sqft', 'required');
            $this->form_validation->set_rules('price_sqft', 'Price/sqft', 'required');
            $this->form_validation->set_rules('project_status', 'Project status', 'required');
            $postData = array(
                'property_id' => $this->input->post('property_id'),
                'floor' => $this->input->post('floor'),
                'bhk' => $this->input->post('bhk'),
                'availability' => $this->input->post('availability'),
                'facing' => $this->input->post('facing'),
                'flat_sqft' => $this->input->post('flat_sqft'),
                'undivide_share' => $this->input->post('undivide_share'),
                'totalbuilding_sqyard' => $this->input->post('totalbuilding_sqyard'),
                'price_sqft' => $this->input->post('price_sqft'),
                'amitities' => $this->input->post('amitities'),
                'project_status' => $this->input->post('project_status'),
                'unit_sale_closedby' => $this->input->post('unit_sale_closedby'),
            );
            
            if($this->form_validation->run() == true){
                $insert = $this->Properties_model->insert_amentities($postData);

                if($insert){
                   $data['success_msg'] = 'Amentities has been added successfully.';
                }else{
                    $data['error_msg'] = 'Some problems occurred, please try again.';
                }
            }
        }

        $this->load->view('adminpanel/propertyview', $data);
        $this->load->view('adminpanel/footer', $data);
    }

    public function edit_amentities($id){
        $this->loggedin();
        $data = array();
        $data['property_amentities'] = $this->Properties_model->get_amentities($id);
         if($this->input->post('postSubmit')){
            $this->form_validation->set_rules('floor', 'Floor', 'required');
            $this->form_validation->set_rules('bhk', 'Bhk', 'required');
            $this->form_validation->set_rules('availability', 'Availability', 'required');
            $this->form_validation->set_rules('facing', 'Facing', 'required');
            $this->form_validation->set_rules('flat_sqft', 'Flat sqft', 'required');
            $this->form_validation->set_rules('price_sqft', 'Price/sqft', 'required');
            $this->form_validation->set_rules('project_status', 'Project status', 'required');
            
            $postData = array(
                 'property_id' => $this->input->post('property_id'),
                'floor' => $this->input->post('floor'),
                'bhk' => $this->input->post('bhk'),
                'availability' => $this->input->post('availability'),
                'facing' => $this->input->post('facing'),
                'flat_sqft' => $this->input->post('flat_sqft'),
                'undivide_share' => $this->input->post('undivide_share'),
                'totalbuilding_sqyard' => $this->input->post('totalbuilding_sqyard'),
                'price_sqft' => $this->input->post('price_sqft'),
                'amitities' => $this->input->post('amitities'),
                'project_status' => $this->input->post('project_status'),
                'unit_sale_closedby' => $this->input->post('unit_sale_closedby'),
            );
            
            if($this->form_validation->run() == true){
                $update = $this->Properties_model->update_amentities($postData, $id);
                if($update){
                     $data['error_msg'] =  'Amentities has been updated successfully.';
                  //   redirect('adminpanel/manage_property');
                }else{
                    $data['error_msg'] = 'Some problems occurred, please try again.';
                }
            }
        }


        $this->load->view('adminpanel/amentities_edit', $data);
        $this->load->view('adminpanel/footer', $data);
    }

    public function delete_amentities($id){
        if($id){
            $delete = $this->Properties_model->delete_amentities($id);
            
            if($delete){
                $data['success_msg']  = 'Amentity has been removed successfully.';
                redirect('adminpanel/manage_property');
            }else{
               $data['success_msg']  = 'Some problems occurred, please try again.';
            }
        }

        }

    public function approveproperty($id){
         $updateData = array(
                'status' => 1
            );
        $approve = $this->Properties_model->updatestatus($updateData, $id);

                if($approve){
                    $this->session->set_userdata('success_msg', 'Property has been activated successfully.');
                    redirect('adminpanel/property/active_proporties');
                }else{
                    echo 'Some problems occurred, please try again.';
                }
    }

    public function addproperty(){
        $this->loggedin();
         $data = $propertydata = array(); 
        $errorUpload = ''; 
         
        // If add request is submitted 
        if($this->input->post('imgSubmit')){ 
            // Form field validation rules 
            $this->form_validation->set_rules('title', 'Property title', 'required'); 
             $this->form_validation->set_rules('address', 'Address', 'required'); 
            $this->form_validation->set_rules('area', 'Area', 'required'); 
            $this->form_validation->set_rules('street', 'Street', 'required'); 
            $this->form_validation->set_rules('city', 'City', 'required'); 
            $this->form_validation->set_rules('district', 'District', 'required'); 
            $this->form_validation->set_rules('nearby', 'Near by', 'required'); 
            $this->form_validation->set_rules('pincode', 'Pincode', 'required'); 
            $this->form_validation->set_rules('state', 'State', 'required'); 
            $this->form_validation->set_rules('about_property', 'About property', 'required'); 
            $this->form_validation->set_rules('property_status', 'Property status', 'required'); 
            $this->form_validation->set_rules('budget_from', 'Budget from', 'required'); 
            $this->form_validation->set_rules('budget_to', 'Budget to', 'required'); 
            $this->form_validation->set_rules('price_sqft', 'price per sqft', 'required'); 
             
            // Prepare gallery data 
            $propertydata = array( 
                'title' => $this->input->post('title'),
                'address' => strip_tags($this->input->post('address')), 
                'area' => strip_tags($this->input->post('area')), 
                'street' => $this->input->post('street'), 
                'city' => $this->input->post('city'), 
                'district' => $this->input->post('district'), 
                'nearby' => $this->input->post('nearby'), 
                'pincode' => $this->input->post('pincode'), 
                'state' => $this->input->post('state'), 
                'about_property' => $this->input->post('about_property'), 
                'property_status' => $this->input->post('property_status'), 
                'budget_from' => $this->input->post('budget_from'), 
                'budget_to' => $this->input->post('budget_to'), 
                'price_sqft' => $this->input->post('price_sqft'),
                'property_type' => $this->input->post('property_type'),
                'bed_rooms' => $this->input->post('bed_rooms'),
                'added_by' => $this->session->userdata('id'),
                'status' => 1  
            ); 
             
            // Validate submitted form data 
            if($this->form_validation->run() == true){ 
                // Insert gallery data 
                $insert = $this->Properties_model->insert($propertydata); 
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
                            $uploadPath = 'uploads/images/'; 
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
                            $insert = $this->Properties_model->insertImage($uploadData); 
                        } 
                    } 
                     
                    $this->session->set_userdata('success_msg', 'Property has been added successfully.'.$errorUpload); 
                    $data['success_msg'] = 'Property has been added successfully.'; 
                    redirect('adminpanel/property'); 
                }else{ 
                    $data['error_msg'] = 'Some problems occurred, please try again.'; 
                } 
            } 
        } 
         
        $data['property'] = $propertydata; 
        $data['title'] = 'Create Property'; 
        $data['action'] = 'Add'; 
         
        // Load the add page view 
        $this->load->view('adminpanel/property-add-edit', $data); 
        $this->load->view('adminpanel/footer'); 
    }

     public function bookings(){
        $this->loggedin();
        $data = array();
        $data['bookings'] = $this->Bookingform->getRows(); 
        $this->load->view('adminpanel/bookings', $data); 
        $this->load->view('adminpanel/footer');
    }
    
   
    public function booking_view($id){
        $this->loggedin2();
        $data = array();
        if(!empty($id)){
            $data['booking'] = $this->Bookingform->getRows($id);
            $this->load->view('adminpanel/booking', $data);
        }else{
            redirect('/bookings');
        }
    }
    
     public function bookingproject(){
        $this->loggedin();
        $data = array();
        $data['bookings'] = $this->Bookingform->getRowsbookingproject(); 
        $this->load->view('adminpanel/bookingproject', $data); 
        $this->load->view('adminpanel/footer');
    }
    public function bookingdetailsview($id){
        $this->loggedin();
        $data = array();
        
        $data['property'] = $this->Bookingform->getRowsbookingproject($id);
         $this->load->view('adminpanel/bookingdetailsview', $data);
        $this->load->view('adminpanel/footer', $data);
    }
    public function addbookingproject(){
         $this->loggedin();
         $data = $propertydata = array(); 
         
        if($this->input->post('imgSubmit')){ 
            // Form field validation rules 
            $this->form_validation->set_rules('project_name', 'Project Name', 'required'); 
            $this->form_validation->set_rules('location', 'Location', 'required'); 
            $this->form_validation->set_rules('flatno', 'Flatno', 'required'); 
            $this->form_validation->set_rules('block', 'Block', 'required'); 
            $this->form_validation->set_rules('floor', 'Floor', 'required'); 
            $this->form_validation->set_rules('area', 'Area', 'required'); 
            $this->form_validation->set_rules('total_sqft', 'Total sqft', 'required'); 
            $this->form_validation->set_rules('price_sqft', 'Price sqft', 'required'); 
            $this->form_validation->set_rules('floor_rise_charges', 'Floor rise charges', 'required'); 
            $this->form_validation->set_rules('amentities_charges', 'Amentities charges', 'required'); 
            $this->form_validation->set_rules('project_description', 'Project Description', 'required'); 
            $this->form_validation->set_rules('am', 'AM', 'required'); 
            $this->form_validation->set_rules('rm', 'RM', 'required'); 
            $this->form_validation->set_rules('manager', 'Manager', 'required'); 
            $this->form_validation->set_rules('flat_plot_cost', 'Flat plot cost', 'required'); 
            $this->form_validation->set_rules('amentities', 'Amentities', 'required'); 
            $this->form_validation->set_rules('corpus_fund', 'Corpus fund', 'required'); 
            $this->form_validation->set_rules('maintenance_charges', 'Maintenance charges', 'required'); 
            $this->form_validation->set_rules('stamp_duty', 'Stamp duty', 'required'); 
            $this->form_validation->set_rules('gst', 'GST', 'required'); 
            $this->form_validation->set_rules('documentation_legal_charges', 'Documentation legal charges', 'required'); 
            $this->form_validation->set_rules('reg_misc_charges', 'Reg misc charges', 'required'); 
            $this->form_validation->set_rules('flat_plot_cost_total', 'Flat plot cost total', 'required'); 
            $this->form_validation->set_rules('reg_expenses_total', 'Reg expenses total', 'required'); 
             
            // Prepare gallery data 
            $propertydata = array( 
                'project_name' => $this->input->post('project_name'),
                'location' => $this->input->post('location'),
                'flatno' => $this->input->post('flatno'),
                'block' => $this->input->post('block'),
                'floor' => $this->input->post('floor'),
                'area' => $this->input->post('area'),
                'total_sqft' => $this->input->post('total_sqft'),
                'price_sqft' => $this->input->post('price_sqft'),
                'floor_rise_charges' => $this->input->post('floor_rise_charges'),
                'amentities_charges' => $this->input->post('amentities_charges'),
                'project_description' => $this->input->post('project_description'),
                'am' => $this->input->post('am'),
                'rm' => $this->input->post('rm'),
                'manager' => $this->input->post('manager'),
                'flat_plot_cost' => $this->input->post('flat_plot_cost'),
                'amentities' => $this->input->post('amentities'),
                'corpus_fund' => $this->input->post('corpus_fund'),
                'maintenance_charges' => $this->input->post('maintenance_charges'),
                'stamp_duty' => $this->input->post('stamp_duty'),
                'gst' => $this->input->post('gst'),
                'documentation_legal_charges' => $this->input->post('documentation_legal_charges'),
                'reg_misc_charges' => $this->input->post('reg_misc_charges'),
                'flat_plot_cost_total' => $this->input->post('flat_plot_cost_total'),
                'reg_expenses_total' => $this->input->post('reg_expenses_total'),
            ); 
             
            // Validate submitted form data 
            if($this->form_validation->run() == true){ 
                // Insert gallery data 
                $insert = $this->Bookingform->insertbooking_details($propertydata); 
                $galleryID = $insert;  
                 
                if($insert){                      
                    $this->session->set_userdata('success_msg', 'Property booking details has been added successfully.'.$errorUpload); 
                    $data['success_msg'] = 'Property booking has been added successfully.'; 
                    redirect('adminpanel/property/bookingproject'); 
                }else{ 
                    $data['error_msg'] = 'Some problems occurred, please try again.'; 
                } 
            } 
        } 
         
        $data['property'] = $propertydata; 
        $data['title'] = 'Create Property'; 
        $data['action'] = 'Add'; 
         
        // Load the add page view 
        $this->load->view('adminpanel/bookingdetails-add-edit', $data); 
        $this->load->view('adminpanel/footer'); 
    }

}
?>