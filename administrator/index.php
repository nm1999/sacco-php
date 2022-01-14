<!DOCTYPE html>
<html>
<head>
	<title>Admin | login</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/log.png">
	  <link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" type="text/css" href="w3schoools.com">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<style type="text/css">
	.entire{
		display:inline-flex;
		background-color:rgb(0,0,0,0.15);
		width:100%;
	}
	.sign{
		margin-left:350px;
		margin-top:15px;
	}
	.loginbody a{
		text-decoration:none;
	}
	</style>
<body>
<div class="entire">	
  <div class="">
  	<img src="images/log.png" style="width:15%;margin-left:20px;">
  </div>
  <div class="sign">
  	<form method="post" action="logout.php">
  		<label>Email</label>
  		<input type="email" name="email" required>
  		<label>Password</label>
  		<input type="Password" name="password" required>
  		<input type="submit" name="login" class="btn btn-success" value="login">
  	</form>
  </div>
</div> 
           <!-- body or login  -->
<div class="loginbody">
	<span style="margin-left:900px;">
		<a href="r.php">Create account</a>
	<a href="recover_password.php"style="margin-left:50px;">Forgot password</a>
	</span>	
	<h3 style="margin-left:450px;font-weight: bold;margin-bottom:50px;">Beacon Savings Group</h3>
	<img src="resources/icon.png" style="width:16%;margin-left:500px;"><br>
	<p style="margin-left:540px;font-size:23px; margin-top:50px;">"Yes We Can"</p>
</div>
</body>
</html>