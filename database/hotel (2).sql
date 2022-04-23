-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2021 at 08:03 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_id` int(5) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `r_id` int(5) NOT NULL,
  `reg_id` int(5) NOT NULL,
  `id_proof` varchar(50) NOT NULL,
  `booking_date` varchar(19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `checkin`, `checkout`, `r_id`, `reg_id`, `id_proof`, `booking_date`) VALUES
(5, '2021-09-16', '2021-09-17', 1, 1, 'adidas.png', '21-09-16'),
(7, '2021-09-24', '2021-09-02', 14, 0, 'Sem4_result.pdf', '21-09-29'),
(8, '2021-09-30', '2021-09-03', 0, 0, '1.jpg', '21-09-29'),
(9, '2021-09-30', '2021-09-30', 2, 0, '7.jpg', '21-09-29'),
(10, '2021-09-30', '2021-09-30', 2, 0, '7.jpg', '21-09-29'),
(11, '2021-09-30', '2021-09-30', 2, 0, '7.jpg', '21-09-29'),
(12, '2021-01-01', '2021-01-01', 4, 5, '5.jpg', '21-09-30'),
(13, '2021-01-01', '2021-01-01', 4, 5, '5.jpg', '21-09-30'),
(14, '2021-01-01', '2021-01-01', 4, 5, 'idproof/10.jpg', '21-09-30'),
(15, '2021-01-01', '2021-02-01', 2, 1, 'idproof/4.jpg', '21-10-02'),
(16, '2021-07-30', '2021-08-31', 10, 1, 'idproof/patanjali.jpg', '21-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `g_id` int(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `a_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`g_id`, `title`, `photo`, `a_id`) VALUES
(1, 'hotel background', 'gallery/1.jpg', 0),
(2, 'swiming pool', 'gallery/3.jpg', 0),
(3, 'best fast food', 'gallery/2.jpg', 0),
(5, 'Kitchen Zone', 'gallery/5.jpg', 0),
(6, 'library Zone', 'gallery/6.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `reg_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact` int(10) NOT NULL,
  `address` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`reg_id`, `name`, `email`, `password`, `contact`, `address`) VALUES
(1, 'balu', 'balu@123gmail.com', 'balu123', 1234567890, 'limbdi'),
(2, '', '', '', 0, ''),
(3, 'dhaval', 'dhaval@gmail.com', 'balu123', 1234567890, 'surendra'),
(4, 'balu', 'balu@123gmail.com', 'harsh123', 1234567890, 'limbdi'),
(5, 'harsh', 'harsh@gmail.com', 'Harsh@123', 1234567890, 'bapunagar');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `rev_id` int(5) NOT NULL,
  `msg` varchar(100) NOT NULL,
  `reg_id` int(5) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`rev_id`, `msg`, `reg_id`, `date`) VALUES
(1, 'beautiful hotel and it\'s Facility is osm!!!', 1, '2021-01-30'),
(2, 'what a facitity yehhhh....', 5, '2021-07-22'),
(3, 'good', 5, '2021-09-30'),
(4, 'very nice facility....', 5, '2021-09-30');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `r_id` int(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `rent` int(5) NOT NULL,
  `details` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`r_id`, `title`, `photo`, `type`, `rent`, `details`) VALUES
