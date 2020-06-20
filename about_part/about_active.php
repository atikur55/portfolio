<?php

	require '../db_connect.php';

	$id = $_GET['id'];

	$select = "SELECT * FROM abouts";
	$select_result = mysqli_query($connect,$select);
	$after_assoc = mysqli_fetch_assoc($select_result);

	if ($after_assoc['status']==1) {
		$update = "UPDATE abouts SET status = 0  WHERE id = $id";
		$update_result = mysqli_query($connect,$update);
		header("location:about_view.php");
	} else {
		$updateone = "UPDATE abouts SET status = 1  WHERE id = $id";
		$update_result = mysqli_query($connect,$updateone);
		header("location:about_view.php");
	}
	

?>