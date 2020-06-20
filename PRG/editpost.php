<?php 
session_start() ;
// echo "RAJDHANI EXPRESS ".$_SESSION["company"];
				// $compname = $_SESSION['company'];
				// $fileno =$_SESSION['file'] ;
				// $file ="file". $fileno ;
				// $party ="party".$fileno ;
				// $truck ="truck".$fileno ;
				// $station ="station".$fileno ;

// include 'menu.php' ;
				//echo "RAJDHANI EXPRESS               [ ".  $compname. " ] . $file "  ;
echo  "<br>" ;

?>
<?php
$acno = $_POST["acno"];
$dateofbirth =$_POST["dateofbirth"];
// $orgDate = "17-07-2012";  
$ndateofbirth = date("Y-m-d", strtotime($dateofbirth));  
// echo $ndateofbirth ;
$dateofjoining = $_POST["dateofjoining"];

$ndateofjoining = date("Y-m-d", strtotime($dateofjoining));  

$name = $_POST["name"] ;
$fathername = $_POST["fathername"];
$mothername = $_POST["mothername"] ;
$mobileno =$_POST["mobileno"];
// $status = 1 ;
// this will be taken 
//$classname= $_POST["tclass1"];
$admfee = $_POST["admfee"];
$annual = $_POST["annual"];
$tuition = $_POST["tuition"];
$bookcharge =$_POST["bookcharge"];
$stationary=$_POST["stationarycharge"];
$diary = $_POST["diarycharge"];
$misc = $_POST["misccharge"];
$examfee =$_POST["examcharge"];
$charges = number_format($_POST["charges"],2) ;
$station = $_POST["station"];
$concession = number_format($_POST["concession1"],2) ;
$splconcession = number_format($_POST["splconcession"],2) ;
$gender = $_POST["gender"] ;
$file = $_POST["file"] ;
$balance = $_POST["balance"] ;
//$file = $_files["file"];
// echo ($file);
// sleep(10);
include '..\dbconn.php' ;
  $sql1="SELECT * FROM `student` where `acno`= '$acno'" ;
				// $result=mysqli_query($conn,$sql1);
				
$sql1="UPDATE  `student` SET `acno` = $acno ,`date_of_birth`='$ndateofbirth' , `date_of_joining` ='$ndateofjoining' ,`name`= '$name' , `gender` ='$gender' ,`father_name` ='$fathername' ,`mother_name`='$mothername',`mobile_no` ='$mobileno' ,`station` = '$station',`transport`=$charges,`concession`=$concession ,`spl_concession` =$splconcession ,`filename` = '$file' ,`balance` =$balance, `status`=1 WHERE `acno` ='$acno'";
//,`spl_concession`,`filename`,`balance`, `status` ) 
//,$charges,$concession,$splconcession,'$file',$balance,1)" ;  

// `mobile_no`,`class_name`,`transport`,`concession`,`spl_concession`, `concession`,`status`
//  '$tclass',$charges, $concession,$splconcession,1 )";
//$sql1="INSERT INTO `student` ( `stat` ) VALUES(1)";

	//		$sql1 = "INSERT INTO  `class_wise`  (`class_name` , `adm_fee`,`annual_charge`, `tuition_fee`,`book_charge`, `stationary_charge`,`diary_charge`, `misc_charge`,`exam_charge` VALUES ('$tclass',$admfee , $annual ,$tuition,$bookcharge,$stationary, $diary, $misc,$examfee )";
		
		 $result = mysqli_query( $conn, $sql1);
if(! $result ) {
               die('Could not enter data: ' . mysqli_error());
            }
            
			            echo "Entered data successfully\n";
            //$message = '<div style="text-align: center;>The username or password you entered are not good.</div>';
            $message="Record Enter Successfully" ;
			echo "<script> alert('$message');</script>";
			mysqli_close($conn);
					header ("location: editstudent.php" ) ;
?>
