<?php
$conn=new mysqli("localhost","root","","bankadmin");
if (!$conn) {
	echo "Connection failed";
}
$creteria=$_POST['creteria'];
$accountNo=$_POST['accountNo'];
$deposite=$_POST['amount'];
$mode=$_POST['creteria'];
 $access="SELECT * from register where id>0 and accountNo=$accountNo";
 $result=$conn->query($access);
  if ($result->num_rows>0) {
  	$row=$result->fetch_assoc();
  	  if ($mode=='Late payment') {
  	  	   $surcharge='500';
  	  }else{
  	    	 $surcharge='0';
  	}
  $actual=($row['deposite']+$deposite)-$surcharge;
  $late=$row['latepay']+$surcharge;
  $update="UPDATE register set deposite='$actual' , latepay='$late' where accountNo='$accountNo' and id>0 ";
  if ($conn->query($update)===TRUE) {
  	 echo "Cash deposited";
  }else{
  	echo "System failure";
  }
}else{
	echo "Invaild account number.click  here <a href='add.php'>Register</a>";
}
?>