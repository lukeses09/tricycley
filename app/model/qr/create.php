<?php
try{

	include('../master/connect.php');

	$date =  date('Y-m-d', strtotime(str_replace('-', '/', $_POST['f_date'])));
	$quit_rate = $_POST['f_quit_rate'];

    $year = date('Y');
    $year = substr($year,2,3);
    $id =uniqid('QR'.$year);    



	//validating
	$sql = "SELECT COUNT(*) as count
	FROM qr 
	WHERE ( EXTRACT(YEAR_MONTH FROM qr_date) = EXTRACT(YEAR_MONTH FROM ?) )
	AND qr.status = 0";
	$q = $conn->prepare($sql);
	$q -> execute(array($date));
	$browse = $q -> fetchAll();
	foreach($browse as $fetch)
	  $count = $fetch['count']; 
	if($count>0){ echo json_encode(2); }
	else if($count==0){
	  $sql = "INSERT INTO qr(qr_id,quit_rate,qr_date,date_created) values(?,?,?,?)";
	  $q = $conn->prepare($sql);
	  $q -> execute(array($id,$quit_rate,$date,date("Y-m-d H:i:s")));
	  echo json_encode(0); 		
	  $conn = null;	
	}


}

catch(PDOException $x) {
echo json_encode(1); 		
}
$conn = null;             
?>    