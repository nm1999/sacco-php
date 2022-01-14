<!DOCTYPE html>
<html>
<head>
	<title>Add | cash</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/log.png">
	 <link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" type="text/css" href="w3schoools.com">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript">	
			function myFunction() {
               
               var creteria = document.getElementById("creteria").value;
               var accountNo = document.getElementById("accountNo").value;
               var amount = document.getElementById("amount").value;
               
              var xmlhttp = new XMLHttpRequest();
		        xmlhttp.onreadystatechange = function() {
		            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		                document.getElementById("show").innerHTML = xmlhttp.responseText;
		            }
		        };
		        xmlhttp.open("POST", "pay.php", true);
		        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		        xmlhttp.send("creteria="+creteria+"&accountNo="+accountNo+"&amount="+amount);

               }
               		
               		$(document).ready(function(){
               			$("#withdrawclick").click(function(){
               				$("#withdraw").show();
               				$("#deposite").hide();
               			});
               		});
	</script>
</head>
<style type="text/css">
	#hr1{
		border:0.6px dashed green;
	}
	.commands input{
		display:inline-flex;
		margin-left:150px;
	}
	.form{
		border:1px solid #122221;
		width:40%;
		margin-left:320px;
		padding:30px;
		border-radius:10px;
		margin-top:40px;
		margin-bottom:100px;
		background-color:lightgrey;
		
	}
	form:hover{
		box-shadow:2px 2px 4px 2px;
	}
	.form-control{
		margin-bottom:20px;
	}
	h4{
		padding:10px;
		margin-left:50px;
	}
	.divide span{
		display:inline-flex;
	}
	.box{
		box-shadow:2px 2px 4px 2px;
	}
	.footer{
		margin-bottom:10px;
	}
	#show{
		text-align:center;
		color:red;
	}
	#withdrawal{
		height:auto;
		width:40%;
		margin-top:50px;
		margin-left:370px;
	}
</style>
<body>
<?php include'header.php'?>
	<div class="body">
	<div>
		<input type="submit" id="withdrawclick" value="withdrawal cash" class="btn btn-success" style="margin-left:100px;">
		<a href="loans.php"><input type="submit" class="btn btn-success" onclick="document.getElementById('loans').style.display='block'" style="margin-left:690px;" value="Acquire a Loans"></a>
	</div>
		<div class="container " id="deposite">
			<div class="form">
				<h4>Deposit on your account</h4>
				<i id="show"></i><br>
				<label>Creteria of payment</label>
				<select name="creteria" class="form-control" id="creteria">
					<option>Normal payment</option>
					<option>Late payment</option>
				</select>
				<label>Enter account number</label>
				<input type="number" name="accountNo" placeholder="Account No." class="form-control" required="" id="accountNo">
				<label>Enter amount </label>
				<input type="number" name="deposite" placeholder="Amount to pay" class="form-control" required="" id="amount">
				<button type="button" onclick="myFunction()" class="btn btn-success" style="margin-left:140px;">Deposit</button>
			</div>
		</div>
		<div id="withdrawal">
			<form method="post" action="withdrawal.php">
			<div class="modal-content container">				
					<header><h2 style="margin-left:100px;">Withdraw Money</h2></header>
					<label>Enter account Number</label>
					<input type="number" name="accountNo" placeholder="Account Number" class="form-control" required="">
					<label>Enter amount </label>
					<input type="number" name="amount" placeholder="Amount to withdrawal" class="form-control" required="">
					<label>Enter password</label>
					<input type="password" name="password" class="form-control" placeholder="password" required="">
					<div class="footer" style="display:inline-flex;">
					<input type="submit" name="withdraw" value="withdrawal"  class="btn btn-success">
					<a href="" class="btn btn-danger" style="margin-left:300px;"  onclick="document.getElementById('withdrawal').style.display='none'">Cancel</a>
		           </div>
			</form>
			</div>			
		</div>
	</div>
</body>
</html>