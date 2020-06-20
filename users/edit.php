<?php
require '../db_connect.php';
$id = $_GET['id'];
$select = "SELECT * FROM users WHERE id = $id";
$select_result = mysqli_query($connect,$select);
$after_assoc_select = mysqli_fetch_assoc($select_result);
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
                     <h4 class="header-title mb-4">Edit User Information</h4>

                 </div>
             </div>
         </div>
     </div> <!-- container -->

 </div> <!-- content -->

<html lang="en">
  <head>
    <title>Edit Registration Form</title>
  </head>
  <body>
    <section>
      <div class="container">
        <div class="col-lg-10 m-auto">
          <div class="card">
            <div class="card-header">
              <h2 class="text-center text-info">Edit Registration Form</h2>
            </div>
            <?php if (isset($_SESSION['success'])) { ?>
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong><?= $_SESSION['success']; ?></strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php }
              unset($_SESSION['success'])
             ?>
            <div class="card-body">
              <form action="edit_post.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Your Name</label>
                  <input type="text" name="name" class="form-control" value="<?= $after_assoc_select['name'] ?>">
                  <input type="hidden" name="id" value="<?= $after_assoc_select['id'] ?>">
                  <?php if (isset($_SESSION['name_error'])) { ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong><?= $_SESSION['name_error']; ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <?php }
                    unset($_SESSION['name_error'])
                   ?>
                </div>

                <div class="form-group">
                  <label>Your Email</label>
                  <input type="text" name="email" class="form-control" value="<?= $after_assoc_select['email'] ?>">
                  <?php if (isset($_SESSION['email_error'])) { ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong><?= $_SESSION['email_error']; ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <?php }
                    unset($_SESSION['email_error'])
                   ?>
                </div>

                <div class="form-group">
                  <label>Your Password</label>
                  <input type="password" name="password" class="form-control" value="<?= $after_assoc_select['password'] ?>">
                  <?php if (isset($_SESSION['password_error'])) { ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong><?= $_SESSION['password_error']; ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <?php }
                    unset($_SESSION['password_error'])
                   ?>
                </div>

                <div class="form-group">
                  <label>Your Gender</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  <label>
                      <input type="radio" name="gender" value="Male" <?= ($after_assoc_select['gender']=='Male')?'checked':''; ?>> Male &nbsp&nbsp&nbsp&nbsp
                  </label>
                  <label>
                      <input type="radio" name="gender" value="Female" <?= ($after_assoc_select['gender']=='Female')?'checked':''; ?>> Female &nbsp&nbsp&nbsp&nbsp
                  </label>
                  <?php if (isset($_SESSION['gender_error'])) { ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong><?= $_SESSION['gender_error']; ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <?php }
                    unset($_SESSION['gender_error'])
                   ?>
                </div>

                <div class="form-group">
                  <select class="form-control" name="role">
                    <option value="1">Admin</option>
                    <option value="2">Moderator</option>
                    <option value="3">Viewer</option>
                  </select>
                  <?php if (isset($_SESSION['role_error'])) { ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong><?= $_SESSION['role_error']; ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <?php }
                    unset($_SESSION['role_error'])
                   ?>
                </div>

                <div class="form-group">
                  <input type="file" name="photo" class="form-control">

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

                <div class="mb-2">
                  <img src="../uploads/users/<?= $after_assoc_select['photo'] ?>" alt="" width="200px;">
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>


  </body>
</html>
<?php
require '../dashboard_part/footer.php';
 ?>
