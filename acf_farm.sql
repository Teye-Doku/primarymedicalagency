-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 20, 2020 at 12:04 PM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acf_farm`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_services`
--

CREATE TABLE `about_services` (
  `id` int(11) NOT NULL,
  `service_name` varchar(200) NOT NULL,
  `title` text NOT NULL,
  `title_description` text NOT NULL,
  `image` varchar(120) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_services`
--

INSERT INTO `about_services` (`id`, `service_name`, `title`, `title_description`, `image`) VALUES
(34, 'Web Design', 'Node Js', '<p>Assistance Business Service Web Design&reg; mission is to provide professional and paraprofessional services to clients in their homes, assisting them to achieve the highest level of potential in their day-to-day self-care activities.</p>\r\n', 'assets/img/service/027ab8d7dc7cdb4ab9c09c0a057af2e7.png'),
(35, 'Consulting', 'Education', 'Assistance Business Service ConsultingÂ® mission is to provide professional and paraprofessional services to clients in their homes, assisting them to achieve the highest level of potential in their day-to-day self-care activities.\r\n', 'assets/img/service/a7acd0f9b62bbe5a84a4dc835bd3eb24.jpg'),
(36, 'Accounting', 'Financial Accounting', 'Assistance Business Service ConsultingÂ® mission is to provide professional and paraprofessional services to clients in their homes, assisting them to achieve the highest level of potential in their day-to-day self-care activities.\r\n', 'assets/img/service/96591554be96caafb8169147d4c15ece.jpg'),
(33, 'Web Design', 'Angular Js', 'Assistance Business Service Web DesignÂ® mission is to provide professional and paraprofessional services to clients in their homes, assisting them to achieve the highest level of potential in their day-to-day self-care activities.\r\n', 'assets/img/service/3e64f41e70fe36d18aac493055712778.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `mission` text NOT NULL,
  `vission` text NOT NULL,
  `startegy` text NOT NULL,
  `who_we_are` text NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `mission`, `vission`, `startegy`, `who_we_are`, `add_date`) VALUES
(4, 'Assistance Business Service ConsultingÂ® mission is to provide professional and paraprofessional services to clients in their homes, assisting them to achieve the highest level of potential in their day-to-day self-care activities.', ' NMHHA.Â® are committed to providing high quality, multidisciplinary care by professionals who recognize the need for comprehensive assessment of needs from both the client and professional\'s point of view.', 'none', 'none', '2020-09-25 10:31:04');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `company_name` text NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `owner_lastName` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `pin_code` varchar(10) NOT NULL,
  `about` text NOT NULL,
  `image` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `company_name`, `owner_name`, `owner_lastName`, `address`, `city`, `country`, `pin_code`, `about`, `image`) VALUES
(1, 'admin@admin.com', 'admin1234', 'ACTF', 'ACTF', 'FIRM', '2480 Windy Hill Rd., SE Suite 206 Marietta, Georgia 30067', 'Dehi', 'india', '122002', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum tempus tincidunt. Nulla faucibus, erat quis elementum pretium, urna orci tincidunt lorem, vel condimentum diam nisi vitae arcu. Nullam gravida porttitor purus, vitae euismod turpis scelerisque a. Phasellus sit amet eros vel erat rutrum facilisis eget quis massa. Morbi feugiat non diam nec hendrerit. Aenean eget varius dolor. Phasellus ac quam consectetur, pretium lorem nec, porttitor eros. Maecenas lobortis nulla nec scelerisque sollicitudin. Quisque orci eros, feugiat sed enim ut, volutpat facilisis mi.', '../assets/img/profilebaeec3ed309910587a0703fb5fbcf407.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `apply_service`
--

CREATE TABLE `apply_service` (
  `id` int(11) NOT NULL,
  `service_name` varchar(200) NOT NULL,
  `service_data` text NOT NULL,
  `user_id` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply_service`
--

INSERT INTO `apply_service` (`id`, `service_name`, `service_data`, `user_id`) VALUES
(25, '20', 'a:5:{s:4:\"whoi\";s:8:\"Personal\";s:4:\"howo\";s:7:\"One-off\";s:4:\"what\";s:13:\"Â£25K - Â£50K\";s:4:\"isth\";s:30:\"Business is not VAT registered\";s:3:\"pin\";s:6:\"713427\";}', '22'),
(26, '21', 'a:6:{s:4:\"what\";s:19:\"Dealing with a loss\";s:4:\"isth\";s:28:\"No, this is for someone else\";s:4:\"have\";s:5:\"Other\";s:4:\"howw\";s:38:\"I would prefer remote - Video call etc\";s:4:\"whic\";s:37:\"Face to face - professional visits me\";s:3:\"pin\";s:3:\"123\";}', '0'),
(27, '20', 'a:5:{s:4:\"whoi\";s:8:\"Personal\";s:4:\"howo\";s:5:\"Other\";s:4:\"what\";s:5:\"Other\";s:4:\"isth\";s:24:\"N/A - Not for a business\";s:3:\"pin\";s:6:\"713205\";}', '0');

-- --------------------------------------------------------

--
-- Table structure for table `appoint_medical`
--

CREATE TABLE `appoint_medical` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `comments` text NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appoint_medical`
--

INSERT INTO `appoint_medical` (`id`, `fname`, `lname`, `email`, `phone`, `comments`, `add_date`) VALUES
(2, 'Anshuman', 'Singjh', 'kanshuman55@gmail.com', '1234567890', 'Test', '2020-10-19 18:55:56');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `category` varchar(200) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(120) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `category`, `title`, `description`, `image`, `add_date`) VALUES
(6, 'Tips', 'New Education Policy And Need Of Career Counsellor', '<p>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;The Union Cabinet approved the New Education Policy 2020 on 29th July. Several changes have been sought for. India is going to become a global leader in the field of science, technology and education. The vision of NEP 2020 is to transform the Indian society into a knowledge society by providing high quality education. The 10+2 system is going to be replaced by 5+3+3+4 system. Several vocational courses will be added and coding will be started right from class 6th.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Among all these changes , the most interesting addition is flexibility in subject choice. Before this CBSE policy was quite rigid. Till 10th std there is absolutely no scope for subject selection. In 11th-12th there is little scope with solid inelastic boundary. There is a clear demarcation of Arts, Science, Commerce and Humanities. With the implementation of the New Education Policy 2020, this boundary will become blur. No rigid separation between academic stream, vocational stream and extracurricular activities. However there is no further intimation from Government how it will work. Its details are &nbsp;awaited.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; In this scenario when students are allowed to take the subjects of their choice ,choosing the right subject which lead to fulfil their career goal is very important. The role of career counsellor is very eminent in choosing the right combination which in future can be align with the career needs. Career counsellor undertakes a psychometric test which assess the personality.interest,skill and ability ,career motivators and learning style of a student. The 5-dimentional approach leads to top career path which eventually helpful for the students to choose the subjects.</p>\r\n', 'assets/img/blog/ffbf02a16adf119cf6d5bab392c4b6af.png', '2020-09-21 08:40:09'),
(9, 'Design', 'test blog', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><img alt=\"\" src=\"https://witexplore.com/Admin/assets/img/blog/647311888.jpg\" style=\"height:186px; width:400px\" /></p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><img alt=\"\" src=\"https://witexplore.com/Admin/assets/img/blog/535805099.jpg\" style=\"height:156px; width:400px\" /></p>\r\n', 'assets/img/blog/f351c538887802d52f5ce560933ddb9d.jpg', '2020-09-21 08:36:45'),
(10, 'Tips', 'Electrical Management ', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p><img alt=\"\" src=\"https://witexplore.com/Admin/assets/img/blog/1133816156.jpg\" style=\"height:156px; width:400px\" /></p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', 'assets/img/blog/5343e8a2953c796802df1de19a5ac141.jpg', '2020-09-21 08:39:11');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `id` int(11) NOT NULL,
  `category` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id`, `category`, `add_date`) VALUES
