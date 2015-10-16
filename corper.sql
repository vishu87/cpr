-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2015 at 05:54 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `corper`
--

-- --------------------------------------------------------

--
-- Table structure for table `abilities`
--

CREATE TABLE IF NOT EXISTS `abilities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ability` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `abilities`
--

INSERT INTO `abilities` (`id`, `ability`, `created_at`, `updated_at`) VALUES
(1, 'Speak', '2015-04-27 11:33:21', '2015-04-27 11:33:21'),
(2, 'Write', '2015-06-04 03:19:41', '2015-04-28 10:48:37'),
(3, 'Speak & Write', '2015-06-04 03:19:52', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1, 'Registrations'),
(2, 'Camp'),
(3, 'Serving'),
(4, 'General NYSC'),
(5, 'Rendomness');

-- --------------------------------------------------------

--
-- Table structure for table `cvs`
--

CREATE TABLE IF NOT EXISTS `cvs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cv_code` varchar(10) NOT NULL,
  `cv_name` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `phone_num` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(200) NOT NULL,
  `add_line1` varchar(100) NOT NULL,
  `add_line2` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `marital_status` varchar(100) NOT NULL,
  `profile_image` varchar(200) NOT NULL,
  `sex` varchar(200) NOT NULL,
  `state_origin` varchar(200) NOT NULL,
  `religion` varchar(200) NOT NULL,
  `religion_text` varchar(50) NOT NULL,
  `show_profile_pic` int(1) NOT NULL,
  `local_government` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

--
-- Dumping data for table `cvs`
--

