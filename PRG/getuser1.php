
<?php
$q = INTVAL($_GET['q']) ;
// echo ($q); 
include "../dbconn.php" ; 
if (!$conn) {
  die('Could not connect: ' . mysqli_error($conn));
  ?>
  <script> alert("could not conect") ; </script> 
<?php
}
// WHERE class_name = '".$q."'
//$sql = "SELECT * FROM classname WHERE class_name = "1st" ";
//	$result = mysqli_query( $conn, $sql);


 

$sql="SELECT * FROM class_wise where class_name = $q+1";
//$annual=88273;  
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result))  {
 //echo $row["adm_fee"]; 
 // $$id = $row['id'];
 
$tclass1 = $row['class_name'] .",". + $row['adm_fee'] .",". $row['annual_charge'].",". $row['tuition_fee'].",". $row['book_charge'] .",". $row['stationary_charge'] .",". + $row['diary_charge'] .",". $row['exam_charge'] ."," . $row['misc_charge'] ;
	// $tuition_fee = $row['tuition_fee'];
//$tclass1 = $tclass . " ".  $tclass1 ;
$temp = $tclass1 ; 
}

 

// Encoding array in JSON format
echo 
echo json_encode($temp);

$myfile = fopen("file.txt", "w") or die("Unable to open file!");
fwrite($myfile, $tclass1);
fclose($myfile);
$tclass1 = fopen("file.txt", "r") or die("Unable to open file!");
$temp = fread($tclass1,filesize("file.txt"));
fclose($tclass1);
Mysqli_close($conn);
?>
