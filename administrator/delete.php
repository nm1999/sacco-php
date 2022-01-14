 <?php
 	$title= strval($_POST['title']);
 	$email= strval($_POST['email']);
 	$name= strval($_POST['name']);
 	$psw= strval($_POST['psw']);
 	$nick= strval($_POST['nick']);
 	$nephew= strval($_POST['nephew']);
 	$conn= new mysqli("localhost","root","","bankadmin");
 	if (!$conn) {
 		echo "connection failed";
 	}
 	// get the location of the data 
 	$sel = "SELECT * from admin where Title = '$title'";
 	$res =$conn->query($sel);
 	$row=$res->fetch_assoc();

 	 //checking inputs match with emails
 if ($nick == $row['nickname'] && $name == $row['Name'] && $email ==$row['email'] && $psw==$row['password'] && $nephew ==$row['nephewname']) {
 	       

 	       //delete from the server basing on the id
 				$id= $row['id'];
 	       $del ="DELETE from admin where id = '$id'";
 	       if ($conn->query($del)===TRUE) {
 	       		echo "Admin successfully deleted";
 	       }else{
 	       		echo "Admin not deleted";
 	       }
    }else{
    	echo "Invaild inputs .Try Again";
    }
 ?>