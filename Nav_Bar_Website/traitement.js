
function confirmBox() {

	var result = confirm("Etes vous sûr de vouloir vous déconnecter ?");
	if (result == false) {
		return false;
	}
	
}

function verificationEmail(){
	var email1 = document.getElementById("email1");
	var email2 = document.getElementById("email2");
	email2.addEventListener("input", function (event) {
		if (email1.value != email2.value){
			email2.style.color = "red";
			return false;
		}
		else {
			email2.style.color = "green";
			return true;
		}
	});
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

