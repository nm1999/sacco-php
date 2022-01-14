<!DOCTYPE html>
<html>
<head>
	<title>recovery password</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/log.png">
	 <link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" type="text/css" href="w3schoools.com">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<style type="text/css">
	.modal-body{
		width:90%;
		margin-left:20px;
	}
	.modal-content{
		width:35%;
		margin-left:400px;
	}
	.modal-header ,.modal-footer{
		background-color:rgb(0,0,0,0.075);
	}
	.modal-header h2{
		margin-left:60px;
		color:red;
	}
</style>
<body>
  <div class="modal-content">
  	<div class="modal-header">
  		<h2>Password recovery</h2>
  	</div>
  	<div class="modal-body">
  		<form method="post" action="newpassword.php">
  			<label>What is your name ?</label>
  			<input type="text" name="name" class="form-control" required="">
  			<label>What is your email ?</label>
  			<input type="email" name="email" class="form-control" required="">
  			<label>What is your Mothers name ?</label>
  			<input type="text" name="mother" class="form-control" required="">
  			<label>What is your nephew`s name ?</label>
  			<input type="text" name="nephew" class="form-control" required="">
  			<label>What was your secondary nick name ?</label>
  			<input type="text" name="nick" class="form-control" required="">
  			<label>Enter new password</label>
  			<input type="password" name="password1" class="form-control" required="">
  			<label>Confirm your new password</label>
  			<input type="password" name="password2" class="form-control" required="">
  		
  	</div>
  	<div class="modal-footer">
  		<input type="submit" name="submit" class="btn btn-success" value="confirm" style="margin-right:250px;">
  		<a href="index.php"  class="btn btn-danger" >cancel</a>
  		</form>
  	</div>
  </div>
</body>
</html>