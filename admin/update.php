<?php

if(!$_POST)
{
	echo 'Are you kidding...';
	header("Location: admin");
}

require_once "../root.php";
require_once "db.php";

extract($_POST);



 $sql ="UPDATE `post` SET `title` = '$title', `content` = '$content', `status` = '$status',post_type='$post_type',sub_title='$subtitle', duration='$duration' WHERE `id` = $postId;";



if ($conn->query($sql) === TRUE) {
	echo "Record Successfully Updated";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}


if($_FILES && ($_FILES['image-file']['tmp_name'] !=''))
{
extract($_FILES['image-file']);

	/* file upload via php */
	$file_name =$postId."$name";
	move_uploaded_file($tmp_name, "../uploads/$file_name");

	/* update filenmae into database */

	$update_sql ="UPDATE `post` SET `f_img` = '$file_name' WHERE `id` = $postId";

	if ($conn->query($update_sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $update_sql . "<br>" . $conn->error;
	}

}


// var_dump($_FILES);

/* finally redirect to old page*/
header("Location: $my_root"."admin/blog.php");
