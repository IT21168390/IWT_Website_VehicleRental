<?php
	if(isset($_POST["regButton"])){
		$FName = $_POST['FirstName'];
		$LName = $_POST['LastName'];
		$BDay = $_POST['BD'];
		$Tele = $_POST["tel"];
		$UAddress = $_POST["UserAddress"];
		$UEmail = $_POST["email"];
		$PW = $_POST["psw"];
		
		require ("config.php");
		
		$toSQLuser = "INSERT INTO user_data(First_Name,Last_Name,Birthday,User_Telephone,User_Address,User_Email,User_Password) VALUES('$FName','$LName','$BDay','$Tele','$UAddress','$UEmail','$PW')";
		
		
		if($newConnection->query($toSQLuser)){
			echo "Inserted successfully";
			header("Location:../html/Login.html");
		}
		else{
			echo "Error: ".$newConnection->error;
		}
		
		$newConnection->close();
	}
?>