(3, 'Design', '2020-09-21 08:32:28'),
(4, 'Tips', '2020-09-21 08:32:35'),
(5, 'Career', '2020-09-21 08:32:56');

-- --------------------------------------------------------

--
-- Table structure for table `clientlogo_style`
--

CREATE TABLE `clientlogo_style` (
  `id` int(11) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientlogo_style`
--

INSERT INTO `clientlogo_style` (`id`, `type`) VALUES
(1, 'none');

-- --------------------------------------------------------

--
-- Table structure for table `evalution_consult`
--

CREATE TABLE `evalution_consult` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `zip` varchar(20) NOT NULL,
  `contacted` varchar(120) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `best_time_to_call` varchar(120) NOT NULL,
  `preferred_Date` date NOT NULL,
  `preferred _time` time NOT NULL,
  `office_description` text NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evalution_consult`
--

INSERT INTO `evalution_consult` (`id`, `name`, `address`, `city`, `state`, `zip`, `contacted`, `email`, `fax`, `phone`, `best_time_to_call`, `preferred_Date`, `preferred _time`, `office_description`, `add_date`) VALUES
(7, 'Kumar', 'dl', 'dl', 'Alabama', '12345678', 'Phone', 'd@gmail.com', '1212BD', '1234567890', 'Morning at Work', '2020-10-13', '03:08:00', 'Test type', '2020-10-19 19:38:06');

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE `gallary` (
  `id` int(11) NOT NULL,
  `title` varchar(120) NOT NULL,
  `image` varchar(120) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`id`, `title`, `image`, `add_date`) VALUES
(2, 'INVEST ADVICES', 'assets/img/gallary/f3ccdd27d2000e3f9255a7e3e2c48800.jpg', '2020-08-18 19:15:52'),
(3, 'SIMPLE SOLUTIONS', 'assets/img/gallary/156005c5baf40ff51a327f1c34f2975b.jpg', '2020-08-18 19:16:58'),
(4, 'FINANCE CONSULTING', 'assets/img/gallary/799bad5a3b514f096e69bbc4a7896cd9.jpg', '2020-08-18 19:18:08'),
(5, 'FINANCE SOLUTION', 'assets/img/gallary/18e2999891374a475d0687ca9f989d83.jpg', '2020-08-18 19:19:11'),
(6, 'STOCK MARKETING UPDATE', 'assets/img/gallary/d0096ec6c83575373e3a21d129ff8fef.jpg', '2020-08-18 19:20:05'),
(7, 'SIMPLE SOLUTIONS', 'assets/img/gallary/032b2cc936860b03048302d991c3498f.jpg', '2020-08-18 19:21:06');

-- --------------------------------------------------------

--
-- Table structure for table `hr_staffing`
--

CREATE TABLE `hr_staffing` (
  `id` int(11) NOT NULL,
  `firstName` varchar(120) NOT NULL,
  `lastName` varchar(120) NOT NULL,
  `eamil` varchar(50) NOT NULL,
  `phoneNumber` varchar(30) NOT NULL,
  `dateBirth` date NOT NULL,
  `AddressOne` text NOT NULL,
  `AddressTne` text NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(40) NOT NULL,
  `zip` varchar(15) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `Interested` varchar(120) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `contactyou` varchar(120) NOT NULL,
  `findus` varchar(200) NOT NULL,
  `Comments` text NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hr_staffing`
--

INSERT INTO `hr_staffing` (`id`, `firstName`, `lastName`, `eamil`, `phoneNumber`, `dateBirth`, `AddressOne`, `AddressTne`, `City`, `State`, `zip`, `Country`, `Interested`, `Gender`, `contactyou`, `findus`, `Comments`, `add_date`) VALUES
(3, 'Test', 'tt', 'a@gmail.com', '123131313', '2020-10-14', 'tests', 't', 't', 'Delaware', '12345', 'Anguilla', 'Specialized Theraphy', 'Male', 'Email', 'Word of Mouth', 'sd', '2020-10-19 19:02:51');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `type` varchar(60) NOT NULL,
  `image` varchar(120) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `type`, `image`) VALUES
(1, 'service', '../assets/img/image/f34ba8a4ac08ae90df8c4159ce987628.jpg'),
(2, 'login', '../assets/img/image/48cfcdcc65c267ffdd5a5c455582997d.jpg'),
(6, 'clientlogo', '../assets/img/image/db6cae715f63cecdc9f81dc1a8fb993a.png'),
(5, 'clientlogo', '../assets/img/image/aab6beafc757ae03a8f012afe065698a.png'),
(7, 'clientlogo', '../assets/img/image/872afd19191f72c433050d994e15a2ef.png'),
(8, 'clientlogo', '../assets/img/image/1b4f22689e15d7ed4ef3e49442b45bb6.png'),
(9, 'clientlogo', '../assets/img/image/a027850209fa5fa5c1f53e44b3895cf6.png'),
(10, 'clientlogo', '../assets/img/image/906b4c2d4fa09ab5a6687ddbdd7e1713.png');

-- --------------------------------------------------------

--
-- Table structure for table `labasst_schedule_request`
--

CREATE TABLE `labasst_schedule_request` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `services_for` varchar(120) NOT NULL,
  `we_need_help_because` varchar(120) NOT NULL,
  `we_need_help` varchar(120) NOT NULL,
  `we_need_this` varchar(120) NOT NULL,
  `require_help` varchar(120) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labasst_schedule_request`
--

INSERT INTO `labasst_schedule_request` (`id`, `name`, `email`, `services_for`, `we_need_help_because`, `we_need_help`, `we_need_this`, `require_help`, `add_date`) VALUES
(7, 'Kumar', 'kummarcool6@gmail.com', 'Me', 'Chronically Ill', 'In the Morning', '1-2 days a week', 'Meal preparation', '2020-10-19 19:45:13');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `url` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `name`, `url`) VALUES
(14, 'AMERICAN ASSOCIATION OF NEUROSCIENCE NURSES (AANN)', 'http://aann.org/'),
(13, 'AMERICAN ASSOCIATION OF LEGAL NURSE CONSULTANTS (AALNC)', 'http://www.aalnc.org/'),
(12, 'AMERICAN ASSOCIATION OF CRITICAL-CARE NURSES (AACN)', 'https://www.aacn.org/'),
(9, 'ACADEMY OF MEDICAL-SURGICAL NURSES (AMSN)', 'https://www.amsn.org/'),
(10, 'AMERICAN ACADEMY OF AMBULATORY CARE NURSING (AAACN)', 'https://www.aaacn.org/'),
(11, 'AMERICAN ACADEMY OF NURSE PRACTITIONERS (AANP)', 'https://www.aanp.org/'),
(15, 'AMERICAN ASSOCIATION OF NURSE ANESTHETISTS (AANA)', 'https://www.aana.com/'),
(16, 'AMERICAN ASSOCIATION OF NURSE ASSESSMENT COORDINATORS (AANAC)', 'https://www.aanac.org/'),
(17, 'AMERICAN ASSOCIATION OF SPINAL CORD INJURY NURSES (AASCIN)', 'http://www.aascin.org/'),
(18, 'AMERICAN COLLEGE OF NURSE PRACTITIONERS (ACNP)', 'https://acnp.org/'),
(19, 'AMERICAN HEART ASSOCIATION, COUNCIL ON CARDIOVASCULAR NURSING (CVN)', 'https://www.heart.org/'),
(20, 'AMERICAN HOLISTIC NURSES ASSOCIATION (AHNA)', 'https://www.ahna.org/'),
(21, 'AMERICAN NEPHROLOGY NURSESâ€™ ASSOCIATION (ANNA)', 'https://www.annanurse.org/'),
(22, 'AMERICAN ORGANIZATION OF NURSE EXECUTIVES (AONE)', 'https://www.aonl.org/'),
(23, 'AMERICAN PSYCHIATRIC NURSES ASSOCIATION (APNA)', 'https://www.apna.org/i4a/pages/index.cfm?pageid=1'),
(24, 'AMERICAN RADIOLOGICAL NURSES ASSOCIATION (ARNA)', 'https://www.omicsonline.org/societies/american-radiological-nurses-association-arna/'),
(25, 'AMERICAN SOCIETY FOR PAIN MANAGEMENT NURSING (ASPMN)', 'http://www.aspmn.org/Pages/default.aspx'),
(26, 'AMERICAN SOCIETY OF OPHTHALMIC REGISTERED NURSES (ASORN)', 'https://asorn.org/'),
(27, 'AMERICAN SOCIETY OF OPHTHALMIC REGISTERED NURSES (ASORN)', 'https://www.aspan.org/'),
(28, 'AMERICAN SOCIETY OF PERIANESTHESIA NURSES (ASPAN)', 'https://www.aspan.org/'),
(29, 'AMERICAN THORACIC SOCIETY NURSING ASSEMBLY (ATS)', 'https://www.thoracic.org/members/assemblies/assemblies/nur/'),
(30, 'ASIAN AMERICAN/PACIFIC ISLANDER NURSES ASSOCIATION, INC. (AAPINA)', 'https://aapina.org/'),
(31, 'ASSOCIATION OF NURSES IN AIDS CARE (ANAC)', 'https://www.nursesinaidscare.org/i4a/pages/index.cfm?pageid=4693&pageid=1'),
(32, 'ASSOCIATION OF PERIOPERATIVE REGISTERED NURSES (AORN)', 'https://www.aorn.org/'),
(33, 'ASSOCIATION OF WOMENâ€™S HEALTH, OBSTETRIC & NEONATAL NURSES (AWHONN)', 'https://awhonn.org/'),
(34, 'DERMATOLOGY NURSESâ€™ ASSOCIATION (DNA)', 'https://www.dnanurse.org/'),
(35, 'EMERGENCY NURSES ASSOCIATION (ENA)', 'https://www.ena.org/'),
(36, 'HEALTH MINISTRIES ASSOCIATION (HMA)', 'https://hmassoc.org/'),
(37, 'HOSPICE AND PALLIATIVE NURSES ASSOCIATION (HPNA)', 'https://advancingexpertcare.org/'),
(38, 'INFUSION NURSES SOCIETY (INS)', 'https://www.ins1.org/default.aspx'),
(39, 'NATIONAL ALASKA NATIVE AMERICAN INDIAN NURSES ASSOCIATION (NANAINA)', 'http://www.nanainanurses.com/'),
(40, 'NATIONAL ASSOCIATION OF CLINICAL NURSE SPECIALISTS (NACNS)', 'https://nacns.org/'),
(41, 'NATIONAL ASSOCIATION DIRECTORS OF NURSING ADMINISTRATION/LONG TERM CARE (NADONA/LTC)', 'https://www.nadona.org/'),
(42, 'NATIONAL ASSOCIATION OF HISPANIC NURSES (NAHN)', 'http://www.nahnnet.org/'),
(43, 'NATIONAL ASSOCIATION OF NURSE MASSAGE THERAPISTS (NANMT)', 'http://www.nanmt.org/'),
(44, 'NATIONAL ASSOCIATION OF ORTHOPAEDIC NURSES (NAON)', 'http://www.orthonurse.org/'),
(45, 'NATIONAL ASSOCIATION OF PEDIATRIC NURSE PRACTITIONERS (NAPNAP)', 'https://www.napnap.org/'),
(46, 'NATIONAL BLACK NURSES ASSOCIATION (NBNA)', 'https://www.nbna.org/'),
(47, 'NATIONAL NURSING STAFF DEVELOPMENT ORGANIZATION (NNSDO)', 'https://www.anpd.org/'),
(48, 'NATIONAL ORGANIZATION OF NURSE PRACTITIONER FACULTIES (NONPF)', 'https://www.nonpf.org/'),
(49, 'NATIONAL STUDENT NURSESâ€™ ASSOCIATION (NSNA)', 'https://www.nsna.org/'),
(50, 'NURSE HEALERS â€“ PROFESSIONAL ASSOCIATES INTERNATIONAL, INC. (NH-PAI)', 'http://geronurse-online.org/MainMenuCategory/PartnerOrganizations/NHPAI.aspx'),
(51, 'ONCOLOGY NURSING SOCIETY (ONS)', 'https://www.ons.org/'),
(52, 'PHILIPPINE NURSES ASSOCIATION OF AMERICA (PNAA)', 'https://mypnaa.wildapricot.org/'),
(53, 'PREVENTIVE CARDIOVASCULAR NURSES ASSOCIATION (PCNA)', 'https://pcna.net/'),
(54, 'SOCIETY FOR VASCULAR NURSING (SVN)', 'https://svnnet.org/'),
(55, 'SOCIETY OF OTORHINOLARYNGOLOGY AND HEAD-NECK NURSES, INC. (SOHN)', 'https://sohnnurse.com/'),
(56, 'SOCIETY OF PEDIATRIC NURSES (SPN)', 'http://www.pedsnurses.org/'),
(57, 'SOCIETY OF UROLOGIC NURSES AND ASSOCIATES (SUNA)', 'https://www.suna.org/'),
(58, 'WOUND, OSTOMY AND CONTINENCE NURSES SOCIETY (WOCN)', 'https://www.wocn.org/'),
(59, 'GERIATRIC ASSOCIATIONS', 'https://www.americangeriatrics.org/'),
(60, 'THE AMERICAN GERIATRICS SOCIETY', 'https://www.americangeriatrics.org/'),
(61, 'GERIATRICS BOARD EXAM INFORMATION', 'https://www.abim.org/certification/exam-information/geriatric-medicine/exam-dates.aspx'),
(62, 'GERIATRICS NURSING EXAM INFORMATION', 'https://www.test-questions.com/gerontological-nursing-01.php'),
(63, 'COURSES AND RESOURCES FOR PREPARING FOR GERIATRICS EXAMS', 'https://www.cna-aiic.ca/en/certification/exam-preparation'),
(64, 'AMA AMERICAN MEDICAL ASSOCIATION PAIN MANAGEMENT', 'https://www.ama-assn.org/topics/pain-management-alternatives'),
(65, 'ALZHEIMERâ€™S ASSOCIATION', 'https://www.alz.org/'),
(66, 'NATIONAL INSTITUTE ON AGING (NIA), NATIONAL INSTITUTES OF HEALTH (NIH)', 'https://www.nia.nih.gov/'),
(67, 'AFAR (AMERICAN FOUNDATION FOR AGING RESEARCH)', 'https://www.afar.org/'),
(68, 'GERIATRIC MENTAL HEALTH FOUNDATION', 'http://www.gmhfonline.org/'),
(69, 'THE AMERICAN GERIATRICS SOCIETY', 'https://www.americangeriatrics.org/'),
(70, 'ASSOCIATION FOR INTEGRATIVE HEALTH CARE PRACTITIONERS', 'https://aihm.org/'),
(71, 'CANADIAN HEALTH FOOD ASSOCIATION', 'https://chfa.ca/en/'),
(72, 'COALITION FOR NATURAL HEALTH', 'https://www.linkedin.com/company/coalition-for-natural-health'),
(73, 'INTERNATIONAL IRIDOLOGY PRACTITIONERS ASSOCIATION', 'https://www.iridologyassn.org/'),
(74, 'INTERNATIONAL ORGANIZATION OF NUTRITIONAL CONSULTANTS', 'http://ionc.org/'),
(75, 'NATIONAL ASSOCIATION OF NUTRITION PROFESSIONALS', 'https://www.nanp.org/'),
(76, 'NATIONAL CENTER FOR HOMEOPATHY', 'https://www.homeopathycenter.org/'),
(77, 'NATIONAL HEALTH FEDERATION', 'https://thenhf.com/'),
(78, 'NATURAL PRODUCTS ASSOCIATION', 'https://www.npanational.org/'),
(79, 'ORGANIC CONSUMERS ASSOCIATION', 'https://www.organicconsumers.org/'),
(80, 'UNITED PLANT SAVERS', 'https://unitedplantsavers.org/'),
(81, 'UNITED STATES DISTANCE LEARNING ASSOCIATION', 'https://usdla.org/'),
(82, 'VEGETARIAN RESOURCE GROUP', 'https://www.vrg.org/'),
(83, 'AMERICAN DIABETES ASSOCIATION', 'https://www.diabetes.org/'),
(84, 'AMERICAN ASSOCIATION OF NUTRITIONAL CONSULTANTS', 'https://www.aanc.net/'),
(85, 'AMERICAN ASSOCIATION OF NUTRITIONAL CONSULTANTS', 'https://www.nanp.org/'),
(86, 'NATIONAL ASSOCIATION OF NUTRITION PROFESSIONALS (NANP)', 'https://www.nanp.org/'),
(87, 'AGE MANAGEMENT MEDICINE GROUP (AGEMED)', 'https://agemed.org/'),
(88, 'AMERICAN ACADEMY OF ENVIRONMENTAL (AAEM)', 'https://www.aaemonline.org/'),
(89, 'AMERICAN ASSOCIATION FOR HEALTH FREEDOM (HEALTHFREEDOM)', 'https://www.apma.net/'),
(90, 'AMERICAN COLLEGE FOR THE ADVANCEMENT OF MEDICINE (ACAM)', 'https://www.acam.org/'),
(91, 'THE INSTITUTE OF FUNCTIONAL MEDICINE (FUNCTIONALMEDICINE)', 'https://www.ifm.org/');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `logo` varchar(120) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `logo`, `add_date`) VALUES
(2, '../assets/img/logoefae6369858c45d5ff38072cb9733c5e.jpg', '2020-06-15 06:36:34');

