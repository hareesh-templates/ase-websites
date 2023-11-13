<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {
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
                 $this->load->view('header');
            } 
    }
	public function index()
	{
$this->loggedin();
        $data = array();
		$this->db->select("*, (SELECT file_name FROM event_images WHERE property_id = event.id ORDER BY id asc LIMIT 1) as default_image");
        $this->db->order_by("id", "desc");
		 $result = $this->db->get_where('event', array('event_type' => 'event'));
		$data['properties'] = $result->result_array();
		$this->db->select("*, (SELECT file_name FROM event_images WHERE property_id = event.id ORDER BY id asc LIMIT 1) as default_image");
        $this->db->order_by("id", "desc");
		  $result = $this->db->get_where('event', array('event_type' => 'celebrations'));
		$data['celebrations'] = $result->result_array();
        $this->load->view('eventlist', $data);
     	$this->load->view('footer');
	}
	public function eventdetails($id){
		$this->loggedin();
         $this->db->select('event.*');
	    $this->db->from('event');
	    $this->db->where('id',$id);
	    $data['property_details2'] = $this->db->get()->row_array();
	    $this->db->select('ei.file_name');
		$this->db->from('event as p');
		$this->db->join('event_images as ei', 'p.id = ei.property_id');
	    $this->db->where('p.id', $id);
	    $data['property_details3'] = $this->db->get()->result_array();
		$this->load->view('eventdetails', $data);
		$this->load->view('footer');
	}

}