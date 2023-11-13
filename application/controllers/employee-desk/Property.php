<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Property extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation'); 
        $this->load->model('emp_user'); 
        $this->load->model('Properties_model'); 
        $this->load->model('Bookingform'); 
        $this->load->model('Dynamic_dependent_model');
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
    public function loggedin2(){
        if($this->isUserLoggedIn){ 
            $con = array( 
                'id' => $this->session->userdata('id'), 
            ); 
            $data['user'] = $this->emp_user->getRows($con); 
       // $this->load->view('employee-desk/header', $data);
        }else{ 
                redirect('employee-desk/login'); 
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
        $this->load->view('employee-desk/property', $data); 
        $this->load->view('employee-desk/footer');
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
        $this->load->view('employee-desk/property', $data); 
        $this->load->view('employee-desk/footer');
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
        $this->load->view('employee-desk/property', $data); 
        $this->load->view('employee-desk/footer');
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

        $this->load->view('employee-desk/propertyview', $data);
        $this->load->view('employee-desk/footer', $data);
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
                  //   redirect('employee-desk/manage_property');
                }else{
                    $data['error_msg'] = 'Some problems occurred, please try again.';
                }
            }
        }


        $this->load->view('employee-desk/amentities_edit', $data);
        $this->load->view('employee-desk/footer', $data);
    }

    public function delete_amentities($id){
        if($id){
            $delete = $this->Properties_model->delete_amentities($id);
            
            if($delete){
                $data['success_msg']  = 'Amentity has been removed successfully.';
                redirect('employee-desk/manage_property');
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
                    redirect('employee-desk/property/active_proporties');
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
                    redirect('employee-desk/property'); 
                }else{ 
                    $data['error_msg'] = 'Some problems occurred, please try again.'; 
                } 
            } 
        } 
         
        $data['property'] = $propertydata; 
        $data['title'] = 'Create Property'; 
        $data['action'] = 'Add'; 
         
        // Load the add page view 
        $this->load->view('employee-desk/property-add-edit', $data); 
        $this->load->view('employee-desk/footer'); 
    }

     public function bookings(){
        $this->loggedin();
        $data = array();
        $data['bookings'] = $this->Bookingform->getRows(); 
        $this->load->view('employee-desk/bookings', $data); 
        $this->load->view('employee-desk/footer');
    }
    
   
    public function booking_view($id){
        $this->loggedin2();
        $data = array();
        if(!empty($id)){
            $data['booking'] = $this->Bookingform->getRows($id);
            $this->load->view('employee-desk/booking', $data);
        }else{
            redirect('/bookings');
        }
    }
    
     public function bookingproject(){
        $this->loggedin();
        $data = array();
        $data['bookings'] = $this->Bookingform->getRowsbookingproject(); 
        $this->load->view('employee-desk/bookingproject', $data); 
        $this->load->view('employee-desk/footer');
    }
    public function bookingdetailsview($id){
        $this->loggedin();
        $data = array();
        
        $data['property'] = $this->Bookingform->getRowsbookingproject($id);
         $this->load->view('employee-desk/bookingdetailsview', $data);
        $this->load->view('employee-desk/footer', $data);
    }
    public function editbookingproject($id){
        $this->loggedin();
         $data = $propertydata = array(); 
         $postData = $this->Bookingform->getRowsbookingproject($id);
         $date_id = $postData['date_id'];
        // echo '<pre>'; print_r($postData['date_id']); die();
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
            $this->form_validation->set_rules('verification', 'verification', 'required'); 
             
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
                'project_status' => $this->input->post('project_status'),
                'verification' => $this->input->post('verification'),
               // 'added_by' => $this->session->userdata('id'),
               // 'added_on' => date('d-m-Y'),
            ); 
             
            // Validate submitted form data 
            if($this->form_validation->run() == true){ 
                // Insert gallery data 
                $insert = $this->Bookingform->update($propertydata, $date_id); 

               // $last_inert_id = $this->db->insert_id();
               // $final_last_insert_id = date('Ymd').'0'.$last_inert_id;
               // $this->db->query("UPDATE bookingproject SET date_id='$final_last_insert_id' WHERE id=$last_inert_id");

               // $galleryID = $insert;  
                 
                if($insert){                      
                    $this->session->set_userdata('success_msg', 'Property booking details has been updated successfully.'.$errorUpload); 
                    $data['success_msg'] = 'Property booking has been updated successfully.'; 
                    redirect('employee-desk/property/bookingproject'); 
                }else{ 
                    $data['error_msg'] = 'Some problems occurred, please try again.'; 
                } 
            } 
        } 
         
        $data['property'] = $propertydata; 
         $data['postproperty'] = $postData; 
        $data['title'] = 'Create Property'; 
        $data['action'] = 'Add'; 
         
        // Load the add page view 
        $this->load->view('employee-desk/bookingdetails-edit', $data); 
        $this->load->view('employee-desk/footer'); 
    }
    public function addbookingproject(){
         $this->loggedin();
         $data = $propertydata = array(); 
         $data['rm'] = $this->Bookingform->getRMs($this->session->userdata['id']);
         $data['abms'] = $this->Bookingform->getABMs($this->session->userdata['id']);
         $data['bms'] = $this->Bookingform->getBMs($this->session->userdata['id']);
         $data['property_name'] = $this->Bookingform->getProperty();
         $data['country'] = $this->Dynamic_dependent_model->fetch_country();
         
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
           
            $this->form_validation->set_rules('project_description', 'Project Description', 'required'); 
            $this->form_validation->set_rules('am', 'AM', 'required'); 
            $this->form_validation->set_rules('rm', 'RM', 'required'); 
            $this->form_validation->set_rules('manager', 'Manager', 'required'); 
          
           
          
             
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
                'bm' => $this->input->post('bm'),
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
                'project_status' => $this->input->post('project_status'),
                'first_applicant_name' => $this->input->post('first_applicant_name'),
                'first_applicant_mobile_num' => $this->input->post('first_applicant_mobile_num'),
                'first_applicant_email' => $this->input->post('first_applicant_email'),
                'second_applicant_name' => $this->input->post('second_applicant_name'),
                'second_applicant_mobile_num' => $this->input->post('second_applicant_mobile_num'),
                'second_applicant_email' => $this->input->post('second_applicant_email'),
                'added_by' => $this->session->userdata('id'),
                'added_on' => date('d-m-Y'),
            ); 
             
            // Validate submitted form data 
            if($this->form_validation->run() == true){ 
                // Insert gallery data 
                $insert = $this->Bookingform->insertbooking_details($propertydata); 

                $last_inert_id = $this->db->insert_id();
                $final_last_insert_id = date('Ymd').'0'.$last_inert_id;
                $this->db->query("UPDATE bookingproject SET date_id='$final_last_insert_id' WHERE id=$last_inert_id");

                $galleryID = $insert;  
                 
                if($insert){                      
                    $this->session->set_userdata('success_msg', 'Property booking details has been added successfully.'.$errorUpload); 
                    $data['success_msg'] = 'Property booking has been added successfully.'; 
                    redirect('employee-desk/property/bookingproject'); 
                }else{ 
                    $data['error_msg'] = 'Some problems occurred, please try again.'; 
                } 
            } 
        } 
         
        $data['property'] = $propertydata; 
        $data['title'] = 'Create Property'; 
        $data['action'] = 'Add'; 
         
        // Load the add page view 
        $this->load->view('employee-desk/bookingdetails-add-edit', $data); 
        $this->load->view('employee-desk/footer'); 
    }


    public function bookingform($id){
        $this->loggedin();
        $data = array();
        $postData = array();
        $data['bookings'] = $this->Bookingform->getRows();
         $data['property'] = $this->Bookingform->getRowsbookingproject($id);
        if($this->input->post('btn_bookingform')){
            
                 if(!empty($_FILES['first_applicant_sign']['name'])){ 
                    $imageName1 = $_FILES['first_applicant_sign']['name']; 
                     $config['upload_path'] = 'assets/images/bookingform/first'; 
                    $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
                    $this->load->library('upload', $config); 
                    $this->upload->initialize($config); 
                    if($this->upload->do_upload('first_applicant_sign')){ 
                        $fileData = $this->upload->data(); 
                        $imgData['file_name'] = $fileData['file_name']; 
                        }else{ 
                            $error = $this->upload->display_errors();  
                        } 
                    } else{
                        $imageName1 = '-';
                    }

                  if(!empty($_FILES['second_applicant_sign']['name'])){ 
                    $imageName2 = $_FILES['second_applicant_sign']['name']; 
                     $config['upload_path'] = 'assets/images/bookingform/second'; 
                    $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
                    $this->load->library('upload', $config); 
                    $this->upload->initialize($config); 
                    if($this->upload->do_upload('second_applicant_sign')){ 
                        $fileData = $this->upload->data(); 
                        $imgData['file_name'] = $fileData['file_name']; 
                    }else{ 
                        $error = $this->upload->display_errors();  
                    } 
                } else{
                        $imageName2 = '-';
                    }
            $postData = array(
                'project_name' => $this->input->post('project_name'),
                'location' => $this->input->post('location'),
                'flat_plot_no' => $this->input->post('flat_plot_no'),
                'block' => $this->input->post('block'),
                'floor' => $this->input->post('floor'),
                'area_sq_yds' => $this->input->post('area_sq_yds'),
                'first_applicant_name' => $this->input->post('first_applicant_name'),
                'first_applicant_relationship' => $this->input->post('first_applicant_relationship'),
                'first_applicant_nationality' => $this->input->post('first_applicant_nationality'),
                'first_applicant_dob' => $this->input->post('first_applicant_dob'),
                'age' => $this->input->post('age'),
                'first_applicant_pannum' => $this->input->post('first_applicant_pannum'),
                'first_applicant_adharnum' => $this->input->post('first_applicant_adharnum'),
                'first_applicant_permanent_address' => $this->input->post('first_applicant_permanent_address'),
                'first_applicant_communication_address' => $this->input->post('first_applicant_communication_address'),
                'first_applicant_phone_num' => $this->input->post('first_applicant_phone_num'),
                'first_applicant_mobile_num' => $this->input->post('first_applicant_mobile_num'),
                'first_applicant_email' => $this->input->post('first_applicant_email'),
                'first_applicant_occupation' => $this->input->post('first_applicant_occupation'),
                'first_applicant_annual_income' => $this->input->post('first_applicant_annual_income'),
                'first_applicant_company_name' => $this->input->post('first_applicant_company_name'),
                'first_applicant_designation' => $this->input->post('first_applicant_designation'),
                'second_applicant_name' => $this->input->post('second_applicant_name'),
                'second_applicant_relationship' => $this->input->post('second_applicant_relationship'),
                'second_applicant_nationality' => $this->input->post('second_applicant_nationality'),
                'second_applicant_dob' => $this->input->post('second_applicant_dob'),
                'second_applicant_age' => $this->input->post('second_applicant_age'),
                'second_applicant_pannum' => $this->input->post('second_applicant_pannum'),
                'second_applicant_adharnum' => $this->input->post('second_applicant_adharnum'),
                'second_applicant_permanent_address' => $this->input->post('second_applicant_permanent_address'),
                'second_applicant_communication_address' => $this->input->post('second_applicant_communication_address'),
                'second_applicant_phone_num' => $this->input->post('second_applicant_phone_num'),
                'second_applicant_mobile_num' => $this->input->post('second_applicant_mobile_num'),
                'second_applicant_email' => $this->input->post('second_applicant_email'),
                'second_applicant_occupation' => $this->input->post('second_applicant_occupation'),
                'second_applicant_annual_income' => $this->input->post('second_applicant_annual_income'),
                'second_applicant_company' => $this->input->post('second_applicant_company'),
                'second_applicant_designation' => $this->input->post('second_applicant_designation'),
                'am' => $this->input->post('am'),
                'rm' => $this->input->post('rm'),
                'manager' => $this->input->post('manager'),
                'bm' => $this->input->post('bm'),
                'total_sq_yards' => $this->input->post('total_sq_yards'),
                'price_per_sq_yards' => $this->input->post('price_per_sq_yards'),
                'floor_rise_charges' => $this->input->post('floor_rise_charges'),
                'amentities_charges' => $this->input->post('amentities_charges'),
                'flat_plot_cost' => $this->input->post('flat_plot_cost'),
                'amentities' => $this->input->post('amentities'),
                'corpus_fund' => $this->input->post('corpus_fund'),
                'maintenance_charges' => $this->input->post('maintenance_charges'),
                'stamp_duty' => $this->input->post('stamp_duty'),
                'gst' => $this->input->post('gst'),
                'documentation_legal_charges' => $this->input->post('documentation_legal_charges'),
                'reg_misc_charges' => $this->input->post('reg_misc_charges'),
                'flat_plot_blocking_amount_total' => $this->input->post('flat_plot_blocking_amount_total'),
                'agreement_fiveteendays_total' => $this->input->post('agreement_fiveteendays_total'),
                'agreemnt_thirtydays_total' => $this->input->post('agreemnt_thirtydays_total'),
                'date' => $this->input->post('date'),
                'place' => $this->input->post('place'),
                'flat_plot_cost_total' => $this->input->post('flat_plot_cost_total'),
                'reg_expenses_total' => $this->input->post('reg_expenses_total'),
                'project_description' => $this->input->post('project_description'),
                'project_status' => $this->input->post('project_status'),
                'first_applicant_sign' => $imageName1,
                'second_applicant_sign' => $imageName2,
                'added_by' => $this->session->userdata('id'),
                'added_on' => date('d-m-Y'),
                'my_added_on' => date('m-Y'),
            );
            
           // if($this->form_validation->run() == true){
                $insert = $this->Bookingform->insert($postData);
                $last_inert_id = $this->db->insert_id();
                $final_last_insert_id = date('Ymd').'0'.$last_inert_id;
                $this->db->query("UPDATE plot_booking_form SET date_id='$final_last_insert_id' WHERE id=$last_inert_id");


                if($insert){
                     $data['success_msg'] = 'Booking has been added successfully.';
                   // redirect('/posts');
                         $to = "info@eswarihomes.com,ikchakravarthy@eswarigroup.com,chandhu418@gmail.com";
                $subject = "Eswarihomes-Booking Form";

                $message = "
                <html>
                <head>
                <title>Eswarihomes-Booking Form</title>
                </head>
                <body>
                
                <h3>PROJECT DETAILS:</h3>
                <table>

                
                <tr><th>Project Name</th><td>".$this->input->post('project_name')."</td><th>Location</th><td>".$this->input->post('location')."</td></tr>

                <tr><th>Flat/Plot No</th> <td>".$this->input->post('flat_plot_no')."</td>
                <th>Block</th><td>".$this->input->post('block')."</td></tr>

                <tr><th>Floor</th> <td>".$this->input->post('floor')."</td><th>Area(Sq.ft/Sq.yds)</th><td>".$this->input->post('area_sq_yds')."</td></tr>

                <tr><th>Total Sq.ft/Sq.yrd</th><td>".$this->input->post('total_sq_yards')."</td><th>Price per Sq.ft/Sq.yrd</th> <td>".$this->input->post('price_per_sq_yards')."</td></tr>

                <tr><th>Floor Rise Charges(if applicable) Rs</th><td>".$this->input->post('floor_rise_charges')."</td><th>Amenities Charges</th><td>".$this->input->post('amentities_charges')."</td></tr>
             
                
               
                 </table>
                 <h3>SOLE/FIRST APPLICANT:</h3>
                <table>
                
                <tr><th>Mr./Mrs./Ms</th><td>".$this->input->post('first_applicant_name')."</td><th>S/W/D/of</th> <td>".$this->input->post('first_applicant_relationship')."</td></tr>

                <tr><th>Nationality</th> <td>".$this->input->post('first_applicant_nationality')."</td><th>DOB</th><td>".$this->input->post('first_applicant_dob')."</td></tr>

                <tr><th>Age</th> <td>".$this->input->post('age')."</td><th>PAN Card Number</th> <td>".$this->input->post('first_applicant_pannum')."</td></tr>

                 <tr><th>Adhar Number</th> <td>".$this->input->post('first_applicant_adharnum')."</td><th>Phone Number</th> <td>".$this->input->post('first_applicant_phone_num')."</td></tr>

                 <tr><th>Permanent Address</th> <td>".$this->input->post('first_applicant_permanent_address')."</td><th>Communication Address</th><td>".$this->input->post('first_applicant_communication_address')."</td></tr>

                <tr><th>Mobile</th> <td>".$this->input->post('first_applicant_mobile_num')."</td><th>Email</th><td>".$this->input->post('first_applicant_email')."</td></tr>

                <tr><th>Occupation</th><td>".$this->input->post('first_applicant_occupation')."</td><th>Annual Income</th> <td>".$this->input->post('first_applicant_annual_income')."</td></tr>

                <tr><th>Company Name</th><td>".$this->input->post('first_applicant_company_name')."</td><th>Designation</th><td>".$this->input->post('first_applicant_designation')."</td></tr>
                </table>



                 <h3>CO-APPLICANT (IF APPLICABLE):</h3>
                <table>
                <tr><th>Mr./Mrs./Ms</th><td>".$this->input->post('second_applicant_name')."</td><th>S/W/D/of</th><td>".$this->input->post('second_applicant_relationship')."</td></tr>

                <tr><th>Nationality</th><td>".$this->input->post('second_applicant_nationality')."</td><th>DOB</th><td>".$this->input->post('second_applicant_dob')."</td></tr>

                <tr><th>Age</th><td>".$this->input->post('second_applicant_age')."</td><th>PAN Card Number</th><td>".$this->input->post('second_applicant_pannum')."</td></tr>

                <tr><th>Adhar Number</th> <td>".$this->input->post('second_applicant_adharnum')."</td><th>Phone Number</th><td>".$this->input->post('second_applicant_phone_num')."</td></tr>

                <tr><th>Permanent Address</th><td>".$this->input->post('second_applicant_permanent_address')."</td><th>Communication Address</th><td>".$this->input->post('second_applicant_communication_address')."</td></tr>
                
               
                
                 <tr><th>Mobile</th><td>".$this->input->post('second_applicant_mobile_num')."</td><th>Email</th> <td>".$this->input->post('second_applicant_email')."</td></tr>

                 <tr><th>Occupation</th> <td>".$this->input->post('second_applicant_occupation')."</td><th>Annual Income</th><td>".$this->input->post('second_applicant_annual_income')."</td></tr>

                 <tr><th>Company Name</th> <td>".$this->input->post('second_applicant_company')."</td><th>Designation</th><td>".$this->input->post('second_applicant_designation')."</td>
                </tr>

                </table>

                <h3></h3>
                

                


                <table>
                    <tr><th>Flot/Plot Cost</th><th>Amount</th><th>Regiteration Expenses</th><th>Amount</th></tr>
                    <tr><td>Flat/Plot Cost(base price)</td><td>".$this->input->post('flat_plot_cost')."</td><td>Stamp Duty</td><td>".$this->input->post('stamp_duty')."</td></tr>
                    <tr><td>Amenities</td><td>".$this->input->post('amentities')."</td><td>GST</td><td>".$this->input->post('gst')."</td></tr>
                    <tr><td>Corpus Fund</td><td>".$this->input->post('corpus_fund')."</td><td>Documentation & Legal Charges</td><td>".$this->input->post('documentation_legal_charges')."</td></tr>
                    <tr><td>Maintenance Charges(if applicable)</td><td>".$this->input->post('maintenance_charges')."</td><td>Reg.Mic.Charges</td><td>".$this->input->post('reg_misc_charges')."</td></tr>
                    <tr><td>Total</td><td>".$this->input->post('flat_plot_cost_total')."</td><td>Total</td><td>".$this->input->post('reg_expenses_total')."</td></tr>

                </table>


                <h3>PAYMENT SCHEDULE:</h3>
                <table>
                <tr><th>Flat/Plot Blocking Amount:</th><td>".$this->input->post('flat_plot_blocking_amount_total')."</td></tr>
                <tr><th>At the time of Agreement-15 Day from Booking:</th><td>".$this->input->post('agreement_fiveteendays_total')."</td></tr>
                <tr><th>At the time of Registeration-30 day from agreement:</th><td>".$this->input->post('agreemnt_thirtydays_total')."</td></tr>
                </table>
                <h3></h3>
                <table>
                <tr><th>Date:</th><td>".$this->input->post('date')."</td><th>Place:</th><td>".$this->input->post('place')."</td></tr>
                <tr><th>Sole/First Applicant:</th><td><img src='http://eswarihomes.com/assets/images/bookingform/first/$imageName1' style='width: 140px;height: 75px;'></td><th>Co-Applicant:</th><td><img src='http://eswarihomes.com/assets/images/bookingform/second/$imageName2' style='width: 140px;height: 75px;'></td></tr>
                </table>
                </body>
                </html>
                ";

                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                // More headers
                $headers .= 'From: <csr8790@gmail.com>' . "\r\n";
                $headers .= 'Cc: csr8790@gmail.com' . "\r\n";

                mail($to,$subject,$message,$headers);



                }else{
                    $data['error_msg'] = 'Some problems occurred, please try again.';
                }
           // }
        }
        $this->load->view('employee-desk/bookingform',$data);
         $this->load->view('employee-desk/footer'); 
    }

    public function deleteproject($id){
        if($id){
            $delete = $this->Bookingform->deleteproject($id);
            
            if($delete){
                $this->session->set_userdata('success_msg', 'Project has been removed successfully.');
            }else{
                $this->session->set_userdata('error_msg', 'Some problems occurred, please try again.');
            }
        }

        redirect('employee-desk/property/bookingproject');
    }

    public function deletebooking($id){
        if($id){
            $delete = $this->Bookingform->deletebooking($id);
            
            if($delete){
                $this->session->set_userdata('success_msg', 'Booking has been removed successfully.');
            }else{
                $this->session->set_userdata('error_msg', 'Some problems occurred, please try again.');
            }
        }

        redirect('employee-desk/property/bookings');
    }
    public function incentives($emp_id = ''){
        $this->loggedin();
        $data = array();
        if(isset($_POST['btn_search_by_month'])){
            $date_month = $_POST['date_month'];
        }else{
            $date_month = date("m-Y");
        }
        if($this->session->userdata('id') > 20){
            $session_id = $this->session->userdata('id');
        }else{
            $session_id = $emp_id;
        }
       // echo $session_id; die();
        
        $data['am'] = $this->db->query("SELECT sum(total_sq_yards) as am_total_sq_yards FROM `plot_booking_form` WHERE am=$session_id and my_added_on = '$date_month'")->row_array();
        $data['rm'] = $this->db->query("SELECT sum(total_sq_yards) as rm_total_sq_yards FROM `plot_booking_form` WHERE rm=$session_id and my_added_on = '$date_month'")->row_array();
        $data['abm'] = $this->db->query("SELECT sum(total_sq_yards) as abm_total_sq_yards FROM `plot_booking_form` WHERE manager=$session_id and my_added_on = '$date_month'")->row_array();
        $data['bm'] = $this->db->query("SELECT sum(total_sq_yards) as bm_total_sq_yards FROM `plot_booking_form` WHERE bm=$session_id and my_added_on = '$date_month'")->row_array();

        $data['sales_am'] = $this->db->query("SELECT * FROM `plot_booking_form` WHERE am=$session_id")->result_array();
        $data['sales_rm'] = $this->db->query("SELECT * FROM `plot_booking_form` WHERE rm=$session_id")->result_array();
        $data['sales_abm'] = $this->db->query("SELECT * FROM `plot_booking_form` WHERE manager=$session_id")->result_array();
        $data['sales_bm'] = $this->db->query("SELECT * FROM `plot_booking_form` WHERE bm=$session_id")->result_array();
        
        $this->load->view('employee-desk/incentives', $data);
        $this->load->view('employee-desk/footer'); 
    }

    public function sent_mails(){
        $this->loggedin();
        $data = array();
        $data['bookings'] = $this->Bookingform->getRowsentemail(); 
        $this->load->view('employee-desk/sent_mails', $data); 
        $this->load->view('employee-desk/footer');
    }

    public function add_send_mail(){
         $this->loggedin();
         $data = array();
        $postData = array();
        
        if($this->input->post('postSubmit')){
            $this->form_validation->set_rules('customer_name', 'Customer Name', 'required');
            $this->form_validation->set_rules('customer_email', 'Customer Email', 'required');
            
            $postData = array(
                'customer_name' => $this->input->post('customer_name'),
                'customer_email' => $this->input->post('customer_email'),
                'sent_by' => $this->session->userdata('id'),
                'sent_on' => date('d-m-Y')
            );
            
            if($this->form_validation->run() == true){
                $insert = $this->Bookingform->insert_send_mail($postData);

                if($insert){


                        $to = $this->input->post('customer_email');
                $subject = "Eswarihomes-Booking Form";

                $message = "
                <html>
                <head>
                <title>Eswarihomes-Booking Form</title>
                </head>
                <body>
                
                <h3>PROJECT DETAILS:</h3>
                <table>

                
                <tr><th>Dear ".$this->input->post('customer_name')." Please click on the booking form link</th></tr>
                <tr><th><a href='https://eswarihomes.com/property/bookingform/'>Click here</a></th></tr>

               
               
                 </table>
                
                </body>
                </html>
                ";

                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                // More headers
                $headers .= 'From: <info@eswarihomes.com>' . "\r\n";
                $headers .= 'Cc: chandhu418@gmail.com' . "\r\n";
                mail($to,$subject,$message,$headers);





                    $this->session->set_userdata('success_msg', 'Mail has been Sent successfully.');
                    redirect('employee-desk/property/sent_mails');
                }else{
                    $data['error_msg'] = 'Some problems occurred, please try again.';
                }
            }
        }
        
        $data['mails'] = $postData;
        
        $this->load->view('employee-desk/add_send_mails', $data);
        $this->load->view('employee-desk/footer');
    }

    public function incentives_employees_list(){
        $this->loggedin();
        $data = array();
         $data['emp_list'] = $this->Bookingform->get_emp_list(); 
        $this->load->view('employee-desk/incentives_employees_list', $data);
        $this->load->view('employee-desk/footer');
    }
     public function advisorynote(){
        $this->loggedin();
        $this->load->view('employee-desk/advisorynote');
        $this->load->view('employee-desk/footer');
     }
}
?>