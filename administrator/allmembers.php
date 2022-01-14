<!DOCTYPE html>
<html>
<head>
	<title></title>
			<link rel="shortcut icon" type="image/x-icon" href="images/log.png">
	 <link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" type="text/css" href="w3schoools.com">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<style type="text/css">
	 .analysis{
  width:10%;
 }
 .details{
  width:90%;
  margin-left:20px;
  margin-top:52px;
 }
 #pic{
  width:5%;
 }
 #img{
  width:14%;
  margin-right:150px;
  margin-left:100px;
 }
 a{
  color:black;
 }
 a:hover{
    text-decoration:none;
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
             $extract="SELECT * FROM register order by firstname DESC";
             $result=$conn->query($extract);
      if ($result->num_rows>0) { 
          while ($row=$result->fetch_assoc()){
      ?>   
   		<tr class="table">
        <td id="pic"><img src="<?php echo $row['photo'] ?>" id="img" ></td>
   			<td><?php echo $row['accountNo']?></td>
   			<td><?php echo $row['firstname']." ".$row['surname']?></td>
        <td><a href="mailto:<?php echo $row['email'];?>"><?php echo $row['email']?></a></td>
   			<td><?php echo $row['deposite']?></td>
        <td><?php echo $row['loan']?></td>
   		</tr>
      <?php }
         }
         $conn->close();?>
   	</table>
   </div>
</body>
</html>