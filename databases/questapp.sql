-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 25, 2020 at 02:38 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `questapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `qbp_table`
--

CREATE TABLE `qbp_table` (
  `ID` int(11) NOT NULL,
  `Question` text NOT NULL,
  `OptionA` varchar(255) NOT NULL,
  `OptionB` varchar(255) NOT NULL,
  `OptionC` varchar(255) NOT NULL,
  `OptionD` varchar(255) NOT NULL,
  `Strongly_Agree` int(11) NOT NULL DEFAULT '1',
  `Agree` int(11) NOT NULL DEFAULT '1',
  `Disagree` int(11) NOT NULL DEFAULT '1',
  `Strongly_Disagree` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qbp_table`
--

INSERT INTO `qbp_table` (`ID`, `Question`, `OptionA`, `OptionB`, `OptionC`, `OptionD`, `Strongly_Agree`, `Agree`, `Disagree`, `Strongly_Disagree`) VALUES
(1, 'Blasts are planned and designed to ensure good blast results i.e. good fragmentation, displacement of muck pile and looseness. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 4, 9, 13, 6),
(2, 'Drilling patterns are laid out accurately. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 1, 3, 3, 4),
(3, 'Occurrences such as any accident or damage to property by fly rock are recorded. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 3, 5, 7, 4),
(4, 'Where noise, airblast and/or ground vibration are a problem, complaints are recorded. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 1, 2, 1, 1),
(5, 'Drilling is not carried out on a bench face until it has been checked for misfires.', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 2, 2, 1, 1),
(6, 'All means of entry to the place of blasting are securely guarded against entry by persons, or warning notices are erected to prevent entry. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 1, 1, 1, 2),
(7, 'Any charge in a designated blast which has not been fired or has not exploded is treated as misfire.', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 1, 1, 1, 2),
(8, 'A sufficient depth of each blasthole is left uncharged to permit adequate stemming.', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 1, 2, 1, 1),
(9, 'The depth and condition of blastholes are checked prior to charging.', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 1, 2, 1, 1),
(10, 'Drill holes are checked prior to charging for correct depth, blockages and  temperature ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 1, 2, 1, 1),
(11, 'Vibration level due to blasting are routinely been monitored in quarry. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 1, 2, 1, 1),
(12, 'Peak Particle Velocity (PPV)  for blast design are routinely being monitored.', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 1, 2, 1, 1),
(13, 'Vibration level is within an acceptable level.', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 1, 2, 1, 1),
(14, 'The occurrence of cracks within the residence structure near the blast site is concurrently investigated and recorded.', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 1, 2, 1, 1),
(15, 'In the blast design Burden and Spacing are constant.', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 1, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `qep_table`
--

CREATE TABLE `qep_table` (
  `ID` int(11) NOT NULL,
  `Question` text NOT NULL,
  `OptionA` varchar(255) NOT NULL,
  `OptionB` varchar(255) NOT NULL,
  `OptionC` varchar(255) NOT NULL,
  `OptionD` varchar(255) NOT NULL,
  `Strongly_Agree` int(11) NOT NULL DEFAULT '1',
  `Agree` int(11) NOT NULL DEFAULT '1',
  `Disagree` int(11) NOT NULL DEFAULT '1',
  `Strongly_Disagree` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qep_table`
--

INSERT INTO `qep_table` (`ID`, `Question`, `OptionA`, `OptionB`, `OptionC`, `OptionD`, `Strongly_Agree`, `Agree`, `Disagree`, `Strongly_Disagree`) VALUES
(1, 'The quarry has a prepared emergency plan. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 4, 9, 13, 6),
(2, 'The emergency plan is known by the quarry personnel. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 1, 3, 3, 4),
(3, 'Personnel are aware of their responsibilities and actions in an emergency. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 3, 5, 7, 4),
(4, 'The emergency plan identifies the types of incidents which may affect the enterprise. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 1, 1, 2, 1),
(5, 'There is an on-site first aid services and facilities are available at the quarry. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 2, 1, 2, 1),
(6, 'There is an on-site firefighting resources include trained personnel.', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 1, 1, 2, 1),
(7, 'There is regular training for site personnel on how to use firefighting equipment. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 1, 1, 1, 2),
(8, 'The emergency plan includes a means of visitor control. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 2, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `qes_table`
--

CREATE TABLE `qes_table` (
  `ID` int(11) NOT NULL,
  `Question` text NOT NULL,
  `OptionA` varchar(255) NOT NULL,
  `OptionB` varchar(255) NOT NULL,
  `OptionC` varchar(255) NOT NULL,
  `OptionD` varchar(255) NOT NULL,
  `Strongly_Agree` int(11) NOT NULL DEFAULT '1',
  `Agree` int(11) NOT NULL DEFAULT '1',
  `Disagree` int(11) NOT NULL DEFAULT '1',
  `Strongly_Disagree` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qes_table`
--

INSERT INTO `qes_table` (`ID`, `Question`, `OptionA`, `OptionB`, `OptionC`, `OptionD`, `Strongly_Agree`, `Agree`, `Disagree`, `Strongly_Disagree`) VALUES
(1, 'Magazine of greater than 250kg capacity is licensed by Chief Inspector of Mines/Explosives. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 4, 10, 13, 6),
(2, 'The magazine is located at least 50 metres away from any entrance to the quarry.', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 4, 2, 3, 4),
(3, 'Explosives magazine is in excess of 10 m from any detonator magazine.', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 4, 6, 6, 4),
(4, 'Magazine is kept locked except when stock movement is occurring. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 2, 1, 1, 1),
(5, 'Incompatible explosive products are not stored together, detonators are segregated from detonating fuse and explosives.', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 2, 1, 2, 1),
(6, 'No additional unauthorized materials are stored in the magazine. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 2, 1, 1, 1),
(7, 'No explosives are stored loose in the magazine. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 2, 1, 1, 1),
(8, 'A responsible person has been appointed to control the magazine.  ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 2, 1, 1, 1),
(9, 'Prominent “EXPLOSIVES” sign displayed on magazine. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `qit_table`
--

CREATE TABLE `qit_table` (
  `ID` int(11) NOT NULL,
  `Question` text NOT NULL,
  `OptionA` varchar(255) NOT NULL,
  `OptionB` varchar(255) NOT NULL,
  `OptionC` varchar(255) NOT NULL,
  `OptionD` varchar(255) NOT NULL,
  `Strongly_Agree` int(11) NOT NULL DEFAULT '1',
  `Agree` int(11) NOT NULL DEFAULT '1',
  `Disagree` int(11) NOT NULL DEFAULT '1',
  `Strongly_Disagree` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qit_table`
--

INSERT INTO `qit_table` (`ID`, `Question`, `OptionA`, `OptionB`, `OptionC`, `OptionD`, `Strongly_Agree`, `Agree`, `Disagree`, `Strongly_Disagree`) VALUES
(1, 'Out of service tags are used to warn against the use of plant which is unsafe to be used or which may be damaged if it is used. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 6, 8, 13, 6),
(2, 'Danger tags are used to prohibit the use of plant on which an employee is undertaking work. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 1, 4, 3, 4),
(3, 'Each employee removes his own danger tag after completing the work and prior to leaving the worksite at the end of the shift. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 4, 5, 6, 5),
(4, 'Out of service tags are attached prior to removing danger tags when work on plant is not completed. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 2, 1, 2, 1),
(5, 'The effectiveness of devices used to isolate plant is proved prior to attaching. danger or out of service tags.', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 3, 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `qms_table`
--

CREATE TABLE `qms_table` (
  `ID` int(11) NOT NULL,
  `Question` text NOT NULL,
  `OptionA` varchar(255) NOT NULL,
  `OptionB` varchar(255) NOT NULL,
  `OptionC` varchar(255) NOT NULL,
  `OptionD` varchar(255) NOT NULL,
  `Strongly_Agree` int(11) NOT NULL DEFAULT '1',
  `Agree` int(11) NOT NULL DEFAULT '1',
  `Disagree` int(11) NOT NULL DEFAULT '1',
  `Strongly_Disagree` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qms_table`
--

INSERT INTO `qms_table` (`ID`, `Question`, `OptionA`, `OptionB`, `OptionC`, `OptionD`, `Strongly_Agree`, `Agree`, `Disagree`, `Strongly_Disagree`) VALUES
(1, 'There is a written policy statement which sets out the Environmental, Safety and Health Policy of the quarry.', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 7, 11, 13, 7),
(2, 'A copy of the policy statement is displayed in a prominent position within the quarry.', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 1, 5, 4, 4),
(3, 'An up to date organisation chart is available in the quarry.', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 5, 5, 7, 4),
(4, 'Senior managers accept their responsibilities, with regard to Environmental, Safety and Health Policy.', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 2, 3, 1, 1),
(5, 'Site management staffs encourage employees to systematically improve work processes to enhance Environmental, Safety and Health.', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 4, 1, 1, 1),
(6, 'Employees exhibit an understanding of the quarry Environmental, Safety and Health objectives.', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 1, 2, 2, 1),
(7, 'There is a formal programme to monitor occupational health hazards that have been identified.', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 1, 2, 1, 2),
(8, 'Contract and policy document indicates that Contractors employed in the enterprise are required to comply with the principal employer`s Safety and Health Policy. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 1, 1, 2, 1),
(9, 'Personal protective equipment is available to all employees at no cost', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 1, 3, 1, 2),
(10, 'There is a system for the repair of reported equipment and plant faults.', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 2, 2, 1, 1),
(11, 'Formal procedures are in place to investigate accidents, occurrences and property damage. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 2, 2, 1, 1),
(12, 'There is an induction and training process at the quarry.', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 2, 2, 1, 1),
(13, 'The induction process involves Environmental, Health and Safety issues', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 1, 3, 1, 1),
(14, 'Environmental, Safety and Health meetings are held regularly on site.', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 2, 2, 1, 1),
(15, 'Communications are available between the quarry and outside emergency services. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 2, 1, 1, 2),
(16, 'Management carries out its statutory responsibilities in respect of the recording and reporting of occurrences and potentially serious occurrences. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 2, 1, 2, 1),
(17, 'Management carries out its statutory responsibilities in respect of the recording of lost time injuries to workers. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 2, 2, 1, 1),
(18, 'Management maintains a database recording each employee`s training history.  ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 4, 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `qoh_table`
--

CREATE TABLE `qoh_table` (
  `ID` int(11) NOT NULL,
  `Question` text NOT NULL,
  `OptionA` varchar(255) NOT NULL,
  `OptionB` varchar(255) NOT NULL,
  `OptionC` varchar(255) NOT NULL,
  `OptionD` varchar(255) NOT NULL,
  `Strongly_Agree` int(11) NOT NULL DEFAULT '1',
  `Agree` int(11) NOT NULL DEFAULT '1',
  `Disagree` int(11) NOT NULL DEFAULT '1',
  `Strongly_Disagree` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qoh_table`
--

INSERT INTO `qoh_table` (`ID`, `Question`, `OptionA`, `OptionB`, `OptionC`, `OptionD`, `Strongly_Agree`, `Agree`, `Disagree`, `Strongly_Disagree`) VALUES
(1, 'The quarry has identified occupational health hazards.', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 4, 9, 13, 6),
(2, 'Control measures are in place to reduce occupational health hazards e.g. dust suppression systems, noise enclosures etc. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 2, 2, 3, 4),
(3, 'Control measures in place to reduce the occupational health hazards are effective. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 4, 5, 6, 4),
(4, 'Employees have been educated in the occupational health hazards identified in the quarry.', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 2, 1, 1, 1),
(5, 'The exposure of employees to the occupational health hazards identified has been evaluated. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 2, 1, 1, 2),
(6, 'Where necessary employees wear appropriate personal protective equipment to reduce exposure to occupational health hazards identified. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 1, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `qts_table`
--

CREATE TABLE `qts_table` (
  `ID` int(11) NOT NULL,
  `Question` text NOT NULL,
  `OptionA` varchar(255) NOT NULL,
  `OptionB` varchar(255) NOT NULL,
  `OptionC` varchar(255) NOT NULL,
  `OptionD` varchar(255) NOT NULL,
  `Strongly_Agree` int(11) NOT NULL DEFAULT '1',
  `Agree` int(11) NOT NULL DEFAULT '1',
  `Disagree` int(11) NOT NULL DEFAULT '1',
  `Strongly_Disagree` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qts_table`
--

INSERT INTO `qts_table` (`ID`, `Question`, `OptionA`, `OptionB`, `OptionC`, `OptionD`, `Strongly_Agree`, `Agree`, `Disagree`, `Strongly_Disagree`) VALUES
(1, 'The design is such that potential instability of the dump is minimized.', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 4, 9, 13, 6),
(2, 'Day and night where applicable effective route marking is provided for approach to tipping areas. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 1, 3, 3, 4),
(3, 'There is a rising, or at least flat, grade towards the dump edge.', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 3, 5, 7, 4),
(4, 'There is control of dust generation by constant watering with sprays.', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 2, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `qws_table`
--

CREATE TABLE `qws_table` (
  `ID` int(11) NOT NULL,
  `Question` text NOT NULL,
  `OptionA` varchar(255) NOT NULL,
  `OptionB` varchar(255) NOT NULL,
  `OptionC` varchar(255) NOT NULL,
  `OptionD` varchar(255) NOT NULL,
  `Strongly_Agree` int(11) NOT NULL DEFAULT '1',
  `Agree` int(11) NOT NULL DEFAULT '1',
  `Disagree` int(11) NOT NULL DEFAULT '1',
  `Strongly_Disagree` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qws_table`
--

INSERT INTO `qws_table` (`ID`, `Question`, `OptionA`, `OptionB`, `OptionC`, `OptionD`, `Strongly_Agree`, `Agree`, `Disagree`, `Strongly_Disagree`) VALUES
(1, 'The quarry has a workshop facility, provided for the maintenance of fixed and mobile plant.', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 4, 8, 13, 7),
(2, 'The quarry workshop facility is maintained in a tidy condition, to avoid near misses and accident. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 1, 2, 3, 5),
(3, 'Signs are provided to warn of possible eye, hearing and other hazards in the quarry workshop.', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 3, 5, 6, 5),
(4, 'Fire control equipment is strategically position at the quarry workshop. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 1, 1, 1, 2),
(5, 'Machinery is maintained on a regular basis. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 2, 1, 1, 2),
(6, 'Electrical tools and equipment at the quarry workshop is periodically checked and tagged. ', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 1, 1, 1, 2),
(7, 'Electric welding machines are regularly tested and inspected e.g. leads, accessories, earth leakage circuit etc. to maintain safe condition', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 1, 1, 1, 2),
(8, 'High pressure gas hoses and gauges are free from damage.', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 1, 1, 1, 3),
(9, 'Proper material handling equipment is provided for the tasks undertaken.', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 1, 1, 2, 1),
(10, 'Adequate lighting is available for work to be carried out at the workshop.', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 2, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `respondents`
--

CREATE TABLE `respondents` (
  `userID` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `respondents`
--

INSERT INTO `respondents` (`userID`, `username`, `password`) VALUES
(1, 'Vicjoy', '$2y$10$ae3juO7JHX4ZI80Cu6ofwOSRip7uSE0xRLbI07XBKczAbumcQEPLC'),
(2, 'Charity', '$2y$10$soDneJOuAnhoz8toPA1P...zBUxkGwVToX5nz83ygZ19IC0Ke0QPu'),
(3, 'adekunlegold', '$2y$10$hyikFN62dfWVpFVK/hqQyu/G8thtQTEAwbfWBRLZSpnsisTNG3xPu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `qbp_table`
--
ALTER TABLE `qbp_table`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `qep_table`
--
ALTER TABLE `qep_table`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `qes_table`
--
ALTER TABLE `qes_table`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `qit_table`
--
ALTER TABLE `qit_table`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `qms_table`
--
ALTER TABLE `qms_table`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `qoh_table`
--
ALTER TABLE `qoh_table`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `qts_table`
--
ALTER TABLE `qts_table`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `qws_table`
--
ALTER TABLE `qws_table`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `respondents`
--
ALTER TABLE `respondents`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `qbp_table`
--
ALTER TABLE `qbp_table`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `qep_table`
--
ALTER TABLE `qep_table`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `qes_table`
--
ALTER TABLE `qes_table`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `qit_table`
--
ALTER TABLE `qit_table`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `qms_table`
--
ALTER TABLE `qms_table`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `qoh_table`
--
ALTER TABLE `qoh_table`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `qts_table`
--
ALTER TABLE `qts_table`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `qws_table`
--
ALTER TABLE `qws_table`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `respondents`
--
ALTER TABLE `respondents`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
