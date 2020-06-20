<?php
	require '../db_connect.php';

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$insert = "INSERT INTO contacts (name,email,message) VALUES ('$name','$email','$message')";
	$insert_result = mysqli_query($connect,$insert);
	header("location:../index.php#contact");



?>