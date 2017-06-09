
<!DOCTYPE html>
<html>
<style>
#output {
    background-color: #c5edf3;
    color: #463c39;
    font-size: 17px;
    padding: 30px 30px;
    width: 40%;
    border: 2px solid #009688;
    font-family: sans-serif;
    line-height: 1.8;
}
#input{
	margin-top: 30px;
    margin-left: 350px;
    margin-right: 350px;
    margin-bottom: 60px;
    padding: 40px 50px;
    background-color: #c6badc;
    box-shadow: 3px 5px 10px #7527b0;
}



.hotel_reserve_box {
    margin-top: 30px;
    margin-left: 350px;
    margin-right: 350px;
    margin-bottom: 60px;
    padding: 40px 50px;
    background-color: #ffffff;
    
}


.input-group-addon { border-radius: 0; }

.tm-date {
	color: #c3c3c3;
	padding: 10px 25px;
	text-transform: uppercase;
}
.form-control {	border-radius: 0; }
.form-control:focus {
	border-color: #FCDD44;
	box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px rgba(252, 221, 68, 0.6);
}





button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0px;
    border: none;
    cursor: pointer;
    width: 45%;
    
    
}

button:hover {
    opacity: 0.8;
}







</style>


<head lang="en">
    <meta charset="UTF-8">
    <title > Hotel Reservation Form </title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    

    


</head>
<body>
<a href="<?php echo base_url();?>index.php/Homepage"><img src="<?php echo base_url('/logo.png'); ?>" align="center" ></a>
<div  id =cent align="center">
  <img src="<?php echo base_url('/homelook.png'); ?>" >

	
	</div>
     <div class="hotel_reserve_box">
         <h3 style="text-align:center"> Room Info </h3><br>
         
		 	
			 <form name='my' onsubmit="return validateForm()">
			 
             <div class="form-group" >
                 <label>Room/Suite Type</label>
                 <select class="form-control" id="choice"name='choice'   >
                     <option value="Standard"> Standard </option>
                     <option value="Deluxe"> Deluxe </option>
                     <option value="Superior Deluxe"> Superior Deluxe </option>
                     <option value="Premier Deluxe"> Premier Deluxe  </option>
                     <option value="Executive Suite"> Executive Suite </option>
                     <option value="Honeymoon Suite"> Honeymoon Suite </option>
                 </select>
                 
             </div>
             
             <div  class='form-group'>
             	<label>Single Room Cost(per day)-tk</label><a style="color:red">*</a>
             	
             	<input title="input must be number" type='text' class="form-control"  name='input1'placeholder="Enter cost"required pattern="(?=.*[0-9]).{1,}"  onchange="
			this.setCustomValidity(this.validity.patternMismatch ? 'input must be number' : '');"/>
             	<div class="form-group">
                 <label>Available Rooms</label><a style="color:red">*</a>
             	
             	<input title="input must be number" type='text' class="form-control"  name='input2'placeholder="Enter available Rooms"required pattern="(?=.*[0-9]).{1,}"  onchange="
			this.setCustomValidity(this.validity.patternMismatch ? this.title : '');"/>
             	
             </div>
            
             
			</div>
             
             <div class="form-group">
                 <label>From<a style="color:red">*</a><a style="font-size80%;color:red" id='error1'></a></label>
                 
					<input type='date' name='date1'  class="form-control" placeholder="Check-in Date"  id='date1' required />
					
				
			</div>
			
			
			  <div class="form-group">
                 <label>To<a style="color:red">*</a><a style="font-size80%;color:red" id='error2'></a></label>
                 
					<input type='date'name='date2'id='date2' class="form-control" placeholder="Check-out Date" required/>
					
			</div>
        
            
			 
			 
			 
			
							                

			 
			 

             <div class="form-group">
             	<a   href="<?php echo base_url();?>index.php/Homepage" >Go to Tripgenie.com</a>
                 <button type="submit" name='submit1'id='submit1' value='submit'style="font-family:verdana;font-style: bold;font-size: 80%;margin-top: 2%;margin-left: 14%" ><b>Add Now!</b></button>
                 
             </div>
         </form>
         
     </div>

      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script >
var msg2='error';
var lastUsedDateInputValue;
var lastUsedDateInputValue2;



$(function() {
	
	
	
	

	
	$('input[id^=date1]').on('change', function() {
	    lastUsedDateInputValue = $(this).val();
	        var post_data = {
		            'message': lastUsedDateInputValue2,
		            'message1':lastUsedDateInputValue,
		            
		            };
	        $.ajax({
	            type: "POST",
	            url: "<?php echo base_url(); ?>index.php/Admin/check_validity",
	            data: post_data,
	            success: function(message) {
	                // return success message to the id='result' position
	                $("#error2").html(message);
	                msg2=message;
	            }
	        });
	});
	$('input[id^=date2]').on('change', function() {
	     lastUsedDateInputValue2 = $(this).val();
	    var post_data = {
	            'message': lastUsedDateInputValue2,
	            'message1':lastUsedDateInputValue,
	            
	            };

	        $.ajax({
	            type: "POST",
	            url: "<?php echo base_url(); ?>index.php/Admin/check_validity",
	            data: post_data,
	            success: function(message) {
	                // return success message to the id='result' position
	                $("#error2").html(message);
	                msg2=message;
	            }
	        });
	

	
	});
	
    

});

    
</script>
</body>
</html>