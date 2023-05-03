
function searchResults(){

	var keywords = document.getElementById("keyword").value;
	
	if(keywords.toLowerCase()=="luxury vehicles" || keywords.toLowerCase()=="luxury" || keywords.toLowerCase()=="benz" || keywords.toLowerCase()=="bmw"){
		window.open("search_Luxury Vehicles.html");
	}
	else if(keywords.toLowerCase()=="general vehicles" || keywords.toLowerCase()=="general" || keywords.toLowerCase()=="honda"){
		window.open("search_General Vehicles.html");
	}
	else if(keywords.toLowerCase()==="industrial vehicles" || keywords.toLowerCase()=="industrial"){
		window.open("search_Industrial Vehicles.html");
	}
	else if(keywords.toLowerCase()==="classical vehicles" || keywords.toLowerCase()=="classical" || keywords.toLowerCase()=="classic"){
		window.open("search_Classical Vehicles.html");
	}
	else if(keywords.toLowerCase()=="other vehicles" || keywords.toLowerCase()=="other" || keywords.toLowerCase()=="herse" || keywords.toLowerCase()=="ambulance"){
		window.open("search_Other Vehicles.html");
	}
	else{
		window.open("search_NoSearchResults.html");
	}
}