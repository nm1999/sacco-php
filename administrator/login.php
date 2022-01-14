<?php
 $conn=new mysqli("localhost","root","","bankadmin");
 if (!$conn) {
 	echo "Connection failed";
 }
 $email=$_POST['email'];
 $password=$_POST['password'];
  $check="SELECT * FROM admin where Title='Treasurer'";
   $result=$conn->query($check);
   $row=$result->fetch_assoc();
   	  if ($result->num_rows>0) {
   	  		if ($email==$row['email'] && $password==$row['password']) {
   	  			$admin= "Hello admin ";
   	  		}else{
   	  			header('location:index.php');
   	  		}
   	  	}
   $conn->close();
 ?>