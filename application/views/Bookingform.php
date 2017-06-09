
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
         <h3 style="text-align:center"> Hotel Reservation Information </h3><br>
         
		 	
			 <form name='my' onsubmit="return validateForm()">
			 <label style="margin-left:90%;color:black;" > Welcome, <?php echo $this->session->flashdata('item');?></label>
			 <input name='help' type='hidden' value="<?php echo $this->session->flashdata('item');?>"/>
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
             	<label>Single Room Cost(per day)-tk</label>
             	
             	<output type='text' class="form-control"  id='out1'></output>
             	<div class="form-group">
                 <label>Date </label>
                 
					<input type='date'name='date3'id='date3' class="form-control" placeholder="today" />
					
			</div>
             	<label>Available Rooms</label>
             	
             	<output type='text' class="form-control"id='out2' name='out2' ></output>
             	
             </div>
            
             
			
             <div class="form-group">
                 <label>Number of room/suite<a style="font-size80%;color:red" id='error3'></a></label>
                 <select class="form-control" id="room_number" name="room_number" >
                     
                     <option value="1"> 1 </option>
                     <option value="2"> 2 </option>
                     <option value="3"> 3 </option>
                     <option value="4"> 4 </option>
                     <option value="5"> 5 </option>
                     <option value="6"> 6 </option>
                     <option value="7"> 7 </option>
                 </select>
             </div>
             <div class="form-group">
                 <label>Check in date<a style="color:red">*</a><a style="font-size80%;color:red" id='error1'></a></label>
                 
					<input type='date' name='date1'  class="form-control" placeholder="Check-in Date"  id='date1' required />
					
				
			</div>
			
			
			  <div class="form-group">
                 <label>Check out date<a style="color:red">*</a><a style="font-size80%;color:red" id='error2'></a></label>
                 
					<input type='date'name='date2'id='date2' class="form-control" placeholder="Check-out Date" required/>
					
			</div>
        
             <!-- <div class="form-group">
                 <label>Room Cost(per day)</label>
                 <select class="form-control" id="child_number" onchange="finalCost()">
                    <option value="0" selected>Select Room/Suite </option>
                     <option value="1"> Standard - 400tk</option>
                     <option value="2"> Deluxe - 600tk</option>
                     <option value="3"> Superior Deluxe - 700tk </option>
                     <option value="4"> Premier Deluxe - 800tk </option>
                     <option value="5"> Executive Suite - 1000 tk </option>
                     <option value="6"> Honeymoon Suite - 1200tk </option> 
                 </select>
             </div> -->
			 
			 
			 <div class="form-group">
                 <label>Telephone<a style="font-size: 80%;color:red">*</a></label>
                 
					<input type='tel' name='tel'class='form-control' required/>
				
			</div>
			
							                

			 
			 <div class="form-group">
             	
                 <button onclick='ff()'type="button" id='submit2' style="font-family:verdana;font-style: bold;font-size: 80%;margin-top: 2%;margin-left: 26%" ><b>Calculate Total Cost</b></button>
                </div>
                <div>
                 	<output  class="form-control"id='out3' name='out3' ></output>
              </div>

             <div class="form-group">
             	<a   href="<?php echo base_url();?>index.php/Homepage" >Go to Tripgenie.com</a>
                 <button type="submit" name='submit1'id='submit1' value='submit'style="font-family:verdana;font-style: bold;font-size: 80%;margin-top: 2%;margin-left: 14%" ><b>Book Now!</b></button>
                 
             </div>
         </form>
         
     </div>
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script >
var msg,msg2;
var lastUsedDateInputValue;
var lastUsedDateInputValue2;
var lastUsedDateInputValue3;

function validateForm() {
    if (msg != "") {
        alert("Ensure a valid check-in date");
        return false;
    }
    else if (msg2 != "") {
        alert("Ensure a valid check-out date");
        return false;
    }
}
function ff()
{
	var post_data = {
            'message': lastUsedDateInputValue,
            'message1': lastUsedDateInputValue2,
            'message2': $('#out1').val(),
            'message3': $('#room_number').val(),
            
            };
    
		
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>index.php/Bookingform/cal_cost_form",
            data: post_data,
            success: function(message) {
                
                $("#out3").html(message);
                //alert(message);
                
            }
        });

}

$(function() {
	
	$('input[id^=date1]').on('change', function() {
	    lastUsedDateInputValue = $(this).val();
	    var post_data = {
	            'message': lastUsedDateInputValue,
	            
	            };
        

	        $.ajax({
	            type: "POST",
	            url: "<?php echo base_url(); ?>index.php/Bookingform/check",
	            data: post_data,
	            success: function(message) {
	                
	                $("#error1").html(message);
	                msg=message;
	            }
	        });
	        
	});

	
	

	
	$('input[id^=date1]').on('change', function() {
	    lastUsedDateInputValue = $(this).val();
	        var post_data = {
		            'message': lastUsedDateInputValue2,
		            'message1':lastUsedDateInputValue,
		            
		            };
	        $.ajax({
	            type: "POST",
	            url: "<?php echo base_url(); ?>index.php/Bookingform/check_validity",
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
	            url: "<?php echo base_url(); ?>index.php/Bookingform/check_validity",
	            data: post_data,
	            success: function(message) {
	                // return success message to the id='result' position
	                $("#error2").html(message);
	                msg2=message;
	            }
	        });
	});

	
	
	
    $('#choice').click(function() {

        //get input data as a array
        var post_data = {
            'message': $("#choice").val(),
            
            };

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>index.php/Bookingform/get_cost",
            data: post_data,
            success: function(message) {
                // return success message to the id='result' position
                $("#out1").html(message);
            }
        });

    });
    $('#choice').click(function() {

        //get input data as a array
        var post_data = {
            'message': $("#choice").val(),
            'msg':lastUsedDateInputValue3,
            };

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>index.php/Bookingform/get_room",
            data: post_data,
            success: function(message) {
                // return success message to the id='result' position
                $("#out2").html(message);
            }
        });

    });

    $('#date3').change(function() {
    	lastUsedDateInputValue3 = $(this).val();
        //get input data as a array
        var post_data = {
            'message': $("#choice").val(),
            'msg':lastUsedDateInputValue3,
            };

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>index.php/Bookingform/get_room",
            data: post_data,
            success: function(message) {
                // return success message to the id='result' position
                $("#out2").html(message);
            }
        });

    });

});

    
</script>
</body>
</html>