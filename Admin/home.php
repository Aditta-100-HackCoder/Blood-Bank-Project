<?php 
   session_start(); 
  if($_SESSION['isloggedin']=="no") {
   header('Location: ../index2.php');
 
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
        <title>Blood Bank Database</title> 
        <link href="style.css" rel="stylesheet"> 
        
        <link href="css/styles.css" rel="stylesheet" />
        <script src="js/all.js" crossorigin="anonymous"></script> 
        <script src="js/bundle.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script> 
                  




        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>












<?php include 'link.php';?>  
    </head> 

    <body class="sb-nav-fixed">  
    <div class="main">
     <?php include 'Adminnav.php';?>  
     <div id="layoutSidenav_content"> 
       
           <div class="content"> 
           <div class="container">  
           
          <h1 style="color: Black;padding-left:320px;"> This is Admin Page </h1>  
          <!--
     <h1 style = "padding-left:340px;padding-top: 10px;"><img src ="images.jpeg" alt="Admin logo"> </h1> 
   <h5 style = "padding-left:200px;padding-top:20px;">  <p>NAME: ADITTA BAISHNAB MISO <br> PROFESSION: DATABASE ADMINSTRATOR <br> WORKPLACE: CHITTAGONG MEDICAL COLLEAGE 
     AND HOSPITAL </p> </h5>
-->

 <!--<div class="card" style="width:260px;"> -->  
 <div class="card" style="width:305px;">
 <!-- <img class="card-img-top" src="images.jpeg" alt="Card image" style="width:100%"> --> 
<!-- <img src="images.jpeg" class="mr-3 mt-3 rounded-circle" alt="Circle image" width="304" height="236"> -->
 <form action = "home.php" method="POST" enctype="multipart/form-data">  
  <div class="form-group">  
    <?php 
             $ID =  $_SESSION['ID']; 
             include '../connection.php';
  $query = "select * from admin_information  where ID = $ID";
  $row = mysqli_query($con , $query);
  $data = mysqli_fetch_array($row);
  $image = $data['image_name'];

?>
  <img src="<?php echo "images/".$image;?>" class="mr-3 mt-3 rounded-circle" alt="Circle image" width="304" height="236">
      <label for="Email">Choose image:</label>
      <input type="file" class="form-control" placeholder="Upload Image" name="image">
  </div>
          
  <button type="submit" name = "submit" value = "submit" class="btn btn-primary">upload</button>
            

</form> 


<div class="card-body">
<?php
 
$query = "SELECT * FROM admin_information WHERE ID = $ID"; 
  $table = mysqli_query($con,$query); 
  $User = mysqli_fetch_array($table); 
  $Username = $User['Username']; 
  $Email = $User['Email']; 
  $DOB = $User['DOB']; 
  $Profession = $User['Profession'];
  $WorkPlace = $User['WorkPlace'];
  
?>
</div> 




<div class="card-body">
<h4 class="card-title">Admin Info:</h4>
      <p class="card-text"><b>NAME:  <?php echo $Username;?> <br>Email: <?php echo $Email;?> <br>DOB: <?php echo $DOB;?> 
    <br>Profession: <?php echo $Profession;?> <br>WorkPlace: <?php echo $WorkPlace;?>  </b></p>

    </div> 

  
</div>

<!--
 <div class="class89">
<img src="images.jpeg" class="mr-3 mt-3 rounded-circle" alt="Circle image" width="304" height="236">

</div> 
-->
</div>
         </div>
     </div> 
</div>

<?php 
    if(isset($_POST['submit'])){
     
       $ext = explode(".",$_FILES['image']['name']); 
      $c = count($ext); 
      $ext = $ext[$c-1];
      
      
      $date = date("D:M:Y");
      $time = date("h:i:s"); 
    
      
      $image_name = $date.$time; 
      
       
      $image_name = md5($image_name); 
      
      $image_name = $image_name.".".$ext; 
      echo $image_name;
 
    
      $query = "Update admin_information set image_name = '$image_name' where ID = $ID"; 
      if(mysqli_query($con, $query)){ 
      echo " image uploaded"; 
      if($image_name != NULL){
    if(move_uploaded_file($_FILES['image']['tmp_name'],"images/".$image_name)) {

        echo " image moved"; 
    }
      }

      } 
  else{
          echo "something is wrong";
      }
    }
 
?>







</body>
</html>
