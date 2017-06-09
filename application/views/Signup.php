<!DOCTYPE html>
<html>
<style>
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

<h2 style="text-align :center ">Signup Form</h2>
<div class="modal-content">
  <form   >
    <div class="container">
	   <label><b>First Name </b></label>
      <input type="text" placeholder="Enter First Name" name="fName" maxlength="70" size="30" >
	  <label><b>Last Name </b></label>
      <input type="text" placeholder="Enter Last Name" name="lName" >
      
	  <label><b>User Name <span style="color: red;"> *</span></b></label>
	  <?php echo $this->session->flashdata('msg1'); ?>
      <input type="text" placeholder="Enter User Name" name="uName" required>
      
      <label><b>Email <span style="color: red;"> *</span></b></label>
      <?php echo $this->session->flashdata('msg'); ?>
      <input type="Email" placeholder="Enter Email" name="email" required>

      <label><b>Password <span style="color: red;"> *</span></b><span style="opacity: .7;font-size: 90%;">(6 or more characters including UPPER,lowercase and numbers)</span></label>
      <input title="Password must contain at least 6 characters, including UPPER,lowercase and numbers" type="password" placeholder="Enter password"required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="pwd1" onchange="
			this.setCustomValidity(this.validity.patternMismatch ? this.title : '');
			if(this.checkValidity()) form.pwd2.pattern = this.value;">

      <label><b>Confirm Password <span style="color: red;"> *</span></b></label>
      <input  placeholder="Re-enter password"title="Please enter the same Password as above" type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="pwd2" onchange="this.setCustomValidity(this.validity.patternMismatch ? this.title : '');">
      
      <div class="clearfix" >
		<p><input type="checkbox" required name="terms"> I accept the <a href="#">Terms and Conditions</a><a  style="margin-left:10% ;opacity :.7">Already have an account? <a href="<?php echo base_url();?>index.php/Login" >Log in</a></a></p>
        
        <button type="submit" name='submit' value='submit'style="width : 30%">Join Now!</button><a style="margin-left: 10%"href="<?php echo base_url();?>index.php/Homepage" >go to tripgenie.com</a>
      </div>
    </div>
  </form>
</div>


</body>
</html>