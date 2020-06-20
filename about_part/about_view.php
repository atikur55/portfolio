<?php
require '../db_connect.php';
require '../dashboard_part/head.php';
$select = "SELECT * FROM abouts";
$select_result = mysqli_query($connect,$select);
?>

<!-- Start Page content -->
 <div class="content">
     <div class="container-fluid">

         <div class="row">
             <div class="col-12">
                 <div class="card-box">
                     <h4 class="header-title mb-4 text-center text-success">About View</h4>
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
				<th>Email</th>
				<th>Mobile Number</th>
				<th>Photo</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
			<?php foreach ($select_result as $about): ?>
				<tr>
					<td><?= $about['id'] ?></td>
					<td><?= $about['email'] ?></td>
					<td><?= $about['mobile_number'] ?></td>
					<td><img src="../uploads/about/<?= $about['signature'] ?>" alt="" width = "50px"></td>
					<td>
						<a href="about_active.php?id=<?= $about['id'] ?>" class="btn <?= ($about['status']==1)? 'btn-primary' : 'btn-secondary' ?>">
							<?= ($about['status']==1)? '<i class="fa fa-toggle-on" aria-hidden="true"></i>' : '<i class="fa fa-toggle-off" aria-hidden="true"></i>' ?>
						</a>
					</td>
					<td>
						<a href="about_single_view.php?id=<?= $about['id'] ?>" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
						<a href="about_delete.php?id=<?= $about['id'] ?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
					</td>

				</tr>
			<?php endforeach ?>
			
		</table>
	</div>
</section>

<?php
require '../dashboard_part/footer.php';
?>

