<?php
  session_start();
  require '../db_connect.php';
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $hass_pass = password_hash($password, PASSWORD_DEFAULT);
  $gender = $_POST['gender'];
  $role = $_POST['role'];

  date_default_timezone_set('Asia/Dhaka');
	$time = date('l jS \of F Y h:i:s A');


	$upper = preg_match('@[A-Z]@', $password);
	$lower = preg_match('@[a-z]@', $password);
	$number = preg_match('@[0-9]@', $password);
	$special = preg_match('@[^/w]@', $password);

  if (empty($name)) {
    $_SESSION['name_error'] = "Enter Your Name";
    header("location:register.php");
  }
  else if (empty($email)) {
    $_SESSION['email_error'] = "Enter Your Email";
    header("location:register.php");
  }
  else if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    $_SESSION['email_error'] = "Your Email format is wrong !!";
    header("location:register.php");
  }
  else if (empty($password)) {
    $_SESSION['password_error'] = "Enter Your Password";
    header("location:register.php");
  }
  else if (!$upper ||!$lower ||!$number ||!$special || strlen($password) < 7 ) {
    $_SESSION['password_error'] = "Password have upper,lower,number,special and minimum 8 digit";
    header("location:register.php");
  }

  else if (empty($gender)) {
    $_SESSION['gender_error'] = "Enter Your Gender";
    header("location:register.php");
  }
  else if (empty($role)) {
    $_SESSION['role_error'] = "Enter Your Role";
    header("location:register.php");
  }
  else {

  		$select = "SELECT COUNT(*) as email_exist FROM users WHERE email = '$email'";
  		$select_result = mysqli_query($connect,$select);
  		$after_assoc = mysqli_fetch_assoc($select_result);

  		$upload_photo = $_FILES['photo'];
  		$after_explode = explode('.', $upload_photo['name']);
  		$extention = end($after_explode);
  		$allow_extention = array('jpg','png','jpeg');

  		if (in_array($extention, $allow_extention)) {
  			if ($upload_photo['size'] <= 2000000) {
  				if ($after_assoc['email_exist'] == 1) {
  					$_SESSION['email_error'] = "Email Allready Exist";
  					header("location:register.php");
  					}
  				else {
  					$insert = "INSERT INTO users (name,email,password,gender,role,create_at) VALUES ('$name','$email','$hass_pass','$gender','$role','$time')";
  					$insert_result = mysqli_query($connect,$insert);

  					$last_id = mysqli_insert_id($connect);
  					$file_name = $last_id.'.'.$extention;
  					$new_location = "../uploads/users/".$file_name;
  					move_uploaded_file($upload_photo['tmp_name'], $new_location);

  					$update = "UPDATE users SET photo = '$file_name' WHERE id = '$last_id'";
  					$update_result = mysqli_query($connect,$update);

  					$_SESSION['success'] = "Registration Successfully";
  					header("location:register.php");
  				}
  			}
  			else {
  			$_SESSION['photo_error'] = "Photo size too big.";
  			header("location:register.php");
  			}

  		}
  		else {
  			$_SESSION['photo_error'] = "Invalid File Format";
  			header("location:register.php");
  		}
  	}

 ?>
