DROP TABLE Professor;
DROP TABLE Department;
DROP TABLE Course;
DROP TABLE Student;
DROP TABLE Section;
DROP TABLE Prerequisites;
DROP TABLE Minor;
DROP TABLE Degree;
DROP TABLE Enrollment;

CREATE TABLE IF NOT EXISTS Professor (PSSN INT(9) NOT NULL, PName VARCHAR(20) NOT NULL, PSex VARCHAR(1) NOT NULL, PSalary INT(7) NOT NULL, PTitle VARCHAR(10) NOT NULL, PArea_Code INT(3) NOT NULL, PDigits INT(7) NOT NULL, PStreet VARCHAR(30) NOT NULL, PCity VARCHAR(20) NOT NULL, PState VARCHAR(2) NOT NULL, PZip INT(5) NOT NULL);

INSERT INTO Professor (PSSN, PName, PSex, PSalary, PTitle, PArea_Code, PDigits, PStreet, PCity, PState, PZip) VALUES (111222333, 'Shawn Wang', 'M', 3000000, 'Doctor', 714, 1112222, '123 Fullerton Ave', 'Fullerton', 'CA', 92831);
INSERT INTO Professor (PSSN, PName, PSex, PSalary, PTitle, PArea_Code, PDigits, PStreet, PCity, PState, PZip) VALUES (444555666, 'James Choi', 'M', 2000000, 'Doctor', 714, 3334444, '456 Garden Grove Ave', 'Garden Grove', 'CA', 92840);
INSERT INTO Professor (PSSN, PName, PSex, PSalary, PTitle, PArea_Code, PDigits, PStreet, PCity, PState, PZip) VALUES (777888999, 'Mikhail Gofman', 'M', 1000000, 'Professor', 714, 5556666, '789 Anaheim Ave', 'Anaheim', 'CA', 92843);


CREATE TABLE IF NOT EXISTS Department (Dnum INT(3) NOT NULL, DName VARCHAR(20) NOT NULL, DOffice VARCHAR(5) NOT NULL, DTelephone INT(10) NOT NULL, ChairSSN INT(9) NOT NULL); 
INSERT INTO Department (DNum, DName, DOffice, DTelephone, ChairSSN) VALUES (001, 'Computer Science', 'CS400', 7148880000, 111222333);
INSERT INTO Department (Dnum, DName, DOffice, DTelephone, ChairSSN) VALUES (002, 'Mathematics', 'MH100', 7148881111, 777888999); 


CREATE TABLE IF NOT EXISTS Course (CNum INT(3) NOT NULL, CTitle VARCHAR(30) NOT NULL, CTextbook VARCHAR(20) NOT NULL, CUnits INT(1) NOT NULL, DeptOfficeNum INT(3) NOT NULL);
INSERT INTO Course (CNum, CTitle, CTextbook, CUnits, DeptOfficeNum) VALUES (120, 'Intro to C++','C++ Programming', 3, 001);
INSERT INTO Course (CNum, CTitle, CTextbook, CUnits, DeptOfficeNum) VALUES (121, 'Object Oriented Programming','C++ Objects', 3, 001);
INSERT INTO Course (CNum, CTitle, CTextbook, CUnits, DeptOfficeNum) VALUES (150, 'Calculus 1','Fundamentals Of Calculus', 4, 002);
INSERT INTO Course (CNum, CTitle, CTextbook, CUnits, DeptOfficeNum) VALUES (250, 'Calculus 3','Hard Calculus', 4, 002);



CREATE TABLE IF NOT EXISTS Student (StCWID INT(9) NOT NULL, StFirst VARCHAR(10) NOT NULL, StLast VARCHAR(10) NOT NULL, StAddress VARCHAR(30) NOT NULL, StTelephone INT(10) NOT NULL, MajorNum INT(3) NOT NULL);
INSERT INTO Student (StCWID, StFirst, StLast, StAddress, StTelephone, MajorNum) VALUES (123456780, 'Dan', 'Ortiz', '12 Fullerton Ave 92840 CA', 0123456789, 001);
INSERT INTO Student (StCWID, StFirst, StLast, StAddress, StTelephone, MajorNum) VALUES (123456781, 'Fred', 'Ramirez', '23 Fullerton Ave 92840 CA', 1123456789, 001);
INSERT INTO Student (StCWID, StFirst, StLast, StAddress, StTelephone, MajorNum) VALUES (123456782, 'Zaib', 'Quraishi', '34 Fullerton Ave 92840 CA', 2123456789, 001);
INSERT INTO Student (StCWID, StFirst, StLast, StAddress, StTelephone, MajorNum) VALUES (123456783, 'Alexander', 'Sigler', '45 Fullerton Ave 92840 CA', 3123456789, 001);
INSERT INTO Student (StCWID, StFirst, StLast, StAddress, StTelephone, MajorNum) VALUES (123456784, 'George', 'Calderon', '56 Fullerton Ave 92840 CA', 4123456789, 002);
INSERT INTO Student (StCWID, StFirst, StLast, StAddress, StTelephone, MajorNum) VALUES (123456785, 'Anahi', 'Partida', '67 Fullerton Ave 92840 CA', 5123456789, 002);
INSERT INTO Student (StCWID, StFirst, StLast, StAddress, StTelephone, MajorNum) VALUES (123456786, 'Paola', 'Ortiz', '78 Fullerton Ave 92840 CA', 6123456789, 002);
INSERT INTO Student (StCWID, StFirst, StLast, StAddress, StTelephone, MajorNum) VALUES (123456787, 'John', 'Ortiz', '89 Fullerton Ave 92840 CA', 7123456789, 002);


