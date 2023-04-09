-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2023 at 12:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `svimi_req`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_info`
--

CREATE TABLE `academic_info` (
  `id` int(11) NOT NULL,
  `examination_passed` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `yop` int(11) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `board` varchar(255) NOT NULL,
  `personal_info_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `academic_info`
--

INSERT INTO `academic_info` (`id`, `examination_passed`, `subject`, `yop`, `grade`, `board`, `personal_info_id`) VALUES
(1, 'jso;sjk', 'sbnkjsn', 0, 'sbsbms', 'snksn', 10),
(2, 'snsn', 'sn.sm.,sm', 0, 'sn.knssn', 'sm,.s,.s', 10),
(3, 's,nk.xnk.xn', 'xnmsm.sm', 0, 'sm.,sms', 'mxnmx.,nxn', 10),
(4, '', '', 0, '', '', 14),
(5, '', '', 0, '', '', 15),
(6, '', '', 0, '', '', 16),
(7, '', '', 0, '', '', 17),
(8, '', '', 0, '', '', 18),
(9, '', '', 0, '', '', 19),
(10, '', '', 0, '', '', 20),
(11, '', '', 0, '', '', 21),
(12, '', '', 0, '', '', 22),
(13, '', '', 0, '', '', 23),
(14, '', '', 0, '', '', 24),
(15, '', '', 0, '', '', 25),
(16, '', '', 0, '', '', 26),
(17, '', '', 0, '', '', 27),
(18, '', '', 0, '', '', 28),
(19, '', '', 0, '', '', 29);

-- --------------------------------------------------------

--
-- Table structure for table `academic_stream`
--

