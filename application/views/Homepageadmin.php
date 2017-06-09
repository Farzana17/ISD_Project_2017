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
    
    <button name='history' type='submit' value='history'><b>History</b></button>
    <button name='admin' type='submit' value='admin'><b>Add Room Info</b></button>
    </div>
  </form>
</div>


</body>
</html>