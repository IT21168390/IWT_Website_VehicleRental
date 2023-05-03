<?php
 require ("config.php");
 
 if(isset($_POST['setPAY'])){
	 
	$Hname=$_POST['holderName'];
	$cardnum=$_POST['cardNum'];
	$Expirary=$_POST['expData'];
	$cvv=$_POST['cardCVV'];
	 
 }
 $sql="INSERT INTO payment(CardHolder_Name, Card_Number, Expire_Date, CVV) VALUES('$Hname', '$cardnum', '$Expirary', '$cvv')";
 
 if($newConnection->query($sql))
 {
	 echo "Inserted Successfully!!";
	 header("Location:../html/paymentsuccess.html");
 }
 else
 {
	 echo "Error".$newConnection->error;
 }

$newConnection->close();

?>