-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2020 at 11:09 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quicked`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `time` varchar(30) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `fname`, `username`, `title`, `content`, `time`) VALUES
(1, '', 'teacher', 'asdfasdf', 'sadfasdf', '2020-11-28 13:2'),
(2, '', 'teacher', 'asdfasdf', 'asdfasdf', '2020-11-28 13:2'),
(3, '', 'teacher', 'ffffff', 'fffffffff', '2020-11-28 13:2'),
(4, '', 'asdfsadf', 'gsdgfsdg', 'sfgsdfgdsfgsdfgsdfg', '2020-11-28 13:5'),
(5, '', 'sirelms', 'sadfdasf', '$time = date(\"Y-m-d H:i:s\");', '0000-00-00 00:0'),
(6, '', 'sirelms', 'sadfasdf', 'sadfasdfsadf', 'November 28, 20'),
(7, '', 'sirelms', 'asdfadsf', 'asdfasdfadsf', 'November 28, 2020, 2'),
(8, '', 'sirelms', 'asdfasdf', 'asdfasdf', 'November 28, 2020, 2:51 pm'),
(9, '', 'sirelms', 'Test', 'hahahahahaha it worked', 'November 28, 2020, 3:21 pm'),
(10, '', 'sirelms', 'Test', 'hahahahahaha it workedsadfsdafsda', 'November 28, 2020, 3:22 pm'),
(12, 'Elmer', 'sirelms', 'sakdlfjdflkjaskljdfljasdlfj', 'jadlskjflajasljfklsadjfkljaslkj\r\n\r\n', 'November 28, 2020, 3:26 pm'),
(13, 'Elmer', 'sirelms', 'asdfdasf', 'sadfadsf', 'November 28, 2020, 8:45 pm'),
(16, 'Elmer', 'sirelms', 'Walang Pasok sa Lunes!', '<img src=\"https://outoftownblog.com/wp-content/uploads/2018/07/WalangPasok-Announcements.jpg\" style=\"width: 100%\">', 'November 28, 2020, 9:03 pm'),
(19, 'Elmer', 'sirelms', '', '<center><iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/rCxi-O79sVo\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe></center>', 'November 28, 2020, 9:23 pm'),
(20, 'Teacher', 'teacher143', 'Only Educators can post announcements', 'Students will recieve the announcements through sms', 'November 28, 2020, 10:45 pm');

-- --------------------------------------------------------

--
-- Table structure for table `english`
--

CREATE TABLE `english` (
  `id` int(11) NOT NULL,
  `classroomcode` varchar(50) NOT NULL,
  `teacher` varchar(50) NOT NULL,
  `studentID` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `a1` int(50) NOT NULL,
  `a2` int(50) NOT NULL,
  `a3` int(50) NOT NULL,
  `a4` int(50) NOT NULL,
  `a5` int(50) NOT NULL,
  `p1` int(50) NOT NULL,
  `p2` int(50) NOT NULL,
  `grade` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `english`
--

INSERT INTO `english` (`id`, `classroomcode`, `teacher`, `studentID`, `name`, `a1`, `a2`, `a3`, `a4`, `a5`, `p1`, `p2`, `grade`) VALUES
(1, 'e1e1e1', 'sirelms', '1', 'Mabanag, Josephus A.', 0, 0, 0, 0, 0, 89, 100, 79),
(3, 'e1e1e1', 'sirelms', '3', 'Ava, Liam', 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'e1e1e1', 'sirelms', '2', 'Charlotte , John ', 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'e1e1e1', 'sirelms', '9', 'Hazel, Owen', 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'e1e1e1', 'sirelms', '7', 'Violet, Caleb', 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'e1e1e1', 'teacher143', '21', 'Dale, Jam', 0, 0, 0, 0, 0, 0, 0, 0),
(10, 'e1e1e1', 'teacher143', '4', 'Amelia, Ethan', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `classroomcode` varchar(50) NOT NULL,
  `teacher` varchar(50) NOT NULL,
  `studentID` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `a1` int(50) NOT NULL,
  `a2` int(50) NOT NULL,
  `a3` int(50) NOT NULL,
  `a4` int(50) NOT NULL,
  `a5` int(50) NOT NULL,
  `p1` int(50) NOT NULL,
  `p2` int(50) NOT NULL,
  `grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `classroomcode`, `teacher`, `studentID`, `name`, `a1`, `a2`, `a3`, `a4`, `a5`, `p1`, `p2`, `grade`) VALUES
