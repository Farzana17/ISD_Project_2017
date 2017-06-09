<html>
<body>
<form action="" method="post" accept-charset="utf-8">

        <table align="center">

            <tr>
                <td>Message :</td>
                <td>
                    <textarea name="message" id="message" placeholder="Write here the message"></textarea>
                </td>
            </tr>

            <tr>
                <td>&nbsp;</td>
                <td id="result"> </td>
            </tr>

            <tr>
                <td>&nbsp;</td>
                <td>
                    <button type="button" id="submit">Submit</button>
                </td>
            </tr>

        </table>

    </form>
     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    
	<!--script type="text/javascript" src="<?echo  base_url();?>assets/js/jquery2.js"></script-->
    <script type="text/javascript">
    
    $(document).ready(function() {

            $('#submit').click(function() {

                //get input data as a array
                var post_data = {
                    'message': $("#message").val(),
                    '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
                };

                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>index.php/Hotellist/insertByajax",
                    data: post_data,
                    success: function(message) {
                        // return success message to the id='result' position
                        $("#result").html(message);
                    }
                });

            });

        });
    </script>
</body>

</html>