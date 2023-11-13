<?php
class Dynamic_dependent_model extends CI_Model
{
 function fetch_country()
 {
  $this->db->order_by("city", "ASC");
  $this->db->group_by("city");
  $query = $this->db->get("cities");
  return $query->result();
 }

 function fetch_state($country_id)
 {
  $this->db->where('district', $country_id);
  $this->db->order_by('area', 'ASC');
  $this->db->group_by('area');
  $query = $this->db->get('property');
  $output = '<option value="">Select Area</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->area.'">'.$row->area.'</option>';
  }
  return $output;
 }


  function fetch_sqft($country_id)
 {
  $this->db->where('property_id', $country_id);
  $this->db->order_by('id', 'ASC');
  $this->db->group_by('flat_sqft');
  $query = $this->db->get('property_details');
  $output = '<option value="">Select Sqft</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->flat_sqft.'">'.$row->flat_sqft.'</option>';
  }
  return $output;
 }

  function fetch_price($country_id)
 {
  $this->db->where('property_id', $country_id);
  $this->db->order_by('id', 'ASC');
  $this->db->group_by('price_sqft');
  $query = $this->db->get('property_details');
  $output = '<option value="">Select Price</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->price_sqft.'">'.$row->price_sqft.'</option>';
  }
  return $output;
 }

 function fetch_location($country_id)
 {
  $this->db->where('id', $country_id);
  $query = $this->db->get('property');
  $output = '<option value="">Select Location</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->city.'">'.$row->city.'</option>';
  }
  return $output;
 }

 function fetch_area($location)
 {
  $this->db->where('id', $location);
  $query = $this->db->get('property');
  $output = '<option value="">Select Area</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->area.'">'.$row->area.'</option>';
  }
  return $output;
 }

 function fetch_project($area)
 {
  $this->db->where('area', $area);
  $query = $this->db->get('property');
  $output = '<option value="">Select Project Name</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->id.'">'.$row->title.'</option>';
  }
  return $output;
 }

}

?>
