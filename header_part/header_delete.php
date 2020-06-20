<?php
	require '../db_connect.php';
	$id = $_GET['id'];

	$select = "SELECT photo FROM headers WHERE id = $id";
	$select_result = mysqli_query($connect,$select);
	$after_assoc = mysqli_fetch_assoc($select_result);
	$delete_photo = "../uploads/header/".$after_assoc['photo'];
	unlink($delete_photo);

	$delete = "DELETE FROM headers WHERE id = $id";
	$delete_result = mysqli_query($connect,$delete);
	header("location:header_view.php");

?>