function validator() {
	var name = document.getElementById("name").value;
	var lastname = document.getElementById("lastname").value;				
	var content = document.getElementById("content").value;
	if (name=="" || lastname=="" || content=="") {
		document.getElementById("field").innerHTML="Formularz jest niekompletny.";
		console.log("Brakuje danych.");
	}else{
		document.getElementById("field").innerHTML="";
		console.log("Wszystko OK");
	}
}
			
function mailValidator() {
	var mail = document.getElementById("mail").value;
	var regx = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
	if(mail.match(regx)){
		console.log("Mail prawidłowy");
		document.getElementById("mailField").innerHTML="";
	}else{
		document.getElementById("mailField").innerHTML="Podaj prawidłowy e-mail";
		console.log("Błędny mail");
	}
}