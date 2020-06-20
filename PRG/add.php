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
$tclass= $_POST["tclass1"];
$position = $_POST["position"] ;
$admfee = $_POST["admfee"];
$annual = $_POST["annualcharge"];
$tuition = $_POST["tuitionfee"];
$bookcharge =$_POST["bookcharge"];
$stationary=$_POST["stationary"];
$diary = $_POST["diary"];
$misc = $_POST["misccharge"];
$examfee =$_POST["examfee"];
echo ("CLASS" ."$tclass") ;
echo ("ADD" ."$admfee") ; 
echo ("annual" . "$annual");
echo ("position" ."$position");
include '..\dbconn.php' ;
  $sql1="SELECT * FROM class_wise where `class_name`= '$tclass'" ;
				$result=mysqli_query($conn,$sql1);
				$row_cnt = $result->num_rows;
				if  ($row_cnt>0)  
				{ ?> <script>
			     alert("This class  Alreay Exist !");
				 window.history.back();
				 </script>
				<?php }
					else
					// echo "dhhdhhhds" ;	
					{ 	
	$sql1 = "INSERT INTO  `class_wise`  (`class_name` , `adm_fee`,`annual_charge`, `tuition_fee`,`book_charge`, `stationary_charge`,`diary_charge`, `misc_charge`, `exam_charge` , `position`) VALUES ('$tclass',$admfee , $annual ,$tuition,$bookcharge,$stationary, $diary, $misc, $examfee, $position)";
			//		$sql1 = "INSERT INTO  `class_wise`  (`class_name` , `adm_fee`,`annual_charge`, `tuition_fee`,`book_charge`, `stationary_charge`,`diary_charge`, `misc_charge`,`exam_charge` VALUES ('$tclass',$admfee , $annual ,$tuition,$bookcharge,$stationary, $diary, $misc,$examfee )";
	// $dd= `adm_fee`, `annual_charge`, `tuition_fee`,`book_charge`, `stationary_charge`,`diary_charge`, `misc_charge`,`exam_charge` VALUES ('tclass',$admfee , $annual ,$tuition,$bookcharge,$stationary, $diary, $misc,$examfee )"; 			
	// $sql = "INSERT INTO `file1`(`grno`, `date`, `party`, `station`) VALUES ($grno,'$date','$party','$station')";
	$result = mysqli_query( $conn, $sql1);
	//echo "<select name='partyname'>";
if(! $result ) {
               die('Could not enter data: ' . mysqli_error());
            }
            
			            echo "Entered data successfully\n";
            //$message = '<div style="text-align: center;>The username or password you entered are not good.</div>';
            $message="Record Enter Successfully" ;
			echo "<script> alert('$message');</script>";
			mysqli_close($conn);
					header ("location: addfile.php" ) ;}
?>
