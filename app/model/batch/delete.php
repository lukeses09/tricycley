<?php
try{

	include('../master/connect.php');

	$id = $_POST['id'];

	//validating
	$sql = "SELECT COUNT(*) as count 
	FROM aiqr 
	WHERE aiqr_cass_id = ? 
	AND aiqr.status = 0";
	$q = $conn->prepare($sql);
	$q -> execute(array($id));
	$browse = $q -> fetchAll();
	foreach($browse as $fetch)
	  $count = $fetch['count']; 

	if($count>0){ echo json_encode(2); }
	else if($count==0){
	  $sql = "UPDATE gpm SET status = ?, date_removed=? 
	  WHERE gpm_id LIKE ?";
	  $q = $conn->prepare($sql);
	  $q -> execute(array('1',date("Y-m-d H:i:s"),$id));
	  $output=0;
	  $conn = null;             
	  echo json_encode(0); 			
	}


}

catch(PDOException $x) {
echo json_encode(1); 		
}
?>    