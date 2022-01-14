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
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		
		function remove(){
			var xmlhttp = new XMLHttpRequest();
			var title = document.getElementById("title").value;
			var email = document.getElementById("email").value;
			var psw = document.getElementById("psw").value;
			var nick = document.getElementById("nickname").value;
			var name = document.getElementById("name").value;
			var nephew = document.getElementById("nephew").value;
		
			 xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("show").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("POST", "delete.php", true);
        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xmlhttp.send("title="+title+"&email="+email+"&psw="+psw+"&nick="+nick+"&name="+name+"&nephew="+nephew);
			}
	</script>
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
 	margin-top:100px;
 }
 .modal-header,.modal-footer{
 	background-color:rgb(0,0,0,0.075);
 }
 .modal-header h2{
 	margin-left:200px;
 }
 .w3-btn{
 	padding:5px 10px;
 	margin-left:50px;
 }
 .below{
 	width:100%;
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
  	background-image: url(images/maria.jpg);
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
  	margin-left:20px;
  }
  .info{
  	width:56%;
  }
  #biodata{
  	width:40%;
   margin-left:280px;
   margin-top:50px;
  }
  .ok input ,a{
  		width:50%;
  		text-align:center;
  }
  #next{
  	margin-right:180px;
  }
  .admin{
  	width:60%;
  	margin-left:350px;
  }
  .newadmin{
  	margin-left:200px;
  }
  .oldadmin{
  	margin-left:20px;
  }
  .inner{
  	width:80%;
  	margin-left:50px;
  }
  #show{
  	margin-left:240px;
  	color:red;
  }
 </style>
<body>
	<?php include'header.php'?>
	<div>
		<input type="submit" name="submit" value="Manage client details" onclick="document.getElementById('login').style.display='block'" class="btn btn-info">
	</div>
	<div class="authorize modal w3-animate-top" id="login">
	    <div class="modal-content">
	    	<header class="modal-header">
	    		<h2>Client login</h2>
	    	</header>
	        <form method="post" action="checkdetails.php">
	        	<div class="inside container">
					<label>Enter accountNo</label>
					<input type="number" name="accountNo" class="form-control" required="">
					<label>Password</label>
					<input type="password" name="password" class="form-control" required=""><br>
			    </div>
				<div class="modal-footer">
					<input type="submit" name="submit" class="w3-btn btn-success" value="Access">
				    <input type="submit" name="submit" class="w3-btn btn-danger" value="Decline" onclick="document.getElementById('login').style.display='none'">
				</div>
			</form>
		</div>
	</div>
<div class="admin">
	<div class="container">
		<div class="modal-content">
			<div class="modal-header"><h2>Remove  admin details</h2></div>
			<div class="inside">
				<p id="show"></p>
				<div style="display:inline-flex;">
					<div class="oldadmin">
						<h4>Delete account </h4>
						<label>Select office</label>
						<select class="form-control" name="title" required="" id="title">
							<option></option>
							<option>Treasurer</option>
							<option>Chairman</option>
						</select>
						<label>Enter old email</label>
						<input type="email" name="email" class="form-control" required="" id="email">
						<label>Enter password</label>
						<input type="password" name="password" class="form-control" required="" id="psw">
					</div>
					<div class="newadmin">
						    <h4>Bio data</h4>
						<label>Enter full name </label>
						<input type="text" name="newname" class="form-control" required="" id="name">
						<label>Enter nickname</label>
						<input type="text" name="nick" class="form-control" required="" id="nickname">
						<label>Enter nephew`s name</label>
						<input type="text" name="nephew" class="form-control" required="" id="nephew"><br>
			        </div>
			    </div>
			</div>
			<div class=" modal-footer">
				<button onclick="remove()" class="btn btn-success"  id="next"  style="width:50%;">Click</button>
		    </div>				
		</div>
		
	</div>
</div>	
</body>
</html>