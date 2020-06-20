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
$tclass= $_POST["classname"];
$position = $_POST["position"];

include '..\dbconn.php' ;
  $sql1="SELECT * FROM classname WHERE `class_name`='$tclass'" ;
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
	$sql1 = "INSERT INTO  `classname`  (`class_name`, `position` ) VALUES ('$tclass',$position)";
		
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
					header ("location: classname.php" ) ;}
?>
