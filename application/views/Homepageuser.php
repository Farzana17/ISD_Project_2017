<!DOCTYPE html>
<html>
<style>
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 25%;
    border: none;
    
    cursor: pointer;
    width: 50%;
}
</style>

<body style ="background-color:#f1f1f0;">
<a href="<?php echo base_url();?>index.php/Homepage"><img src="<?php echo base_url('/logo.png'); ?>" align="center" ></a>
<div  id =cent align="center">
  <img src="<?php echo base_url('/homelook.png'); ?>" >



  <form   >
    <div >
    <button name='log' type='submit' value='log'><b>Log In</b></button>
    <button name='sign' type='submit' value='sign'><b>Sign Up</b></button>
    
    <button name='book' type='submit' value='book'><b>Booking</b></button>
    
    </div>
  </form>
</div>


</body>
</html>