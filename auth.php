<?php
	if(!$_POST){
		echo 'Are you kidding...';
		header("Location: site");
	}

	extract($_POST);

	if($email == 'test@gmail.com' && $password == '123456'){
		session_start();
		$_SESSION['login'] = true;
		$_SESSION['email'] = $email;
		header("Location: admin");

	} else{
		header("Location: site/?err=true/#login-form");
	}