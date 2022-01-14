<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="shortcut icon" type="image/x-icon" href="images/log.png">
	 <link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" type="text/css" href="w3schoools.com">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<style type="text/css">
	.modal-content{
		width:30%;
		margin-left:500px;
	}
	.modal-header,.modal-footer{
		background-color:green;
	}
	.modal-header h2{
		margin-left:50px;
	}
</style>
<body>

<?php
$conn=new mysqli("localhost","root","","bankadmin");
if (!$conn) {
	echo "Connection failed";
}
 $title=$_POST['title'];
 $name=$_POST['fullname'];
 $email=$_POST['email'];
 $date=$_POST['date'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];
$nephew=$_POST['nephew'];
$nick=$_POST['nick'];
$mother=$_POST['mother'];

	//check presence of a title
	$check="SELECT * from admin where Title='$title' and id>0";
	$filter=$conn->query($check);
	$row=$filter->fetch_assoc();
	if ($row['Title']==$title) {
		echo "Title $title has been already been registered";
	}else{
		if ($password2==$password1) {
	$insert=$conn->prepare("INSERT INTO admin(Name,email,Title,password,nephewname,nickname,mothername)Values(?,?,?,?,?,?,?)");
	$insert->bind_param("sssssss",$name,$email,$title,$password1,$nephew,$nick,$mother);
	 $insert->execute();  
	 	header('location:index.php');
	 ?>
	    <div class="w3-animate-zoom">
	  	<div class="modal-content">
	  		<div class="modal-header">
	  			<h2>Your Welcome </h2>
	  		</div>
	  		<span  style="width:80%;margin-left:20px;">You have been successfully registered as the <?php echo $title?>
	  			<br>
	  			<i><b>Your responsibilites</b></i>
	  			<ul>
	  				<li>Verify loan acquiring</li>
	  				<li>Manage client data</li>
	  				<li>Verify withdrawal of cash</li>
	  			</ul>
	  		</span>
	  		<div class="modal-footer">
	  		   <a href="index.php" style="margin-right:170px;"><input type="submit" name="submit" class="btn btn-danger" value="Login"></a>
	  	    </div>
	  	</div>
	  </div>
	  ?>
	 
		<script type="text/javascript">
	 		alert('Stored')
	 	</script>
	 <?php 
	
	 $insert->close();
	 $conn->close();
	 }else{
   	echo "Password mismatch";
    }
    }?>
</body>
</html>