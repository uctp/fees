<?php 
session_start() ;
// echo "RAJDHANI EXPRESS ".$_SESSION["company"];
				// $compname = $_SESSION['company'];
				//$fileno =$_SESSION['file'] ;
				// $file ="file". $fileno ;
				//$party ="party".$fileno ;
				//$truck ="truck".$fileno ;
				// $station ="station".$fileno ;

// include 'menu.php' ;
//echo "RAJDHANI EXPRESS               [ ".  $compname. " ]  "  ;
// echo  "<br>" ;

?>
 

<!DOCTYPE html>
<html>
<head>
<body onload="getDate()">
 <style>
   table,   th, td {
        padding: 10px ;
        border: 2px solid red; 
		border-collapse : collapse ;
		margin : 3px;
		 
		 }
.my
{
	font-size:18pt;
	height:30px;
	border : 1px solid blue;
	width: 300px;
		}	
	.my1
{
	font-size:12pt;
	height:30px;
	border : 1px solid blue;
	width: 165px;
	}	
	 .my2
{
	font-size:12pt;
	height:30px;
	border : 1px solid blue;
	width: 98px;
	}
	.my4
{
	font-size:12pt;
	height:30px;
	border : 1px solid blue;
	width: 70px;
	}
.my6
{
	font-size:12pt;
	height:30px;
	border : 1px solid blue;
	width: 128px;
	}	
	
.my5
{color: RED ;
	font-size:12pt ;
	font-color : blue ;
	font-weight: bold ;
	height:30px;
	border : 1px solid blue;
	width: 95px;
	background-color:#72A4D2 ; 
	}		
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  position: absolute;
  	top: 40%;
  	left: 40%;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button1 {
	background-color: #008CBA;
	border-radius: 8px;
	color: red;
	position: absolute;
  	top: 140%;
  	left: 70%;
	margin-left: -320px;
  	margin-top: -320px;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
   font-size: 16px;
}
div {
  border-radius: 5px;
  background-color: light blue;
  padding: 10px;
 }
</style>
	<script  type="text/javascript"  src="/fees/jquery321.js"> </script>
<script  type="text/javascript" > 
 
</script>
<script>
var input = document.getElementById("form1");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("Submit").click();
  }
});
</script>
	<script>
	function getDate(){ 
	    var today = new Date();

document.getElementById("tdate").value = today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);
}



	function gohome()
{
window.location.href="../prg/frame.html"
}

	</script>
	
<?php
		include '../dbconn.php' ;
		//include   'top.php' ;
		include 'menu.php';
		//include 'grno.php'; 
		include 'CLASS.php';
		include 'class1.php'
		//include 'party.php';
		//include 'station.php';
        
?>
<?php
include 'viewclass.php';
?>
<div> 
<form action="classadd.php" method ="post"  id="form1" name="form1" onload="getDate()">

<table >
 <tr> 
 <td  align="center"   colspan="2" style ="background-color: #FFFF66"  > 
 ADDING RECORDS 
 </td>
 </tr/
 <td> 
		<th>CLASS NAME    </th>
		<th> POSIITION </th>
		
		
		
	</tr>
<tr>
<td>
<input class="my" type="text" id="classname" name ="classname" >
 </td>
 <td>
 <input class="my" type="text" id="position" name ="position" >
 </td>
	 

 
 
</tr>


 </table> 
 <button  class= "button"  onclick="classadd.php" type="submit" form="form1" name="Submit" id="Submit" value="Submit">Submit  </button>
 
</form>
</div>



</head>
</body>
</html>
