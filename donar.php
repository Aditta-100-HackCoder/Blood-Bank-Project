<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Doner regeistar</title>
       
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

        

         <div class="signup-form">
  <!--  <form action="/examples/actions/confirmation.php" method="post">--> 
  
        <h2>Donar regestration</h2>
        <p>Please fill in this form to create an account!</p>
        <hr> 
        <form method="POST">
        <div class="form-group">
        <div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Full Name<span style="color:red">*</span></div>
<div><input type="text" name="FullName" class="form-control" required></div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Mobile Number<span style="color:red">*</span></div>
<div><input type="text" name="MobileNumber" class="form-control" required></div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Email Id  <span style="color:red">*</span></div>
<div><input type="email" name="Email" class="form-control"></div>
</div>
</div>   

<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Age<span style="color:red">*</span></div>
<div><input type="text" name="Age" class="form-control" required></div>
</div>
 


<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">BloodGroup<span style="color:red">*</span></div>
<div><input type="text" name="BloodGroup" class="form-control" required></div>
</div>




<!--
<div class="col-lg-4 mb-4">
<div class="font-italic">Gender<span style="color:red">*</span></div>
<div><select name="gender" class="form-control" required>
<option value="">Select</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
</div>
</div> 
-->  

<h5> Choose Your Gender <span style="color:red">*</span> </h5>
    <div class="form-group">
       
        <label for="male">Male</label>
       <div class = "col"> <input type="radio" name="Gender" id="male" value="male" checked> </div>


        <label for="female">Female</label>
       <div class = "col"> <input type="radio" name="Gender" id="female" value="female" checked> </div>
       
</div>


<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Address <span style="color:red">*</span></div>
<div><textarea class="form-control" name="Address"></textarea></div>
</div>

<div class="col-lg-8 mb-4">
<div class="font-italic">Message<span style="color:red">*</span></div>
<div><textarea class="form-control" name="Message" required> </textarea></div>
</div>
</div>

<div class="row">
<div class="col-lg-4 mb-4">
<div><input type="submit" name="submit" class="btn btn-primary" value="submit" style="cursor:pointer"></div>
</div>

 

</div> 


 
      
<!--
<div class="form-group">
         <input type="text" class="form-control" name="Blood_groups" placeholder="Write Your Blood_groups" required="required">
</div>
-->

 <!--</form>-->
    


<!-- </form >--> 
      
    <?php
             if(isset($_POST['submit']))    {  

                $BloodGroup = $_POST['BloodGroup'];  
             $FullName = $_POST['FullName'];  
             $Address = $_POST['Address']; 
             $Gender = $_POST['Gender']; 
             $Email = $_POST['Email'];
             $Age = $_POST['Age']; 
             $MobileNumber = $_POST['MobileNumber']; 
           //  $Blood_groups = $_POST['Blood_groups'];
             $Message = $_POST['Message'];
           
             include 'connection.php';
    

     $query = "INSERT INTO donar_info(FullName,BloodGroup,Address,Gender,Email,Age,MobileNumber,Message) VALUES ('$FullName','$BloodGroup','$Address','$Gender','$Email','$Age','$MobileNumber','$Message')"; 
                      
     if(mysqli_query($con,$query)){
        echo "<p> <font color=Green> Data sucessfully inserted </font> </p>";

      }  
      else{
        echo "<p> <font color=Red>Something is wrong </font> </p>";
      }
}
      

          //  }
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
            </form>













         </div>
     </div>



</body>
</html>
