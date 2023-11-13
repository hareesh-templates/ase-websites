 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
  
.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #2eba0061;
  overflow: hidden;
  width: 100%;
  height: 100%;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: .3s ease;
  transition: .3s ease;
}
.thumbnail{
      border: 1px solid #ef1e24;
}
.thumbnail .caption {
    padding: 0px;
}
.thumbnail:hover .overlay {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
</style>
<style type="text/css">
  .sec-title h2 {
    position: relative;
    font-size: 36px;
    font-weight: 700;
    color: #1a1d1f;
    line-height: 1.2em;
    padding-bottom: 20px;
    display: inline-block;
}
.sec-title.centered .separator {
    margin: 0 auto;
}
.sec-title .separator {
    position: relative;
    width: 50px;
    height: 4px;
}
.sec-title .separator:before {
    position: absolute;
    content: '';
    left: 0px;
    top: 0px;
    width: 25px;
    height: 4px;
    background-color: #1a1d1f;
}
.sec-title .separator:after {
    position: absolute;
    content: '';
    right: 0px;
    top: 0px;
    width: 25px;
    height: 4px;
    background-color: #dc292e;
}
.sec-title.centered {
    text-align: center;
    margin-top:20px;
    margin-bottom:30px;
}
    </style>
<div class="container">
       <div class="sec-title centered">
<h2 style="text-align: center;"><?php echo $property_details2['title']; ?></h2>
<div class="separator"></div>
                        </div>
  <div class="row">
    <?php foreach($property_details3 as $property_details3){?>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="<?php echo base_url('uploads/events/'); ?><?php echo $property_details3['file_name']; ?>" target="_blank">
           <img class="zoomD" data-u="image" src="<?php echo base_url('uploads/events/'); ?><?php echo $property_details3['file_name']; ?>" alt="flats for sale in vizag" style="height: 300px;"/>
          <div class="caption">
          </div>
           <div class="overlay">
            <div class="text"></div>
          </div>
        </a>
      </div>
    </div>
   <?php } ?>
  
   
  </div>

</div>



