<?php
	require '../db_connect.php';

	$id = $_GET['id'];

	$select = "SELECT * FROM testimonials WHERE id = $id";
	$select_result = mysqli_query($connect,$select);
	$after_assoc_education = mysqli_fetch_assoc($select_result);

	if ($after_assoc_education['status']==1) {
		$update = "UPDATE testimonials SET status = 0 WHERE id = $id";
		$update_result = mysqli_query($connect,$update);
		header("location:testimonial_view.php");
	} else {
		$update1 = "UPDATE testimonials SET status = 1 WHERE id = $id";
		$update_result1 = mysqli_query($connect,$update1);
		header("location:testimonial_view.php");
	}
	


?>