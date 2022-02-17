<?php

	if(!$_POST)
	{
		echo 'Are you kidding...';
		header("Location: admin");
	}

	require_once "../root.php";

	require_once "db.php";

	extract($_POST);


	$sql = "INSERT INTO reference (content, designation,name)
		VALUES ('$content', '$designation','$name')";

	if($conn->query($sql) === TRUE){
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$id =  $conn->insert_id;

	if($_FILES && ($_FILES['client-image-file']['tmp_name'] !='')){
		extract($_FILES['client-image-file']);

		/* file upload via php */
		$client_image_file = ($name) ? $conn->insert_id."$name":'';
		move_uploaded_file($tmp_name, "../uploads/clients/$client_image_file");

		/* update filename into database */
		$update_sql2 ="UPDATE `reference` SET `client_img` = '$client_image_file' WHERE `id` = $id";

		if ($conn->query($update_sql2) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $update_sql2 . "<br>" . $conn->error;
		}
	}