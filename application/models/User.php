<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class User extends CI_Model{ 
    function __construct() { 
        // Set table name 
        $this->table = 'adminusers'; 
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
            $query = $this->db->get_where('adminusers', array('id' => $id));
            return $query->row_array();
        }else{
            if($userslist == 'active'){
                $query = $this->db->get_where('adminusers', array('status'=>1, 'admin_type'=>'dealer'));
            }else{
                $query = $this->db->get_where('adminusers', array('status'=>0, 'admin_type'=>'dealer'));
            }
            return $query->result_array();
        }

   }

   public function agentslist($userslist, $id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('adminusers', array('admin_type'=>'agent'));
            return $query->row_array();
        }else{
            $query = $this->db->get_where('adminusers', array('admin_type'=>'agent'));
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
            $update = $this->db->update('adminusers', $data, array('id'=>$id));
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
     public function selfie_pic($data = array()) {
        $insert = $this->db->insert('selfie_pic', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }

     public function selfie_navaratri_userslist($contest){
            $query = $this->db->get_where('selfie_pic', array('contest'=>$contest));
            return $query->result_array();
        
   }
    public function selfie_navaratri_userdetails($id){
            $query = $this->db->get_where('selfie_pic', array('id'=>$id));
            return $query->row_array();
        
   }
     public function enquiry_form($data = array()) {
        $insert = $this->db->insert('enquiry_form', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    public function enquiry_form_list() {
        $query = $this->db->get_where('enquiry_form');
        return $query->result_array();
    }
     public function credai($data = array()) {
        $insert = $this->db->insert('credai', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
     public function credai_form_list() {
        $query = $this->db->get_where('credai');
        return $query->result_array();
    }
}