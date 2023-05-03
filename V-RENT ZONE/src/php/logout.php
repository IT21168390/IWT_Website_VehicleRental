<?php
	session_start();
	
	if(session_destroy()){
		header("Location:../html/Login.html");
	}
	
	/*if(isset($_POST["logoff"])) {
		session_destroy();
		header("Location:index.php");
	}
	else {
		header("Location:home.php");
	}*/
?>