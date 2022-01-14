<!DOCTYPE html>
<html>
<head>
	<title>withrawal | Receipt</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/log.png">
	 <link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" type="text/css" href="w3schoools.com">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<style type="text/css">
	.table1{
		width:70%;
		margin-left:100px;
	}
	.table-bordered{
		margin-top:20px;
		margin-left:20px;
	}
	.update{
		margin-left:300px;
		width:55%;
	}
       .modal-header{
    	background-color:blue;
    	color:white;
    }
    #heading{
    	margin-left:160px;
    }
    .w3-container{
    	margin-top:50px;
    }
    page {
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  /*box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);*/
}
page[size="A4"] {  
 
}
body{
	background-color:lightgrey;
}
</style>
<body>
</body>
<script type="text/javascript">
	print('reciept');
</script>
<?php 
$conn=new mysqli("localhost","root","","bankadmin");
if (!$conn) {
	echo "connection failed";
}
$accountNo=$_POST['accountNo'];
$amount=$_POST['amount'];
$password=$_POST['password'];
$get=$_POST['withdraw'];
$check="SELECT * From register where accountNo=$accountNo and id>0";
$result=$conn->query($check);
 if ($result->num_rows>0) {
 	$row=$result->fetch_assoc();
 	if ($row['accountNo']===$accountNo && $row['password1']===$password) {
 		$available= $row['deposite'];
 		if ($amount<$available) {
 			 if ($available>1000) {
 			      $bal=$available-$amount;
 			      $withdrawtime=date('d/m/Y')."    ".date("h:m:s");
 			      $update="UPDATE register set deposite='$bal' ,withdrawtime='$withdrawtime' where accountNo=$accountNo and id>0";
 			       if ($conn->query($update)===TRUE) {
 			       	    ?>
 			       	    <page size="A4">
 			       	    	<div class="w3-container  update w3-animate-zoom" name ="reciept">
 			       	    		<div class="modal-content">
 			       	    			<div class="modal-header">
 			       	    				<h2 id="heading">Confirmation Reciept</h2>
 			       	    			</div>
 			       	    			 <div class="container-fuild withdraw">
 			       	    			 	<div class="table1">
 			       	    			 	 <table class="table-responsive-sm table-bordered  table">
 			       	    			 	 	<tr>
 			       	    			 	 		<td>Account No.</td>
 			       	    			 	 		<td><?php echo $row['accountNo']?></td>
 			       	    			 	 	</tr>
 			       	    			 	 	<tr>
 			       	    			 	 		<td>Name </td>
 			       	    			 	 		<td><?php echo $row['firstname']." ".$row['surname']?></td>
 			       	    			 	 	</tr>
 			       	    			 	 	<tr>
 			       	    			 	 		<td>Date</td>
 			       	    			 	 		<td><?php echo $withdrawtime?></td>
 			       	    			 	 	</tr>
 			       	    			 	 	<tr>
 			       	    			 	 		<td>Amount withdrawn</td>
 			       	    			 	 		<td><?php echo $amount?></td>
 			       	    			 	 	</tr>
 			       	    			 	 	<tr>
 			       	    			 	 		<td>Account balance</td>
 			       	    			 	 		<td><?php echo $bal?></td>
 			       	    			 	 	</tr>
 			       	    			 	 </table>
 			       	    			 	</div>
 			       	    			 	 <p style="margin-left:200px;">&copy all reserved beacon savings group</p>
 			       	    			 </div>
 			       	    		</div>
 			       	    	</div>
 			       	    </page>
 			      <?php }else{
 			       	echo "Failed to withdraw";
 			       }
 			 }else{
 			 	echo"available money on account is lessthan 1000";
 			 }
 		}else{
 		    echo"Impossible Transaction <br>";
 		    echo "Your account has less money than what you are withdrawing";
 		}

 		
 	}else{
 		echo "Invaild Password or accountNumber ";
 	}
 }else{
 	echo "Transaction failed .  Try again";
 }
?>

</body>
</html>