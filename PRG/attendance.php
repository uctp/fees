<html>
<head>
<body>
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
 




<link rel="stylesheet" href="../css/styles1.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #4CAF50;
  color: white;
}

.round {
  border-radius: 50%;
}
</style>
   

<script type="text/javascript"  src="/fees/jquery321.js"> </script>
<script  type="text/javascript" > </script>
<script>

 function calend() {
   var month = document.getElementById("month").value ;
   var year = document.getElementById("year").value ;
	//alert("hello");
	 $.ajax({
			url:"calendar1.php",
			method:"post",
			data :{year:year , month:month},
			success:function(data)
			{
				
			// $('p').html(div_data);
			 //alert(data) ;
			 
			 //var res JSON.parse(data);
			 $('#result').html(data);
			 //var mb = data.split(",") ;
			
			
			}
			
			
			
		});
	}
 function mon() {
	  var month=document.getElementById("month").value ;
	   var year=document.getElementById("year").value ;

	  month = month*1 +1 ;
	  if (month==13)
	  {month=1 ;
        year=year*1+1 ;
	  }
	  document.getElementById("month").value=month ;
	  document.getElementById("year").value=year ;
	  calend();
 }
 function mon1() {
	  var month=document.getElementById("month").value ;
	   var year=document.getElementById("year").value ;

	  month = month*1 -1 ;
	  if (month==0)
	  {month=12 ;
        year=year*1-1 ;
	  }
	  document.getElementById("month").value=month ;
	  document.getElementById("year").value=year ;
	  calend();
 }
 function button(click) {
	 document.getElementById(click).value="A";
	 var x =click;
	  var acno=x.split(".");
	acno = acno[0] ;
	//alert(acno);
	var date= document.getElementById("date").value;
	//alert(date);
	$.ajax({
			url:"insertattend.php",
			method:"post",
			data :{acno:acno , date:date},
			success:function(data)
			{
				
			// $('p').html(div_data);
			 //alert(data) ;
			 
			 //var res JSON.parse(data);
			 // $('#result').html(data);
			 //var mb = data.split(",") ;
			
			
			}
			
			
			
		});
	}
 
 function SetDate()
{
var date = new Date();

var day = date.getDate();
var month = date.getMonth() + 1;
var year = date.getFullYear();

if (month < 10) month = "0" + month;
if (day < 10) day = "0" + day;

var today = year + "-" + month + "-" + day;


document.getElementById('date').value = today;
}
</script>


	</head>
<body onload="SetDate()">


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
	   $mon="6" ;
	   $year="2020" ;
	   ?>
<input type="hidden" id="month" value=<?php echo $mon ?> />
<input type="hidden" id="year" value=<?php echo $year ?> />
<input type="hidden" id="date" name="date" />
<a href='javascript: calend()' > Attendance </a>
<a href='javascript: mon1()' class="previous">&laquo; Previous</a>
<a href='javascript: mon()' class="next">Next &raquo;</a>

<a href='javascript: mon1()' class="previous round">&#8249;</a>
<a href='javascript: mon()' class="next round">&#8250;</a> 
 <br>
 
 
  
  <div id="result">
  </div>
    
        
</head>

</body>
</html>







