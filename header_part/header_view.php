<?php
require '../db_connect.php';
require '../dashboard_part/head.php';
$select = "SELECT * FROM headers";
$select_result = mysqli_query($connect,$select);
?>

<!-- Start Page content -->
 <div class="content">
     <div class="container-fluid">

         <div class="row">
             <div class="col-12">
                 <div class="card-box">
                     <h4 class="header-title mb-4 text-center text-success">Header View</h4>
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
				<th>Name</th>
				<th>Year</th>
				<th>Photo</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
			<?php foreach ($select_result as $header): ?>
				<tr>
					<td><?= $header['id'] ?></td>
					<td><?= $header['name'] ?></td>
					<td><?= $header['year'] ?></td>
					<td><img src="../uploads/header/<?= $header['photo'] ?>" alt="" width = "50px"></td>
					<td>
						<a href="header_active.php?id=<?= $header['id'] ?>" class="btn <?= ($header['status']==1)? 'btn-primary' : 'btn-secondary' ?>">
							<?= ($header['status']==1)? '<i class="fa fa-toggle-on" aria-hidden="true"></i>' : '<i class="fa fa-toggle-off" aria-hidden="true"></i>' ?>
						</a>
					</td>
					<td>
						<a href="header_single_view.php?id=<?= $header['id'] ?>" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
						<a href="header_delete.php?id=<?= $header['id'] ?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
					</td>

				</tr>
			<?php endforeach ?>
			
		</table>
	</div>
</section>

<?php
require '../dashboard_part/footer.php';
?>

