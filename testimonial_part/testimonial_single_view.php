<?php
require '../db_connect.php';
require '../dashboard_part/head.php';
$id = $_GET['id'];
$select = "SELECT * FROM testimonials WHERE id=$id";
$select_result = mysqli_query($connect,$select);
$after_assoc_testimonial = mysqli_fetch_assoc($select_result);

?>
 <!-- Start Page content -->
 <div class="content">
     <div class="container-fluid">

         <div class="row">
             <div class="col-12">
                 <div class="card-box">
                     <h4 class="header-title mb-4">Single Testimonial View</h4>
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
		
			<div class="card-body">
				<table class="table table-striped text-center">	
					<tr>
						<th>Testimonnial Photo</th>
						<td><img src="../uploads/testimonial/<?= $after_assoc_testimonial['testimonial_photo'] ?>" alt="" width="200px"></td>
					</tr>
					<tr>
						<th>Testimonial Name</th>
						<td><?= $after_assoc_testimonial['testimonial_name'] ?></td>
					</tr>
					<tr>
						<th>Testimonial Position</th>
						<td><?= $after_assoc_testimonial['testimonial_posi'] ?></td>
					</tr>
					<tr>
						<th>Testimonial Description</th>
						<td><?= $after_assoc_testimonial['testimonial_des'] ?></td>
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
