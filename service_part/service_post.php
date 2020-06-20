<?php
session_start();
require '../db_connect.php';

$service_icon = $_POST['service_icon'];
$service_intro = $_POST['service_intro'];
$service_para = htmlentities($_POST['service_para']);
$active = $_POST['active'];

if (empty($service_icon)) {
	$_SESSION['service_icon_error'] = "Enter Service Icon";
	header("location:service_info.php");
}
else if(empty($service_intro)){
	$_SESSION['service_intro_error'] = "Enter Service Introduction";
	header("location:service_info.php");
}
else if (empty($service_para)) {
	$_SESSION['service_para_error'] = "Enter Service Paragraph";
	header("location:service_info.php");
} 
else if (empty($active)) {
	$_SESSION['active_error'] = "Enter Service Status";
	header("location:service_info.php");
}
else 
{	
	$insert = "INSERT INTO services (service_icon,service_intro,service_para,status) VALUES ('$service_icon','$service_intro','$service_para','$active')";
	$insert_result = mysqli_query($connect,$insert);
	$_SESSION['service_success'] = "Service Add Successfully";
	header("location:service_info.php");
}






?>