(1, 'Double Rooms', 'room/1.jpg', 'AC', 1500, 'A room assigned to two people. May have one or more beds.\r\n\r\nThe room size or area of Double Rooms are generally between 40 m² to 45 m².\r\n\r\n→ Room facilities :-\r\n-Television, electric hot water pot, refrigerator, dryer, table lamp, humidifier,\r\nbath, toilet, broadband connection (free), air conditioning.\r\n\r\n-The double rooms of approximately 22-30 sq m all have modern furnishings.\r\n The beds can be booked either as doubles or twins.\r\n We are happy to provide a cot for a charge of 1500 per night. \r\n Please book this in advance. Most of the rooms can be reached via lift and have free W-LAN.\r\n'),
(2, 'Triple Rooms', 'room/2.jpg', 'AC', 2000, 'A room that can accommodate three persons and has been fitted with three twin beds, one double bed and one twin bed or two double beds.\r\n\r\nThe room size or area of Triple Rooms are generally between 45 m² to 65 m².\r\n\r\n→ Room facilities :-\r\n-Television, electric hot water pot, refrigerator, dryer, table lamp, humidifier,\r\nbath, toilet, broadband connection (free), air conditioning.\r\n\r\nWe are happy to provide a cot for a charge of 2000 per night. \r\n Please book this in advance. Most of the rooms can be reached via lift and have free W-LAN.\r\n'),
(3, 'Queen Rooms', 'room/3.jpg', 'AC', 2500, ' A room with a queen-sized bed. May be occupied by one or more people.\r\n\r\nThe room size or area of Queen Rooms are generally between 32 m² to 50 m².\r\n\r\n→ Room facilities :-\r\n-Television, electric hot water pot, refrigerator, dryer, table lamp, humidifier,\r\nbath, toilet, broadband connection (free), air conditioning.\r\n\r\nWe are happy to provide a cot for a charge of 2500 per night. \r\n Please book this in advance. Most of the rooms can be reached via lift and have free W-LAN.\r\nThere is a Special Facility provides in this room.\r\n'),
(4, 'King Rooms ', 'room/4.jpg', 'AC', 2500, ' A room with a king-sized bed. May be occupied by one or more people.\r\n\r\nThe room size or area of King Rooms are generally between 32 m² to 50 m².\r\n\r\n→ Room facilities :-\r\n-Television, electric hot water pot, refrigerator, dryer, table lamp, humidifier,\r\nbath, toilet, broadband connection (free), air conditioning.\r\n\r\nWe are happy to provide a cot for a charge of 2500 per night. \r\n Please book this in advance. Most of the rooms can be reached via lift and have free W-LAN.\r\n\r\n'),
(5, 'Twin Rooms ', 'room/5.jpg', 'NON-AC', 1000, 'A room with two twin beds. May be occupied by one or more people.\r\n\r\nThe room size or area of Twin Rooms are generally between 32 m² to 40 m².\r\n\r\n→ Room facilities :-\r\n-Television, refrigerator, dryer, table lamp, humidifier,\r\nbath, toilet, broadband connection (free), air conditioning.\r\n\r\nWe are happy to provide a cot for a charge of 1000 per night. \r\n Please book this in advance. Most of the rooms can be reached via lift .\r\nThere is no free wifi Service in this room.\r\n\r\n6.jpg :-'),
(6, 'Hollywood Twin Rooms', 'room/6.jpg', 'AC', 3000, 'A room that can accommodate two persons with two twin beds joined together by a common headboard. Most of the budget hotels tend to provide many of these room settings which cater both couples and parties in two.\r\n\r\nThe room size or area of Hollywood Twin Rooms are generally between 32 m² to 40 m².\r\n\r\n→ Room facilities :-\r\n-Television, electric hot water pot, refrigerator, dryer, table lamp, humidifier,\r\nbath, toilet, broadband connection (free), air conditioning.\r\n\r\nWe are happy to provide a cot for a charge of 3000 per night. \r\n Please book this in advance. Most of the rooms can be reached via lift and have free W-LAN.\r\nAlso provides free internet services in this room and also provide to snack.'),
(7, 'Studio room', 'room/7.jpg', 'NON-AC', 1500, ' A room with a studio bed- a couch which can be converted into a bed. May also have an additional bed.\r\n\r\nThe room size or area of Studio room types are generally between 25 m² to 40 m².\r\n\r\n→ Room facilities :-\r\n-Television, electric hot water pot, refrigerator, dryer, table lamp, humidifier,\r\nbath, toilet, broadband connection (free), air conditioning.\r\n\r\nWe are happy to provide a cot for a charge of €6.00 per night. \r\n Please book this in advance. Most of the rooms can be reached via lift .\r\nThere is no free wifi Service in this room.'),
(8, 'Suite rooms with more Bedrooms', 'room/8.jpg', 'AC', 2500, 'A parlour or living room connected with to one or more bedrooms. (A room with one or more bedrooms and a separate living space.)\r\n\r\nThe room size or area of Suite rooms are generally between 70 m² to 100 m².\r\n\r\n→ Room facilities :-\r\n-Television, electric hot water pot, refrigerator, dryer, table lamp, humidifier,\r\nbath, toilet, broadband connection (free), air conditioning.\r\n\r\nWe are happy to provide a cot for a charge of 2500 per night. \r\n Please book this in advance. Most of the rooms can be reached via lift and have free W-LAN.'),
(9, 'President Suite Room', 'room/9.jpg', 'AC', 2500, 'The most expensive room provided by a hotel. Usually, only one president suite is available in one single hotel property. Similar to the normal suites, a president suite always has one or more bedrooms and a living space with a strong emphasis on grand in-room decoration, high-quality amenities and supplies, and tailor-made services (e.g. personal butler during the stay).\r\n\r\nThe room size or area of Presidential Suites are generally between 80 m² to 350 m².\r\n\r\n→ Room facilities :-\r\n-Television, electric hot water pot, refrigerator, dryer, table lamp, humidifier,\r\nbath, toilet, broadband connection (free), air conditioning.\r\n\r\nWe are happy to provide a cot for a charge of 2500 per night. \r\n Please book this in advance. Most of the rooms can be reached via lift and have free W-LAN.\r\n'),
(10, 'Connecting rooms', 'room/10.jpg', 'AC', 3000, 'Rooms with individual entrance doors from the outside and a connecting door between. Guests can move between rooms without going through the hallway.\r\n\r\nThe room size or area of Connecting rooms are generally between 30 m² to 50 m².\r\n\r\n→ Room facilities :-\r\n-Television, electric hot water pot, refrigerator, dryer, table lamp, humidifier,\r\nbath, toilet, broadband connection (free), air conditioning.\r\n\r\nWe are happy to provide a cot for a charge of 3000 per night. \r\n Please book this in advance. Most of the rooms can be reached via lift and have free W-LAN.'),
(11, 'Murphy Room', 'room/11.jpg', 'NON-AC', 1500, ' A room that is fitted with a sofa bed or a Murphy bed (i.e. a bed that folds out of a wall or closet) which can be transformed from a bedroom in the night time to a living room in daytime.\r\n\r\nThe room size or area of Murphy Room Types are generally between 20 m² to 40 m².\r\n\r\n→ Room facilities :-\r\n-Television, electric hot water pot, refrigerator, dryer, table lamp, humidifier,\r\nbath, toilet, broadband connection (free), air conditioning.\r\n\r\nWe are happy to provide a cot for a charge of 1500 per night. \r\n Please book this in advance. Most of the rooms can be reached via lift.\r\nThere is no wifi services in this room.'),
(12, 'Accessible Room / Disabled Room', 'room/12.jpg', 'AC', 3000, 'This room type is mainly designed for disabled guests and it is required by law that hotels must provide a certain number of accessible rooms to avoid discrimination.\r\n\r\nThe room size or area of Accessible Room Types are generally between 30 m² to 42 m².\r\n\r\n→ Room facilities :-\r\n-Television, electric hot water pot, refrigerator, dryer, table lamp, humidifier,\r\nbath, toilet, broadband connection (free), air conditioning.\r\n\r\nWe are happy to provide a cot for a charge of 3000 per night. \r\n Please book this in advance. Most of the rooms can be reached via lift and have free W-LAN.\r\n'),
(13, 'Cabana', 'room/13.jpg', 'NON-AC', 1000, 'This type of room is always adjoining to the swimming pool or have a private pool attached to the room.\r\n\r\nThe room size or area of Cabana Room Types are generally between 20 m² to 30 m².\r\n\r\n→ Room facilities :-\r\n-Television, refrigerator, dryer, table lamp, humidifier,\r\nbath, toilet, broadband connection (free), air conditioning.\r\n\r\nWe are happy to provide a cot for a charge of 1000 per night. \r\n Please book this in advance. Most of the rooms can be reached via lift.\r\nThere is no wifi services in this room.'),
(14, 'Smoking / Non-Smoking Room', 'room/14.jpg', 'NON-AC', 1000, 'Many hotels provide both smoking and non-smoking rooms for their guests. In order to minimize the effects of secondhand smoke exposure on non-smoking guests.\r\n\r\nThe room size or area of Smoking / Non-Smoking Room is generally between 30 m² to 250 m².\r\n\r\n→ Room facilities :-\r\n-Television, electric hot water pot, refrigerator, dryer, table lamp, humidifier,\r\nbath, toilet, broadband connection (free), air conditioning.\r\n\r\nWe are happy to provide a cot for a charge of 1000 per night. \r\n Please book this in advance. Most of the rooms can be reached via lift .\r\nThere is no wifi services in this room.\r\n'),
(15, 'Single Room ', 'room/15.jpg', 'AC', 1000, 'A room with the facility of single bed. It is meant for single occupancy. It has an attached bathroom, a small dressing table, a small bedside table, and a small writing table. Sometimes it has a single chair too.\r\nYou can relax and feel at home as all our single rooms are fitted with a spacious semi double bed. Some are also fitted with a desk.\r\n\r\n→ Room facilities :-\r\n-Television, refrigerator, dryer, table lamp, humidifier,\r\nbath, toilet, broadband connection (free), air conditioning.\r\n\r\nWe are happy to provide a cot for a charge of 1000 per night. \r\n Please book this in advance. Most of the rooms can be reached via lift .\r\nThere is no wifi services in this room.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`rev_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `b_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `g_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `reg_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `rev_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `r_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