(1, 'h1h1h1', 'sirelms', '1', 'Mabanag, Josephus', 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'h1h1h1', 'sirelms', '2', 'Charlotte , John ', 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'h1h1h1', 'sirelms', '6', 'Aurora, Gabriel', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `math`
--

CREATE TABLE `math` (
  `id` int(11) NOT NULL,
  `classroomcode` varchar(50) NOT NULL,
  `teacher` varchar(50) NOT NULL,
  `studentID` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `a1` int(50) NOT NULL,
  `a2` int(50) NOT NULL,
  `a3` int(50) NOT NULL,
  `a4` int(50) NOT NULL,
  `a5` int(50) NOT NULL,
  `p1` int(50) NOT NULL,
  `p2` int(50) NOT NULL,
  `grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `math`
--

INSERT INTO `math` (`id`, `classroomcode`, `teacher`, `studentID`, `name`, `a1`, `a2`, `a3`, `a4`, `a5`, `p1`, `p2`, `grade`) VALUES
(1, 'm1m1m1', 'sirelms', '2', 'Charlotte , John ', 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'm1m1m1', 'sirelms', '9', 'Hazel, Owen', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `science`
--

CREATE TABLE `science` (
  `id` int(11) NOT NULL,
  `classroomcode` varchar(50) NOT NULL,
  `teacher` varchar(50) NOT NULL,
  `studentID` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `a1` int(50) NOT NULL,
  `a2` int(50) NOT NULL,
  `a3` int(50) NOT NULL,
  `a4` int(50) NOT NULL,
  `a5` int(50) NOT NULL,
  `p1` int(50) NOT NULL,
  `p2` int(50) NOT NULL,
  `grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `science`
--

INSERT INTO `science` (`id`, `classroomcode`, `teacher`, `studentID`, `name`, `a1`, `a2`, `a3`, `a4`, `a5`, `p1`, `p2`, `grade`) VALUES
(1, 's1s1s1', 'sirelms', '9', 'Hazel, Owen', 0, 0, 0, 0, 0, 0, 0, 0),
(2, 's1s1s1', 'sirelms', '8', 'Luna , Declan ', 0, 0, 0, 0, 0, 0, 0, 0),
(3, 's1s1s1', 'sirelms', '1', 'Mabanag, Josephus', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `studentaccounts`
--

CREATE TABLE `studentaccounts` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `school` varchar(50) NOT NULL,
  `schoolID` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentaccounts`
--

INSERT INTO `studentaccounts` (`id`, `fname`, `lname`, `email`, `contact`, `school`, `schoolID`, `username`, `password`) VALUES
(1, 'Josephus', 'Mabanag', 'josephusmabanag2@gmail.com', '09551264400', 'Cebu Institute of Technology', '1', 'blueConsole', 'e1671797c52e15f763380b45e841ec32'),
(5, 'John ', 'Charlotte ', 'Charlotte@gmail.com ', '09551264400', 'Cebu Institute of Technology - University', '2', 'userJohn ', 'e1671797c52e15f763380b45e841ec32'),
(6, 'Liam', 'Ava', 'Ava@gmail.com ', '09551264400', 'Cebu Institute of Technology - University', '3', 'userLiam', 'e1671797c52e15f763380b45e841ec32'),
(7, 'Ethan', 'Amelia', 'Amelia@gmail.com ', '09551264400', 'Cebu Institute of Technology - University', '4', 'userEthan', 'e1671797c52e15f763380b45e841ec32'),
(8, 'Theodore ', 'Olivia ', 'Olivia@gmail.com  ', '09551264400', 'Cebu Institute of Technology - University', '5', 'userTheodore ', 'e1671797c52e15f763380b45e841ec32'),
(9, 'Gabriel', 'Aurora', 'Aurora@gmail.com ', '09551264400', 'Cebu Institute of Technology - University', '6', 'userGabriel', 'e1671797c52e15f763380b45e841ec32'),
(10, 'Caleb', 'Violet', 'Violet@gmail.com ', '09551264400', 'Cebu Institute of Technology - University', '7', 'userCaleb', 'e1671797c52e15f763380b45e841ec32'),
(11, 'Declan ', 'Luna ', 'Luna@gmail.com  ', '09551264400', 'Cebu Institute of Technology - University', '8', 'userDeclan', 'e1671797c52e15f763380b45e841ec32'),
(12, 'Owen', 'Hazel', 'Haze@gmail.com l', '09551264400', 'Cebu Institute of Technology - University', '9', 'userOwen', 'e1671797c52e15f763380b45e841ec32'),
(13, 'Elijah', 'Chloe', 'Chloe@gmail.com ', '09551264400', 'Cebu Institute of Technology - University', '10', 'userElijah', 'e1671797c52e15f763380b45e841ec32'),
(14, 'Jam', 'Dale', 'jamdale@gmail.com', '09617559048', 'Cebu Institute of Technnology - University', '21', 'svfjam', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subjecttitle` varchar(50) NOT NULL,
  `subjectcode` varchar(50) NOT NULL,
  `studentsenrolled` int(11) NOT NULL,
  `subjectteacher` varchar(50) NOT NULL,
  `classroomcode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subjecttitle`, `subjectcode`, `studentsenrolled`, `subjectteacher`, `classroomcode`) VALUES
(1, 'math', 'MATH031', 2, 'sirelms', 'm1m1m1'),
(2, 'science', 'SCI-031', 3, 'sirelms', 's1s1s1'),
(3, 'history', 'HIS-031', 3, 'sirelms', 'h1h1h1'),
(4, 'english', 'ENG-031', 7, 'teacher143', 'e1e1e1');

-- --------------------------------------------------------

--
-- Table structure for table `teacheraccounts`
--

CREATE TABLE `teacheraccounts` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `school` varchar(30) NOT NULL,
  `schoolID` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacheraccounts`
--

INSERT INTO `teacheraccounts` (`id`, `fname`, `lname`, `email`, `contact`, `school`, `schoolID`, `subject`, `username`, `password`) VALUES
(2, 'Af', 'Sadf', 'sadf@fd', 'sadf', 'School', 'sdaf', '', 'asdf', '912ec803b2ce49e4a541068d495ab570'),
(3, 'Student', 'Bro', 'stude@gamil.com', '099999999', 'Cebu Institute of Technnology ', '1', '', 'student', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'Teacher1', 'Asdf', 'teache@jkajsdlj', '09551264400', 'Cebu Institute of Technnology ', 'sdaf', 'Science', 'teacher', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'Elmer', 'Elmer', 'elmer.discrete@cit.edu', '0999999999', 'Cebu Institute of Technnology ', '12345', 'Calculus', 'sirelms', '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'Ele', 'Le', 'ele@g', '12345', 'Palawan State University', '12345', 'Calculus', 'asdfsadf', '827ccb0eea8a706c4c34a16891f84e7b'),
(7, 'Teacher', 'Good', 'teacher@gmail.com', '0999999999', 'Cebu Institute of Technnology ', '21', 'English', 'teacher143', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `english`
--
ALTER TABLE `english`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `math`
--
ALTER TABLE `math`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `science`
--
ALTER TABLE `science`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentaccounts`
--
ALTER TABLE `studentaccounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacheraccounts`
--
ALTER TABLE `teacheraccounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `english`
--
ALTER TABLE `english`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `math`
--
ALTER TABLE `math`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `science`
--
ALTER TABLE `science`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `studentaccounts`
--
ALTER TABLE `studentaccounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teacheraccounts`
--
ALTER TABLE `teacheraccounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
