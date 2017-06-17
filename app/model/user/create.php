<?php
try{

	include('../master/connect.php');

	$usertype = $_POST['usertype'];
	$username = trim($_POST['username']);
	$password = md5($_POST['password']);
	$name = trim($_POST['name']);

	//query to check if username exists
	$sql = "SELECT COUNT(*) as count FROM user_account WHERE ua_username LIKE ?";
	$q = $conn->prepare($sql);
	$q -> execute(array($username));
	$browse = $q -> fetchAll();
	foreach($browse as $fetch)
	  $count = $fetch['count']; 

	if($count>0){ echo json_encode(2); }
	else if($count==0){
	  $sql = "INSERT INTO user_account values(?,?,?,?,?,?,?,?)";
	  $q = $conn->prepare($sql);
	  $q -> execute(array($username,$usertype,$password,$name,0,date("Y-m-d H:i:s"),null,null));
	  echo json_encode(0); 		  
	}


}

catch(PDOException $x) {
echo json_encode(1); 		
}
$conn = null;             
?>    