
<section>
  <div class="width">
   <div class="pageWidth">
     <div class="bredCrumb wow fadeInRight animated">
              <ul>
                <li><a href="#">Home</a></li>
                <li><a class="page-selection">Properties  <?php if(!empty($_POST['location'])){  echo 'in'.' ' . $_POST['location']; } ?></a></li>
              </ul>
            </div>
    <div class="rightside">
<!--    <a href="#"><p>Hyderabad:748 properties found</p></a>
 -->   </div>
      <div class="clear"></div>
   <div class="searchbox">
    <div class="pageWidth">
       
      <table class="searchtable">
   <tr>
   <td class="du" style="font-size: small;"><?php if(!empty($_POST['location'])){  echo  $_POST['location']; }else{
    echo 'Location: All';
   } ?></td>
   <td><p class="check_p">Price From</p><a href="#"></i></a><p><?php if(!empty($_POST['pricefrom'])){  echo  'Rs.'. $_POST['pricefrom']; }else{
    echo '-';
   } ?></p>
   <td colspan="2"><p class="check_p">Price To</p><a href="#"></a><p><?php if(!empty($_POST['priceto'])){  echo  'Rs.'. $_POST['priceto']; }else{
    echo '-';
   } ?></p>
   <td>Bed Rooms<p class="searchp"><?php if(!empty($_POST['bedrooms'])){  echo   $_POST['bedrooms']; }else{
    echo '-';
   } ?></p></td>
   <td>Type<p class="searchp"><?php if(!empty($_POST['property_type'])){  echo   $_POST['property_type']; }else{
    echo '-';
   } ?></p></td>
  <!--  <td>ADULTS<p class="searchp">0</p></td> -->
   <td><a href="#"><button type="button" class="butn1"id=""><i class="fa fa-search sh"></i><span class="change_search">CHANGE SEARCH</span></a></button>
   </tr>
   </table>
   <div id="myModal" class="modal wow fadeInDown animated">

  <!-- Modal content -->
  <div class="modal-content1">
    
    
    <div class="modal-body">
       <div class="find_hotel1">
            <form>
              <ul class="liststyle_none">
                <li class="fullwidth">
                  <label>I WANT TO GO TO</label>
          <select>
                    <option value="1">Location Name:</option>
                   
                  </select>
                
                </li>
              </ul>
              <ul class="liststyle_none">
                <li>
                  <label>Price From</label>
                  <select>
                    <option value="1">Select</option>
                    <option value="1">10000</option>
                    <option value="2">20000</option>
                    <option value="3">30000</option>
                    <option value="4">40000</option>
                    <option value="5">50000</option>
                    <option value="6">60000</option>
                  </select>  </li>
                <li>
                  <label>Price To</label>
                   <select>
                    <option value="1">Select</option>
                    <option value="1">10000</option>
                    <option value="2">20000</option>
                    <option value="3">30000</option>
                    <option value="4">40000</option>
                    <option value="5">50000</option>
                    <option value="6">60000</option>
                  </select>  </li>
              </ul>
        
              <ul class="liststyle_none">
                <li class="halfwidth">
                  <label>Bath Rooms</label>
                  <select>
                    <option value="1">Select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                  </select>
                </li>
                <li class="halfwidth">
                  <label>Bed Rooms</label>
                  <select>
                    <option value="1">Select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                  </select>
                </li>
                <li class="halfwidth">
                  <label>Type</label>
                  <select>
                    <option value="1">All Type</option>
                    <option value="1">Apartments</option>
                    <option value="2">Shop</option>
                    <option value="3">Restaurant</option>
                    <option value="4">Plots</option>
                  </select>
                </li>
              </ul>
             
            </form>
          </div>
     
     <div class="modal-footer">
           <button type ="button" class="butn11" value="Redirect Me" onclick="Redirect1();">CANCEL</button>
      <button type ="button" class="butn" value="Redirect Me" onclick="Redirect();">BOOK NOW</button>
        </div>
     
     
   </div>
   
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');
// Get the button that opens the modal
var btn = document.getElementById("myBtn");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
         </div>
   </div>
         <div class="clear"></div>
         <div class="left">
   <div class="first_left">
   <h2>Filter your Search</h2>
  </div>
   <div class="left_table">
  
   </div>
   <div class="searchbox">
   <h2></h2>
<!--    <input type='text' placeholder='E.g.:MVP Colony' id='search-text-input' />
 -->
</div>
<h2 class="search_h2">Search Nearby</h2><br>
<div class="unorder">
   <ul class="left_unorder">
    <form action="<?php echo base_url();?>property/propertylist" method="post">
  <?php  $properties_name = $this->db->query('select * from property group by area')->result_array(); ?>
    <?php foreach ($properties_name as $properties_name) { ?>
        <li><a href="#"><?php echo $properties_name['area']; ?></a></li>
        <div class="widthradio">
   <input type="checkbox" class="set_radio" value="<?php echo $properties_name['area'] ?>" name="search_area[]">
   </div>
   <?php } ?>
   <br>
   <input type="submit" name="search_btn" class="search_btn" value="Search">
   </form>
   </ul>
   </div>
      </div>  
   <div id="menucase">
  <div id="stylefour">
    <ul class="tabs">
      <li><a href="#view0" class="current">Property</a></li>
      </ul>
  </div>
   <div class="tabcontents">
           
        </div>
</div>
      <div class="right" id="view0">

        <?php if(!empty($properties)){ foreach ($properties as $properties) { ?>
    
      <div class="right1">
    <div class="image">
     <?php  if($properties['default_image'] != ''){ ?>
       <img src="<?php echo base_url(); ?>uploads/images/<?php echo $properties['default_image']; ?>" class="zoom-img" width="200px;" height="180px;" style="height: 180px;!important">
   <?php }else{ ?>
     <img src="<?php echo base_url(); ?>uploads/images/dummy.jpg" class="zoom-img" width="200px;" height="180px;" >
 <?php }?>
  
   </div>
                  <div class="para1">
   <div class="para">
   <a href="<?php echo base_url('property/propertydetails/'); ?><?php echo $properties['id'] ?>"><p class="p1"><?php echo $properties['title'] ?></p></a>
   <p class="p2"><?php echo $properties['area'] ?>, <?php echo $properties['city'] ?> &nbsp;&nbsp;<b style="color: #257fbc;"><i style="color: #257fbc;" class="fa fa-inr"></i> <?php echo $properties['min_price'] ?> to <?php echo $properties['max_price'] ?></b></p>
  <p class="p3"><?php echo $properties['title'] ?> is property at <?php echo $properties['area'] ?> in <?php echo $properties['city'] ?> city with all the latest attractive property architect designs. This property is recognized by Eswari Group with various Aminities. Click here for more details about ...<span class="p31">more</span></p>
  <p class="p4">+91 837 463 1133 </p>
 </div>
   </div>
   <div class="para21">
   <p><a href="<?php echo base_url('property/propertydetails/'); ?><?php echo $properties['id'] ?>"><button type ="button" class="butn">Details</button></a></p>  
   </div>
   </div>
 <?php }}else{
  echo 'No Properties found.';
 } ?>
   </div>
   </div>
   </div>
  </section>
  <div class="clear"></div>
  </div>