-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2022 at 04:41 AM
-- Server version: 10.3.15-MariaDB
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(101) NOT NULL,
  `a_name` varchar(100) NOT NULL,
  `a_email` varchar(100) NOT NULL,
  `a_password` varchar(100) NOT NULL,
  `a_image` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_email`, `a_password`, `a_image`) VALUES
(1, 'Gaurav', 'gauravlchavada@gmail.com', '123456', 'uploads/user_jack.jpg'),
(2, 'Bhrugurajsinh', 'bhruguraj@gmail.com', '121212', '');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(5) NOT NULL,
  `cart_name` varchar(100) NOT NULL,
  `cart_list` varchar(1000) NOT NULL,
  `cart_total` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `cart_name`, `cart_list`, `cart_total`) VALUES
(1, 'Gaurav', 'Call Of Duty: Warzon', 'Free'),
(2, 'Gaurav', 'Minecraft', '800'),
(3, 'Gaurav', 'Shenmue 2', '500');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(100) NOT NULL,
  `c_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`) VALUES
(1, 'Action'),
(2, 'Battle Royale'),
(3, 'Racing'),
(4, 'Free World'),
(5, 'FPS'),
(6, 'Adventure'),
(7, 'RPG'),
(8, 'Shooter'),
(9, 'Survival'),
(10, 'Story Mode'),
(11, 'Sports'),
(12, 'Open World'),
(13, 'Casual');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(100) NOT NULL,
  `f_name` varchar(200) NOT NULL,
  `f_email` varchar(200) NOT NULL,
  `f_phone` varchar(200) NOT NULL,
  `f_feedback` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `f_name`, `f_email`, `f_phone`, `f_feedback`) VALUES
(4, 'Gaurav', 'gaurav@gmail.com', '7972883204', 'ha moj ha \r\njabari website banayavi...              '),
(5, 'Smeet', 'smeetparmar@gmail.com', '123456789', '  Bro ek shoutout dedo                      ');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(15) NOT NULL,
  `p_category` varchar(20) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_image` varchar(50) NOT NULL,
  `p_dis` varchar(500) NOT NULL,
  `p_price` varchar(20) NOT NULL,
  `p_download` varchar(20000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_category`, `p_name`, `p_image`, `p_dis`, `p_price`, `p_download`) VALUES
(15, 'Adventure', 'Halo Infinite', 'uploads/AC.jpg', ' RECENT REVIEWS: Mixed (4,522) ALL REVIEWS: Mostly Positive (132,727) RELEASE DATE: 15 Nov, 2021 DEVELOPER: 343 Industries PUBLISHER: Xbox Game Studios Popular user-defined tags for this product: FPS Free to Play Multiplayer Action Shooter +', '0', ''),
(16, 'Open World', 'Minecraft', 'uploads/AC1.jpg', 'Explore infinite worlds and build everything from the simplest of homes to the grandest of castles. Play in creative mode with unlimited resources or mine deep into the world in survival mode, crafting weapons and armor to fend off dangerous mobs. Create, explore and survive alone or with friends on mobile devices or Windows 10.', '800', ''),
(17, 'Battle Royale', 'Call Of Duty: Warzone', 'uploads/AC2.png', 'Trouble is brewing deep beneath Caldera. Butcher has discovered once-secret laboratories where Nebula V bombs have been in production with the intent of wiping various metropolises off the map. Season Two of Call of DutyÂ®: Warzoneâ„¢ unlocks the Search and Deploy Event, where players are tasked with taking out Armored Transport trucks while infiltrating Chemical Research Laboratories before taking siege of the Chemical Factory. Take advantage of the Redeploy Balloon around Caldera to redeploy f', '0', ''),
(18, 'Action', 'The Witcher : Wild Hunt', 'uploads/AC3.jpg', 'As war rages on throughout the Northern Realms, you take on the greatest contract of your life â€” tracking down the Child of Prophecy, a living weapon that can alter the shape of the world.', '1000', ''),
(19, 'Free World', 'Batman : Arkham City', 'uploads/AC4.jpg', 'Get Batman: Arkham City and all DLC for one low price with the release of the GOTY Edition!', '551', ''),
(20, 'Action', 'CS:GO', 'uploads/AC5.jpg', 'Counter-Strike: Global Offensive (CS: GO) expands upon the team-based action gameplay that it pioneered when it was launched 19 years ago. CS: GO features new maps, characters, weapons, and game modes, and delivers updated versions of the classic CS content (de_dust2, etc.).', '0', ''),
(21, 'Action', 'Mass Effect ', 'uploads/Live-1.jpg', 'Take command of the Normandy, assemble your crew, and prepare for an unforgettable adventure in the highly acclaimed series.', '500', ''),
(22, 'Action', 'Star Wars : Battlefront', 'uploads/Live-2.jpg', 'Put your mastery of the blaster, lightsaber, and the Force to the test online and offline in STAR WARSâ„¢ Battlefrontâ„¢ II: Celebration Edition', '800', ''),
(23, 'Free World', 'Shenmue 2', 'uploads/Live-3.jpg', 'SEGAÂ®â€™s most requested re-release of all time finally comes to a new generation. Shenmue delivers an epic story of revenge within a unique open world that is still unrivalled in depth and detail. Return to the epic saga that defined modern gaming. The saga beginsâ€¦again.', '500', ''),
(24, 'Casual', 'Among US', 'uploads/Live-4.jpg', 'Play with 4-15 players online or via local WiFi as you attempt to prepare your spaceship for departure, but beware as one or more random players among the Crew are Impostors bent on killing everyone!', '151', ''),
(25, 'Action', 'Tekken 7', 'uploads/Live-5.jpg', 'Discover the epic conclusion of the long-time clan warfare between members of the Mishima family. Powered by Unreal Engine 4, the legendary fighting game franchise fights back with stunning story-driven cinematic battles and intense duels that can be enjoyed with friends and rivals.', '0', ''),
(26, 'Action', 'RUST', 'uploads/Live-6.jpg', 'The only aim in Rust is to survive. Everything wants you to die - the islandâ€™s wildlife and other inhabitants, the environment, other survivors. Do whatever it takes to last another night', '880', ''),
(29, 'Action', 'Far Cry 6 ', 'uploads/Far_cry_6_cover.jpg', 'Dive into the gritty world of a modern-day guerrilla revolution to liberate a nation from its oppressive dictators.', '800', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `dname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `dname`, `email`, `password`) VALUES
(1, 'Gaurav', 'Chavada', 'Daddy', 'gauravlchavada@gmail.com', '123Daddy.456'),
(3, 'Gaurav', 'Chavada', 'Jack', 'gaurav@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `w_id` int(5) NOT NULL,
  `w_u_name` varchar(5000) NOT NULL,
  `w_productlist` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`w_id`, `w_u_name`, `w_productlist`) VALUES
(1, 'gaurav@gmail.com', '15'),
(5, 'gaurav@gmail.com', 'Batman : Arkham City'),
(25, 'gaurav@gmail.com', 'Halo Infinite'),
(30, 'gauravlchavada@gmail.com', 'Minecraft'),
(31, 'gauravlchavada@gmail.com', 'Halo Infinite'),
(32, 'gauravlchavada@gmail.com', 'The Witcher : Wild H'),
(33, 'gaurav@gmail.com', 'Call Of Duty: Warzon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`w_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(101) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `w_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
