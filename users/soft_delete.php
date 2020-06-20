<?php
require '../db_connect.php';
$id = $_GET['id'];
$select = "SELECT * FROM users WHERE id = $id";
$select_result = mysqli_query($connect,$select);
$after_assoc_select = mysqli_fetch_assoc($select_result);

if ($after_assoc_select['status']==0) {
  $update = "UPDATE users SET status = 1 WHERE id = $id";
  $update_result = mysqli_query($connect,$update);
  header("location:all_users.php");
} else {
  $update = "UPDATE users SET status = 0 WHERE id = $id";
  $update_result = mysqli_query($connect,$update);
  header("location:all_users.php");
}



 ?>
