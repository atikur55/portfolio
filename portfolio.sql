-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2020 at 11:14 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `age` int(5) NOT NULL,
  `residence` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_number` varchar(11) NOT NULL,
  `header` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `status` int(2) NOT NULL,
  `signature` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `age`, `residence`, `address`, `email`, `mobile_number`, `header`, `description`, `status`, `signature`) VALUES
(1, 25, 'Dhaka, Bangladesh', 'House No-14, Road No-7, Katgara, Ashulia', 'atikcseuu40@gmail.com', '01631618174', 'Software Engineer', 'Hi.\r\n\r\nWelcome to my profile...\r\n\r\nI am passionate and hardworking Software Engineer. I have expertise in Web Development. I have 3+ years experience in HTML, CSS, JS, Bootstrap, PHP ,MySQL and Laravel Framework.\r\nI have worked PHP with Laravel Framework and I write queries of SQL in many Project.\r\nIn addition to it, I have expertise in Microsoft Offic Such as MS Excel (Vlookup, Pivot Table etc). MS Word.\r\n\r\nI strongly believe that in IT there is nothing impossible and man can do/ develop what ever he thinks. It is always good to learn new language/ tool and techniques..\r\n\r\nI work for the satisfaction of my client and always provide support after the completion of a project.\r\n\r\nRegards', 1, '1.png');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `status`) VALUES
(1, 'atikur rahman', 'atikurrahman@gmail.com', 'fdssyyfyfuiugiugui', 1),
(2, 'sadia jahan', 'sadi@gmail.com', 'wsfeywefwefgwewec', 1),
(3, 'raqib', 'Raqib@Gmail.Com', 'efweufwefwebcwebcwecwwcbbwec', 0),
(4, 'mr.z', 'atikurrahman@gmail.com', 'safgewgfefgewugfeewui', 1),
(5, 'mr.y', 'tarek@gmail.com', 'sfgewweecvskfhsv', 1),
(6, 'atik', 'a', '', 0),
(7, 'atik', 'atikur90@gmail.com', 'qgrghregrtghtrhrthre', 0);

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` int(11) NOT NULL,
  `position` varchar(256) NOT NULL,
  `institute_name` varchar(256) NOT NULL,
  `grade` varchar(50) NOT NULL,
  `start_ins` varchar(5) NOT NULL,
  `end_year` varchar(5) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `position`, `institute_name`, `grade`, `start_ins`, `end_year`, `status`) VALUES
(1, 'Bachelor of Science in Computer Science and Engineering', 'Uttara University, Dhaka', 'CGPA - 3.63', '2016', '2019', 1),
(2, 'Higher Secondary Certificate ( HSC )', 'Tejgoan College, Dhaka', 'Grade : A', '2012', '2014', 1),
(3, 'Secondary School Certificate', 'Kathgara High School', 'Grade : A', '2010', '2012', 1);

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(11) NOT NULL,
  `position` varchar(50) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `company_desc` text NOT NULL,
  `start` varchar(5) NOT NULL,
  `end_year` varchar(5) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `position`, `company_name`, `company_desc`, `start`, `end_year`, `status`) VALUES
(1, 'Lecturer', 'Reun Private Program,Kathgara,Savar-Dhaka', 'Hi, I am an ICT Lecturer. I have been working in Reun private Program for 4 years. I have good skills as a trainer. Thank You.', '2016', '2020', 1),
(2, 'Software Trainer', 'New Sun IT Institute , Savar , Dhaka', 'Hi, I am Web and Software Trainer at New Sun IT Institute. I am working many project in local market. I have been working HTML ,CSS, JavaScript, Bootstrap, JQuery, PHP and MySQL at 4th year of University.', '2019', '2020', 1);

-- --------------------------------------------------------

--
-- Table structure for table `headers`
--

