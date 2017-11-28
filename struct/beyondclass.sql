SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

DROP TABLE IF EXISTS `BOOKING`;
CREATE TABLE IF NOT EXISTS `BOOKING` (
  `Booking_ID` int(9) NOT NULL,
  `Tutor_ID` int(9) NOT NULL,
  `S_ID` int(9) NOT NULL,
  `Booking_Course_ID` varchar(10) NOT NULL,
  `StartTime` time NOT NULL,
  `EndTime` time NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`Booking_ID`),
  KEY `S_ID` (`S_ID`),
  KEY `Booking_Course_ID` (`Booking_Course_ID`),
  KEY `Date` (`Date`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `BOOKING` (`Booking_ID`, `Tutor_ID`, `S_ID`, `Booking_Course_ID`, `StartTime`, `EndTime`, `Date`) VALUES
(1, 123456780, 232228888, 'MECE 3390', '09:00:00', '11:00:00', '2000-01-01'),
(2, 123456781, 310679999, 'NUCL 3930', '13:00:00', '14:00:00', '2000-02-02'),
(3, 123456782, 443060000, 'SOFE 3200', '16:30:00', '17:30:00', '2000-03-03'),
(4, 123456783, 514901111, 'BIOL 4610', '20:15:00', '22:15:00', '2000-04-04'),
(5, 123456784, 61267555, 'BUSI 3110', '17:30:00', '18:30:00', '2000-05-05'),
(6, 123456785, 718972522, 'ELEE 3130', '18:00:00', '20:00:00', '2000-06-06');

DROP TABLE IF EXISTS `COURSES`;
CREATE TABLE IF NOT EXISTS `COURSES` (
  `CourseID` varchar(10) NOT NULL,
  `CourseName` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  PRIMARY KEY (`CourseID`),
  KEY `Department` (`Department`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `COURSES` (`CourseID`, `CourseName`, `Department`) VALUES
('MECE 3390', 'Mechatronics', 'FEAS'),
('NUCL 3930', 'Heat Transfer', 'FESNS'),
('SOFE 3200', 'Systems Programming', 'FEAS'),
('BIOL 4610', 'Field Biology', 'FHS'),
('BUSI 3110', 'Intro to Taxation', 'FBIT'),
('ELEE 3130', 'Communication Systems', 'FEAS'),
('SOFE 3650', 'Software Architecture', 'FEAS');

DROP TABLE IF EXISTS `STUDENT`;
CREATE TABLE IF NOT EXISTS `STUDENT` (
  `S_ID` int(9) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `GPA` float NOT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `CellNo` varchar(255) DEFAULT NULL,
  `Department_Name` varchar(255) NOT NULL,
  `Password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`S_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `STUDENT` (`S_ID`, `Name`, `GPA`, `Email`, `CellNo`, `Department_Name`, `Password`) VALUES
(111117777, 'John Doe', 3.8, 'john.doe@example.com', '416-647-9050', 'FEAS', '5f4dcc3b5aa765d61d8327deb882cf99'),
(0000, 'Admin', 3.8, 'admin@example.com', '416-647-9050', 'FEAS', '5f4dcc3b5aa765d61d8327deb882cf99'),
(232228888, 'Mary Bob', 4.1, 'mary.bob@example.com', '416-647-9052', 'FESNS', '5f4dcc3b5aa765d61d8327deb882cf99'),
(310679999, 'Ryan Smith', 4, 'ryan.smith@example.com', '416-647-9053', 'FEAS', '5f4dcc3b5aa765d61d8327deb882cf99'),
(443060000, 'Jack Blue', 3.5, 'jack.blue@example.com', '416-647-9051', 'FHS', '5f4dcc3b5aa765d61d8327deb882cf99'),
(514901111, 'Tim Horton', 3.8, 'tim.horton@example.com', '416-647-9054', 'FBIT', '5f4dcc3b5aa765d61d8327deb882cf99'),
(612675555, 'Ron Musk', 3.7, 'ron.musk@example.com', '289-647-9055', 'FEAS', '5f4dcc3b5aa765d61d8327deb882cf99'),
(718972522, 'Tyler Dam', 3.6, 'tyler.dam@example.com', '416-647-9056', 'FESNS', '5f4dcc3b5aa765d61d8327deb882cf99'),
(319992356, 'Billy Rob', 3.8, 'billy.bob@example.com', '289-416-4160', 'FBIT', '5f4dcc3b5aa765d61d8327deb882cf99'),
(976337845, 'Mike Rob', 4, 'mike.rob@example.com', '416-647-4166', 'FHS', '5f4dcc3b5aa765d61d8327deb882cf99'),
(907622344, 'Nav Singh', 3.6, 'nav.singh@example.com', '289-416-4160', 'FESNS', '5f4dcc3b5aa765d61d8327deb882cf99'),
(591822233, 'Steve Bill', 0.9, 'steve.bill@example.com', '416-647-9059', 'FEAS', '5f4dcc3b5aa765d61d8327deb882cf99'),
(123456789, 'William Simonson', 3.9, 'william@example.com', '312-909-0909', 'FBIT', '5f4dcc3b5aa765d61d8327deb882cf99'),
(134200000, 'Jimmy Peters', 3.8, 'jimmy@gmail.com', '213-567-7890', 'FEAS', '5f4dcc3b5aa765d61d8327deb882cf99');


DROP TABLE IF EXISTS `TUTOR`;
CREATE TABLE IF NOT EXISTS `TUTOR` (
  `Tutor_ID` int(9) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `Course_ID` varchar(225) NOT NULL,
  `GPA` float NOT NULL,
  `Cost` float DEFAULT NULL,
  `Date_Available` date DEFAULT NULL,
  `Time` float DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Tutor_ID`),
  KEY `Course_ID` (`Course_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `TUTOR` (`Tutor_ID`, `Name`, `Course_ID`, `GPA`, `Cost`, `Date_Available`, `Time`, `Password`) VALUES
(123456780, 'Raj Kapoor', 'MECE 3390', 4, 15, '2000-01-01', 2, '5f4dcc3b5aa765d61d8327deb882cf99'),
(123456781, 'Amit Kumar', 'NUCL 3930', 3.9, 25, '2000-02-02', 1, '5f4dcc3b5aa765d61d8327deb882cf99'),
(123456782, 'Aditya Kartik', 'SOFE 3200', 4.2, 15, '2000-03-03', 1, '5f4dcc3b5aa765d61d8327deb882cf99'),
(123456783, 'Rahul Gandhi', 'BIOL 4610', 3.5, 15, '2000-04-04', 2, '5f4dcc3b5aa765d61d8327deb882cf99'),
(123456784, 'Bob Doe', 'BUSI 3110', 3.6, 10, '2000-05-05', 1, '5f4dcc3b5aa765d61d8327deb882cf99'),
(123456785, 'Jamie Metha', 'ELEE 3130', 3.5, 12.5, '2000-06-06', 2, '5f4dcc3b5aa765d61d8327deb882cf99'),
(123456786, 'Jones Smith', 'SOFE 3650', 3.9, 15, '2007-07-07', 2, '5f4dcc3b5aa765d61d8327deb882cf99');
COMMIT;

