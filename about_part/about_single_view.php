<?php
require '../db_connect.php';
require '../dashboard_part/head.php';

$id = $_GET['id'];
$select = "SELECT * FROM abouts WHERE id = $id";
$select_result = mysqli_query($connect,$select);
$after_assoc = mysqli_fetch_assoc($select_result);
?>

<!-- Start Page content -->
 <div class="content">
     <div class="container-fluid">

         <div class="row">
             <div class="col-12">
                 <div class="card-box">
                     <h4 class="header-title mb-4 text-center text-success">About Single View</h4>
                 </div>
             </div>
         </div>
     </div> <!-- container -->

 </div> <!-- content -->
<section>
	<div class="container-fluid">
		<table class="table table-striped text-center">
			<tr>
				<th>Signature</th>
				<td><img src="../uploads/about/<?= $after_assoc['signature'] ?>" alt="" width=300px;></td>
			</tr>
			<tr>
				<th>Age</th>
				<td><?= $after_assoc['age'] ?></td>
			</tr>
			<tr>
				<th>Recidence</th>
				<td><?= $after_assoc['residence'] ?></td>
			</tr>
			<tr>
				<th>Address</th>
				<td><?= $after_assoc['address'] ?></td>
			</tr>
			<tr>
				<th>Email</th>
				<td><?= $after_assoc['email'] ?></td>
			</tr>
			<tr>
				<th>Mobile Number</th>
				<td><?= $after_assoc['mobile_number'] ?></td>
			</tr>
			<tr>
				<th>Header</th>
				<td><?= $after_assoc['header'] ?></td>
			</tr>
			<tr>
				<th>Description</th>
				<td><?= $after_assoc['description'] ?></td>
			</tr>
		</table>
	</div>
</section>

 <?php
require '../dashboard_part/footer.php';
 ?>