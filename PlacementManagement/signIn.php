<?php
	$connect = mysqli_connect("localhost","root","","ims_db") or die("Connection failed");
	if(!empty($_GET['save']))
	{
		$username=$_GET['username'];
		$password=$_GET['password'];
		$query = "select * from login_details where eId ='$username' and pass = '$password'";
		$result = mysqli_query($connect,$query);
		$count = mysqli_num_rows($result);
		if($count>0){
			header("Location: studentDashboard.php");
			exit();
		}
		else{
			echo "Login Unsuccessful";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<link rel="stylesheet" type="text/css" href="lib/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="signIn.css">
</head>
<body>
	<div class="banner">
		<img src="ycce_n.png" width="60%" height="80%">
	</div>
	<div class="topnav">
		<a href="home.php">Home</a>
		<a class="active" href="signIn.php" target="_blank">Sign In</a>
		<a href="register.php">Sign Up</a>
		<a href="contactUs.php">Contact Us</a>
	  </div>
	  <div class="container">
		<div class="row">
			<div class="col-lg-6 user">
				<!-- User login -->
				<div class="jumbotron jumb1">
					<h2> Student Login</h2><br>
					<form method="GET">
						  <div class="form-group">
						    <label for="exampleInputEmail1">Email address</label>
						    <input type="email" name="username" class="form-control" id="exampleInputEmail1" placeholder="Email" required="true">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">Password</label>
						    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="true">
						  </div>
						  
						  <div class="checkbox">
						    <label>
						      <input type="checkbox"> Remember me!
						    </label>
							
						  </div>
						  <br>
						  <input name="save" class = "infoSub" type="submit" class="btn btn-default" value="Login">
					</form>
				</div>
			</div>

			<div class="col-lg-6 admin">
				<!-- admin login -->
					<div class="jumbotron jumb2">
					<h2> Admin Login</h2><br>
					<form method="POST" action = "php/admin_signIn.php">
						  <div class="form-group">
						    <label for="exampleInputEmail1">Email address</label>
						    <input type="email" name="username" class="form-control" id="exampleInputEmail1" placeholder="Email" required="true">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">Password</label>
						    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="true">
						  </div>
						  
						  <div class="checkbox">
						    <label>
						      <input type="checkbox"> Remember me!
						    </label>
						  </div>
						  <br>
						  	<input name="save" class = "infoSub" type="submit" class="btn btn-default" value="Login">
						</form>
				</div>
				
		</div>
	</div>
	<div class="signUp">
		<button class="reg" type="submit" onclick="register()">Register here</button>
	</div>
	<script>
		function register()
		{
			location.href = "register.php";
		}
	</script>
</body>
</html>