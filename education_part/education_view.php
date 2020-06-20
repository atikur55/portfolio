<?php
require '../db_connect.php';
require '../dashboard_part/head.php';
$select = "SELECT * FROM educations";
$select_result = mysqli_query($connect,$select);
?>

<!-- Start Page content -->
 <div class="content">
     <div class="container-fluid">

         <div class="row">
             <div class="col-12">
                 <div class="card-box">
                     <h4 class="header-title mb-4 text-center text-success">Education View</h4>
                 </div>
             </div>
         </div>
     </div> <!-- container -->

 </div> <!-- content -->

<section>
	<div class="container-fluid">
		<table class="table table-striped text-center">
			<tr>
				<th>ID</th>
				<th>Position</th>
				<th>Institute Name</th>
				<th>Grade</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
			<?php foreach ($select_result as $education): ?>
				<tr>
					<td><?= $education['id'] ?></td>
					<td><?= $education['position'] ?></td>
					<td><?= $education['institute_name'] ?></td>
					<td><?= $education['grade']?></td>
					
					<td>
						<a href="education_active.php?id=<?= $education['id'] ?>" class="btn <?= ($education['status']==1)? 'btn-primary' : 'btn-secondary' ?>">
							<?= ($education['status']==1)? '<i class="fa fa-toggle-on" aria-hidden="true"></i>' : '<i class="fa fa-toggle-off" aria-hidden="true"></i>' ?>
						</a>
					</td>
					<td>
						<a href="education_single_view.php?id=<?= $education['id'] ?>" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
						<a href="education_delete.php?id=<?= $education['id'] ?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
					</td>

				</tr>
			<?php endforeach ?>
			
		</table>
	</div>
</section>

<?php
require '../dashboard_part/footer.php';
?>

