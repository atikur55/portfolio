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
 		<form action="education_post.php" method="POST" enctype="multipart/form-data">
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
 				<label>Enter Your Institute Name </label>
 				<input type="text" name="institute_name" class="form-control">
 				 <?php if(isset($_SESSION['institute_name_error'])) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong><?= $_SESSION['institute_name_error'] ?></strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        <?php }
                           unset($_SESSION['institute_name_error'])
                        ?>
 			</div>
      <div class="form-group">
        <label>Enter Your Institute Degree</label>
        <input type="text" name="grade" class="form-control">
         <?php if(isset($_SESSION['grade_error'])) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong><?= $_SESSION['grade_error'] ?></strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        <?php }
                           unset($_SESSION['grade_error'])
                        ?>
      </div>
      <div class="form-group">
        <label>Enter Your Institute Start</label>
        <input type="text" name="start_ins" class="form-control">
         <?php if(isset($_SESSION['start_ins_error'])) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong><?= $_SESSION['start_ins_error'] ?></strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        <?php }
                           unset($_SESSION['start_ins_error'])
                        ?>
      </div>
      <div class="form-group">
        <label>Enter Your Institute End</label>
        <input type="text" name="end_year" class="form-control">
         <?php if(isset($_SESSION['end_year_error'])) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong><?= $_SESSION['end_year_error'] ?></strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        <?php }
                           unset($_SESSION['end_year_error'])
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