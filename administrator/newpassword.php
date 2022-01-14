<!DOCTYPE html>
<html>
<head>
	<title>New | password</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/log.png">
	 <link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" type="text/css" href="w3schoools.com">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<style type="text/css">
	body{
		font-weight:bolder;
	}
</style>
<body>
<?php 
$conn=new mysqli("localhost","root","","bankadmin");
if (!$conn) {
	echo "connection failed";
}
$name=$_POST['name'];
$email=$_POST['email'];
$mother=$_POST['mother'];
$nephew=$_POST['nephew'];
$nick=$_POST['nick'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];
//select from ddatabase
 $select="SELECT * from admin where email='$email'";
 $check=$conn->query($select);
 $row=$check->fetch_assoc();
 if ($check->num_rows>0) {
 	if ($row['email']==$email && $row['Name']==$name) {
 	 	if ($row['Name']==$name && $row['nephewname']==$nephew) { 	 		
			if ($row['nickname']==$nick && $row['mothername']==$mother) {
			 	 			echo "Mothers name and nickname correct";
			 	if ($password1==$password2) {
			 		$update="UPDATE admin set password=$password1 where '$email'=email and id>0";
			 		if ($conn->query($update)===TRUE) {
			 			echo "<br>password updated";
			 			header('location:index.php');
			 		}else{
			 			echo "<br>password not updated";
			 		}
			 	}else{
			 		echo "<br>Password mismatch";
			 	}
			}else{
				echo "Nick and mother z name not correct";
			}	 		
 	 	}else{
 	 		echo "Failed to access";
 	 	}
 	 }else{
 	 	echo "Not authorised";
 	 }
 }
?>
</body>
</html>