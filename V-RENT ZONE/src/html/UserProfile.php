<?php
require ("../php/config.php");
session_start();
$uID = $_GET['ID'];
$_SESSION["UserLogin"] = $_GET['ID'];

?>

<!DOCTYPE html>
<html>
	<head>
		<title>User Profile | V-Rent Zone</title>
		<link rel="stylesheet" href="../css/styles.css">
		<link rel="stylesheet" href="../css/UserProfile_styles.css">
		<script type="text/javascript" src="../js/SearchResults.js"></script>
		//<script type="text/javascript" src="../js/UserProfile_JS.js"></script>
	
		<script>
			function toConfirm(section){
				confirm("Do you really want to apply the changes?");
			}

			function leaveProfile(target){
				if(target=="inbox"){
					location.href="../php/Messages.php?ID="+<?php echo $_GET['ID'] ?>;
				}
				else if(target=="exploreVehicle"){
					location.href="../html/Category.html";
				}
			}
		</script>
		
	
	</head>
	
	<body>
		<div class="headData">
		<img class="logo" src="../images/VRSlogo.png" width= "300px" height ="100px" ><br/><br/><br/>
		
		<label><a href="../php/logout.php">LOG OUT</a></label>
		</div>
		<center><h1 class="header">V-Rent Zone</h1></center>
		
		<hr>
		
		<div class="menubar">
		<ul class="main_menu">
			<li><a href="Home Page.html">Home</a></li>
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
		
		
		<center><h1><b>USER PROFILE</b></h1></center>
		
		<div class="profileArea">
		
			<div class="profileEXTRA">
				<button type="button" class="visitInbox" onclick="leaveProfile('inbox')"><b>Inbox</b></button><br/><br/>
				<button type="button" class="visitCategories" onclick="leaveProfile('exploreVehicle')"><b>Explore Vehicles</b></button>
			</div>
		
		<div class="profileInfo">
		  <img src="../images/profile_image.png" alt="Profile Picture" style="width:225px">
		  <p class="uType">
		  <?php
				include_once("../php/config.php");
				
				$uID = $_GET['ID'];
				
				$sql = "SELECT * FROM user_data WHERE User_ID=$uID";
				$result = $newConnection->query($sql);
				
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo (" ".$row['User_Type']);
					}
				}
				else{
						echo "No results <br/>"; 
				}
			?>
		  </p>
		  <h1 id="userName">
		  <?php
				include_once("../php/config.php");
				
				$uID = $_GET['ID'];
				
				$sql = "SELECT * FROM user_data WHERE User_ID=$uID";
				$result = $newConnection->query($sql);
				
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo ($row['First_Name']);
					}
				}
					else{
						echo "No results <br/>"; 
					}
			?>
		  </h1>
			
		  <p id="userEmail"><b>Email :</b>
		  <?php
				include_once("../php/config.php");
				
				$uID = $_GET['ID'];
				
				$sql = "SELECT * FROM user_data WHERE User_ID=$uID";
				$result = $newConnection->query($sql);
				
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo ("<br>".$row['User_Email']);
					}
				}
					else{
						echo "No results <br/>"; 
					}
			?>
		  </p>
		  <p id="userPhone"><b>Phone :</b>
		  <?php
				include_once("../php/config.php");
				
				$uID = $_GET['ID'];
				
				$sql = "SELECT * FROM user_data WHERE User_ID=$uID";
				$result = $newConnection->query($sql);
				
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo ("<br>".$row['User_Telephone']);
					}
				}
					else{
						echo "No results <br/>"; 
					}
			?>
		  </p>
		  <p><button id="profileOUT" onclick="document.location.href='../php/logout.php'">Sign out</button></p>
		</div>
		
		<div class="profileData">
		<h2 style="font-family:sans-serif"><u><b>Edit Account Details</b></u><h2>
		<h3 style="font-family:sans-serif"><b>Security</b></h3>
		
			<form method="post" action="../php/ProfilePageDataSecurity.php?ID=<?php echo $_GET['ID'] ?>"> <div class="email_pass">
		<label>Current Password</label>
		<input type="password" placeholder="Enter Current Password" name="pass" required>
		<label>New Password</label>
		<input type="password" placeholder="Enter New Password" name="newPass" required>
		<label>Change Email</label>
		<input type="email" placeholder="New Email Address" name="mail" required><br>
			</div>
			
			<button type="submit" name="secChange" class="securityChange" onclick="toConfirm('secureChange')"><b>Save Changes</b></button>
			</form>
			
		<form method="post" action="../php/ProfilePageDataGeneral.php?ID=<?php echo $_GET['ID'] ?>"><div class="changeUserInfo">
		<h3 style="font-family:sans-serif"><b>Change Your Information</b></h3>
			<div class="userInfo">
		<table class="userInfo">
		<tr><td>First Name</td><td><input type="text" name="name1" required></td>
		<td id="userInfoColumn2">Last Name</td><td><input type="text" name="name2" required></td></tr>
		<tr><td>Birthday</td><td><input type="date" name="BD" required></td>
		<td id="userInfoColumn4">Phone Number</td><td><input type="tel" name="PhoneNumber" required></td></tr>
		<tr><td>Address</td><td><input type="text" name="newAddress" required></td></tr>
		<tr><td></td><td></td></tr>
		</table>
			</div>
		</div>
			<button type="submit" name="infoChange" class="userInfoChange" onclick="toConfirm('uInfoChange')"><b>Save Changes</b></button>
		</form>
		</div>
		</div>
		
		<hr>
		
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