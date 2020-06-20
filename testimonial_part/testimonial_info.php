<?php
	require '../db_connect.php';
	require '../dashboard_part/head.php';
?>

<div class="content">
     <div class="container-fluid">

         <div class="row">
             <div class="col-12">
                 <div class="card-box">
                     <h4 class="header-title mb-4 text-center text-success">Testimonial Form</h4>
                 </div>
             </div>
         </div>
     </div> <!-- container -->

 </div> <!-- content -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Testimonial Form</title>
</head>
<body>
	<section>
		<div class="container">
			
			 <?php if (isset($_SESSION['testimonial_success'])) { ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong><?= $_SESSION['testimonial_success']; ?></strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php }
              unset($_SESSION['testimonial_success'])
             ?>
			<div class="card-body">
				<form action="testimonial_post.php" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label>Testimonial Photo</label>
						<input type="file" name="testimonial_photo" class="form-control" onchange="document.getElementById('photo').src=window.URL.createObjectURL(this.files[0])">
						<?php if (isset($_SESSION['photo_error'])) { ?>
			              <div class="alert alert-success alert-dismissible fade show" role="alert">
			              <strong><?= $_SESSION['photo_error']; ?></strong>
			              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			                <span aria-hidden="true">&times;</span>
			              </button>
			            </div>
			            <?php }
			              unset($_SESSION['photo_error'])
			             ?>
					</div>
					<div class="mb-2">
                    	<img src="" alt="" id="photo" width="200px;">
                  	</div>
					<div class="form-group">
						<label>Testimonial Description</label>
						<input type="text" name="testimonial_des" class="form-control">
					</div>
					<div class="form-group">
						<label>Testimonial Name</label>
						<input type="text" name="testimonial_name" class="form-control">
					</div>
					<div class="form-group">
						<label>Testimonial Position</label>
						<input type="text" name="testimonial_posi" class="form-control">
					</div>
					<div class="form-group">
						<label>Enter Your Status</label>
						<select name="active" class="form-control">
							<option value="0">Deactive</option>
							<option value="1">Active</option>
						</select>
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
