<?php 
   session_start(); 
  if($_SESSION['isloggedin']=="no") {
header('Location: index2.php');
  }

  ?>






<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Users Account Delete</title>
        <link href="css/style.css" rel="stylesheet">
       <!-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script> 
-->



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">   

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>



        <?php include 'link.php';?> 

    </head>
    <body class="sb-nav-fixed"> 
    <?php include 'sidenav2.php';?>  
     <div id="layoutSidenav_content"> 
         <div class="container"> 
<!--
         <nav class="navbar navbar-expand-sm bg-dark navbar-black">
                <ul class="navbar-nav"> 
-->
                 <!-- <li class="nav-item Active">-->

              <!--   <li class="nav-item active">
                    <a class="nav-link" href="Admin2.php ">Admin_pannel page</a>
                  </li> 
--> 

  <!--
                  <li class="nav-item">
                    <a class="nav-link" href="Admin2.php ">Admin_pannel page</a>
                  </li>

                  <li class = "nav-item">
                    <a class="nav-link" href="updatepassword.php"><b>update password</b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href= "updateprofile.php"><b>update profile </b></a>
                  </li> 


                  <li class="nav-item active">
                    <a class="nav-link" href= "students.php"> <b>All students </b></a>
                  </li> 
                  <li class="nav-item">
                    <a class="nav-link" href= "teachers.php"> <b>All teachers</b></a>
                  </li>
-->
<!--
                  <li class="nav-item">
                    <a class="nav-link" href= "../logout.php"> <b>Log out </b></a>
                  </li>
 
-->
<!--
                  <li class="nav-item active">
                    <a class="nav-link" href= "courseTeacher.php"> <b> Course Teacher </b></a>
                  </li>  



                    <li class="nav-item">
                    <a class="nav-link" href= "../index.php"> <b>Log out </b></a>
                    
                    </li>


-->

                  <!--
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                  </li>
                --> 
                <!--
                </ul>
              </nav>
           
-->
            
                <!--  <h1 >This is Admin_pannel page</h1> --> 
               
                  <div class = "text-center"> 
                  <h2> Delete Account </h2>
                  
                
                </div> 

                <table class="table table-white table-striped">
    <thead>
      <tr>
        <th>User_Name</th>
        <th>Email</th>
        <th>User_Address</th> 
        <th>Action</th>
      </tr>
    </thead>
    <tbody> 
      <?php 

 include 'connection.php'; 
 $query = "SELECT * FROM user_info"; 
 $table = mysqli_query($con,$query); 
 while($row = mysqli_fetch_array($table)) {?> 

      <tr>
        <td><?php echo $row['User_Name']; ?></td>
        <td><?php echo $row['Email']; ?></td>
        <td><?php echo $row['User_Address']; ?></td> 
        <td> 
 
  <a class = "btn btn-danger" href="" data-toggle="modal" data-target="#myModal<?php echo $row['ID'];?>">Delete</a>   


<!-- The Modal -->
<div class="modal" ID="myModal<?php echo $row['ID'];?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Delete Confirmation !!!</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body"> 
      Do you really want to delete? <b> <?php echo $row['User_Name'];  echo $row['ID'];?></b>?
     
      </div>

      <!-- Modal footer -->
      <div class="modal-footer"> 
      <a class = "btn btn-danger" href="Delete_UserAccount.php?ID=<?php echo $row['ID']; ?>">Delete</a> 
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>








 </td>
      </tr>
      <?php } ?> 
    </tbody>
  </table> 
         </div>
     </div>



</body>
</html>