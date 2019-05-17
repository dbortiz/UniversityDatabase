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


    $sql = sprintf("SELECT S.SNum,S.SClassroom, S.SMeeting, S.SBegin, S.SEnd, COUNT(*) FROM Enrollment as E, Section as S WHERE S.CNum = %s and E.SNum = S.SNum ", $course);


    $result = mysql_query($sql);
    if (!$result) {
        $message  = 'Invalid query: ' . mysql_error() . "\n";
        $message .= 'Whole query: ' . $sql;
        die($message);
    }
    echo "<font color = orange>For Course: " . $course . "</font><br></br> ";
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
        <?php echo "<font color = orange>" . $html . "</font>" ?>
        </head>
	<body bgcolor = "#003366"></body>
</html>

