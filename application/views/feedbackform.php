
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  	@import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
.rating { 
  border: none;
  float: left;
  margin:0px 0px 0px 28px;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin-top: 2px;
  padding:0px 5px 0px 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
	color: #fff; 
	float: right;
	margin:4px 1px 0px 0px;
	background-color:#D8D8D8;
	border-radius:15px;
  height:25px;
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { 
	background-color:#7ED321 !important;
  cursor:pointer;
} /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { 
	background-color:#7ED321 !important;
  cursor:pointer;
} 



  	textarea.form-control {
    background: #f5f5f5;
    border: 1px solid #fbb548;
    height: auto;
}

.h4, h4 {
    font-size: 18px;
    color: #606163;
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
.msg1
{
    text-align:center;
    padding:2px;
    margin-top:10px;
    color:red;
}
  </style>
<div class="container">
 <div class="sec-title centered" style="margin-top: 40px;">
<h2>Feedback Form </h2>
<div class="separator"></div>
                        </div>
                         <div class="msg1">
            <?php 
        if(!empty($success_msg)){
            echo $success_msg;
        }elseif(!empty($error_msg)){
            echo $error_msg;
        }
    ?>
</div>
                        <h2></h2>
  <div class="panel panel-default">
  
    
    <div class="panel-body">
    	<form action="" method="post">
    		<div class="form-group">
    	    <div class="col-md-6">
    		<h4>Q. This is test question1?</h4>
    		<fieldset class="rating">
								<input type="radio" id="field1_star5" name="rating1" value="5" /><label class = "full" for="field1_star5"></label>
								
								<input type="radio" id="field1_star4" name="rating1" value="4" /><label class = "full" for="field1_star4"></label>
								
								<input type="radio" id="field1_star3" name="rating1" value="3" /><label class = "full" for="field1_star3"></label>
								
								<input type="radio" id="field1_star2" name="rating1" value="2" /><label class = "full" for="field1_star2"></label>
								
								<input type="radio" id="field1_star1" name="rating1" value="1" /><label class = "full" for="field1_star1"></label>
								
							</fieldset>
    		<!-- <textarea name="ans1" class="form-control"></textarea> -->
    		 
    		<?php echo form_error('rating1','<p class="msg2 help-block text-danger">','</p>'); ?>
    	    </div>
    	    <div class="col-md-6">
    		<h4>Q. This is test question2?</h4>
    		<fieldset class="rating">
								<input type="radio" id="field2_star5" name="rating2" value="5" /><label class = "full" for="field2_star5"></label>
								
								<input type="radio" id="field2_star4" name="rating2" value="4" /><label class = "full" for="field2_star4"></label>
								
								<input type="radio" id="field2_star3" name="rating2" value="3" /><label class = "full" for="field2_star3"></label>
								
								<input type="radio" id="field2_star2" name="rating2" value="2" /><label class = "full" for="field2_star2"></label>
								
								<input type="radio" id="field2_star1" name="rating2" value="1" /><label class = "full" for="field2_star1"></label>
								
							</fieldset>
    		<!-- <textarea name="ans2" class="form-control"></textarea> -->
    		
    		<?php echo form_error('rating2','<p class="msg2 help-block text-danger">','</p>'); ?>
    	    </div>
    	    </div><br><br><br><br>

    	    <div class="form-group">
    	    <div class="col-md-6">
    		<h4>Q. This is test question3?</h4>
    		<!-- <textarea name="ans3" class="form-control"></textarea> -->
    		<fieldset class="rating">
								<input type="radio" id="field3_star5" name="rating3" value="5" /><label class = "full" for="field3_star5"></label>
								
								<input type="radio" id="field3_star4" name="rating3" value="4" /><label class = "full" for="field3_star4"></label>
								
								<input type="radio" id="field3_star3" name="rating3" value="3" /><label class = "full" for="field3_star3"></label>
								
								<input type="radio" id="field3_star2" name="rating3" value="2" /><label class = "full" for="field3_star2"></label>
								
								<input type="radio" id="field3_star1" name="rating3" value="1" /><label class = "full" for="field3_star1"></label>
								
							</fieldset>
    		<?php echo form_error('rating3','<p class="msg2 help-block text-danger">','</p>'); ?>
    	    </div>
    	    <div class="col-md-6">
    		<h4>Q. This is test question4?</h4>
    		<fieldset class="rating">
								<input type="radio" id="field4_star5" name="rating4" value="5" /><label class = "full" for="field4_star5"></label>
								
								<input type="radio" id="field4_star4" name="rating4" value="4" /><label class = "full" for="field4_star4"></label>
								
								<input type="radio" id="field4_star3" name="rating4" value="3" /><label class = "full" for="field4_star3"></label>
								
								<input type="radio" id="field4_star2" name="rating4" value="2" /><label class = "full" for="field4_star2"></label>
								
								<input type="radio" id="field4_star1" name="rating4" value="1" /><label class = "full" for="field4_star1"></label>
								
							</fieldset>
    		<!-- <textarea name="ans4" class="form-control"></textarea> -->
    		<?php echo form_error('rating4','<p class="msg2 help-block text-danger">','</p>'); ?>
    	    </div>
    	    </div>

    	    <div class="form-group">
    	    <div class="col-md-6">
    		<h4>Q. This is test question5?</h4>
    		<!-- <textarea name="ans5" class="form-control"></textarea> -->
    		<fieldset class="rating">
								<input type="radio" id="field5_star5" name="rating5" value="5" /><label class = "full" for="field5_star5"></label>
								
								<input type="radio" id="field5_star4" name="rating5" value="4" /><label class = "full" for="field5_star4"></label>
								
								<input type="radio" id="field5_star3" name="rating5" value="3" /><label class = "full" for="field5_star3"></label>
								
								<input type="radio" id="field5_star2" name="rating5" value="2" /><label class = "full" for="field5_star2"></label>
								
								<input type="radio" id="field5_star1" name="rating5" value="1" /><label class = "full" for="field5_star1"></label>
								
							</fieldset>
    		<?php echo form_error('rating5','<p class="msg2 help-block text-danger">','</p>'); ?>
    	    </div>
    	    <div class="col-md-6">
    		<h4>Q. This is test question6?</h4>
    		<!-- <textarea name="ans6" class="form-control"></textarea> -->
    		<fieldset class="rating">
								<input type="radio" id="field6_star5" name="rating6" value="5" /><label class = "full" for="field6_star5"></label>
								
								<input type="radio" id="field6_star4" name="rating6" value="4" /><label class = "full" for="field6_star4"></label>
								
								<input type="radio" id="field6_star3" name="rating6" value="3" /><label class = "full" for="field6_star3"></label>
								
								<input type="radio" id="field6_star2" name="rating6" value="2" /><label class = "full" for="field6_star2"></label>
								
								<input type="radio" id="field6_star1" name="rating6" value="1" /><label class = "full" for="field6_star1"></label>
								
							</fieldset>
    		<?php echo form_error('rating6','<p class="msg2 help-block text-danger">','</p>'); ?>
    	    </div>
    	    </div>

    	    <div class="form-group">
    	    	 <div class="col-md-4"></div>
    	    <div class="col-md-4" style="margin-top: 25px;">
    		<input type="submit" class="btn btn-danger" name="postfeedback" value="Post your feedback">
    		</div>
    		 <div class="col-md-4"></div>
    		</div>
    	</form>
    </div>
  </div>
</div>

<script type="text/javascript">
	$("label").click(function(){
  $(this).parent().find("label").css({"background-color": "#D8D8D8"});
  $(this).css({"background-color": "#7ED321"});
  $(this).nextAll().css({"background-color": "#7ED321"});
});
</script>