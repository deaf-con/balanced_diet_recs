<html>

	<head>
		<title> 
			Balanced Diet Recommendations - SensorUp Coding Challenge
		</title>
	</head>

		
	<body>
	
	<p>Please enter your gender and age:</p>
	
	<form action = "display_recommendations.php" method="post">
	
	
		<p><label for="gender">Gender:</label>
		<select id="gender" name="gender" style="margin-left:88px">
			<option value="Male">Male</option>
			<option value="Female">Female</option>
		</select> </p>
		
		
		<p><label for="age">Age Range:</label>
		<select id="age" name="age" style="margin-left:60px">
			<option value="2 to 3">2 to 3</option>
			<option value="4 to 8">4 to 8</option>
			<option value="9 to 13">9 to 13</option>
			<option value="14 to 18">14 to 18</option>
			<option value="19 to 30">19 to 30</option>
			<option value="31 to 50">31 to 50</option>
			<option value="51 to 70">51 to 70</option>
			<option value="71+">71+</option>
		</select> </p>
		
		<input type="submit" value="Recommend a balanced daily diet">
		
	</form>
	</body>

</html>