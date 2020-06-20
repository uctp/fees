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
                background: #ebe2da;
                width:600px;
                height:750px; 
				padding :1px;
				margin : auto ;
				border: 1px red solid;
 				
            } 
            #middlebox{ 
                float:left;  
                background: #ddebf0; 
                width:390px;
                height:750px; 
				border : auto;
				padding :1px;
				border: 1px red solid;

            } 
            #rightbox{ 
                float:right; 
                background: #e7f0dd; 
                width:300px;
                height:750px; 
				padding :1px;
				border: 1px red solid;
 			 
            } 
			.field_set{
 border-color:#F00;
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
  background-color: brown ; /* Green */
  border: none;
  color: white;
  padding: 15px ;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 114px 2px;
 
 margin-left: -800px;
  	margin-top: 250px;
	border-radius : 40% ;
}

.flip-card {
	float :right ;
  background-color: transparent;
  width: 300px;
  height: 750px;
 perspective: 1000px; 
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}
</style>
<script type="text/javascript"  src="/fees/jquery321.js"> 
<script  type="text/javascript" > 
str=0 ;
$(document).ready(function(){
 $("select.country").change(function(){
	var selectedClass = $(this).children("option:selected").val();
  	var xx.value = selectedClass ;
  
 
 
		});
});

</script>
<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"checkac.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				
			// $('p').html(div_data);
				$('#result').html(data);
			}
		});
	}
	
	$('#acno').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>
<script>

function my(){ 
$(document).ready(function(){
	
 $("select.country").change(function(){
	 var selectedClass = $(this).children("option:selected").val();
  	var str1 =   $( "#tclass option:selected" ).val();
  alert(str1);





								});
							});
				}
				 function getDate(){ 
	    //var today = new Date();
   // document.getElementById("dateofbirth").value = today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);
//alert(dateofbirth);
}
</script>
<script>
function showHint(str) {
	
    if (str.length == 0) {
        document.getElementById("temp_class").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
             if (this.readyState == 5 && this.status == 200) {
              document.getElementById("str").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "getuser1.php?q=" + str, true);
        xmlhttp.send();
		
		gval();
		total() ;
    }
}
function gval(){
	// alert("Welcome");
	// this function will give all the initial value according to class
	var inputVal = document.getElementById("tclass").value;
        //up.innerHTML = 'Click on the button to convert whole document to string'; 
  
           var res = inputVal.split(",");
		   // alert(res[1]*1+res[2]*1) ;
        	
			document.getElementById("admfee").value=parseFloat(res[1]).toFixed(2);
			document.getElementById("annual").value=res[2];
			document.getElementById("tuition").value=res[3];
			document.getElementById("bookcharge").value=res[4];
			document.getElementById("stationarycharge").value=res[5];
			document.getElementById("diarycharge").value=parseFloat(res[6]).toFixed(2);
			document.getElementById("examcharge").value=res[7];
			document.getElementById("misccharge").value=res[8];
			document.getElementById("temp_class").value= res[0] ;
			var tempclass = document.getElementById("temp_class").value ;
			//alert(res[4]) ;
			// alert(tempclass); 
			}
</script>
<script>
function stat() {
	var opt = tstation.options[tstation.selectedIndex];
      var opt1 = opt.value;
	  var opt2 =opt1.split(",") ;
	  
	  document.getElementById("charges").value = opt2[1] ;
//        opt3.value = opt2[1];
		document.getElementById("station").value= opt2[0];
		//alert(document.getElementById("charges").value);
	  total() ;
}
</script>
<script>	
function oldnew() {
	var optnewold = newold.options[newold.selectedIndex];
	
	document.getElementById("txtnewold").value=optnewold.value ;
	
	if (txtnewold.value=="Old") {
		document.getElementById("admfee").value=parseFloat(0).toFixed(2) ;
	}
	else {
		gval() ;
	}
	//alert(document.getElementById("admfee").value);
	total();
}
</script>
<script>
function concess() {
	var sopt = tconcession.options[tconcession.selectedIndex];
      var sopt1 = sopt.value;
	  var sopt2 =sopt1.split(",") ;
	  	  
	  var sopt3
	  sopt3 = sopt2[1];
	   sopt3.value  = sopt3 ;
	   document.getElementById("concession1").value = sopt2[1] ;
	   document.getElementById("concession").value = parseFloat(sopt3).toFixed(2) ;
	   
	   total() ;
	}
	
