<?php  
	require '../db_connect.php';

	require '../dashboard_part/head.php';

?>
 <!-- Start Page content -->
 <div class="content">
     <div class="container-fluid">

         <div class="row">
             <div class="col-12">
                 <div class="card-box">
                     <h4 class="header-title mb-4 text-center text-success">Service Form</h4>
                 </div>
             </div>
         </div>
     </div> <!-- container -->

 </div> <!-- content -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Service Form</title>
</head>
<body>
	<section>
		<div class="container">
			
			 <?php if (isset($_SESSION['service_success'])) { ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong><?= $_SESSION['service_success']; ?></strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php }
              unset($_SESSION['service_success'])
             ?>
			<div class="card-body">
				<form action="service_post.php" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label>Serive Icon</label>
						<input type="text" name="service_icon" class="form-control">
						<?php if (isset($_SESSION['service_icon_error'])) { ?>
			              	<div class="alert alert-warning alert-dismissible fade show" role="alert">
				              <strong><?= $_SESSION['service_icon_error']; ?></strong>
				              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				                <span aria-hidden="true">&times;</span>
				              </button>
			            	</div>
			            <?php }
			              unset($_SESSION['service_icon_error'])
			            ?>
					</div>
					<div class="form-group">
						<label>Service Introduction</label>
						<input type="text" name="service_intro" class="form-control">
						<?php if (isset($_SESSION['service_intro_error'])) { ?>
			              	<div class="alert alert-warning alert-dismissible fade show" role="alert">
				              <strong><?= $_SESSION['service_intro_error']; ?></strong>
				              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				                <span aria-hidden="true">&times;</span>
				              </button>
			            	</div>
			            <?php }
			              unset($_SESSION['service_intro_error'])
			            ?>
					</div>
					<div class="form-group">
						<label>Service Pargaraph</label>
						<input type="text" name="service_para" class="form-control">
						<?php if (isset($_SESSION['service_para_error'])) { ?>
			              	<div class="alert alert-warning alert-dismissible fade show" role="alert">
				              <strong><?= $_SESSION['service_para_error']; ?></strong>
				              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				                <span aria-hidden="true">&times;</span>
				              </button>
			            	</div>
			            <?php }
			              unset($_SESSION['service_para_error'])
			            ?>
					</div>
					<div class="form-group">
						<label>Enter Your Active Status</label>
						<select name="active" class="form-control">
							<option value="0">Deactive</option>
							<option value="1">Active</option>
						</select>
						<?php if (isset($_SESSION['active_error'])) { ?>
			              	<div class="alert alert-warning alert-dismissible fade show" role="alert">
				              <strong><?= $_SESSION['active_error']; ?></strong>
				              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				                <span aria-hidden="true">&times;</span>
				              </button>
			            	</div>
			            <?php }
			              unset($_SESSION['active_error'])
			            ?>
					</div>
					<div class="form-group">
						<button type="Submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</body>
</html>

<?php
require '../dashboard_part/footer.php';
?>