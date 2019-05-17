<!DOCTYPE html>
<html>
	<head>
		<title>Professors</title>
	</head>
	<body bgcolor = "#003366">
		<h2 style = "color:#FFA500">Please enter the Professor's SSN to view data:</h2>
		<form name = "Professor" method = "POST" action = "professor_info.php">
			<p>
				<select name = "SSN">
				<option value = "">SSN</option>
				<option value = "111222333">111222333</option>
				<option value = "444555666">444555666</option>
				<option value = "777888999">777888999</option>
				</select>
				<input type = "submit" name = "Submit" value = "Submit"/>
				
			</p>
		</form>
		<br></br>
		<br></br>
		<h2 style = "color:#FFA500">Please enter the course number and section number to view grades:</h2>
		<form name = "Professor" method = "POST" action = "grades_info.php">
			<p>
				<select name = "Course">
				<option value = "">Course</option>
				<option value = "120">120</option>
				<option value = "121">121</option>
				<option value = "150">150</option>
				<option value = "250">250</option>
				</select>
					
				<select name = "Section">
				<option value = "">Section</option>
				<option value = "01">01</option>
				<option value = "02">02</option>
				<option value = "03">03</option>
				<option value = "04">04</option>
				<option value = "05">05</option>
				<option value = "06">06</option>
				</select>
				<input type = "submit" name = "Submit" value = "Submit"/>
			</p>
		</form>
	</body>
</html>
