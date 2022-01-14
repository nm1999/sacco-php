<!DOCTYPE html>
<html>
<head>
	<title>All | clients</title>
			<link rel="shortcut icon" type="image/x-icon" href="images/log.png">
	 <link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" type="text/css" href="w3schoools.com">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <script type="text/javascript" src="jquery.js"></script>
  <script type="text/javascript">
     function show(str) {
  if(!(str.length == 0)) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("hint").innerHTML = xmlhttp.responseText;
            }
        };

        xmlhttp.open("POST", "data.php?q="+ str, true);
        xmlhttp.send();
    }else{
       
        var xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                document.getElementById("hint").innerHTML=xmlhttp.responseText;  
                }
         };
         xmlhttp.open("POST","allmembers.php",true);
         xmlhttp.send();
   
    }
}
  </script>
</head>
<style type="text/css">
  .statistics{
  background-color:#C8C8C8 ;
  color:white;
  padding:10px;
  width:100%;
  position:fixed;
  margin-bottom:5px;
   }
 .statistics i{
     margin-left:146px;
 }
 #hint{
  margin-top:50px;
 }
</style>
<body>
   <?php include'header.php'?>
   <?php 
   $con=new mysqli("localhost","root","","bankadmin");
   if (!$con) {
     echo "connection failed";
   }
   $total="SELECT SUM(loan) As sum ,SUM(deposite) As deposite ,SUM(latepay) As late from register";
   $total1=$con->query($total);
   while ($row=$total1->fetch_assoc()) {
    $latecharge=$row['late'];
      $loan=$row['sum'];
      $deposite=$row['deposite'];
      $interest=0.05*$row['sum'];
   }
   ?>
   <div class="statistics">
    <i><b>Total deposit :</b> <?php echo $deposite?></i>
    <i><b>Total loan :</b>  <?php echo $loan ?></i>
    <i><b>Total profits :</b>  <?php echo $interest + $latecharge ?></i>
    <i><input type="text" onkeyup="show(this.value)" placeholder="search...."></i>
    
  </div>
   <div id="hint">
      <div class="all">
        <?php include 'allmembers.php'?>
      </div>
   </div>
</body>
</html>