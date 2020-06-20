<?php
	session_start();
	require '../db_connect.php';

	$position = htmlentities($_POST['position']);
	$institute_name = htmlentities($_POST['institute_name']);
  $grade = htmlentities($_POST['grade']);
  $start_ins = $_POST['start_ins'];
  $end_year = $_POST['end_year'];
	$active = $_POST['active'];

	if (empty($position)) {
		$_SESSION['position_error'] = "Enter Your Position";
		header("location:education_info.php");
	}
	else if (empty($institute_name)) {
		$_SESSION['institute_name_error'] = "Enter Your Institute Name";
		header("location:education_info.php");
	}
  else if (empty($grade)) {
    $_SESSION['grade_error'] = "Enter Your Grade";
    header("location:education_info.php");
  }
  else if (empty($start_ins)) {
    $_SESSION['start_ins_error'] = "Enter Your Institute From";
    header("location:education_info.php");
  }
  else if (empty($end_year)) {
    $_SESSION['end_year_error'] = "Enter Your Institute To";
    header("location:education_info.php");
  }
	else
	{    
		$insert = "INSERT INTO educations (position,institute_name,grade,start_ins,end_year,status) VALUES ('$position','$institute_name','$grade','$start_ins','$end_year','$active')";
    $insert_result = mysqli_query($connect,$insert);
    $_SESSION['success'] = "Education Add Successfully";
    header("location:education_info.php");
	}
?>