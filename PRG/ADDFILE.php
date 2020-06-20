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
<body>
 <style>
   table,   th, td {
        padding: 10px ;
        border: 2px solid red; 
		border-collapse : collapse ;
		margin : 3px;
		 }
.my
{
	font-size:12pt;
	height:30px;
	border : 1px solid blue;
	width: 85px;
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
  background-color: brown; /* green */
  border: none;
  color: white;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
   border-radius : 50%;
   margin-left: 1200px;
  	margin-top: 10px;
}
.button1 {
	background-color: red;
	border-radius: 8px;
	color: red;
	position: absolute;
  	top: 140%;
  	left: 170%;
	margin-left: -320px;
  	margin-top: -320px;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
   font-size: 16px;
   border-radius : 16px;
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
  // to conver the all values into 2 decimal point 
  function decimal(id) {
 var xx =	document.getElementById(id).value  ;
   var adm = Number(xx).toFixed(2);
document.getElementById(id).value = adm ;
// alert(document.getElementById(id).value);
}


</script>
<script>
function cal(){
	
    $("#tclass").change(function(){
     var selclass = $(this).children("option:selected").val();
	 selclass = selclass.split(",") ;
	//alert(selclass[0]) ;
	 
	  document.getElementById("position").value =selclass[1] ;
	  document.getElementById("tclass1").value =selclass[0] 


});
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

<div> 
<form action="add.php" method ="post"  id="form1" name="form1" >
<table >
 <tr> 
 <td  align="center"   colspan="9" style ="background-color: #FFFF66"  > 
 ADDING RECORDS 
 </td>
 </tr/
 <td> 
		<th>CLASS NAME    </th>
		<th>ADMISSION FEES :  </th>
		<th>ANNUAL CHARGES:</th>
		<th>TUITION FEES </th>
		<th> BOOKS CHARGES :</th>
		<th> STATIONARY CHARGES</th>
		<th>DIARY CHARGES</th>
		<th> EXAMINATION FEE</th>
		<th> MISC CHARGES :   </th>
		
		
		
	</tr>
<tr>
<td >

 <select  name="tclass" id="tclass"   class ="my1" onclick="cal()" >
	 <option value="" disabled selected>Class Name</option>
 <?php
	$co1=0 ;
	while ($co1 <count($tclass2)){
	?>
	<option value= "<?php echo  $tclass3[$co1] ?>" >   <?php echo $tclass2[$co1]?> </option>;
	<?php $co1=$co1+1;
	}
?>
	 
</select>
 </td>
 <td> 
<input type="number" name ="admfee" id="admfee"  placeholder="0.00"  min="0.00" max="999999.99" step=".01" onchange="decimal(id)" >
 </td>
	<td> 
<input type="number" name ="annualcharge" id="annualcharge" placeholder="0.00" min="0.00" max="999999.99" step=".01" value=0.00 onchange="decimal(id)">
 
<td> 
<input type="number" name ="tuitionfee" id ="tuitionfee"  placeholder="0.00" min="0.00" max="999999.99" step=".01" onchange="decimal(id)" REQUIRED>
 

 </td>
 <td> 
<input type="number" name ="bookcharge" id ="bookcharge"  placeholder="0.00" min="0.00" max="999999.99" step=".01" onchange="decimal(id)" >
 </td>
 <td> 
<input type="number" name ="stationary" id="stationary"  placeholder="0.00" min="0.00" max="999999.99" step=".01" onchange="decimal(id)" >
 </td>
 <td> 
<input type="number" name ="diary" id="diary" placeholder="0.00" min="0.00" max="999999.99" step=".01" onchange="decimal(id)" >
 </td>
 <td> 
<input type="number" name ="examfee" id="examfee" placeholder="0.00" min="0.00" max="999999.99" step=".01" onchange="decimal(id)" >
 </td>
 <td> 
<input type="number" name ="misccharge" id="misccharge" placeholder="0.00" min="0.00" max="999999.99" step=".01" onchange="decimal(id)" >
 </td>
</tr>
<tr>
<input type="hidden" name ="position" id="position" form="form1">
<input type="hidden" name ="tclass1" id="tclass1" form="form1">
 </table> 
 <button  class= "button"  onclick="add.php" type="submit" form="form1" name="Submit" id="Submit" value="Submit"> Submit  </button>
 
</form>
</div>


<?php
include 'viewfee.php'; 
?>
</head>
</body>
</html>
