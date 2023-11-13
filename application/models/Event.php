<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
 
class Event extends CI_Model{ 
     
    function __construct() { 
        $this->galleryTbl   = 'event'; 
        $this->imgTbl = 'event_images'; 
    } 
     
    /* 
     * Fetch gallery data from the database 
     * @param id returns a single record if specified, otherwise all records 
     */ 
    public function getRows($id = ''){ 
        $this->db->select("*, (SELECT file_name FROM ".$this->imgTbl." WHERE property_id = ".$this->galleryTbl.".id ORDER BY id DESC LIMIT 1) as default_image"); 
        $this->db->from($this->galleryTbl); 
        if($id){ 
            $this->db->where('id', $id); 
            $query  = $this->db->get(); 
            $result = ($query->num_rows() > 0)?$query->row_array():array(); 
             
            if(!empty($result)){ 
                $this->db->select('*'); 
                $this->db->from($this->imgTbl); 
                $this->db->where('property_id', $result['id']); 
                $this->db->order_by('id', 'desc'); 
                $query  = $this->db->get(); 
                $result2 = ($query->num_rows() > 0)?$query->result_array():array(); 
                $result['images'] = $result2;  
            }  
        }else{ 
            if($this->session->userdata('id') != 1){
                 $this->db->where('added_by',$this->session->userdata('id'));
            }
            $this->db->order_by('id', 'desc'); 
            $query  = $this->db->get(); 
            $result = ($query->num_rows() > 0)?$query->result_array():array(); 
        } 
         
        // return fetched data 
        return !empty($result)?$result:false; 
    } 
     
    /* 
     * Fetch image data from the database 
     * @param id returns a single record 
     */ 
    public function getImgRow($id){ 
        $this->db->select('*'); 
        $this->db->from($this->imgTbl); 
        $this->db->where('id', $id); 
        $query  = $this->db->get(); 
        return ($query->num_rows() > 0)?$query->row_array():false; 
    } 
     
    /* 
     * Insert gallery data into the database 
     * @param $data data to be insert based on the passed parameters 
     */ 
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
            $insert = $this->db->insert($this->galleryTbl, $data); 
             
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
            $insert = $this->db->insert_batch($this->imgTbl, $data); 
             
            // Return the status 
            return $insert?$this->db->insert_id():false; 
        } 
        return false; 
    } 
     
    /* 
     * Update gallery data into the database 
     * @param $data array to be update based on the passed parameters 
     * @param $id num filter data 
     */ 
    public function update($data, $id) { 
        if(!empty($data) && !empty($id)){ 
            // Add modified date if not included 
            if(!array_key_exists("modified", $data)){ 
                $data['modified'] = date("Y-m-d H:i:s"); 
            } 
             
            // Update gallery data 
            $update = $this->db->update($this->galleryTbl, $data, array('id' => $id)); 
             
            // Return the status 
            return $update?true:false; 
        } 
        return false; 
    } 
     
    /* 
     * Delete gallery data from the database 
     * @param num filter data based on the passed parameter 
     */ 
    public function delete($id){ 
        // Delete gallery data 
        $delete = $this->db->delete($this->galleryTbl, array('id' => $id)); 
         
        // Return the status 
        return $delete?true:false; 
    } 
     public function delete_other_images($id){ 
        // Delete gallery data 
        $delete = $this->db->delete($this->imgTbl, array('id' => $id)); 
         
        // Return the status 
        return $delete?true:false; 
    } 
     
    /* 
     * Delete image data from the database 
     * @param array filter data based on the passed parameter 
     */ 
    public function deleteImage($con){ 
        // Delete image data 
        $delete = $this->db->delete($this->imgTbl, $con); 
         
        // Return the status 
        return $delete?true:false; 
    } 
    //for auto search
     function getLocations($postData){

     $response = array();

     if(isset($postData['search']) ){
       $this->db->select('*');
       $this->db->where("area like '%".$postData['search']."%' ");
       $this->db->group_by('area'); 
       $records = $this->db->get($this->galleryTbl)->result();

       foreach($records as $row ){
          $response[] = array("value"=>$row->id,"label"=>$row->area);
       }

     }

     return $response;
  }

  public function getCareers(){ 
        $this->db->select("*"); 
        $this->db->from('careers'); 
        $this->db->order_by('id', 'desc'); 
        $query  = $this->db->get(); 
        $result = ($query->num_rows() > 0)?$query->result_array():array(); 
        
        return !empty($result)?$result:false; 
    } 
 
}