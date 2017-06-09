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

<body style ="background-color:#f1f1f0">
<img src="<?php echo base_url('/logo.png'); ?>" align="center" >
<div  id =cent align="center">
  <img src="<?php echo base_url('/homelook.png'); ?>" >
  <form   >
    <div >
    <button name='user' type='submit' value='log'><b>Enter As User</b></button>
    <button name='admin' type='submit' value='sign'><b>Enter As Admin</b></button>
    
    </div>
  </form>
</div>


</body>
</html>