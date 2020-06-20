<?php
	session_start();
	require '../db_connect.php';

	$age = $_POST['age'];
	$residence = htmlentities($_POST['residence']);
  $address = htmlentities($_POST['address']);
  $email = $_POST['email'];
  $mobile_number = $_POST['mobile_number'];
  $header = $_POST['header'];
  $description = $_POST['description'];
	$active = $_POST['active'];

	if (empty($age)) {
		$_SESSION['age_error'] = "Enter Your Age";
		header("location:about_info.php");
	}
	else if (empty($residence)) {
		$_SESSION['residence_error'] = "Enter Your Residence";
		header("location:about_info.php");
	}
  else if (empty($address)) {
    $_SESSION['address_error'] = "Enter Your Address";
    header("location:about_info.php");
  }
  else if (empty($email)) {
    $_SESSION['email_error'] = "Enter Your Email";
    header("location:about_info.php");
  }
  else if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    $_SESSION['email_error'] = "Email Format is Wrong !!";
    header("location:about_info.php");
  }
  else if (empty($mobile_number)) {
    $_SESSION['mobile_number_error'] = "Enter Your Mobile Number";
    header("location:about_info.php");
  }
   else if (strlen($mobile_number) != 11) {
    $_SESSION['mobile_number_error'] = "Mobile Number Must be 11 Digit";
    header("location:about_info.php");
  }
  else if (empty($header)) {
    $_SESSION['header_error'] = "Enter Your Header";
    header("location:about_info.php");
  }
  else if (empty($description)) {
    $_SESSION['description_error'] = "Enter Your Description";
    header("location:about_info.php");
  }
	else if (empty($active)) {
		$_SESSION['avtive_error'] = "Enter Your Status";
		header("location:about_info.php");
	}
	else
	{
		  $upload_photo = $_FILES['signature'];
  		$after_explode = explode('.', $upload_photo['name']);
  		$extention = end($after_explode);
  		$allow_extention = array('jpg','png','jpeg');

  		if (in_array($extention, $allow_extention)) {
  			if ($upload_photo['size'] <= 3000000) {
  				
  					$insert = "INSERT INTO abouts(age,residence,address,email,mobile_number,header,description,status) VALUES ('$age','$residence','$address','$email','$mobile_number','$header','$description','$active')";
  					$insert_result = mysqli_query($connect,$insert);

  					$last_id = mysqli_insert_id($connect);
  					$file_name = $last_id.'.'.$extention;
  					$new_location = "../uploads/about/".$file_name;
  					move_uploaded_file($upload_photo['tmp_name'], $new_location);

  					$update = "UPDATE abouts SET signature = '$file_name' WHERE id = '$last_id'";
  					$update_result = mysqli_query($connect,$update);

  					$_SESSION['success'] = "About Add Successfully";
  					header("location:about_info.php");
  				
  			}
  			else {
  			$_SESSION['photo_error'] = "Photo size too big.";
  			header("location:about_info.php");
  			}

  		}
  		else {
  			$_SESSION['photo_error'] = "Invalid File Format";
  			header("location:about_info.php");
  		}
	}
?>