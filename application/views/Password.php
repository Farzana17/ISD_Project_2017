<!DOCTYPE html>
<html>
<body>

<h2>Modal Login Form</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" >
    
    
    
	<div class="container" style="text-align: center;background-color:#f1f1f1; ">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
      <label ><b>Log In</b></label>
    </div>
    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="user" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" required>
            <span class="pass">Forgot <a href="Password">password?</a></span>
  
      <button type="submit" style="font-family:verdana;font-style: bold;"><b>Log in</b></button>
      <input type="checkbox" checked="checked"> Remember me
    </div>
	
    <div class="container" >
      <span class="pass1"  >New user? sign up <a href="Signup" >here</a></span>
    </div>
    
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
