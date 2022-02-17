<?php

	if(!$_POST){
		echo 'Are you kidding...';
		header("Location: admin");
	}

	require_once "../root.php";
	require_once "db.php";

	extract($_POST);

	$sql = "SELECT * FROM contact";
	$contact = $conn->query($sql);
	$contact = $contact->fetch_All(MYSQLI_ASSOC);

	if($contact){
		$sql = "UPDATE  contact SET contact_content='$content', address='$address',email='$email',phone='$phone', fb_link='$fblink', twitter_link='$twitterlink',insta_link='$instalink',Linkedin_link='$linkedinlink'";
	}else{
		$sql = "INSERT INTO contact (contact_content, address,email,phone,fb_link, twitter_link,insta_link,Linkedin_link)
		VALUES ('$content', '$address', '$email', '$phone', '$fblink','$twitterlink','$instalink','$linkedinlink')";
	}

	if($conn->query($sql) === TRUE){
		echo "New record created successfully";
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}