<!DOCTYPE html>
<html>
<head>
	<title>New | Client</title>
			<link rel="shortcut icon" type="image/x-icon" href="images/log.png">
	 <link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" type="text/css" href="w3schoools.com">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<style type="text/css">
	body{
		background-color:rgb(0,0,0,0.075);
	}
</style>
<body>
	<?php 
	if (isset($_POST["submit"])) {
		
		$name=$_FILES["photo"]["name"];
		$tmp_name=$_FILES["photo"]["tmp_name"];
		$size=$_FILES["photo"]["size"];
		$type=$_FILES["photo"]["type"];
		$location="profile/".$name ;
		if(move_uploaded_file($tmp_name,$location)){
			echo "Uploaded";
		}else{
			echo "Failed to upload";
		}
		
		
	?>
	<!-- Storage code -->
<?php
 $conn=new mysqli("localhost","root","","bankadmin");
 if (!$conn) {
 	echo "Connection failed";
 }
 $firstname=$_POST['firstname'];
 $surname=$_POST['surname'];
 $dob=$_POST['dob'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $deposite=$_POST['firstdeposite'];
 $password1=$_POST['password1'];
 $password2=$_POST['password2'];
 $accountNo="320$phone";
 $membership=2000;
 $withdrawtime=0;
 $date=date("d/m/Y");
 $loan=0;
 $dateofreturn=0;
 $actualpay=$deposite-$membership;
 if ($password1==$password2) {

  $store="INSERT INTO register(photo,firstname,surname,dob,email,phone,deposite,password1,accountNo,latepay,withdrawtime,realdate,loan,dateofreturn)VALUES('$location','$firstname','$surname','$dob','$email','$phone','$actualpay','$password1','$accountNo','$membership','$withdrawtime','$date','$loan','$dateofreturn')";
  if ($conn->query($store)===TRUE) {
  	 echo "Stored";
  	header('location:add.php');
  }else{
  	echo "Not stored";
  }
}else{
	echo "Password mismatch";
}
}
?>
</body>
</html>