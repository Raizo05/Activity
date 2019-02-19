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
<html>
<head>
	<title>Registration</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>		<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

	<!-- Website CSS style -->
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">

	<!-- Website Font style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	
	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
</head>
<body>
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
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Company Name</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="" name="reg">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="fullname" id="name"  placeholder="Enter your Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="uemail" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="uname" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="upass" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<!-- <button type="button" class="btn btn-primary btn-lg btn-block login-button" onclick="return(submitreg());" type="submit" name="submit" >Register</button> -->
							<input onclick="return(submitreg());" type="submit" name="submit" class="btn btn-primary btn-lg btn-block login-button" value="Register" />
						</div>
						<div class="login-register">
				            <a href="login.php">Login</a>
				         </div>
					</form>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="assets/js/bootstrap.js"></script>

</body>
</html>