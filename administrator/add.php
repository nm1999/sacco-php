<!DOCTYPE html>
<html>
<head>
	<title>Add | client </title>
		<link rel="shortcut icon" type="image/x-icon" href="images/log.png">
	 <link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" type="text/css" href="w3schoools.com">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<style type="text/css">
	form{
		width:40%;
		margin-left:350px;
		border:1px solid black;
		border-radius:20px;
		padding:40px;
		background-color:white;
	}
	h3{
		margin-left:80px;
		padding-bottom:20px;
	}
	.btn-success{
		margin-left:130px;
	}
	.container1{
		background-color:rgb(0,0,0,0.075);
	}
</style>
<body>
<?php include'header.php'?>
<div class="container1">
	<form method="post" action="register.php" enctype="multipart/form-data">
		<h3>Open new account</h3>
		<label>Enter first name</label>
		<input type="text" name="firstname" class="form-control" required="">
		<label>Enter surname</label>
		<input type="text" name="surname" class="form-control" required="">
		<label>Enter date of birth</label>
		<input type="date" name="dob" class="form-control" required="">
		<label>Enter email</label>
		<input type="email" name="email" class="form-control" required=""><br>
		<label>Upload photo</label>
		<input type="file" name="photo" id="photo" required=""><br><br>
		<label>Enter phone contact</label>
		<input type="number" name="phone" class="form-control" required="">
		<label>Enter first deposite</label>
		<input type="number" name="firstdeposite" class="form-control" required="">
		<label>Enter password</label>
		<input type="password" name="password1" class="form-control" required="">
		<label>Confirm password</label>
		<input type="password" name="password2" class="form-control" required="">
		<label>Do you agree terms and conditions in Beacon Savings group ?<a href="resources/terms.pdf">View terms and conditions</a></label>
		<input type="submit" name="submit" onclick="payment()" value="i agree" class="btn btn-success">
	</form>
	<script type="text/javascript">
		function payment(){
			alert('First payment includes membership fee 2000shs');
		}
	</script>
</div>
</body>
</html>