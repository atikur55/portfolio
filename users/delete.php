<?php
  require '../db_connect.php';
  $id = $_GET['id'];
  $select = "SELECT photo FROM users WHERE id = $id";
  $select_result = mysqli_query($connect,$select);
  $after_assoc_photo = mysqli_fetch_assoc($select_result);
  $delete_photo = "../uploads/users/".$after_assoc_photo['photo'];
  unlink($delete_photo);

  $delete = "DELETE FROM users WHERE id = $id";
  $delete_result = mysqli_query($connect,$delete);
  header("location:trash.php");

 ?>
