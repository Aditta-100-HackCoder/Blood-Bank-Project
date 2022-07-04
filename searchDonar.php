



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Search Donar</title>
       
       <!-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script> 
-->
        <?php include 'link.php';?> 

    </head>
    <body class="sb-nav-fixed"> 
    <?php include 'sidenav2.php';?> 
     <div id="layoutSidenav_content"> 
     <div class="container">
   <div class="row">
   <div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
   <div class="row">

   <?php 

     $conn = new mysqli('localhost', 'root', '', 'bloodbank'); 
     $result = [];
    if(isset($_GET['search'])){
        $searchKey = $_GET['search']; 
        
        $sql = "SELECT * FROM donar_info WHERE BloodGroup LIKE '%$searchKey%'"; 
        $result = $conn->query($sql);
     } //else
    // $sql = "SELECT * FROM donar_info"; 

     




?>


   <form action="" method="GET"> 
     <div class="col-md-6">
        <input type="text" name="search" class='form-control' placeholder="Search By BloodGroup" value=<?php echo @$_GET['search']; ?> > 
     </div>
     <div class="col-md-6 text-left">
      <button class="btn-primary">Search</button>
     </div>
   </form>
    <br>
   <br> 
   <br>
</div>

<table class="table table-bordered">
<tr>
     <th>FullName</th>
     <th>MobileNumber</th>
     <th>Email</th> 
     <th>Gender</th> 
     <th>Age</th> 
     <th>BloodGroup</th> 
     <th>Address</th>
  </tr>
  <?php
  if($result){ while( $row = $result->fetch_object()) : ?>
  <tr>
     <td><?php echo $row->FullName?></td>
     <td><?php echo $row->MobileNumber?></td>
     <td><?php echo $row->Email?></td> 
     <td><?php echo $row->Gender?></td>  
     <td><?php echo $row->Age?></td>  
     <td><?php echo $row->BloodGroup?></td> 
     <td><?php echo $row->Address?></td> 

  </tr> 
  <?php endwhile;} ?>
</table>
</div>
</div>
  </div>
  
</body>
</html>
