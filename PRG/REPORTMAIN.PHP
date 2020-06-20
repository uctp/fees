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
 



<html>
<head>
<link rel="stylesheet" href="../css/styles1.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
   #leftbox { 
                float:left;  
                background: #ded2c1;
                width:400px;
                height:750px; 
				padding :5px;
				margin : auto ;
				border: 3px #e0d12d solid;
 				
            } 
            #middlebox{ 
                float:left;  
                background: orange; 
                width:0px;
                height:0px; 
				border : auto;
				padding :0px;
				border: 0px red solid;

            } 
            #rightbox{ 
                float:right; 
                background: #cdd4d2; 
                width:800px;
                height:750px; 
				padding :5px;
				border: 2px #36c79d solid;
 			 overflow: scroll;
            } 
            h3{ 
                color:red; 
                text-align:center; 
            } 
			#col{
				font-size: 18pt; 
				height: 50px; 
				width: 280px;
				align : left ;
			}
			#col1{
				font-size: 16pt; 
				height: 40px; 
				width:280px;
				margin : 10pt,10pt ;
				align :right ;
			}
			.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 114px 2px;
  background-color: #008CBA;
  margin-left:-900px;
  margin-top: 200px;
}
.starthidden {
    display: none;
  }
</style>
<script type="text/javascript"  src="/fees/jquery321.js"> 
<script  type="text/javascript" > 

$(document).ready(function(){
document.getElementById("dmonth").style.visibility = "hidden";
});
</script>
<script>
function fee() {
  var   tclass = $("#tclass1 option:selected").text();;
	 document.getElementById("tclass2").value =tclass ;
	 var ttclass = ($('#tclass2').val()).trim();
	 //alert (ttclass);
	
	 var ttmonth = $('#tmonth').val();
	//alert(month) ;
	$.ajax({
			url:"feenot.php",
			method:"post",
			data :{monthname:ttmonth,classname:ttclass } ,
			success:function(data)
			{
			// $('p').html(div_data);
			// alert(data) ;
			 
			 //var res = JSON.parse(data);
			//alert(res) ;
			$('#result').html(data);
				}
			
			
			
		});
	}
	
</script>
<script>
function feexl() {
  var   tclass = $("#tclass1 option:selected").text();;
	 document.getElementById("tclass2").value =tclass ;
	 var ttclass = ($('#tclass2').val()).trim();
	 //alert (ttclass);
	
	 var ttmonth = $('#tmonth').val();
	//alert(month) ;
	$.ajax({
			url:"feenotxl.php",
			method:"post",
			data :{monthname:ttmonth,classname:ttclass } ,
			success:function(data)
			{
			// $('p').html(div_data);
			// alert(data) ;
			 
			 //var res = JSON.parse(data);
			//alert(res) ;
			//$('#result').html(data);
				}
			
			
			
		});
	}
	</script>
<script>


	function tempfee() {
  var   tclass = $("#tempclass1 option:selected").text();;
	 document.getElementById("tempclass2").value =tclass ;
	 var ttclass = ($('#tempclass2').val()).trim();
	 //alert (ttclass);
	
	 //var ttmonth = $('#tmonth').val();
	//alert(month) ;
	$.ajax({
			url:"balance.php",
			method:"post",
			data :{classname:ttclass } ,
			success:function(data)
			{
			// $('p').html(div_data);
			// alert(data) ;
			 
			 //var res = JSON.parse(data);
			//alert(res) ;
			$('#result').html(data);
				}
			
			
			
		});
	}
</script>
<script>
function datecol() {
  var   startdate  = document.getElementById("startdate").value ;
	 var   enddate  = document.getElementById("enddate").value ;
	
	 var ttmonth = $('#tmonth').val();
	//alert(month) ;
	$.ajax({
			url:"datecollection.php",
			method:"post",
			data :{startdate:startdate,enddate:enddate } ,
			success:function(data)
			{
			// $('p').html(div_data);
			// alert(data) ;
			 
			 //var res = JSON.parse(data);
			//alert(res) ;
			$('#result').html(data);
				}
			
			
			
		});
	}
	
</script>
<script>
function stat() {
	var selind =($("select")[0].selectedIndex);
	if (selind==0) {
		document.getElementById("dmonth").style.display = "block"; 
		document.getElementById("tclass").style.display = "none"; 
		document.getElementById("tempclass").style.display = "none";
		document.getElementById("date").style.display = "none";
	}
			else if (selind==1){
			
			document.getElementById("dmonth").style.display = "none"; 
			document.getElementById("tclass").style.display = "block"; 
			document.getElementById("tempclass").style.display = "none";
			document.getElementById("date").style.display = "none";
			document.getElementById("tmonth").value='';
}
         else if (selind==2){
			document.getElementById("dmonth").style.display = "none"; 
			document.getElementById("tclass").style.display = "none";
			document.getElementById("date").style.display = "none";
			document.getElementById("tempclass").style.display = "block";
		}
		else if (selind==3){
			document.getElementById("dmonth").style.display = "none"; 
			document.getElementById("tclass").style.display = "none"; 
			document.getElementById("tempclass").style.display = "none";
			document.getElementById("tempclass2").value= "";
			document.getElementById("date").style.display = "none";
			document.getElementById("tempclass1").value= "";
			tempfee();
			} else
			{
			document.getElementById("dmonth").style.display = "none"; 
			document.getElementById("tclass").style.display = "none"; 
			document.getElementById("tempclass").style.display = "none";
			document.getElementById("date").style.display = "block";
			}
}
</script>
<script>
	function month() {
	var selind =($("select")[0].selectedIndex);
	var   month = $("#month option:selected").text();;
	 document.getElementById("tmonth").value =month ;
	if (selind==0) {
		document.getElementById("tclass").style.display = "block"; 
	}
			else {
			document.getElementById("tclass").style.display = "none"; 
}
		}
		
		</script>
		<script>
		function SetDate()
{
var date = new Date();

var day = date.getDate();
var month = date.getMonth() + 1;
var year = date.getFullYear();

if (month < 10) month = "0" + month;
if (day < 10) day = "0" + day;

var today = year + "-" + month + "-" + day;


document.getElementById('startdate').value = today;
document.getElementById('enddate').value = today;
}
</script>
</head>



