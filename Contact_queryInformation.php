<?php 
session_start();
if($_SESSION['isloggedin']=="no") {
    header('Location: index2.php');
}
$id = $_SESSION['ID'];
?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Contact_queryInformation</title>
       
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

         <h1 class="mt-4 mb-3">Contact</h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="dashboard.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Contact</li>
        </ol>

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
              <div class="col-lg-8 mb-4">
                <h3>Send us a Message</h3>
                
                <form name="sentMessage"  method="post">
                   
                   
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Subject:</label>
                            <input type="text" class="form-control" id="Subjet" name="Subject" required data-validation-required-message="Please enter your reason.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="query_Message" name="query_Message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" name="submit"  class="btn btn-primary">Send Message</button>
                </form>
            </div>



            <?php
             if(isset($_POST['submit'])){  
        


             $Subject = $_POST['Subject'];
             $query_Message = $_POST['query_Message']; 

             //echo $Subject;
             //echo $query_Message;
             //echo $id;
             
             include 'connection.php';
    

     $query = "INSERT INTO contact_queryinformation(Subject,query_Message,user) VALUES ('$Subject','$query_Message',$id)"; 
                      
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









         </div>
     </div>



</body>
</html>
