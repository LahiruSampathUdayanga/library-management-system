-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2015 at 09:17 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `book number` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `bookname` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book number`, `category`, `bookname`, `author`, `path`) VALUES
(1, 'maths', 'lahiru', 'by Douglas R. Hofstadter', 'Images/Books/mathsbook/1.jpg'),
(2, 'maths', 'What Is Mathematics?: An Elementary Approach to Ideas and Methods', 'by Richard Courant', 'Images/Books/mathsbook/2.jpg'),
(3, 'maths', 'Euclid''s Elements ', 'by Euclid  ', 'Images/Books/mathsbook/3.jpg'),
(4, 'maths', 'Journey through Genius: The Great Theorems of Mathematics', 'by William Dunham', 'Images/Books/mathsbook/4.jpg'),
(5, 'maths', 'Fermat''s Enigma: The Epic Quest to Solve the World''s Greatest Mathematical Problem ', 'by Simon Singh', 'Images/Books/mathsbook/5.jpg'),
(6, 'science', 'Miscellaneous	\r\n	Top 10 Influential People Who Never Lived', 'Jamie Frater November 3, 2008', 'Images/Books/science book/1.jpg'),
(7, 'science', 'Space	\r\n	10 Of The Biggest Things In The Universe', 'Nathan Willey October 22, 2015', 'Images/Books/science book/2.jpg'),
(8, 'science', 'Movies and TV	\r\n	Top 10 Shocking Documentaries', 'Eva Fauen March 3, 2013', 'Images/Books/science book/3.jpg'),
(9, 'science', 'Animals	\r\n	10 Crazy Facts About Crocodilians', 'Christopher M. Stephens October 5, 2015', 'Images/Books/science book/4.jpg'),
(10, 'science', 'Our World	\r\n	10 Awe-Inspiring Buildings You Won’t Believe We Tore Down', 'Morris M. October 1, 2015', 'Images/Books/science book/5.jpg'),
(11, 'language', 'Chinese language and culture', 'Cynthia Y.Ning & John S.Montanaro', 'Images/Books/Language books/1.jpg'),
(12, 'language', 'The English Language', 'David Crystal', 'Images/Books/Language books/2.jpg'),
(13, 'language', 'GUNASENA Maha Sinhala Shabdakoshaya', 'dr.Harishchsndra Wijayathunga ', 'Images/Books/Language books/3.jpg'),
(14, 'language', 'Japan Language', 'Dementra DeMent & Boye Lafayette De Mente', 'Images/Books/Language books/4.jpg'),
(15, 'language', 'Macmillan English Language Book', 'Mary Bowen', 'Images/Books/Language books/5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book number` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
