<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedbackform extends CI_Controller {
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
                 $this->load->view('blog_header');
            } 
    }
   	public function fillup(){
   		 $data = array();
   	//	$this->loggedin();
   		 $formid = $_GET['form'];

   		 $this->db->select('*');
   		$qry = $this->db->get_where('feedback',array('id'=>$formid));
   		$res = $qry->row_array();
			$name = $res['name'];  		
			$email = $res['email']; 		
			$mobile = $res['mobile'];


			if($this->input->post('postfeedback')){
				// echo 'q1:' . $_POST['rating1'] . '<br>';
				// echo 'q2:' . $_POST['rating2'] . '<br>';
				// echo 'q3:' . $_POST['rating3'] . '<br>';
				// echo 'q4:' . $_POST['rating4'] . '<br>';
				// echo 'q5:' . $_POST['rating5'] . '<br>';
				// echo 'q6:' . $_POST['rating6'] . '<br>';
				//  die();
            $this->form_validation->set_rules('rating1', 'This Answer', 'required');
            $this->form_validation->set_rules('rating2', 'This Answer', 'required');
            $this->form_validation->set_rules('rating3', 'This Answer', 'required');
            $this->form_validation->set_rules('rating4', 'This Answer', 'required');
            $this->form_validation->set_rules('rating5', 'This Answer', 'required');
            $this->form_validation->set_rules('rating6', 'This Answer', 'required');
            
            $postData = array(
            	'name' => $name,
            	'email' => $email,
            	'mobile' => $mobile,
                'ans1' => $this->input->post('rating1'),
                'ans2' => $this->input->post('rating2'),
                'ans3' => $this->input->post('rating3'),
                'ans4' => $this->input->post('rating4'),
                'ans5' => $this->input->post('rating5'),
                'ans6' => $this->input->post('rating6'),
                
            );
            
            if($this->form_validation->run() == true){
                $insert = $this->user->feedbackresult($postData);

                if($insert){
                    $data['success_msg'] = 'Feedback has been posted successfully.';
                 
                }else{
                	$data['error_msg'] = 'Error';
                }
            }
            }  		
           
   		$this->load->view('feedbackform',$data);
   		//$this->load->view('footer');
   	}
}