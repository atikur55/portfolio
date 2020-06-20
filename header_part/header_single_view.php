<?php
require '../db_connect.php';
require '../dashboard_part/head.php';

$id = $_GET['id'];
$select = "SELECT * FROM headers WHERE id = $id";
$select_result = mysqli_query($connect,$select);
$after_assoc = mysqli_fetch_assoc($select_result);
?>

<!-- Start Page content -->
 <div class="content">
     <div class="container-fluid">

         <div class="row">
             <div class="col-12">
                 <div class="card-box">
                     <h4 class="header-title mb-4 text-center text-success">Header Single View</h4>
                 </div>
             </div>
         </div>
     </div> <!-- container -->

 </div> <!-- content -->
<section>
	<div class="container-fluid">
		<table class="table table-striped">
			<tr>
				<th>Photo</th>
				<td><img src="../uploads/header/<?= $after_assoc['photo'] ?>" alt="" width=300px;></td>
			</tr>
			<tr>
				<th>Name</th>
				<td><?= $after_assoc['name'] ?></td>
			</tr>
			<tr>
				<th>Year</th>
				<td><?= $after_assoc['year'] ?></td>
			</tr>
		</table>
	</div>
</section>

 <?php
require '../dashboard_part/footer.php';
 ?>