<?php 
   session_start(); 
   $_SESSION['isloggedin'] = "no";

  ?>
  


  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Login</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style23.css"> 
   
  <!--  <link rel="stylesheet" href="indexmain.css"> -->
   



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!--Custom styles-->
  <link rel="stylesheet" type="text/css" href="styles.css">

    </head> 

  
       
           <body>   
           <div class="main">
           <div class="container">   
             
         
             <div class="navbar">
           <nav class="navbar navbar-expand-sm bg-dark navbar-black">
           <ul class="navbar-nav"> 
            
           <!--
           <li class = "nav-item">
             <a class="nav-link" href="index.php"> DASHBOARD</a>
            </li> 


-->
            <li class = "nav-item">
             <a class="nav-link" href="dashboard.php"> DASHBOARD</a>
            </li>
</ul>
</nav> 
</div> 

           <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header">
        <h3>Login Page</h3>
        <div class="d-flex justify-content-end social_icon">
          <span><i class="fab fa-facebook-square"></i></span>
          <span><i class="fab fa-twitter-square"></i></span>
          <span><i class="fab fa-google-plus-square"></i></span>
        </div>
      </div>  
      
      <form method ="POST"> 
      <div class="card-body">
        <form> 
      
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="Email" class="form-control" placeholder="Enter your Email" name="Email">
            
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" placeholder="password" name = "pswd">
          </div>
          <div class="row align-items-center remember">
            <input type="checkbox">Remember Me
          </div>
          <div class="form-group">
          <button type="loginbtn" name = "login" class="btn btn-primary block" style="padding-right:20px"><b>Login</b></<button>
          </div>
        </form>
      </div>
      <div class="card-footer">
        <div class="d-flex justify-content-center links">
          Don't have an account?<a href="Sign_up.php">Sign Up</a>
        </div>
        <div class="d-flex justify-content-center">
          <a href="#">Forgot your password?</a>
        </div>
      </div>
    
</form>

           <!-- </form>  -->
            <?php
             if(isset($_POST['login'])) { 
          
               include 'connection.php';
             $Email = $_POST['Email'];
             $pswd = $_POST['pswd']; 

            
            $query = "SELECT * FROM admin_information  WHERE Email  = '$Email' AND  Password = '$pswd'"; 
            $table = mysqli_query($con,$query); 
           $Adm =  mysqli_fetch_array($table); 

           $query = "SELECT * FROM user_info  WHERE Email  = '$Email' AND  Password = '$pswd'"; 
           $table = mysqli_query($con,$query); 
          $User =  mysqli_fetch_array($table);

    
         if($Adm){  
          $_SESSION['isloggedin'] = "yes"; 
          $_SESSION['user'] = "Admin";
          $_SESSION['ID'] = $Adm['ID'];
          header('Location: Admin/home.php');
       
          
        }  
        else if($User) 
        {

          $_SESSION['isloggedin'] = "yes"; 
          $_SESSION['user'] = "User_information";
          $_SESSION['ID'] = $User['ID'];
          header('Location: User_information/home.php');


        }




        else{
          echo "<p> <font color=Red> wrong mail  or doesn't matched pass</font> </p> ";
        }
    
  }
?> 

<!--protom tinta-->
</div>
    </div>  
          
  </div>




</div>
</div>

    </body>
</html>