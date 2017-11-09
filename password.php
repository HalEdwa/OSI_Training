<?php 

	$pass = "test";
	if ($_GET["password"] == $pass) {
	header( 'Location: /PPandGpowerpoint.html');
	} else {
		echo "Incorrect Password";
	}
?>