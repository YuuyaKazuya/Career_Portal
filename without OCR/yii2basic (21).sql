-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2024 at 07:56 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii2basic`
--

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `imageFile` longblob NOT NULL,
  `job_type` varchar(50) NOT NULL,
  `responsibilities` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `benefit` text DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `schedule` varchar(100) DEFAULT NULL,
  `min_salary` int(10) DEFAULT NULL,
  `max_salary` int(10) DEFAULT NULL,
  `intern_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `title`, `imageFile`, `job_type`, `responsibilities`, `description`, `benefit`, `location`, `schedule`, `min_salary`, `max_salary`, `intern_id`) VALUES
(1, 'App Developer', 0x313732342d776562322e6a7067, '3', '- Assist in the development and testing of mobile applications.\r\n- Collaborate with senior developers to integrate APIs and third-party services.\r\n- Help in debugging and resolving issues within mobile apps.\r\n- Participate in design discussions and contribute ideas for app improvements.', 'As an App Developer Intern, you will work alongside our development team to create and enhance mobile applications. This role is suited for individuals interested in learning mobile app development for both iOS and Android platforms.', '- Hands-on experience in mobile app development.\r\n- Exposure to industry-standard development practices and tools.\r\n- Opportunity to work on both iOS and Android platforms.\r\n- Potential to showcase your work in the app store.', 'Petaling Jaya', 'Monday to Friday', 300, 500, NULL),
(2, 'Web Developer', 0x383334392d6170702e6a7067, '3', '- Assist in developing and maintaining web applications using HTML, CSS, and JavaScript.\r\n- Work with UX/UI designers to implement design specifications.\r\n- Debug and troubleshoot issues related to front-end performance.\r\n- Participate in code reviews and contribute to improving coding practices.', 'Join our development team as a Web Developer Intern and get involved in building responsive and interactive web applications. This role is ideal for those interested in front-end technologies and coding.', '- Practical experience in front-end development.\r\n- Exposure to modern development tools and frameworks.\r\n- Opportunities for skill development through mentorship.\r\n- Potential for full-time employment after the internship.', 'Petaling Jaya', 'Monday to Friday', 300, 500, NULL),
(3, 'IT Support', 0x373839392d7765622e6a7067, '3', 'Assist in troubleshooting hardware and software issues.\r\nProvide technical support to staff and clients.\r\nHelp maintain and update IT documentation.\r\nSupport in managing IT inventory and assets.\r\nAssist in the deployment of new hardware and software.', 'Join our dynamic IT team as an IT Support Intern. This role offers a great opportunity to gain hands-on experience in providing technical support and maintaining IT systems.', 'Gain real-world IT experience.\r\nOpportunity to work with experienced IT professionals.\r\nFlexible working hours.\r\nPotential for full-time employment upon successful completion.\r\nAccess to professional development resources.', 'Petaling Jaya', 'Monday to Friday', 300, 500, NULL),
(4, 'Software Developer', 0x3638322d617070322e6a7067, '3', 'Write and test code, troubleshoot software issues.\r\nCollaborate with the development team on software design and coding.\r\nParticipate in code reviews and contribute to team meetings.\r\nAssist in the documentation of software functionality.\r\nSupport in the maintenance and improvement of existing software.', 'We are looking for a Software Developer Intern to assist in designing, developing, and testing software applications. This internship is ideal for students who are passionate about coding and eager to learn in a professional environment.', 'Hands-on experience with cutting-edge technologies.\r\nMentorship from experienced software developers.\r\nFlexible schedule to accommodate academic commitments.\r\nNetworking opportunities within the tech industry.\r\nPossibility of a full-time position after internship completion.', 'Petaling Jaya', 'Monday to Friday', 300, 500, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Religion'),
(2, 'Government'),
(3, 'Crime'),
(4, 'Weather'),
(5, 'Education');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `code` char(2) NOT NULL,
  `name` char(52) NOT NULL,
  `population` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`code`, `name`, `population`) VALUES
