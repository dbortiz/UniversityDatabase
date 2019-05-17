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
    $ssn = $_POST['SSN'];
    echo "<font color = orange>For Professor: " . $ssn . "</font><br></br>";

    $sql = sprintf("SELECT C.CTitle, S.SClassroom, S.SMeeting, S.SBegin, S.SEnd FROM Course as C, Section as S WHERE S.PSSN = %s and S.CNum = C.CNum",$ssn);
    $result = mysql_query($sql);
    if (!$result) {
        $message  = 'Invalid query: ' . mysql_error() . "\n";
        $message .= 'Whole query: ' . $sql;
        die($message);
    }
    while ($row = mysql_fetch_assoc($result)) {
        $keys = array_keys($row);
        foreach ($keys as $key){
            $html .= $key.' - '.$row[$key].'<br></br>';
        }
    }
    mysql_close($conn);
 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Professer Info</title>
        <?php 
		echo "<font color = orange>" . $html . "</font>";
	?>
	</head>
	<body bgcolor = "#003366"></body>
	
</html>
