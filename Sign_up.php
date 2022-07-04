<!--
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Login</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="style23.css">
     
    </head>

 <h4 style = "padding-right: 560px;">
    <div class="container mt-3">
  <h2>My Debue</h2>
  <p>I am a junior web desiner </p>
  <div class="media border p-3">
    <img src="Aditta.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
    <div class="media-body">
      <h4>Aditta Riddo <small><i>Posted on February 19, 2022</i></small></h4>
      <p>This is My new web page </p>      
    </div>
  </div>
</div>

  
</h4> 

--> 



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Sign_Up Page</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>  




<!--
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> 
--> 
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">  
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<!--<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> -->
<style>
body {
    color: #fff;
    background: #3598dc;
    font-family: 'Roboto', sans-serif;
}
.form-control {
    height: 41px;
    background: #f2f2f2;
    box-shadow: none !important;
    border: none;
}
.form-control:focus {
    background: #e2e2e2;
}
.form-control, .btn {        
    border-radius: 3px;
}
.signup-form {
    width: 400px;
    margin: 30px auto;
}
.signup-form form {
    color: #999;
    border-radius: 3px;
    margin-bottom: 15px;
    background: #fff;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.signup-form h2  {
    color: #333;
    font-weight: bold;
    margin-top: 0;
}
.signup-form hr  {
    margin: 0 -30px 20px;
}    
.signup-form .form-group {
    margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
    margin-top: 3px;
}
.signup-form .row div:first-child {
    padding-right: 10px;
}
.signup-form .row div:last-child {
    padding-left: 10px;
}
.signup-form .btn {        
    font-size: 16px;
    font-weight: bold;
    background: #3598dc;
    border: none;
    min-width: 140px;
}
.signup-form .btn:hover, .signup-form .btn:focus {
    background: #2389cd !important;
    outline: none;
}
.signup-form a {
    color: #fff;
    text-decoration: underline;
}
.signup-form a:hover {
    text-decoration: none;
}
.signup-form form a {
    color: #3598dc;
    text-decoration: none;
}   
.signup-form form a:hover {
    text-decoration: underline;
}
.signup-form .hint-text  {
    padding-bottom: 15px;
    text-align: center;
}
</style>
</head>







<body>






<div class="signup-form">
  <!--  <form action="/examples/actions/confirmation.php" method="post">--> 
  
        <h2>Sign Up</h2>
        <p>Please fill in this form to create an account!</p>
        <hr> 
        <form method="POST">
        <div class="form-group">
            <div class="row">
                <div class="col"><input type="text" class="form-control" name="User_Name" placeholder="First Name" required="required"></div>
               <div class = "col"> <input type="text" class="form-control" name="User_Address" placeholder="Write Your Address" required="required"></div>
            </div>          
        </div> 



 <h5> Choose Your Gender </h5>
    <div class="form-group">
       
        <label for="male">Male</label>
       <div class = "col"> <input type="radio" name="User_Gender" id="male" value="male" checked> </div>


        <label for="female">Female</label>
       <div class = "col"> <input type="radio" name="User_Gender" id="female" value="female" checked> </div>
       
</div>

        <div class="form-group">
            <input type="email" class="form-control" name="User_Email" placeholder="Email" required="required">  
            </div> 
            <div class="form-group">
        <input type="text" class="form-control" name="User_Age" placeholder="Write Your Age" required="required"> 
</div> 
<div class="form-group">
         <input type="text" class="form-control" name="User_ContactNumber" placeholder="Write Your ContactNumber" required="required">
</div>  
<!--
<div class="form-group">
         <input type="text" class="form-control" name="Blood_groups" placeholder="Write Your Blood_groups" required="required">
</div>
-->

 <div class = "form-group">

<label> <b> Choose Blood: </b></label>
    
 <select name="Blood_id" id="" class = "form-control"> 
   <option value="" selected>-Choose Blood-</option>
 
 <?php 
       include 'connection.php';      
       $query = "SELECT * FROM blood_group";
       $table = mysqli_query($con,$query); 
       while($row = mysqli_fetch_array($table)) { ?>
   <option value="<?php echo $row['Blood_id'];?>"> <?php echo $row['Blood_groups'];?> </option> 

       <?php } ?>


 
  <!-- <option value="" > Mehedi </option> -->


 </select> 

       </div>
        <div class="form-group">
            <input type="password" class="form-control" name="User_Password" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
        
        
        </div>        
        <div class="form-group">
            <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
        </div>
        <div class="form-group">
            <button type="submit" name = "submit" class="btn btn-primary btn-lg">Sign Up</button>
        </div>
 <!--</form>-->
    <div class="hint-text">Already have an account? <a href="index2.php">Login here</a></div>
</div>


 </form >
      
    <?php
             if(isset($_POST['submit']))    {  

                $Blood_id = $_POST['Blood_id'];  
             $User_Name = $_POST['User_Name'];  
             $User_Address = $_POST['User_Address']; 
             $User_Gender = $_POST['User_Gender']; 
             $User_Email = $_POST['User_Email'];
             $User_Age = $_POST['User_Age']; 
             $User_ContactNumber = $_POST['User_ContactNumber']; 
           //  $Blood_groups = $_POST['Blood_groups'];
             $User_Password = $_POST['User_Password'];
             $confirm_password = $_POST['confirm_password'];  
           
             include 'connection.php';
    if( $User_Password != $confirm_password){
          echo "<p> <font color=Red>  password  doesn't matched </font> </p>";
    }
else{
     $query = "INSERT INTO user_info (User_Name,Blood_id,User_Address,User_Gender,Email,User_Age,User_ContactNumber,Password) VALUES ('$User_Name','$Blood_id','$User_Address','$User_Gender','$User_Email','$User_Age','$User_ContactNumber','$User_Password')"; 
                      
     if(mysqli_query($con,$query)){
        echo "<p> <font color=Green> Data sucessfully inserted </font> </p>";

      }  
      else{
        echo "<p> <font color=Red>Something is wrong </font> </p>";
      }
}
      

            }
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
       <!--
       </div>
            </div>        
            -->
            
       
    </body>
</html>


