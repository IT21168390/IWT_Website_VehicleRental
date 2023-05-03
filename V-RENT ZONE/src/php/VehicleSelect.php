<!DOCTYPE html>
<html>
	<head>
		<title>V-Rent Zone</title>
		<link rel="stylesheet" href="../css/styles.css">
		<link rel="stylesheet" href="../css/HomePage_styles.css">
		<script type="text/javascript" src="../js/SearchResults.js"></script>
	</head>
	
	<body>
		<div class="headData">
		<img class="logo" src="../images/VRSlogo.png" width= "300px" height ="100px" ><br/><br/><br/>
		<label><button id="visitProfile">User Account</button><br/>
		<a href="Login.html">Log in</a>  |  <a href="Register.html">Register</a></label><br/>
		</div>
		<center><h1 class="header">V-Rent Zone</h1></center>
		
		<hr>
		
		<div class="menubar">
		<ul class="main_menu">
			<li><a href="#HomePage">Home</a></li>
			<li><a href="Offers.html">Offers</a></li>
			<li><a href="Category.html">Category</a></li>
			<li><a href="Contact Us.html">Contact Us</a></li>
			<li><a href="About.html">About Us</a></li>
		
		<div class="searchNav">
		<form>
			<input type="text" id="keyword" placeholder="Search...">
			<button type="submit" id="search"  onclick="searchResults()"><img id="searchIMG" src="../images/magnifying-glass-solid.svg"></button>
		</form>
		</div></ul>
		</div>
		<br>
		
		<?php
			include_once("../php/config.php");

									$vID = $_GET['id'];
									
									echo $sql = "SELECT * FROM vehicle_info WHERE id=$vID";
		?>
		
		<br>
		
		<footer>
			<center><table id="footerTable">
				<tr>
				<td>
					<b>V-Rent Zone (Pvt) Ltd.</b><br/><br/>
					<b>Hotline:</b>  (+94 115432367) <b>|</b> (+94 357568990)<br/>
					<b>Email:</b>  Contact@VRentZone.com
				</td>
				<td><center>
					<a href="https://www.facebook.com/" target="_blank"><img class="facebook" src="../images/facebook.png" width="40px" length="40px"></a>
					<a href="https://www.instagram.com/" target="_blank"><img class="instagram" src="../images/instagram.png" width="40px" length="40px"></a>
					<a href="https://twitter.com/" target="_blank"><img class="twitter" src="../images/twitter.png" width="40px" length="40px"></a>
					<a href="https://myaccount.google.com/profile" target="_blank"><img class="google-plus" src="../images/Google_Plus_logo_(2015-2019).svg.png" width="40px" length="40px"></a>
					<br/>
					<b>Follow Us</b>
				</center></td>
				
				<td style="text-align:right">
					<img src="../images/payment-icon.png" width="311px" height="50px">
				</td>
				</tr>
			</table></center>
			<p><center>Copyright © 2022 | All Rights Reserved.</center></p>
		</footer>
		
	</body>
</html>