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
                     <h4 class="header-title mb-4">Individually User Information</h4>

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
       <div class="card">
         <div class="card-header">
           <h2 class="text-center text-info">Individually User Information</h2>
         </div>
         <div class="card-body">
           <table class="table table-striped text-center">
             <tr>
               <th>Photo</th>
               <td><img src="../uploads/users/<?= $after_assoc_select['photo'] ?>" width="200px;"></td>
             </tr>
             <tr>
               <th>Name</th>
               <td><?= $after_assoc_select['name'] ?></td>
             </tr>
             <tr>
               <th>Email</th>
               <td><?= $after_assoc_select['email'] ?></td>
             </tr>
             <tr>
               <th>Password</th>
               <td><?= $after_assoc_select['password'] ?></td>
             </tr>
             <tr>
               <th>Gender</th>
               <td><?= $after_assoc_select['gender'] ?></td>
             </tr>
             <?php if ($after_assoc_select['role']==1) { ?>
               <tr>
                 <th>Role</th>
                 <td>Admin</td>
               </tr>
             <?php } elseif ($after_assoc_select['role']==2) { ?>
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
               <td><?= $after_assoc_select['create_at'] ?></td>
             </tr>

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
