<?php

$checkEmail = $_POST['Lemail'];
$checkPassword = $_POST['Lpass'];
$uID = "";

//Database Connection...

require ("config.php");

session_start();

//$checkSQL = mysqli_query($newConnection,"SELECT * FROM user_data WHERE User_Email='$checkEmail'");

$checkSQL = "SELECT User_Email, User_Password, User_ID FROM user_data WHERE User_Email=? AND User_Password=?";
$stmt = $newConnection->prepare($checkSQL);
$stmt->bind_param("ss", $checkEmail, $checkPassword);
$stmt->execute();
$stmt->bind_result($checkEmail, $checkPassword, $uID);
$stmt->store_result();

/*if ($checkSQL->num_rows > 0) {
	while($row = $checkSQL->fetch_assoc()) {
		//echo (" ".$row['User_ID']);
		$_SESSION["User"] = $_POST[$row['User_ID']];
		
		header("Location:../html/UserProfile.php?ID=$row[User_ID]");
	}
}*/

if($stmt->fetch()){
	$_SESSION["UserLogin"] = $checkEmail;
	header("Location:../html/UserProfile.php?ID=$uID");
}
else{
	echo "<script>alert('Incorrect Login!')</script>"; 
	header("Location:../html/Login.html");
}

mysqli_close($newConnection);

/*$sql = "SELECT * FROM user_data WHERE User_ID=3";
				$result = $newConnection->query($sql);
				
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo (" ".$row['User_Type']);
					}
				}
				else{
						echo "No results <br/>"; 
				}*/

/*
if(isset($_POST["txtName"]))
{
	if($_POST["Lemail"]=="asd" && $_POST["Lpass"]=="123")
	{
		//Valid user, so set the Session
		$_SESSION["userName"] = $_POST["txtName"];
	}
	else
	{
		header("Location:../html/Register.html");
	}
//Validate the user
//If a validuser, set a Session
}*/

?>