('AU', 'Australia', 24016400),
('BR', 'Brazil', 205722000),
('CA', 'Canada', 35985751),
('CN', 'China', 1375210000),
('DE', 'Germany', 81459000),
('FR', 'France', 64513242),
('GB', 'United Kingdom', 65097000),
('IN', 'India', 1285400000),
('RU', 'Russia', 146519759),
('US', 'United States', 322976000);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `level_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `level_name`) VALUES
(1, 'Diploma'),
(2, 'Bachelor\'s Degree'),
(3, 'Master\'s Degree'),
(4, 'Doctorate');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `ic_number` varchar(15) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `pob` varchar(100) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `race` varchar(50) DEFAULT NULL,
  `race_other` varchar(50) DEFAULT NULL,
  `religion` varchar(50) DEFAULT NULL,
  `religion_other` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `address1` varchar(100) DEFAULT NULL,
  `poscode` varchar(10) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `marital_status` varchar(50) DEFAULT NULL,
  `marital_status_other` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `job` varchar(100) DEFAULT NULL,
  `job_type` varchar(50) DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `license` varchar(50) DEFAULT NULL,
  `license_other` varchar(50) DEFAULT NULL,
  `university` varchar(100) DEFAULT NULL,
  `course` varchar(100) DEFAULT NULL,
  `education_level` varchar(100) DEFAULT NULL,
  `graduate` date DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `period` varchar(50) DEFAULT NULL,
  `reason` text DEFAULT NULL,
  `skills` text DEFAULT NULL,
  `malay_writing` varchar(50) DEFAULT NULL,
  `malay_speaking` varchar(50) DEFAULT NULL,
  `english_writing` varchar(50) DEFAULT NULL,
  `english_speaking` varchar(50) DEFAULT NULL,
  `training` text DEFAULT NULL,
  `project` text DEFAULT NULL,
  `resume` longblob DEFAULT NULL,
  `image` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `age`, `ic_number`, `dob`, `pob`, `gender`, `race`, `race_other`, `religion`, `religion_other`, `address`, `address1`, `poscode`, `city`, `state`, `email`, `phone`, `marital_status`, `marital_status_other`, `date`, `job`, `job_type`, `salary`, `license`, `license_other`, `university`, `course`, `education_level`, `graduate`, `company`, `position`, `period`, `reason`, `skills`, `malay_writing`, `malay_speaking`, `english_writing`, `english_speaking`, `training`, `project`, `resume`, `image`) VALUES
(20, 'Shahrin Hakimi', 25, '990211-10-5503', '2024-08-16', 'SELANGOR', '1', 'Malay', '', 'Islam', '', 'C-1-102, BLOK C, APARTMENT SRI MERANTI', 'JALAN PJU 1A/5 ARA DAMANSARA', '47301', 'PETALING JAYA', '12', 'hakimianuar11@gmail.com', '0123225081', 'Single Parent/Divorced', '', '2024-08-17', '1', '2', 1800.00, 'Car', '', 'UNIVERSITY TECHNICAL MALAYSIA MELAKA', 'COMPUTER ENGINEERING', '2', '2024-09-20', 'UTeM', 'Student', '4 years', 'ntah', '- tyhfgg\r\n- sers\r\n', 'Moderate', 'Moderate', 'Moderate', 'Moderate', '- testststsdgd\r\n- fsd\r\n- df\r\n', '- beststststa\r\n- dsfst\r\n- sdfessfs\r\n', 0x393239302d526573756d6520285554654d292e706466, 0x363533392d3230392d757365722d342e6a7067),
(21, 'Shahrin Hakimi', 25, '990211105503', '1999-02-11', 'SELANGOR', '1', 'Malay', '', 'Islam', '', 'C-1-102, BLOK C, APARTMENT SRI MERANTI', 'JALAN PJU 1A/5 ARA DAMANSARA', '47301', 'PETALING JAYA', '12', 'hakimianuar11@gmail.com', '0123225081', 'Single', '', '2024-08-16', '1', '1', 1800.00, 'No license', '', 'UNIVERSITY TECHNICAL MALAYSIA MELAKA', 'COMPUTER ENGINEERING', '2', '2025-10-25', 'DIGITAL IMAGES SDN BHD', 'Document Scanning Operator', '3 month', 'further my studies', '- basic code html\r\n- oop\r\n- coding\r\n', 'Moderate', NULL, 'Moderate', NULL, 'qwetyuiopasdfghjklzxcvm', 'qweriopasdfghjklzxcvbnmnczlkapyw', 0x393238332d526573756d6520285554654d292e706466, 0x373637332d3434382d323531332d373633382d6b696d692e6a7067),
(22, 'Muhammad Shahrin Hakimi', 25, '990211105503', '1999-02-11', 'SELANGOR', '1', 'Malay', '', 'Islam', '', 'C-1-102, BLOK C, APARTMENT SRI MERANTI', 'JALAN PJU 1A/5 ARA DAMANSARA', '47301', 'PETALING JAYA', '12', 'b022110166@student.utem.edu.my', '0123225081', 'Single', '', '2024-08-17', '2', '1', 1800.00, 'No license', '', 'UNIVERSITY TECHNICAL MALAYSIA MELAKA', 'COMPUTER ENGINEERING', '2', '2025-10-25', 'UTeM', 'Student', '4 years', 'graduated', '- dont\r\n- know\r\n', 'Moderate', NULL, 'Moderate', NULL, 'tesskjakjabsfaf', 'dfeikhahiuhr', 0x383536362d526573756d6520285554654d292e706466, 0x383034392d3434382d323531332d373633382d6b696d692e6a7067),
(23, 'Muhammad Shahrin Hakimi', 23, '990211105503', '2024-08-27', 'SELANGOR', '1', 'Malay', '', 'Islam', '', 'C-1-102, BLOK C, APARTMENT SRI MERANTI', 'JALAN PJU 1A/5 ARA DAMANSARA', '47301', 'PETALING JAYA', '12', 'b022110166@student.utem.edu.my', '0123225081', 'Single', '', '2024-08-27', '1', '1', 1800.00, 'No license', '', 'UNIVERSITY TECHNICAL MALAYSIA MELAKA', 'COMPUTER ENGINEERING', '2', '2024-08-27', 'UTeM', 'Student', '4 years', 'DFGHJKXCVBNM', '- SJFAJK\r\n- RTSEWS\r\n- SCVDR\r\n- SFSER\r\n', 'Moderate', 'Moderate', 'Moderate', 'Moderate', '- WQAA\r\n- AF\r\n- AFER\r\n- FRE\r\n- FSER\r\n', '- EAFA\r\n- EAFS\r\n- GRHT\r\n- GRRW\r\n', 0x373036392d526573756d6520285554654d292e706466, 0x383434342d3430342d322e6a7067),
(24, 'Muhammad Shahrin Hakimi', 23, '990211105503', '2024-08-27', 'SELANGOR', '1', 'Malay', '', 'Islam', '', 'C-1-102, BLOK C, APARTMENT SRI MERANTI', 'JALAN PJU 1A/5 ARA DAMANSARA', '47301', 'PETALING JAYA', '12', 'b022110166@student.utem.edu.my', '0123225081', 'Single', '', '2024-08-27', '2', '1', 1800.00, 'Car', '', 'UNIVERSITY TECHNICAL MALAYSIA MELAKA', 'COMPUTER ENGINEERING', '2', '2024-08-27', 'OYEN', 'Student', '3 month', 'adaafwafea', '- fsfr\r\n- afer\r\n- afrta\r\n', 'Moderate', 'Moderate', 'Moderate', 'Moderate', '', '', '', 0x313237392d3430342d322e6a7067),
(25, 'Muhammad Shahrin Hakimi', 23, '990211105503', '2024-08-27', 'SELANGOR', '1', 'Malay', '', 'Islam', '', 'C-1-102, BLOK C, APARTMENT SRI MERANTI', 'JALAN PJU 1A/5 ARA DAMANSARA', '47301', 'PETALING JAYA', '12', 'b022110166@student.utem.edu.my', '0123225081', 'Single', '', '2024-08-27', '2', '1', 1800.00, 'Car', '', 'UNIVERSITY TECHNICAL MALAYSIA MELAKA', 'COMPUTER ENGINEERING', '2', '2024-08-27', 'OYEN', 'Student', '3 month', '', '- sfasa\r\n- sdfaa\r\n- fae\r\n', 'Moderate', 'Moderate', 'Moderate', 'Moderate', '', '', '', 0x363034372d3430342d312e706e67),
(26, 'Muhammad Shahrin Hakimi', 23, '990211105503', '2024-08-27', 'SELANGOR', '1', 'Malay', '', 'Islam', '', 'C-1-102, BLOK C, APARTMENT SRI MERANTI', 'JALAN PJU 1A/5 ARA DAMANSARA', '47301', 'PETALING JAYA', '12', 'b022110166@student.utem.edu.my', '0123225081', 'Single Parent/Divorced', '', '2024-08-27', '1', '1', 1800.00, 'No license', '', 'UNIVERSITY TECHNICAL MALAYSIA MELAKA', 'COMPUTER ENGINEERING', '2', '2024-08-27', 'UTeM', 'Student', '4 years', 'asdadfw', '- sdaw\r\n- asdwq\r\n', 'Moderate', 'Moderate', 'Moderate', 'Moderate', '', '', '', ''),
(27, 'Muhammad Shahrin Hakimi', 23, '990211105503', '2024-08-27', 'SELANGOR', '1', 'Malay', '', 'Islam', '', 'C-1-102, BLOK C, APARTMENT SRI MERANTI', 'JALAN PJU 1A/5 ARA DAMANSARA', '47301', 'PETALING JAYA', '12', 'b022110166@student.utem.edu.my', '0123225081', 'Single Parent/Divorced', '', '2024-08-27', '1', '1', 1800.00, 'No license', '', 'UNIVERSITY TECHNICAL MALAYSIA MELAKA', 'COMPUTER ENGINEERING', '2', '2024-08-27', 'UTeM', 'Student', '4 years', 'asdadfw', '- sdaw\r\n- asdwq\r\n', 'Moderate', 'Moderate', 'Moderate', 'Moderate', '', '', '', ''),
(28, 'Muhammad Shahrin Hakimi', 23, '990211105503', '2024-08-27', 'SELANGOR', '1', 'Malay', '', 'Islam', '', 'C-1-102, BLOK C, APARTMENT SRI MERANTI', 'JALAN PJU 1A/5 ARA DAMANSARA', '47301', 'PETALING JAYA', '12', 'b022110166@student.utem.edu.my', '0123225081', 'Single Parent/Divorced', '', '2024-08-27', '3', '2', 1800.00, 'No license', '', 'UNIVERSITY TECHNICAL MALAYSIA MELAKA', 'COMPUTER ENGINEERING', '1', '2024-08-27', 'UTeM', 'Student', '4 years', '', '- afa\r\n', 'Moderate', 'Moderate', 'Moderate', 'Moderate', '', '', '', ''),
(29, 'Muhammad Shahrin Hakimi', 23, '990211105503', '2024-08-27', 'SELANGOR', '1', 'Malay', '', 'Islam', '', 'C-1-102, BLOK C, APARTMENT SRI MERANTI', 'JALAN PJU 1A/5 ARA DAMANSARA', '47301', 'PETALING JAYA', '12', 'b022110166@student.utem.edu.my', '0123225081', 'Single', '', '2024-08-27', '2', '1', 1800.00, 'Motorcycle', '', 'UNIVERSITY TECHNICAL MALAYSIA MELAKA', 'COMPUTER ENGINEERING', '2', '2024-08-27', 'UTeM', 'Student', '4 years', '', '- sadfaf\r\n- asfasf\r\n', 'Beginner', 'Beginner', 'Beginner', 'Beginner', 'favfa', 'asfafa', '', 0x333539372d3430342e706e67),
(30, 'Muhammad Shahrin Hakimi', 23, '990211105503', '2024-08-27', 'SELANGOR', '1', 'Malay', '', 'Islam', '', 'C-1-102, BLOK C, APARTMENT SRI MERANTI', 'JALAN PJU 1A/5 ARA DAMANSARA', '47301', 'PETALING JAYA', '12', 'b022110166@student.utem.edu.my', '0123225081', 'Single', '', '2024-08-27', '2', '1', 1800.00, 'Motorcycle', '', 'UNIVERSITY TECHNICAL MALAYSIA MELAKA', 'COMPUTER ENGINEERING', '2', '2024-08-27', 'UTeM', 'Student', '4 years', '', '- sadfaf\r\n- asfasf\r\n', 'Beginner', 'Beginner', 'Beginner', 'Beginner', 'favfa', 'asfafa', '', 0x393237392d3430342e706e67),
(31, 'Shahrin Hakimi', NULL, NULL, '1999-02-11', 'SELANGOR', '1', 'Malay', '', 'Islam', '', 'C-1-102, BLOK C, APARTMENT SRI MERANTI', 'jalan pju 1a/5 ara damansara', '47301', 'PETALING JAYA', '12', 'hakimianuar11@gmail.com', '0123225081', 'Single', '', '2024-09-05', '1', '1', 1800.00, 'No license', '', 'UNIVERSITY TECHNICAL MALAYSIA MELAKA', 'COMPUTER ENGINEERING', '2', '2024-09-05', 'UTeM', 'Student', '', '', '- sadasd\r\n- asadf\r\n', 'Beginner', 'Beginner', 'Beginner', 'Beginner', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `interns`
--

CREATE TABLE `interns` (
  `id` int(11) NOT NULL,
  `image` longblob DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `ic_number` varchar(15) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  `guardian` varchar(100) DEFAULT NULL,
  `relationship` varchar(50) DEFAULT NULL,
  `emergency_contact` varchar(15) DEFAULT NULL,
  `pa` varchar(100) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `pa_contact` varchar(15) DEFAULT NULL,
  `pa_email` varchar(100) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `university` varchar(100) DEFAULT NULL,
  `course` varchar(100) DEFAULT NULL,
  `education_level` varchar(100) DEFAULT NULL,
  `address1` varchar(100) DEFAULT NULL,
  `address2` varchar(100) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `poscode` int(10) DEFAULT NULL,
  `university_letter` longblob DEFAULT NULL,
  `resume` longblob DEFAULT NULL,
  `cover_letter` longblob DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `interns`
--

INSERT INTO `interns` (`id`, `image`, `name`, `ic_number`, `dob`, `age`, `guardian`, `relationship`, `emergency_contact`, `pa`, `position`, `pa_contact`, `pa_email`, `gender`, `status`, `email`, `phone`, `university`, `course`, `education_level`, `address1`, `address2`, `city`, `state`, `poscode`, `university_letter`, `resume`, `cover_letter`, `start_date`, `end_date`) VALUES
(1, 0x343139372d3230392d757365722d342e6a7067, 'MUHAMMAD SHAHRIN HAKIMI BIN SHAHRIL ANUAR', '990211105503', '1999-02-11', 25, 'ZARAH ZAKARIA', '2', '0122614528', 'PROFESOR MADYA DR SOO YEW GUAN', 'PROFESOR MADYA - FAKULTI TEKNOLOGI DAN KEJURUTERAAN ELEKTRONIK DAN KOMPUTER', '0123225081', 'soo@utem.edu.my', '1', '1', 'hakimianuar11@gmail.com', '0123225081', 'University Technical Malaysia Melaka (UTeM)', 'Bachelor of Computer Engineering', '2', 'C-1-102, BLOK C, APARTMENT SRI MERANTI', 'JALAN PJU 1A/5 ARA DAMANSARA', 'PETALING JAYA', '12', 47301, NULL, 0x353330372d526573756d6520285554654d292e706466, 0x39302d4c495f3030303220284165726f737461722053797374656d73292e706466, '2024-07-15', '2024-09-20'),
(2, 0x323131372d757365722d322e6a7067, 'Muhammad Shahrin Hakimi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', '', '', NULL, 'b022110166@student.utem.edu.my', '0123225081', 'ertyuio', 'qwerty', NULL, NULL, NULL, 'PETALING JAYA', '', NULL, NULL, '', '', NULL, NULL),
(16, 0x323131372d757365722d322e6a7067, 'Muhammad Shahrin Hakimi', '990211-10-5503', '2024-08-15', 25, 'MUHAMMAD SHAHRIN HAKIMI BIN SHAHRIL ANUAR', '1', '0122614528', 'PROFESOR MADYA DR SOO YEW GUAN', 'PROFESOR MADYA - FAKULTI TEKNOLOGI DAN KEJURUTERAAN ELEKTRONIK DAN KOMPUTER', '0123225081', 'soo@utem.edu.my', '1', '1', 'b022110166@student.utem.edu.my', '0123225081', 'ertyuio', 'qwerty', '1', 'C-1-102, BLOK C, APARTMENT SRI MERANTI', 'jalan pju 1a/5 ara damansara', 'PETALING JAYA', '12', 47301, '', '', '', '2024-08-16', '2024-10-18'),
(17, 0x313335362d3230392d757365722d342e6a7067, 'Shahrin Hakimi', '990211105503', '1999-02-11', 25, 'MUHAMMAD SHAHRIN HAKIMI BIN SHAHRIL ANUAR', '1', '0122614528', 'PROFESOR MADYA DR SOO YEW GUAN', 'PROFESOR MADYA - FAKULTI TEKNOLOGI DAN KEJURUTERAAN ELEKTRONIK DAN KOMPUTER', '0123225081', 'soo@utem.edu.my', '1', '1', 'hakimianuar11@gmail.com', '0123225081', 'University Technical Malaysia Melaka (UTeM)', 'Bachelor of Computer Engineering', '2', 'C-1-102, BLOK C, APARTMENT SRI MERANTI', 'jalan pju 1a/5 ara damansara', 'PETALING JAYA', '12', 47301, '', '', '', '2024-08-15', '2024-10-22'),
(18, '', 'Shahrin Hakimi', '990211105503', '2024-08-27', 25, 'Muhammad Shahrin Hakimi', '2', '0122614528', 'PROFESOR MADYA DR SOO YEW GUAN', 'PROFESOR MADYA - FAKULTI TEKNOLOGI DAN KEJURUTERAAN ELEKTRONIK DAN KOMPUTER', '0123225081', 'soo@utem.edu.my', '1', '1', 'b022110166@student.utem.edu.my', '0123225081', 'University Technical Malaysia Melaka (UTeM)', 'Bachelor of Computer Engineering', '2', 'C-1-102, BLOK C, APARTMENT SRI MERANTI', 'jalan pju 1a/5 ara damansara', 'PETALING JAYA', '12', 47301, '', '', '', '2024-08-27', '2024-08-28'),
(19, '', 'Shahrin Hakimi', '990211105503', '2024-08-28', 25, 'Muhammad Shahrin Hakimi', '4', '0122614528', 'PROFESOR MADYA DR SOO YEW GUAN', 'PROFESOR MADYA - FAKULTI TEKNOLOGI DAN KEJURUTERAAN ELEKTRONIK DAN KOMPUTER', '0123225081', 'soo@utem.edu.my', '1', '1', 'b022110166@student.utem.edu.my', '0123225081', 'University Technical Malaysia Melaka (UTeM)', 'Bachelor of Computer Engineering', '2', 'C-1-102, BLOK C, APARTMENT SRI MERANTI', 'jalan pju 1a/5 ara damansara', 'PETALING JAYA', '12', 47301, '', '', '', '2024-08-28', '2024-09-28');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `jobTitle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `jobTitle`) VALUES
(1, 'App Developer'),
(2, 'Web Developer'),
(3, 'IT Support'),
(4, 'Software Development');

