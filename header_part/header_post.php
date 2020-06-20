<?php
	session_start();
	require '../db_connect.php';

	$name = htmlentities($_POST['name']);
	$year = $_POST['year'];
	$active = $_POST['active'];
	if (empty($name)) {
		$_SESSION['name_error'] = "Enter Your Name";
		header("location:header_info.php");
	}
	else if (empty($year)) {
		$_SESSION['year_error'] = "Enter Your year";
		header("location:header_info.php");
	}
	else if (empty($active)) {
		$_SESSION['avtive_error'] = "Enter Your Status";
		header("location:header_info.php");
	}
	else
	{
		$upload_photo = $_FILES['photo'];
  		$after_explode = explode('.', $upload_photo['name']);
  		$extention = end($after_explode);
  		$allow_extention = array('jpg','png','jpeg');

  		if (in_array($extention, $allow_extention)) {
  			if ($upload_photo['size'] <= 3000000) {
  				
  					$insert = "INSERT INTO headers (name,year,status) VALUES ('$name','$year','$active')";
  					$insert_result = mysqli_query($connect,$insert);

  					$last_id = mysqli_insert_id($connect);
  					$file_name = $last_id.'.'.$extention;
  					$new_location = "../uploads/header/".$file_name;
  					move_uploaded_file($upload_photo['tmp_name'], $new_location);

  					$update = "UPDATE headers SET photo = '$file_name' WHERE id = '$last_id'";
  					$update_result = mysqli_query($connect,$update);

  					$_SESSION['success'] = "Header Add Successfully";
  					header("location:header_info.php");
  				
  			}
  			else {
  			$_SESSION['photo_error'] = "Photo size too big.";
  			header("location:header_info.php");
  			}

  		}
  		else {
  			$_SESSION['photo_error'] = "Invalid File Format";
  			header("location:header_info.php");
  		}
	}
?>