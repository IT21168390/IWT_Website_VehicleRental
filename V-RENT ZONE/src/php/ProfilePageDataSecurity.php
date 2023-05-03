<?php
require ("config.php");

if(isset($_POST['secChange'])){
	$newMail = $_POST["mail"];
	$newPass = $_POST["newPass"];
	
	$uID = $_GET['ID'];
	
	echo $uID;

	$updatedSQL1 = mysqli_query($newConnection,"Update user_data Set User_Email='$newMail', User_Password='$newPass' Where User_ID='$uID'");
}



//$newConnection->close();*/

header("Location:../html/UserProfile.php?ID=$uID");
?>