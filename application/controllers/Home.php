<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('form_validation'); 
        $this->load->model('user'); 
        $this->load->model('Property'); 
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 
         $this->load->model('dynamic_dependent_model');
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
	#[\ReturnTypeWillChange]
	public function index()
	{
	    

		$this->loggedin();
	//	$this->load->view('home', $data);
         $data['country'] = $this->dynamic_dependent_model->fetch_country();
          $this->db->select("*, (SELECT file_name FROM blog_images WHERE property_id = blog.id ORDER BY id asc LIMIT 1) as default_image");
        $this->db->order_by("id", "desc");
         $result = $this->db->get('blog');
        $data['blogs'] = $result->result_array();
          $result2 = $this->db->query("SELECT *, (SELECT file_name FROM property_images WHERE property_id = property.id ORDER BY id asc LIMIT 1) as default_image FROM `property` WHERE `status` = 1 AND property_status='Under Construction'  AND city='vizag' ORDER BY `id` DESC LIMIT 3");
        $data['trendning_projects_vizag'] = $result2->result_array();

         $result3 = $this->db->query("SELECT *, (SELECT file_name FROM property_images WHERE property_id = property.id ORDER BY id asc LIMIT 1) as default_image FROM `property` WHERE `status` = 1 AND property_status='READY TO MOVE'  AND city='vijayawada' OR  city='rajahmundry' ORDER BY `id` DESC LIMIT 3");
        $data['trendning_projects_vijayawada'] = $result3->result_array();
		$this->load->view('home',$data);
		$this->load->view('homepage_footer');
	}

		public function register(){
			$this->load->view('header');
        $data = $userData = array(); 
         
        // If registration request is submitted 
        if($this->input->post('signupSubmit')){ 
            $this->form_validation->set_rules('admin_firstname', 'First Name', 'required'); 
            $this->form_validation->set_rules('admin_lastname', 'Last Name', 'required'); 
            $this->form_validation->set_rules('admin_email', 'Email', 'required|valid_email|callback_email_check'); 
            $this->form_validation->set_rules('admin_type', 'Type', 'required'); 
            $this->form_validation->set_rules('admin_pwd', 'password', 'required'); 
            $this->form_validation->set_rules('admin_mobile', 'Mobile', 'required'); 
            $this->form_validation->set_rules('admin_area', 'Area', 'required'); 
            $this->form_validation->set_rules('admin_city', 'City', 'required'); 
            $this->form_validation->set_rules('admin_district', 'District', 'required'); 
            $this->form_validation->set_rules('admin_state', 'state', 'required'); 
            $this->form_validation->set_rules('admin_pincode', 'Pincode', 'required'); 
          //  $this->form_validation->set_rules('admin_company', 'Company', 'required'); 
           // $this->form_validation->set_rules('conf_password', 'confirm password', 'required|matches[password]'); 
 
            if($this->input->post('admin_type') == 'agent'){
               $userData = array( 
                'admin_firstname' => strip_tags($this->input->post('admin_firstname')), 
                'admin_lastname' => strip_tags($this->input->post('admin_lastname')), 
                'admin_email' => strip_tags($this->input->post('admin_email')), 
                'admin_pwd' => md5($this->input->post('admin_pwd')), 
                'admin_password' => $this->input->post('admin_pwd'), 
                'admin_type' => $this->input->post('admin_type'), 
                'admin_mobile' => $this->input->post('admin_mobile'), 
                'admin_area' => $this->input->post('admin_area'), 
                'admin_city' => $this->input->post('admin_city'), 
                'admin_district' => $this->input->post('admin_district'), 
                'admin_state' => $this->input->post('admin_state'), 
                'admin_pincode' => $this->input->post('admin_pincode'), 
               // 'admin_company' => $this->input->post('admin_company'), 
                'status' => 1 
            );
            }else{
                $userData = array( 
                'admin_firstname' => strip_tags($this->input->post('admin_firstname')), 
                'admin_lastname' => strip_tags($this->input->post('admin_lastname')), 
                'admin_email' => strip_tags($this->input->post('admin_email')), 
                'admin_pwd' => md5($this->input->post('admin_pwd')), 
                'admin_password' => $this->input->post('admin_pwd'), 
                'admin_type' => $this->input->post('admin_type'), 
                'admin_mobile' => $this->input->post('admin_mobile'), 
                'admin_area' => $this->input->post('admin_area'), 
                'admin_city' => $this->input->post('admin_city'), 
                'admin_district' => $this->input->post('admin_district'), 
                'admin_state' => $this->input->post('admin_state'), 
                'admin_pincode' => $this->input->post('admin_pincode'), 
              //  'admin_company' => $this->input->post('admin_company'), 
                'status' => 0 
            );
            }
 
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
          
        $this->load->view('register', $data);
        $this->load->view('footer');
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

    public function login(){
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
                        'admin_pwd' => md5($this->input->post('password')), 
                        'status' => 1 
                    ) 
                ); 
                $checkLogin = $this->user->getRows($con);
                if($checkLogin){ 
                    $this->session->set_userdata('isUserLoggedIn', TRUE); 
                    $this->session->set_userdata('id', $checkLogin['id']); 
                    redirect('home'); 
                }else{
                   // echo 'Wrong email or password, please try again.';
                    $data['error_msg'] = 'Wrong Email or Password, please try again.'; 
                } 
            }
            else{ 
                $data['error_msg'] = 'Please fill all the mandatory fields.'; 
            } 
        } 
        $this->loggedin();
        $this->load->view('login',$data);
        $this->load->view('footer');
    }
	
public function logout(){ 
    // $ga_params = array(
    //         'applicationName' => $this->config->item('ga_api_applicationName'),
    //         'clientID' => $this->config->item('ga_api_clientId'),
    //         'clientSecret' => $this->config->item('ga_api_clientSecret'),
    //         'redirectUri' => $this->config->item('ga_api_redirectUri'),
    //         'developerKey' => $this->config->item('ga_api_developerKey'),
    //         'profileID' => $this->config->item('ga_api_profileId')
    //     );
    //     $this->load->library('GoogleAnalytics', $ga_params);
    //     $this->googleanalytics->logout();
        $this->session->unset_userdata('isUserLoggedIn'); 
        $this->session->unset_userdata('id'); 
        $this->session->sess_destroy(); 
        redirect('home'); 
    } 

    public function locationList(){
        $postData = $this->input->post();
        $data = $this->Property->getLocations($postData);
        echo json_encode($data);
  }
  function fetch_state()
 {
  if($this->input->post('country_id'))
  {
   echo $this->dynamic_dependent_model->fetch_state($this->input->post('country_id'));
  }
 }

  function fetch_sqft()
 {
  if($this->input->post('country_id'))
  {
   echo $this->dynamic_dependent_model->fetch_sqft($this->input->post('country_id'));
  }
 }
  function fetch_price()
 {
  if($this->input->post('country_id'))
  {
   echo $this->dynamic_dependent_model->fetch_price($this->input->post('country_id'));
  }
 }

  function fetch_project()
 {
  if($this->input->post('states'))
  {
   echo $this->dynamic_dependent_model->fetch_project($this->input->post('states'));
  }
 }

  function fetch_loc()
 {
  if($this->input->post('country_id'))
  {
   echo $this->dynamic_dependent_model->fetch_loc($this->input->post('country_id'));
  }
 }

  function fetch_area()
 {
  if($this->input->post('location'))
  {
   echo $this->dynamic_dependent_model->fetch_area($this->input->post('location'));
  }
 }
}
