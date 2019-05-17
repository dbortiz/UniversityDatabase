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
    $cwid = $_POST['CWID'];


    $sql = sprintf("SELECT C.CTitle, E.Grade FROM Enrollment as E, Course as C, Section as S WHERE E.StCWID = %s and C.CNum = S.CNum and S.SNum = E.SNum", $cwid);



    $result = mysql_query($sql);
    if (!$result) {
        $message  = 'Invalid query: ' . mysql_error() . "\n";
        $message .= 'Whole query: ' . $sql;
        die($message);
    }
    echo "<font color = orange>For CWID: " . $cwid . "</font><br></br> ";
    while ($row = mysql_fetch_assoc($result)) {
        $keys = array_keys($row);
        foreach ($keys as $key){
            $html .= $key.' - '.$row[$key].'<br>';
        }
    }
    mysql_close($conn);
 ?>

<!DOCTYPE html>
<html>
        <head>
                <title>Student Info</title>
        <?php 
		echo "<font color = orange>" . $html . "</font>"; 
	?>
        </head>
	<body bgcolor = "#003366"></body>

</html>
        
