<?php
try{

	include('../master/connect.php');

	$class = $_POST['f_class'];
	$date =  date('Y-m-d', strtotime(str_replace('-', '/', $_POST['f_date'])));
	$active = $_POST['f_active'];
	$inactive = $_POST['f_inactive'];
	$quit_rate = $_POST['f_quit_rate'];
	$id = $_POST['id'];    

	//validating
	$sql = "SELECT COUNT(*) as count
	FROM aiqr 
	WHERE (aiqr_class_id = ?)
	AND ( EXTRACT(YEAR_MONTH FROM aiqr_date) = EXTRACT(YEAR_MONTH FROM ?) )
	AND (aiqr_id != ?)
	AND aiqr.status = 0";
	$q = $conn->prepare($sql);
	$q -> execute(array($class,$date,$id));
	$browse = $q -> fetchAll();
	foreach($browse as $fetch)
	  $count = $fetch['count']; 
	if($count>0){ echo json_encode(2); }
	else if($count==0){
	  $sql = "UPDATE aiqr 
	  SET aiqr_class_id=?,active=?,inactive=?,quit_rate=?,aiqr_date=?,date_updated=?
	  WHERE aiqr_id=?";
	  $q = $conn->prepare($sql);
	  $q -> execute(array($class,$active,$inactive,$quit_rate,$date,date("Y-m-d H:i:s"),$id));
	  echo json_encode(0); 		
	}
	
	  

}

catch(PDOException $x) {
echo json_encode(1); 		
}
$conn = null;             
?>    