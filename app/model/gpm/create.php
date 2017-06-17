<?php
try{

	include('../master/connect.php');

	$date =  date('Y-m-d', strtotime(str_replace('-', '/', $_POST['f_date'])));
	$gross = $_POST['f_gross'];
	$net = $_POST['f_net'];
	$gpm = ($net/$gross)*100;
	if($gpm>99.99)
		$gpm = 99.99;

    $year = date('Y');
    $year = substr($year,2,3);
    $id =uniqid('GM'.$year);    



	//validating
	$sql = "SELECT COUNT(*) as count
	FROM gpm 
	WHERE ( EXTRACT(YEAR_MONTH FROM gpm_date) = EXTRACT(YEAR_MONTH FROM ?) )
	AND gpm.status = 0";
	$q = $conn->prepare($sql);
	$q -> execute(array($date));
	$browse = $q -> fetchAll();
	foreach($browse as $fetch)
	  $count = $fetch['count']; 
	if($count>0){ echo json_encode(2); }
	else if($count==0){
	  $sql = "INSERT INTO gpm(gpm_id,gross,net,gpm,gpm_date,date_created) values(?,?,?,?,?,?)";
	  $q = $conn->prepare($sql);
	  $q -> execute(array($id,$gross,$net,$gpm,$date,date("Y-m-d H:i:s")));
	  echo json_encode(0); 		
	  $conn = null;	
	}


}

catch(PDOException $x) {
echo json_encode(1); 		
}
$conn = null;             
?>    
