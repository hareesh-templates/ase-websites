<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Emp_user extends CI_Model{ 
    function __construct() { 
        // Set table name 
        $this->table = 'login'; 
    } 
     
    /* 
     * Fetch user data from the database 
     * @param array filter data based on the passed parameters 
     */ 
    function getRows($params = array()){ 
        $this->db->select('*'); 
        $this->db->from($this->table); 
         
        if(array_key_exists("conditions", $params)){ 
            foreach($params['conditions'] as $key => $val){ 
                $this->db->where($key, $val); 
            } 
        } 
         
        if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){ 
            $result = $this->db->count_all_results(); 
        }else{ 
            if(array_key_exists("id", $params) || $params['returnType'] == 'single'){ 
                if(!empty($params['id'])){ 
                    $this->db->where('id', $params['id']); 
                } 
                $query = $this->db->get(); 
                $result = $query->row_array(); 
            }else{ 
                $this->db->order_by('id', 'desc'); 
                if(array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
                    $this->db->limit($params['limit'],$params['start']); 
                }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
                    $this->db->limit($params['limit']); 
                } 
                 
                $query = $this->db->get(); 
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE; 
            } 
        } 
         
        // Return fetched data 
        return $result; 
    } 
     
   public function userslist($userslist, $id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('login', array('id' => $id));
            return $query->row_array();
        }else{
            if($userslist == 'active'){
                $query = $this->db->get_where('login', array('status'=>1, 'admin_type'=>'dealer'));
            }else{
                $query = $this->db->get_where('login', array('status'=>0, 'admin_type'=>'dealer'));
            }
            return $query->result_array();
        }

   }

   public function agentslist($userslist, $id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('login', array('admin_type'=>'agent'));
            return $query->row_array();
        }else{
            $query = $this->db->get_where('login', array('admin_type'=>'agent'));
            return $query->result_array();
        }

   }

      public function insert($data = array()) { 
        if(!empty($data)){ 
            // Insert member data 
            $insert = $this->db->insert($this->table, $data); 
             
            // Return the status 
            return $insert?$this->db->insert_id():false; 
        } 
        return false; 
    } 

    public function updatestatus($data, $id){
        if(!empty($data) && !empty($id)){
            $update = $this->db->update('login', $data, array('id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }

    public function insertproperty($data = array()) { 
        if(!empty($data)){ 
            // Insert member data 
            $insert = $this->db->insert('properties', $data); 
             
            // Return the status 
            return $insert?$this->db->insert_id():false; 
        } 
        return false; 
    } 

    public function contactus($data = array()) {
        $insert = $this->db->insert('contactus', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    public function feedbackresult($data = array()) {
        $insert = $this->db->insert('feedbackresult', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
     public function property_comments($data = array()) {
        $insert = $this->db->insert('property_comments', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
     public function careers($data = array()) {
        $insert = $this->db->insert('careers', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    public function emp_dob_date(){
        $date = date('m-d');
        $query = $this->db->query("SELECT * FROM login WHERE DATE_FORMAT(dob,'%m-%d') = '$date' and id > 19 and status = 'active';");
        return $query->result_array();
    }

    public function booking_count(){
        $userid = $this->session->userdata('id');
        
        if($this->session->userdata('id') > 20){
            $query = $this->db->query("SELECT COUNT(*) as booking_count FROM bookingproject JOIN login ON login.id=bookingproject.added_by WHERE (bookingproject.added_by=$userid OR login.report = $userid) AND bookingproject.project_status = 'Booking'");
        }else{
            $query = $this->db->query("SELECT COUNT(*) as booking_count FROM bookingproject where
                bookingproject.project_status = 'Booking'");
        }
        return $query->row_array();

    }
    public function agreement_count(){
        $userid = $this->session->userdata('id');
        
        if($this->session->userdata('id') > 20){
            $query = $this->db->query("SELECT COUNT(*) as agreement_count FROM bookingproject JOIN login ON login.id=bookingproject.added_by WHERE (bookingproject.added_by=$userid OR login.report = $userid) AND bookingproject.project_status = 'Agreement'");
        }else{
            $query = $this->db->query("SELECT COUNT(*) as agreement_count FROM bookingproject where
                bookingproject.project_status = 'Agreement'");
        }
        return $query->row_array();

    }
    public function registeration_count(){
        $userid = $this->session->userdata('id');
        
        if($this->session->userdata('id') > 20){
            $query = $this->db->query("SELECT COUNT(*) as registeration_count FROM bookingproject JOIN login ON login.id=bookingproject.added_by WHERE (bookingproject.added_by=$userid OR login.report = $userid) AND bookingproject.project_status = 'Registeration'");
        }else{
            $query = $this->db->query("SELECT COUNT(*) as registeration_count FROM bookingproject where
                bookingproject.project_status = 'Registeration'");
        }
        return $query->row_array();

    }
    public function cancelled_count(){
        $userid = $this->session->userdata('id');
        
        if($this->session->userdata('id') > 20){
            $query = $this->db->query("SELECT COUNT(*) as cancelled_count FROM bookingproject JOIN login ON login.id=bookingproject.added_by WHERE (bookingproject.added_by=$userid OR login.report = $userid) AND bookingproject.project_status = 'Cancelled';");
        }else{
            $query = $this->db->query("SELECT COUNT(*) as cancelled_count FROM bookingproject where
                bookingproject.project_status = 'Cancelled';");
        }
        return $query->row_array();

    }
}