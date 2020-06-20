<?php
	session_start();
	require '../db_connect.php';

	$position = $_POST['position'];
	$company_name = htmlentities($_POST['company_name']);
  $company_desc = htmlentities($_POST['company_desc']);
  $start = $_POST['start'];
  $end = $_POST['end_year'];
	$active = $_POST['active'];

	if (empty($position)) {
		$_SESSION['position_error'] = "Enter Your Position";
		header("location:experience_info.php");
	}
	else if (empty($company_name)) {
		$_SESSION['company_name_error'] = "Enter Your Company Name";
		header("location:experience_info.php");
	}
  else if (empty($company_desc)) {
    $_SESSION['company_desc_error'] = "Enter Your Company Description";
    header("location:experience_info.php");
  }
  else if (empty($start)) {
    $_SESSION['from_error'] = "Enter Your Company From";
    header("location:experience_info.php");
  }
  else if (empty($end)) {
    $_SESSION['to_error'] = "Enter Your Company To";
    header("location:about_info.php");
  }
	else
	{
    
		$insert = "INSERT INTO experiences (position,company_name,company_desc,start,end_year,status) VALUES ('$position','$company_name','$company_desc','$start','$end','$active')";
    $insert_result = mysqli_query($connect,$insert);
    $_SESSION['success'] = "Experience Add Successfully";
    header("location:experience_info.php");
	}
?>