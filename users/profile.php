<?php
require '../dashboard_part/head.php';
 ?>
<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title mb-4">User profile</h4>
                </div>
            </div>
        </div>
    </div> <!-- container -->

</div> <!-- content -->

<html lang="en">
 <head>
   <title>Individually User Page</title>
 </head>
 <body>
   <section>
    <div class="container">
      
        <div class="card-header">
          <h2 class="text-center text-info"> User profile</h2>
        </div>
        <div class="card-body">
          <table class="table table-striped text-center">
            <tr>
              <th>Photo</th>
              <td><img src="../uploads/users/<?= $_SESSION['photo'] ?>" width="200px;"></td>
            </tr>
            <tr>
              <th>Name</th>
              <td><?= $_SESSION['name'] ?></td>
            </tr>
            <tr>
              <th>Email</th>
              <td><?= $_SESSION['email'] ?></td>
            </tr>
            <tr>
              <th>Password</th>
              <td><?= $_SESSION['password'] ?></td>
            </tr>
            <tr>
              <th>Gender</th>
              <td><?= $_SESSION['gender'] ?></td>
            </tr>
            <?php if ($_SESSION['role']==1) { ?>
              <tr>
                <th>Role</th>
                <td>Admin</td>
              </tr>
            <?php } elseif ($_SESSION['role']==2) { ?>
              <tr>
                <th>Role</th>
                <td>Moderator</td>
              </tr>
            <?php } else { ?>
              <tr>
                <th>Role</th>
                <td>Viewer</td>
              </tr>
            <?php } ?>
            <tr>
              <th>Create_at</th>
              <td><?= $_SESSION['create_at'] ?></td>
            </tr>

          </table>
        </div>

    </div>
   </section>


 </body>
</html>
<?php
require '../dashboard_part/footer.php';
 ?>
