-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2019 at 07:18 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookID` int(11) NOT NULL,
  `title` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `due_date` date NOT NULL,
  `book_keywords` text NOT NULL,
  `book_content` text NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookID`, `title`, `author`, `due_date`, `book_keywords`, `book_content`, `userID`) VALUES
(110001, 'Simon vs the Homo Sapien Agenda', 'Becky Albertalli', '2019-05-08', 'Simon', 'Sixteen-year-old and not-so-openly gay Simon Spier prefers to save his drama for the school musical. But when an email falls into the wrong hands, his secret is at risk of being thrust into the spotlight. Now change-averse Simon has to find a way to step out of his comfort zone before he\'s pushed out—without alienating his friends, compromising himself, or fumbling a shot at happiness with the most confusing, adorable guy he\'s never met. .', 0),
(110002, 'Five  Feet Apart', 'Rachel Llippincott', '2019-05-09', 'Five', 'In this #1 New York Times bestselling novel that’s perfect for fans of John Green’s The Fault in Our Stars, two teens fall in love with just one minor complication—they can’t get within a few feet of each other without risking their lives. ', 0),
(110003, 'Love at First Bark', 'Julie Klam', '2019-05-09', 'Bark', 'When Marcy Deveraux\'s romance series catapults to the top of the New York Times bestseller list, no one is more surprised than Marcy herself. After all, she barely passed high school, flunked the driving test four times, and fell into a pool at her sister\'s wedding. ', 0),
(110004, 'Harry Potter and the Philosopher\'s Stone', 'J.K. Rowling', '2019-05-10', 'Stone', 'In late 1981, Albus Dumbledore, Minerva McGonagall, and Rubeus Hagrid, professors of Hogwarts School of Witchcraft and Wizardry, deliver a recently orphaned infant named Harry Potter to his only remaining relatives, the Dursleys. Ten years later, Harry has been battling a disjointed life with the Dursleys. After inadvertently causing an accident during a family trip to the zoo, Harry begins receiving unsolicited letters by owls. After the Dursleys escape to an island to avoid more letters, Hagrid re-appears and informs Harry that he is actually a wizard and has been accepted into Hogwarts against the Dursleys\' wishes. ', 0),
(110005, 'Harry Potter and the Chamber of Secrets', 'J.L. Rowling', '2019-05-10', 'Secret', 'Harry Potter spends the summer with The Dursleys without receiving letters from his Hogwarts friends. In his room, Harry meets Dobby, a house-elf who warns him of a peril that will take shape if he returns to Hogwarts. Dobby reveals that he intercepted his friends\' letters, and destroys a cake in order to prevent his return to school. The Dursleys lock Harry up, but Ron Weasley and his older twin brothers, Fred and George, rescue him in their father\'s flying car.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rentals`
--

CREATE TABLE `rentals` (
  `userID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `bookID` int(11) NOT NULL,
  `title` text NOT NULL,
  `due_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rentals`
--

INSERT INTO `rentals` (`userID`, `username`, `bookID`, `title`, `due_date`) VALUES
(1, 'nampung', 110001, 'Simon vs the Homo Sapien Agenda', '2019-05-08'),
(2, 'nnpp', 110002, 'Five Feet  Apart', '2019-05-09'),
(3, 'nam', 110003, 'Love at First Bark', '2019-05-09'),
(1, 'nampung', 110004, 'Harry Potter and the Philosopher\'s Stone', '2019-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `bookID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `email`, `password`, `bookID`) VALUES
(1, 'nampung', 'nampung@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(2, 'nnpp', 'nnpp@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(3, 'nam', 'nam@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110006;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
