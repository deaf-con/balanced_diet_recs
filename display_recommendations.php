<html>

	<head>
		<title> 
			Balanced Diet Recommendations - SensorUp Coding Challenge
		</title>
	</head>

		
	<body>
	
	
	<?php

		require_once("connect_database.php");

		if( $_REQUEST["gender"] && $_REQUEST["age"]) {
			
			$gender = $_REQUEST["gender"];
			$age = $_REQUEST["age"];
			
			echo "Here is one example of a balanced daily diet for a ".strtolower($gender)." between the ages of ".$age." years old: <br><br>";
			
			$query_servings = "SELECT fgid, min_servings, max_servings FROM `table 2` WHERE ages='$age' and gender='$gender'";
			$result_servings = $conn->query($query_servings);
			
			if ($result_servings->num_rows > 0) {
				// output data of each row
				while($row = $result_servings->fetch_assoc()) {
					
					$foodgrp_id = $row["fgid"];
					$servings = rand($row["min_servings"],$row["max_servings"]);
					
					$query_food = "SELECT srvg_sz,food FROM `table 1` WHERE fgid = '$foodgrp_id' ORDER BY RAND() LIMIT $servings";
					$result_food = $conn->query($query_food);
					
					if ($result_food->num_rows > 0) {
						// output data of each row
						while($rowf = $result_food->fetch_assoc()) {
							echo $rowf["food"]."<br>Serving Size: ".$rowf["srvg_sz"]."<br><br>";
						}
					} else { 
						echo "Error: Food list not found";
					}
				}
			} else {
				echo "Error: Data not found";
			}
		}
	?>
	<br>
		<input type="button" value="Recommend another balanced daily diet" onClick="window.location.reload()">
		
	</body>


		
</html>