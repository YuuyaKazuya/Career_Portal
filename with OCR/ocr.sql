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
-- Database: `ocr`
--

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

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `id` int(11) NOT NULL,
  `gender` enum('Male','Female') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`id`, `gender`) VALUES
(1, 'Male'),
(2, 'Female');

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
(1, '', 'Shahrin Hakimi', '990211-10-5503', '1999-02-11', 25, 'Muhammad Shahrin Hakimi', '1', '01123351108', 'PROFESOR MADYA DR SOO YEW GUAN', 'PROFESOR MADYA - FAKULTI TEKNOLOGI DAN KEJURUTERAAN ELEKTRONIK DAN KOMPUTER', '0123225081', 'soo@utem.edu.my', '1', '1', 'b022110166@student.utem.edu.my', '0123225081', 'University Technical Malaysia Melaka (UTeM)', 'Bachelor of Computer Engineering', '1', 'C-1-102, BLOK C, APARTMENT SRI MERANTI', 'jalan pju 1a/5 ara damansara', 'PETALING JAYA', '12', 47301, '', '', '', '2024-09-17', '2024-09-20');

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
-- Table structure for table `resume_data`
--

CREATE TABLE `resume_data` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `education` text DEFAULT NULL,
  `experience` text DEFAULT NULL,
  `skills` text DEFAULT NULL,
  `resumeFile` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resume_data`
--

INSERT INTO `resume_data` (`id`, `name`, `email`, `phone`, `education`, `experience`, `skills`, `resumeFile`) VALUES
(1, 'Muhammad Shahrin Hakimi', 'hakimianuar11@gmail.com', '0123225081', 'Bachelor’s degree in computer engineering', 'Student', 'PHP Programming', ''),
(2, 'Muhammad Shahrin Hakimi', 'hakimianuar11@gmail.com', '0123225081', 'Bachelor’s degree in computer engineering', 'Student', 'PHP Programming', '');

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
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interns`
--
ALTER TABLE `interns`
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
-- Indexes for table `resume_data`
--
ALTER TABLE `resume_data`
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
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `interns`
--
ALTER TABLE `interns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `resume_data`
--
ALTER TABLE `resume_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
