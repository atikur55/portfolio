<?php
require '../db_connect.php';
require '../dashboard_part/head.php';
$id = $_GET['id'];
$select = "SELECT * FROM contacts WHERE id=$id";
$select_result = mysqli_query($connect,$select);
$after_assoc_about = mysqli_fetch_assoc($select_result);

if ($after_assoc_about['status']==0) {
	$update = "UPDATE contacts SET status = 1 WHERE id = $id";
	$update_result = mysqli_query($connect,$update);
}

?>
 <!-- Start Page content -->
 <div class="content">
     <div class="container-fluid">

         <div class="row">
             <div class="col-12">
                 <div class="card-box">
                     <h4 class="header-title mb-4">Single Contact View</h4>
                 </div>
             </div>
         </div>
     </div> <!-- container -->

 </div> <!-- content -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact single view</title>
</head>
<body>
	<section>
		<div class="container-fluid">
			
			<div class="card-body">
				<table class="table table-striped text-center">	
					
					<tr>
						<th>Name</th>
						<td><?= $after_assoc_about['name'] ?></td>
					</tr>
					<tr>
						<th>Email</th>
						<td><?= $after_assoc_about['email'] ?></td>
					</tr>
					<tr>
						<th>Message</th>
						<td><?= $after_assoc_about['message'] ?></td>
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
