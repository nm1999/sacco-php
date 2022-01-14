<?php
  $conn=new mysqli("localhost","root","","bankadmin");
  if (!$conn) {
  	  echo "connection failed";
  	    }
  	    $accountNo=$_POST['accountNo'];
 $name=$_FILES["photo"]["name"];
 $tmp_name=$_FILES["photo"]["tmp_name"];
 $size=$_FILES["photo"]["size"];
 $store="profile/".$name;
 move_uploaded_file($tmp_name,$store);

  $update="UPDATE register set photo ='$store'  where accountNo=$accountNo and id>0";
  if ($conn->query($update)===TRUE) {
  	 echo "updated successfully";
  }else{
  	echo "Not updated";
  }



  
?>