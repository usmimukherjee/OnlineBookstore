-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 09, 2018 at 02:20 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Bookstore`
--
CREATE DATABASE IF NOT EXISTS `Bookstore` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `Bookstore`;

-- --------------------------------------------------------

--
-- Table structure for table `Books`
--

DROP TABLE IF EXISTS `Books`;
CREATE TABLE `Books` (
  `BookID` int(20) NOT NULL,
  `BookName` varchar(60) NOT NULL,
  `BookImage` varchar(600) NOT NULL,
  `Price` int(10) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Book_pdf` varchar(600) NOT NULL,
  `Book_ISBN` bigint(20) NOT NULL,
  `Book_Edition` varchar(40) NOT NULL,
  `Pages` int(11) NOT NULL,
  `Description` text NOT NULL,
  `Category_name` varchar(60) NOT NULL,
  `AuthorName` varchar(60) NOT NULL,
  `PublisherName` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `Books`:
--

--
-- Dumping data for table `Books`
--

INSERT INTO `Books` (`BookID`, `BookName`, `BookImage`, `Price`, `Quantity`, `Book_pdf`, `Book_ISBN`, `Book_Edition`, `Pages`, `Description`, `Category_name`, `AuthorName`, `PublisherName`) VALUES
(2, 'Gone Girl', 'upload_image/img.png', 229, 100, 'upload_ebook/Gone Girl by Gillian Flynn-compressed.pdf', 9780753827666, '1st Edition', 432, 'On a warm summer morning in North Carthage, Missouri, it is Nick and Amy Dunneâ€™s fifth wedding anniversary. Presents are being wrapped and reservations are being made when Nickâ€™s clever and beautiful wife disappears. Husband-of-the-Year Nick isnâ€™t doing himself any favors with cringe-worthy daydreams about the slope and shape of his wifeâ€™s head, but passages from Amy\'s diary reveal the alpha-girl perfectionist could have put anyone dangerously on edge. Under mounting pressure from the police and the mediaâ€”as well as Amyâ€™s fiercely doting parentsâ€”the town golden boy parades an endless series of lies, deceits, and inappropriate behaviour. Nick is oddly evasive, and heâ€™s definitely bitterâ€”but is he really a killer?', 'Thriller', 'Gillian Flynn', ' Weidenfeld & Nicolson '),
(3, 'The Fault In Our Stars', 'upload_image/Screenshot 2018-11-12 at 4.03.34 PM.png', 349, 150, 'upload_ebook/mxdoc.com_green-john-the-fault-in-our-stars.pdf', 9780142424179, '2nd Edition', 352, 'Despite the tumor-shrinking medical miracle that has bought her a few years, Hazel has never been anything but terminal, her final chapter inscribed upon diagnosis. But when a gorgeous plot twist named Augustus Waters suddenly appears at Cancer Kid Support Group, Hazelâ€™s story is about to be completely rewritten.\r\n\r\nInsightful, bold, irreverent, and raw, The Fault in Our Stars brilliantly explores the funny, thrilling, and tragic business of being alive and in love.', 'Romance', 'John Green', 'Penguin Books'),
(4, 'The Witch of Portobello', 'upload_image/Screenshot 2018-11-26 at 7.18.59 AM.png', 449, 200, 'upload_ebook/TWOP.pdf', -61337838, '2nd edition', 268, 'From one of the world\'s best loved storytellers, Paulo Coelho, comes a riveting novel tracing the mysterious life and disappearance of Athena dubbed â€˜the Witch of Portobelloâ€™.\r\n\r\n\r\nThis is the story of Athena, or Sherine, to give her the name she was baptised with. Her life is pieced together through a series of recorded interviews with those people who knew her well or hardly at all â€“ parents, colleagues, teachers, friends, acquaintances, her ex-husband.\r\n\r\n\r\nThe novel unravels Athena\'s mysterious beginnings, via an orphanage in Romania, to a childhood in Beirut. When war breaks out, her adoptive family move with her to London, where a dramatic turn of events occursâ€¦\r\n\r\n\r\nAthena, who has been dubbed \'the Witch of Portobello\' for her seeming powers of prophecy, disappears dramatically, leaving those who knew her to solve the mystery of her life and abrupt departure.\r\n\r\n\r\nLike The Alchemist, The Witch of Portobello is the kind of story that will transform the way readers think about love, passion, joy and sacrifice.', 'Fiction', 'Paulo Coelho', 'Harper One'),
(6, 'The Great Gatsby', 'upload_image/Screenshot 2018-12-09 at 5.45.24 PM.png', 199, 10, 'upload_ebook/the-great-gatsby.pdf', 9780743273565, 'Fourth Edition', 180, 'The Great Gatsby, F. Scott Fitzgeraldâ€™s third book, stands as the supreme achievement of his career. First published in 1925, this quintessential novel of the Jazz Age has been acclaimed by generations of readers. The story of the mysteriously wealthy Jay Gatsby and his love for the beautiful Daisy Buchanan, of lavish parties on Long Island at a time when The New York Times noted â€œgin was the national drink and sex the national obsession,â€ it is an exquisitely crafted tale of America in the 1920s.', 'Fiction', 'F. Scott Fitzgerald', 'Scribner');