<?php
		include '../dbconn.php' ;
		//include   'top.php' ;
		include 'menu.php';
		//include 'grno.php'; 
		include 'CLASS.php';
		// include 'getuser1.php';
		//include 'party.php';
		include 'transport.php';
		include 'concession.php';
		//include 'fetchfield.php' ;
      // $tclass1="" ;
	   $temp="" ;
	   $res="" ;
	   ?>
<?php
// $tclass1 = fopen("file.txt", "r") or die("Unable to open file!");
// $temp = fread($tclass1,filesize("file.txt"));
//  fclose($tclass1);
// echo $temp;
?>
 
  

    <body onload="SetDate()">  
        <div id = "boxes"> 
<fieldset>           
		   <legend style="font-size:28px; color:blue" >REPORT </legend>
              
            <div id = "leftbox"> 
	<label  for="Query" >REPORT</label>
	
<br>
<form action="datecollreport.php" method ="post"   id="form"   >
 <select  name="report" id="report"  style="font-size:18px;height:35;width:250" onclick="stat()" >

<?php
	
	?>
	<option value= 1>Fee Not Deposit </option>;
	<option value=2> Class wise Listing </option>
	<option value=3>Class Wise Balance </option>
	<option value=4> All Balance </option>
	<option value=5>Date Wise Collection </option>
	<?php
	
	
?>
</select> 

<div class="starthidden" id="dmonth" >
<select  name="month" id="month"  style="font-size:18px;height:35;width:250" onclick="month()" >

<?php
	
	?>
	<option value=''>--Select Month--</option>
    <option selected value='1'>January</option>
    <option value='2'>February</option>
    <option value='3'>March</option>
    <option value='4'>April</option>
    <option value='5'>May</option>
    <option value='6'>June</option>
    <option value='7'>July</option>
    <option value='8'>August</option>
    <option value='9'>September</option>
    <option value='10'>October</option>
    <option value='11'>November</option>
    <option value='12'>December</option>
	<?php
	
	
?>
</select> 

</div>
<div class="starthidden" id="tclass">
<select  name="tclass1" id="tclass1"   style="font-size:18px;height:35;width:250" onclick="fee()" >

	
 <?php
	$co1=0 ;
	while ($co1 <count($tclass)){
	?>
	<option value= "<?php echo $tclass1[$co1] ?>"  >   <?php echo $tclass1[$co1] ?> </option>;
	<?php 
	$co1 = $co1+1 ;
	}
?>
</select>
<br>
<br>
<a href = "javascript:;" onclick = "this.href='feenotxl.php?classname=' + document.getElementById('tclass2').value+ ',' +document.getElementById('tmonth').value ">Export to Excel</a>

</div>
<input type="hidden" name="tmonth" id="tmonth" />
<input type="hidden" name="tclass2" id="tclass2" />
<input type="hidden" name="tempclass2" id="tempclass2" />
<div class="starthidden" id="tempclass">
<select  name="tempclass1" id="tempclass1"   style="font-size:18px;height:35;width:250" onclick="tempfee()" >

	
 <?php
	$co1=0 ;
	while ($co1 <count($tclass)){
	?>
	<option value= "<?php echo $tclass1[$co1] ?>"  >   <?php echo $tclass1[$co1] ?> </option>;
	<?php 
	$co1 = $co1+1 ;
	}
?>
</select>

</div>
<div class="starthidden" id="date">
<br>
<input style="height:40;font-size:18" type="date" name="startdate" id="startdate" onchange="datecol()" />
<br>
<br>
<input style="height:40;font-size:18" type="date" name="enddate" id="enddate" onchange="datecol()"/>
</div>


</div>
 
		
		
  
            
              
            <div id = "rightbox"> 
			
		<div id="result" style="color:red; font-size="22px"> 
	 </div>	
<input type="hidden" name="id" id="id"  style="height:35;width:280;font-size:18px" READONLY>

     
				
				
            </div> 
              
            <div id = "middlebox"> 
               





 
 
 
 
 
</div>
      
 <!--- <form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit1">
</form>
 --->  
<button class="button" type="Submit" name="Submit" id="Submit" value="Submit" onclick="datecollreport.php" >Submit  </button>

	 		 	 




 


<!--end responsive-form-->

</div>
  
</form>



<!---{function myFunction() {
//	  var x1 = document.getElementById("result");
// var x2 = document.getElementById("fname");
 // x1.value= x2.value/2 ;
//}
 //document.getElementById("result").innerHTML = x1;
 // document.getElementById("result").value =  = "dfsdfsdf";
  // x1.value = x1.value.toUpperCase();
  // alert(x1.value) ;
-->

<?php
//include 'viewfee.php'; 
?>
</head>
</body >
</html>







