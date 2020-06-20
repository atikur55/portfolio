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
                     <h4 class="header-title mb-4 text-center text-success">Header Form</h4>
                 </div>
             </div>
         </div>
     </div> <!-- container -->

 </div> <!-- content -->
 						<?php if(isset($_SESSION['success'])) { ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                              <strong><?= $_SESSION['success'] ?></strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        <?php }
                           unset($_SESSION['success'])
                        ?>
 <section>
 	<div class="container-fluid">
 		<form action="header_post.php" method="POST" enctype="multipart/form-data">
 			<div class="form-group">
 				<label>Enter Your Name</label>
 				<input type="text" name="name" class="form-control">
 				 <?php if(isset($_SESSION['name_error'])) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong><?= $_SESSION['name_error'] ?></strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        <?php }
                           unset($_SESSION['name_error'])
                        ?>
 			</div>
 			<div class="form-group">
 				<label>Enter Your Portfolio Year</label>
 				<input type="text" name="year" class="form-control">
 				 <?php if(isset($_SESSION['year_error'])) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong><?= $_SESSION['year_error'] ?></strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        <?php }
                           unset($_SESSION['year_error'])
                        ?>
 			</div>
 			<div class="form-group">
 				<label>Select Status</label>
 				<select name="active" class="form-control">
 					<option value="0">Deactive</option>
 					<option value="1">Active</option>
 				</select>
 				 <?php if(isset($_SESSION['avtive_error'])) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong><?= $_SESSION['avtive_error'] ?></strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        <?php }
                           unset($_SESSION['avtive_error'])
                        ?>
 			</div>
 			<div class="form-group">
 					<label>Enter Your Photo</label>
                    <input type="file" name="photo" class="form-control" onchange="document.getElementById('photo').src=window.URL.createObjectURL(this.files[0])">

                        <?php if(isset($_SESSION['photo_error'])) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong><?= $_SESSION['photo_error'] ?></strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        <?php }
                           unset($_SESSION['photo_error'])
                        ?>

            </div>

            <div class="">
                <img src="" alt="" id="photo" width="300px;">
            </div>
            <div class="form-group">
            	<button type="Submit" class="btn btn-primary">Submit</button>
            </div>
 		</form>
 	</div>
 </section>

<?php
	require '../dashboard_part/footer.php';
?>