<?php 

	// include('../include/connect.php');  
	// include('../include/log.php');
	// $year = date('Y');
	// $year = substr($year,2,3);
	// $trail_id =uniqid('at'.$year);  
	// $sql = "INSERT INTO trail VALUES(?,?,?,?,?,?,?,?)";
	// $q = $conn -> prepare($sql);    
	// $q -> execute(array($trail_id,'Session','Log', 'Sign-Out', "Users's Log-Out Session", date('Y/m/d H:i:s'),  $_SESSION["u_name"],$_SESSION['u_type']   ));


    if(!isset($_SESSION)) 
    { session_start(); } 


// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
?>
