<?php
session_start();
require '../db_connect.php';
$email = $_POST['email'];
$password = $_POST['password'];

$select_email = "SELECT COUNT(*) as email_exits, name, email, password, gender, role, photo, create_at FROM users WHERE email = '$email'";
$select_email_result = mysqli_query($connect,$select_email);
$after_assoc_email = mysqli_fetch_assoc($select_email_result);

if ($after_assoc_email['email_exits']==1) {
  $select = "SELECT * FROM users WHERE email='$email'";
  $select_result = mysqli_query($connect,$select);
  $after_assoc = mysqli_fetch_assoc($select_result);

  if (password_verify($password, $after_assoc['password'])) {
    $_SESSION['login_success'] = "Login Successfully";
    $_SESSION['name'] = $after_assoc['name'];
    $_SESSION['email'] = $after_assoc['email'];
    $_SESSION['password'] = $after_assoc['password'];
    $_SESSION['gender'] = $after_assoc['gender'];
    $_SESSION['role'] = $after_assoc['role'];
    $_SESSION['photo'] = $after_assoc['photo'];
    $_SESSION['create_at'] = $after_assoc['create_at'];
    header("location:../dashboard/dashboard.php");
  }
  else {
    $_SESSION['password_error'] = "Invalid Password";
    header("location:login.php");
  }
} else {
  $_SESSION['email_error'] = "Invalid Email";
  header("location:login.php");
}


 ?>
