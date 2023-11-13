<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
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
        $this->load->view('header4', $data);
        }else{ 
                 $this->load->view('header4');
            } 
    }
	public function index()
	{
$this->load->view('header4');
        $data = array();
		$this->db->select("*, (SELECT file_name FROM blog_images WHERE property_id = blog.id ORDER BY id asc LIMIT 1) as default_image");
        $this->db->order_by("id", "desc");
		 $result = $this->db->get('blog');
		$data['properties'] = $result->result_array();
        $this->load->view('bloglist', $data);
     	$this->load->view('footer');
	}
	public function blogdetails($id){
	  //  $this->load->view('header4');
	    $this->db->select('ei.file_name');
		$this->db->from('blog as p');
		$this->db->join('blog_images as ei', 'p.id = ei.property_id');
	    $this->db->where('p.key_url', $id);
	    $data['property_details3'] = $this->db->get()->result_array();

	    $this->db->select('blog.*');
	    $this->db->from('blog');
	    $this->db->where('key_url',$id);
	    $data['property_details2'] = $this->db->get()->row_array();
	    //echo '<pre>'; print_r($data['property_details2']); die();

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
               $to = "info@eswarihomes.com,ikchakravarthy@eswarigroup.com,chandhu418@gmail.com";
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
                $headers .= 'From: <csr8790@gmail.com>' . "\r\n";
                $headers .= 'Cc: csr8790@gmail.com' . "\r\n";

                mail($to,$subject,$message,$headers);
        }

	    

		$this->load->view('blogdetails', $data);
		$this->load->view('footer');
	}

}