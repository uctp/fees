
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.mobile-container {
  max-width:100%;
  margin: auto;
  background-color: #2b96e3;
  height: 40px;
  color: #63a9db;
  border-radius: 10px;

}

.topnav {
  overflow: hidden;
  background-color: #ceede8;
  position: relative;
}

.topnav #myLinks {
  display: none;
}

.topnav a {
  color: #c22806;
  background:#089981 ;
  padding: 5px 10px;
  text-decoration: none;
  font-size: 20px;
  display: block;
}

.topnav a.icon {
  background: #bdd4f0;
  display: block;
  position: absolute;
  right: 0;
  top: 0;
}

.topnav a:hover {
  background-color: #ddd;
  color: blue;
  
}

.active {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
<?php

?>
<!-- Simulate a smartphone / tablet -->
<div class="mobile-container">

<!-- Top Navigation Menu -->
<div class="topnav">
  
  <a href="" class="active"><?php echo "PUBLIC SCHOOL" ?> </a>
 

  <div id="myLinks">
  <ul>
	<li>
	<a href="student.php">Add Student Information</a>
     
	 <a href="editstudent.php">EDIT</a>
	
	<a href="show.php">DISPLAY</a>
   
	<a href="monthpay.php">Pay Fees</a>
   <a href="addfile.php">Class Fee</a>
    </li>
	<li>
	<a href="classname.php">Add Class</a>
	<a href="addstation.php">Add Station for Transport</a>
	<a href="feeslip.php">Fee Slip </a>
    </li>
    <li>
   <a href="Reportmain.php">Report</a>
   </li>
    <li>
   <a href="query.php">Query</a>
   </li>
   <li>
   <a href="attendance.php">Attendance</a>
   </li>
   <li>
   <a href="logout.php">Logout</a>
   </li>
   </ul>
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<div style="padding-left:16px">
  
</div>

<!-- End smartphone / tablet look -->
</div>

<script>
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>

</body>
</html>