-- --------------------------------------------------------

--
-- Table structure for table `job_list`
--

CREATE TABLE `job_list` (
  `id` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `job_list`
--

INSERT INTO `job_list` (`id`, `job_title`) VALUES
(1, 'App Developer'),
(2, 'Web Developer'),
(3, 'IT Support'),
(4, 'Software Development'),
(5, 'App Developer'),
(6, 'Web Developer'),
(7, 'IT Support'),
(8, 'Software Development');

-- --------------------------------------------------------

--
-- Table structure for table `job_types`
--

CREATE TABLE `job_types` (
  `id` int(11) NOT NULL,
  `job_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `job_types`
--

INSERT INTO `job_types` (`id`, `job_type`) VALUES
(1, 'Full-Time'),
(2, 'Part-Time'),
(3, 'Internship');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1725943191),
('m240910_043857_add_password_reset_token_to_user_table', 1725943193),
('m240910_044359_add_status_column_to_user_table', 1725943470);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `author` varchar(255) DEFAULT NULL,
  `imageFile` longblob NOT NULL,
  `content` text NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `date`, `author`, `imageFile`, `content`, `category`, `source`) VALUES
(1, '\'TERKINI: Pengasas KK Mart, isteri serta tiga pengarah bebas, lepas tuduhan isu stoking kalimah\'', '2024-07-15', 'Suraya Roslan', 0x373239352d6e6577322e6a7067, 'SHAH ALAM: Pengasas dan Pengerusi Eksekutif Kumpulan KK Mart, Datuk Seri Dr Chai Kee Kan dan isteri, Datin Seri Loh Siew Mui dilepas dan dibebaskan (DNA) oleh Mahkamah Sesyen di sini hari ini, daripada pertuduhan melukakan perasaan orang Islam dalam isu penjualan stoking tertera kalimah Allah.\r\n\r\nSelain itu, tiga pengarah syarikat pembekal stoking berkenaan, Xin Jian Chang Sdn Bhd turut mendapat perintah DNAA selepas pendakwaan tidak mahu meneruskan pertuduhan ke atas lima individu berkenaan.\r\n\r\n\r\nUntuk rekod, dua syarikat dan lima individu ini mengemukakan representasi pada 17 Mei lalu kepada Jabatan Peguam Negara untuk menggugurkan kes berkenaan.\r\n\r\nPada 26 Mac lalu, Kee Kan dan Siew Mui yang juga Pengarah KK Super Mart & Superstore mengaku tidak bersalah atas masing-masing satu pertuduhan, sengaja melukakan perasaan orang Islam dengan mempamerkan stoking tertera kalimah Allah di rak pameran jualan, yang telah dilihat oleh seorang lelaki berusia 32 tahun.', '1', 'https://www.bharian.com.my/berita/kes/2024/07/1271567/terkini-pengasas-kk-mart-isteri-serta-tiga-pengarah-bebas-lepas-tuduhan'),
(2, 'Israel terus bedil Gaza', '2024-07-16', 'AFP', 0x393334352d6e657773352e6a7067, 'GAZA: Serangan udara dan tembakan artileri tentera Israel terus menggegarkan Semenanjung Gaza semalam, lebih sembilan bulan sejak perang tercetus 7 Oktober lalu, menjadikan harapan untuk keamanan di wilayah terkepung itu semakin pudar.\r\n\r\nPeluru menghujani kawasan kejiranan Tal Al-Hawa, Sheikh Ajlin dan Al-Sabra di Gaza City, wartawan AFP melaporkan, manakala saksi berkata tentera Israel telah membedil kawasan Al-Mughraqa dan pinggir utara kem pelarian Nuseirat di tengah Gaza.\r\n\r\nSumber hospital pula melaporkan tiga maut akibat serangan ke atas sebuah rumah di bandar Deir al-Balah, juga di tengah-tengah wilayah pantai, manakala paramedik dari Bulan Sabit Merah Palestin berkata mereka membawa keluar lima mayat susulan serangan udara Israel berdekatan kem Al-Maghazi.\r\n\r\n\r\nDi selatan Gaza, saksi melaporkan tembakan artileri dan serangan helikopter di timur bandar Khan Yunis dan kawasan barat Rafah, berhampiran sempadan Mesir.', '1', 'https://www.bharian.com.my/dunia/asia/2024/07/1271908/israel-terus-bedil-gaza'),
(3, 'Kes keropok beracun: Pekebun dibebaskan dengan jaminan polis', '2024-07-18', 'BERNAMA', 0x353737322d6e657773392e6a7067, 'KULIM: Seorang lelaki berusia 33 tahun yang direman bagi membantu siasatan berhubung kejadian dua beradik maut akibat termakan keropok mengandungi racun, dibebaskan dengan jaminan polis.\r\n\r\nKetua Polis Daerah Kulim, Superintendan Mohd Azizul Mohd Khairi, berkata suspek yang merupakan seorang pekebun itu, direman sejak 11 Julai hingga semalam.\r\n\r\n\"Tempoh reman tidak akan disambung dan suspek dibebaskan dengan jaminan polis sementara menunggu keputusan Timbalan Pendakwa Raya.\r\n\r\n\r\n\"Kertas siasatan sudah lengkap dan diserahkan kepada Timbalan Pendakwa Raya,\" katanya dalam kenyataan hari ini.', '3', 'https://www.bharian.com.my/berita/kes/2024/07/1272836/kes-keropok-beracun-pekebun-dibebaskan-dengan-jaminan-polis'),
(4, 'Kes bunuh Nur Farah Kartini: Polis sahkan suspek adalah teman lelaki', '2024-07-16', ' Suzalina Halid', 0x393931342d6e657773322e6a7067, 'KUALA LUMPUR: Lelaki yang ditahan polis bagi membantu siasatan berhubung penemuan mayat Nur Farah Kartini Abdullah, adalah teman lelakinya.\r\n\r\nKetua Polis Selangor Datuk Hussein Omar Khan berkata suspek berusia 26 tahun terbabit ditahan susulan siasatan yang dilakukan berhubung kehilangan mangsa.\r\n\r\n\r\n\"Berpandukan siasatan terhadap suspek membawa kepada penemuan mayat mangsa di ladang kelapa sawit Kampung Sri Kledang, Hulu Selangor, petang semalam.\r\n\r\n\"Bagaimanapun, motif pembunuhan masih dalam siasatan,\" katanya ketika dihubungi Harian Metro, hari ini.\r\n\r\n', '3', 'https://www.bharian.com.my/berita/nasional/2024/07/1271978/kes-bunuh-nur-farah-kartini-polis-sahkan-suspek-adalah-teman-lelaki'),
(5, 'Purata suhu Semenanjung Malaysia meningkat 0.24 darjah Celsius per dekad', '2024-07-16', 'Mohammad Khairil Ashraf Mohd Khalid ', 0x373735342d6e657773332e6a7067, 'KUALA LUMPUR: Purata suhu permukaan Semenanjung Malaysia menunjukkan peningkatan 0.24 darjah Celsius per dekad, dengan pelbagai faktor sama ada semula jadi atau kesan aktiviti manusia antara penyebab.\r\n\r\nMenteri Sumber Asli dan Kelestarian Alam, Nik Nazmi Nik Ahmad berkata, purata suhu bulanan di Semenanjung Malaysia pada Mei 2024 adalah 28.8 darjah Celsius, manakala purata suhu bulanan pada Mei 1974 iaitu 50 tahun lalu adalah 26.6 darjah Celsius.\r\n\r\n\"Peningkatan suhu ini dipengaruhi pelbagai faktor iaitu faktor semula jadi dan kesan daripada aktiviti manusia. Faktor semula jadi adalah seperti perubahan iklim global dan perubahan pola cuaca.', '4', 'https://www.bharian.com.my/berita/nasional/2024/07/1271998/purata-suhu-semenanjung-malaysia-meningkat-024-darjah-celsius-dekad'),
(6, 'Duda murung, wang simpanan KWSP lesap dilarikan teman wanita', '2024-07-17', 'Nor Azizah Mokhtar', 0x343236362d6e657773372e6a7067, 'KUALA LUMPUR: Seorang duda bukan sahaja terpaksa berputih mata malah mengalami tekanan perasaan yang serius apabila wang simpanan untuk persaraan, lebur akibat ditipu teman wanitanya.\r\n\r\nSetelah sekian lama menduda, lelaki itu dikatakan berkenalan dengan seorang wanita sehinggalah mereka merancang untuk mendirikan rumah tangga.\r\n\r\n\r\nBagaimanapun, bukan sahaja pelamin impian yang dirancang tidak kesampaian, malah wanita itu turut membawa lari wang Kumpulan Simpanan Wang Pekerja (KWSP) lelaki itu yang dicarum selama puluhan tahun.\r\n\r\nKisah malang dialami lelaki itu didedahkan oleh seorang pengamal perubatan Islam, Hasnan Rili menerusi satu hantaran di Facebook, baru-baru ini.', '3', 'https://www.bharian.com.my/berita/nasional/2024/07/1272368/duda-murung-wang-simpanan-kwsp-lesap-dilarikan-teman-wanita'),
(7, 'KPM buat program bersama saintis tarik minat pelajar terhadap STEM', '2024-07-18', 'Noor Atiqah Sulaiman ', 0x373035312d6e657773382e6a7067, 'KUALA LUMPUR: Kementerian Pendidikan (KPM) akan melaksanakan pelbagai program bersama saintis sekali gus mencapai hasrat Perdana Menteri, Datuk Seri Anwar Ibrahim untuk meningkatkan minat murid dalam bidang Sains, Teknologi, Kejuruteraan dan Matematik (STEM).\r\n\r\nMenteri Pendidikan, Fadhlina Sidek berkata, pada 30 Mei lalu pihaknya bersama Kementerian Pendidikan Tinggi (KPT) serta Kementerian Sains, Teknologi dan Inovasi (MOSTI) sudah menubuhkan Jawatankuasa Khas STEM yang akan memberi fokus khusus kepada hala tuju bidang berkenaan bermula dari peringkat sekolah sehingga ke pendidikan tinggi.\r\n\r\n\r\nJusteru, melalui penubuhan jawatankuasa itu, Fadhlina berkata pelbagai inisiatif pembudayaan, aktiviti dan program pembangunan STEM sedang giat berjalan di sekolah.', '5', 'https://www.bharian.com.my/berita/nasional/2024/07/1272845/kpm-buat-program-bersama-saintis-tarik-minat-pelajar-terhadap-stem');

-- --------------------------------------------------------

--
-- Table structure for table `portal`
--

CREATE TABLE `portal` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `imageFile` longblob DEFAULT NULL,
  `job_type` varchar(100) DEFAULT NULL,
  `responsibilities` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `benefit` text DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `schedule` varchar(100) DEFAULT NULL,
  `min_salary` int(10) DEFAULT NULL,
  `max_salary` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `portal`
--

INSERT INTO `portal` (`id`, `title`, `imageFile`, `job_type`, `responsibilities`, `description`, `benefit`, `location`, `schedule`, `min_salary`, `max_salary`) VALUES
(1, 'Software Developer', 0x373136382d74657374312e6a7067, '1', '- Write clean, efficient, and maintainable code based on project requirements.\r\n- Debug and troubleshoot software issues and performance problems.\r\n- Collaborate with designers, project managers, and other developers to deliver high-quality software.\r\n- Participate in code reviews and maintain coding standards.\r\n- Continuously improve and update software applications.', 'A Software Developer creates and maintains software applications tailored to user and business needs. They design, code, test, and debug software to ensure it meets functional requirements and performs efficiently.', '- High earning potential with opportunities for advancement.\r\n- Creative and dynamic work environment.\r\n- Access to cutting-edge technology and tools.\r\n- Flexible work schedules and remote work possibilities.\r\n- Comprehensive health benefits and career development programs.', 'Petaling Jaya', 'Monday to Friday', 1500, 1800),
(2, 'IT Project Manager', 0x393932302d74657374322e6a7067, '1', '- Define project scope, objectives, and deliverables.\r\n- Develop detailed project plans, including timelines and resource allocation.\r\n- Coordinate with cross-functional teams to ensure project milestones are met.\r\n- Manage project budgets and track expenditures.\r\n- Communicate project status and issues to stakeholders and senior management.', 'An IT Project Manager oversees technology projects, ensuring they are completed on time and within budget. They plan project phases, coordinate teams, manage resources, and communicate progress to stakeholders.', '- Competitive salary and performance bonuses.\r\n- Opportunities to lead high-impact projects and initiatives.\r\n- Career growth potential in management and executive roles.\r\n- Flexible working conditions and professional development opportunities.\r\n- Comprehensive health benefits and retirement plans.', 'Petaling Jaya', 'Monday to Friday', 1500, 1800),
(3, 'Web Developer', 0x313230352d74657374342e6a7067, '2', '- Develop and update website features and functionalities.\r\n- Write clean, efficient code using HTML, CSS, and JavaScript.\r\n- Test websites for responsiveness, usability, and performance.\r\n- Collaborate with clients or team members to understand project requirements.\r\n- Fix bugs and implement improvements based on feedback.', 'A Web Developer (Part-Time) creates and maintains websites or web applications. This role involves designing user interfaces, coding functionalities, and ensuring optimal performance and security of web projects.', '- Flexible schedule and the option to work remotely.\r\n- Opportunity to work on diverse projects.\r\n- Enhance your portfolio with real-world experience.\r\n- Potential for future full-time opportunities or freelance work.', 'Petaling Jaya', 'Monday to Friday', 1500, 1800),
(4, 'Database Administrator', 0x343836372d74657374332e6a7067, '2', '- Monitor database performance and optimize queries for efficiency.\r\n- Perform routine backups and ensure data recovery processes are in place.\r\n- Manage user access and database security.\r\n- Troubleshoot and resolve database issues.\r\n- Assist with database design and implementation.', 'A Part-Time Database Administrator manages and maintains an organization\'s databases. This role involves ensuring database performance, security, and reliability while supporting data storage and retrieval needs.', '- Flexible working hours.\r\n- Work with sophisticated database systems.\r\n- Opportunity to develop specialized skills in database management.\r\n- Potential for remote work.', 'Petaling Jaya', 'Monday to Friday', 1500, 1800),
(5, 'App Developments (Internship)', 0x343337332d373136382d74657374312e6a7067, '3', '- Assist in the development and testing of mobile applications.\r\n- Collaborate with senior developers to integrate APIs and third-party services\r\n- Help in debugging and resolving issues within mobile apps.\r\n- Participate in design discussions and contribute ideas for app improvements.', 'As an App Developer Intern, you will work alongside our development team to create and enhance mobile applications. This role is suited for individuals interested in learning mobile app development for both iOS and Android platforms.', '- Hands-on experience in mobile app development.\r\n- Exposure to industry-standard development practices and tools.\r\n- Opportunity to work on both iOS and Android platforms.\r\n- Potential to showcase your work in the app store.', 'Petaling Jaya', 'Monday to Friday', 0, 500),
(6, 'Web Designer (Contract)', 0x363034352d4f49502e6a706567, '4', '- Design and create visually appealing and user-friendly website layouts and interfaces.\r\n- Develop responsive web designs that work across various devices and screen sizes.\r\n- Ensure designs are optimized for performance and accessibility.\r\n- Work with developers to ensure designs are implemented accurately and effectively.\r\n- Conduct user research and testing to gather feedback and make design improvements.', 'We are seeking a talented and creative Web Designer for a contract position to design and enhance our web presence. The ideal candidate will have a strong portfolio showcasing their expertise in designing user-friendly and visually appealing websites. This role involves working closely with our development team to create responsive and engaging web experiences.', '- Competitive contract rate.\r\n- Flexible working hours and the possibility of remote work.\r\n- Opportunity to work on diverse and interesting projects.\r\n- Access to professional development and design resources.\r\n- Potential for future contract extensions based on performance and project needs.', 'Petaling Jaya', 'Monday to Friday', 1500, 1800);

-- --------------------------------------------------------

--
-- Table structure for table `relationship`
--

CREATE TABLE `relationship` (
  `id` int(11) NOT NULL,
  `relationship_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `relationship`
--

INSERT INTO `relationship` (`id`, `relationship_name`) VALUES
(1, 'Father'),
(2, 'Mother'),
(3, 'Aunt'),
(4, 'Uncle'),
(5, 'Brother'),
(6, 'Sister'),
(7, 'Grandfather'),
(8, 'Grandmother');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `state_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `state_name`) VALUES
(1, 'JOHOR'),
(2, 'KEDAH'),
(3, 'KELANTAN'),
(4, 'MELAKA'),
(5, 'NEGERI SEMBILAN'),
(6, 'PAHANG'),
(7, 'PENANG'),
(8, 'PERAK'),
(9, 'PERLIS'),
(10, 'SABAH'),
(11, 'SARAWAK'),
(12, 'SELANGOR'),
(13, 'TERENGGANU'),
(14, 'KUALA LUMPUR'),
(15, 'LABUAN'),
(16, 'PUTRAJAYA');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status_name`) VALUES
(1, 'Single'),
(2, 'Married'),
(3, 'Divorced'),
(4, 'Widowed');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `jobType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `jobType`) VALUES
(1, 'Full-Time'),
(2, 'Part-Time'),
(3, 'Internship'),
(4, 'Contract');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `designation` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT 1,
  `role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `firstname`, `lastname`, `email`, `phone`, `designation`, `password_hash`, `auth_key`, `password_reset_token`, `status`, `role`) VALUES
