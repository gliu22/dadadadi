-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2016-05-23 21:36:59
-- 服务器版本： 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myDB`
--

-- --------------------------------------------------------

--
-- 表的结构 `Affiliation`
--

CREATE TABLE `Affiliation` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Text` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `Article`
--

CREATE TABLE `Article` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Title` varchar(60) NOT NULL,
  `Abstract` varchar(6000) DEFAULT NULL,
  `keyword` varchar(400) DEFAULT NULL,
  `Num_Of_Page` tinyint(3) UNSIGNED NOT NULL,
  `Paper_Path` varchar(50) NOT NULL,
  `Photo_Path` varchar(50) DEFAULT NULL,
  `USER_ID` int(11) NOT NULL,
  `Journal_ID` int(11) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `Article&Affilication`
--

CREATE TABLE `Article&Affilication` (
  `Article_ID` int(10) UNSIGNED NOT NULL,
  `Affilication_ID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `Article&Author`
--

CREATE TABLE `Article&Author` (
  `Article_ID` int(10) UNSIGNED NOT NULL,
  `Author_ID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `Article&Processing`
--

CREATE TABLE `Article&Processing` (
  `ID` int(11) UNSIGNED NOT NULL,
  `Editor_UID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `Article&Published`
--

CREATE TABLE `Article&Published` (
  `ID` int(10) UNSIGNED NOT NULL,
  `P_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `DOI` varchar(30) NOT NULL,
  `Cite` varchar(500) NOT NULL,
  `View` mediumint(9) NOT NULL,
  `Download` mediumint(9) NOT NULL,
  `Editor_UID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `Article&Received`
--

CREATE TABLE `Article&Received` (
  `ID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `Article&Reference`
--

CREATE TABLE `Article&Reference` (
  `Article_ID` int(10) UNSIGNED NOT NULL,
  `Reference_ID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `Article&Rejected`
--

CREATE TABLE `Article&Rejected` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Editor_UID` int(11) NOT NULL,
  `Comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `Author`
--

CREATE TABLE `Author` (
  `ID` int(10) UNSIGNED NOT NULL,
  `First_Name` varchar(50) DEFAULT NULL,
  `Last_Name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `Editor`
--

CREATE TABLE `Editor` (
  `ID` int(10) UNSIGNED NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Bio_Path` varchar(50) NOT NULL,
  `Photo_Path` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `Journal`
--

CREATE TABLE `Journal` (
  `ID` mediumint(8) UNSIGNED NOT NULL,
  `Name` varchar(40) NOT NULL,
  `ISSN_Print` varchar(10) NOT NULL,
  `ISSN_Online` varchar(10) NOT NULL,
  `Areas` varchar(15) NOT NULL,
  `Website` varchar(30) DEFAULT NULL,
  `Contact` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `Journal&Edotor`
--

CREATE TABLE `Journal&Edotor` (
  `J_ID` mediumint(9) NOT NULL,
  `E_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `Reference`
--

CREATE TABLE `Reference` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Text` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `User_Comment`
--

CREATE TABLE `User_Comment` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Text` varchar(1000) DEFAULT NULL,
  `UID` int(11) DEFAULT NULL,
  `AID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `user_table`
--

CREATE TABLE `user_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `Email` varchar(59) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `Degree` varchar(15) NOT NULL,
  `Affiliation` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Region` varchar(20) NOT NULL,
  `Webpage` varchar(100) DEFAULT NULL,
  `Facebook` varchar(100) DEFAULT NULL,
  `Linkedln` varchar(100) DEFAULT NULL,
  `Level` tinyint(4) NOT NULL,
  `regdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `user_table`
--

INSERT INTO `user_table` (`id`, `Email`, `Password`, `firstname`, `lastname`, `Degree`, `Affiliation`, `Phone`, `Region`, `Webpage`, `Facebook`, `Linkedln`, `Level`, `regdate`) VALUES
(1, 'justdoitken@gmail.com', '2edaced2134bffa11fa8b3f247edd04f', 'Liu', 'Ken', 'Bachelor', 'UIC', '3129275868', 'USA', NULL, NULL, NULL, 1, '0000-00-00'),
(11, 'dsfsdds@teewfs.com', 'c42465573350921c84ec253a5fb4b947', 'fds', 'sdfdsf', 'Bachelor', 'dsf', '23233232', 'USA', '', '', '', 0, '2016-05-18'),
(16, 'hello@hello.com', '6d29d38d774c1c0a0f967e53087168a4', 'dsfsd', 'sdfds', 'Bachelor', 'fds', '324324', 'USA', '', '', '', 0, '2016-05-18'),
(21, 'hello3@hello.com', 'af7162e64ca4b66daef4b6de952baad4', 'dsfsd', 'sdfds', 'Bachelor', 'fds', '324324', 'USA', '', '', '', 0, '2016-05-18'),
(24, 'hello5@hello.com', '0544ed93c22d5e1c869010c4515a7401', 'dsfsd', 'sdfds', 'Bachelor', 'fds', '324324', 'USA', '', '', '', 0, '2016-05-18'),
(29, 'hello9@hello.com', '93696aa7ad5e42960ff4f8eb568443d4', 'dsfsd', 'sdfds', 'Bachelor', 'fds', '324324', 'USA', '', '', '', 0, '2016-05-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Affiliation`
--
ALTER TABLE `Affiliation`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Article`
--
ALTER TABLE `Article`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Article&Processing`
--
ALTER TABLE `Article&Processing`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Article&Published`
--
ALTER TABLE `Article&Published`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Article&Received`
--
ALTER TABLE `Article&Received`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Article&Rejected`
--
ALTER TABLE `Article&Rejected`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Author`
--
ALTER TABLE `Author`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Editor`
--
ALTER TABLE `Editor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Journal`
--
ALTER TABLE `Journal`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Reference`
--
ALTER TABLE `Reference`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `User_Comment`
--
ALTER TABLE `User_Comment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `Affiliation`
--
ALTER TABLE `Affiliation`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `Article`
--
ALTER TABLE `Article`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `Author`
--
ALTER TABLE `Author`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `Editor`
--
ALTER TABLE `Editor`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `Journal`
--
ALTER TABLE `Journal`
  MODIFY `ID` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `Reference`
--
ALTER TABLE `Reference`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `User_Comment`
--
ALTER TABLE `User_Comment`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
