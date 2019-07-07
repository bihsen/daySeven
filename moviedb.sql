-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 05, 2019 at 12:19 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `directors`
--

DROP TABLE IF EXISTS `directors`;
CREATE TABLE IF NOT EXISTS `directors` (
  `director_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `picture` varchar(50) NOT NULL,
  PRIMARY KEY (`director_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `directors`
--

INSERT INTO `directors` (`director_id`, `first_name`, `last_name`, `date_of_birth`, `country`, `picture`) VALUES
(1, 'luigi', 'banana', '1969-07-14', 'USA', 'David_Fincher.jpg'),
(2, 'George', ' Lucas', '1990-08-09', 'France', 'Steven_Spielberg.jpg'),
(3, 'Tony ', 'potato', '1982-07-30', 'Portugal', 'Dan_Gilroy.jpg'),
(4, 'Simon', 'Bertrand', '1990-07-08', 'France', 'Peter_Jackson.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `movie_id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `release_year` year(4) DEFAULT NULL,
  `views` int(11) NOT NULL,
  `directorID` int(11) DEFAULT NULL,
  `poster` varchar(50) NOT NULL,
  PRIMARY KEY (`movie_id`),
  KEY `directorID` (`directorID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `title`, `release_year`, `views`, `directorID`, `poster`) VALUES
(1, 'Fight Club', 2007, 100, 1, 'Fight_Club.jpg'),
(2, 'Star Wars', 2007, 254, 2, 'Star_Wars.jpg'),
(3, 'Night Crawler', 2013, 300, 3, 'Night_Crawler.jpg'),
(4, 'Lord of the rings ', 2001, 124, 4, 'Lord_Of_Rings.jpg'),
(5, 'Jurassic Park', 2018, 75210, 1, 'Jurassic_Park.png');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_ibfk_1` FOREIGN KEY (`directorID`) REFERENCES `directors` (`director_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
