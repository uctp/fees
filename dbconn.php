	<?php 	
		// $servername = "162.222.225.87:3306";
		$servername = "localhost" ;
		$username ="root" ;
		$password = "" ;
		//$username = "naresh";
		// $password = "Khurana$%1234";
		$db = "fees" ; 
		$conn = mysqli_connect($servername, $username, $password);
		mysqli_select_db($conn, $db);
		if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
	// echo "Connected successfully"; 
}
		?>