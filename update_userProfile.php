<?php 
   session_start(); 
  if($_SESSION['isloggedin']=="no") {
header('Location:index2.php');
  } 


  $ID = $_SESSION['ID'];

  include 'connection.php'; 


  $query = "SELECT * FROM user_info WHERE ID = $ID"; 
  $table = mysqli_query($con,$query); 
  $User = mysqli_fetch_array($table); 
  $User_Name = $User['User_Name']; 
  $Email = $User['Email']; 
  $User_ContactNumber = $User['User_ContactNumber']; 


  ?>
  



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Update Profile</title>  
      <!--  <link href="css/style.css" rel="stylesheet">-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="../style23.css">
        <link rel="stylesheet" href="style1.css">
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

         <div class="myLogin">

<div class="login-title"> 
  <h2 style = "padding-left:400px;" > <b> Update User Profile</b></h2>
</div>
   
   

    <form method="POST"> 
     
 
      <div class="form-group"> 
      <div class="class2">
        <label > <b>  User Name : </b></label>
        <input type="text" class="form-control" name="User_Name" value = "<?php echo $User_Name;?>">
      </div>
</div>

      <div class="form-group"> 
      <div class="class1">
                        <label for="Email"> <b>Email: </b></label>
                        <input type="Email" class="form-control" name="Email" value = "<?php echo $Email;?>">
                      </div>
</div>
                      <div class="form-group"> 
                      <div class="class3">
                        <label> <b> Contact Number </b></label>
                        <input type="Number" class="form-control"  name="User_ContactNumber"  value = "<?php echo $User_ContactNumber;?>">
                      </div> 
</div>
                      <div class="submit2"> 
                      <div class="class4">
        <button type="submit" name = "update" class="btn btn-primary"><b> update</b></button>
      </div>

</div>
    </form > 
      
    <?php
             if(isset($_POST['update']))    { 
             $User_Name = $_POST['User_Name'];  
             $Email = $_POST['Email']; 
             $User_ContactNumber  = $_POST['User_ContactNumber'];
            // $pswd1 = $_POST['pswd1'];
             //$pswd2 = $_POST['pswd2'];  
           
            // include 'connection.php';
  //  if($pswd1 != $pswd2){
         // echo "<p> <font color=Red>  password  doesn't matched </font> </p>";
  //  }
   //else{
   //  $query = "INSERT INTO students (Email, Name, Password, DOB) VALUES ('$Email','$Name','$pswd1','$DOB')"; 
      
   $query = "UPDATE user_info SET User_Name = '$User_Name', Email = '$Email', User_ContactNumber = '$User_ContactNumber' WHERE ID = $ID"; 
   
   if(mysqli_query($con,$query)){
        echo "<p> <font color=Green>Data successfully updated</font> </p>";

      }  
      else{
        echo "<p> <font color=Red>Something went wrong </font> </p>";
      }
}
      
           // }
         /*
             echo $name;
             echo "<br>";
             echo $email;
             echo "<br>";
             echo $dob;
             echo "<br>";
             echo $pswd1;
             echo "<br>";
             echo $pswd2;
             
             
      
             }

   ?>
   */
   

     
          
       ?>
       </div>




          
        </div>
                     

         
         </div>
     </div>



</body>
</html>
