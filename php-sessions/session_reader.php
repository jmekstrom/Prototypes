<?php 
	session_start();
	$name = $_POST['name'];
	$age = $_POST['age'];
	$occupation = $_POST['occupation'];
	$_SESSION['error'] = '';
	if(preg_match("/^[a-zA-Z ]{3,99}$/",$name)){
		$_SESSION['name'] = $_POST['name'];
		//print_r($_SESSION);
	}
	else{
		$_SESSION['error']['name'] = $_POST['name'];
		//print_r($_SESSION);
	}

	if(preg_match("/^[0-9]{1,2}$/",$age)){
		$_SESSION['age']= $_POST['age'];
		//print_r($_SESSION);
	}
	else{
		$_SESSION['error']['age'] = $_POST['age'];
		//print_r($_SESSION);
	}

	if(preg_match("/^[a-zA-Z ]{3,99}$/",$occupation)){
		$_SESSION['occupation'] = $_POST['occupation'];
		//print_r($_SESSION);
	}
	else{
		$_SESSION['error']['occupation'] = $_POST['occupation'];
		//print_r($_SESSION);
	}
	header('location: session_setter.php');
 ?>
