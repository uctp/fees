<?php
	
	// Create connection
	include '../dbconn.php' ;
	$sql = "SELECT * FROM class_wise order by position  ASC";
	$result = mysqli_query( $conn, $sql);
	//echo "<select name='partyname'>";
$tclass1 = array();
$tclass = array();
$temp = array();
$tclass = array() ;
// $c=0;
 while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
// for($i = 0; $tclass[$i] = mysqli_fetch_assoc($result); $i++) ;
$tclass1[] = $row['class_name'] ;
// $tclass[] = $row['class_name'] ;
$tclass[] = $row['class_name']. ",". + $row['adm_fee'] .",". $row['annual_charge'].",". $row['tuition_fee'].",". $row['book_charge'] . "," . $row['stationary_charge'] . ",". + $row['diary_charge'] . "," . $row['exam_charge'] ."," . $row['misc_charge'] ;
$temp[] = $row['class_name']. ",". + $row['adm_fee'] .",". $row['annual_charge'].",". $row['tuition_fee'].",". $row['book_charge'] . "," . $row['stationary_charge'] . ",". + $row['diary_charge'] . "," . $row['exam_charge'] ."," . $row['misc_charge'] ;

//." " .$row['annual_charge'];
// $c=$c+1 ; 
// echo $row['$result'] ;
 }
 
Mysqli_close($conn);
?>
