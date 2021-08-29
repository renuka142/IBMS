<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="lib/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="register.css">
</head>

<body>
    <div class="banner">
        <img src="ycce_n.png" width="60%" height="80%">
    </div>
    <div class="topnav">
        <a href="home.php">Home</a>
        <a href="signIn.php" target="_blank">Sign In</a>
        <a class="active" href="register.php">Sign Up</a>
        <a href="contactUs.php">Contact Us</a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 user">
                <!-- User login -->
                <div class="jumbotron jumb1">
                    <h2> Student Registration</h2><br><br>
                    <form action="registerData.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="username" class="form-control" placeholder="Email" required="true">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" required="true">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirm Password</label>
                            <input type="password" name="cnfPassword" class="form-control" placeholder="Confirm Password" required="true">
                        </div>
                        <div class="submit">
                            <input type="submit" class="btn btn-default" style="background-color:#04AA6D; color: white;" value="Register" name="reg_user">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body> 
</html>
