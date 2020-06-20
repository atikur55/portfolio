<?php
require '../db_connect.php';
require '../dashboard_part/head.php';

$select = "SELECT * FROM contacts order by id desc";
$select_result = mysqli_query($connect,$select);

?>
 <!-- Start Page content -->
 <div class="content">
     <div class="container-fluid">

         <div class="row">
             <div class="col-12">
                 <div class="card-box">
                     <h4 class="header-title mb-4">Contact View</h4>
                 </div>
             </div>
         </div>
     </div> <!-- container -->

 </div> <!-- content -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View About</title>
</head>
<body>
	<div class="container-fluid">
		<table class="table table-striped text-center">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Message</th>	
				<th>Action</th>
			</tr>
			<?php foreach ($select_result as $contact) { ?>
				<tr class="<?= ($contact['status']==0)? 'bg-dark':'' ?>">
					<td><?= $contact['id'] ?></td>
					<td><?= $contact['name'] ?></td>
					<td><?= $contact['email'] ?></td>
					<td><?= substr($contact['message'], 0,10). ' More...'?></td>					
				<!-- 	
					<td>
						<a href="about_active.php?id=<?= $about['id'] ?>" class="btn <?= ($about['status']==1)? 'btn-primary':'btn-secondary'; ?>">
							<?= ($about['status']==1)? 'Active':'Deactive'; ?>
						</a>
					</td> -->
					<td>
						<a href="contact_single_view.php?id=<?= $contact['id'] ?>" class="btn btn-success">View</a>
						<a href="about_delete.php?id=<?= $contact['id'] ?>" class="btn btn-danger">Delete</a>
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