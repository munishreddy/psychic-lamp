-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2018 at 07:50 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `areaofinterset`
--

CREATE TABLE `areaofinterset` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `areaofinterset` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `areaofinterset`
--

INSERT INTO `areaofinterset` (`id`, `userid`, `areaofinterset`) VALUES
(1, 1, 'Web Development'),
(2, 1, 'Networking'),
(3, 2, 'Embedded Systems'),
(4, 2, 'Programming'),
(5, 2, 'Digital Electronics');

-- --------------------------------------------------------

--
-- Table structure for table `basicdetails`
--

CREATE TABLE `basicdetails` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `name` text NOT NULL,
  `initial` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `zipcode` bigint(10) NOT NULL,
  `email` text NOT NULL,
  `dob` text NOT NULL,
  `gender` text NOT NULL,
  `fathername` text NOT NULL,
  `mothername` text NOT NULL,
  `nationality` text NOT NULL,
  `martialstatus` text NOT NULL,
  `mothertongue` text NOT NULL,
  `languages` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basicdetails`
--

INSERT INTO `basicdetails` (`id`, `userid`, `name`, `initial`, `address`, `city`, `zipcode`, `email`, `dob`, `gender`, `fathername`, `mothername`, `nationality`, `martialstatus`, `mothertongue`, `languages`) VALUES
(1, 1, 'munish kumar', 'M', 'ponneri', 'Chennai', 601204, 'munishkmr28@gmail.com', '28/08/1995', 'Male', 'Muni Reddy', 'Knachana', 'indian', 'single', 'telugu', 'tamil,telugu and english'),
(2, 2, 'Prince', 'R', '1/2706, 2nd Street, MGR Nagar, Redhills', 'Chennai', 600052, 'princejessie1996@gmail.com', '30-12-1996', 'Male', 'Rajendran R', 'Jessie S', 'Indian', 'Unmarried', 'Tamil', 'English, Tamil, Hindi');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `SSLC` text NOT NULL,
  `HSC` text NOT NULL,
  `degree` text NOT NULL,
  `percent` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `userid`, `SSLC`, `HSC`, `degree`, `percent`) VALUES
(1, 1, '77%', '72%', 'B.E (CSE)', '68%'),
(2, 2, '91.6%', '84.75%', 'B.E (ECE)', '68.2%');

-- --------------------------------------------------------

--
-- Table structure for table `industrialexperience`
--

CREATE TABLE `industrialexperience` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `companyname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invimt`
--

CREATE TABLE `invimt` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `compname` text NOT NULL,
  `compdesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invimt`
--

INSERT INTO `invimt` (`id`, `userid`, `compname`, `compdesc`) VALUES
(1, 1, 'KASHIV info tech ', 'AnnaNagar'),
(2, 1, 'HCL ', 'vadapalani'),
(3, 1, 'ANIPIX Animation Academy ', 'Alwarpet.'),
(4, 2, 'IGCAR', 'sema place'),
(5, 2, 'AIR', 'bangam'),
(6, 2, 'BSNL REGIONAL TELECOM TRAINING CENTRE', 'mass eh');

-- --------------------------------------------------------

--
-- Table structure for table `password_link`
--

CREATE TABLE `password_link` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `email` text NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_link`
--

INSERT INTO `password_link` (`id`, `userid`, `email`, `code`) VALUES
(1, 1, 'aa956ce6a38975ac8999a79b968810ab', 'c24a32c563290f4347f8225282b56247');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `userid`, `images`) VALUES
(1, 1, 'munish kumar1.jpeg'),
(2, 2, 'Prince2.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `projecttopic` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `userid`, `projecttopic`, `description`) VALUES
(1, 1, 'portfolio generator', 'done nothing'),
(2, 2, 'Identification of Quality Index of Fruit/Vegetable using Image Processing', 'Adhu lam solradhuku illa');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `phone` bigint(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `username`, `email`, `password`, `phone`) VALUES
(1, 'munish kumar', 'munish ', 'munishkmr28@gmail.com', 'munish', 9965478671),
(2, 'Prince R', 'munish kumar', 'princejessie1996@gmail.com', 'Pp0@rprince3012', 8939198494);

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `document` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id`, `userid`, `document`) VALUES
(1, 1, 'Bharanipbk resume.docx'),
(2, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `technicalskill`
--

CREATE TABLE `technicalskill` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `techtopic` text NOT NULL,
  `aboutit` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technicalskill`
--

INSERT INTO `technicalskill` (`id`, `userid`, `techtopic`, `aboutit`) VALUES
(1, 1, 'programming', ', C++, PYTHON,PHP,MYSQL,HTML,CSS,JAVASCRIPT.'),
(2, 1, 'Designing:', 'Adobe Photoshop , Axure.'),
(3, 1, 'Operating Systems ', 'windows,linux(kali & ubuntu).'),
(4, 2, 'Programming', 'C,C++,Java and Embedded C');

-- --------------------------------------------------------

--
-- Table structure for table `try`
--

CREATE TABLE `try` (
  `id` int(11) NOT NULL,
  `userid` text NOT NULL,
  `techtopic` text NOT NULL,
  `aboutit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `try`
--

INSERT INTO `try` (`id`, `userid`, `techtopic`, `aboutit`) VALUES
(1, '', '', ''),
(2, '2', 'temp1', 'temp2'),
(3, '2', 'temp1', 'temp2'),
(4, '2', 'gaming', 'unity,unreal engine'),
(5, '2', 'designing', 'photoshop,after effects'),
(6, '2', '', ''),
(7, '2', '', 'd,m ,dm ds,mdfkj;kdjf;kdj ks sdk ,nf;lkenl;vkw;lkv wl'),
(8, '2', '', ''),
(9, '2', '', ''),
(10, '2', '', 'd,m ,dm ds,mdfkj;kdjf;kdj ks sdk ,nf;lkenl;vkw;lkv wl'),
(11, '2', '', ''),
(12, '2', '', ''),
(13, '2', '', 'd,m ,dm ds,mdfkj;kdjf;kdj ks sdk ,nf;lkenl;vkw;lkv wl'),
(14, '2', '', ''),
(15, '2', '', ''),
(16, '3', 'gaming', 'unity'),
(17, '3', 'design', 'phpstorm,pqt desinger');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areaofinterset`
--
ALTER TABLE `areaofinterset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basicdetails`
--
ALTER TABLE `basicdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industrialexperience`
--
ALTER TABLE `industrialexperience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invimt`
--
ALTER TABLE `invimt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_link`
--
ALTER TABLE `password_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technicalskill`
--
ALTER TABLE `technicalskill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `try`
--
ALTER TABLE `try`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `areaofinterset`
--
ALTER TABLE `areaofinterset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `basicdetails`
--
ALTER TABLE `basicdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `industrialexperience`
--
ALTER TABLE `industrialexperience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `invimt`
--
ALTER TABLE `invimt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `password_link`
--
ALTER TABLE `password_link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `technicalskill`
--
ALTER TABLE `technicalskill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `try`
--
ALTER TABLE `try`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
