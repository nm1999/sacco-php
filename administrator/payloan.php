<?php
if (isset($_POST['submit'])) {
$ac=$_POST['accountNo'];
$debit=$_POST['debit'];
$cli=$_POST['clientpassword'];
$tre=$_POST['trepassword'];
$chair=$_POST['chairpassword'];
$tretitle='Treasurer';
$chairtitle='Chairman';
$conn=new mysqli("localhost","root","","bankadmin");
if (!$conn) {
	echo "connection failed";
}
$select="SELECT * from register where accountNo=$ac and id>0";
$result=$conn->query($select);
$row=$result->fetch_assoc();
  $checkadmin="SELECT * from admin where Title='$tretitle'";
  $checkresult=$conn->query($checkadmin);
  $row1=$checkresult->fetch_assoc();
  if ($row1['Title']==$tretitle && $row1['password']==$tre) {
     echo "<br>Verified by treasurer";
     $checkadmin1="SELECT *from admin where Title='$chairtitle'";
     $checkresult1=$conn->query($checkadmin1);
     $row2=$checkresult1->fetch_assoc();
      if ($row2['Title']==$chairtitle && $row2['password']==$chair) {
      		echo "<br>Verified by chair";
      		if (!$row['loan']<=0) {
      			// loan greater than laon payment
      			if ($row['loan']>$debit) {
	      				$payloan=$row['loan']-$debit;
	      	         echo $payloan;
	      	         $update="UPDATE register set loan=$payloan where accountNo=$ac and id>0";
	      	         if ($conn->query($update)===TRUE) {
	      	         	echo "Loan paid successfully";
                    header('location:admin.php');
	      	         }else{
	      	         	echo "failed to pay loan";
	      	         }
      			}else{
      				$payloan=$debit-$row['loan'];
      				$newdeposite=$row['deposite']+$payloan;
      				$loan=0;
      				echo $newdeposite;
      				$update="UPDATE register set deposite=$newdeposite , loan=$loan where accountNo=$ac and id>0";
	      	         if ($conn->query($update)===TRUE) {
	      	         	echo "<br>Loan paid and excess balance added to your account";
                    header('location:admin.php');
	      	         }else{
	      	         	echo "<br>Failed to pay your loan and excess balance not added to ur account";
	      	         }

      			}
      			//end of weighing loan payment and exact loan
      			
      		}else{
            
      			echo "<br>Cash deposited on account But You have no loan ";

      		}
      		


      }else{
      	echo "<br>incorrect chairman";
      }

  }else{
  	echo "<br>incorrect treasurer ";
  }
}else{
  header('location:admin.php');
}
?>