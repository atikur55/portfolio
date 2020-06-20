<?php
	require '../db_connect.php';

	$id = $_GET['id'];

	$select = "SELECT * FROM services WHERE id = $id";
	$select_result = mysqli_query($connect,$select);
	$after_assoc_education = mysqli_fetch_assoc($select_result);

	if ($after_assoc_education['status']==1) {
		$update = "UPDATE services SET status = 0 WHERE id = $id";
		$update_result = mysqli_query($connect,$update);
		header("location:service_view.php");
	} else {
		$update1 = "UPDATE services SET status = 1 WHERE id = $id";
		$update_result1 = mysqli_query($connect,$update1);
		header("location:service_view.php");
	}
	


?>