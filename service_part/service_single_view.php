<?php
require '../db_connect.php';
require '../dashboard_part/head.php';
$id = $_GET['id'];
$select = "SELECT * FROM services WHERE id=$id";
$select_result = mysqli_query($connect,$select);
$after_assoc_about = mysqli_fetch_assoc($select_result);

?>
 <!-- Start Page content -->
 <div class="content">
     <div class="container-fluid">

         <div class="row">
             <div class="col-12">
                 <div class="card-box">
                     <h4 class="header-title mb-4">Single Service View</h4>
                 </div>
             </div>
         </div>
     </div> <!-- container -->

 </div> <!-- content -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Service single view</title>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<style>
		.icon i{
			font-size: 35px;
			color: green;
		}
	</style>
</head>
<body>
	<section>
		<div class="container-fluid">
			<div class="card-header">
				<h3 class="text-center text-info">Single View Service</h3>
			</div>
			<div class="card-body">
				<table class="table table-striped text-center">	
					<tr>
						<th>Service Icon</th>
						<td class="icon"><i class="<?= $after_assoc_about['service_icon'] ?>"></i></td>
					</tr>
					<tr>
						<th>Service Headline</th>
						<td><?= $after_assoc_about['service_intro'] ?></td>
					</tr>
					<tr>
						<th>Service Paragraph</th>
						<td><?= $after_assoc_about['service_para'] ?></td>
					</tr>
				</table>
			</div>
		</div>
	</section>
</body>
</html>

 <?php
require '../dashboard_part/footer.php';
 ?>
