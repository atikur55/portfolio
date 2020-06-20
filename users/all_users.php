<?php

  require '../db_connect.php';
  $select = "SELECT * FROM users WHERE status = 0";
  $select_result = mysqli_query($connect,$select);
 ?>
<?php
require '../dashboard_part/head.php';
 ?>
 <!-- Start Page content -->
 <div class="content">
     <div class="container-fluid">

         <div class="row">
             <div class="col-12">
                 <div class="card-box">
                     <h4 class="header-title mb-4">All Users</h4>

                 </div>
             </div>
         </div>
     </div> <!-- container -->

 </div> <!-- content -->

 <html lang="en">
   <head>
     <title>All User Page</title>
   </head>
   <body>
     <section>
      <div class="container">
        <div class="col-lg-12 m-auto">

            <div class="card-header">
              <h2 class="text-center text-info">All Users Information</h2>
            </div>
            <?php if (isset($_SESSION['update_success'])) { ?>
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong><?= $_SESSION['update_success']; ?></strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php }
              unset($_SESSION['update_success'])
             ?>
            <div class="card-body">
              <table class="table table-striped text-center">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Gender</th>
                  <th>Role</th>
                  <th>Photo</th>
                  <th>Action</th>
                </tr>
                <?php foreach ($select_result as $user) { ?>
                  <tr>
                    <td><?= $user['id']; ?></td>
                    <td><?= $user['name']; ?></td>
                    <td><?= $user['email']; ?></td>
                    <td><?= $user['gender']; ?></td>
                    <?php if ($user['role']==1) { ?>
                      <td>Admin</td>
                    <?php } elseif ($user['role']==2) { ?>
                      <td>Moderator</td>
                    <?php } else { ?>
                      <td>Viewer</td>
                    <?php } ?>
                    <td><img src="../uploads/users/<?= $user['photo'] ?>" width="50px;"></td>
                    <?php if ($_SESSION['role']==1) { ?>
                      <td>
                        <a href="view.php?id=<?= $user['id']; ?>" class="btn btn-primary">View</a>
                        <a href="edit.php?id=<?= $user['id']; ?>" class="btn btn-success">Edit</a>
                        <a href="soft_delete.php?id=<?= $user['id']; ?>" class="btn btn-danger">Delete</a>
                      </td>
                    <?php } elseif ($_SESSION['role']==2) { ?>
                      <td>
                        <a href="view.php?id=<?= $user['id']; ?>" class="btn btn-primary">View</a>
                        <a href="edit.php?id=<?= $user['id']; ?>" class="btn btn-success">Edit</a>
                      </td>
                    <?php } else { ?>
                      <td>
                        <a href="view.php?id=<?= $user['id']; ?>" class="btn btn-primary">View</a>
                      </td>
                    <?php } ?>
                  </tr>
                <?php } ?>
                <?php if ($select_result->num_rows == 0): ?>
                <tr>
                  <td colspan="7" class="text-center text-danger">No Data Found</td>
                </tr>
              <?php endif ?>
              </table>
            </div>

        </div>
      </div>
     </section>


   </body>
 </html>
 <?php
 require '../dashboard_part/footer.php';
  ?>
