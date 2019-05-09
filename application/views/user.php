<!DOCTYPE html>
<html>
<head>
	<title>task</title>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 
</head>
<body>
	<div class="container">

	<form>
  <div class="form-group">
    <label for="formGroupExampleInput">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Password</label>
    <input type="text" class="form-control" id="password" placeholder="Password">

  </div>
  <div class="form-group">
    
  <button type="button" name="login" id="login" class="btn btn-primary mb-2">login</button>
    
  </div>

</form>
</div>


 <script>
$(document).ready(function(){
 $('#login').click(function(){

  var email = $('#email').val();
  var password = $('#password').val();
  if(email != '')
  {
  
   $.ajax({
 
    url:"<?php echo base_url(); ?>user/fetch_email",
    method:"POST",
    data:{email:email,password:password},
    success:function(data)
    {
    	alert(data);
    	if(data==0)
    	{
          alert('Username and password is Incorrect')

    	}
    	else
       {
        alert('Username and password is correct');

        }
    }
   });
  }
  
 });


 
});
</script>

</body>
</html>