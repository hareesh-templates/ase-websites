<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Property extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation'); 
        $this->load->model('user'); 
        $this->load->model('bookingform'); 
        $this->load->model('dynamic_dependent_model');
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
	public function propertylist()
	{
$this->load->view('header4');
        $data = array();

        $data['country'] = $this->dynamic_dependent_model->fetch_country();

		$this->db->select("*, (SELECT file_name FROM property_images WHERE property_id = property.id ORDER BY id asc LIMIT 1) as default_image , (SELECT (flat_sqft * price_sqft) as total_price FROM property_details WHERE property_details.property_id=property.id ORDER BY total_price DESC LIMIT 1) AS max_price, (SELECT (flat_sqft * price_sqft) as total_price2 FROM property_details WHERE property_details.property_id=property.id ORDER BY total_price2 ASC LIMIT 1) AS min_price");
		if(isset($_GET['area'])){
			$this->db->where('area', $_GET['area']);
		}
		 else if(isset($_GET['city'])){
            $this->db->where('city', $_GET['city']);
             $this->db->where('property_status !=', 'Sold out');
        }
		else if(isset($_POST['search_btn'])){
			if(isset($_POST['search_area'])){
			    if(isset($_POST['search_area'])  && $_POST['search_area'] != ''){
			    	
					 $this->db->where_in('area',  $_POST['search_area']);
				}

			}

			 $this->db->where('status', 1);
			
		}else{
			if(isset($_POST['Search_property'])){
				$location = $_POST['location'];
                $city = $_POST['country'];
			    if(isset($_POST['location'])  && $_POST['location'] != ''){
			    	
					 $this->db->where('area', $location);
				}
                if(isset($_POST['country'])  && $_POST['country'] != ''){
                    
                     $this->db->where('district', $city);
                }

			}
            if(isset($_POST['search_property_name'])){
                if(isset($_POST['search_property_name'])  && $_POST['search_property_name'] != ''){
                    
                     $this->db->like('title',  $_POST['search_property_name']);
                }

            }
			if(isset($_POST['price_from'])){
				$price_from = $_POST['price_from'];
			    if(isset($_POST['price_from'])  && $_POST['price_from'] != ''){
			    	
					 $this->db->having('min_price >=', $price_from);
				}

			}
			if(isset($_POST['price_to'])){
				$price_to = $_POST['price_to'];
			    if(isset($_POST['price_to'])  && $_POST['price_to'] != ''){
			    	
					 $this->db->having('max_price <=', $price_to);
				}

			}
			 $this->db->where('status', 1);
			 $this->db->where('property_status !=', 'Sold out');
			
		}
        $this->db->order_by("title", "asc");
		 $result = $this->db->get('property');
		// echo $this->db->last_query(); die;
		$data['properties'] = $result->result_array();
		//$this->load->view('propertylist', $data);

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
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            
            $postData = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'phno' => $this->input->post('phno'),
                'content' => $this->input->post('content')
            );
            
            if($this->form_validation->run() == true){
                $insert = $this->user->contactus($postData);

                if($insert){
                    $data['success_msg'] = 'Contact has been posted successfully.';
                 
                }else{
                    $data['error_msg'] = 'Error';
                }
            }
               $to = "info@eswarihomes.com,ikchakravarthy@eswarigroup.com,rakeshkumarkattamury@gmail.com,chandhu418@gmail.com";
                $subject = "Eswarihomes-Contact Info";

                $message = "
                <html>
                <head>
                <title>Eswarihomes-Contact Info</title>
                </head>
                <body>
                <p>Eswarihomes-Contact Info</p>
                <table>
                <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Content</th>
                
                </tr>
                <tr>
                <td>".$this->input->post('name')."</td>
                <td>".$this->input->post('email')."</td>
                <td>".$this->input->post('phno')."</td>
                <td>".$this->input->post('content')."</td>
                </tr>
                </table>
                </body>
                </html>
                ";

                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                // More headers
                $headers .= 'From: <eswarihomes9@gmail.com>' . "\r\n";
                $headers .= 'Cc: eswarihomes9@gmail.com' . "\r\n";

                mail($to,$subject,$message,$headers);
        }

        $this->load->view('propertylist2', $data);

     	$this->load->view('footer4');
	}
	public function propertydetails($id){
	//	$this->loggedin();
        if($this->isUserLoggedIn){ 
            $con = array( 
                'id' => $this->session->userdata('id'), 
            ); 
            $data['user'] = $this->user->getRows($con); 
        }
        if($this->input->post('comment_submit')){

             $this->form_validation->set_rules('comment', 'comment', 'required');
            $postData = array(
                'comment' => $this->input->post('comment'),
                'property_id' => $this->input->post('property_id'),
                'user_id' => $this->input->post('user_id'),
                'added_on' => $this->input->post('added_on'),
                'comment' => $this->input->post('comment')
            );
             if($this->form_validation->run() == true){
                $insert = $this->user->property_comments($postData);

                if($insert){
                    $data['success_msg'] = 'Comment has been posted successfully.';
                 
                }else{
                    $data['error_msg'] = 'Error';
                }
            }
        }

         $this->db->select("*, (SELECT file_name FROM property_images WHERE property_id = property.id ORDER BY id asc LIMIT 1) as default_image , (SELECT (flat_sqft * price_sqft) as total_price FROM property_details WHERE property_details.property_id=property.id ORDER BY total_price DESC LIMIT 1) AS max_price, (SELECT (flat_sqft * price_sqft) as total_price2 FROM property_details WHERE property_details.property_id=property.id ORDER BY total_price2 ASC LIMIT 1) AS min_price");
		$data['property_details1'] = $this->db->get_where('property', array('id'=>$id))->row_array();

		$this->db->select('p.*, pd.floor, pd.bhk, pd.availability, pd.facing, pd.flat_sqft, pd.undivide_share, pd.totalbuilding_sqyard, pd.price_sqft, pd.amitities, pd.project_status, pd.unit_sale_closedby');
		$this->db->from('property as p');
		$this->db->join('property_details as pd', 'p.id = pd.property_id');
	    $this->db->where('p.id', $id);
	    $data['property_details2'] = $this->db->get()->result_array();

	    $this->db->select('pi.file_name');
		$this->db->from('property as p');
		$this->db->join('property_images as pi', 'p.id = pi.property_id');
	    $this->db->where('p.id', $id);
	    $data['property_details3'] = $this->db->get()->result_array();

	     $this->db->select('pi.file_name');
		$this->db->from('property as p');
		$this->db->join('property_images as pi', 'p.id = pi.property_id');
	    $this->db->where('p.id', $id);
	    $data['property_details4'] = $this->db->get()->result_array();

	    $this->db->select('p.*, pd.project_status');
		$this->db->from('property as p');
		$this->db->join('property_details as pd', 'p.id = pd.property_id');
	    $this->db->where('p.id', $id);
	    $data['property_details5'] = $this->db->get()->row_array();
	   // echo '<pre>'; print_r($data['property_details5']); 

        $this->db->select('property_comments.*,adminusers.admin_firstname');
        $this->db->from('property_comments');
        $this->db->join('adminusers', 'adminusers.id = property_comments.user_id');
        $this->db->where('property_comments.property_id',$id);
        $data['property_details6'] = $this->db->get()->result_array();

		$this->load->view('propertydetails', $data);
		$this->load->view('footer4');
	}
	public function bookingform(){
		$data = array();
        $postData = array();
        // $data['property'] = $this->bookingform->getRowsbookingproject($id);
         //echo $this->db->last_query();
        // echo '<pre>'; print_r($data['property']); die();

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
                'am' => 28,
                'rm' => 21,
                'manager' => $this->input->post('manager'),
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
                'first_applicant_sign' => '-',
                'second_applicant_sign' => '-',
                'project_status' => 'Booking',
                'added_by' => 21,
                'added_on' => date('d-m-Y'),
            );
            
           // if($this->form_validation->run() == true){
                $insert = $this->bookingform->insert($postData);

                 $last_inert_id = $this->db->insert_id();
                $final_last_insert_id = date('Ymd').'0'.$last_inert_id;
                $this->db->query("UPDATE plot_booking_form SET date_id='$final_last_insert_id' WHERE id=$last_inert_id");


                if($insert){
                     $data['success_msg'] = 'Booking has been added successfully.';
                   // redirect('/posts');
                         $to = "info@eswarihomes.com,ikchakravarthy@eswarigroup.com,chandhu418@gmail.com,rakeshkumarkattamury@gmail.com";
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
                <tr><th>RM/RMD</th><td>".$this->input->post('am')."</td><th>AAM/AM</th><td>".$this->input->post('rm')."</td><th>MANAGER</th><td>".$this->input->post('manager')."</td></tr>
                </table>

                


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
               
                </table>
                </body>
                </html>
                ";

                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                // More headers
                $headers .= 'From: <eswarihomes9@gmail.com>' . "\r\n";
                $headers .= 'Cc: eswarihomes9@gmail.com' . "\r\n";

               mail($to,$subject,$message,$headers);



                }else{
                    $data['error_msg'] = 'Some problems occurred, please try again.';
                }
           // }
        }
		$this->load->view('bookingform',$data);
	}

function fetch_state()
 {
  if($this->input->post('country_id'))
  {
   echo $this->dynamic_dependent_model->fetch_state($this->input->post('country_id'));
  }
 }

 public function gallery(){
    $this->loggedin();
    $this->load->view('test_view');
    $this->load->view('footer');
 }
public function property_finding(){
    $this->loggedin();
    $this->load->view('property_finding');
    $this->load->view('footer');
 }
 public function property_site_visit(){
    $this->loggedin();
    $this->load->view('property_site_visit');
    $this->load->view('footer');
 }
 public function property_booking(){
    $this->loggedin();
    $this->load->view('property_booking');
    $this->load->view('footer');
 }
public function home_loan(){
    $this->loggedin();
    $this->load->view('home_loan');
    $this->load->view('footer');
 }
public function property_valuation(){
    $this->loggedin();
    $this->load->view('property_valuation');
    $this->load->view('footer');
 }
 public function property_registeration(){
    $this->loggedin();
    $this->load->view('property_registeration');
    $this->load->view('footer');
 }

}