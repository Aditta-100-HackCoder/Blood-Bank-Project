<?php 

 include 'connection.php';
$ID = $_REQUEST['ID']; 
 $query = "DELETE FROM admin_information WHERE ID = $ID"; 
 mysqli_query($con, $query);
     header('Location: Admins.php');

 

?>