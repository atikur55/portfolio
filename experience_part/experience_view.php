<?php
require '../db_connect.php';
require '../dashboard_part/head.php';
$select = "SELECT * FROM experiences";
$select_result = mysqli_query($connect,$select);
?>

<!-- Start Page content -->
 <div class="content">
     <div class="container-fluid">

         <div class="row">
             <div class="col-12">
                 <div class="card-box">
                     <h4 class="header-title mb-4 text-center text-success">Experience View</h4>
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
				<th>Company Name</th>
				<th>Company Description</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
			<?php foreach ($select_result as $experience): ?>
				<tr>
					<td><?= $experience['id'] ?></td>
					<td><?= $experience['position'] ?></td>
					<td><?= $experience['company_name'] ?></td>
					<td><?= substr($experience['company_desc'],0,20).'more...' ?></td>
					
					<td>
						<a href="experience_active.php?id=<?= $experience['id'] ?>" class="btn <?= ($experience['status']==1)? 'btn-primary' : 'btn-secondary' ?>">
							<?= ($experience['status']==1)? '<i class="fa fa-toggle-on" aria-hidden="true"></i>' : '<i class="fa fa-toggle-off" aria-hidden="true"></i>' ?>
						</a>
					</td>
					<td>
						<a href="experience_single_view.php?id=<?= $experience['id'] ?>" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
						<a href="experience_delete.php?id=<?= $experience['id'] ?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
					</td>

				</tr>
			<?php endforeach ?>
			
		</table>
	</div>
</section>

<?php
require '../dashboard_part/footer.php';
?>

