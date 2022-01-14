<!DOCTYPE html>
<html>
<head>
	<title>Change | password</title>
	 	<link rel="shortcut icon" type="image/x-icon" href="images/log.png">
	 <link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" type="text/css" href="w3schoools.com">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>
<?php 
$conn=new mysqli("localhost","root","","bankadmin");
if (!$conn) {
	echo "Conection failed";
}
$accountNo=$_POST['accountNo'];
$oldpassword=$_POST['old_password'];
$newpassword=$_POST['new_password'];
$confirm=$_POST['confirm_password'];
$select="SELECT * from register where accountNo=$accountNo and id>0";
 $result=$conn->query($select);
 $row=$result->fetch_assoc();
    if ($accountNo==$row['accountNo'] && $oldpassword==$row['password1']) {
    	if ($newpassword==$confirm) {
	    		$update="UPDATE register set password1=$newpassword where accountNo=$accountNo";
				if ($conn->query($update)==TRUE) {
					header('location:admin.php');
				}else{
					echo "Failed to update";
				}
    	}else{
    		echo "password mismatch";
    	}
    		
    }else{
    	echo "account number do not match with old password";
    }
		
?>

</body>
</html>			