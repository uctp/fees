<?php
session_start();
$_SESSION['views'] = 1 ;
$message="";
if(count($_POST)>0) {
 // $con = mysqli_connect('127.0.0.1:3306','root','','admin') or die('Unable To connect');
include "dbconn.php" ;
$result = mysqli_query($conn,"SELECT * FROM users WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row[user_id];
$_SESSION["username"] = $row[username];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["id"])) {
header("Location:index.php");
}
else 
	echo $message ;
?>
<html>
<head>
<title>User Login</title>
<style>
.box {
    width:345px;
    height:200px;
    background-color:##99CC00;
    border : 0px ;
    margin-left:-150px; /* half of width */
    margin-top:-150px;  /* half of height */
    top:70%;
    left:50%;
}
</style>
<form method="POST" action = "login.php" >
<table class="box"      bgcolor="#99CC00">
<tr> 
<th height="50" colspan="2"> Login Form  </th>
</tr>
<tr>

<th height="50" width ="40" >User Name</th>

<td><input type="text " name="username" required /></td>

</tr>

<tr>

<th height="40">Passowrd</th>

<td><input type="password" name="password"  required /></td>

</tr>

<tr>

<th height="39" colspan="2"> <input type="submit" name="Login" value="Login " >
</th>

</tr>

</table>
</form>
</body>
</head>
</html>