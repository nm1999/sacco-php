<!DOCTYPE html>
<html>
<head>
	<title>Loan | Reciept</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/log.png">
	 <link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" type="text/css" href="w3schoools.com">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<style type="text/css">
 .loandetail{
 		width:85%;
 		margin-left:40px;
 }
 .image{
 	margin-left:200px;
 }
 .receipt{
 	border:2px dotted black;
 	margin-right:100px;
 	margin-top:10px;
 	border-radius:10px;
 }
#output{
	margin-left:150px;
} 
</style>
<body>
	<a href="loans.php"><img src="resources/previous.png"></a>
	<a href="#" onclick="output()" style="margin-left:1000px;" class="btn btn-danger">Print</a>
	<script type="text/javascript">
		function output(){
		print('output');
	}
	</script>

		    <?php
$conn=new mysqli("localhost","root","","bankadmin");
if (!$conn) {
	echo "Connection failed";
}
 $accountNo=$_POST['accountNo'];
 $loan=$_POST['loan'];
 $loan1=$_POST['loan1'];
 $password=$_POST['password'];
 $tre=$_POST['trepassword'];
 $chairpassword=$_POST['chairpassword'];
 $date=$_POST['returndate'];
 $Treasurer='Treasurer';
 $chair='Chairman';
        if ($accountNo==="" && $password2==="") {
 	       header('location:loans.php');
         }else{

  $check="SELECT * from register where accountNo='$accountNo' and password1='$password'";
  $result=$conn->query($check);
  $row=$result->fetch_assoc(); 
  	if ($result->num_rows>0) {
        if ($accountNo==$row['accountNo'] && $password==$row['password1']) {
         	// treasurer verifications
         	$admin1="SELECT * from admin where Title='$Treasurer' and id>0 ";
         	 $check1=$conn->query($admin1);
         	 $row1=$check1->fetch_assoc();
         	    if ($row1['Title']==$Treasurer && $row1['password']==$tre) {
         	 	       
         	 	       //chairman approval
         	 	       
         	 	       	$admin2="SELECT * from admin where Title='Chairman' and id>0";
         	 	       	   	 $result2=$conn->query($admin2);
         	 	       	   	 $row2=$result2->fetch_assoc();
         	 	       	   	 if ($row2['password']==$chairpassword) {        	 	       	  

         	 	       	//end chairman approval

         	 	     // check loan amount
         	 	       if ($loan==$loan1) {
         	 	       	   if ($row['deposite']>$loan) { 
         	 	       	     $interest=(5/100)*$loan +$loan;        	 	       	  
         	 	       	   	    $update="UPDATE register set loan=$interest , dateofreturn=$date where $accountNo=accountNo";
		         	 	       	  if ($conn->query($update)===TRUE) {
		     	         	 	       	  	 ?>
		         	 	       	  	 		         <!-- loan package -->
		          <div class="w3-container " id="output">
		          	 <div class="receipt">		          	
		          	 		<h2 style="margin-left:150px;margin-bottom:10px;">Loan receipt</h2>
		          	 		<div class="image">
		          	 			<img src="<?php echo $row['photo']?>" style="width:42%;height:120px;margin-bottom:10px;border-radius:100%;">
		          	 		</div>		          	 	
		          	 	<div class="loandetail">		          	 		
		          	 		<table class="table-bordered table">
		          	 			<tr>
		          	 				<td>Account Number</td>
		          	 				<td><?php echo $row['accountNo']?></td>
		          	 			</tr>
		          	 			<tr>
		          	 				<td>Name</td>
		          	 				<td><?php echo $row['firstname']."  ".$row['surname']?></td>
		          	 			</tr>
		          	 			<tr>
		          	 				<td>Phone contact</td>
		          	 				<td><?php echo"0".$row['phone']?></td>
		          	 			</tr>
		          	 			<tr>
		          	 				<td>Loan amount</td>
		          	 				<td><?php echo $loan?></td>
		          	 			</tr>
		          	 			<tr>
		          	 				<td>Amount to return</td>
		          	 				<td><?php echo $interest?></td>
		          	 			</tr>
		          	 			<tr>
		          	 				<td>Return date</td>
		          	 				<td><?php echo $date?></td>
		          	 			</tr>
		          	 			<tr>
		          	 				<td>Approved by</td>
		          	 				<td><?php echo $row2['Title']." ".$row2['Name']?><br><?php echo $row1['Title']." ".$row1['Name']?></td>
		          	 			</tr>
		          	 		</table>
		          	 		<i style="margin-left:110px;">&copy loans are given at 5% interest</i>
		          	 	</div>
		          	 </div>
		          </div>

		         <!-- end of loan form package -->

		         	 	       	  <?php }else{
		         	 	       	  	echo "Not updated";
		         	 	       	  }
         	 	           	}else{
         	 	           		echo "You have less money on your account";
         	 	           	}    
         	 	       }else{
         	 	       	echo "Loan do not match";
         	 	       }
         	 	   }
         	 	       else{
         	 	       	echo "wrong chairman";
         	 	       }
         	    }else{
         	    	echo "Wrong Treasurer";
         	    }         		      	
         }
         else{
         	echo "U do not exist";
         	header('location:loans.php');
         }
        }else{
        	echo "Try Again";
        }
    }
?>    
</form>
</body>
</html>