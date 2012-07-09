-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 09, 2012 at 04:31 PM
-- Server version: 5.5.24
-- PHP Version: 5.3.10-1ubuntu3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `resume`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `summary` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `start_date`, `end_date`, `summary`) VALUES
(1, 'MLB Stats Engine', '2012-06-15', NULL, 'A ''Money Ball'' style predictive model for selecting players in fantasy baseball gambling. The model leverages significant historical data to maximize team performance while diversifying risk across multiple gambles.'),
(2, 'This Resume Website', '2012-07-06', NULL, 'A resume website showcasing the author''s talents and experiences leveraging the Model-View-Controller pattern.'),
(3, 'Project Blue', '2012-05-18', NULL, 'A yet to be named Android game providing head-to-head turn based tactical combat. The game sports 2.5D graphics and in-depth unit customizations.'),
(4, 'CORE Interpreter', '2012-05-01', '2012-06-03', 'Interpreter for the CORE language, a teaching language expressed in several dozen Bacchus Normal Form rules.'),
(5, 'Mobile Steganographer', '2012-01-03', '2012-03-25', 'A text message handler that allowed for discrete conversations by encoding text messages into images sent as picture messages.'),
(6, 'SWOT Satellite Simulator', '2010-07-19', '2012-05-31', 'High throughput, high fidelity simulator for NASA''s upcoming Surface Water & Ocean Topography satellite mission.'),
(7, 'Hydromorphology Genetic Model', '2010-08-01', '2011-08-27', 'A genetic approach to deriving three dimensional river data from two dimensional SWOT satellite images.'),
(8, 'Classified Project', '2009-06-15', '2010-04-01', 'A cryptographic application developed by by the Mission Security team at Northrop Grumman.'),
(9, 'CMMI Analysis Tool', '2009-01-05', '2009-04-01', 'Data aggregation and analysis tool developed in Excel used to perform statistical analysis for CMMI recertification.');

-- --------------------------------------------------------

--
-- Table structure for table `project_skills`
--

CREATE TABLE IF NOT EXISTS `project_skills` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(10) unsigned NOT NULL,
  `skill_id` int(10) unsigned NOT NULL,
  `isPrimary` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `project_skills`
--

INSERT INTO `project_skills` (`id`, `project_id`, `skill_id`, `isPrimary`) VALUES
(1, 1, 4, 1),
(2, 1, 3, 1),
(3, 1, 2, 1),
(4, 2, 5, 1),
(5, 2, 6, 1),
(6, 2, 11, 1),
(7, 2, 7, 0),
(8, 2, 8, 0),
(9, 2, 9, 0),
(10, 3, 12, 1),
(11, 3, 13, 1),
(12, 3, 14, 1),
(13, 4, 4, 1),
(14, 4, 15, 1),
(15, 4, 16, 1),
(16, 5, 14, 1),
(17, 5, 17, 1),
(18, 5, 18, 1),
(19, 6, 1, 1),
(20, 6, 19, 1),
(21, 6, 20, 1),
(22, 7, 4, 1),
(23, 7, 21, 1),
(24, 7, 22, 1),
(25, 8, 1, 1),
(26, 8, 17, 1),
(27, 8, 23, 1),
(28, 9, 24, 1),
(29, 9, 2, 1),
(30, 9, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `experience` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `experience`) VALUES
(1, 'C/C++', 3),
(2, 'Predictive Modeling', 1),
(3, 'Data Mining', 1),
(4, 'Java', 2),
(5, 'PHP', 1),
(6, 'Model-View-Controller', 0),
(7, 'SQL', 2),
(8, 'CSS', 2),
(9, 'HTML', 2),
(11, 'CakePHP', 0),
(12, 'Network Programming', 3),
(13, 'OpenGL', 1),
(14, 'Android Java', 1),
(15, 'Compiler Theory', 0),
(16, 'Formal Languages', 1),
(17, 'Cryptography', 2),
(18, 'Steganography', 0),
(19, 'Python', 2),
(20, 'Parallel Computing', 2),
(21, 'Genetic Algorithms', 1),
(22, 'Problem Optimization', 1),
(23, 'UML', 1),
(24, 'VBA', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
(1, 'matt', '93b0e68f8202db26fa1fa634cc8d5f63dbbaae74', 'employer', '2012-07-08 17:44:16', '2012-07-08 17:47:59');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
