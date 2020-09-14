<?php

if(!$_POST)
{
	echo 'Are you kidding...';
	header("Location: admin");
}

require_once "../root.php";

require_once "db.php";

extract($_POST);
extract($_FILES['image-file']);

 $current_date = time();
 echo '<pre>';
 var_dump($_POST);
 var_dump($_FILES);
// echo $name;


 // die('<br>________end upload code__________');

$sql = "UPDATE  profile SET introduction='$intro', objective='$objective',fullname='$fullname',expertise='$expertise', age='$age', email='$email',address='$address',phone='$phone',h_img=''";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

/* file upload via php */
if($name)
{
		$file_name =$conn->insert_id."$name";

}
else{
		$file_name ='';

}
		move_uploaded_file($tmp_name, "../uploads/$file_name");

/* update filenmae into database */

		$update_sql ="UPDATE `profile` SET `h_img` = '$file_name' WHERE `id` = $conn->insert_id";

		if ($conn->query($update_sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $update_sql . "<br>" . $conn->error;
		}

/* finally redirect to old page*/
header("Location: $my_root/admin/profile.php");