CREATE TABLE `academic_stream` (
  `id` int(11) NOT NULL,
  `academic_stream` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `academic_stream`
--

INSERT INTO `academic_stream` (`id`, `academic_stream`) VALUES
(1, 'c');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1001, 'aamin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `delcaration`
--

CREATE TABLE `delcaration` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `place` varchar(255) NOT NULL,
  `declared` varchar(255) NOT NULL,
  `personal_info_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `delcaration`
--

INSERT INTO `delcaration` (`id`, `date`, `place`, `declared`, `personal_info_id`) VALUES
(1, '2023-04-28', 'indore', '', 22),
(2, '2023-04-28', 'indore', '', 23),
(3, '2023-04-28', 'indore', '', 24),
(4, '2023-04-28', 'indore', '', 25),
(5, '2023-04-28', 'indore', '', 26),
(6, '2023-04-28', 'indore', '', 27),
(7, '2023-04-28', 'indore', '', 28),
(8, '0000-00-00', '', 'dec', 29);

-- --------------------------------------------------------

--
-- Table structure for table `general_info`
--

CREATE TABLE `general_info` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `applied_in` varchar(255) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `priviously_applied` varchar(255) NOT NULL,
  `personal_info_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `general_info`
--

INSERT INTO `general_info` (`id`, `post_id`, `applied_in`, `reference`, `specialization`, `priviously_applied`, `personal_info_id`) VALUES
(1, 1, 'ss', 'other', 'ss', 'hdhdi', 7),
(4, 2, '', 'other', '', '', 10),
(8, 2, '', 'other', '', '', 14),
(9, 2, '', 'other', '', '', 15),
(10, 2, '', 'other', '', '', 16),
(11, 2, '', 'other', '', '', 17),
(12, 5, '', 'other', '', '', 18),
(13, 5, '', 'other', '', '', 19),
(14, 5, '', 'other', '', '', 20),
(15, 5, '', 'other', '', '', 21),
(16, 5, '', 'other', '', '', 22),
(17, 5, '', 'other', '', '', 23),
(18, 5, '', 'other', '', '', 24),
(19, 5, '', 'other', '', '', 25),
(20, 5, '', 'other', '', '', 26),
(21, 5, '', 'other', '', '', 27),
(22, 5, '', 'other', '', '', 28),
(23, 2, '', 'other', '', '', 29);

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `husband_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `place_of_birth` varchar(255) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `present_address` varchar(255) NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `mobile_no` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`id`, `name`, `father_name`, `mother_name`, `husband_name`, `gender`, `dob`, `place_of_birth`, `blood_group`, `present_address`, `phone_no`, `mobile_no`) VALUES
(1, '', '', '', '', 'male', '0000-00-00', '', '', '', 0, 0),
(2, 'dinesh rao', 'hhkij', 'anhskjhsk', 'shksjhjskj', 'male', '2023-04-06', 'nbskjhs', 'hbv', 'indorer', 5666666, 588888),
(3, 'dinesh rao', 'hhkij', 'anhskjhsk', 'shksjhjskj', 'male', '2023-04-06', 'nbskjhs', 'hbv', 'indorer', 5666666, 588888),
(4, 'djkhlkdhkd', 'sdbjcb', 'dnkndn', 'xn.,kxn,.xn', 'male', '0000-00-00', 'xn.kxn', 'xn.kdxn', 'xnxn.kxnx.,', 0, 0),
(5, 'djkhlkdhkd', 'sdbjcb', 'dnkndn', 'xn.,kxn,.xn', 'male', '0000-00-00', 'xn.kxn', 'xn.kdxn', 'xnxn.kxnx.,', 0, 0),
(6, 'djkhlkdhkd', 'sdbjcb', 'dnkndn', 'xn.,kxn,.xn', 'male', '0000-00-00', 'xn.kxn', 'xn.kdxn', 'xnxn.kxnx.,', 0, 0),
(7, 'djkhlkdhkd', 'sdbjcb', 'dnkndn', 'xn.,kxn,.xn', 'male', '0000-00-00', 'xn.kxn', 'xn.kdxn', 'xnxn.kxnx.,', 0, 0),
(8, '', '', '', '', 'male', '0000-00-00', '', '', '', 0, 0),
(9, '', '', '', '', 'male', '0000-00-00', '', '', '', 0, 0),
(10, '', '', '', '', 'male', '0000-00-00', '', '', '', 0, 0),
(11, '', '', '', '', 'male', '0000-00-00', '', '', '', 0, 0),
(12, '', '', '', '', 'male', '0000-00-00', '', '', '', 0, 0),
(13, '', '', '', '', 'male', '0000-00-00', '', '', '', 0, 0),
(14, '', '', '', '', 'male', '0000-00-00', '', '', '', 0, 0),
(15, '', '', '', '', 'male', '0000-00-00', '', '', '', 0, 0),
(16, '', '', '', '', 'male', '0000-00-00', '', '', '', 0, 0),
(17, '', '', '', '', 'male', '0000-00-00', '', '', '', 0, 0),
(18, '', '', '', '', 'male', '0000-00-00', '', '', '', 0, 0),
(19, '', '', '', '', 'male', '0000-00-00', '', '', '', 0, 0),
(20, '', '', '', '', 'male', '0000-00-00', '', '', '', 0, 0),
(21, '', '', '', '', 'male', '0000-00-00', '', '', '', 0, 0),
(22, '', '', '', '', 'male', '0000-00-00', '', '', '', 0, 0),
(23, '', '', '', '', 'male', '0000-00-00', '', '', '', 0, 0),
(24, '', '', '', '', 'male', '0000-00-00', '', '', '', 0, 0),
(25, '', '', '', '', 'male', '0000-00-00', '', '', '', 0, 0),
(26, '', '', '', '', 'male', '0000-00-00', '', '', '', 0, 0),
(27, '', '', '', '', 'male', '0000-00-00', '', '', '', 0, 0),
(28, '', '', '', '', 'male', '0000-00-00', '', '', '', 0, 0),
(29, '', '', '', '', 'male', '0000-00-00', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `post_applied`
--

CREATE TABLE `post_applied` (
  `id` int(11) NOT NULL,
  `post_name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `stream_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post_applied`
--

INSERT INTO `post_applied` (`id`, `post_name`, `type`, `stream_id`) VALUES
(1, 'aa', 'Academic', 1),
(2, 'as', 'Academic', 1),
(3, 'asrt', 'Academic', 1),
(4, 'k', 'Non Academic', 1),
(5, 'java ', 'Academic', 1);

-- --------------------------------------------------------

--
-- Table structure for table `present_emp_info`
--

CREATE TABLE `present_emp_info` (
  `id` int(11) NOT NULL,
  `post` varchar(255) NOT NULL,
  `doa` date NOT NULL,
  `basic_sal` varchar(255) NOT NULL,
  `da_allowence` varchar(255) NOT NULL,
  `gross_sal` varchar(255) NOT NULL,
  `personal_info_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `present_emp_info`
--

INSERT INTO `present_emp_info` (`id`, `post`, `doa`, `basic_sal`, `da_allowence`, `gross_sal`, `personal_info_id`) VALUES
(1, 'fjvkl', '0000-00-00', '', 'c c,', 'c nc,mnc', 21),
(2, 'fjvkl', '0000-00-00', '', 'c c,', 'c nc,mnc', 22),
(3, 'fjvkl', '0000-00-00', '', 'c c,', 'c nc,mnc', 23),
(4, 'fjvkl', '0000-00-00', '', 'c c,', 'c nc,mnc', 24),
(5, 'fjvkl', '0000-00-00', '', 'c c,', 'c nc,mnc', 25),
(6, 'fjvkl', '0000-00-00', '', 'c c,', 'c nc,mnc', 26),
(7, 'fjvkl', '0000-00-00', '', 'c c,', 'c nc,mnc', 27),
(8, 'fjvkl', '0000-00-00', '', 'c c,', 'c nc,mnc', 28),
(9, '', '0000-00-00', '', '', '', 29);

-- --------------------------------------------------------

--
-- Table structure for table `present_emp_info2`
--

CREATE TABLE `present_emp_info2` (
  `id` int(11) NOT NULL,
  `personal_info_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `reson_leaving` varchar(255) NOT NULL,
  `exp_sal` float NOT NULL,
  `req_period` int(11) NOT NULL,
  `realocate` enum('Yes','No') NOT NULL,
  `ref` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `present_emp_info2`
--

INSERT INTO `present_emp_info2` (`id`, `personal_info_id`, `name`, `reson_leaving`, `exp_sal`, `req_period`, `realocate`, `ref`) VALUES
(1, 21, 'cb,xnm,ncmṣn m', 'cmncm', 0, 0, 'Yes', 'cn,cn'),
(2, 22, 'cb,xnm,ncmṣn m', 'cmncm', 0, 0, 'Yes', 'cn,cn'),
(3, 23, 'cb,xnm,ncmṣn m', 'cmncm', 0, 0, 'Yes', 'cn,cn'),
(4, 24, 'cb,xnm,ncmṣn m', 'cmncm', 0, 0, 'Yes', 'cn,cn'),
(5, 25, 'cb,xnm,ncmṣn m', 'cmncm', 0, 0, 'Yes', 'cn,cn'),
(6, 26, 'cb,xnm,ncmṣn m', 'cmncm', 0, 0, 'Yes', 'cn,cn'),
(7, 27, 'cb,xnm,ncmṣn m', 'cmncm', 0, 0, 'Yes', 'cn,cn'),
(8, 28, 'cb,xnm,ncmṣn m', 'cmncm', 0, 0, 'Yes', 'cn,cn'),
(9, 29, '', '', 0, 0, 'Yes', '');

-- --------------------------------------------------------

--
-- Table structure for table `professional_info`
--

CREATE TABLE `professional_info` (
  `id` int(11) NOT NULL,
  `institution_name` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `duration` float NOT NULL,
  `sector` varchar(255) NOT NULL,
  `stream` varchar(255) NOT NULL,
  `personal_info_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `professional_info`
--

INSERT INTO `professional_info` (`id`, `institution_name`, `post`, `duration`, `sector`, `stream`, `personal_info_id`) VALUES
(1, 'ss', 'ff', 20132, 'ddd', 'c', 14),
(2, 'ss', 'ff', 20132, 'ddd', 'c', 15),
(3, 'ss', 'ff', 20132, 'ddd', 'c', 16),
(4, 'ss', 'ff', 20132, 'ddd', 'c', 17),
(5, 'dl;', 'd d,m', 0, 'x,mc,', 'c.,mc.', 18),
(6, 'dl;', 'd d,m', 0, 'x,mc,', 'c.,mc.', 19),
(7, 'dl;', 'd d,m', 0, 'x,mc,', 'c.,mc.', 20),
(8, '', '', 0, '', '', 21),
(9, '', '', 0, '', '', 22),
(10, '', '', 0, '', '', 23),
(11, '', '', 0, '', '', 24),
(12, '', '', 0, '', '', 25),
(13, '', '', 0, '', '', 26),
(14, '', '', 0, '', '', 27),
(15, '', '', 0, '', '', 28),
(16, '', '', 0, '', '', 29);

-- --------------------------------------------------------

--
-- Table structure for table `professional_info2`
--

CREATE TABLE `professional_info2` (
  `id` int(11) NOT NULL,
  `personal_info_id` int(11) NOT NULL,
  `exp_pg` float NOT NULL,
  `exp_ug` float NOT NULL,
  `r_d` varchar(255) NOT NULL,
  `d_r_d` varchar(255) NOT NULL,
  `rev_info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `professional_info2`
--

INSERT INTO `professional_info2` (`id`, `personal_info_id`, `exp_pg`, `exp_ug`, `r_d`, `d_r_d`, `rev_info`) VALUES
(1, 20, 0, 0, 'ccc', '', ''),
(2, 21, 0, 0, '', '', ''),
(3, 22, 0, 0, '', '', ''),
(4, 23, 0, 0, '', '', ''),
(5, 24, 0, 0, '', '', ''),
(6, 25, 0, 0, '', '', ''),
(7, 26, 0, 0, '', '', ''),
(8, 27, 0, 0, '', '', ''),
(9, 28, 0, 0, '', '', ''),
(10, 29, 0, 0, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_info`
--
ALTER TABLE `academic_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personal_info_id` (`personal_info_id`);

--
-- Indexes for table `academic_stream`
--
ALTER TABLE `academic_stream`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delcaration`
--
ALTER TABLE `delcaration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personal_info_id` (`personal_info_id`);

--
-- Indexes for table `general_info`
--
ALTER TABLE `general_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign_key` (`post_id`),
  ADD KEY `personal_info_id` (`personal_info_id`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_applied`
--
ALTER TABLE `post_applied`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stream_id` (`stream_id`);

--
-- Indexes for table `present_emp_info`
--
ALTER TABLE `present_emp_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personal_info_id` (`personal_info_id`);

--
-- Indexes for table `present_emp_info2`
--
ALTER TABLE `present_emp_info2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `present_emp_info2_ibfk_1` (`personal_info_id`);

--
-- Indexes for table `professional_info`
--
ALTER TABLE `professional_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personal_info_id` (`personal_info_id`);

--
-- Indexes for table `professional_info2`
--
ALTER TABLE `professional_info2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `professional_info2_ibfk_1` (`personal_info_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_info`
--
ALTER TABLE `academic_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `academic_stream`
--
ALTER TABLE `academic_stream`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT for table `delcaration`
--
ALTER TABLE `delcaration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `general_info`
--
ALTER TABLE `general_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `post_applied`
--
ALTER TABLE `post_applied`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `present_emp_info`
--
ALTER TABLE `present_emp_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `present_emp_info2`
--
ALTER TABLE `present_emp_info2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `professional_info`
--
ALTER TABLE `professional_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `professional_info2`
--
ALTER TABLE `professional_info2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `academic_info`
--
ALTER TABLE `academic_info`
  ADD CONSTRAINT `academic_info_ibfk_1` FOREIGN KEY (`personal_info_id`) REFERENCES `personal_info` (`id`) ON UPDATE NO ACTION;

--
-- Constraints for table `delcaration`
--
ALTER TABLE `delcaration`
  ADD CONSTRAINT `delcaration_ibfk_1` FOREIGN KEY (`personal_info_id`) REFERENCES `personal_info` (`id`) ON UPDATE NO ACTION;

--
-- Constraints for table `general_info`
--
ALTER TABLE `general_info`
  ADD CONSTRAINT `foreign_key` FOREIGN KEY (`post_id`) REFERENCES `post_applied` (`id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `general_info_ibfk_1` FOREIGN KEY (`personal_info_id`) REFERENCES `personal_info` (`id`) ON UPDATE NO ACTION;

--
-- Constraints for table `post_applied`
--
ALTER TABLE `post_applied`
  ADD CONSTRAINT `post_applied_ibfk_1` FOREIGN KEY (`stream_id`) REFERENCES `academic_stream` (`id`) ON UPDATE NO ACTION;

--
-- Constraints for table `present_emp_info`
--
ALTER TABLE `present_emp_info`
  ADD CONSTRAINT `present_emp_info_ibfk_1` FOREIGN KEY (`personal_info_id`) REFERENCES `personal_info` (`id`) ON UPDATE NO ACTION;

--
-- Constraints for table `present_emp_info2`
--
ALTER TABLE `present_emp_info2`
  ADD CONSTRAINT `present_emp_info2_ibfk_1` FOREIGN KEY (`personal_info_id`) REFERENCES `personal_info` (`id`) ON UPDATE NO ACTION;

--
-- Constraints for table `professional_info`
--
ALTER TABLE `professional_info`
  ADD CONSTRAINT `professional_info_ibfk_1` FOREIGN KEY (`personal_info_id`) REFERENCES `personal_info` (`id`) ON UPDATE NO ACTION;

--
-- Constraints for table `professional_info2`
--
ALTER TABLE `professional_info2`
  ADD CONSTRAINT `professional_info2_ibfk_1` FOREIGN KEY (`personal_info_id`) REFERENCES `personal_info` (`id`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