function total(){
	
	var admfee=document.getElementById('admfee').value ;
	var concession1=document.getElementById('concession1').value;
var annual=document.getElementById('annual').value;
var tuition =document.getElementById('tuition').value;
var bookcharge=document.getElementById('bookcharge').value;
var stationarycharge=document.getElementById('stationarycharge').value;
var diarycharge=document.getElementById('diarycharge').value ;
var misccharge=document.getElementById('misccharge').value;
var examcharge =document.getElementById('examcharge').value;
var charges =document.getElementById('charges') .value ;
var splconcession =document.getElementById('splconcession').value ;
var net =document.getElementById('net').value ;
var balance = document.getElementById('balance').value ; 
	//splconcession =0 ;
	//splconcession = parseFloat(splconcession).toFixed(2);
	var gtotal  ;
	 gtotal  = (admfee*1 +annual*1 +tuition*1 + bookcharge*1 + stationarycharge*1 +diarycharge*1 + misccharge*1  ) ;
	 var disc ;
	 disc= 0 ;
	 if (concession1 ==1)  
		disc = 0 ;
	 else {
		disc = parseInt(( gtotal*concession1*1)/100) ; 
		document.getElementById('concession').value = disc ;
	 }
	 gtotal = gtotal  +charges*1 ; 
	 net  = (gtotal +balance*1) - (disc + splconcession*1) ;
	 document.getElementById("total").value = parseFloat(gtotal).toFixed(2);
	 document.getElementById("net").value = parseFloat(net).toFixed(2);
	 document.getElementById('concession').value = disc.toFixed(2) ;
	 document.getElementById('splconcession').value = splconcession ;
	 
}
function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(100)
                        .height(100);
						
						
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
<script>
    $(document).ready(function(){
        $('input[type="file"]').change(function(e){
            var fileName = e.target.files[0].name;
            
			document.getElementById("file").value= fileName ;
			//alert('The file "' + fileName +  '" has been selected.');
        });
    });
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
      // $tclass1="" ;
	   $temp="" ;
	   ?>
<?php
// $tclass1 = fopen("file.txt", "r") or die("Unable to open file!");
// $temp = fread($tclass1,filesize("file.txt"));
//  fclose($tclass1);
// echo $temp;
?>
 
  

    <body>  
	
        <div id = "boxes"> 
		<fieldset class="field_set">  
            <legend style="font-size:28px; color:blue" >Student Informations:(Adding New Records)</legend>
              
            <div id = "leftbox"> 
			
			
	<form action="upload2.php" method="post" enctype="multipart/form-data"  id='uploadImage' >
				<input style="width:400; align:right;font-size:18px" type='file' name="photo" id="photo" onchange="readURL(this)" fotm='uploadImage'/>
				<img style=" border-radius: 50%; text-align:center;width:100;height:100" id="blah" src="#" alt="your image" form="uploadImage"/>
				<input type="submit" name="submit" value="Upload" onclick="upload2.php" id='uploadImage' style="font-size:18px" />
	</form>
 <div style="color:red; font-size:20" id='msg'>
 </div>
		
		<!-- including upload.js script --> 
		<script src='upload.js'></script>
		
<form action="addstudent.php" method ="post"   id="form1" id=''  >
  
 <select  name="tclass" id="tclass"  onclick="showHint(this.value)" style="font-size:18px;height:35;width:250" required >

	<option value="" disabled selected>Choose Class Name</option>
 <?php
	$co1=0 ;
	while ($co1 <count($tclass)){
	?>
	<option value= "<?php echo $tclass[$co1] ?>" >   <?php echo $tclass1[$co1] ?> </option>;
	<?php $co1=$co1+1;
	}
