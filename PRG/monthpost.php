<?php
$acno =$_POST["acno"] ;
$month= $_POST["month"] ;
$amtdeposit= $_POST["amtdeposit"];
$monthNum  = $month +1;
$monthName = date('F', mktime(0, 0, 0, $monthNum, 10));
$pbalance =$_POST["nbalance"];
$balance =$_POST["balance"] ;
$monthName =strtoupper($monthName) ;
$edate = date("Y-m-d", strtotime($_POST["edate"]));  

include '..\dbconn.php' ;
  $sql1="SELECT * FROM `transmonth` WHERE `acno` = $acno " ;
				$result=mysqli_query($conn,$sql1);
				{ 
$sql1="UPDATE `transmonth` SET  $monthName =1 WHERE `acno` = $acno " ; 

$result = mysqli_query( $conn, $sql1);
				}

				
				
		$sql1="SELECT * FROM `transaction`" ;
		$result=mysqli_query($conn,$sql1);
	$sql2 ="INSERT INTO `transaction`(`acno`, `paid`, `paiddate`, `paidmonth`,`pbalance`, `balance`) VALUES ($acno ,$amtdeposit,'$edate' , '$monthName' ,$pbalance, $balance )" ;
 	$result = mysqli_query( $conn, $sql2);
		$id = $conn->insert_id;
		$sql1="SELECT * FROM `student` WHERE `acno` = $acno" ;		
$sql1="UPDATE `student` SET balance = $balance WHERE `acno` = $acno " ; 
$result=mysqli_query($conn,$sql1);
if(! $result ) {
               die('Could not enter data: ' . mysqli_error());
            }
            
			{          
            $message="Record Enter Successfully" ;
			echo "<script> alert('$message');</script>";
			mysqli_close($conn);
				header ("location: monthpay.php" ) ;
				
					//echo '<a href="report1.php?id=$id&acno=$acno"> Print</a>'  ;
					}
?>

