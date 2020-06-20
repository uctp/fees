<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Filterable Table</h2>
<p>Type something in the input field to search the table for first names, last names or emails:</p>  
<input id="myInput" type="text" placeholder="Search..">
<br><br>

<table>
  <thead>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Email</th>
  </tr>
  </thead>
  <tbody id="myTable">
  <?php
include "../dbconn.php" ;
$sql = "SELECT * FROM class_wise WHERE class_name= myInput";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
?>    
<div id="id01" class="w3-panel w3-green w3-display-container" style="display:none">
  <span onclick="this.parentElement.style.display='none'"
  class="w3-button w3-red w3-display-topright">x</span>
   	
<table>		

 <tr> 
 <td  align="center"   colspan="9" style ="background-color: #FFFF66"  > 
 SHOWING RECORDS 
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

      <?php      
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                
              
             echo "<td>" . $row['class_name'] . "</td>";
			 echo "<td>" . $row['adm_fee'] . "</td>";
			 echo "<td>" . $row['annual_charge'] . "</td>";
			echo "<td>" . $row['tuition_fee'] . "</td>";
			echo "<td>" . $row['book_charge'] . "</td>";
			echo "<td>" . $row['stationary_charge'] . "</td>";
			echo "<td>" . $row['diary_charge'] . "</td>";
			echo "<td>" . $row['misc_charge'] . "</td>";         
			echo "<td>" . $row['exam_charge'] . "</td>";
		}
					 
       
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($conn);
?>
  </tbody>
</table>
  
<p>Note that we start the search in tbody, to prevent filtering the table headers.</p>

</body>
</html>
