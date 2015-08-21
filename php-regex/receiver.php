<?php
	print_r($_POST);
	print("<br>");
	foreach ($_POST as $key => $value){
		print($key." : ".$_POST[$key]."<br>");
		switch($key){
			case first_name:
				if(preg_match( '/^[a-zA-Z]{2,}$/' , $_POST['first_name']) != 1){
    				$_POST['errors']['first_name'] = "first name syntax incorrect";
				}
				break;
			case age:
				if(preg_match( '/^[0-9]{1,3}$/' , $_POST['age']) != 1){
    				$_POST['errors']['age'] = "age syntax incorrect";
				}
				break;
			case phone:
				if(preg_match( '/^([1])?(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$/' , $_POST['phone']) != 1){
    				$_POST['errors']['phone'] = "phone number syntax incorrect";
				}
				break;
			case username:
				if(preg_match( '/^([a-zA-Z]{1})[a-zA-Z0-9]{5,}$/' , $_POST['username']) != 1){
    				$_POST['errors']['username'] = "username syntax incorrect";
				}
				break;
			case bonus:
				if(preg_match( '/[0-9]{3,}/' , $_POST['bonus']) != 1){
    				$_POST['errors']['bonus'] = "bonus syntax incorrect";
				}
				break;	
		}
	}
	print_r($_POST);
	if(preg_match("/^[a-zA-Z]{3,99}$/",$name)){
		
	}
	else{
		
	}

	if(preg_match("/^[0-9]{1,2}$/",$age)){
		
	}
	else{
		
	}

	if(preg_match("/^[a-zA-Z ]{3,99}$/",$occupation)){
		
	}
	else{
		
	}
	header('location: session_setter.php');
?>