
function confirmBoxProfil() {
	var email1 = document.getElementById("email1");
	var email2 = document.getElementById("email2");
	var password1 = document.getElementById("motdepasse");
	var password2 = document.getElementById("motdepasseConfirmation");


	if(validateEmail(email2.value)) {
		if(email1.value == email2.value){
			if(password2.value == "" || password2.value== password1.value){
				email2.style.color = "green";
				var result = confirm("Confirmez-vous votre inscription ?");
				if (result == false) {
					return false;
				}
			}
			else{
				password2.style.color = "red";
				password1.style.color = "red";
				window.alert("Les mots de passe ne correspondent pas");
				return false;
			}
		}
		else{
			email2.style.color = "red";
			email1.style.color = "red";
			window.alert("Les adresses mail ne correspondent pas");
			return false;
		}
	}
	else{
		email2.style.color = "red";
		window.alert("Le format de votre email est invalide");
		return false;
		
	}
}

function color(e){
	e.style.color = "black";
}

function verificationEmail(){
	var email1 = document.getElementById("email1");
	var email2 = document.getElementById("email2");
	email2.addEventListener("input", function (event) {
		if (email1.value != email2.value){
			email2.style.color = "red";
			return false;
		}
		else{
			email2.style.color = "green";
			return true;
		}
	});

}

function verificationPassword(){
	var password1 = document.getElementById("motdepasse");
	var password2 = document.getElementById("motdepasseConfirmation");
	password2.addEventListener("input", function (event) {
		if (password1.value != password2.value){
			password2.style.color = "red";
			return false;
		}
		else{
			password2.style.color = "green";
			return true;
		}
	});

}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