?>
</select>
<!--- 
 
	<label for="image " style="font-size :14px; align:right" >Select image to upload:</label> 
    <input type="file" name="fileToUpload" id="fileToUpload" onchange ="upload.php">
    <input type="submit" value="Upload Image" name="input" onclick="upload.php">

</div>
</div id="txtHint">	 -->
<input type="hidden" id="temp_class" name="temp_class"> 
<br>
<br>			
		<label for="ACCOUNT NO"   >ACCOUNT NO </label> 
  
  <br>
  <input type="number" name ="acno" id="acno" placeholder="ACCOUNT NO" style="height:35;width:250;font-size:18px" required autocomplete="off">
    e<option> New </option>
	<option > Old </option>
	</select>
	<input type="hidden" name="txtnewold" id="txtnewold" />
 	<div id=result style="color :red; font-size :28" > </div>
	 <br>
	 	 			<label for="STUDENT NAME" style="font-size="14px"; ";>STUDENT NAME </label> 
<br>
<input type="text" name="name" id="name"  placeholder="STUDENT NAME *" style="height:35;width:250;font-size:18px" autocomplete="off" required>
<label for="GENDER" style="font-size="18px">GENDER </label> 
<input type="radio" name="gender"  value="Male" required >Male
  <input type="radio" name="gender"  value="Female"  >Female
  <input type="radio" name="gender"  value="Other" >Other  
  <!-- <span class="error">* <?php echo $genderErr;?></span>
-->
<br>
<br>
<label for="date of birth" style="font-size="18px">DATE OF BIRTH</label> 
<br>
<input  type="date" name="dateofbirth" id="dateofbirth" placeholder="DATE OF BIRTH "style="height:35;width:250; font-size:18px" onchange="getDate()">
<br>
<br>


<label for="date of JOINING" style="font-size="14px">DATE OF JOINING </label>


<br>
<input type="date" name="dateofjoining" id="dateofjoining" placeholder="DATE OF JOINING " style="height:35;width:250;font-size:18px ">

<br>
<br>
<label for="FATHER'S NAME" style="font-size="14px">FATHER'S NAME</label>

<br>
<input type="text" name="fathername" id="fathername" placeholder="FATHER'S NAME" style="height:35;width:250;font-size:18px" autocomplete="off" required >

<br>
<br>

<label for="MOTHER'S NAME" style="font-size="14px">MOTHER'S NAME</label>
<br>
<input type="text" name="mothername" placeholder="MOTHER'S NAME" style="height:35;width:250;font-size:18px"autocomplete=off >
<br>
<br>
<label for="MOBILE NO" style="font-size="14px">MOBILE NUMBER</label>
<br>
<input type="text" name="mobileno" id="mobileno" placeholder="MOBILE NUMBER" style="height:35;width:250;font-size:18px" autocomplete=off>
	
            </div>  
         <div id = "middlebox"> 
		 
                TRANSPORT  <br>
 <select  name="tstation" id="tstation"  style="font-size:18px;height:35;width:250" onclick="stat()" required>
<!-- onchange="showHint(this.value)" --->
	<option value="" disabled selected>Transport Route</option>
	
 <?php
	$co1=0 ;
	while ($co1 <count($tstation2)){
	?>
	<option value= "<?php echo $tstation2[$co1] ?>" >   <?php echo $tstation[$co1] ?> </option>;
	<?php $co1=$co1+1;
	}
?>
</select> 
<input  type="hidden"  name="station" id="station"  readonly />

<br>
<br>
<label for="TRANSPORT CHARGES" >TRANSPORT CHARGES</label>
<br>
<input  type="text" name="charges" id="charges" value= "0.00" style="height:35;width:250;font-size:22;" readonly >
<br>
<br>
<label for="TOTAL" >TOTAL</label>
<br>
<input  type="text" name="total" id="total" value= "0.00" style="height:35;width:250;color:red;font-size:28;" readonly >
<br> 
<br> 
  CONCESSION:  
  <br>
 <select   name="tconcession" id="tconcession"  style="font-size:18px;height:35;width:250" onclick="concess()" required >
