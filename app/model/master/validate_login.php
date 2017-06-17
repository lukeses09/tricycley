<?php
    if(!isset($_SESSION)) { session_start(); }
    include('../master/connect.php');

      //FETCH VARIABLES
    $username =$_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);
    $level;
    $match='false';

      // CHECK IF MATCH ACCOUNT
    $sql = "SELECT * FROM users WHERE status = 1";
    $q = $conn->prepare($sql);
    $q -> execute();
    $browse = $q -> fetchAll();
    foreach($browse as $row)
    {
      if(($username == $row['name']) && ($password == $row['password']))
      {
        $match='true';
        $level = $row['user_type'];
        break;
      }
    }

    // SINCE TRUE WHICH MEANS MATCH FOUND.. START AND STORE SESSIONS
    if($match == 'true')
    {


      $_SESSION["tricycley_username"] = $username ;
      $_SESSION["tricycley_level"] = $level;
      // $_SESSION["cloudipark_module"] = $cloudipark_module;



      // $year = date('Y');
      // $year = substr($year,2,3);
      // $trail_id =uniqid('at'.$year);
      // $sql = "INSERT INTO trail VALUES(?,?,?,?,?,?,?,?)";
      // $q = $conn -> prepare($sql);
      // $q -> execute(array($trail_id,'Session','Log', 'Sign-In', "Users's Log-in Session", date('Y/m/d H:i:s'),  $_SESSION["u_name"],$_SESSION['u_type']   ));

  	}

	$output[] = array($match);
	echo json_encode($output); // RETURN data to login.php
	$conn = null; // CLOSE DATABASE CONNECTION

?>