--
-- Triggers `Books`
--
DROP TRIGGER IF EXISTS `updating_inventory`;
DELIMITER $$
CREATE TRIGGER `updating_inventory` AFTER INSERT ON `Books` FOR EACH ROW INSERT INTO Inventory(BookID,StockLevelNew)VALUES(New.BookID,StockLevelNew+NEW.Quantity)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

DROP TABLE IF EXISTS `Category`;
CREATE TABLE `Category` (
  `Category_ID` int(15) NOT NULL,
  `Category_Name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `Category`:
--

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`Category_ID`, `Category_Name`) VALUES
(1, 'Fiction'),
(2, 'Non Fiction'),
(3, 'Fantasy'),
(4, 'Mystery'),
(5, 'Romance'),
(6, 'Horror'),
(7, 'Autobiography'),
(8, 'Science and Technology'),
(9, 'Cookbooks'),
(10, 'Thriller');

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

DROP TABLE IF EXISTS `Customer`;
CREATE TABLE `Customer` (
  `CustomerID` int(20) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `PhoneNumber` bigint(20) NOT NULL,
  `Address` text NOT NULL,
  `Country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `Customer`:
--

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`CustomerID`, `FirstName`, `LastName`, `Email`, `Password`, `PhoneNumber`, `Address`, `Country`) VALUES
(6, 'Usmi', 'Mukherjee', 'usmimukherjee18@gmail.com', 'usmi', 7760385149, 'Bangalore', 'India'),
(7, 'abc', 'def', 'abc@gmail.com', 'abc', 12345, 'mumbai', 'india'),
(8, 'bc', 'de', 'bc@gmail.com', 'bc', 123, 'chennai', 'india'),
(9, 'Vedhitha', 'S', 'vedu@gmail.com', 'vedu', 12345678, 'Bangalore', 'India'),
(10, 'abcd', 'cdef', 'abcd@gmail.com', 'abcd', 1234, 'Bangalore', 'India'),
(11, 'defg', 'abcd', 'abcdef@gmail.com', 'abcdefgh', 123450, 'Bangalore', 'India'),
(12, 'admin', 'admin', 'admin@gmail.com', 'admin', 7760385149, 'bangalore', 'india'),
(13, 'pqrs', 'stuv', 'pqr@gmail.com', 'pqrs', 12345, 'Bangalore', 'India'),
(14, 'Kiara', 'Ambani', 'kiara@gmail.com', 'kiara', 8098345612, 'Mumbai', 'India'),
(15, 'maddy', 'manny', 'maddy@gmail.com', 'maddy', 1234567890, 'bangalore', 'india');

-- --------------------------------------------------------

--
-- Table structure for table `Feedback`
--

