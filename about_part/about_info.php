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
                     <h4 class="header-title mb-4 text-center text-success">About Form</h4>
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
 		<form action="about_post.php" method="POST" enctype="multipart/form-data">
 			<div class="form-group">
 				<label>Enter Your Age</label>
 				<input type="number" name="age" class="form-control">
 				               <?php if(isset($_SESSION['age_error'])) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong><?= $_SESSION['age_error'] ?></strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        <?php }
                           unset($_SESSION['age_error'])
                        ?>
 			</div>
 			<div class="form-group">
 				<label>Enter Your Residence</label>
 				<input type="text" name="residence" class="form-control">
 				                 <?php if(isset($_SESSION['residence_error'])) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong><?= $_SESSION['residence_error'] ?></strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        <?php }
                           unset($_SESSION['residence_error'])
                        ?>
 			</div>
      <div class="form-group">
        <label>Enter Your Address</label>
        <input type="text" name="address" class="form-control">
                         <?php if(isset($_SESSION['address_error'])) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong><?= $_SESSION['address_error'] ?></strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        <?php }
                           unset($_SESSION['address_error'])
                        ?>
      </div>
      <div class="form-group">
        <label>Enter Your Email</label>
        <input type="text" name="email" class="form-control">
                         <?php if(isset($_SESSION['year_error'])) { ?>
                            <div class="alert alert-email_error alert-dismissible fade show" role="alert">
                              <strong><?= $_SESSION['email_error'] ?></strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        <?php }
                           unset($_SESSION['email_error'])
                        ?>
      </div>
      <div class="form-group">
        <label>Enter Your Mobile Number</label>
        <input type="text" name="mobile_number" class="form-control">
                         <?php if(isset($_SESSION['mobile_number_error'])) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong><?= $_SESSION['mobile_number_error'] ?></strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        <?php }
                           unset($_SESSION['mobile_number_error'])
                        ?>
      </div>
      <div class="form-group">
        <label>Enter Your About Header</label>
        <input type="text" name="header" class="form-control">
                         <?php if(isset($_SESSION['header_error'])) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong><?= $_SESSION['header_error'] ?></strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        <?php }
                           unset($_SESSION['header_error'])
                        ?>
      </div>
      <div class="form-group">
        <label>Enter Your Description</label>
        <textarea name="description" cols="40" rows="4" class="form-control"> Description here ........</textarea>
                         <?php if(isset($_SESSION['description_error'])) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong><?= $_SESSION['description_error'] ?></strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        <?php }
                           unset($_SESSION['description_error'])
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
 					<label>Enter Your Signature</label>
                    <input type="file" name="signature" class="form-control" onchange="document.getElementById('photo').src=window.URL.createObjectURL(this.files[0])">

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