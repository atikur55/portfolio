<?php
	session_start();
	require '../db_connect.php';

	$testimonial_des = htmlentities($_POST['testimonial_des']);
	$testimonial_name = $_POST['testimonial_name'];
	$testimonial_posi = $_POST['testimonial_posi'];
	$active = $_POST['active'];

	$testimonial_photo = $_FILES['testimonial_photo'];
	$after_explode = explode('.', $testimonial_photo['name']);
	$extention = end($after_explode);
	$allow_extention = array('jpg','jpeg','png');
	if (in_array($extention, $allow_extention)) {
		if ($testimonial_photo['size'] <= 3000000) {
			$insert = "INSERT INTO testimonials (testimonial_des,testimonial_name,testimonial_posi,status) VALUES ('$testimonial_des','$testimonial_name','$testimonial_posi','$active')";
			$insert_result = mysqli_query($connect,$insert);

			$last_id = mysqli_insert_id($connect);
			$file_name = $last_id.'.'.$extention;

			$new_location = "../uploads/testimonial/".$file_name;
			move_uploaded_file($testimonial_photo['tmp_name'], $new_location);
			$update_photo = "UPDATE testimonials SET testimonial_photo = '$file_name' WHERE id = $last_id";
			$update_photo_result = mysqli_query($connect,$update_photo);
			$_SESSION['testimonial_success'] = "Testimonial Add Successfully";
			header("location:testimonial_info.php");
		} 
		else 
		{
			$_SESSION['photo_error'] = "Invalid Size !!";
			header("location:testimonial_info.php");
		}
		
	} 
	else 
	{
		$_SESSION['photo_error'] = "Invalid File !!";
		header("location:testimonial_info.php");
	}
	

?>