-- --------------------------------------------------------

--
-- Table structure for table `member_consult`
--

CREATE TABLE `member_consult` (
  `id` int(11) NOT NULL,
  `prefix` varchar(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `contact_type` varchar(200) NOT NULL,
  `address_one` varchar(200) NOT NULL,
  `address_two` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `pin` varchar(30) NOT NULL,
  `country` varchar(60) NOT NULL,
  `email` varchar(200) NOT NULL,
  `email_notification` varchar(200) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `phone_extention` varchar(50) NOT NULL,
  `mobile_number` varchar(200) NOT NULL,
  `fax` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `certification_type` varchar(200) NOT NULL,
  `licensing_state` varchar(200) NOT NULL,
  `license_expiration_date` date NOT NULL,
  `license_number` varchar(200) NOT NULL,
  `practicing_now` varchar(200) NOT NULL,
  `name_of_medical_institution` varchar(200) NOT NULL,
  `graduation_year` varchar(200) NOT NULL,
  `professional_affiliated_memberships` varchar(200) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `url` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `url`, `status`) VALUES
(2, 'home', 'index', 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `sender_id` varchar(50) NOT NULL,
  `reciver_id` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `message_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `sender_id`, `reciver_id`, `message`, `message_date`) VALUES
(1, '37', '39', 'test', '2020-11-12 07:47:04'),
(2, '39', '37', 'hi', '2020-11-12 08:03:54'),
(3, '39', '37', 'hi', '2020-11-12 08:18:10'),
(30, '38', '37', 'hi', '2020-11-12 12:34:03');

-- --------------------------------------------------------

--
-- Table structure for table `oncall_service`
--

CREATE TABLE `oncall_service` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `service_for` varchar(200) NOT NULL,
  `we_need_help _because` varchar(200) NOT NULL,
  `we_need_help` varchar(200) NOT NULL,
  `we_need_this_help` varchar(200) NOT NULL,
  `Assessment` varchar(200) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oncall_service`
--

INSERT INTO `oncall_service` (`id`, `name`, `email`, `service_for`, `we_need_help _because`, `we_need_help`, `we_need_this_help`, `Assessment`, `add_date`) VALUES
(6, 'Ak', 'ak@gmail.com', 'My Loved One', 'Disabled', 'In the Morning', '1-2 days a week', 'Basic', '2020-10-19 19:06:40'),
(3, 'Anshuman', 'kanshuman55@gmail.com', 'My Friend', 'Disabled', 'Overnight', '1-2 days a week', 'Basic', '2020-10-05 16:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `package_name` varchar(200) NOT NULL,
  `package_price` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `package_name`, `package_price`) VALUES
(2, 'Silver', '100'),
(3, 'Gold', '150'),
(4, 'Platinum', '250');

-- --------------------------------------------------------

--
-- Table structure for table `package_value`
--

CREATE TABLE `package_value` (
  `id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `package_option` varchar(200) NOT NULL,
  `status` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_value`
--

INSERT INTO `package_value` (`id`, `package_id`, `package_option`, `status`) VALUES
(4, 2, 'Standard Accounting', 'yes'),
(5, 2, 'Platform Access', 'yes'),
(6, 2, 'Business Orientation', 'no'),
(7, 2, 'Dedicated Consultant', 'no'),
(8, 2, 'Personal Assistance', 'no'),
(10, 3, 'Standard Accounting', 'yes'),
(11, 3, 'Platform Access', 'yes'),
(12, 3, 'Business Orientation', 'yes'),
(13, 3, 'Dedicated Consultant', 'no'),
(14, 3, 'Personal Assistance', 'no'),
(15, 4, 'Standard Accounting', 'yes'),
(16, 4, 'Platform Access', 'yes'),
(17, 4, 'Business Orientation', 'yes'),
(18, 4, 'Dedicated Consultant', 'yes'),
(19, 4, 'Personal Assistance', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `parent_category`
--

CREATE TABLE `parent_category` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent_category`
--

INSERT INTO `parent_category` (`id`, `service_id`, `name`, `add_date`) VALUES
(42, 20, 'Who is this accounting for?', '2020-09-22 21:21:16'),
(43, 20, 'How often do you need accountancy services?', '2020-09-22 21:13:06'),
(44, 20, 'What is your annual sales or income?', '2020-09-22 21:13:30'),
(45, 20, 'Is this business VAT registered?', '2020-09-22 21:13:56'),
(46, 21, 'What are your counselling needs?', '2020-09-22 21:22:40'),
(47, 21, 'Is this service for you?', '2020-09-22 21:22:58'),
(48, 21, 'Have you ever had counselling before?', '2020-09-22 21:23:15'),
(49, 21, 'How would you like to receive this service, remotely or in-person?', '2020-09-22 21:23:36'),
(50, 21, 'Which kind(s) of counselling would you consider?', '2020-09-22 21:23:58'),
(53, 22, 'What is your web design requirement?', '2020-09-22 21:27:09'),
(54, 22, 'Which platform is your website built on?', '2020-09-22 21:27:33'),
(55, 22, 'What type of business is this for?', '2020-09-22 21:27:54'),
(56, 22, 'What industry do you operate in?', '2020-09-22 21:28:16'),
(57, 22, 'What is your estimated budget for this project?', '2020-09-22 21:28:31');

-- --------------------------------------------------------

--
-- Table structure for table `practice`
--

CREATE TABLE `practice` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` varchar(120) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `practice`
--

INSERT INTO `practice` (`id`, `name`, `image`, `description`) VALUES
(2, 'Allergists/Immunologist', 'assets/img/practice/f3ccdd27d2000e3f9255a7e3e2c48800.jpg', '<p>They treat immune system disorders such as asthma, eczema, food allergies, insect sting allergies, and some autoimmune diseases.</p>\r\n'),
(3, 'Anesthesiologists', 'assets/img/practice/156005c5baf40ff51a327f1c34f2975b.jpg', '<p>These doctors give you drugs to numb your pain or to put you under during surgery, childbirth, or other procedures. They monitor your vital signs while you&rsquo;re under anesthesia.</p>\r\n'),
(4, 'Cardiologists', 'assets/img/practice/799bad5a3b514f096e69bbc4a7896cd9.jpg', '<p>They&rsquo;re experts on the heart and blood vessels. You might see them for heart failure, a heart attack, high blood pressure, or an irregular heartbeat.</p>\r\n'),
(5, 'Colon and Rectal Surgeons', 'assets/img/practice/d0096ec6c83575373e3a21d129ff8fef.jpg', '<p>You would see these doctors for problems with your small intestine, colon, and bottom. They can treat colon cancer, hemorrhoids, and inflammatory bowel disease.</p>\r\n'),
(6, 'Critical Care Medicine Specialists', 'assets/img/practice/032b2cc936860b03048302d991c3498f.jpg', '<p>They care for people who are critically ill or injured, often heading intensive care units in hospitals. You might see them if your heart or other organs are failing or if you&rsquo;ve been in an accident.</p>\r\n'),
(7, 'Dermatologists', 'assets/img/practice/18e2999891374a475d0687ca9f989d83.jpg', '<p>Have problems with your skin, hair, nails? Do you have moles, scars, acne, or skin allergies? Dermatologists can help.</p>\r\n'),
(8, 'Endocrinologists', 'assets/img/practice/fe5df232cafa4c4e0f1a0294418e5660.jpg', '<p>These are experts on hormones and metabolism. They can treat conditions like diabetes, thyroid problems, infertility, and calcium and bone disorders.</p>\r\n'),
(9, 'Emergency Medicine Specialists', 'assets/img/practice/8cda81fc7ad906927144235dda5fdf15.jpg', '<p>These doctors make life-or-death decisions for sick and injured people, usually in an emergency room. Their job is to save lives and to avoid or lower the chances of disability.</p>\r\n'),
(10, 'Family Physicians', 'assets/img/practice/30e62fddc14c05988b44e7c02788e187.jpg', '<p>They care for the whole family, including children, adults, and the elderly. They do routine checkups and screening tests, give you flu and immunization shots, and manage diabetes and other ongoing medical conditions.</p>\r\n'),
(11, 'Gastroenterologists', 'assets/img/practice/ae566253288191ce5d879e51dae1d8c3.jpg', '<p>They&rsquo;re specialists in digestive organs, including the stomach, bowels, pancreas, liver, and gallbladder. You might see them for abdominal pain, ulcers, diarrhea, jaundice, or cancers in your digestive organs. They also do a colonoscopy and other tests for colon cancer.</p>\r\n'),
(12, 'Geriatric Medicine Specialists', 'assets/img/practice/62bf1edb36141f114521ec4bb4175579.jpg', '<p>These doctors care for the elderly. They can treat people in their homes, doctors&#39; offices, nursing homes, assisted-living centers, and hospitals.</p>\r\n'),
(13, 'Mental Health Services', 'assets/img/practice/62bf1edb36141f114521ec4bb4175579.jpg', '<p>Providing mental health services in primary healthcare involves diagnosing and treating people with mental disorders.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `message` text NOT NULL,
  `image` varchar(120) NOT NULL,
  `type` int(11) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `message`, `image`, `type`, `add_date`) VALUES
(1, 'Rahul Basu', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce auctor risus quis mauris fermentum iaculis. Curabitur sit amet eleifend ante. Aenean id dolor feugiat ex ultrices maximus. Sed est odio, tincidunt at venenatis nec, efficitur eget ipsum. Praesent vestibulum massa massa, non semper lorem congue eget', 'Admin/assets/img/review/f3ccdd27d2000e3f9255a7e3e2c48800.jpg', 0, '2020-09-20 05:05:17'),
(5, 'Rahul', 'pijjoipijoipj', 'Admin/assets/img/review/5ea7090db42d0cbe167a4b29838e132a.jpg', 0, '2020-09-20 06:40:38');

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `title`, `description`, `keywords`, `add_date`) VALUES
(1, 'Recruiter', 'US Staffing recruiter', 'Staffing, Recruitment, Human resource, US IT Staffng', '2020-07-29 10:35:34');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`) VALUES
(22, 'Web Design'),
(21, 'Consulting'),
(20, 'Accounting');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`) VALUES
(43, '../assets/img/slider1918f8cfb52e0e34b400cc21c4c40b80.png');

-- --------------------------------------------------------

--
-- Table structure for table `slider_content`
--

CREATE TABLE `slider_content` (
  `id` int(11) NOT NULL,
  `content_one` text NOT NULL,
  `content_two` text NOT NULL,
  `content_three` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider_content`
--

INSERT INTO `slider_content` (`id`, `content_one`, `content_two`, `content_three`) VALUES
(1, 'GLOBAL ADVANCED ', 'CONSULTANTS & NETWORK SERVICE FIRM', 'GLOBAL HEALTHCARE AND MEDICAL CONSULTING. NHPPA Medical & NMHHA Health Services Support.Providing highly ranked Recommendation and Referrals.');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `facebook` text NOT NULL,
  `twiter` text NOT NULL,
  `linkedin` text NOT NULL,
  `youtube` text NOT NULL,
  `instagram` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `facebook`, `twiter`, `linkedin`, `youtube`, `instagram`) VALUES
(8, 'test', 'test', 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `subcategory` varchar(120) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `parent`, `subcategory`, `add_date`) VALUES
(81, 42, 'Personal', '2020-09-22 21:31:51'),
(82, 42, 'Business', '2020-09-22 21:32:22'),
(83, 42, 'Other', '2020-09-22 21:32:34'),
(84, 43, 'One-off', '2020-09-22 21:33:02'),
(85, 43, 'Once a year', '2020-09-22 21:33:15'),
(86, 43, 'Quarterly', '2020-09-22 21:33:27'),
(87, 43, 'Monthly', '2020-09-22 21:33:36'),
(88, 43, 'Full time', '2020-09-22 21:34:02'),
(89, 43, 'I\'m not sure yet', '2020-09-22 21:34:13'),
(90, 43, 'Other', '2020-09-22 21:34:23'),
(91, 44, 'Less than Â£25K', '2020-09-22 21:35:02'),
(92, 44, 'Â£25K - Â£50K', '2020-09-22 21:35:15'),
(93, 44, 'Â£50k - Â£100K', '2020-09-22 21:35:28'),
(94, 44, 'Â£100K - Â£300K', '2020-09-22 21:35:42'),
(95, 44, 'Other', '2020-09-22 21:35:54'),
(96, 45, 'Business is VAT registered', '2020-09-22 21:36:15'),
(97, 45, 'Business is not VAT registered', '2020-09-22 21:36:24'),
(98, 45, 'N/A - Not for a business', '2020-09-22 21:36:40'),
(99, 45, 'Other', '2020-09-22 21:36:53'),
(100, 46, 'Anger management', '2020-09-22 21:37:34'),
(101, 46, 'Building confidence and esteem', '2020-09-22 21:37:45'),
(102, 46, 'Changing negative habit', '2020-09-22 21:38:03'),
(103, 46, 'Dealing with a loss', '2020-09-22 21:38:29'),
(104, 46, 'Dealing with stress or depression', '2020-09-22 21:38:42'),
(105, 46, 'Other', '2020-09-22 21:39:00'),
(106, 47, 'Yes, this is for me', '2020-09-22 21:39:14'),
(107, 47, 'Yes, for me and my family', '2020-09-22 21:39:24'),
(108, 47, 'Yes, for me and my partner', '2020-09-22 21:39:35'),
(109, 47, 'No, this is for someone else', '2020-09-22 21:39:45'),
(110, 47, 'Other', '2020-09-22 21:39:56'),
(111, 48, 'Yes', '2020-09-22 21:40:30'),
(112, 48, 'No', '2020-09-22 21:40:41'),
(113, 48, 'Other', '2020-09-22 21:40:51'),
(114, 49, 'I would prefer remote - Video call etc', '2020-09-22 21:41:16'),
(115, 49, 'I donâ€™t mind, either are fine', '2020-09-22 21:41:35'),
(116, 49, 'I would prefer in-person', '2020-09-22 21:41:51'),
(117, 50, 'Face to face - I visit the professional', '2020-09-22 21:42:28'),
(118, 50, 'Face to face - professional visits me', '2020-09-22 21:42:38'),
(119, 50, 'Group session', '2020-09-22 21:42:47'),
(120, 50, 'Other', '2020-09-22 21:42:57'),
(121, 53, 'Create a new website', '2020-09-22 21:43:48'),
(122, 53, 'Major Major changes to my website', '2020-09-22 21:44:33'),
(123, 53, 'Minor changes to my website', '2020-09-22 21:44:55'),
(124, 53, 'Other', '2020-09-22 21:45:12'),
(125, 54, 'I\'m not sure', '2020-09-22 21:46:11'),
(126, 54, 'Custom Built', '2020-09-22 21:46:26'),
(127, 54, 'Joomla', '2020-09-22 21:46:41'),
(128, 54, 'Shopify', '2020-09-22 21:46:52'),
(129, 54, 'SquareSpace', '2020-09-22 21:47:08'),
(130, 54, 'Wix', '2020-09-22 21:47:19'),
(131, 54, 'Wordpress', '2020-09-22 21:47:30'),
(132, 54, 'Other', '2020-09-22 21:47:42'),
(133, 55, 'Personal project', '2020-09-22 21:48:23'),
(134, 55, 'Sole trader/self-employed', '2020-09-22 21:48:35'),
(135, 55, 'Small business (1 - 9 employees)', '2020-09-22 21:48:46'),
(136, 55, 'Medium business (10 - 29 employees)', '2020-09-22 21:48:56'),
(137, 55, 'Large business (30 - 99 employees)', '2020-09-22 21:49:08'),
(138, 55, 'Extra large business (100 or more employees)', '2020-09-22 21:49:27'),
(139, 55, 'Charity/non-profit', '2020-09-22 21:49:44'),
(140, 55, 'Other', '2020-09-22 21:49:55'),
(141, 56, 'Business services', '2020-09-22 21:50:21'),
(142, 56, 'Creative industries', '2020-09-22 21:50:33'),
(143, 56, 'Entertainment & events', '2020-09-22 21:50:45'),
(144, 56, 'Financial services', '2020-09-22 21:50:57'),
(145, 56, 'Health & fitness', '2020-09-22 21:51:09'),
(146, 56, 'Home services', '2020-09-22 21:51:21'),
(147, 56, 'Restaurant/food', '2020-09-22 21:51:32'),
(148, 56, 'Retail/consumer goods', '2020-09-22 21:51:45'),
(149, 56, 'Technology/software', '2020-09-22 21:51:57'),
(150, 56, 'Other', '2020-09-22 21:52:08'),
(151, 57, 'Less than Â£250', '2020-09-22 21:52:25'),
(152, 57, 'Â£250 - Â£999', '2020-09-22 21:52:38'),
(153, 57, 'Â£1,000 - Â£1,999', '2020-09-22 21:52:48'),
(154, 57, 'Â£2,000 - Â£2,999', '2020-09-22 21:53:01'),
(155, 57, 'Â£3,000 - Â£4,999', '2020-09-22 21:53:11'),
(156, 57, 'Â£5,000 or more', '2020-09-22 21:53:21'),
(157, 57, 'Other', '2020-09-22 21:53:34');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `image` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `designation`, `image`) VALUES
(1, 'Rahul Basu', 'Webdeveloper', 'assets/img/team/e2ddde7f565765c70b6ff38674119214.png');

-- --------------------------------------------------------

--
-- Table structure for table `topbanner`
--

CREATE TABLE `topbanner` (
  `id` int(11) NOT NULL,
  `image` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topbanner`
--

INSERT INTO `topbanner` (`id`, `image`) VALUES
(1, '../assets/img/banner37068a20fc77a7afd430f39e07d93f6c.jpg'),
(2, '../assets/img/banner103ac5c622267f0169899c530a1b9660.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `email` varchar(35) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(25) NOT NULL,
  `image` varchar(120) NOT NULL,
  `package` varchar(200) NOT NULL,
  `ac_status` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `role` varchar(120) NOT NULL,
  `unique_id` varchar(200) NOT NULL,
  `ratting` varchar(200) NOT NULL,
  `comment` text NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `email`, `mobile`, `gender`, `city`, `address`, `password`, `image`, `package`, `ac_status`, `payment_status`, `role`, `unique_id`, `ratting`, `comment`, `add_date`) VALUES
(37, 'Anderson', 'andersonacni@gmail.com', '', '', '', '', '12345', 'Admin/assets/img/profile/beb52dd0f859f5effa1af2a5f272eb6d.jpg', '2', 0, 0, 'subscriber', 'ACTFK61SB0', '1', 'fdvbndfb', '2020-11-12 07:25:11'),
(38, 'James', 'kanshuman55@gmail.com', '123456789', 'male', '', '', '12345', 'Admin/assets/img/profile/28119d644fc0a18ef23c92e7c1e7999f.jpg', '3', 1, 1, 'vendor', 'ACTF9VI6TC', '5', 'Good Service', '2020-10-30 21:57:28'),
(39, 'Sophia', 'sophiaacni1f@gmail.com', '0987654321', 'female', '', '', '12345', 'Admin/assets/img/profile/c5aab87cf1a7470ee3e4018ae6673a62.jpg', '3', 1, 0, 'vendor', 'ACTFPNFYC9', '1', 'fsrhbfdbfd', '2020-11-12 07:28:20'),
(40, 'Olivia', 'oliviaacnifirm0121@gmail.com', '1234567890', 'female', '', '', '12345', 'Admin/assets/img/profile/3f20e0cc56244c5dd833785e828a031a.jpg', '4', 1, 0, 'subscriber', 'ACTF8XWZ1P', '5', 'Thank You ACNI FIRM.', '2020-11-12 06:11:08'),
(41, '', 'juniorsakazaki@gmail.com', '', '', '', '', '12345', '', '4', 1, 1, 'vendor', 'ACTFQ7G61T', '', '', '2020-11-12 06:11:45');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `video` varchar(120) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_services`
--
ALTER TABLE `about_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply_service`
--
ALTER TABLE `apply_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appoint_medical`
--
ALTER TABLE `appoint_medical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientlogo_style`
--
ALTER TABLE `clientlogo_style`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evalution_consult`
--
ALTER TABLE `evalution_consult`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallary`
--
ALTER TABLE `gallary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hr_staffing`
--
ALTER TABLE `hr_staffing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labasst_schedule_request`
--
ALTER TABLE `labasst_schedule_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_consult`
--
ALTER TABLE `member_consult`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oncall_service`
--
ALTER TABLE `oncall_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_value`
--
ALTER TABLE `package_value`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent_category`
--
ALTER TABLE `parent_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `practice`
--
ALTER TABLE `practice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_content`
--
ALTER TABLE `slider_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topbanner`
--
ALTER TABLE `topbanner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_services`
--
ALTER TABLE `about_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apply_service`
--
ALTER TABLE `apply_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `appoint_medical`
--
ALTER TABLE `appoint_medical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clientlogo_style`
--
ALTER TABLE `clientlogo_style`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `evalution_consult`
--
ALTER TABLE `evalution_consult`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gallary`
--
ALTER TABLE `gallary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hr_staffing`
--
ALTER TABLE `hr_staffing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `labasst_schedule_request`
--
ALTER TABLE `labasst_schedule_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member_consult`
--
ALTER TABLE `member_consult`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `oncall_service`
--
ALTER TABLE `oncall_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `package_value`
--
ALTER TABLE `package_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `parent_category`
--
ALTER TABLE `parent_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `practice`
--
ALTER TABLE `practice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `slider_content`
--
ALTER TABLE `slider_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `topbanner`
--
ALTER TABLE `topbanner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