CREATE TABLE `headers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `year` varchar(5) NOT NULL,
  `status` int(2) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `headers`
--

INSERT INTO `headers` (`id`, `name`, `year`, `status`, `photo`) VALUES
(1, 'Md Atikur Rahman', '2020', 1, '1.jpg'),
(2, 'Atikur Rahman', '2020', 0, '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_icon` varchar(50) NOT NULL,
  `service_intro` varchar(80) NOT NULL,
  `service_para` varchar(256) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_icon`, `service_intro`, `service_para`, `status`) VALUES
(1, 'fas fa-laptop-code', 'Web Development', 'Web development is the work involved in developing a website for the Internet or an intranet. Web development can range from developing a simple single static page of plain text to complex web-based internet applications, electronic businesses, and social ', 1),
(2, 'fas fa-file-code', 'Web Design', 'Web design encompasses many different skills and disciplines in the production and maintenance of websites. The different areas of web design include web graphic design; interface design; authoring, including standardised code and proprietary software; use', 1),
(3, 'fas fa-mobile', 'Responsive Web Design', 'Responsive web design is an approach to web design that makes web pages render well on a variety of devices and window or screen sizes. Recent work also considers the viewer proximity as part of the viewing context as an extension for RWD.', 1),
(4, 'fab fa-microsoft', 'Microsoft Office', 'Microsoft Office is a collection of office-related applications. Each application serves a unique purpose and offers a specific service to its users. For example, Microsoft Word is used to create documents. Microsoft PowerPoint is used to create presentati', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `testimonial_des` varchar(256) NOT NULL,
  `testimonial_name` varchar(100) NOT NULL,
  `testimonial_posi` varchar(50) NOT NULL,
  `status` int(2) NOT NULL,
  `testimonial_photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `testimonial_des`, `testimonial_name`, `testimonial_posi`, `status`, `testimonial_photo`) VALUES
(1, 'Atik is a very brilliant student. He is very good learner. When he face any problem than he reseach that, than he finally do that. He is my best student.His University Project is better than other students project.', 'Dr. Md. Mijanur Rahman', 'Chairman and Professor', 1, '1.jpg'),
(2, 'Atik is a good person. He works with me about more than 2 years. he can all the matters easily and understand what any company or client needed thing. he is very hard working person.', 'Md Shafiqul Islam', 'Software Engineer', 1, '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `status` int(5) NOT NULL,
  `create_at` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `role`, `status`, `create_at`, `photo`) VALUES
(2, 'Sinthiya Akter Shorna', 'shorna@gmail.com', '$2y$10$NhYax5s6hgbKYidmJwkr.O2BMvjcDs0OHWhNYCsIgJm2B3LTFbfvC', 'Female', '2', 0, 'Monday 11th of May 2020 02:41:58 PM', '2.jpg'),
(5, 'kawsar hamid', 'kawsar@gmail.com', '$2y$10$uOEx7r.3RecfLOmdMEJzQueJlOK497BBM7V3ygOizbkAfo/gNZae.', 'Male', '3', 0, 'Monday 11th of May 2020 02:39:42 PM', '5.jpg'),
(6, 'Atikur Rahman', 'tuhin@gmail.com', '$2y$10$LnK1iqli/drcHDI8TTo...Tl1yAp5i49cPVLB3i4sodbAVgrpYw5S', 'Male', '1', 0, 'Friday 15th of May 2020 02:18:40 PM', '6.jpg'),
(7, 'Rabeya Bosri', 'rabeya@gmail.com', '$2y$10$z75z0kOnCj05Dr0IwSQ15eBHFTdKLQpJmBEW1NQIcSamzRXSvLGQu', 'Female', '1', 0, 'Friday 15th of May 2020 02:18:51 PM', '7.jpg'),
(8, 'Atikur Rahman', 'atikurrahman@gmail.com', '$2y$10$U6seNQykJs9PhSIxOgiehuHZft54MvRxOugFRX.hiMjIOegGJKe5y', 'Male', '1', 0, 'Friday 15th of May 2020 02:21:25 PM', '8.jpg'),
(9, 'Shafiqur Rahman', 'shafiq90@gmail.com', '$2y$10$b.dCtjbfNeAZ3N0YWjCF/uqCtRI.YKzFno27m19xWlfNPwTP4JEaa', 'Male', '1', 1, 'Sunday 17th of May 2020 02:57:39 PM', '9.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `headers`
--
ALTER TABLE `headers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