CREATE TABLE IF NOT EXISTS Section (SNum INT(2) NOT NULL, CNum INT(3) NOT NULL, SClassroom VARCHAR(5) NOT NULL, SSeats INT(2) NOT NULL, SMeeting VARCHAR(4) NOT NULL, SBegin VARCHAR(7) NOT NULL, SEnd VARCHAR(7) NOT NULL, PSSN INT(9) NOT NULL);

INSERT INTO Section (SNum, CNum, SClassroom, SSeats, SMeeting, SBegin, SEnd, PSSN) VALUES (01, 120, 'CS100', 25, 'M W', '1:00PM', '2:15PM', 111222333);
INSERT INTO Section (SNum, CNum, SClassroom, SSeats, SMeeting, SBegin, SEnd, PSSN) VALUES (02, 120, 'CS200', 25, 'M W', '2:30PM', '3:45PM', 111222333);
INSERT INTO Section (SNum, CNum, SClassroom, SSeats, SMeeting, SBegin, SEnd, PSSN) VALUES (03, 121, 'CS300', 25, 'M W', '1:00PM', '2:15PM', 444555666);
INSERT INTO Section (SNum, CNum, SClassroom, SSeats, SMeeting, SBegin, SEnd, PSSN) VALUES (04, 121, 'CS400', 25, 'M W', '2:30PM', '3:45PM', 444555666);
INSERT INTO Section (SNum, CNum, SClassroom, SSeats, SMeeting, SBegin, SEnd, PSSN) VALUES (05, 150, 'MH300', 25, 'T TH', '1:00PM', '2:15PM', 777888999);
INSERT INTO Section (SNum, CNum, SClassroom, SSeats, SMeeting, SBegin, SEnd, PSSN) VALUES (06, 250, 'MH400', 25, 'T TH', '1:00PM', '2:15PM', 777888999);

CREATE TABLE IF NOT EXISTS Prerequisites (CNum INT(3) NOT NULL, PrereqNum INT(3) NOT NULL);
CREATE TABLE IF NOT EXISTS Minor (StCWID INT(9) NOT NULL, DNum INT(3) NOT NULL);
CREATE TABLE IF NOT EXISTS Degree (PSSN INT(9) NOT NULL, DegreeTitle VARCHAR(35) NOT NULL);

CREATE TABLE IF NOT EXISTS Enrollment (StCWID INT(9) NOT NULL, SNum INT(2) NOT NULL, Grade VARCHAR(2) NOT NULL);
INSERT INTO Enrollment (StCWID, SNum, Grade) VALUES (123456780, 01, 'A');
INSERT INTO Enrollment (StCWID, SNum, Grade) VALUES (123456780, 03, 'A-');
INSERT INTO Enrollment (StCWID, SNum, Grade) VALUES (123456780, 05, 'B+');
INSERT INTO Enrollment (StCWID, SNum, Grade) VALUES (123456781, 01, 'B');
INSERT INTO Enrollment (StCWID, SNum, Grade) VALUES (123456781, 03, 'B-');
INSERT INTO Enrollment (StCWID, SNum, Grade) VALUES (123456781, 05, 'C+');
INSERT INTO Enrollment (StCWID, SNum, Grade) VALUES (123456782, 02, 'C');
INSERT INTO Enrollment (StCWID, SNum, Grade) VALUES (123456782, 04, 'C-');
INSERT INTO Enrollment (StCWID, SNum, Grade) VALUES (123456782, 06, 'D');
INSERT INTO Enrollment (StCWID, SNum, Grade) VALUES (123456783, 02, 'D-');
INSERT INTO Enrollment (StCWID, SNum, Grade) VALUES (123456783, 04, 'F');
INSERT INTO Enrollment (StCWID, SNum, Grade) VALUES (123456783, 06, 'A');
INSERT INTO Enrollment (StCWID, SNum, Grade) VALUES (123456784, 01, 'A-');
INSERT INTO Enrollment (StCWID, SNum, Grade) VALUES (123456784, 03, 'B+');
INSERT INTO Enrollment (StCWID, SNum, Grade) VALUES (123456784, 05, 'B-');
INSERT INTO Enrollment (StCWID, SNum, Grade) VALUES (123456785, 01, 'C+');
INSERT INTO Enrollment (StCWID, SNum, Grade) VALUES (123456785, 03, 'C');
INSERT INTO Enrollment (StCWID, SNum, Grade) VALUES (123456786, 05, 'C-');
INSERT INTO Enrollment (StCWID, SNum, Grade) VALUES (123456787, 02, 'D');
INSERT INTO Enrollment (StCWID, SNum, Grade) VALUES (123456787, 04, 'D-');

