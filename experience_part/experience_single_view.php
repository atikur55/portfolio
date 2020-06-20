<?php
require '../db_connect.php';
require '../dashboard_part/head.php';

$id = $_GET['id'];
$select = "SELECT * FROM experiences WHERE id = $id";
$select_result = mysqli_query($connect,$select);
$after_assoc = mysqli_fetch_assoc($select_result);
?>

<!-- Start Page content -->
 <div class="content">
     <div class="container-fluid">

         <div class="row">
             <div class="col-12">
                 <div class="card-box">
                     <h4 class="header-title mb-4 text-center text-success">Experience Single View</h4>
                 </div>
             </div>
         </div>
     </div> <!-- container -->

 </div> <!-- content -->
<section>
	<div class="container-fluid">
		<table class="table table-striped text-center">
			
			<tr>
				<th>Position</th>
				<td><?= $after_assoc['position'] ?></td>
			</tr>
			<tr>
				<th>Company Name</th>
				<td><?= $after_assoc['company_name'] ?></td>
			</tr>
			<tr>
				<th>Experience Description</th>
				<td><?= $after_assoc['company_desc'] ?></td>
			</tr>
			<tr>
				<th>Start</th>
				<td><?= $after_assoc['start'] ?></td>
			</tr>
			<tr>
				<th>End</th>
				<td><?= $after_assoc['end_year'] ?></td>
			</tr>
			
		</table>
	</div>
</section>

 <?php
require '../dashboard_part/footer.php';
 ?>