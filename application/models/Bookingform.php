<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Bookingform extends CI_Model{

	public function insert($data = array()) {
        $insert = $this->db->insert('plot_booking_form', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }

    function getRows($id = ""){
         //echo $this->session->userdata('id'); die();
        if(!empty($id)){
            $query = $this->db->get_where('plot_booking_form', array('date_id' => $id));
            return $query->row_array();
        }else{
            if($this->session->userdata('id') >= 20){
                $this->db->select('plot_booking_form.*, login.name, login.username');
                $this->db->join('login', 'login.id = plot_booking_form.added_by');
                $query = $this->db->get_where('plot_booking_form', array('added_by' => $this->session->userdata('id')));
            }else{
                $this->db->select('plot_booking_form.*, login.name, login.username');
                $this->db->join('login', 'login.id = plot_booking_form.added_by');
                $query = $this->db->get('plot_booking_form');
            }
            
            return $query->result_array();
        }
    }

    function getRowsbookingproject($id = ""){
        if(!empty($id)){
            $this->db->select('bookingproject.*, property.title');
            $this->db->join('property', 'property.id = bookingproject.project_name');
            $query = $this->db->get_where('bookingproject', array('date_id' => $id));
            return $query->row_array();
        }else{
             if($this->session->userdata('id') >= 20){
                $session_id = $this->session->userdata('id');
                
                $query = $this->db->query("SELECT `bookingproject`.*, `login`.`name`, `login`.`username`, `property`.`title` FROM `bookingproject` JOIN `login` ON `login`.`id` = `bookingproject`.`added_by` join property on bookingproject.project_name = property.id WHERE (`bookingproject`.`added_by` = $session_id or `am` = $session_id or `rm` = $session_id or `manager` = $session_id or `bm` = $session_id)");
             }else{
                $this->db->select('bookingproject.*, login.name, login.username, property.title');
                $this->db->join('login', 'login.id = bookingproject.added_by');
                $this->db->join('property', 'property.id = bookingproject.project_name');
                $query = $this->db->get('bookingproject');
             }
            
            return $query->result_array();
        }
    }

      public function insertbooking_details($data = array()) { 
        if(!empty($data)){ 
           
            $insert = $this->db->insert('bookingproject', $data); 
             
            // Return the status 
            return $insert?$this->db->insert_id():false; 
        } 
        return false; 
    } 
    public function deleteproject($id){
        $delete = $this->db->delete('bookingproject',array('id'=>$id));
        return $delete?true:false;
    }
    public function deletebooking($id){
        $delete = $this->db->delete('plot_booking_form',array('id'=>$id));
        return $delete?true:false;
    }
     public function update($data, $id) {
        if(!empty($data) && !empty($id)){
            $update = $this->db->update('bookingproject', $data, array('date_id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }
    public function getRMs($session_id){
        $query = $this->db->get_where('login', array('report' => $session_id));
        return $query->result_array();
    }
    public function getProperty(){
        $this->db->where('property_status !=', 'Sold out');
        $query = $this->db->get('property');
        return $query->result_array();
    }
     public function getABMs($session_id){
        $query = $this->db->query("SELECT id, name FROM login WHERE id = (SELECT report FROM `login` WHERE id=$session_id)");
       // $query = $this->db->get_where('login', array('designation' => 'ABM'));
        return $query->result_array();
    }
     public function getBMs($session_id){
        $query = $this->db->query("SELECT id,name FROM login WHERE id = (SELECT report FROM login WHERE id=(SELECT id FROM login WHERE id = (SELECT report FROM `login` WHERE id=$session_id)))");
       // $query = $this->db->get_where('login', array('designation' => 'BM'));
        return $query->result_array();
    }

    function getRowsentemail(){
             if($this->session->userdata('id') >= 20){
                $session_id = $this->session->userdata('id');
                
                $query = $this->db->query("SELECT `sales_link_to_customer`.*, `login`.`name`, `login`.`username` FROM `sales_link_to_customer` JOIN `login` ON `login`.`id` = `sales_link_to_customer`.`sent_by` WHERE `sent_by` = $session_id");
             }else{
                $this->db->select('sales_link_to_customer.*, login.name, login.username');
                $this->db->join('login', 'login.id = sales_link_to_customer.sent_by');
                $query = $this->db->get('sales_link_to_customer');
             }
            
            return $query->result_array();
        
    }

    public function insert_send_mail($data = array()) {
        $insert = $this->db->insert('sales_link_to_customer', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }

     function get_emp_list(){
            $query = $this->db->get_where('login',array('status' => 'active','id >'=> 20,'company'=>'eh' ));
            return $query->result_array();
    }

}
?>