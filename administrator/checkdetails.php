<?php 
$conn=new mysqli("localhost","root","","bankadmin");
if (!$conn) {
	echo "connection failed";
}
$accountNo=$_POST['accountNo'];
$password=$_POST['password'];
$stmt="SELECT * from register where id>0 and accountNo=$accountNo";
$result=$conn->query($stmt);
$row=$result->fetch_assoc();
	if ($accountNo==$row['accountNo'] && $password==$row['password1']) {
		?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin | settings</title>	
   	<link rel="shortcut icon" type="image/x-icon" href="images/log.png">
	 <link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" type="text/css" href="w3schoools.com">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<style type="text/css">
 ul li{
 	list-style-type:none;
 	margin-top:20px;
 }
 .w3-sidenav{
 	text-align:center; 	
 }
 ul{
 	background-color:lightgrey;
 	margin-right:100px;
 	padding:10px;
 	width:100%;
 }
 ul  a{
 	margin-top:50px;
 	padding-top:10px;
 	margin-right:10px;
 	margin-left:30px;
 }
 ul a:hover{
 	padding:10px 16px;
 	background-color:green;
 	color:white;
 }
 .authorize{
 	padding:8px;
 	width:40%;
 	margin-left:400px;
 }
 .modal-header,.modal-footer{
 	background-color:skyblue;
 }
 .modal-header h2{
 	margin-left:150px;
 }
 .w3-btn{
 	padding:5px 10px;
 	margin-left:50px;
 }
 .page{
 	display:none;
 }
 .side-display{
 	width:85%;
 	margin-top:30px;
 	margin-left:400px;
 }
 #password{
 	width:40%;
 	border:2px solid #ddd;
 	padding:10px;
 	border-radius:10px;
 }
  .image{
  	background-image: url(<?php echo $row['photo']?>);
  	background-size:100% 100%;
  	width:15%;
  	height:150px;
  	border-radius:100%;
  	margin-left:150px;
  }
  .image i{
  	margin-left:110px;
  	border-radius:50%;
  	border:1px solid black;
  margin-top:115px;
  padding:5px;
  font-size:20px;
  background-color:lightgrey;
  color:black;
  }
  .change{
  	width:60%;
  	margin-right:250px;
  }
  .inside{
  	width:92%;
  	margin-left:20px;
  }
  .info{
  	width:56%;
  }
  .body{
  	margin-left:40px;
  	margin-bottom:10px;
  	margin-top:10px;
  }
  #photo{
  	width:40%;
  }
  #payloan{
  	width:45%;
  	height:400px;
 	border:2px solid #ddd;
 	padding:10px;
 	border-radius:10px;
  }
 </style>
<body>
	<?php include'header.php'?>
	<div class="container below">
		<div  class="w3-sidenav">
			<ul>
				<a href="#" onclick="openpage
				('transitions')">Check Transitions</a>
				<a href="#" onclick="openpage('payloan')">
					Pay loan</a>
				<a href="#"  onclick="openpage
				('password')"> Change password</a>
				<a href="admin.php"> logout</a>
			</ul>
		</div>
	    <div class="side-display">	
			<div class="page" id="transitions">
					<div class="image">
					<a href="#" onclick="document.getElementById('photo').style.display='block'"><i class="fa fa-camera"></i></a>
					<div class="container modal w3-animate-top" id="photo">
						<form method="post" action="updatephoto.php" enctype="multipart/form-data">
						<div class="modal-content">
							<header class="modal-header">
								<h4>Change profile picture</h4>
							</header>
							<div class="body">
							   <i style="display:none;"> <label>Enter account No</label>
							    <input type="number" name="accountNo" value="<?php echo $row['accountNo']?>" class="form-control">	
							    </i>						
								<label>Upload a new profile photo</label><br>
								<input type="file" name="photo">
							</div>	
						    <footer class="modal-footer">
							
								<input type="submit" name="submit" value="upload" class="btn btn-success"><br>
								<input type="submit" name="submit" value="cancel" class="btn btn-danger" onclick="document.getElementById('photo').style.display='none'">
						    </footer>
						</div>
					  </form>
                    </div>
				</div><br>
				<div class="info">
					<table class="table table-striped table-bordered">
						<tr>
							<td>Name</td>
							<td><?php echo $row['firstname']." ".$row['surname']?></td>
						</tr>
						<tr>
							<td>Account No.</td>
							<td><?php echo $row['accountNo']?></td>
						</tr>
						<tr>
							<th>Exchange</th>
							<th>Amount</th>
						</tr>
						<tr>
							<td>Transactions</td>
							<td> Shs<?php echo $row['deposite']?></td>
						</tr>
						<tr>
							<td>Loan debit</td>
							<td><?php
								if ($row['loan']==="") {
									echo "No loan yet";
								}else{
									echo "Shs " .$row['loan'];
								}?>
							 </td>
						</tr>						
						<tr>
							<td>Actual balance</td>
							<td></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="page" id="payloan">
				<h3 style="margin-left:120px;margin-bottom:10px;">Pay loan</h3>
				<form method="post" action="payloan.php">
					<i style="display:none;">
						<input type="text" name="accountNo" value="<?php echo$row['accountNo']?>">
					</i>
					<label>Enter Loan debit to pay </label>
					<input type="number" name="debit" class="form-control">
					<label>Client password</label>
					<input type="password" name="clientpassword" class="form-control">
					<label>Treasurer password</label>
					<input type="password" name="trepassword" class="form-control">
					<label>Chairman password</label>
					<input type="password" name="chairpassword" class="form-control"><br>
					<input type="submit" name="submit" value="Pay loan" class="btn btn-success" style="margin-left:150px;">
				</form>
			</div>
			<div class="page"  id="password">
				<form method="post" action="changepassword.php">
					<h4 style="margin-left:70px;margin-bottom:10px;">Client use only</h4>
					<i style="display:none;">
					<input type="number" name="accountNo" value="<?php echo$row['accountNo']?>">
				    </i>
					<label>Enter old password</label>
					<input type="password" name="old_password" class="form-control">
					<label>Enter new password(digits only)</label>
					<input type="password" name="new_password" class="form-control">
					<label>Confirm new password</label>
					<input type="password" name="confirm_password" class="form-control"><br>
					<input type="submit" name="submit" class="btn btn-success" style="margin-left:100px;" value="update" onclick="document.getElementById('update').style.display='block'"  >
				</form>
			</div>
	    </div>		
    </div>
		
	</div>
	<!-- java script code for navigating through the pages -->
	<script type="text/javascript">
		openpage("transitions");

function openpage(pageno) {
    var i;
    var x = document.getElementsByClassName("page");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
    }
    document.getElementById(pageno).style.display = "block"; 
}
	</script>
	<?php 
	}else{
		echo"incorrect";
	}

$conn->close();
?>
</body>
</html>