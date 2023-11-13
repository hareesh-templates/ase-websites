<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
 
class Careers extends CI_Controller { 
     
    function __construct() { 
        parent::__construct(); 
         
        $this->load->helper('form'); 
        $this->load->library('form_validation'); 
        $this->load->model('property'); 
        $this->load->model('event'); 
        $this->controller = 'manage_event'; 
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
         $this->loggedin();
        
 
        $data['property'] = $this->event->getCareers(); 
      //  echo $this->db->last_query();
      //  echo '<pre>'; print_r($data['property']); die();
          $data['status'] = 'All';
        // Load the list page view 
        $this->load->view('adminpanel/careers.php', $data); 
         $this->load->view('adminpanel/footer');
        
    } 
}