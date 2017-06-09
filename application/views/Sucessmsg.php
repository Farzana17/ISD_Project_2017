<!DOCTYPE html>
<html>
<style>
h1   {color: green;}
/* Full-width input fields */
input[type=text], input[type=password],input[type=Email] {
   width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 70%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}
.signupbtn{
	float:right;

}

/* Float cancel and signup buttons and add an equal width */ /*float:left;*/
.cancelbtn,.signupbtn {width:30%}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 2% auto 5% auto; /* 5% from the top, 15% from the bottom and centered */
    //border: 1px solid #888;
    width: 70%; /* Could be more or less, depending on screen size */
}



.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
	   
    }
}
</style>
<body >
<a href="<?php echo base_url();?>index.php/Homepage"><img src="<?php echo base_url('/logo.png'); ?>" align="center" ></a>
<div  id =cent align="center">
  <img src="<?php echo base_url('/homelook.png'); ?>" >
  </div>


<div class="modal-content">
  <form   id='sub'>
    <div class="container">
		<a style="margin-left: 90%" name='help'><?=$heading; ?></a>
	    <input type='hidden' id='help' value='<?=$heading; ?>'/>
		<h1 style="text-align :center">Booking Successful!!</h1>
      <div class="clearfix" >
        <h3 align="center">Thanks for being with us.</h3>
		<p><br><br></p>
		
		<center> <a style="font-size: 150%" href="<?php echo base_url();?>index.php/Homepage" ><b>Click here to discover more</b></a> </center>
		<br>
        
      </div>
    </div>
  </form>
</div>

<script >
$(function() {
	
	$('sub').on('submit', function() {
	    
	    var post_data = {
	            'msg1': $('help').val(),
	            
	            };
        

	        $.ajax({
	            type: "POST",
	            url: "<?php echo base_url(); ?>index.php/Bookingform/go",
	            data: post_data,
	            success: function(message) {
	                
	                //$("#error1").html(message);
	                //msg=message;
	            }
	        });
	}); 
});

	
</script>
</body>
</html>