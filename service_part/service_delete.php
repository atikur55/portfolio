<?php
  require '../db_connect.php';
  $id = $_GET['id'];

  $delete = "DELETE FROM services WHERE id = $id";
  $delete_result = mysqli_query($connect,$delete);
  header("location:service_view.php");
?>