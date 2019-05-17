<?php
    	$dbhost = 'mariadb';
    	$dbuser = 'cs332t30';
    	$dbpass = '';
    	$html = '';
    	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
    	if(! $conn ) {
       		die('Could not connect: ' . mysql_error());
    	}
    	mysql_select_db($dbuser);
  	$course = $_POST['Course'];
 	$section = $_POST['Section'];
	
	echo "<font color = orange>For Course: " . $course . " and Section: " . $section . "</font><br></br>";
	
	$sql = sprintf("SELECT COUNT(*) FROM Enrollment as E, Section as S WHERE S.CNum = %s and S.SNum = E.SNum and E.SNum = %s and E.Grade = 'A'", $course, $section);
	$result = mysql_query($sql);
	if(!$result){
		$message = 'Invalid query: ' . mysql_error() . "\n";
		$message .= 'Whole query: ' .$sql;
		die($message);
	}
	
	echo "<font color = orange> A: ". mysql_result($result, 0) ."</font>";
	echo "<br></br>";

	$sql = sprintf("SELECT COUNT(*) FROM Enrollment as E, Section as S WHERE S.CNum = %s and S.SNum = E.SNum and E.SNum = %s and E.Grade = 'A-'", $course, $section);
	$result = mysql_query($sql);
	if(!$result){
		$message = 'Invalid query: ' . mysql_error() . "\n";
		$message .= 'Whole query: ' .$sql;
		die($message);
	}
	
	echo "<font color = orange> A-: ". mysql_result($result, 0) ."</font>";
	echo "<br></br>";

	$sql = sprintf("SELECT COUNT(*) FROM Enrollment as E, Section as S WHERE S.CNum = %s and S.SNum = E.SNum and E.SNum = %s and E.Grade = 'B+'", $course, $section);
	$result = mysql_query($sql);
	if(!$result){
		$message = 'Invalid query: ' . mysql_error() . "\n";
		$message .= 'Whole query: ' .$sql;
		die($message);
	}
	
	echo "<font color = orange> B+: ". mysql_result($result, 0) ."</font>";
	echo "<br></br>";


	$sql = sprintf("SELECT COUNT(*) FROM Enrollment as E, Section as S WHERE S.CNum = %s and S.SNum = E.SNum and E.SNum = %s and E.Grade = 'B'", $course, $section);
	$result = mysql_query($sql);
	if(!$result){
		$message = 'Invalid query: ' . mysql_error() . "\n";
		$message .= 'Whole query: ' .$sql;
		die($message);
	}
	
	echo "<font color = orange> B: ". mysql_result($result, 0) ."</font>";
	echo "<br></br>";
	
	$sql = sprintf("SELECT COUNT(*) FROM Enrollment as E, Section as S WHERE S.CNum = %s and S.SNum = E.SNum and E.SNum = %s and E.Grade = 'B-'", $course, $section);
	$result = mysql_query($sql);
	if(!$result){
		$message = 'Invalid query: ' . mysql_error() . "\n";
		$message .= 'Whole query: ' .$sql;
		die($message);
	}
	
	echo "<font color = orange> B-: ". mysql_result($result, 0) ."</font>";
	echo "<br></br>";

	$sql = sprintf("SELECT COUNT(*) FROM Enrollment as E, Section as S WHERE S.CNum = %s and S.SNum = E.SNum and E.SNum = %s and E.Grade = 'C+'", $course, $section);
	$result = mysql_query($sql);
	if(!$result){
		$message = 'Invalid query: ' . mysql_error() . "\n";
		$message .= 'Whole query: ' .$sql;
		die($message);
	}
	
	echo "<font color = orange> C+: ". mysql_result($result, 0) ."</font>";
	echo "<br></br>";

	$sql = sprintf("SELECT COUNT(*) FROM Enrollment as E, Section as S WHERE S.CNum = %s and S.SNum = E.SNum and E.SNum = %s and E.Grade = 'C'", $course, $section);
	$result = mysql_query($sql);
	if(!$result){
		$message = 'Invalid query: ' . mysql_error() . "\n";
		$message .= 'Whole query: ' .$sql;
		die($message);
	}
	
	echo "<font color = orange> C: ". mysql_result($result, 0) ."</font>";
	echo "<br></br>";

	$sql = sprintf("SELECT COUNT(*) FROM Enrollment as E, Section as S WHERE S.CNum = %s and S.SNum = E.SNum and E.SNum = %s and E.Grade = 'C-'", $course, $section);
	$result = mysql_query($sql);
	if(!$result){
		$message = 'Invalid query: ' . mysql_error() . "\n";
		$message .= 'Whole query: ' .$sql;
		die($message);
	}
	
	echo "<font color = orange> C-: ". mysql_result($result, 0) ."</font>";
	echo "<br></br>";
	
	$sql = sprintf("SELECT COUNT(*) FROM Enrollment as E, Section as S WHERE S.CNum = %s and S.SNum = E.SNum and E.SNum = %s and E.Grade = 'D'", $course, $section);
	$result = mysql_query($sql);
	if(!$result){
		$message = 'Invalid query: ' . mysql_error() . "\n";
		$message .= 'Whole query: ' .$sql;
		die($message);
	}
	
 
	echo "<font color = orange> D: ". mysql_result($result, 0) ."</font>";
	echo "<br></br>";


	$sql = sprintf("SELECT COUNT(*) FROM Enrollment as E, Section as S WHERE S.CNum = %s and S.SNum = E.SNum and E.SNum = %s and E.Grade = 'D-'", $course, $section);
	$result = mysql_query($sql);
	if(!$result){
		$message = 'Invalid query: ' . mysql_error() . "\n";
		$message .= 'Whole query: ' .$sql;
		die($message);
	}
	
	echo "<font color = orange> D-: ". mysql_result($result, 0) ."</font>";
	echo "<br></br>";


	$sql = sprintf("SELECT COUNT(*) FROM Enrollment as E, Section as S WHERE S.CNum = %s and S.SNum = E.SNum and E.SNum = %s and E.Grade = 'F'", $course, $section);
	$result = mysql_query($sql);
	if(!$result){
		$message = 'Invalid query: ' . mysql_error() . "\n";
		$message .= 'Whole query: ' .$sql;
		die($message);
	}
	
	echo "<font color = orange> F: ". mysql_result($result, 0) ."</font>";
	echo "<br></br>";


   	
    	mysql_close($conn);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Course Info</title>
	</head>
	<body bgcolor = "#003366">
	</body> 
</html>
