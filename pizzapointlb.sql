-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2024 at 10:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizzapointlb`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` varchar(50) NOT NULL,
  `imgname` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `imgname`, `title`, `price`, `description`) VALUES
('afirst', 'cheese.webp', 'Cheese Pizaa', '10$', 'Pizza cheese encompasses several varieties and types of cheeses and dairy products that are designed and manufactured for use specifically on pizza'),
('bsecond', 'vegeterian.jpg', 'Veggie Pizza', '9$', 'Classic Veggie Pizza with dough made from scratch, tomato sauce, mushrooms, peppers, olives and of course, cheese. Loads of cheese.'),
('cthird', 'subreme.webp', 'Subreme Pizza', '12$', 'a pizza with a smattering of pepperoni, sausage, onions, and peppers, or that list can be amended to include mushrooms, pork, beef, olives, and more.'),
('dfourth', 'thework.webp', 'TheWork Pizza', '15$', 'a pizza with a smattering of pepperoni, sausage, onions, and peppers, or that list can be amended to include mushrooms, pork, beef, olives, and more.'),
('efifth', 'tunasalad.jpeg', 'Tuna Salad ', '7$', 'Tuna salad is a light and fresh comfort food classic. Made with a few simple ingredients such as canned tuna, mayonnaise, onion and celery');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `imgname` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`imgname`, `section`) VALUES
('place1.jpg', 'section1'),
('place2.jpg', 'section2'),
('place3.jpg', 'section3'),
('place4.jpg', 'section4');

-- --------------------------------------------------------

--
-- Table structure for table `plates`
--

CREATE TABLE `plates` (
  `id` varchar(100) NOT NULL,
  `imgname` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plates`
--

INSERT INTO `plates` (`id`, `imgname`, `title`, `description`) VALUES
('plates1', 'spaghetti.webp', 'Italian spaghetti ', ' The spaghetti is neatly twirled into a nest and topped with a rich, vibrant tomato sauce that coats'),
('plates2', 'sapghetti1.jpg', ' spaghetti Bolognese', 'The spaghetti is generously coated in a rich meat sauce, which is seasoned to perfection and speckle'),
('plates3', 'spaghetti2.webp', ' spaghetti with marinara sauce. ', 'The marinara sauce is vibrant red, indicating its fresh tomato base, and is enhanced with finely cho'),
('plates4', 'vegnpasta.webp', 'vegan-Pasta', 'Our Vegan Pasta features tender, al dente spaghetti made from organic durum wheat, ensuring a perfec'),
('plates5', 'pasta-bowls.jpg', 'Classic Spaghetti Marinara', ' Each bowl is a celebration of authentic Italian flavors, thoughtfully crafted to provide a satisfyi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
