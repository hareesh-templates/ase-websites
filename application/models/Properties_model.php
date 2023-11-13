<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
 // this model for admin panel properties
class Properties_model extends CI_Model{ 

	public function get_properties($status = '', $id = ''){
		if(!empty($id)){
			$query = $this->db->get_where('property', array('id' => $id));
			return $query->row_array();
		}else{
		if($status == 'pending'){
			$query = $this->db->get_where('property', array('status' => 0));
		}else if($status == 'active'){
			$query = $this->db->get_where('property', array('status' => 1));
		}else{
    	    $query = $this->db->get('property');
    	}
    	return $query->result_array();
    }
  	}
    public function get_property_amentities($id){
            $query = $this->db->get_where('property_details', array('property_id' => $id));
            return $query->result_array();
        
    }
  	 public function updatestatus($data, $id){
        if(!empty($data) && !empty($id)){
            $update = $this->db->update('property', $data, array('id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }

    public function insert($data = array()) { 
        if(!empty($data)){ 
            // Add created and modified date if not included 
            if(!array_key_exists("created", $data)){ 
                $data['created'] = date("Y-m-d H:i:s"); 
            } 
            if(!array_key_exists("modified", $data)){ 
                $data['modified'] = date("Y-m-d H:i:s"); 
            } 
             
            // Insert gallery data 
            $insert = $this->db->insert('property', $data); 
             
            // Return the status 
            return $insert?$this->db->insert_id():false; 
        } 
        return false; 
    } 
     
    /* 
     * Insert image data into the database 
     * @param $data data to be insert based on the passed parameters 
     */ 
    public function insertImage($data = array()) { 
        if(!empty($data)){ 
             
            // Insert gallery data 
            $insert = $this->db->insert_batch('property_images', $data); 
             
            // Return the status 
            return $insert?$this->db->insert_id():false; 
        } 
        return false; 
    }

      public function insert_amentities($data = array()) {
        $insert = $this->db->insert('property_details', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    function get_amentities($id = ""){
            $query = $this->db->get_where('property_details', array('id' => $id));
            return $query->row_array();
        
    } 
     public function update_amentities($data, $id) {
        if(!empty($data) && !empty($id)){
            $update = $this->db->update('property_details', $data, array('id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }
    public function delete_amentities($id){
        $delete = $this->db->delete('property_details',array('id'=>$id));
        return $delete?true:false;
    }
}