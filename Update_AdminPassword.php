<?php 
   session_start(); 
  if($_SESSION['isloggedin']=="no") {
header('Location:index2.php');
  }

 $ID = $_SESSION['ID']; 
 



 
  ?>
  
 
 
 
 
 
 
 
 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Password</title> 
      <!--  <link href="css/style.css" rel="stylesheet">-->
       
       <!-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script> 
-->  
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../style23.css"> 

        <link rel="stylesheet" href="style1.css"> 
        <?php include 'link.php';?> 

    </head> 
    <!--<body style="background-color:blanchedalmond;">-->
   <body class="sb-nav-fixed"> 
    <?php include 'sidenav.php';?>  
     <div id="layoutSidenav_content"> 
         <div class="container"> 

         <div class="myLogin">

<div class="login-title">
 <h2 style = "padding-top: 30px;padding-left: 400px;"> <b> Update password <b> </h2>
</div>

<form method = "POST">
<div class="form-group"> 
  <div class="class6">
<label>Old password:</label>
<input type="Password" class="form-control" placeholder="Enter old password" name="pass1"> 
</div>
</div>

<div class="form-group"> 
  <div class="class7">
<label>New Password:</label>
<input type="Password" class="form-control" placeholder="Enter new password" name="pass2">

</div>
</div> 
<div class="form-group"> 
  <div class="class8">
<label> Confirmed New Password:</label>
<input type="Password" class="form-control" placeholder="Enter confirmed new password" name="pass3"> 
</div>
</div>

 <!--
 <div class="form-group form-check">
 
   <label class="form-check-label">
     <input class="form-check-input" type="checkbox" name="remember"> Remember me
   </label>
 </div>
-->
<!--   <div class="submit2">
 <button type="submit" name = "update" class="btn btn-primary">Login</button>
</div>
-->
<div class="submit2"> 
  <div class="class9">
 <button type="submit" name = "update" class="btn btn-primary">update</button> 
</div>
</div>
</form>
<?php
if(isset($_POST['update'])) { 

//   include 'connection.php'; 
include 'connection.php';
// $Email = $_POST['Email'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$pass3 = $_POST['pass3']; 

//   $pswd = $_POST['pswd']; 

//collection email and pass from form 

/*
$S_email = "abc@gmail.com";
$S_pswd = "12345";

$T_email = "Teachers@gmail.com";
$T_pswd =  "T12345"; 

$A_email = "Admin@gmail.com";
$A_pswd = "A12345";
*/  
// echo $ID;

// excuting query
// $query = "SELECT * FROM students WHERE Email = '$Email' AND  Password = '$pswd'";   


$query = "SELECT * FROM admin_information WHERE ID = $ID"; 
$table = mysqli_query($con,$query); 
$Adm =  mysqli_fetch_array($table); 
$pass = $Adm['Password']; 

// echo $pass1;

/*

$query = "SELECT * FROM teachers WHERE Email = '$Email' AND  Password = '$pswd'"; 
$table = mysqli_query($con,$query); 
$tcr =  mysqli_fetch_array($table);

$query = "SELECT * FROM admin WHERE Email = '$Email' AND  Password = '$pswd'"; 
$table = mysqli_query($con,$query); 
$Adm =  mysqli_fetch_array($table);

*/





//     if($email == $S_email and $pswd == $S_pswd) {
/*  if($std) { 


// echo "Successfully loggedin "; 
$_SESSION['isloggedin'] = "yes";
$_SESSION['user'] = "std1";

header('Location: std1/student.php');
// header('Location: teacher/teacher.php');
} 
*/
if($pass1 != $pass) { 
echo "<p> <font color=Red> your old password doesn't matched!!</font> </p> ";

} 
else if( $pass2 != $pass3){
echo "<p> <font color=Red>new password doesn't matched!!</font> </p> ";
} 



/*

else if($tcr){  
$_SESSION['isloggedin'] = "yes";
$_SESSION['user'] = "teachaer34";
header('Location: teachaer34/teacher.php');


} 


else if($Adm){  
$_SESSION['isloggedin'] = "yes";
header('Location: Admin/Admin2.php');


} 

*/



else{
$query = "UPDATE admin_information SET Password = '$pass2' WHERE ID = $ID"; 
if(mysqli_query($con,$query)) { 
  
echo "<p> <font color=Green>Password successfully updated</font> </p> "; 

}
else {
echo "<p> <font color=Red> Something went  wrong </font> </p> ";
}
}
/*
else if($Email != $S_Email){
echo "<p> <font color=Red> Student mail  doesn't matched </font> </p> ";
}

else if($pswd != $S_pswd){
echo "<p> <font color=Red> Student password  doesn't matched </font> </p>";
}
*/
/*
if( $email == $T_email and $pswd == $T_pswd){
header('Location: teachaer34/teacher.php');

}
else if($email != $T_email){
echo "<p> <font color=Red> Teachers mail  doesn't matched </font> </p> ";
}

else if($pswd != $T_pswd){
echo "<p> <font color=Red> Teachers password  doesn't matched </font> </p>";
}


if( $email == $A_email and $pswd == $A_pswd){
header('Location: Admin/Admin2.php');


}
else if($email != $A_email){
echo "<p> <font color=Red>Admin mail  doesn't matched </font> </p> ";
}

else if($pswd != $A_pswd){
echo "<p> <font color=Red> Admin password  doesn't matched </font> </p>";
}
}


*/
}
?>

</div>  
         </div>
     </div>



</body>
</html>
