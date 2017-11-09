-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 09, 2017 at 10:25 AM
-- Server version: 5.7.20-0ubuntu0.17.04.1
-- PHP Version: 5.6.32-1+ubuntu17.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbljobseekerbackgrounddetails`
--

CREATE TABLE `tbljobseekerbackgrounddetails` (
  `JobSeekerID` varchar(50) NOT NULL,
  `HighestDegree` varchar(50) DEFAULT NULL,
  `Specialization` varchar(50) DEFAULT NULL,
  `PassingYear` int(11) DEFAULT NULL,
  `Percentage` float DEFAULT NULL,
  `University` varchar(50) DEFAULT NULL,
  `Country` varchar(50) DEFAULT NULL,
  `TechnicalExp` varchar(50) DEFAULT NULL,
  `WorkField` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbljobseekercontactdetails`
--

CREATE TABLE `tbljobseekercontactdetails` (
  `JobSeekerID` varchar(50) NOT NULL,
  `FirstName` char(25) DEFAULT NULL,
  `LastName` char(25) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `State` varchar(50) DEFAULT NULL,
  `PinCode` int(11) DEFAULT NULL,
  `EmailID` varchar(50) DEFAULT NULL,
  `Phone1` bigint(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbljobseekercontactdetails`
--

INSERT INTO `tbljobseekercontactdetails` (`JobSeekerID`, `FirstName`, `LastName`, `DOB`, `Address`, `City`, `State`, `PinCode`, `EmailID`, `Phone1`) VALUES
('Deepak', 'Deepak', 'Kamble', '1993-10-16', 'Santacruz', 'Mumbai', 'Maharashtra', 400098, 'deeps@gmail.com', 9768964545),
('pratik', 'Pratik', 'Sutar', '1995-10-16', 'Bandrekarwadi', 'Mumbai', 'Maharashtra', 400060, 'pratik@gmail.com', 9863125485),
('pratzz', 'Pratik', 'Khadtale', '1995-12-22', 'Malad', 'Mumbai', 'Maharashtra', 400097, 'pratzz@gmail.com', 8545687545),
('sainath', 'Sainath', 'Parkar', '1993-12-23', 'jogeshwari', 'Mumbai', 'Maharashtra', 400060, 'saiparkar4@gmail.com', 9869631289),
('shahid', 'Mohamed Shahid', 'Ansari', '1995-05-07', 'Sanjay nagar', 'Mumbai', 'Maharashtra', 400097, 'shahid@gmail.com', 9863125485);

-- --------------------------------------------------------

--
-- Table structure for table `tbljobseekerjobdetails`
--

CREATE TABLE `tbljobseekerjobdetails` (
  `JobSeekerID` varchar(50) NOT NULL,
  `JobTitle` varchar(50) NOT NULL,
  `Location1` varchar(50) NOT NULL,
  `State1` varchar(50) NOT NULL,
  `Country1` varchar(50) NOT NULL,
  `Location2` varchar(50) DEFAULT NULL,
  `State2` varchar(50) DEFAULT NULL,
  `Country2` varchar(50) DEFAULT NULL,
  `WillRelocate` varchar(50) DEFAULT NULL,
  `WillTelecommute` varchar(50) NOT NULL,
  `WillTravel` varchar(50) DEFAULT NULL,
  `FullTimeSalary` varchar(50) DEFAULT NULL,
  `HourlySalary` varchar(50) DEFAULT NULL,
  `TypeOfEmployment1` varchar(80) NOT NULL,
  `TypeOfEmployment2` varchar(80) DEFAULT NULL,
  `TypeOfEmployment3` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbljobseekerresume`
--

CREATE TABLE `tbljobseekerresume` (
  `JobSeekerID` varchar(50) NOT NULL,
  `Resume` text,
  `ResumeUpLoadDate` datetime DEFAULT NULL,
  `LastModifiedDate` datetime DEFAULT NULL,
  `ResumePath` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbljobseekertechnicalskills`
--

CREATE TABLE `tbljobseekertechnicalskills` (
  `JobSeekerID` varchar(50) NOT NULL,
  `Skill1` varchar(50) NOT NULL,
  `Skill1Year` int(11) NOT NULL,
  `Skill1LastUsed` int(11) NOT NULL,
  `Skill2` varchar(50) DEFAULT NULL,
  `Skill2Year` int(11) DEFAULT NULL,
  `Skill2LastUsed` int(11) DEFAULT NULL,
  `Skill3` varchar(50) DEFAULT NULL,
  `Skill3Year` int(11) DEFAULT NULL,
  `Skill3LastUsed` int(11) DEFAULT NULL,
  `Skill4` varchar(50) DEFAULT NULL,
  `Skill4Year` int(11) DEFAULT NULL,
  `Skill4LastUsed` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_adminlogin`
--

CREATE TABLE `tbl_adminlogin` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_adminlogin`
--

INSERT INTO `tbl_adminlogin` (`username`, `password`) VALUES
('admin', 'admin'),
('root', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_branch`
--

CREATE TABLE `tbl_branch` (
  `bid` int(11) NOT NULL,
  `Branch` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_branch`
--

INSERT INTO `tbl_branch` (`bid`, `Branch`) VALUES
(1, 'Computer Engineering'),
(2, 'Information Technology'),
(3, 'Instrumentation Engineering'),
(4, 'Electronica & Telecomm'),
(5, 'Mechanical Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_businesssector`
--

CREATE TABLE `tbl_businesssector` (
  `BusinessSectorID` int(100) NOT NULL,
  `BusinessSector` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city_master`
--

CREATE TABLE `tbl_city_master` (
  `CityId` int(100) NOT NULL,
  `CityName` varchar(50) DEFAULT NULL,
  `Description` varchar(80) DEFAULT NULL,
  `StateId` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_city_master`
--

INSERT INTO `tbl_city_master` (`CityId`, `CityName`, `Description`, `StateId`) VALUES
(1, 'Maharashtra', 'Financial capital of India.', 1),
(2, 'New York', 'Tallest buildings.', 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country_master`
--

CREATE TABLE `tbl_country_master` (
  `CountryId` int(11) NOT NULL,
  `CountryName` varchar(50) NOT NULL,
  `Description` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_country_master`
--

INSERT INTO `tbl_country_master` (`CountryId`, `CountryName`, `Description`) VALUES
(1, 'India', 'Largest democracy in the world.'),
(2, 'USA', 'America');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_degree`
--

CREATE TABLE `tbl_degree` (
  `did` int(11) NOT NULL,
  `Degree` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_degree`
--

INSERT INTO `tbl_degree` (`did`, `Degree`) VALUES
(1, 'Bachelor of Engineering'),
(2, 'Master of Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enrollmentno`
--

CREATE TABLE `tbl_enrollmentno` (
  `EnrollmentNo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_experience`
--

CREATE TABLE `tbl_experience` (
  `ExpId` int(50) NOT NULL,
  `ExpType` varchar(50) DEFAULT NULL,
  `Duration` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_experience`
--

INSERT INTO `tbl_experience` (`ExpId`, `ExpType`, `Duration`) VALUES
(1, '2', 'Year');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_functional_area`
--

CREATE TABLE `tbl_functional_area` (
  `FunctionalId` int(50) NOT NULL,
  `FunctionalArea` varchar(50) DEFAULT NULL,
  `Description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_functional_area`
--

INSERT INTO `tbl_functional_area` (`FunctionalId`, `FunctionalArea`, `Description`) VALUES
(1, 'Finance', 'Accounts and finance');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hint_question`
--

CREATE TABLE `tbl_hint_question` (
  `QuestionId` int(11) NOT NULL,
  `Question` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hint_question`
--

INSERT INTO `tbl_hint_question` (`QuestionId`, `Question`) VALUES
(1, 'What is your father\'s middle name?'),
(2, 'What is your pet name?');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jobopeningdetail`
--

CREATE TABLE `tbl_jobopeningdetail` (
  `username` varchar(50) DEFAULT NULL,
  `JobID` varchar(50) DEFAULT NULL,
  `JobCategory` varchar(50) DEFAULT NULL,
  `SkillsRequired` varchar(50) DEFAULT NULL,
  `Role` varchar(50) DEFAULT NULL,
  `MinimumQualification` varchar(50) DEFAULT NULL,
  `MaximumAge` int(11) DEFAULT NULL,
  `ExpectedSalary` float DEFAULT NULL,
  `JobLocation` varchar(50) DEFAULT NULL,
  `JobOpeningDate` date DEFAULT NULL,
  `JobClosingDate` date DEFAULT NULL,
  `JobDescription` varchar(2000) DEFAULT NULL,
  `Sno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jobopeningdetail`
--

INSERT INTO `tbl_jobopeningdetail` (`username`, `JobID`, `JobCategory`, `SkillsRequired`, `Role`, `MinimumQualification`, `MaximumAge`, `ExpectedSalary`, `JobLocation`, `JobOpeningDate`, `JobClosingDate`, `JobDescription`, `Sno`) VALUES
('sabby', 'DotNet Developer', 'IT/Software', 'ASP .NET, C#, C++', 'Jr Developer', 'No live KT with min 7 CGPA', 25, 6.5, 'Hyderabad', '2015-10-17', '2015-11-17', 'DotNet Development', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jobseekeracademicdetails`
--

CREATE TABLE `tbl_jobseekeracademicdetails` (
  `JobSeekerID` varchar(50) NOT NULL,
  `EnrollmentNo` varchar(100) NOT NULL,
  `HighestDegree` varchar(50) NOT NULL,
  `Branch` varchar(50) NOT NULL,
  `PassingYear` int(11) DEFAULT NULL,
  `Percentage` float DEFAULT NULL,
  `CGPA` float DEFAULT NULL,
  `DiplomaHSCPercentage` float NOT NULL,
  `SSCPercentage` float NOT NULL,
  `AreaOfSpecialization` varchar(100) DEFAULT NULL,
  `TechnicalExperience` varchar(50) DEFAULT NULL,
  `WorkField` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jobseekeracademicdetails`
--

INSERT INTO `tbl_jobseekeracademicdetails` (`JobSeekerID`, `EnrollmentNo`, `HighestDegree`, `Branch`, `PassingYear`, `Percentage`, `CGPA`, `DiplomaHSCPercentage`, `SSCPercentage`, `AreaOfSpecialization`, `TechnicalExperience`, `WorkField`) VALUES
('Deepak', 'COMP004', 'Bachelor of Engineering', 'Computer Engineering', 2017, 76, 8, 85, 80, '', '', ''),
('pratik', 'COMP002', 'Bachelor of Engineering', 'Computer Engineering', 2017, 0, 0, 82, 80, '', '', ''),
('pratzz', 'COMP003', 'Bachelor of Engineering', 'Computer Engineering', 2017, 81, 9.2, 76, 75, 'Networking', '', 'IT/Networking'),
('sainath', 'COMP001', 'Bachelor of Engineering', 'Computer Engineering', 2017, 73, 8.2, 85, 80, 'Web Development', '1', 'IT/Software'),
('shahid', 'COMP005', 'Master of Engineering', 'Computer Engineering', 2017, 80, 9, 86, 84, 'Java', '1', 'IT/Networking');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jobseekerregistration`
--

CREATE TABLE `tbl_jobseekerregistration` (
  `JobSeekerID` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `HintQuestion` varchar(100) NOT NULL,
  `Answer` varchar(100) NOT NULL,
  `path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jobseekerregistration`
--

INSERT INTO `tbl_jobseekerregistration` (`JobSeekerID`, `password`, `HintQuestion`, `Answer`, `path`) VALUES
('Deepak', 'deep', 'What is your pet name?', 'deeps', NULL),
('pratik', 'pratik', 'What is your pet name?', 'Thandi', NULL),
('pratzz', 'pratik', 'What is your pet name?', 'pratzz', NULL),
('sainath', 'sainath', 'What is your pet name?', 'sai', NULL),
('shahid', 'shahid', 'What is your pet name?', 'bhaijan', 'http://127.0.0.1/trainplace/uploads/Form.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jobseekerresponsetorecruiter`
--

CREATE TABLE `tbl_jobseekerresponsetorecruiter` (
  `rid` int(11) NOT NULL,
  `JobSeekerID` varchar(50) NOT NULL,
  `RecruiterName` varchar(50) NOT NULL,
  `JobID` varchar(50) NOT NULL,
  `DateOfResponse` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jobseekerresponsetorecruiter`
--

INSERT INTO `tbl_jobseekerresponsetorecruiter` (`rid`, `JobSeekerID`, `RecruiterName`, `JobID`, `DateOfResponse`) VALUES
(8, 'sainath', 'Microsoft', 'DotNet Developer', '2015-10-19 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jobtype_master`
--

CREATE TABLE `tbl_jobtype_master` (
  `JobId` int(11) NOT NULL,
  `JobType` varchar(50) NOT NULL,
  `Description` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jobtype_master`
--

INSERT INTO `tbl_jobtype_master` (`JobId`, `JobType`, `Description`) VALUES
(1, 'Programmer', 'C programmer'),
(2, 'Jr Manager', 'Management'),
(3, 'Jr Developer', 'development'),
(4, 'Sales Executive', 'Executive'),
(5, 'Testing', 'Software testing'),
(6, 'Analyzer', 'Analyzer');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location_master`
--

CREATE TABLE `tbl_location_master` (
  `LocationId` int(11) NOT NULL,
  `LocationName` varchar(50) DEFAULT NULL,
  `Description` varchar(80) DEFAULT NULL,
  `StateId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_qualification`
--

CREATE TABLE `tbl_qualification` (
  `QualificationId` int(11) NOT NULL,
  `Qualification` varchar(50) DEFAULT NULL,
  `Description` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_qualification`
--

INSERT INTO `tbl_qualification` (`QualificationId`, `Qualification`, `Description`) VALUES
(2, 'No live KT', 'No keep terms'),
(3, 'Upto 2 live KT', 'up to keep terms'),
(4, 'No live KT with min 7 CGPA', 'NO KT with 7 and up CGPA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_recruiteraccountdetails`
--

CREATE TABLE `tbl_recruiteraccountdetails` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `HintQuestion` varchar(100) DEFAULT NULL,
  `Answer` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_recruiteraccountdetails`
--

INSERT INTO `tbl_recruiteraccountdetails` (`username`, `password`, `HintQuestion`, `Answer`) VALUES
('sabby', 'sabby', 'What is your pet name?', 'sabby');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_recruiterorganisationdetails`
--

CREATE TABLE `tbl_recruiterorganisationdetails` (
  `username` varchar(50) NOT NULL,
  `OrganizationName` varchar(50) NOT NULL,
  `BusinessSector` varchar(50) NOT NULL,
  `Certificate1` varchar(50) DEFAULT NULL,
  `Certificate2` varchar(50) DEFAULT NULL,
  `Certificate3` varchar(50) DEFAULT NULL,
  `Website` varchar(100) DEFAULT NULL,
  `EmailID1` varchar(100) NOT NULL,
  `EmailID2` varchar(100) DEFAULT NULL,
  `Address` varchar(1024) DEFAULT NULL,
  `OrganizationEnvironment` varchar(2000) DEFAULT NULL,
  `TermsAndCondition` varchar(2000) DEFAULT NULL,
  `Other` varchar(2000) DEFAULT NULL,
  `SizeOfOrganization` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_recruiterorganisationdetails`
--

INSERT INTO `tbl_recruiterorganisationdetails` (`username`, `OrganizationName`, `BusinessSector`, `Certificate1`, `Certificate2`, `Certificate3`, `Website`, `EmailID1`, `EmailID2`, `Address`, `OrganizationEnvironment`, `TermsAndCondition`, `Other`, `SizeOfOrganization`) VALUES
('sabby', 'Microsoft', 'Software', '#Level1', '#Level2', '', 'www.microsoft.com', 'contact@micro.com', '', 'Microsoft India, Hyderabad', 'Well known in IT Sector', 'Strict terms and conditions', '', 50);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_recruiterresponsetojobseeker`
--

CREATE TABLE `tbl_recruiterresponsetojobseeker` (
  `rid` int(11) NOT NULL,
  `JobSeekerName` varchar(50) NOT NULL,
  `RecruiterName` varchar(50) NOT NULL,
  `JobID` varchar(50) NOT NULL,
  `DateOfResponse` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_recruiterresponsetojobseeker`
--

INSERT INTO `tbl_recruiterresponsetojobseeker` (`rid`, `JobSeekerName`, `RecruiterName`, `JobID`, `DateOfResponse`) VALUES
(6, 'sainath', 'Microsoft', 'DotNet Developer', '2015-10-19 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skill_master`
--

CREATE TABLE `tbl_skill_master` (
  `SkillId` int(11) NOT NULL,
  `SkillType` varchar(50) DEFAULT NULL,
  `Description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_skill_master`
--

INSERT INTO `tbl_skill_master` (`SkillId`, `SkillType`, `Description`) VALUES
(1, 'C', 'C language');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state_master`
--

CREATE TABLE `tbl_state_master` (
  `StateId` int(11) NOT NULL,
  `StateName` varchar(50) DEFAULT NULL,
  `Description` varchar(80) DEFAULT NULL,
  `CountryId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_state_master`
--

INSERT INTO `tbl_state_master` (`StateId`, `StateName`, `Description`, `CountryId`) VALUES
(1, 'Maharashtra', 'Western Indian state', 1),
(4, 'Delhi', 'Capital', 1),
(5, 'Karnataka', 'South Indian State', 1),
(6, 'Tamil Nadu', 'South Indian State', 1),
(9, 'Washington D.C.', 'Capital state', 2),
(10, 'Punjab', 'Punjabi', 2),
(11, 'New York', 'usa', 2),
(12, 'West Bengal', 'fgghhghg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_studentdetail_master`
--

CREATE TABLE `tbl_studentdetail_master` (
  `StudentId` int(11) NOT NULL,
  `RollNo` varchar(50) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Qualification` int(11) DEFAULT NULL,
  `PassingYear` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_workfield`
--

CREATE TABLE `tbl_workfield` (
  `wid` int(11) NOT NULL,
  `WorkField` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_workfield`
--

INSERT INTO `tbl_workfield` (`wid`, `WorkField`) VALUES
(1, 'IT/Software'),
(2, 'Finance & Accounting'),
(3, 'IT/Networking'),
(4, 'Sales & Marketing'),
(6, 'Administration'),
(7, 'Management'),
(8, 'Communications'),
(9, 'Research & Development'),
(10, 'Education');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbljobseekerbackgrounddetails`
--
ALTER TABLE `tbljobseekerbackgrounddetails`
  ADD KEY `JobSeekerID` (`JobSeekerID`);

--
-- Indexes for table `tbljobseekercontactdetails`
--
ALTER TABLE `tbljobseekercontactdetails`
  ADD UNIQUE KEY `JobSeekerID_2` (`JobSeekerID`),
  ADD KEY `JobSeekerID` (`JobSeekerID`);

--
-- Indexes for table `tbljobseekerjobdetails`
--
ALTER TABLE `tbljobseekerjobdetails`
  ADD KEY `JobSeekerID` (`JobSeekerID`);

--
-- Indexes for table `tbljobseekerresume`
--
ALTER TABLE `tbljobseekerresume`
  ADD KEY `JobSeekerID` (`JobSeekerID`);

--
-- Indexes for table `tbl_adminlogin`
--
ALTER TABLE `tbl_adminlogin`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tbl_branch`
--
ALTER TABLE `tbl_branch`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `tbl_businesssector`
--
ALTER TABLE `tbl_businesssector`
  ADD PRIMARY KEY (`BusinessSectorID`);

--
-- Indexes for table `tbl_city_master`
--
ALTER TABLE `tbl_city_master`
  ADD PRIMARY KEY (`CityId`),
  ADD KEY `StateId` (`StateId`);

--
-- Indexes for table `tbl_country_master`
--
ALTER TABLE `tbl_country_master`
  ADD PRIMARY KEY (`CountryId`);

--
-- Indexes for table `tbl_degree`
--
ALTER TABLE `tbl_degree`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `tbl_enrollmentno`
--
ALTER TABLE `tbl_enrollmentno`
  ADD PRIMARY KEY (`EnrollmentNo`);

--
-- Indexes for table `tbl_experience`
--
ALTER TABLE `tbl_experience`
  ADD PRIMARY KEY (`ExpId`);

--
-- Indexes for table `tbl_functional_area`
--
ALTER TABLE `tbl_functional_area`
  ADD PRIMARY KEY (`FunctionalId`);

--
-- Indexes for table `tbl_hint_question`
--
ALTER TABLE `tbl_hint_question`
  ADD PRIMARY KEY (`QuestionId`);

--
-- Indexes for table `tbl_jobopeningdetail`
--
ALTER TABLE `tbl_jobopeningdetail`
  ADD PRIMARY KEY (`Sno`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `tbl_jobseekeracademicdetails`
--
ALTER TABLE `tbl_jobseekeracademicdetails`
  ADD UNIQUE KEY `JobSeekerID` (`JobSeekerID`);

--
-- Indexes for table `tbl_jobseekerregistration`
--
ALTER TABLE `tbl_jobseekerregistration`
  ADD PRIMARY KEY (`JobSeekerID`),
  ADD UNIQUE KEY `JobSeekerID` (`JobSeekerID`);

--
-- Indexes for table `tbl_jobseekerresponsetorecruiter`
--
ALTER TABLE `tbl_jobseekerresponsetorecruiter`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `JobSeekerID` (`JobSeekerID`);

--
-- Indexes for table `tbl_jobtype_master`
--
ALTER TABLE `tbl_jobtype_master`
  ADD PRIMARY KEY (`JobId`);

--
-- Indexes for table `tbl_location_master`
--
ALTER TABLE `tbl_location_master`
  ADD PRIMARY KEY (`LocationId`);

--
-- Indexes for table `tbl_qualification`
--
ALTER TABLE `tbl_qualification`
  ADD PRIMARY KEY (`QualificationId`);

--
-- Indexes for table `tbl_recruiteraccountdetails`
--
ALTER TABLE `tbl_recruiteraccountdetails`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tbl_recruiterorganisationdetails`
--
ALTER TABLE `tbl_recruiterorganisationdetails`
  ADD PRIMARY KEY (`OrganizationName`),
  ADD KEY `username` (`username`);
ALTER TABLE `tbl_recruiterorganisationdetails` ADD FULLTEXT KEY `username_2` (`username`);
ALTER TABLE `tbl_recruiterorganisationdetails` ADD FULLTEXT KEY `username_3` (`username`);

--
-- Indexes for table `tbl_recruiterresponsetojobseeker`
--
ALTER TABLE `tbl_recruiterresponsetojobseeker`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `JobSeekerName` (`JobSeekerName`);

--
-- Indexes for table `tbl_skill_master`
--
ALTER TABLE `tbl_skill_master`
  ADD PRIMARY KEY (`SkillId`);

--
-- Indexes for table `tbl_state_master`
--
ALTER TABLE `tbl_state_master`
  ADD PRIMARY KEY (`StateId`),
  ADD KEY `CountryId` (`CountryId`);

--
-- Indexes for table `tbl_studentdetail_master`
--
ALTER TABLE `tbl_studentdetail_master`
  ADD PRIMARY KEY (`RollNo`),
  ADD KEY `Qualification` (`Qualification`);

--
-- Indexes for table `tbl_workfield`
--
ALTER TABLE `tbl_workfield`
  ADD PRIMARY KEY (`wid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_branch`
--
ALTER TABLE `tbl_branch`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_businesssector`
--
ALTER TABLE `tbl_businesssector`
  MODIFY `BusinessSectorID` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_city_master`
--
ALTER TABLE `tbl_city_master`
  MODIFY `CityId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_country_master`
--
ALTER TABLE `tbl_country_master`
  MODIFY `CountryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_degree`
--
ALTER TABLE `tbl_degree`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_experience`
--
ALTER TABLE `tbl_experience`
  MODIFY `ExpId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_functional_area`
--
ALTER TABLE `tbl_functional_area`
  MODIFY `FunctionalId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_hint_question`
--
ALTER TABLE `tbl_hint_question`
  MODIFY `QuestionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_jobopeningdetail`
--
ALTER TABLE `tbl_jobopeningdetail`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_jobseekerresponsetorecruiter`
--
ALTER TABLE `tbl_jobseekerresponsetorecruiter`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_jobtype_master`
--
ALTER TABLE `tbl_jobtype_master`
  MODIFY `JobId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_location_master`
--
ALTER TABLE `tbl_location_master`
  MODIFY `LocationId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_qualification`
--
ALTER TABLE `tbl_qualification`
  MODIFY `QualificationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_recruiterresponsetojobseeker`
--
ALTER TABLE `tbl_recruiterresponsetojobseeker`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_skill_master`
--
ALTER TABLE `tbl_skill_master`
  MODIFY `SkillId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_state_master`
--
ALTER TABLE `tbl_state_master`
  MODIFY `StateId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_workfield`
--
ALTER TABLE `tbl_workfield`
  MODIFY `wid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbljobseekerbackgrounddetails`
--
ALTER TABLE `tbljobseekerbackgrounddetails`
  ADD CONSTRAINT `tbljobseekerbackgrounddetails_ibfk_1` FOREIGN KEY (`JobSeekerID`) REFERENCES `tbl_jobseekerregistration` (`JobSeekerID`);

--
-- Constraints for table `tbljobseekercontactdetails`
--
ALTER TABLE `tbljobseekercontactdetails`
  ADD CONSTRAINT `tbljobseekercontactdetails_ibfk_1` FOREIGN KEY (`JobSeekerID`) REFERENCES `tbl_jobseekerregistration` (`JobSeekerID`);

--
-- Constraints for table `tbljobseekerjobdetails`
--
ALTER TABLE `tbljobseekerjobdetails`
  ADD CONSTRAINT `tbljobseekerjobdetails_ibfk_1` FOREIGN KEY (`JobSeekerID`) REFERENCES `tbl_jobseekerregistration` (`JobSeekerID`);

--
-- Constraints for table `tbljobseekerresume`
--
ALTER TABLE `tbljobseekerresume`
  ADD CONSTRAINT `tbljobseekerresume_ibfk_1` FOREIGN KEY (`JobSeekerID`) REFERENCES `tbl_jobseekerregistration` (`JobSeekerID`);

--
-- Constraints for table `tbl_city_master`
--
ALTER TABLE `tbl_city_master`
  ADD CONSTRAINT `tbl_city_master_ibfk_1` FOREIGN KEY (`StateId`) REFERENCES `tbl_state_master` (`StateId`);

--
-- Constraints for table `tbl_jobopeningdetail`
--
ALTER TABLE `tbl_jobopeningdetail`
  ADD CONSTRAINT `tbl_jobopeningdetail_ibfk_1` FOREIGN KEY (`username`) REFERENCES `tbl_recruiteraccountdetails` (`username`);

--
-- Constraints for table `tbl_jobseekeracademicdetails`
--
ALTER TABLE `tbl_jobseekeracademicdetails`
  ADD CONSTRAINT `tbl_jobseekeracademicdetails_ibfk_1` FOREIGN KEY (`JobSeekerID`) REFERENCES `tbl_jobseekerregistration` (`JobSeekerID`);

--
-- Constraints for table `tbl_jobseekerresponsetorecruiter`
--
ALTER TABLE `tbl_jobseekerresponsetorecruiter`
  ADD CONSTRAINT `tbl_jobseekerresponsetorecruiter_ibfk_1` FOREIGN KEY (`JobSeekerID`) REFERENCES `tbl_jobseekerregistration` (`JobSeekerID`);

--
-- Constraints for table `tbl_recruiterorganisationdetails`
--
ALTER TABLE `tbl_recruiterorganisationdetails`
  ADD CONSTRAINT `tbl_recruiterorganisationdetails_ibfk_1` FOREIGN KEY (`username`) REFERENCES `tbl_recruiteraccountdetails` (`username`);

--
-- Constraints for table `tbl_recruiterresponsetojobseeker`
--
ALTER TABLE `tbl_recruiterresponsetojobseeker`
  ADD CONSTRAINT `tbl_recruiterresponsetojobseeker_ibfk_1` FOREIGN KEY (`JobSeekerName`) REFERENCES `tbl_jobseekerregistration` (`JobSeekerID`);

--
-- Constraints for table `tbl_state_master`
--
ALTER TABLE `tbl_state_master`
  ADD CONSTRAINT `tbl_state_master_ibfk_1` FOREIGN KEY (`CountryId`) REFERENCES `tbl_country_master` (`CountryId`);

--
-- Constraints for table `tbl_studentdetail_master`
--
ALTER TABLE `tbl_studentdetail_master`
  ADD CONSTRAINT `tbl_studentdetail_master_ibfk_1` FOREIGN KEY (`Qualification`) REFERENCES `tbl_qualification` (`QualificationId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
