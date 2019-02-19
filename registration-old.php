<?php
include_once 'include/class.user.php';  $user = new User(); // Checking for user logged in or not
if (isset($_REQUEST['submit'])){
extract($_REQUEST);
$register = $user->reg_user($fullname, $uname,$upass, $uemail);
if ($register) {
// Registration Success
echo 'Registration successful <a href="login.php">Click here</a> to login';
} else {
// Registration Failed
echo 'Registration failed. Email or Username already exits please try again';
}
}
?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
Register
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<style><!--
#container{width:400px; margin: 0 auto;}
--></style>
<script type="text/javascript" language="javascript">
function submitreg() {
var form = document.reg;
if(form.name.value == ""){
alert( "Enter name." );
return false;
}
else if(form.uname.value == ""){
alert( "Enter username." );
return false;
}
else if(form.upass.value == ""){
alert( "Enter password." );
return false;
}
else if(form.uemail.value == ""){
alert( "Enter email." );
return false;
}
}
</script>
<div id="container">
	<h1>Account Creation</h1>
	<form action="" method="post" name="reg">
		
					Full Name:</th>
					<input type="text" name="fullname" required="" class="form-control"/>
				
				
					User Name:</th>
					<input type="text" name="uname" required="" class="form-control" />
				
				
					Email:</th>
					<input type="text" name="uemail" required="" class="form-control"/>
				
				
					Password:</th>
					<input type="password" name="upass" required="" class="form-control" />
				
				
					
					<input onclick="return(submitreg());" type="submit" name="submit" value="Create" class="btn btn-primary btn-lg btn-block login-button"/>
				
				
					
					<a href="login.php">Already exists! Click Here!</a>
				
			</tbody>
	</form></div>
</html>