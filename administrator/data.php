<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
</head>
<style type="text/css">
 .details{
  width:90%;
  margin-left:20px;
  margin-top:52px;
 }
 #pic{
  width:5%;
 }
 #img{
  width:20%;
  margin-right:150px;
  margin-left:100px;
 }
</style>
<body>
<div class="details">    
         <table class="table-bordered table-responsive-sm table-striped">
         <tr class="table">
            <th>Picture</th>
            <th>Account No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Savings</th>
            <th>Loans</th>
         </tr>
      <?php  
          $conn=new mysqli("localhost","root","","bankadmin");
            if (!$conn) {
           echo "Connection failed";
            }
            $search = strval($_GET['q']);
             $extract="SELECT * FROM register where surname like'$search%' || email like '$search%' || accountNo like'$search%' ||firstname like '$search%'";
             $result=$conn->query($extract);
          while ($row=$result->fetch_assoc()){
      ?>   
   		<tr class="table">
        <td id="pic"><img src="<?php echo $row['photo'] ?>" id="img" ></td>
   			<td><?php echo $row['accountNo']?></td>
   			<td><?php echo $row['firstname']." ".$row['surname']?></td>
        <td><?php echo $row['email']?></td>
   			<td><?php echo $row['deposite']?></td>
        <td><?php echo $row['loan']?></td>
   		</tr>
      <?php }
         
         $conn->close();?>
   	</table>
   </div>
</body>
</html>