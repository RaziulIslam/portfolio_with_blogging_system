<?php

	if(!$_POST){
		echo 'Are you kidding...';
		header("Location: admin");
	}

	require_once "../root.php";
	require_once "db.php";

	extract($_POST);
	$current_date = time();

	$sql = "SELECT * FROM profile";
	$posts = $conn->query($sql);
	$posts = $posts->fetch_All(MYSQLI_ASSOC);

	if($posts){
		$sql = "UPDATE  profile SET introduction='$intro', objective='$objective',fullname='$fullname',expertise='$expertise', age='$age', email='$email',address='$address',phone='$phone'";
	}else{
		$sql = "INSERT INTO profile (introduction, objective,fullname,expertise, age, email,address,phone)
		VALUES ('$intro', '$objective', '$fullname', '$expertise', '$age','$email','$address','$phone')";
	}

	if($conn->query($sql) === TRUE){
		echo "New record created successfully";
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	if($posts){
		$id = $posts[0]['id'];
	}else{
		$id = $conn->insert_id;
	}

	if($_FILES && ($_FILES['b-image-file']['tmp_name'] !='')){
		extract($_FILES['b-image-file']);

		/* file upload via php */
		$b_file_name = ($name) ? $conn->insert_id."$name" : '';
		move_uploaded_file($tmp_name, "../uploads/$b_file_name");

		/* update filename into database */
		$update_sql2 = "UPDATE `profile` SET `b_img` = '$b_file_name' WHERE `id` = $id";

		if ($conn->query($update_sql2) === TRUE) {
			echo "New record created successfully";
		}else{
			echo "Error: " . $update_sql2 . "<br>" . $conn->error;
		}
	}

	if($_FILES && ($_FILES['image-file']['tmp_name'] !='')){
		extract($_FILES['image-file']);

		/* file upload via php */
		$file_name = ($name) ? $conn->insert_id."$name" : '';
		move_uploaded_file($tmp_name, "../uploads/$file_name");

		/* update filename into database */
		$update_sql = "UPDATE `profile` SET `h_img` = '$file_name' WHERE `id` = $id";

		if ($conn->query($update_sql) === TRUE) {
			echo "New record created successfully";
		}else{
			echo "Error: " . $update_sql . "<br>" . $conn->error;
		}
	}

	/* finally redirect to old page*/
	header("Location: $my_root"."admin/profile.php");