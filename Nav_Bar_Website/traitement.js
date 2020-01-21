
function confirmBox() {

	var result = confirm("Etes vous sûr de vouloir vous déconnecter ?");
	if (result == true) {
		document.location.href="../Nav_Bar_Website/logout.php"
	}
}

