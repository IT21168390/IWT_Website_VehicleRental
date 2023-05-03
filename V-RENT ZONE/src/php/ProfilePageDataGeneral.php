<?php
require ("config.php");

if(isset($_POST['infoChange'])){
	$newFName = $_POST["name1"];
	$newLName = $_POST["name2"];
	$newBD = $_POST["BD"];
	$newTele = $_POST["PhoneNumber"];
	$newAdrs = $_POST["newAddress"];
	
	$uID = $_GET['ID'];
	
	echo $uID;
	
	$updatedSQL2 = mysqli_query($newConnection,"Update user_data Set First_Name='$newFName', Last_Name='$newLName', Birthday='$newBD', User_Telephone='$newTele', User_Address='$newAdrs' Where User_ID='$uID'");
}
header("Location:../html/UserProfile.php?ID=$uID");
?>