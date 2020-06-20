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
                     <h4 class="header-title mb-4 text-center text-success">Experience Form</h4>
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
 		<form action="experience_post.php" method="POST" enctype="multipart/form-data">
 			<div class="form-group">
 				<label>Enter Your Position</label>
 				<input type="text" name="position" class="form-control">
 				 <?php if(isset($_SESSION['position_error'])) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong><?= $_SESSION['position_error'] ?></strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        <?php }
                           unset($_SESSION['position_error'])
                        ?>
 			</div>
 			<div class="form-group">
 				<label>Enter Your Company Name with Address</label>
 				<input type="text" name="company_name" class="form-control">
 				 <?php if(isset($_SESSION['company_name_error'])) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong><?= $_SESSION['company_name_error'] ?></strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        <?php }
                           unset($_SESSION['company_name_error'])
                        ?>
 			</div>
      <div class="form-group">
        <label>Enter Your Company Description</label>
        <textarea name="company_desc" cols="30" rows="4" class="form-control" placeholder="Description Here ..."></textarea>
         <?php if(isset($_SESSION['company_desc_error'])) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong><?= $_SESSION['company_desc_error'] ?></strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        <?php }
                           unset($_SESSION['company_desc_error'])
                        ?>
      </div>
      <div class="form-group">
        <label>Enter Your Company Start</label>
        <input type="text" name="start" class="form-control">
         <?php if(isset($_SESSION['from_error'])) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong><?= $_SESSION['from_error'] ?></strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        <?php }
                           unset($_SESSION['from_error'])
                        ?>
      </div>
      <div class="form-group">
        <label>Enter Your Company End</label>
        <input type="text" name="end_year" class="form-control">
         <?php if(isset($_SESSION['to_error'])) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong><?= $_SESSION['to_error'] ?></strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        <?php }
                           unset($_SESSION['to_error'])
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
            	<button type="Submit" class="btn btn-primary">Submit</button>
            </div>
 		</form>
 	</div>
 </section>

<?php
	require '../dashboard_part/footer.php';
?>