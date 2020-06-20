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
$classname= $_POST["temp_class"];
$admfee = $_POST["admfee"];
$annual = $_POST["annual"];
$tuition = $_POST["tuition"];
$bookcharge =$_POST["bookcharge"];
$stationary=$_POST["stationarycharge"];
$diary = $_POST["diarycharge"];
$misc = $_POST["misccharge"];
$examfee =$_POST["examcharge"];
$station = $_POST["station"];
$charges = number_format($_POST["charges"],2) ;
$concession = number_format($_POST["concession1"],2) ;
$splconcession = number_format($_POST["splconcession"],2) ;
$gender = $_POST["gender"] ;
$file = $_POST["file"] ;
$balance = $_POST["balance"] ;
$newold = $_POST["txtnewold"];
//$file = $_files["file"];
echo ($file);
include '..\dbconn.php' ;
  $sql1="SELECT * FROM `student` where `acno`= '$acno'" ;
				$result=mysqli_query($conn,$sql1);
				$row_cnt = $result->num_rows;
				if  ($row_cnt>0)  
				{ ?> <script>
			     alert("This Account No Alreay Exist !");
				javascript:history.back();
				 </script>
				<?php }
					else
					// echo "dhhdhhhds" ;	
					{ 	
$sql1="INSERT INTO `student` (`acno`,`date_of_birth`, `date_of_joining`,`name`,`gender`,`father_name`,`mother_name`,`mobile_no`,`class_name`,`station`,`transport`,`concession`,`spl_concession`,`filename`,`balance`, `status`,`newold` ) VALUES( $acno,'$ndateofbirth','$ndateofjoining','$name','$gender','$fathername','$mothername','$mobileno', '$classname','$station',$charges,$concession,$splconcession,'$file',$balance,1,'$newold')" ;
  

// `mobile_no`,`class_name`,`transport`,`concession`,`spl_concession`, `concession`,`status`
//  '$tclass',$charges, $concession,$splconcession,1 )";
//$sql1="INSERT INTO `student` ( `stat` ) VALUES(1)";

	//		$sql1 = "INSERT INTO  `class_wise`  (`class_name` , `adm_fee`,`annual_charge`, `tuition_fee`,`book_charge`, `stationary_charge`,`diary_charge`, `misc_charge`,`exam_charge` VALUES ('$tclass',$admfee , $annual ,$tuition,$bookcharge,$stationary, $diary, $misc,$examfee )";
		
		$result = mysqli_query( $conn, $sql1);
$sql1="SELECT * FROM `transmonth`";
$result=mysqli_query($conn,$sql1);
$sql1 = "INSERT INTO `transmonth` (`acno`) VALUES ($acno) " ;
$result = mysqli_query( $conn, $sql1);
if(! $result ) {
               die('Could not enter data: ' . mysqli_error());
            }
            
			            echo "Entered data successfully\n";
            //$message = '<div style="text-align: center;>The username or password you entered are not good.</div>';
            $message="Record Enter Successfully" ;
			echo "<script> alert('$message');</script>";
			mysqli_close($conn);
					header ("location: student.php" ) ;}
?>
