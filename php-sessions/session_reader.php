<?php 
	print("POST Super Global: ");
	print_r($_POST);
	session_start();
	$_SESSION = $_POST;
	print("<br>");
	print("SESSION Super Global: ");
	print_r($_SESSION);
 ?>