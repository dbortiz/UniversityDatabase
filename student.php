<!DOCTYPE html>
<html>
        <head>
                <title>Students</title>
        </head>
        <body bgcolor = "#003366">
                <h2 style = "color:#FFA500">Please enter the Student's course number::</h2>
                <form name = "Student" method = "POST" action = "student_course_info.php">
                        <p>
                                <select name = "Course">
                                <option value = "">Course</option>
                                <option value = "120">120</option>
                                <option value = "121">121</option>
                                <option value = "150">150</option>
				<option value = "250">250</option>
                                </select>
                                <input type = "submit" name = "Submit" value = "Submit"/>
                        </p>
                </form>
                <br></br>
                <br></br>
                <h2 style = "color:#FFA500">Please enter the Student's CWID:</h2>
                <form name = "Student" method = "POST" action = "student_info.php">
                        <p>
                                <select name = "CWID">
                                <option value = "">CWID</option>
                                <option value = "123456780">123456780</option>
                                <option value = "123456781">123456781</option>
				<option value = "123456782">123456782</option>
				<option value = "123456783">123456783</option>
				<option value = "123456784">123456784</option>
				<option value = "123456785">123456785</option>
				<option value = "123456786">123456786</option>
				<option value = "123456787">123456787</option>
				</select>
                                <input type = "submit" name = "Submit" value = "Submit"/>
                        </p>
                </form>
        </body>
</html>
