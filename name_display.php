<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Admin</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
       <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.0.0/backbone-min.js"></script> -->

</head>
<body>


<h1>Sign Up</h1>

   <form>
   
   <label for='Username'> Username </label>
   <input type='text' name='username' id='username' size='30' /> <br>

   <label for='Email'> Email </label>
   <input type='text' name='email' id='email' size='30' /> <br>
   
      <label for='Password'> Password </label>
   <input type='text' name='password' id='password' size='30' /> <br>
   
   <input type="submit" value="Create" id="create" />
   
   </form>
   
   
   
   
  <script>
  
  $(document).ready(function() {
	  
	  $("#create").click(function(event) {
		  event.preventDefault();
		var username = $("input#username").val();  
	    var email = $("input#email").val(); 
	    var password = $("input#password").val(); 
	$.ajax({
		method: "POST",
		url: "<?php echo base_url(); ?>index.php/People/person",	
		dataType: 'JSON',
		data: {username: username, email: email, password: password},
		
		success: function(data) {
			console.log(username, email, password);
			
		}
	});
	  });
  });

  
  </script>



</div>

</body>
</html>