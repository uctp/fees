<!DOCTYPE html>
<html>

<body>



<?php
include "../dbconn.php" ;
$sql = "SELECT * FROM classname ORDER BY POSITION ASC";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
?>    

<table style="float:right">		

 <tr> 
 <td  align="center"   colspan="2" style ="background-color: #caccdb"  > 
 SHOWING RECORDS 
 </td>
 </tr>
 		<th>CLASS NAME    </th>
		<th> POSITION </th> 
		
		
	</tr>

      <?php      
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                
            //  echo $row[1] ; 
             echo "<td>" . $row['class_name'] . "</td>";
			  echo "<td>" . $row['position'] . "</td>";   
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
</table>
</div>
</body>
</html>
