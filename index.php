<?php
session_start();{
$_SESSION['views'] = 1; 
$_SESSION['schoolname'] = "Public School"; 
$_SESSION['line1'] = "Railway Road, Palwal";
}
?>

<html>
<head>
<title>User Login</title>
</head>
<body>

<?php

	
if(isset($_SESSION["username"])) {
	
?>
Welcome <?php echo $_SESSION["username"]; ?>. Click here to <a href="logout.php" title="">Logout
<?php
header("location:../fees/prg/menu.php");
}else 
{//echo "<h1>Please login first .</h1>";

?>
<a Click here to <a href="login.php" title="Login">
<h2>Please Login First Image</h2>
<img src="./image/school.jpg" alt="Trulli" width="700" height="550">
<?php
}
?>

</body>
</html>