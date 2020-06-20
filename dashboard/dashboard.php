<?php
require '../dashboard_part/head.php';
 ?>

 <!-- Start Page content -->
 <div class="content">
     <div class="container-fluid">

         <div class="row">
             <div class="col-12">
                 <div class="card-box">
                     <h4 class="header-title mb-4">Welcome <?= $_SESSION['name'] ?></h4>
                 </div>
             </div>
         </div>
     </div> <!-- container -->

 </div> <!-- content -->



 <?php
 require '../dashboard_part/footer.php';
  ?>