INSERT INTO `cvs` (`id`, `cv_code`, `cv_name`, `user_id`, `full_name`, `phone_num`, `email`, `website`, `add_line1`, `add_line2`, `dob`, `marital_status`, `profile_image`, `sex`, `state_origin`, `religion`, `religion_text`, `show_profile_pic`, `local_government`, `created_at`, `updated_at`) VALUES
(1, '', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-02 08:52:42', '2015-02-02 08:52:42'),
(2, '', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-02 08:53:40', '2015-02-02 08:53:40'),
(3, 'ThDzr6YDoY', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-02 08:55:40', '2015-02-02 08:55:40'),
(4, 'Whv5EJsXOM', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-02 08:59:44', '2015-02-02 08:59:44'),
(5, 'ndRM0PLIw9', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-02 09:01:21', '2015-02-02 09:01:21'),
(6, 'ehmrEkWb5A', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-02 09:06:18', '2015-02-02 09:06:18'),
(7, 'xjNMp1E2rJ', '0', 0, 'arti', '2147483647', 'art@gmail.com', 'jkjsadasd', 'asdas', 'ijojuoij', '1984-05-06', '2', '', '', '', '', '', 0, '', '2015-02-02 09:11:24', '2015-02-11 07:18:55'),
(8, 'fsIfVmNnHT', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-02 12:29:55', '2015-02-02 12:29:55'),
(9, 'sllyVhIz2Y', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-02 13:19:48', '2015-02-02 13:19:48'),
(10, 'kEQqMuceec', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-03 04:52:42', '2015-02-03 04:52:42'),
(11, '05bXacFugi', '0', 0, 'vashistha aggarwal', '0', 'dasdas@asdsa.com', '', '', '', '1970-01-01', '0', '', '', '', '', '', 0, '', '2015-02-03 08:46:12', '2015-02-03 10:30:23'),
(12, 'SUpfJXN0QQ', '0', 3, 'Sample Student', '2147483647', 'prerith.nigam@iimb.ernet.in', 'www.example.com', 'C-103, Hostel Blocks, IIM Bangalore', 'Karnataka', '1989-01-01', '1', '', '1', '2', '2', '', 0, 'df tef6yew', '2015-06-11 12:43:35', '2015-04-28 11:19:48'),
(13, 'STTyYQa1Om', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-04 11:06:28', '2015-02-04 11:06:28'),
(14, 'bcRAqOk79G', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-04 13:23:39', '2015-02-04 13:23:39'),
(15, 'izbRAtwZ2V', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-04 18:23:13', '2015-02-04 18:23:13'),
(16, 'aPEQv7JbvF', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-05 06:23:24', '2015-02-05 06:23:24'),
(17, '388088j2Wi', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-05 06:38:12', '2015-02-05 06:38:12'),
(18, 'ODgOTlxc58', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-05 09:26:11', '2015-02-05 09:26:11'),
(19, '1fSO1joTmL', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-05 11:02:31', '2015-02-05 11:02:31'),
(20, 'iBfVKrauet', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-05 11:33:06', '2015-02-05 11:33:06'),
(21, 'l16IRSinN5', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-05 12:26:20', '2015-02-05 12:26:20'),
(83, 'cZP6L4eEIZ', 'new', 5, 'kumari arti chauhan', '5478213525', 'art@gmail.com', 'naijagosocial.com', 'asdasd', 'ihioi', '1991-05-01', '2', 'assets/avatars/20150611183202.jpeg', '2', '5', '-1', 'Hindu', 1, 'Fguernhr', '2015-07-09 11:07:52', '2015-07-09 11:07:52'),
(26, 'Vvp2lell8T', '0', 3, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-06 15:24:47', '2015-02-06 15:24:47'),
(27, 'atPhi0kNjF', '0', 3, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-07 04:35:20', '2015-02-07 04:35:20'),
(28, 'hYNURBt2UG', '0', 3, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-07 09:26:09', '2015-02-07 09:26:09'),
(29, 'NoGreg3Gw2', '0', 3, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-07 12:16:18', '2015-02-07 12:16:18'),
(30, 'PlNOdAFSRc', '0', 3, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-07 12:52:33', '2015-02-07 12:52:33'),
(31, 'C4Df6Q0mCt', '0', 3, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-09 09:02:57', '2015-02-09 09:02:57'),
(32, 'mOPOjB3akg', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-09 13:21:10', '2015-02-09 13:21:10'),
(33, 'oCHytmG014', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-09 13:28:31', '2015-02-09 13:28:31'),
(34, 'C5KdEkgUeg', '0', 3, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-10 10:43:38', '2015-02-10 10:43:38'),
(35, 'H1DZ6FVeZ0', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-10 18:15:31', '2015-02-10 18:15:31'),
(36, 'EPqgbJuBOT', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-11 07:12:37', '2015-02-11 07:12:37'),
(37, 'CMufBYgmh4', '0', 3, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-11 07:38:54', '2015-02-11 07:38:54'),
(38, 'fhhWA3xGN2', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-12 09:02:52', '2015-02-12 09:02:52'),
(39, '4pgzROUYgp', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-12 09:41:37', '2015-02-12 09:41:37'),
(40, '6FHcVnNkeY', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-12 09:42:32', '2015-02-12 09:42:32'),
(41, 'G3OwvkKGVV', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-12 09:43:52', '2015-02-12 09:43:52'),
(42, 'JhtESoBw9d', '0', 3, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-12 10:41:44', '2015-02-12 10:41:44'),
(43, 'UsaBclcZoa', '0', 3, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-12 12:32:35', '2015-02-12 12:32:35'),
(44, 'XDQHweCxCa', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-13 10:23:40', '2015-02-13 10:23:40'),
(45, 'dBIt46WmuP', '0', 3, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-13 13:28:04', '2015-02-13 13:28:04'),
(46, 'x3Ct9emeLd', '0', 3, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-14 06:01:58', '2015-02-14 06:01:58'),
(47, 'D4AJEoGGL6', '0', 3, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-14 07:56:04', '2015-02-14 07:56:04'),
(48, 'jfEgzOgH5t', '0', 3, '', '0', '', '', '', '', '1970-01-01', '0', '', '', '', '', '', 0, '', '2015-02-14 11:10:56', '2015-02-14 11:12:08'),
(49, 'xbwPLyq6RA', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-15 14:25:09', '2015-02-15 14:25:09'),
(50, 'abYMPS2Jxc', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-16 07:21:45', '2015-02-16 07:21:45'),
(51, 'ZrZPihgLqZ', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-16 13:44:35', '2015-02-16 13:44:35'),
(52, 'U0chs06Pp9', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-16 16:31:36', '2015-02-16 16:31:36'),
(53, 'EbvpuhtA87', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-17 09:49:06', '2015-02-17 09:49:06'),
(54, 'ljLopPZmlL', '0', 3, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-17 12:24:25', '2015-02-17 12:24:25'),
(55, 'fItJXD1iuO', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-17 16:17:17', '2015-02-17 16:17:17'),
(56, 'i8B5c1siwo', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-18 09:47:31', '2015-02-18 09:47:31'),
(57, 'G5k8QFNvm6', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-18 15:35:10', '2015-02-18 15:35:10'),
(58, 'megwDUhZzd', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-19 04:26:13', '2015-02-19 04:26:13'),
(59, 'xrOUBcYuJq', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-19 07:39:58', '2015-02-19 07:39:58'),
(60, 'R2KtLWu5tM', '0', 3, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-19 10:15:18', '2015-02-19 10:15:18'),
(61, 'xkTgDDehXm', '0', 3, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-19 10:42:25', '2015-02-19 10:42:25'),
(62, 'fVMhfcr6PR', '0', 3, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-19 10:46:24', '2015-02-19 10:46:24'),
(63, 'Ywq4cXXYqd', '0', 3, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-19 11:01:30', '2015-02-19 11:01:30'),
(64, 'QIKXIZ4J3X', '0', 3, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-19 11:24:35', '2015-02-19 11:24:35'),
(65, 'pVBlOxfDan', '0', 3, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-19 11:25:13', '2015-02-19 11:25:13'),
(66, 'Jw8RteQfEN', '0', 3, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-19 12:09:12', '2015-02-19 12:09:12'),
(67, 'n1yt0NIgTx', '0', 3, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-02-19 13:02:15', '2015-02-19 13:02:15'),
(68, 'Ipj25PlfTC', '0', 0, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-03-13 10:13:02', '2015-03-13 10:13:02'),
(69, 'yvnSPDwlsP', '0', 3, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-03-17 09:51:56', '2015-03-17 09:51:56'),
(70, 'V1OCgU7v2E', '0', 3, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-03-21 07:01:41', '2015-03-21 07:01:41'),
(71, 'EkIXrz3NGN', '0', 3, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-03-21 09:21:38', '2015-03-21 09:21:38'),
(72, 'QlswTGDDy9', '0', 3, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-03-21 12:57:05', '2015-03-21 12:57:05'),
(73, 'GpFO3aAlP3', '0', 3, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-03-22 15:11:10', '2015-03-22 15:11:10'),
(74, '3h2EbYrOpY', '0', 3, '', '0', '', '', '', '', '1970-01-01', '0', '', '', '', '', '', 0, '', '2015-03-22 16:26:47', '2015-03-22 16:37:25'),
(75, '2j9dGObHkK', '0', 3, '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '2015-03-24 06:35:26', '2015-03-24 06:35:26'),
(76, 'i3MjGxEcgN', '0', 3, 'bjgv', '0', 'vdfvdvd ', 'd fkbe', 'vfbujvgffe', 'fnvjdvfjhds', '1970-01-09', '2', '', '', '', '', '', 0, '', '2015-03-26 09:10:16', '2015-03-26 12:17:17'),
(77, 'Rkiki5vrhG', '0', 4, '', '0', '', '', '', '', '1970-01-01', '0', '', '', '', '', '', 0, '', '2015-03-31 07:05:02', '2015-03-31 07:05:41'),
(78, 'URgPlo5UHO', '0', 5, 'arti9876', '2147483647', 'abcd9@gmail.com', 'shreemnetworks', 'fb uewfuikhewi', 'f gewugriw', '1989-07-09', '2', 'assets/avatars/20150611174553.jpeg', '2', '2', '1', '', 1, 'government', '2015-06-11 12:47:06', '2015-06-11 12:47:06'),
(81, 'TKYQTlX2Tl', 'My CV1', 6, 'fdsf sdf sdf sdf dsf', '0', '', '', '', '', '1974-03-01', '0', '', '1', '17', '1', '', 0, '', '2015-06-11 09:45:38', '2015-06-11 09:45:38'),
(82, 'IK6HX8Ghvt', 'xxx111', 6, 'sdasdsad', '0', '', '', '', '', '1970-01-01', '0', '', '0', '0', '0', '', 0, '', '2015-05-19 18:15:31', '2015-05-19 18:15:31'),
(84, 'DXT7utTyT3', 'newcv', 5, 'aruthu', '54898918', 'abcd9@gmail.com', '', 'vfmv bfv', 'vfmvfm vf gmfg', '1970-01-01', '0', '', '1', '19', '1', '', 0, 'grf', '2015-07-09 11:21:09', '2015-07-09 11:21:09');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cv_id` int(11) NOT NULL,
  `coursename` varchar(100) NOT NULL,
  `institutename` varchar(100) NOT NULL,
  `add_line1` varchar(200) NOT NULL,
  `add_line2` varchar(200) NOT NULL,
  `startdate` varchar(20) NOT NULL,
  `enddate` varchar(20) NOT NULL,
  `otherinfo` varchar(100) NOT NULL,
  `priority` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `cv_id`, `coursename`, `institutename`, `add_line1`, `add_line2`, `startdate`, `enddate`, `otherinfo`, `priority`) VALUES
(5, 0, 'diploma', '', '', '', '0000-00-00', '0000-00-00', '', 0),
(6, 1, '', '', '', '', '0000-00-00', '0000-00-00', '', 0),
(7, 1, 'sadasd', 'sadasd', '', '', '0000-00-00', '0000-00-00', '', 0),
(8, 1, 'huioy', 'ytfty', '', '', '0000-00-00', '0000-00-00', '', 0),
(9, 3, '7687', '6747', '', '', '0000-00-00', '0000-00-00', '', 2),
(10, 3, 'fhoew', 'cksc', '', '', '0000-00-00', '0000-00-00', '', 1),
(11, 7, 'sdsadd', '787971212', '', '', '1222-21-63', '9999-32-63', '7987979789jhiuhid', 4),
(12, 9, 'huiy', 'iuyiyi', '', '', '0000-00-00', '0000-00-00', 'jhk', 0),
(13, 11, 'asdasd', 'iouyioy', '', '', '0000-00-00', '0000-00-00', 'sdfdsfdsf', 1),
(15, 7, 'bcaffs129q', 'abcd12q', '', '', '1-2-1212q', '1-21-9090q', 'cj dks uiecniuwenc cdwjc', 3),
(16, 7, 'sada', 'ioopo', '', '', '89898989', '898989', '', 1),
(17, 7, 'iuiouiou', 'iuoiuoiu', '', '', '', '', '', 2),
(18, 12, 'B. Sc. Mathematics', 'Calicut University', 'txyryu', 'fy gtuvt7u', '21 July 1999', '21 June 2003', 'Guided several B.E, MCA projects.\r\nTaken Online VSAT classes for Sikkim Manipal University', 2),
(21, 12, 'hdssj dte', 'sgdui', 'dbukfsi f', 'usdguisd jdhcks', '2-12-1990', '2-13-1993', 'dguivgdf vdf8iuyvod chvfdjhcvb', 1),
(22, 68, 'ufiref ', 'b urjhj', 'rfuir efheui', 'b erufuierhf', '23', '2e4215', 'bf udgsfu f t8fy ui', 0),
(23, 71, 'hv idf', 'gfrgr', 'fe rerferf', 'thtyret re', '21-32-23', '12-32-13', 'bgfhrtd uhfiohsd', 0),
(24, 78, 'bjh', 'jfj', 'gf hyrfyh', 'c gfdhn', '46-3-2323', '1-2-3212', ' fgdufgi gfrifrioe', 2),
(25, 78, 'r yjeg4u', ' frhe', 'dfb sjgfuewgfuwe', 'sd twef6deiu', '1-2-1212', '2-3-4334', ' bjgrfug uiyeryfoweyrihwor  wewe', 1),
(35, 81, 'ytuy1', 'gfy1', '', '', 'asdasd', '', '', 1),
(32, 81, 'asdas', 'dasd', 'asda', 'sdasd', 'asd', 'asdsa', '', 2),
(36, 83, 'B.tech', 'DIET', 'Ridh hghr', 'gujkbu iyi', '2-4-2011', '5-4-2014', '2010&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Donec laoreet nonummy augue. Suspendisse dui purus,', 2),
(37, 83, 'M.tech in chemical enginer', 'asdasdasd', '', '', '', '', 'asd asd asdas', 1);

-- --------------------------------------------------------

--
-- Table structure for table `langs`
--

CREATE TABLE IF NOT EXISTS `langs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `langs`
--

INSERT INTO `langs` (`id`, `language`, `created_at`, `updated_at`) VALUES
(1, 'English', '2015-06-05 06:08:31', '0000-00-00 00:00:00'),
(2, 'Pidgin English', '2015-06-05 06:08:31', '0000-00-00 00:00:00'),
(3, 'French', '2015-06-05 06:08:31', '0000-00-00 00:00:00'),
(4, 'Fula', '2015-06-05 06:08:31', '0000-00-00 00:00:00'),
(5, 'Igbo', '2015-06-05 06:08:31', '0000-00-00 00:00:00'),
(6, 'Hausa', '2015-06-05 06:08:31', '0000-00-00 00:00:00'),
(7, 'Yoruba', '2015-06-05 06:08:31', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cv_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `language_name` varchar(200) NOT NULL,
  `ability_id` varchar(50) NOT NULL,
  `level_id` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `cv_id`, `language_id`, `language_name`, `ability_id`, `level_id`, `priority`) VALUES
(1, 72, 1, 'dgdjcufd', '1', 1, 0),
(2, 72, 2, 'ddf', '1', 2, 0),
(3, 78, 2, 'hindi', '1,2', 1, 8),
(4, 78, 1, 'gyiguigu', '1,2', 1, 6),
(5, 78, 5, 'wsw', '1', 1, 4),
(6, 78, 6, 'grfdge', '1', 1, 3),
(7, 78, 7, 'asd', '1', 1, 2),
(8, 78, 8, 'asd', '1', 1, 5),
(9, 78, 1, '', '1', 1, 7),
(10, 82, 1, '', '1', 1, 1),
(25, 81, 1, '', '1', 2, 2),
(24, 81, -1, 'as', '1', 1, 10),
(17, 81, 4, '', '1', 1, 11),
(22, 81, 1, '', '1', 1, 9),
(23, 81, -1, 'sadasdasd', '1', 1, 8),
(26, 81, 1, '', '1', 1, 7),
(27, 81, 1, '', '1', 1, 6),
(28, 81, -1, 'asdasd', '1', 1, 5),
(29, 81, -1, 'asds', '1', 1, 4),
(30, 81, 5, '', '3', 1, 3),
(31, 81, -1, 'dfdfdsf', '1', 1, 1),
(32, 78, -1, 'khgujh', '1', 1, 1),
(33, 83, 1, '', '3', 2, 2),
(34, 83, -1, 'hindi', '3', 2, 1),
(35, 84, 1, '', '1', 1, 6),
(36, 84, -1, 'hyutgu', '1', 2, 5),
(37, 84, 4, '', '1', 1, 4),
(38, 84, 6, '', '2', 3, 3),
(39, 84, 2, '', '2', 1, 2),
(40, 84, -1, 'ht gth rthtr', '2', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE IF NOT EXISTS `levels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Beginner', '2015-04-27 11:36:05', '2015-04-27 11:36:05'),
(2, 'Expert', '2015-04-27 11:32:54', '2015-04-27 11:32:54'),
(3, 'Intermediate', '2015-06-11 09:40:17', '2015-04-28 10:47:48');

-- --------------------------------------------------------

--
-- Table structure for table `member_qus`
--

CREATE TABLE IF NOT EXISTS `member_qus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `member_qus`
--

INSERT INTO `member_qus` (`id`, `category_id`, `question`, `answer`) VALUES
(1, 1, 'What Is Nysc?', 'We are guessing you’re new here, Welcome! NYSC stands for National Youth Service Corps. It was initiated on May 1973 as way to unite the people of this country following the civil war. It has since been repurposed as a means to allow graduates to help build our nation and become patriotic.'),
(2, 1, 'What if I lose my NYSC ID card?', 'Better start re-applying for next batch. Haha just kidding. Report to your state secretariat to get issued a new one, you may be told to pay a fine and expect the process to be long.'),
(3, 1, 'What happens If I’m caught Breaking rules', 'Depends. Punishment ranges from fines and extension of service to even police arrest depending on how bad you messed up. Save yourself stress and…...dont be wrong!'),
(4, 1, 'I need to travel abroad', 'We would recommend getting written permission from your state coordinator however, try letting your LGI (Local Government Inspector) know first…..hopefully you guys are pals.'),
(5, 2, 'Where do I register for NYSC', 'You must register online using the Government NYSC <a href="http://portal.nysc.org.ng/nysc1/">portal</a>. Be careful there are a lot of fake websites out there. We recommend you do it yourself. '),
(31, 2, 'How do I get my call up letter?', 'There are 2 ways:-\r\n<p><b>Online:</b> For a Fee you can get it online Log in to the NYSC Portal and follow the instructions. This option is preferred because it allows you to be identified with your fingerprint (in case you lose your call up letter)</p>\r\n<p><b>Pick up:</b> You can still pick up your call up letters from your schools. If you are foreign trained, you might be able to get it from your secretariat.</p>  \r\n'),
(29, 2, 'Can someone thumbprint for me?', 'Absolutely not! You must use your own fingers because officials will check it when you get to camp.'),
(30, 2, 'I haven''t registered and registration has closed.', 'You must register online using the Government NYSC  <a href="http://portal.nysc.org.ng/nysc1/">portal</a> . Be careful there are a lot of fake websites out there.'),
(8, 3, 'Is it safe to take my Smartphone to camp\r\n', 'Definately!! just dont leave it unattended. Camp can be pretty boring sometimes so you’ll need a quick fix of angry birds ® or Fruit Ninja ®… More importantly how else are you going to use CorperLife™!?!?!?!'),
(9, 3, 'I forgot to bring (insert item here) to camp\r\n', 'Where there’s Mami….there’s a way. You can honestly find everything you need at Mami Market. We know a guy who went with only his documents, atm card and a bucket and survived.. true story.'),
(10, 3, 'What Shouldn''t I bring to Camp?\r\n', 'Alcohol, Laptops, heavy duty hair equipment (e.g blower, flat-iron, dryer), Pressing Iron, weapons (obviously)'),
(11, 3, 'Can I “sleep-in” during morning parade?\r\n', 'CorperLife™ cannot endorse skipping parade as it is part of the experience. If you’re caught you might have water poured on you and/or your bed…. true story. A good option is joining a special group on camp like red cross or OBS and you might sit it out.'),
(12, 3, 'Camp food sucks.. what do I do\r\n', 'Two options….Go to Mami Market, you can find almost everything you want there. from cotton candy to pepper soup. Your second option is to call it quits and go collect Exeat!'),
(13, 3, 'What do I do when my “Kit don''t fit”', 'First of all, try to find another Corper With same issue and see if you can swap kits. If you can''t do this, there are tailors and Cobblers in Mami Market that can alter anything.'),
(14, 3, 'I’m pregnant! What happens now?', 'CONGRATULATIONS!! Hopefully you didn''t get pregnant in camp lol! Camp is no place for pregnant/nursing mothers, so you’ll probably get decamped within the first couple of days. Ask around and go to the office to collect an exeat.'),
(15, 3, 'I have lost my (insert item here)\r\n', 'Hopefully your (insert item here) isn’t valuable enough to have been stolen. There is a good chance that a good samaritan has picked up your (insert item here) and given it to OBS (Orientation Broadcasting service). This is why you must make you right your ID number on your things.'),
(16, 3, 'How do I clean my shoes?\r\n', 'If they get to dirt you can soak them bleach and then scrub out the dirt later. Please do yourself a favour, put away your state issued shoes and buy the white rubber shoes sold in the mami market. They are super easy to clean. The jungle boots can take a beating…..just scrub the hell out of it. Use polish on the soles if you care to look excessively clean.'),
(17, 3, 'I am truly feeling sick. what do I do?\r\n', 'Sorry to hear this! :(Head over to the clinic ASAP. It is staffed with a collaboration of Corpers who graduated from medical school and some professional medics. Treatment and medication are free. If you still aren’t feeling 100% you should consider grabbing an exeat so you can go recuperate at home. hope you feel better soon.'),
(18, 3, 'How do I leave camp?\r\n', 'First of all, are you sure you want to leave? No NYSC experience is complete without camp and you really don''t want to miss out on this opportunity to make new friends and grow your network. If you’re just not “feeling it” or have a legitimate reason for wanting to leave then by all means go home.You just go to the office and give them a reason. It is pretty easy to get an exeat, they almost hand those things out.'),
(19, 3, 'How do I “fix” my PPA?\r\n', 'Get a couple of companies that you know will guarantee you a position. (the job you’re going for MUST be related to your degree) Get an Introduction Letter from the company of you choice, saying that they have an opening would love to have you. There should be an office in your camp that you can submit the letter and hopefully get it approved.'),
(20, 4, 'I got Rejected from my PPA, what do I do?\r\n', 'Take the rejection letter to your local Government office. You might have to go out and find another PPA yourself. Hint….. You local government could be a good start, they usually give corpers ample time to engage in personal projects that can boost your career.'),
(21, 4, 'I got Accepted by my PPA, what do I do?\r\n', 'take the acceptance letter directly to your LG. Make sure you make photocopies of your posting and acceptance letter for both your records and your Lg. You should also carry the rest of the things listed on the Official CorperLife™ serving (PPA) Checklist.'),
(22, 4, 'Who Gives me money?\r\n', 'Corpers Get paid from two sources; the Federal government, and their PPA (salaree just kidding its Salary).'),
(23, 4, 'How do I get Paid?\r\n', 'Your allowee is deposited in your assigned bank. You typically find out which bank this is during camp and go there afterwards to register your account. Make sure your account number is easily accessible to you because you will need to write it down everytime you do clearance to get paid. Your Salary comes from you PPA. Check the HR or accounting office to find out where and when you get paid.'),
(24, 4, 'What do I wear, now that I’m serving?\r\n', 'When you start working at your PPA you can wear normal clothes (Mufti). However when ever you have business to take care of in you Local govt office (e.g clearance or CD) wear your NYSC kit i.e either white shoes or jungle boots, a white round neck shirt and khaki pants. The crested shirt, Khaki jacket and cap are optional.'),
(25, 4, 'I havent gotten My Allowee, what do I do?\r\n', 'Corpers don’t mess with Allowee. This could be caused by a number of issues like failure to do clearance and incorrect bank info written on clearance form. First of all check to see if other corpers with the same bank have gotten an alert. If they haven''t, let you LGI know and you can quickly diagnose and fix the problem. Do this as soon as you notice so that you don''t miss another one.'),
(26, 4, 'I need to travel out\r\n', 'Don''t just leave!! you will cause a lot of stress for yourself, tell your LGI (hopefully you followed our advice and became really good friends), they will best know how to handle the issue and save you stress and sometimes money. Make sure you plan ahead and don’t miss any important days.'),
(27, 5, 'What do I need to do?\r\n', 'Everything you need to know about Passing Out will be found in the CorperLife™ Guide.'),
(28, 5, 'Where is my POP ceremony\r\n', 'Wow, if you are really asking this then you are still an Otondo! Contact your LGi, a friend or post it on the forum and find out. Be responsible and don''t miss it!'),
(32, 2, 'What if I lost my passport or academic credentials', 'You have to get a police report from the country where you lost it, or ask really nicely from our local police You also have to get a sworn affidavit saying that you lost it You will also require documents that confirm your identity and show information that was in the lost document'),
(33, 2, 'What do I do after online registration', 'If you have successfully registered, you can just chill and for camp to start. All you information will be verified in camp so start getting ready using the  <a href="http://www.corperlife.com/checklist-guide">corperlife camp checklist</a> . '),
(34, 2, 'How do I check the status of my online Registration payment ', 'Go to the  <a href="http://portal.nysc.org.ng/nysc2/TransactionStatus">NYSC registration portal</a>  and insert you transaction ID. '),
(35, 2, 'What happens if I am Married', 'You will be posted to the same state where you spouse resides. You have to upload your marriage certificate and evidence of change of name. We also advise that you take documents that prove your spouse does indeed reside in the state you want to be posted to e.g utility bills.');

-- --------------------------------------------------------

--
-- Table structure for table `nysc`
--

CREATE TABLE IF NOT EXISTS `nysc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cv_id` int(11) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `ppa` varchar(100) NOT NULL,
  `cd` varchar(200) NOT NULL,
  `otherinfo` text NOT NULL,
  `priority` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `nysc`
--

INSERT INTO `nysc` (`id`, `cv_id`, `batch`, `year`, `ppa`, `cd`, `otherinfo`, `priority`, `created_at`, `updated_at`) VALUES
(1, 9, '0000-00-00', '0000-00-00', '9087890', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 11, '0000-00-00', '0000-00-00', 'ppasdas ', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 13, '0000-00-00', '0000-00-00', 'sadsad', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 12, '34342', '2013', 'cyusdgcud', ' gcsduc', 'dsjuchguk sdcusdhc', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 12, '2015', '2016', 'hcuihds ', 'djgsaud uwg', 'gsdyuw uidwiuydeiwd', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 12, '4231', '2013', 'shjbj', 'enknw', 'nkjne ijeoijejopdo jwo', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 68, 'jh22', '122322', 'cjfjied22', 'dhb uwd', 'bdujewhhdui hewidhwed', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 68, '1543', '124', 'gcdysgc', 'hvdui', 'huhc dshciodshc', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 78, '2012-2014', '2014', 'fyjger ug', ' re ew', 'b rejgre g7ti8eyr i8weyr w', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 82, 'A', '2014', 'asd', 'sadas', 'dasdsad', 1, '2015-05-19 17:21:01', '0000-00-00 00:00:00'),
(18, 82, 'B', 'e432', '324', '23423', '4234324', 2, '2015-05-19 17:21:01', '0000-00-00 00:00:00'),
(27, 81, 'asdas', 'dasd', 'asdas', '', 'd', 1, '2015-06-11 04:32:43', '0000-00-00 00:00:00'),
(25, 81, 'asd', 'asd', 'asda1', 'asda1', 'sdasd', 3, '2015-06-11 08:34:35', '0000-00-00 00:00:00'),
(28, 81, 'asd', '', 'asd', '', '', 2, '2015-06-11 04:32:43', '0000-00-00 00:00:00'),
(31, 83, 'Asds', 'asdas', 'asdasdasdasdasdsad', '', 'sadsdf sdf sdf&nbsp;', 1, '2015-06-13 11:17:25', '0000-00-00 00:00:00'),
(30, 83, '2014', '2014-2015', 'Aygdf Hfujie', 'Grfhu', '<span>Maecenas\r\nporttitorconguemassa. Fusceposuere, magna sedpulvinarultricies,\r\npuruslectusmalesuadalibero, sit ametcommodo magna erosquisurna.&nbsp;</span>', 2, '2015-06-13 11:17:25', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `qus_category`
--

CREATE TABLE IF NOT EXISTS `qus_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `qus_category`
--

INSERT INTO `qus_category` (`id`, `category`) VALUES
(1, ' General'),
(2, 'Registration'),
(3, ' Camp'),
(4, 'Serving'),
(5, 'Passing out');

-- --------------------------------------------------------

--
-- Table structure for table `religions`
--

CREATE TABLE IF NOT EXISTS `religions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `religion` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `religions`
--

INSERT INTO `religions` (`id`, `religion`) VALUES
(1, 'Christian'),
(2, 'Muslim'),
(3, 'None');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE IF NOT EXISTS `replies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `reply` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `user_id`, `topic_id`, `reply`, `created_at`, `updated_at`) VALUES
(11, 3, 15, 'jhdf uifuire', '2015-03-17 11:03:09', '2015-03-17 11:03:09'),
(12, 3, 15, 'jhgf rurt43ri8r 8iy84ory943', '2015-03-17 11:03:31', '2015-03-17 11:03:31'),
(13, 3, 15, 'gu igferf7erf8i g8r e3', '2015-03-17 11:16:26', '2015-03-17 11:16:26'),
(14, 3, 15, ' ureuih8iyre8 8yfeor89', '2015-03-17 11:17:47', '2015-03-17 11:17:47'),
(15, 3, 10, ' gygfre77 r', '2015-03-17 12:17:59', '2015-03-17 12:17:59'),
(16, 6, 3, 'asd asd asd', '2015-06-04 04:21:33', '2015-06-04 04:21:33'),
(17, 6, 3, 'asdasd asdas', '2015-06-04 04:21:47', '2015-06-04 04:21:47'),
(18, 6, 3, '1111', '2015-06-04 04:21:51', '2015-06-04 04:21:51'),
(19, 6, 10, 'sadasd', '2015-06-04 04:33:06', '2015-06-04 04:33:06'),
(20, 6, 15, 'asdasd asd', '2015-06-04 04:37:32', '2015-06-04 04:37:32'),
(21, 6, 16, 'asda sd asd', '2015-06-04 04:57:56', '2015-06-04 04:57:56');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE IF NOT EXISTS `sections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cv_id` int(11) NOT NULL,
  `section_name` varchar(200) NOT NULL,
  `type` int(1) NOT NULL,
  `content` text NOT NULL,
  `default` int(1) NOT NULL,
  `priority` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=536 ;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `cv_id`, `section_name`, `type`, `content`, `default`, `priority`, `updated_at`, `created_at`) VALUES
(1, 3, 'Work Experience', 1, '', 0, 4, '2015-01-29 07:48:33', '0000-00-00 00:00:00'),
(2, 3, 'Qualfications', 0, 'qualifi', 0, 1, '2015-01-29 07:48:34', '0000-00-00 00:00:00'),
(3, 3, 'Education', 2, '', 0, 2, '2015-01-29 07:48:33', '0000-00-00 00:00:00'),
(4, 3, 'Interests', 0, 'interests', 0, 3, '2015-01-29 07:48:34', '0000-00-00 00:00:00'),
(5, 3, 'References', 0, 'references', 0, 5, '2015-01-29 07:48:34', '0000-00-00 00:00:00'),
(6, 3, 'asdsad', 0, '878979', 0, 6, '2015-01-29 07:48:34', '2015-01-17 13:16:30'),
(7, 3, 'bbbbb', 0, '', 0, 7, '2015-01-29 07:48:34', '2015-01-17 13:19:58'),
(8, 3, 'cccc', 0, '', 0, 8, '2015-01-29 07:48:34', '2015-01-17 13:21:26'),
(9, 3, 'ddd', 0, '', 0, 9, '2015-01-29 07:48:34', '2015-01-17 13:21:47'),
(10, 3, 'arti', 0, '', 0, 10, '2015-01-29 07:48:34', '2015-01-17 13:27:18'),
(11, 3, 'vvv', 0, '', 0, 11, '2015-01-29 07:48:34', '2015-01-17 13:28:24'),
(12, 3, 'oopop', 0, 'hjgghjgj', 0, 12, '2015-01-29 07:48:34', '2015-01-17 13:31:22'),
(13, 3, 'rrr', 0, 'asdasd', 0, 13, '2015-01-29 07:48:34', '2015-01-17 13:34:23'),
(14, 5, 'Work Experience', 1, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 5, 'Qualfications', 0, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 5, 'Education', 2, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 5, 'Interests', 0, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 5, 'References', 0, '', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 6, 'Work Experience', 1, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 6, 'Qualfications', 0, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 6, 'Education', 2, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 6, 'Interests', 0, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 6, 'References', 0, '', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 7, 'Work Experience', 1, '', 0, 1, '2015-02-11 07:18:55', '0000-00-00 00:00:00'),
(25, 7, 'Qualfications', 0, '<ul><li>sad asdasd sadas</li><li>asdasdasdasd</li><li>asdasd</li></ul>', 0, 2, '2015-02-11 07:18:55', '0000-00-00 00:00:00'),
(26, 7, 'Education1', 2, '', 0, 3, '2015-02-11 07:18:55', '0000-00-00 00:00:00'),
(27, 7, 'Interests1', 0, 'dvcwebd &nbsp; <b><i><u>ewd wi bdiuewbfui dsuicbweiudcf</u></i></b>', 0, 4, '2015-02-11 07:18:55', '0000-00-00 00:00:00'),
(28, 7, 'References', 0, '', 0, 5, '2015-02-11 07:18:55', '0000-00-00 00:00:00'),
(29, 7, 'new section', 0, 'ehjfvejw', 0, 6, '2015-02-11 07:18:55', '2015-02-02 12:28:13'),
(30, 8, 'Work Experience', 1, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 8, 'Qualfications', 0, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 8, 'Education', 2, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 8, 'NYSC', 3, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 8, 'Interests', 0, '', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 8, 'References', 0, '', 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 9, 'Work Experience', 1, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 9, 'Qualfications', 0, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 9, 'Education', 2, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 9, 'NYSC', 3, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 9, 'Interests', 0, '', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 9, 'References', 0, '', 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 10, 'Work Experience', 1, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 10, 'Qualfications', 0, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 10, 'Education', 2, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 10, 'NYSC', 3, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 10, 'Interests', 0, '', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 10, 'References', 0, '', 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 11, 'Work Experience', 1, '', 0, 1, '2015-02-03 10:30:23', '0000-00-00 00:00:00'),
(49, 11, 'Qualfications', 0, 'sd asdas dsadsa', 0, 2, '2015-02-03 10:30:23', '0000-00-00 00:00:00'),
(50, 11, 'Education', 2, '', 0, 3, '2015-02-03 10:30:23', '0000-00-00 00:00:00'),
(51, 11, 'NYSC', 3, '', 0, 4, '2015-02-03 10:30:23', '0000-00-00 00:00:00'),
(52, 11, 'Interests', 0, '', 0, 5, '2015-02-03 10:30:23', '0000-00-00 00:00:00'),
(53, 11, 'References', 0, '', 0, 6, '2015-02-03 10:30:23', '0000-00-00 00:00:00'),
(54, 12, 'Work Experience', 1, '', 0, 1, '2015-04-28 11:19:48', '0000-00-00 00:00:00'),
(55, 12, 'Qualfications', 0, '<div>Design and Analysis of Algorithm, Object Oriented Programming Using C++, Visual Programming (VC++), System Simulation</div>', 0, 2, '2015-04-28 11:19:48', '0000-00-00 00:00:00'),
(56, 12, 'Education', 2, '', 0, 3, '2015-04-28 11:19:48', '0000-00-00 00:00:00'),
(57, 12, 'NYSC', 3, '', 0, 4, '2015-04-28 11:19:48', '0000-00-00 00:00:00'),
(58, 12, 'Interests', 0, '<div>Algorithms, Graph Algorithms, Randomized Algorithms, Bioinformatics, Data Structures, Object Oriented Technology, Computational Geometry, and Mathematics</div>', 0, 5, '2015-04-28 11:19:48', '0000-00-00 00:00:00'),
(59, 12, 'References', 0, '', 0, 6, '2015-04-28 11:19:48', '0000-00-00 00:00:00'),
(60, 13, 'Work Experience', 1, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 13, 'Qualfications', 0, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 13, 'Education', 2, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 13, 'NYSC', 3, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 13, 'Interests', 0, '', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 13, 'References', 0, '', 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 14, 'Work Experience', 1, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 14, 'Qualfications', 0, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 14, 'Education', 2, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 14, 'NYSC', 3, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 14, 'Interests', 0, '', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 14, 'References', 0, '', 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 15, 'Work Experience', 1, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 15, 'Qualfications', 0, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 15, 'Education', 2, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 15, 'NYSC', 3, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 15, 'Interests', 0, '', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 15, 'References', 0, '', 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 16, 'Work Experience', 1, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 16, 'Qualfications', 0, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 16, 'Education', 2, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 16, 'NYSC', 3, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 16, 'Interests', 0, '', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 16, 'References', 0, '', 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 17, 'Work Experience', 1, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 17, 'Qualfications', 0, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 17, 'Education', 2, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 17, 'NYSC', 3, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 17, 'Interests', 0, '', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 17, 'References', 0, '', 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 18, 'Work Experience', 1, '', 0, 1, '2015-02-05 10:32:20', '0000-00-00 00:00:00'),
(91, 18, 'Qualfications', 0, '', 0, 2, '2015-02-05 10:32:20', '0000-00-00 00:00:00'),
(92, 18, 'Education', 2, '', 0, 3, '2015-02-05 10:32:20', '0000-00-00 00:00:00'),
(93, 18, 'NYSC', 3, '', 0, 4, '2015-02-05 10:32:20', '0000-00-00 00:00:00'),
(94, 18, 'Interests', 0, '', 0, 5, '2015-02-05 10:32:20', '0000-00-00 00:00:00'),
(95, 18, 'References', 0, '', 0, 6, '2015-02-05 10:32:20', '0000-00-00 00:00:00'),
(96, 19, 'Work Experience', 1, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 19, 'Qualfications', 0, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 19, 'Education', 2, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 19, 'NYSC', 3, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 19, 'Interests', 0, '', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 19, 'References', 0, '', 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 20, 'Work Experience', 1, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 20, 'Qualfications', 0, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 20, 'Education', 2, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 20, 'NYSC', 3, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 20, 'Interests', 0, '', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 20, 'References', 0, '', 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 21, 'Work Experience', 1, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 21, 'Qualfications', 0, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 21, 'Education', 2, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 21, 'NYSC', 3, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 21, 'Interests', 0, '', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 21, 'References', 0, '', 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 22, 'Work Experience', 1, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 22, 'Qualfications', 0, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 22, 'Education', 2, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, 22, 'NYSC', 3, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 22, 'Interests', 0, '', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, 22, 'References', 0, '', 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 23, 'Work Experience', 1, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, 23, 'Qualfications', 0, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 23, 'Education', 2, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, 23, 'NYSC', 3, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, 23, 'Interests', 0, '', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, 23, 'References', 0, '', 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, 24, 'Work Experience', 1, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(127, 24, 'Qualfications', 0, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(128, 24, 'Education', 2, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(129, 24, 'NYSC', 3, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(130, 24, 'Interests', 0, '', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(131, 24, 'References', 0, '', 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(132, 25, 'Work Experience', 1, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(133, 25, 'Qualfications', 0, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(134, 25, 'Education', 2, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(135, 25, 'NYSC', 3, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(136, 25, 'Interests', 0, '', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(137, 25, 'References', 0, '', 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(138, 26, 'Work Experience', 1, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(139, 26, 'Qualfications', 0, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(140, 26, 'Education', 2, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(141, 26, 'NYSC', 3, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(142, 26, 'Interests', 0, '', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(143, 26, 'References', 0, '', 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(144, 27, 'Work Experience', 1, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(145, 27, 'Qualfications', 0, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(146, 27, 'Education', 2, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(147, 27, 'NYSC', 3, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(148, 27, 'Interests', 0, '', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(149, 27, 'References', 0, '', 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(150, 28, 'Work Experience', 1, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(151, 28, 'Qualfications', 0, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(152, 28, 'Education', 2, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(153, 28, 'NYSC', 3, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(154, 28, 'Interests', 0, '', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(155, 28, 'References', 0, '', 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(156, 29, 'Work Experience', 1, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(157, 29, 'Qualfications1', 0, '', 0, 2, '2015-02-07 12:20:33', '0000-00-00 00:00:00'),
(158, 29, 'Education1', 2, '', 0, 3, '2015-02-07 12:17:46', '0000-00-00 00:00:00'),
(159, 29, 'NYSC', 3, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(160, 29, 'Interests', 0, '', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(161, 29, 'References', 0, '', 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(162, 30, 'Work Experience', 1, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(163, 30, 'Qualfications', 0, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(164, 30, 'Education', 2, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(165, 30, 'NYSC', 3, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(166, 30, 'Interests', 0, '', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(167, 30, 'References', 0, '', 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(168, 31, 'Work Experience', 1, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(169, 31, 'Qualfications', 0, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(170, 31, 'Education', 2, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(171, 31, 'NYSC', 3, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(172, 31, 'Interests', 0, '', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(173, 31, 'References', 0, '', 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(174, 32, 'Work Experience', 1, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(175, 32, 'Qualfications', 0, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(176, 32, 'Education', 2, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(177, 32, 'NYSC', 3, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(178, 32, 'Interests', 0, '', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(179, 32, 'References', 0, '', 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(180, 33, 'Work Experience', 1, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(181, 33, 'Qualfications', 0, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(182, 33, 'Education', 2, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(183, 33, 'NYSC', 3, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(184, 33, 'Interests', 0, '', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(185, 33, 'References', 0, '', 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(186, 34, 'Work Experience', 1, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(187, 34, 'Qualfications', 0, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(188, 34, 'Education', 2, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(189, 34, 'NYSC', 3, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(190, 34, 'Interests', 0, '', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(191, 34, 'References', 0, '', 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(198, 35, 'Work Experience', 1, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(199, 35, 'Qualfications', 0, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(200, 35, 'Education', 2, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(201, 35, 'NYSC', 3, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(202, 35, 'Interests', 0, '', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(203, 35, 'References', 0, '', 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(204, 36, 'Work Experience', 1, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(205, 36, 'Qualfications', 0, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(206, 36, 'Education', 2, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(207, 36, 'NYSC', 3, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(208, 36, 'Interests', 0, '', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(209, 36, 'References', 0, '', 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(210, 7, 'section', 0, '', 0, 7, '2015-02-11 07:17:28', '2015-02-11 07:17:15'),
(211, 37, 'Work Experience', 1, '', 0, 1, '2015-02-11 07:39:05', '0000-00-00 00:00:00'),
(212, 37, 'Qualfications', 0, '', 0, 2, '2015-02-11 07:39:05', '0000-00-00 00:00:00'),
(213, 37, 'Education', 2, '', 0, 3, '2015-02-11 07:39:05', '0000-00-00 00:00:00'),
(214, 37, 'NYSC', 3, '', 0, 4, '2015-02-11 07:39:05', '0000-00-00 00:00:00'),
(215, 37, 'Interests', 0, '', 0, 5, '2015-02-11 07:39:05', '0000-00-00 00:00:00'),
(216, 37, 'References', 0, '', 0, 6, '2015-02-11 07:39:05', '0000-00-00 00:00:00'),
(217, 38, 'Work Experience', 1, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(218, 38, 'Qualfications', 0, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(219, 38, 'Education', 2, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(220, 38, 'NYSC', 3, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(221, 38, 'Interests', 0, '', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(222, 38, 'References', 0, '', 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(223, 39, 'Work Experience', 1, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(224, 39, 'Qualfications', 0, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(225, 39, 'Education', 2, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(226, 39, 'NYSC', 3, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(227, 39, 'Interests', 0, '', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(228, 39, 'References', 0, '', 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(229, 40, 'Work Experience', 1, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(230, 40, 'Qualfications', 0, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(231, 40, 'Education', 2, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(232, 40, 'NYSC', 3, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(233, 40, 'Interests', 0, '', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(234, 40, 'References', 0, '', 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(235, 41, 'Work Experience', 1, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(236, 41, 'Qualfications', 0, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(237, 41, 'Education', 2, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(238, 41, 'NYSC', 3, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(239, 41, 'Interests', 0, '', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(240, 41, 'References', 0, '', 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(241, 42, 'Work Experience', 1, '', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(242, 42, 'Qualfications', 0, '', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(243, 42, 'Education', 2, '', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(244, 42, 'NYSC', 3, '', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(245, 42, 'Interests', 0, '', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(246, 42, 'References', 0, '', 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(247, 43, 'Work Experience', 1, '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(248, 43, 'Qualfications', 0, '', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(249, 43, 'Education', 2, '', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(250, 43, 'NYSC', 3, '', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(251, 43, 'Interests', 0, '', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(252, 43, 'References', 0, '', 1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(253, 44, 'Work Experience', 1, '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(254, 44, 'Qualfications', 0, '', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(255, 44, 'Education', 2, '', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(256, 44, 'NYSC', 3, '', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(257, 44, 'Interests', 0, '', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(258, 44, 'References', 0, '', 1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(259, 45, 'Work Experience', 1, '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(260, 45, 'Qualfications', 0, '', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(261, 45, 'Education', 2, '', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(262, 45, 'NYSC', 3, '', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(263, 45, 'Interests', 0, '', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(264, 45, 'References', 0, '', 1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(265, 46, 'Work Experience', 1, '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(266, 46, 'Qualfications', 0, '', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(267, 46, 'Education', 2, '', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(268, 46, 'NYSC', 3, '', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(269, 46, 'Interests', 0, '', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(270, 46, 'References', 0, '', 1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(271, 47, 'Work Experience', 1, '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(272, 47, 'Qualfications', 0, '', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(273, 47, 'Education', 2, '', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(274, 47, 'NYSC', 3, '', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(275, 47, 'Interests', 0, '', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(276, 47, 'References', 0, '', 1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(277, 48, 'Work Experience', 1, '', 1, 1, '2015-02-14 11:12:08', '0000-00-00 00:00:00'),
(278, 48, 'Qualfications', 0, '', 1, 2, '2015-02-14 11:12:08', '0000-00-00 00:00:00'),
(279, 48, 'Education', 2, '', 1, 3, '2015-02-14 11:12:08', '0000-00-00 00:00:00'),
(280, 48, 'NYSC', 3, '', 1, 4, '2015-02-14 11:12:08', '0000-00-00 00:00:00'),
(281, 48, 'Interests', 0, '', 1, 5, '2015-02-14 11:12:08', '0000-00-00 00:00:00'),
(282, 48, 'References', 0, '', 1, 6, '2015-02-14 11:12:08', '0000-00-00 00:00:00'),
(283, 49, 'Work Experience', 1, '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(284, 49, 'Qualfications', 0, '', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(285, 49, 'Education', 2, '', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(286, 49, 'NYSC', 3, '', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(287, 49, 'Interests', 0, '', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(288, 49, 'References', 0, '', 1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(289, 50, 'Work Experience', 1, '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(290, 50, 'Qualfications', 0, '', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(291, 50, 'Education', 2, '', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(292, 50, 'NYSC', 3, '', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(293, 50, 'Interests', 0, '', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(294, 50, 'References', 0, '', 1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(295, 51, 'Work Experience', 1, '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(296, 51, 'Qualfications', 0, '', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(297, 51, 'Education', 2, '', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(298, 51, 'NYSC', 3, '', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(299, 51, 'Interests', 0, '', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(300, 51, 'References', 0, '', 1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(301, 52, 'Work Experience', 1, '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(302, 52, 'Qualfications', 0, '', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(303, 52, 'Education', 2, '', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(304, 52, 'NYSC', 3, '', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(305, 52, 'Interests', 0, '', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(306, 52, 'References', 0, '', 1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(307, 53, 'Work Experience', 1, '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(308, 53, 'Qualfications', 0, '', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(309, 53, 'Education', 2, '', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(310, 53, 'NYSC', 3, '', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(311, 53, 'Interests', 0, '', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(312, 53, 'References', 0, '', 1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(313, 54, 'Work Experience', 1, '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(314, 54, 'Qualfications', 0, '', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(315, 54, 'Education', 2, '', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(316, 54, 'NYSC', 3, '', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(317, 54, 'Interests', 0, '', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(318, 54, 'References', 0, '', 1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(319, 55, 'Work Experience', 1, '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(320, 55, 'Qualfications', 0, '', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(321, 55, 'Education', 2, '', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(322, 55, 'NYSC', 3, '', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(323, 55, 'Interests', 0, '', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(324, 55, 'References', 0, '', 1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(325, 56, 'Work Experience', 1, '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(326, 56, 'Qualfications', 0, '', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(327, 56, 'Education', 2, '', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(328, 56, 'NYSC', 3, '', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(329, 56, 'Interests', 0, '', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(330, 56, 'References', 0, '', 1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(331, 57, 'Work Experience', 1, '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(332, 57, 'Qualfications', 0, '', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(333, 57, 'Education', 2, '', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(334, 57, 'NYSC', 3, '', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(335, 57, 'Interests', 0, '', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(336, 57, 'References', 0, '', 1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(337, 58, 'Work Experience', 1, '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(338, 58, 'Qualfications', 0, '', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(339, 58, 'Education', 2, '', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(340, 58, 'NYSC', 3, '', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(341, 58, 'Interests', 0, '', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(342, 58, 'References', 0, '', 1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(343, 59, 'Work Experience', 1, '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(344, 59, 'Qualfications', 0, '', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(345, 59, 'Education', 2, '', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(346, 59, 'NYSC', 3, '', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(347, 59, 'Interests', 0, '', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(348, 59, 'References', 0, '', 1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(349, 60, 'Work Experience', 1, '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(350, 60, 'Qualfications', 0, '', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(351, 60, 'Education', 2, '', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(352, 60, 'NYSC', 3, '', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(353, 60, 'Interests', 0, '', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(354, 60, 'References', 0, '', 1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(355, 61, 'Work Experience', 1, '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(356, 61, 'Qualfications', 0, '', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(357, 61, 'Education', 2, '', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(358, 61, 'NYSC', 3, '', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(359, 61, 'Interests', 0, '', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(360, 61, 'References', 0, '', 1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(361, 62, 'Work Experience', 1, '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(362, 62, 'Qualfications', 0, '', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(363, 62, 'Education', 2, '', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(364, 62, 'NYSC', 3, '', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(365, 62, 'Interests', 0, '', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(366, 62, 'References', 0, '', 1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(367, 63, 'Work Experience', 1, '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(368, 63, 'Qualfications', 0, '', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(369, 63, 'Education', 2, '', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(370, 63, 'NYSC', 3, '', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(371, 63, 'Interests', 0, '', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(372, 63, 'References', 0, '', 1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(373, 64, 'Work Experience', 1, '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(374, 64, 'Qualfications', 0, '', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(375, 64, 'Education', 2, '', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(376, 64, 'NYSC', 3, '', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(377, 64, 'Interests', 0, '', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(378, 64, 'References', 0, '', 1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(379, 65, 'Work Experience', 1, '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(380, 65, 'Qualfications', 0, '', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(381, 65, 'Education', 2, '', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(382, 65, 'NYSC', 3, '', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(383, 65, 'Interests', 0, '', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(384, 65, 'References', 0, '', 1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(385, 66, 'Work Experience', 1, '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(386, 66, 'Qualfications', 0, '', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(387, 66, 'Education', 2, '', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(388, 66, 'NYSC', 3, '', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(389, 66, 'Interests', 0, '', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(390, 66, 'References', 0, '', 1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(391, 67, 'Work Experience', 1, '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(392, 67, 'Qualfications', 0, '', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(393, 67, 'Education', 2, '', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(394, 67, 'NYSC', 3, '', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(395, 67, 'Interests', 0, '', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(396, 67, 'References', 0, '', 1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(397, 68, 'Work Experience', 1, '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(398, 68, 'Qualfications', 0, '', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(399, 68, 'Education', 2, '', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(400, 68, 'NYSC', 3, '', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(401, 68, 'Interests', 0, '', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(402, 68, 'References', 0, '', 1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(403, 69, 'Work Experience', 1, '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(404, 69, 'Qualfications', 0, '', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(405, 69, 'Education', 2, '', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(406, 69, 'NYSC', 3, '', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(407, 69, 'Interests', 0, '', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(408, 69, 'References', 0, '', 1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(409, 70, 'Work Experience', 1, '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(410, 70, 'Qualfications', 0, '', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(411, 70, 'Education', 2, '', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(412, 70, 'NYSC', 3, '', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(413, 70, 'Interests', 0, '', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(414, 70, 'References', 0, '', 1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(415, 71, 'Work Experience', 1, '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(416, 71, 'Qualfications', 0, '', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(417, 71, 'Education', 2, '', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(418, 71, 'NYSC', 3, '', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(419, 71, 'Language', 4, '', 1, 5, '2015-03-21 12:00:50', '0000-00-00 00:00:00'),
(420, 71, 'Interests', 0, '', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(421, 71, 'References', 0, '', 1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(422, 72, 'Work Experience', 1, '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(423, 72, 'Qualfications', 0, '', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(424, 72, 'Education', 2, '', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(425, 72, 'NYSC', 3, '', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(426, 72, 'Language', 4, '', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(427, 72, 'profiles', 5, '', 1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(428, 72, 'Interests', 0, '', 1, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(429, 72, 'References', 0, '', 1, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(430, 73, 'Work Experience', 1, '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(431, 73, 'Qualfications', 0, '', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(432, 73, 'Education', 2, '', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(433, 73, 'NYSC', 3, '', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(434, 73, 'Language', 4, '', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(435, 73, 'profiles', 5, '', 1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(436, 73, 'Interests', 0, '', 1, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(437, 73, 'References', 0, '', 1, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(438, 74, 'Work Experience', 1, '', 1, 1, '2015-03-22 16:37:25', '0000-00-00 00:00:00'),
(439, 74, 'Qualfications', 0, 'm nsfuiehfoui', 1, 2, '2015-03-22 16:37:25', '0000-00-00 00:00:00'),
(440, 74, 'Education', 2, '', 1, 3, '2015-03-22 16:37:25', '0000-00-00 00:00:00'),
(441, 74, 'NYSC', 3, '', 1, 4, '2015-03-22 16:37:25', '0000-00-00 00:00:00'),
(442, 74, 'Language', 4, '', 1, 5, '2015-03-22 16:37:25', '0000-00-00 00:00:00'),
(443, 74, 'profiles', 5, '', 1, 6, '2015-03-22 16:37:25', '0000-00-00 00:00:00'),
(444, 74, 'Interests', 0, '', 1, 7, '2015-03-22 16:37:25', '0000-00-00 00:00:00'),
(445, 74, 'References', 0, '', 1, 8, '2015-03-22 16:37:25', '0000-00-00 00:00:00'),
(446, 75, 'Work Experience', 1, '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(447, 75, 'Qualfications', 0, '', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(448, 75, 'Education', 2, '', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(449, 75, 'NYSC', 3, '', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(450, 75, 'Language', 4, '', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(451, 75, 'profiles', 5, '', 1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(452, 75, 'Interests', 0, '', 1, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(453, 75, 'References', 0, '', 1, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(454, 76, 'Work Experience', 1, '', 1, 1, '2015-03-26 12:17:17', '0000-00-00 00:00:00'),
(455, 76, 'Qualfications', 0, '', 1, 2, '2015-03-26 12:17:17', '0000-00-00 00:00:00'),
(456, 76, 'Education', 2, '', 1, 3, '2015-03-26 12:17:17', '0000-00-00 00:00:00'),
(457, 76, 'NYSC', 3, '', 1, 4, '2015-03-26 12:17:17', '0000-00-00 00:00:00'),
(458, 76, 'Language', 4, '', 1, 5, '2015-03-26 12:17:17', '0000-00-00 00:00:00'),
(459, 76, 'profiles', 5, '', 1, 6, '2015-03-26 12:17:17', '0000-00-00 00:00:00'),
(460, 76, 'Interests', 0, '', 1, 7, '2015-03-26 12:17:17', '0000-00-00 00:00:00'),
(461, 76, 'References', 0, '', 1, 8, '2015-03-26 12:17:17', '0000-00-00 00:00:00'),
(462, 77, 'Work Experience', 1, '', 1, 3, '2015-03-31 07:05:40', '0000-00-00 00:00:00'),
(463, 77, 'Qualfications', 0, '', 1, 1, '2015-03-31 07:05:41', '0000-00-00 00:00:00'),
(464, 77, 'Education', 2, '', 1, 2, '2015-03-31 07:05:40', '0000-00-00 00:00:00'),
(465, 77, 'NYSC', 3, '', 1, 4, '2015-03-31 07:05:41', '0000-00-00 00:00:00'),
(466, 77, 'Language', 4, '', 1, 5, '2015-03-31 07:05:41', '0000-00-00 00:00:00'),
(467, 77, 'profiles', 5, '', 1, 6, '2015-03-31 07:05:41', '0000-00-00 00:00:00'),
(468, 77, 'Interests', 0, '', 1, 7, '2015-03-31 07:05:41', '0000-00-00 00:00:00'),
(469, 77, 'References', 0, '', 1, 8, '2015-03-31 07:05:41', '0000-00-00 00:00:00'),
(470, 78, 'Work Experience', 1, '', 1, 1, '2015-06-11 12:47:06', '0000-00-00 00:00:00'),
(471, 78, 'Qualfications', 0, '<b>fg retretrt uegruiwyir</b><br><ul><li>g ertrt45t 4</li><li>t retet</li><li>re ge</li></ul>', 1, 2, '2015-06-11 12:47:06', '0000-00-00 00:00:00'),
(472, 78, 'Education', 2, '', 1, 3, '2015-06-11 12:47:06', '0000-00-00 00:00:00'),
(473, 78, 'NYSC', 3, '', 1, 4, '2015-06-11 12:47:06', '0000-00-00 00:00:00'),
(474, 78, 'Language', 4, '', 1, 5, '2015-06-11 12:47:06', '0000-00-00 00:00:00'),
(475, 78, 'Profile Image', 5, '', 1, 6, '2015-06-11 12:47:06', '0000-00-00 00:00:00'),
(476, 78, 'Interests', 0, 'sdf werer nf iehrow<br>&nbsp;fireoi', 1, 7, '2015-06-11 12:47:06', '0000-00-00 00:00:00'),
(477, 78, 'References', 0, 'b fgewiurwieuyrwer y8iw3eyr8iwy', 1, 8, '2015-06-11 12:47:06', '0000-00-00 00:00:00'),
(479, 78, 'hgfhf', 0, 'f fyugtert7we wieuyiw<br><u>edg</u><i> ukwedi8</i>', 0, 9, '2015-06-11 12:47:06', '2015-04-28 10:18:43'),
(480, 78, 'jkiik', 0, 'd er4t 45t5t', 0, 10, '2015-06-11 12:47:06', '2015-04-28 11:03:28'),
(502, 81, 'Passport Photo', 5, '', 1, 7, '2015-06-11 09:45:38', '0000-00-00 00:00:00'),
(501, 81, 'Languages', 4, '', 1, 6, '2015-06-11 09:45:38', '0000-00-00 00:00:00'),
(500, 81, 'NYSC2', 3, '', 1, 5, '2015-06-11 09:45:38', '0000-00-00 00:00:00'),
(499, 81, 'Education', 2, '', 1, 4, '2015-06-11 09:45:38', '0000-00-00 00:00:00'),
(498, 81, 'Qualfications', 0, '&nbsp;sad asd asd', 1, 2, '2015-06-11 09:45:38', '0000-00-00 00:00:00'),
(497, 81, 'Work Experience3', 1, '', 1, 1, '2015-06-11 09:45:38', '0000-00-00 00:00:00'),
(508, 82, 'NYSC', 3, '', 1, 4, '2015-05-19 18:15:31', '0000-00-00 00:00:00'),
(507, 82, 'Education111', 2, '', 1, 3, '2015-05-19 18:15:31', '0000-00-00 00:00:00'),
(506, 82, 'Qualfications', 0, '', 1, 2, '2015-05-19 18:15:31', '0000-00-00 00:00:00'),
(505, 82, 'Work Experience', 1, '', 1, 1, '2015-05-19 18:15:31', '0000-00-00 00:00:00'),
(504, 81, 'References', 0, '&nbsp;c erew rewr', 1, 3, '2015-06-11 09:45:38', '0000-00-00 00:00:00'),
(503, 81, 'Interests', 0, '', 1, 8, '2015-06-11 09:45:38', '0000-00-00 00:00:00'),
(509, 82, 'Languages', 4, '', 1, 5, '2015-05-19 18:15:31', '0000-00-00 00:00:00'),
(510, 82, 'Passport Photo', 5, '', 1, 6, '2015-05-19 18:15:31', '0000-00-00 00:00:00'),
(511, 82, 'Interests', 0, 'sdfsdf sdf sd', 1, 7, '2015-05-19 18:15:31', '0000-00-00 00:00:00'),
(512, 82, 'References', 0, 'asd asd asd sad', 1, 8, '2015-05-19 18:15:31', '0000-00-00 00:00:00'),
(519, 83, 'Work Experience', 1, '', 1, 1, '2015-07-09 11:07:52', '0000-00-00 00:00:00'),
(520, 83, 'Qualfications', 0, 'Proficiency\r\nwith Mac and PC platforms, Microsoft Word, Excel, PowerPoint, Acrobat, HTML,\r\nWordpress, OmniGraffle, Facebook, Twitter.', 1, 2, '2015-07-09 11:07:52', '0000-00-00 00:00:00'),
(521, 83, 'Education', 2, '', 1, 3, '2015-07-09 11:07:52', '0000-00-00 00:00:00'),
(522, 83, 'NYSC', 3, '', 1, 4, '2015-07-09 11:07:52', '0000-00-00 00:00:00'),
(523, 83, 'Languages', 4, '', 1, 5, '2015-07-09 11:07:52', '0000-00-00 00:00:00'),
(524, 83, 'Passport Photo', 5, '', 1, 6, '2015-07-09 11:07:52', '0000-00-00 00:00:00'),
(525, 83, 'Interests', 0, 'Vivamus\r\na tellus. Pellentesque habitant morbitristiquesenectus et netus et malesuada\r\nfames ac turpisegestas. Proinpharetranonummypede. Mauris et orci.\r\nAeneanneclorem.', 1, 7, '2015-07-09 11:07:52', '0000-00-00 00:00:00'),
(526, 83, 'References', 0, 'Donec ut est in lectus\r\nconsequat consequat. Etiam eget dui. Aliquam erat volutpat. Sed at lorem in\r\nnunc porta tristique. Proin nec augue. Quisque aliquam tempor magna.\r\nPellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis\r\negestas.', 1, 8, '2015-07-09 11:07:52', '0000-00-00 00:00:00'),
(527, 83, 'section', 0, '&nbsp;Quisque aliquam tempor magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.&nbsp;', 0, 9, '2015-07-09 11:07:52', '2015-06-12 18:56:02'),
(528, 84, 'Work Experience', 1, '', 1, 1, '2015-07-09 11:21:09', '0000-00-00 00:00:00'),
(529, 84, 'Qualfications', 0, '', 1, 2, '2015-07-09 11:21:09', '0000-00-00 00:00:00'),
(530, 84, 'Education', 2, '', 1, 3, '2015-07-09 11:21:09', '0000-00-00 00:00:00'),
(531, 84, 'NYSC', 3, '', 1, 4, '2015-07-09 11:21:09', '0000-00-00 00:00:00'),
(532, 84, 'Languages', 4, '', 1, 5, '2015-07-09 11:21:09', '0000-00-00 00:00:00'),
(533, 84, 'Passport Photo', 5, '', 1, 6, '2015-07-09 11:21:09', '0000-00-00 00:00:00'),
(534, 84, 'Interests', 0, '', 1, 7, '2015-07-09 11:21:09', '0000-00-00 00:00:00'),
(535, 84, 'References', 0, '', 1, 8, '2015-07-09 11:21:09', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `state`) VALUES
(1, 'Anambra'),
(2, 'Enugu'),
(3, 'Akwa Ibom'),
(4, 'Adamawa'),
(5, 'Abia'),
(6, 'Bauchi'),
(7, 'Bayelsa'),
(8, 'Benue'),
(9, 'Borno'),
(10, 'Cross River'),
(11, 'Delta'),
(12, 'Ebonyi'),
(13, 'Edo'),
(14, 'Ekiti'),
(15, 'Gombe'),
(16, 'Imo'),
(17, 'Jigawa'),
(18, 'Kaduna'),
(19, 'Kano'),
(20, 'Katsina'),
(21, 'Kebbi'),
(22, 'Kogi'),
(23, 'Kwara'),
(24, 'Lagos'),
(25, 'Nasarawa'),
(26, 'Niger'),
(27, 'Ogun'),
(28, 'Ondo'),
(29, 'Osun'),
(30, 'Oyo'),
(31, 'Plateau'),
(32, 'Rivers'),
(33, 'Sokoto'),
(34, 'Taraba'),
(35, 'Yobe'),
(36, 'Zamfara'),
(37, 'FCT-Abuja');

-- --------------------------------------------------------

--
-- Table structure for table `terms_definitions`
--

CREATE TABLE IF NOT EXISTS `terms_definitions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `term` varchar(50) NOT NULL,
  `definition` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `terms_definitions`
--

INSERT INTO `terms_definitions` (`id`, `term`, `definition`) VALUES
(1, 'Allowee', 'Allowance paid every month from Government'),
(2, 'Book of Life', 'Its is a real, huge book signed in camp by all corpers.'),
(3, 'CD', 'Community Development by an individual, couple or group.'),
(4, 'CD card', 'A card you attach a passport pic to, that is signed by LGI after CD day is over.'),
(5, 'Clearance', 'Turning in a letter from your employer every month to get paid'),
(6, 'LGI', 'Local Government Inspector'),
(7, 'OBS', 'Orientation Broadcasting service (Camp announcement group)'),
(8, 'POP', '(Passing Out Parade) the end of your NYSC year.'),
(9, 'Platoon', 'In camp corpers are split into groups called platoons'),
(10, 'Posting Letter', 'This letter tells you where you have originally been posted.'),
(11, 'PPA', 'Place of Primary Assignment'),
(12, 'NYSC', 'National Youth Service Corps……..thats what your doing!'),
(13, 'Otondo', 'Friendly word for new Corper but some say it actually means Mumu'),
(14, 'SAED', 'Skills Acquisition and Entrepreneurship Development'),
(15, '"You are wrong"', 'Used in camp by soldiers if you''re in the wrong place or doing the wrong thing.');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `user_id`, `category_id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 'sadsad', '', '2015-01-31 10:59:37', '2015-01-31 10:59:37'),
(2, 0, 4, 'dewrewr', '', '2015-01-31 11:00:30', '2015-01-31 11:00:30'),
(3, 1, 5, 'This is a new topic', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type a', '2015-06-04 04:16:40', '2015-03-13 13:28:28'),
(4, 3, 4, 'gjyhcdht', '', '2015-01-31 11:07:58', '2015-01-31 11:07:58'),
(5, 3, 2, 'erfujeb', '', '2015-01-31 12:05:45', '2015-01-31 12:05:45'),
(6, 3, 3, 'sdbckuwebdck', '', '2015-02-12 12:55:04', '2015-02-12 12:55:04'),
(7, 3, 3, 'cjbsdjkc', '', '2015-02-13 12:18:33', '2015-02-13 12:18:33'),
(8, 3, 2, 'sujdbsakj', 'scdjaskb ckj,', '2015-02-13 12:42:58', '2015-02-13 12:42:58'),
(9, 3, 1, 'How do i REGISTER', 'Please hekp mkasdasdasd', '2015-02-13 12:55:15', '2015-02-13 12:55:15'),
(10, 3, 1, ' asdhashd asd asdhasd as d asdhuashd as dashduhasdh as d ashdashdha', 'sdsad', '2015-02-13 13:26:39', '2015-02-13 13:26:39'),
(11, 3, 4, 'fgvyufi', 'frdfugrg', '2015-02-14 04:26:20', '2015-02-14 04:26:20'),
(12, 3, 5, 'ghrth', 'fthyntr ytr4', '2015-02-14 06:21:33', '2015-02-14 06:21:33'),
(13, 3, 2, 't45t c54', '5t45 4', '2015-02-14 06:26:37', '2015-02-14 06:26:37'),
(14, 3, 2, 'cvfdv', 'fdb wytyw r 4', '2015-02-14 06:34:27', '2015-02-14 06:34:27'),
(15, 3, 3, ' ytfuy', 'b j hduidgs', '2015-03-16 09:19:36', '2015-03-16 09:19:36'),
(16, 6, 2, 'asdas', 'dasdasd', '2015-06-04 04:51:28', '2015-06-04 04:51:28'),
(17, 6, 1, 'asdsa', 'dsadas', '2015-06-04 04:58:13', '2015-06-04 04:58:13'),
(18, 6, 1, 'asdasdasd', 'asdasdasd', '2015-06-04 05:02:19', '2015-06-04 05:02:19'),
(19, 6, 1, 'asdasd', 'asdasd', '2015-06-04 05:03:20', '2015-06-04 05:03:20'),
(20, 6, 1, 'asd', 'asdsa', '2015-06-04 05:03:33', '2015-06-04 05:03:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `facebook_id` varchar(200) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `profilename` varchar(100) NOT NULL,
  `sex` int(1) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `website` varchar(200) NOT NULL,
  `serv_state` int(11) NOT NULL,
  `origin_state` int(11) NOT NULL,
  `state_code` int(11) NOT NULL,
  `lg` int(11) NOT NULL,
  `serv_year` varchar(100) NOT NULL,
  `batch` varchar(100) NOT NULL,
  `profile_pic` varchar(500) NOT NULL,
  `facebook_link` varchar(200) NOT NULL,
  `facebook_picture_link` varchar(200) NOT NULL,
  `remember_token` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `facebook_id`, `firstname`, `lastname`, `profilename`, `sex`, `email`, `phone`, `website`, `serv_state`, `origin_state`, `state_code`, `lg`, `serv_year`, `batch`, `profile_pic`, `facebook_link`, `facebook_picture_link`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'abcd@gmail.com', '$2y$10$DwTZctstV9d93gVDeNv2lOEyRVRIPbve88gp2oxd2KIA/LGYwoZOS', '0', 'ABCD', '', '', 0, '', '', '', 0, 0, 0, 0, '', '', '', '', '', 'fWDoBvBafvUtQNWiEyZTAjo6Dh81ZLqiLUznbICno4w73seUzgHDjqrytzdp', '2015-01-09 12:25:30', '2015-01-17 12:34:30'),
(2, 'abcd2@gmail.com', '$2y$10$cLaoWaXm9drxfvv.YWqu2.lufyrZbuHJmd27eHBs/yLqXxxHTGwx2', '0', '', '', '', 0, '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'abcd3@gmail.com', '$2y$10$WIPa3WNBd9tifAYqgceBYOzC6FPo5DMfBuim1B/SCvYWFTRNFu6.a', '0', 'vashistha1', 'aggarwal', 'vashi', 1, '', '', '', 2, 4, 235252, 2635, '', '', 'assets/avatars/20150213185735.jpeg', '', '', 'nUNHpBuwPxzTYRoO17T7JcOIgGk7DndxUrPN1r7N3ed5EFYqqZzjXSh0RaFB', '2015-06-05 09:20:22', '2015-03-11 13:01:09'),
(4, 'abcd4@gmail.com', '$2y$10$LaF2GLOsp4h4kdfZO6pmZe4TIHdR/zbJM8YA0u.UviIkM3iLrdbMK', '0', 'dhsagd', 'jhsdujas', '', 0, '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'abcd9@gmail.com', '$2y$10$Tc0.nU6itR.inQZhKOKmqu.L5fCOPM0IGYGuXTHxyQdv2diD.aJbe', '0', 'arti', 'chauhan', '', 0, '', '', '', 1, 1, 0, 0, '1', 'A', 'assets/avatars/20150611171501.jpeg', '', '', 'ZuLhGkobSb9LVVNsqjUzMmGmWjQni3fSfbnTmaxfhyrFnZ28D14jHVzQW8NR', '2015-07-02 13:10:37', '2015-07-02 13:10:37'),
(6, 'vishu.iitd@gmail.com', '$2y$10$k92R6uF7Y.xRuANfef9VjOEQ.Bojy/AmaIgTOr69gCYs/SHWfsy0y', '0', 'Vashistha', 'Aggarwal', '', 0, '', '', '', 0, 0, 0, 0, '', '', 'assets/avatars/20150131164354.jpeg', '', '', 'AHgXCjpJ71GajTK65a0zZSXBqzRsJZM82rfYpp3iSvdftrqPugIW5FJidx6B', '2015-06-11 06:03:31', '2015-06-11 06:03:31'),
(7, 'abcd90@gmail.com', '$2y$10$MenaGMzES3Ti.SRsOXuP4eM2Kmn0XKZv7dqrsNKHM8bpGGTAeQ6XC', '', 'arti', 'chauhan', '', 0, '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '2015-06-11 12:40:28', '0000-00-00 00:00:00'),
(8, 'abcd10@gmail.com', '$2y$10$ou0MUpxE8U0BElsG8rOGKOkb6.QutdXZkz4ZBaDn6HZdSz/KVoG/6', '', 'arti', 'chauhan', '', 0, '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '2015-06-11 12:41:00', '0000-00-00 00:00:00'),
(9, 'abcd50@gmail.com', '$2y$10$unsMQU4hEeaU/N5PwsquoOqOL6Jy3KSOsGUIB4WNdrVxRW3oOYPlW', '', 'ritu', 'jikjcir', '', 0, '', '', '', 0, 0, 0, 0, '2', 'C', '', '', '', 'S2ihaoavg4tSbZHlXe6R1BcEL6tkVO1MblVNLSjYDMQFoV53kMGyxjTnfmc2', '2015-07-02 12:57:05', '2015-07-02 12:57:05');

-- --------------------------------------------------------

--
-- Table structure for table `workexp`
--

CREATE TABLE IF NOT EXISTS `workexp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cv_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `location` varchar(200) NOT NULL,
  `startdate` varchar(20) NOT NULL,
  `enddate` varchar(20) NOT NULL,
  `otherinfo` varchar(100) NOT NULL,
  `priority` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `workexp`
--

INSERT INTO `workexp` (`id`, `cv_id`, `title`, `company`, `location`, `startdate`, `enddate`, `otherinfo`, `priority`) VALUES
(1, 1, 'dfdsfds', 'ihioo', '', '0000-00-00', '0000-00-00', 'sdfsdfdsf', 0),
(2, 1, 'software developer', 'Naija Go Social', '', '0000-00-00', '0000-00-00', 'sahdioasd jasidji asdasd asd asd', 0),
(3, 1, 'asdasd', 'asdas', '', '0000-00-00', '0000-00-00', '', 0),
(4, 1, '786768', '767868njsda', '', '0000-00-00', '0000-00-00', '', 0),
(5, 1, '6uhuiyi', 'yiuyi', '', '0000-00-00', '0000-00-00', '', 0),
(6, 1, 'asdas', 'iuoiuu', '', '0000-00-00', '0000-00-00', '', 0),
(7, 1, '7877', '897897', '', '0000-00-00', '0000-00-00', '', 0),
(8, 1, '989808', '80989080', '', '0000-00-00', '0000-00-00', '', 0),
(9, 1, 'jijijijoij', 'ooijo', '', '0000-00-00', '0000-00-00', '', 0),
(10, 1, 'HIUH', 'HJVJ', '', '0000-00-00', '0000-00-00', '', 0),
(11, 1, 'asd', 'asd', '', '0000-00-00', '0000-00-00', '', 0),
(12, 3, 'sadasd', 'jjo', '', '0000-00-00', '0000-00-00', '', 2),
(13, 3, 'assad', '9070', '', '0000-00-00', '0000-00-00', '', 3),
(14, 3, 'jdsfbsdk', 'kljslkcnsa', '', '0000-00-00', '0000-00-00', '', 1),
(15, 7, 'engg', 'naija go social', 'haridwar', '0000-00-00', '0000-00-00', 'ioio', 2),
(16, 9, 'iuiouo', 'uoiuoiuio', 'iuiouio', '0000-00-00', '0000-00-00', '', 0),
(17, 11, 'bdcjk', 'ierheio', 'csmd', '0001-02-01', '0002-12-03', 'vjh fdvyugvd', 1),
(18, 11, 'rfgvjk', 'dfjkjrfvgvg', 'erfkj', '0001-02-01', '0000-00-00', 'cdjbvkjs', 0),
(19, 11, 'soft deve', 'naija', 'haridwar', '0000-00-00', '0000-00-00', 'dcvfdysgyu edfcuwecie\r\ndewdguiwed\r\njdcbjdecdec', 0),
(20, 11, 'sdcsyh', 'ygysjad', 'sfsegjfuc', '0000-00-00', '0000-00-00', 'dfysugdcfuihs\r\nsdckjhsdkjc\r\nckjdbsdnc sdjbckjsd\r\ndnsklncklsdn c sdkicilds', 0),
(22, 19, 'aug', 'uisn cjsd', 'sdk,k,c', '2-2-1122', '2-1-2222', 'dfkih efhio\r\newkd', 0),
(23, 7, 'asdhuikh11', 'huikhiu11', 'uihuihuikhik11', 'hihuik11', 'huikh11', '<ul><li>juhscsadsadas</li><li>asd</li><li>as</li><li>d</li><li>asd</li><li>asd</li></ul>', 1),
(24, 32, 'ijiouou', 'uoiuoiuio', 'uoiuouoi', 'uoiuoiu', 'uoiuo', '', 0),
(25, 33, 'jhgjyg', 'gfhfhj', 'frhryr', '', '', '', 0),
(29, 12, 'Associate Consultant', 'Mckinsey & Co', 'Mumbai', ' 24 Jul 2011', '12 Sep 2013', '<ul><li>Worked for a pharmaceutical manufacturing company to figure out its long term strategy in ex', 3),
(30, 12, 'Senior Executive', 'Bharat Heavy Electricals Limited', 'Mumbai', '27 July 2009', 'Present', '<ul><li>as dasd asdasd asd asdj ashd uhasuidhuiasu hdi hasiud ashd asd</li><li>asd'' asdsa das das ds', 2),
(31, 12, 'yttu', 'rtyr', 'rerte', 'ytry', 'trty', '', 1),
(32, 78, 'software', 'n g s', 'haridwar', '12-12-12', '2-21-21', 'f guyerof', 1),
(33, 82, 'xcv', 'dfgd', 'fg', 'fgdfg', 'dfgfdg', 'dfgdfgfd', 1),
(43, 81, 'asd11', 'asd', '54545', 'asd', 'asdasd', 'asdasd', 1),
(44, 81, 'ytrty', 'yiyi', 'jklkh', '', '', '', 2),
(45, 83, 'software developer', 'naijagosocial', 'haridwar', '12-2-2015', '5-7-2044', 'Fjigh &nbsp;hrihr ujr o9furef<b> jfoiruf gfuri</b>', 2),
(46, 83, 'Hardware Engineer', 'Naija Go Social', 'Nigeria', '10-20-30', '30-40-50', '<ul><li>sdsad asdasd nsakjdnjl asdha sd jnaskjd jansjdnkajsnd as das</li><li>a sd</li><li>as&nbsp;</', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
