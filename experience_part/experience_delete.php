<?php
  require '../db_connect.php';
  $id = $_GET['id'];

  $delete = "DELETE FROM experiences WHERE id = $id";
  $delete_result = mysqli_query($connect,$delete);
  header("location:experience_view.php");
?>