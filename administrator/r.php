<?
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin | register</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/log.png">
	 <link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" type="text/css" href="w3schoools.com">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<style type="text/css">
	.modal-content{
		width:35%;
		margin-left:450px;
	}
	.w3-container{
		width:100%;
	}
	body{
		background-color:rgb(0,0,0,0.075);
	}
</style>
<body>
	<div class="modal-content">
		<div class="modal-header"  style="background-color:blue;">
			<h3 style="margin-left:100px;">Administrator Registration</h3>
		</div>
		<div class="w3-container">
			<form method="post" action="adminr.php">
				<label>Enter full names</label>
				<input type="text" name="fullname" class="form-control w3-input" required>
				<label>Select  Office</label>
				<select class="form-control w3-input" name="title" required="">
					<option></option>
					<option>Treasurer</option>
					<option>Chairman</option>
				</select>
				<label>Enter date of birth</label>
				<input type="date" name="date" class="form-control w3-input" required="">
				<label>Enter your email</label>
				<input type="email" name="email" class="form-control w3-input" required="">
				<label>Enter password</label>
				<input type="password" name="password1" class="form-control w3-input" required="">
				<label>Confirm your password</label>
				<input type="password" name="password2" class="form-control w3-input" required="">
				<label>What is your nephew`s name</label>
				<input type="text" name="nephew" class="form-control w3-input" required="">
				<label>What was your secondary nick name</label>
				<input type="text" name="nick" class="form-control w3-input" required="">
				<label>What is your mother`s name</label>
				<input type="text" name="mother" class="form-control w3-input" required=""><br>
				<input type="submit" name="submit" class="btn btn-danger" style="margin-left:200px;">
			</form>
		</div>
	</div>
</body>
</html>