<!-- onchange="showHint(this.value)" --->
	<option value="" disabled selected>Scholarship/Concession</option>
 <?php
	$co1=0 ;
	while ($co1 <count($tconcession)){
	?>
	<option value= "<?php echo $tconcession2[$co1] ?>" >  <?php echo $tconcession[$co1] ?> </option>;
	<?php $co1=$co1+1;
	}
?>
</select> <br>
      <br>  
<label for="CONCESSION" >B/S/STAFF CONCESSION:</label>
<br>
<input  type="text" name="concession" id="concession" value= "0.00" style="height:35;width:250;font-size:22;" readonly >
<input type="hidden" name="concession1" id="concession1" value="0.00" >
<br>
<br>  
<label for="CONCESSION" >SPECIAL CONCESSION:</label>
<br>
<input  type="text" name="splconcession" id="splconcession" value="0.00" PLACEHOLDER ="" style="height:35;width:250;font-size:22;align:left" onkeyup="concess()" autocomplete=off  >
<br>
<br>  
<label for="balance" >PREVIOUS BALANCE :</label>
<br>
<input type="text" name="balance" id="balance" value="0.00"  style="height:35;width:250;font-size:22;align:left;" onkeyup="concess()" autocomplete="off" > 
<br>
<br>
<label for="net" >NET PAYABLE</label>
<br>
<input type="hidden" name="file" id="file" >
<input  type="text" name="net" id="net" value= "0.00" style="height:35;width:250;color:red;font-size:28;" readonly >
<br>  
</div>
		 <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
            <div id = "rightbox"> 
			
				<label for="ADMISSION FEE" >ADMISSION FEE</label>
				<br>
				<input type="text" name="admfee" id="admfee" value="0.00" min="0.00" max="999999.99" step="0.01" style="height:35;width:200;color:red;font-size:22;" readonly required > 
				<br>
				<br>
				<label for="ANNUAL CHARGE" >ANNUAL CHARGES</label>
				<br>
				<input type="text" name="annual" id="annual" value= "0.00" style="height:35;width:200;color:red;font-size:22;" readonly >
				<br>
				<br>
				<label for="TUITION FEE" >TUITION FEE</label>
				<br>
				<input type="text" name="tuition" id="tuition" value= "0.00" style="height:35;width:200;color:red;font-size:22;" readonly >
				<br>
				<br>
				<label for="BOOK CHARGES" >BOOK CHARGES</label>
				<br>
				<input type="text" name="bookcharge" id="bookcharge" value= "0.00"style="height:35;width:200;color:red;font-size:22;" readonly  >
				<br>
				<br>
				<label for="STATIONARY CHARGES" >STATIONARY CHARGES</label>
				<br>
				<input type="text" name="stationarycharge" id="stationarycharge" value= "0.00" style="height:35;width:200;color:red;font-size:22;" readonly >
				<br>
				<br>
				<label for="DIARY CHARGES" >DIARY CHARGES</label>
				<br>
				<input type="text" name="diarycharge" id="diarycharge" min="0.00" max="0.00" value= "0.00" style="height:35;width:200;color:red;font-size:22;" readonly >
				<br>
				<br>
				<label for="EXAM FEES" >EXAM FEES</label>
				<br>

				<input type="text" name="examcharge" id="examcharge" value= "0.00" style="height:35;width:200;color:red;font-size:22;" readonl >
				<br>
				<br>
				<label for="MISC CHARGES" >MISC CHARGES</label>
				<br>
				<input type="text" name="misccharge" id="misccharge" value= "0.00" style="height:35;width:200;color:red;font-size:22;" readonl ></div>
	</div> 		 	 
 <div class="flip-card-back">
      <h1>Developed by</h1> 
      <p>N.K.Khurana</p> 
      <p>More Query Contact 9996131351</p>
    </div>
  </div>
</div>
     
				
				
            </div> 
              
            
      
 <!--- <form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit1">
</form>
 --->  
 
<button class="button" type="Submit" name="Submit" id="Submit" value="Submit" onclick="addstudent.php" >Submit  </button>

	 		 	 




 




  

<fieldset>
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


<?php
//include 'viewfee.php'; 
?>
</head>
</body>
</html>
