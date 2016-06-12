
window.onload = function(){
	var visits = document.getElementById("visits").innerHTML;
	var visitnumber=Number(visits);
	if (visitnumber < 2) {
	alert ("Tere tulemast");
	}
	else if (visitnumber < 3) {
	alert ("Jälle siin");
		}
	else {
	alert ("Ära refreshi niipalju");
		}
	

}