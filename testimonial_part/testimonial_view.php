<?php
require '../db_connect.php';
require '../dashboard_part/head.php';

$select = "SELECT * FROM testimonials";
$select_result = mysqli_query($connect,$select);

?>
 <!-- Start Page content -->
 <div class="content">
     <div class="container-fluid">

         <div class="row">
             <div class="col-12">
                 <div class="card-box">
                     <h4 class="header-title mb-4">Testimonial View</h4>
                 </div>
             </div>
         </div>
     </div> <!-- container -->

 </div> <!-- content -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View Testimonial</title>
</head>
<body>
	<div class="container-fluid">
		<table class="table table-striped text-center">
			<tr>
				<th>ID</th>
				<th>Testimonial Photo</th>
				<th>Testimonial Description</th>
				<th>Testimonial Name</th>				
				<th>Testimonial Position</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
			<?php foreach ($select_result as $testimonial) { ?>
				<tr>

					<td><?= $testimonial['id'] ?></td>	
					<td><img src="../uploads/testimonial/<?= $testimonial['testimonial_photo'] ?>" alt="" width="50px;"></td>	
					<td><?= substr($testimonial['testimonial_des'], 0,10). ' More...'?></td>	
					<td><?= $testimonial['testimonial_name'] ?></td>
					<td><?= $testimonial['testimonial_posi'] ?></td>		
					<td>
						<a href="testimonial_active.php?id=<?= $testimonial['id'] ?>" class="btn <?= ($testimonial['status']==1)? 'btn-primary':'btn-secondary'; ?>">
							<?= ($testimonial['status']==1)? 'Active':'Deactive'; ?>
						</a>
					</td>
					<td>
						<a href="testimonial_single_view.php?id=<?= $testimonial['id'] ?>" class="btn btn-success">View</a>
						<a href="testimonial_delete.php?id=<?= $testimonial['id'] ?>" class="btn btn-danger">Delete</a>
					</td>
				</tr>
			<?php } ?>

			  <?php if ($select_result->num_rows == 0): ?>
                <tr>
                  <td colspan="7" class="text-center text-danger">No Data Found</td>
                </tr>
              <?php endif ?>

		</table>
	</div>
</body>
</html>
<?php
require '../dashboard_part/footer.php';
?>