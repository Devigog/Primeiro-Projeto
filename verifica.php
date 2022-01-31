<?php
	session_start();
	if(!$_SESSION['EmailUsuario']) {
		header('location: form-login.html');
		exit();
	}
?>