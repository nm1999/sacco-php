<!DOCTYPE html>
<html>
<head>
	<title>All | clients</title>
			<link rel="shortcut icon" type="image/x-icon" href="images/log.png">
	 <link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" type="text/css" href="w3schoools.com">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<style type="text/css">
	.add{
		
		width:100%;
	}
	.commands{
		height:60px;
		margin-bottom:5px;		
	}
	.commands input{
		display:inline-flex;
		margin-left:100px;
		margin-bottom:25px;
	}
	.commands img{
		border-radius:10px;
		width:4%;
		padding:3px;
		margin-left:14px;
		margin-bottom:32px;
	}
	a:hover{
		text-decoration:none;
	}
	.panel-body{
		box-shadow:2px 2px 8px 2px;
		position:fixed;
		background-color:palegreen;
		width:100%;
		padding:10px;
	}
</style>
<body>
 	<div class="add">
 			<div class="panel-body">
 			    <div class="commands">
 			    	<a target=""><img src="resources/icon.png"></a>
 			    	<a href="add.php"><input type="submit" name="submit" class="btn btn-primary" value="Add client"></a>
	 				<a href="addcash.php"><input type="submit" name="submit" class="btn btn-primary" value="Deposite cash"></a>
	 				<a href="admin.php"><input type="submit" name="submit" class="btn btn-primary" value="Manage account"></a>
			 		<a href="payments.php"><input type="submit" name="submit" class="btn btn-primary" value="Payments"></a>
			 		<a href="index.php"><input type="submit" name="submit" class="btn btn-primary" value="logout"></a>
		 	    </div>		 	    	 				
		 	</div><br><br><br><br>
</body>
</html>