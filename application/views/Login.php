<!DOCTYPE html>
<html>
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
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
    width: 100%;
}

button:hover {
    opacity: 0.8;
}


/* Center the image and position the close button */



.container {
    padding: 16px;
    position: relative;
}

span.psw {
    float: right;
    padding-top: 16px;
}
.container1 {
    padding: 13px;
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
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 40%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>
  <a href="<?php echo base_url();?>index.php/Homepage"><img src="<?php echo base_url('/logo.png'); ?>" align="center" ></a>
<div  id =cent align="center">
  <img src="<?php echo base_url('/homelook.png'); ?>" >
  </div>
  <form class="modal-content animate"  >
    
    
    
	<div class="container" style="text-align: center;background-color:#f1f1f1; ">
      
      <label ><b>Log In</b></label>
    </div>
   
    <div class="container">
    	 <?php echo $this->session->flashdata('msg'); ?>
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="user" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" required>
            <span class="pass">Forgot <a href="Password">password?</a></span>
  
      <button type="submit" name='submit' value='submit'style="font-family:verdana;font-style: bold;" ><b>Log in</b></button>
      <input type="checkbox" checked="checked"> Remember me
    </div>
	
    <div class="container" >
      <span class="pass1"  >New user? <a  href="<?php echo base_url();?>index.php/Signup" > Sign Up</a></span><a style="margin-left: 40%"href="<?php echo base_url();?>index.php/Homepage" >go to tripgenie.com</a>
    </div>
    
  </form>




</body>
</html>
