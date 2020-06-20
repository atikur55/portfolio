<?php

  require '../db_connect.php';
  $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $hass_pass = password_hash($password,PASSWORD_DEFAULT);
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
      header("location:edit.php");
    }
    else if (empty($email)) {
      $_SESSION['email_error'] = "Enter Your Email";
      header("location:edit.php");
    }
    else if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
      $_SESSION['email_error'] = "Your Email format is wrong !!";
      header("location:edit.php");
    }
    else if (empty($password)) {
      $_SESSION['password_error'] = "Enter Your Password";
      header("location:edit.php");
    }
    else if (!$upper ||!$lower ||!$number ||!$special || strlen($password) < 7 ) {
      $_SESSION['password_error'] = "Password have upper,lower,number,special and minimum 8 digit";
      header("location:edit.php");
    }

    else if (empty($gender)) {
      $_SESSION['gender_error'] = "Enter Your Gender";
      header("location:edit.php");
    }
    else if (empty($role)) {
      $_SESSION['role_error'] = "Enter Your Role";
      header("location:edit.php");
    }
    else
    {
      if ($_FILES['photo']['name'] != '') {
        $select = "SELECT photo FROM users WHERE id = $id";
        $select_result = mysqli_query($connect,$select);
        $after_assoc_photo = mysqli_fetch_assoc($select_result);
        $delete_photo = "../uploads/users/".$after_assoc_photo['photo'];
        unlink($delete_photo);

        $upload_photo = $_FILES['photo'];
			  $after_explode = explode('.', $upload_photo['name']);
			  $extention = end($after_explode);
			  $allow_extention = array('jpg','png','jpeg','gif');

        if (in_array($extention,$allow_extention)) {
          if ($upload_photo['size'] <= 2000000) {

            $file_name = $id.'.'.$extention;
            $new_location = "../uploads/users/".$file_name;
            move_uploaded_file($upload_photo['tmp_name'], $new_location);

            $update_photo = "UPDATE users SET photo = '$file_name' WHERE id = '$id'";
            $update_photo_result = mysqli_query($connect,$update_photo);

            $update = "UPDATE users SET name='$name',email='$email',password='$hass_pass',gender='$gender',role='$role',create_at='$time' WHERE id=$id";
            $update_result = mysqli_query($connect,$update);
            $_SESSION['update_success'] = "Update Successfully";
            header("location:all_users.php");

          } else {
            $_SESSION['photo_error'] = "Photo Size Maximum 2 MB.";
            header("location:edit.php");
          }

        } else {
          $_SESSION['photo_error'] = "Invalid File Format";
          header("location:edit.php");
        }
      } else {
        $update = "UPDATE users SET name='$name',email='$email',password='$hass_pass',gender='$gender',role='$role',create_at='$time' WHERE id=$id";
        $update_result = mysqli_query($connect,$update);
        $_SESSION['update_success'] = "Update Successfully";
        header("location:all_users.php");
      }

    }



 ?>
