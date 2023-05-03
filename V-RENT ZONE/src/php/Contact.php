<?php
 require ("config.php");
 
 if(isset($_POST['sentMessage'])){
	 
	 $fName=$_POST['FirstName'];
	 $lName=$_POST['LastName'];
	 $email=$_POST['email'];
	 $Message=$_POST['Meesage'];
	 
 }
 $sql="INSERT INTO inbox(First_Name, Last_Name, User_Email, Message) VALUES('$fName', '$lName', '$email', '$Message')";
 
 if($newConnection->query($sql))
 {
	 echo "Inserted Successfully!!";
 }
 else
 {
	 echo "Error".$newConnection->error;
 }

$newConnection->close();

?>