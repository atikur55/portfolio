<?php
	require '../db_connect.php';
	$id = $_GET['id'];

	$select = "SELECT signature FROM abouts WHERE id = $id";
	$select_result = mysqli_query($connect,$select);
	$after_assoc = mysqli_fetch_assoc($select_result);
	$delete_photo = "../uploads/about/".$after_assoc['signature'];
	unlink($delete_photo);

	$delete = "DELETE FROM abouts WHERE id = $id";
	$delete_result = mysqli_query($connect,$delete);
	header("location:about_view.php");

?>