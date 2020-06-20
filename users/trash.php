<?php

  require '../db_connect.php';
  $select = "SELECT * FROM users WHERE status = 1";
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
                     <h4 class="header-title mb-4">Trash Page</h4>

                 </div>
             </div>
         </div>
     </div> <!-- container -->

 </div> <!-- content -->

 <html lang="en">
   <head>
     <title>Trash Page</title>
   </head>
   <body>
     <section>
      <div class="container">
        <div class="col-lg-12 m-auto">
          <div class="card">
            <div class="card-header">
              <h2 class="text-center text-info">Trash Page</h2>
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
                    <td><img src="../uploads/users/<?= $user['photo']; ?>" width="50px"></td>
                    <td>
                      <a href="soft_delete.php?id=<?= $user['id']; ?>" class="btn btn-success">Undo</a>
                      <a href="delete.php?id=<?= $user['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
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
      </div>
     </section>

     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   </body>
 </html>
 <?php
 require '../dashboard_part/footer.php';
  ?>
