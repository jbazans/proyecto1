<?php
	$user_bd="hola";
	$password_bd="mundo";

	$user=$_GET['user'];
	$password=$_GET['password'];

	if ($user==$user_bd and $password=$password_bd) {
		header("Location: ../main.html");
	}else{
		header("Location: ../login1.html");
	}
?>