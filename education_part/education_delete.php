<?php
  require '../db_connect.php';
  $id = $_GET['id'];

  $delete = "DELETE FROM educations WHERE id = $id";
  $delete_result = mysqli_query($connect,$delete);
  header("location:education_view.php");
?>