<?php
require '../db_connect.php';
require '../dashboard_part/head.php';

$select = "SELECT * FROM services";
$select_result = mysqli_query($connect,$select);

?>
 <!-- Start Page content -->
 <div class="content">
     <div class="container-fluid">

         <div class="row">
             <div class="col-12">
                 <div class="card-box">
                     <h4 class="header-title mb-4 text-center text-success">Service View</h4>
                 </div>
             </div>
         </div>
     </div> <!-- container -->

 </div> <!-- content -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View Service</title>
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css"> -->
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<style>
		.icon i{
			font-size: 35px;
			color: green;
		}
	</style>

</head>
<body>
	<div class="container-fluid">
		<table class="table table-striped text-center">
			<tr>
				<th>ID</th>
				<th>Service Icon</th>
				<th>Service Headline</th>
				<th>Service Paragraph</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
			<?php foreach ($select_result as $service) { ?>
				<tr>
					<td><?= $service['id'] ?></td>
					<td class="icon"><i class="<?= $service['service_icon'] ?>"></i></td>
					<td><?= $service['service_intro'] ?></td>
					<td><?= substr($service['service_para'], 0,10). ' More...'?></td>
					<td>
						<a href="service_active.php?id=<?= $service['id'] ?>" class="btn <?= ($service['status']==1)? 'btn-primary':'btn-secondary'; ?>">
							<?= ($service['status']==1)? 'Active':'Deactive'; ?>
						</a>
					</td>
					<td>
						<a href="service_single_view.php?id=<?= $service['id'] ?>" class="btn btn-success">View</a>
						<a href="service_delete.php?id=<?= $service['id'] ?>" class="btn btn-danger">Delete</a>
					</td>
				</tr>
			<?php } ?>

			  <?php if ($select_result->num_rows == 0): ?>
                <tr>
                  <td colspan="6" class="text-center text-danger">No Data Found</td>
                </tr>
              <?php endif ?>

		</table>
	</div>
</body>
</html>
<?php
require '../dashboard_part/footer.php';
?>