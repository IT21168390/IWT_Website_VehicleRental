function toConfirm(section){
	confirm("Do you really want to apply the changes?");
}

function leaveProfile(target){
	if(target=="inbox"){
		location.href="../php/Messages.php";
	}
	else if(target=="exploreVehicle"){
		location.href="../html/Category.html";
	}
}