<?php
	require '../db_connect.php';

	$id = $_GET['id'];

	$update = "UPDATE headers set status = 0";
	$update_result = mysqli_query($connect,$update);

	$updateOne = "UPDATE headers set status = 1 WHERE id = $id";
	$update_result_one = mysqli_query($connect,$updateOne);
	header("location:header_view.php");

?>