DROP TABLE IF EXISTS `Feedback`;
CREATE TABLE `Feedback` (
  `FeedbackID` int(10) NOT NULL,
  `CustomerID` int(20) NOT NULL,
  `Feedbackdate` date NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `CustomerFeedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `Feedback`:
--   `CustomerID`
--       `Customer` -> `CustomerID`
--

--
-- Dumping data for table `Feedback`
--

INSERT INTO `Feedback` (`FeedbackID`, `CustomerID`, `Feedbackdate`, `Email`, `Name`, `CustomerFeedback`) VALUES
(2, 7, '2018-12-09', 'abc@gmail.com', 'abc', 'The deliver could be better');

-- --------------------------------------------------------

--
-- Table structure for table `Inventory`
--

DROP TABLE IF EXISTS `Inventory`;
CREATE TABLE `Inventory` (
  `BookID` int(20) NOT NULL,
  `StockLevelUsed` int(10) NOT NULL,
  `StockLevelNew` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `Inventory`:
--   `BookID`
--       `Books` -> `BookID`
--

--
-- Dumping data for table `Inventory`
--

INSERT INTO `Inventory` (`BookID`, `StockLevelUsed`, `StockLevelNew`) VALUES
(2, 0, 100),
(3, 0, 150),
(4, 0, 200),
(6, 0, 10);

-- --------------------------------------------------------

--
-- Table structure for table `shipping_details`
--

DROP TABLE IF EXISTS `shipping_details`;
CREATE TABLE `shipping_details` (
  `Id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `postal_code` bigint(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `shipping_details`:
--

--
-- Dumping data for table `shipping_details`
--

INSERT INTO `shipping_details` (`Id`, `name`, `address`, `postal_code`, `city`, `state`, `phone`) VALUES
(1, 'usmi mukherjee', ' #100 , 5th cross , talacauvery layout , basavanagar ', 560037, 'Bangalore', 'Karnataka', 7760385149),
(2, 'Abc', ' xyz,bangalore', 560037, 'bangalore', 'karnataka', 123456),
(3, 'Abc', ' xyz,bangalore', 560037, 'bangalore', 'karnataka', 123456),
(4, 'Abc', ' xyz,bangalore', 560037, 'bangalore', 'karnataka', 123456),
(5, 'abd', ' gdfarjsk', 123, 'bangalore', 'karnataka', 123456),
(6, 'Vee', ' marathahalli', 560037, 'bangalore', 'karnataka', 9865538790),
(7, 'Kiara', 'Bandra', 560010, 'Mumbai', 'Maharashtra', 1234567890);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Books`
--
ALTER TABLE `Books`
  ADD PRIMARY KEY (`BookID`),
  ADD UNIQUE KEY `Book_ISBN` (`Book_ISBN`),
  ADD KEY `AuthorName` (`AuthorName`);

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`Category_ID`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`CustomerID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `Feedback`
--
ALTER TABLE `Feedback`
  ADD PRIMARY KEY (`FeedbackID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `Inventory`
--
ALTER TABLE `Inventory`
  ADD PRIMARY KEY (`BookID`);

--
-- Indexes for table `shipping_details`
--
ALTER TABLE `shipping_details`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Books`
--
ALTER TABLE `Books`
  MODIFY `BookID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Category`
--
ALTER TABLE `Category`
  MODIFY `Category_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `CustomerID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `Feedback`
--
ALTER TABLE `Feedback`
  MODIFY `FeedbackID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shipping_details`
--
ALTER TABLE `shipping_details`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Feedback`
--
ALTER TABLE `Feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `Customer` (`CustomerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Inventory`
--
ALTER TABLE `Inventory`
  ADD CONSTRAINT `inventory_ibfk_1` FOREIGN KEY (`BookID`) REFERENCES `Books` (`BookID`) ON DELETE CASCADE ON UPDATE CASCADE;


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for table Books
--

--
-- Metadata for table Category
--

--
-- Metadata for table Customer
--

--
-- Metadata for table Feedback
--

--
-- Metadata for table Inventory
--

--
-- Metadata for table shipping_details
--

--
-- Metadata for database Bookstore
--

--
-- Dumping data for table `pma__pdf_pages`
--

INSERT INTO `pma__pdf_pages` (`db_name`, `page_descr`) VALUES
('Bookstore', 'ERD');

SET @LAST_PAGE = LAST_INSERT_ID();

--
-- Dumping data for table `pma__table_coords`
--

INSERT INTO `pma__table_coords` (`db_name`, `table_name`, `pdf_page_number`, `x`, `y`) VALUES
('Bookstore', 'Books', @LAST_PAGE, 308, 274),
('Bookstore', 'Customer', @LAST_PAGE, 301, 28),
('Bookstore', 'Inventory', @LAST_PAGE, 58, 296);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