(1, 'SuperAdmin@Aerosys', 'Super', 'Admin', 'aerosys.2024@gmail.com', '0123225081', 'System Administration', '$2y$13$9xRNy6RoRpsV4SLsZr0iC.4.JqTbFveFHJU9Nvo0i9X0fxspncK02', 'gbp3GgliNG8mZWC_7adjVrkcr6UbVNCF', NULL, 1, '1'),
(2, 'Hr@Aerosys', '', '', 'hr.aerosys@gmail.com', '', '', '$2y$13$6lHEhXrd4xBTQO2hkylyHOSklYt6M9NJPNbHMJWF8dQoxai2zX2xC', 'yYxP-Efe2ruGy7xla3M0IrS_HPN1T5O7', NULL, 1, '2'),
(3, 'Staff@Aerosys', '', '', 'staff.aerosys@yahoo.com', NULL, '', '$2y$13$7I4ZPcajCsYa3o7PLiWXee4oYLCTc7OUKJ.u71rt4uAwRMUTzLT5y', 'MstMN7EmP1bjgl6pSjr1hEzbX_qE5-7u', NULL, 1, '3'),
(20, 'Staff1@Aerosys', 'Shahrin', 'Hakimi', 'hakimianuar11@gmail.com', '0123225081', 'Staff', '$2y$13$.lFM3taqQRGa/5DENGuBv.WfhUCKaenhy8AdVPvXDn8v3EvjVwAVG', '0MZnKJfRcl4LtMhGvkquGreSOz7st-Dv', NULL, 1, '3'),
(21, 'Staff2@Aerosys', 'Shahrin', 'Hakimi', 'hakimianuar111@gmail.com', '0123225081', 'Staff', '$2y$13$z1QLSqJe/qlR5FYPWvCI0ejPyD0H4mIjSO3mFMPFwgdHd3JwbBwmG', '9TuCOsP93TmVHFGetk4WMICFqD9BNY4I', NULL, 1, NULL),
(22, 'Staff3@Aerosys', 'Shahrin', 'Hakimi', 'hakimianuar121@gmail.com', '0123225081', 'Staff', '$2y$13$RcdRHIZfxvLom/IdlvqI0uix9e0XfF.KfavFb/nXHBQA/Svponm92', 'NKcQ87voPn-zrR3AZPVlq8DyUkt0bKka', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `gender` enum('Male','Female') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `gender`) VALUES
(1, 'Male'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `name`) VALUES
(1, 'Super Admin'),
(2, 'Management'),
(3, 'Staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interns`
--
ALTER TABLE `interns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_list`
--
ALTER TABLE `job_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_types`
--
ALTER TABLE `job_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portal`
--
ALTER TABLE `portal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relationship`
--
ALTER TABLE `relationship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `interns`
--
ALTER TABLE `interns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `job_list`
--
ALTER TABLE `job_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `job_types`
--
ALTER TABLE `job_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portal`
--
ALTER TABLE `portal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `relationship`
--
ALTER TABLE `relationship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
