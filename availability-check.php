<?php
		// SESSION START

			session_start();

 		// Creating database connection
				
  			$hostname = "http://localhost/login.php";
	 		$con = mysqli_connect("localhost", "root","", "tour-and-travel") or die("Connaction Failed.....");


		// Matching with the database and fetch from the database.  

	 			if(isset($_POST['check'])){	 		

			  		$destination = $_POST['destination'];
					
					$sql	= "SELECT * from availability WHERE destinations='$destination' ";
			 		$result = mysqli_query($con, $sql) or die("Query failed.");
			
			
					   	while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {

							$_SESSION['destination']= "{$row['destinations']}<br>";
							 $_SESSION['fromdate']= "{$row['fromdate']}<br>";
							 $_SESSION['remarks']= "{$row['remarks']}";
							
							 }	
							 header('location:show-trip.php');	  
				
			mysqli_close($con);
			}

?>