function change(element){
	var a = element.innerHTML;
	var b = a.charAt(0);
	if('A' == b){
		document.getElementById('services').style.display = "block";
		document.getElementById('about_container').style.display = "none";	
		document.getElementById('movies_list').style.display = "none";
		document.getElementById('body4').style.display = "none";	
	}
	else if('H' == b){
		document.getElementById('services').style.display = "none";
		document.getElementById('about_container').style.display = "none";	
		document.getElementById('movies_list').style.display = "flex";
		document.getElementById('body4').style.display="none";
	}
	else if('C' == b){
		document.getElementById('services').style.display = "none";
		document.getElementById('about_container').style.display = "none";	
		document.getElementById('movies_list').style.display = "none";
		document.getElementById('body4').style.display="flex";
	}
}