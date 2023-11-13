<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Test_model extends CI_Model{ 
function fetch_filter_type($type)
 {
  $this->db->distinct();
  $this->db->select($type);
  $this->db->from('property');
  return $this->db->get();
 }

 function make_query($brand)
 {
  $query = "
  SELECT *, (SELECT file_name FROM property_images WHERE property_id = property.id ORDER BY id ASC LIMIT 1) as default_image FROM property 
  ";

  if(isset($brand))
  {
   $brand_filter = implode("','", $brand);
   $query .= "
    where area IN('".$brand_filter."')
   ";
  }
  return $query;
 }

 function count_all($brand)
 {
  $query = $this->make_query($brand);
  $data = $this->db->query($query);
  return $data->num_rows();
 }

 function fetch_data($limit, $start, $brand)
 {
  $query = $this->make_query($brand);

  $query .= ' LIMIT '.$start.', ' . $limit;

  $data = $this->db->query($query);

  $output = '';
  if($data->num_rows() > 0)
  {
   foreach($data->result_array() as $row)
   {
    $base_url = base_url();
    if($row['default_image'] == ''){
      $row['default_image'] = 'dummy.jpg';
    }

    $output .='<div class="right1">
    <div class="image">
    
       <img src="'.$base_url.'uploads/images/'. $row['default_image'] .'" class="zoom-img" width="200px;" height="180px;" style="height: 180px;!important">
   </div>
  <div class="para1">
   <div class="para">
   <a href="'.$base_url.'property/propertydetails/'. $row['id'] .'"><p class="p1">'. $row['title'] .'</p></a>
   <p class="p2">'. $row['area'] .', '. $row['city'] .'</p>
  <p class="p3">'. $row['title'] .' is property at '. $row['area'] .' in '. $row['city'] .' city with all the latest attractive property architect designs. This property is recognized by Eswari Group with various Aminities. <span class="p31">more</span></p>
  <p class="p4">+91 837 463 1133 </p>
 </div>
   </div>
   <div class="para21">
   <p><a href="'.$base_url.'property/propertydetails/'. $row['id'] .'"><button type ="button" class="butn">Details</button></a></p>  
   </div>
   </div>';
   }
  }
  else
  {
   $output = '<h3>No Data Found</h3>';
  }
  return $output;
 }
}
    
?>

