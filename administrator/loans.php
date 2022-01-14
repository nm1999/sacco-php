<!DOCTYPE html>
<html>
<head>
	<title>Loan | forms</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/log.png">
	 <link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" type="text/css" href="w3schoools.com">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<style type="text/css">
	h5{
		text-align:center;
		font-size:26px;
	}
	footer{
		padding-bottom:10px;
	}
	form{
		width:40%;
		margin-left:350px;
		margin-top:50px;
	}
	#tre{
		width:40%;
		margin-top:150px;
	}
	.inside{
		width:95%;
		margin-left:10px;
		margin-bottom:10px;
	}
	#chair{
		width:40%;
		margin-top:120px;
		margin-left:550px;
	}
	header ,footer{
		background-color:rgb(0,0,0,0.075);
		padding:10px;
		width:100%;
	}
	label,input{
		padding:10px;
	}
	#go{
		margin-right:340px;
	}
</style>
<body>
   <div>
   	   <div class="header">
   	   	  <?php include'header.php'?>
   	   	  <h2 style="font-family:algerian;margin-left:530px;">Loan form</h2>
   	   </div>

   	   <form method="post" action="getloans.php">
   	   	  <div class="container">
   	   	  	<div class="modal-content">

	   	   	  	<header class="modal-heading">
	   	   	  	<h5>Client fill in</h5>
	   	   	    </header>
	   	   	    <div class="inside">
		   	   	  	<label>Enter account No.</label>
		   	   	  	<input type="number" name="accountNo" placeholder="account number" class="form-control" required>
		   	   	  	<label>Enter amount reqiured</label>
		   	   	  	<input type="number" name="loan" placeholder="amount of loan" class="form-control" required>
		   	   	  	<label>Confirm with your password</label>
		   	   	  	<input type="password" name="password" placeholder="Your password" class="form-control" required>
	   	   	    </div>
	   	   	  	<footer class="modal-footer ">
	   	   	  	    <input type="submit" name="submit" class="btn btn-success" value="Next" id="go"  onmousedown="document.getElementById('tre').style.display='block'">
	   	   	  	   <a href="addcash.php"class="btn btn-danger">back</a>
	   	   	    </footer>
	   	   	</div>
   	   	  </div>
   	   	  <div class="modal container w3-white " id="tre">
   	   	  	<div class="modal-content">
	   	   	  	<header><h5>Treasurer fill in</h5></header>
	   	   	  <div class="inside">
	   	   	  	<label>Confirm amount of loan</label>
	   	   	  	<input type="number" name="loan1" placeholder="Loan required" class="form-control" required>
	   	   	  	<label>Date of return</label>
	   	   	  	<input type="Date" name="returndate" placeholder="Return date" class="form-control" required>
	   	   	  	<label>Treasurer`s password</label>
	   	   	  	<input type="password" name="trepassword" placeholder="password" class="form-control" required>
	   	   	  </div>
		   	   	<footer class="modal-footer">
		   	   		<input type="submit" name="submit" class="btn btn-success" id="go" value="Next" onmousedown="document.getElementById('chair').style.display='block'">
		   	   		<input type="submit" name="submit" value="cancel" class="btn btn-danger" onclick="document.getElementById('tre').style.display='none'">
		   	   	</footer>
		   	   	
	   	   	</div>
   	   	  </div>
   	   	  <div class="modal container w3-white " id="chair">
   	   	  	<div class="modal-content">
   	   	  	 <header><h5>Chairman fill in</h5></header>
   	   	       <div class="inside">
   	   	  	 	<label>Enter password</label>
		   	   	<input type="password" name="chairpassword" class="form-control" required placeholder="Chairman password"><br>
		   	   </div>
		   	   	<footer>
		   	   	<input type="submit" name="submit"   class="btn btn-success">
		   	   	<a class="btn btn-danger" onclick="document.getElementById('chair').style.display='none'" style="color:white;margin-left:320px;">Cancel</a>
		   	    </footer>
   	   	  	</div>
   	   	  </div>
   	   </form>
   </div>
</body>
</html>