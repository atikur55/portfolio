<?php
	require '../db_connect.php';
	$id = $_GET['id'];

	$select = "SELECT testimonial_photo FROM testimonials WHERE id = $id";
	$select_result = mysqli_query($connect,$select);
	$after_assoc = mysqli_fetch_assoc($select_result);
	$delete_photo = "../uploads/testimonial/".$after_assoc['testimonial_photo'];
	unlink($delete_photo);

	$delete = "DELETE FROM testimonials WHERE id = $id";
	$delete_result = mysqli_query($connect,$delete);
	header("location:testimonial_view.php");

?>