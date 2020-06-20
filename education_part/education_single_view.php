<?php
require '../db_connect.php';
require '../dashboard_part/head.php';

$id = $_GET['id'];
$select = "SELECT * FROM educations WHERE id = $id";
$select_result = mysqli_query($connect,$select);
$after_assoc = mysqli_fetch_assoc($select_result);
?>

<!-- Start Page content -->
 <div class="content">
     <div class="container-fluid">

         <div class="row">
             <div class="col-12">
                 <div class="card-box">
                     <h4 class="header-title mb-4 text-center text-success">Education Single View</h4>
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
				<th>Institute Name</th>
				<td><?= $after_assoc['institute_name'] ?></td>
			</tr>
			<tr>
				<th>Grade</th>
				<td><?= $after_assoc['grade'] ?></td>
			</tr>
			<tr>
				<th>Start</th>
				<td><?= $after_assoc['start_ins'] ?></td>
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