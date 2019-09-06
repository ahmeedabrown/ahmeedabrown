-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2019 at 08:52 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fos`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `code` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `username`, `password`, `email`, `code`, `date`) VALUES
(13, 'mowla', '547eb77fed29560dac0f04c8408ba174', 'mowla@gmail.com', 'QPGIOV', '2019-09-04 11:03:31'),
(14, 'ahmedAA', '32aa2fd87338e241978c48ab319641bc', 'ahmed@gmail.com', 'QFE6ZM', '2019-09-04 11:06:19');

-- --------------------------------------------------------

--
-- Table structure for table `admin_codes`
--

CREATE TABLE `admin_codes` (
  `id` int(222) NOT NULL,
  `codes` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_codes`
--

INSERT INTO `admin_codes` (`id`, `codes`) VALUES
(2, 'QFE6ZM'),
(3, 'QMZR92'),
(4, 'QPGIOV'),
(5, 'QSTE52'),
(6, 'QMTZ2J');

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `d_id` int(222) NOT NULL,
  `rs_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `slogan` varchar(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`d_id`, `rs_id`, `title`, `slogan`, `price`, `img`) VALUES
(18, 55, 'shuwarma', 'meat shuwarma,chicken shuwarma,fish shuwarma', '4.00', '5d2b54b2c27dc.jpg'),
(19, 54, 'burger', 'meat burger,vegetable salad', '3.00', '5d2b56659cfee.jpg'),
(20, 55, 'mini pizza', 'small size pizza', '3.00', '5d2b582de8cc9.jpg'),
(21, 55, 'chicken', 'full chicken,broast,chipz', '12.00', '5d2b59332e859.jpg'),
(22, 56, 'saldato rice', 'briyani rice,saldato rice,suqaar', '2.00', '5d2b59aa44af7.jpg'),
(23, 57, 'basil pasta', 'italian pasta,spagheti', '5.00', '5d2b5a841c804.jpg'),
(24, 57, 'macarooni sphagheti', 'basta ,spagheti,macarooni', '2.00', '5d2b5ac08eab7.jpg'),
(25, 58, 'chicken grill', 'chicken,spiced chicken', '6.00', '5d2b5d1a66f3c.jpg'),
(26, 58, 'chicken shuwarma', 'chicken,shuwarma', '3.00', '5d2b5ef3c1752.jpg'),
(27, 59, 'large pizza', 'pizza,full,1free', '20.00', '5d2b61b526715.jpg'),
(28, 60, 'mano juice', 'mango,juice', '1.00', '5d2b64a35d3a5.jpg'),
(29, 60, 'lemo juice', 'juice,lemon', '1.00', '5d2b651ca137b.jpg'),
(30, 60, 'cocktail drink', 'cocktail,juice', '2.00', '5d2b654e0c136.jpg'),
(31, 60, 'milk shake', 'milk shake,different flavors', '2.00', '5d2b6587bf4f6.jpg'),
(32, 60, 'water-melon juice', 'water melon,fresh fruit juice', '1.00', '5d2b65dbda808.jpg'),
(33, 57, 'macarooni saldato', 'macarooni,spagheti', '3.00', '5d2b673404b61.jpg'),
(34, 57, 'italian spagheti', 'food ,pasta,italian', '4.00', '5d2b678a3b556.jpg'),
(35, 58, 'chicken Broast', 'chicken,broast,delicious', '2.50', '5d2b681e02ade.jpg'),
(36, 58, 'fish burger', 'fish,burger', '2.00', '5d2b685340e9f.jpg'),
(37, 54, 'humburger', 'beaf,bread,humberger', '3.00', '5d2b68985edf9.jpg'),
(38, 59, 'mini pizza', 'small size pizza', '3.00', '5d2b694e1ed92.jpg'),
(39, 59, 'midium size pizza', 'half pizza', '6.00', '5d2b69a635a01.jpg'),
(40, 54, 'chicken and chips', 'chicken with chips', '4.00', '5d2b69e99f597.jpg'),
(41, 54, 'canjeero', 'somali cuisine canjeero', '1.00', '5d2b6ac048791.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `remark`
--

CREATE TABLE `remark` (
  `id` int(11) NOT NULL,
  `frm_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` mediumtext NOT NULL,
  `remarkDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remark`
--

INSERT INTO `remark` (`id`, `frm_id`, `status`, `remark`, `remarkDate`) VALUES
(62, 32, 'in process', 'hi', '2018-04-18 17:35:52'),
(63, 32, 'closed', 'cc', '2018-04-18 17:36:46'),
(64, 32, 'in process', 'fff', '2018-04-18 18:01:37'),
(65, 32, 'closed', 'its delv', '2018-04-18 18:08:55'),
(66, 34, 'in process', 'on a way', '2018-04-18 18:56:32'),
(67, 35, 'closed', 'ok', '2018-04-18 18:59:08'),
(68, 37, 'in process', 'on the way!', '2018-04-18 19:50:06'),
(69, 37, 'rejected', 'if admin cancel for any reason this box is for remark only for buter perposes', '2018-04-18 19:51:19'),
(70, 37, 'closed', 'delivered success', '2018-04-18 19:51:50'),
(71, 48, 'in process', 'on the way', '2019-07-14 14:04:08'),
(72, 53, 'in process', 'will be delivered soon', '2019-07-16 08:44:20'),
(73, 53, 'in process', 'being prepared..', '2019-07-25 03:26:27'),
(74, 54, 'in process', 'Thank you for your service', '2019-07-25 03:28:48'),
(75, 56, 'closed', 'order cancelled by manager', '2019-07-25 03:31:17'),
(76, 57, 'rejected', 'rejected .wrong location .please provide reliable location services', '2019-07-25 03:51:49'),
(77, 71, 'in process', 'cooking..', '2019-07-29 12:07:20'),
(78, 72, 'in process', 'Thank you For your service..', '2019-07-29 12:08:48'),
(79, 73, 'in process', 'Thank you for your servive', '2019-07-29 12:09:56'),
(80, 73, 'closed', 'try another time..', '2019-07-29 12:10:36'),
(81, 73, 'rejected', 'rejected', '2019-07-29 12:14:12'),
(82, 71, 'in process', 'Thank you for your service.......', '2019-07-29 12:15:25'),
(83, 71, 'rejected', 'cancel', '2019-07-29 12:16:53'),
(84, 72, 'in process', 'on the way', '2019-07-29 12:17:42'),
(85, 72, 'in process', 'done...', '2019-07-29 12:18:01'),
(86, 71, 'in process', 'de', '2019-07-29 12:25:02'),
(87, 71, 'closed', 'DELIVERED', '2019-07-29 12:28:00'),
(88, 71, 'closed', 'done.....', '2019-07-29 12:29:30'),
(89, 71, 'Delivered', 'done', '2019-07-29 12:30:35'),
(90, 71, 'closed', 'done........', '2019-07-29 12:33:35'),
(91, 74, 'in process', 'wadada ayu kusoo jiraa', '2019-08-04 06:52:53'),
(92, 76, 'in process', 'on the way...', '2019-08-17 10:47:11'),
(93, 78, 'in process', 'meal being prepared ...reach to u in 15 minutes', '2019-09-01 05:47:50'),
(94, 79, 'closed', 'meal delivered. thanks for reaching out. see you later', '2019-09-01 05:48:47'),
(95, 80, 'rejected', 'meal cancelled by administrator. invalid user information .', '2019-09-01 05:49:48');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `rs_id` int(222) NOT NULL,
  `c_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `url` varchar(222) NOT NULL,
  `o_hr` varchar(222) NOT NULL,
  `c_hr` varchar(222) NOT NULL,
  `o_days` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`rs_id`, `c_id`, `title`, `email`, `phone`, `url`, `o_hr`, `c_hr`, `o_days`, `address`, `image`, `date`) VALUES
(54, 5, 'AL Baik resturant', 'albaik@gmail.com', '(+123)', 'http://www.albaik.com', '7am', '8pm', '24hr-x7', '  Mogadisho Near Bera nabada ,peace Garden  ', '5d2d91ea69a6b.jpg', '2019-07-16 08:59:22'),
(55, 5, 'Cadaani Chicken and Chips', 'cadaani@gmail.com', '6 1257570', 'www.cadaani.com', '7am', '8pm', '24hr-x7', '   mogadisho,taleex street   ', '5d2d9197cbb54.jpg', '2019-07-16 08:57:59'),
(56, 6, 'zeytuun resturant', 'zeytun@gmail.com', '61 6666024', 'zeytuunpalace.com', '7am', '8pm', 'sat-tue', 'bar ubax road,next to salam bank', '5d2b4b65bcbe2.jpg', '2019-07-14 15:33:57'),
(57, 6, 'Spagheti House', 'spagheti@gmail.com', '61 6660030', 'www.spaghetihouse.com', '7am', '8pm', 'mon-sat', ' digfer rd,mogadisho ', '5d2b66cb02e73.jpg', '2019-07-14 17:30:51'),
(58, 7, 'Kulan chicken and chips', 'kulan@gmail.com', '61000000', 'www.kulan.com', '7am', '8pm', 'sat-sat', 'mogadisho ,digfer rd', '5d2b5cd55eb0a.jpg', '2019-07-14 16:48:21'),
(59, 8, 'Pizza out', 'pizzaout@gmail.com', ' 61 7696589', 'www.pizzout.com', '7am', '8pm', '24hr-x7', '  calikamin, Mogadishu  ', '5d2b622922fc6.jpg', '2019-07-14 17:11:05'),
(60, 9, 'pizza House', 'pizzahouse@gmail.com', '61 2261122', 'www.pizzahouse.so', '7am', '11am', 'sat-sat', 'digfer rd,near posh treats', '5d2b646d5a55b.jpg', '2019-07-14 17:20:45');

-- --------------------------------------------------------

--
-- Table structure for table `res_category`
--

CREATE TABLE `res_category` (
  `c_id` int(222) NOT NULL,
  `c_name` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res_category`
--

INSERT INTO `res_category` (`c_id`, `c_name`, `date`) VALUES
(5, 'Breakfast', '2019-07-14 14:11:33'),
(6, 'lunch', '2019-07-14 14:13:55'),
(7, 'dinner', '2019-07-14 14:12:44'),
(8, 'pizza', '2019-07-14 16:23:37'),
(9, 'drinks', '2019-07-14 14:14:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `f_name` varchar(222) NOT NULL,
  `l_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `status` int(222) NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `username`, `f_name`, `l_name`, `email`, `phone`, `password`, `address`, `status`, `date`) VALUES
(41, 'AhmedAA', 'ahmed', 'abdalla', 'ahmedAA@gmail.com', '0617070580', '32aa2fd87338e241978c48ab319641bc', 'Xamar', 1, '2019-08-31 05:24:37'),
(43, 'mowla', 'mowlid', 'yusuf', 'mowla@gmail.com', '0618810967', '547eb77fed29560dac0f04c8408ba174', 'madina', 1, '2019-09-04 10:36:09'),
(44, 'jagafa', 'abdullahi', 'ahmed', 'jagafa@gmail.com', '0612909011', 'afd749904e3645e9c72ddce8aab0933f', 'darjiinka', 1, '2019-09-04 10:37:57'),
(45, 'zuraj', 'zakaria', 'zuraj', 'zuraj@gmail.com', '0617083166', 'cb0803f64d880a5a02d83673ad07cbf9', 'madina', 1, '2019-09-04 10:39:35'),
(46, 'mascuud', 'mascuud', 'abdisalan', 'mascuud@gmail.com', '0615001409', '3bd8faede0616cd81ec36e8b2c079524', 'madina', 1, '2019-09-04 10:47:07');

-- --------------------------------------------------------

--
-- Table structure for table `users_orders`
--

CREATE TABLE `users_orders` (
  `o_id` int(222) NOT NULL,
  `u_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `quantity` int(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(222) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_orders`
--

INSERT INTO `users_orders` (`o_id`, `u_id`, `title`, `quantity`, `price`, `status`, `date`) VALUES
(82, 41, 'burger', 1, '3.00', NULL, '2019-09-04 15:47:44'),
(83, 41, 'humburger', 1, '3.00', NULL, '2019-09-04 15:47:44'),
(84, 41, 'chicken and chips', 1, '4.00', NULL, '2019-09-04 15:47:44'),
(85, 43, 'chicken', 2, '12.00', NULL, '2019-09-04 16:09:49'),
(86, 43, 'shuwarma', 1, '4.00', NULL, '2019-09-04 16:09:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `admin_codes`
--
ALTER TABLE `admin_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `remark`
--
ALTER TABLE `remark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`rs_id`);

--
-- Indexes for table `res_category`
--
ALTER TABLE `res_category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `users_orders`
--
ALTER TABLE `users_orders`
  ADD PRIMARY KEY (`o_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `admin_codes`
--
ALTER TABLE `admin_codes`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `d_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `remark`
--
ALTER TABLE `remark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `rs_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `res_category`
--
ALTER TABLE `res_category`
  MODIFY `c_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users_orders`
--
ALTER TABLE `users_orders`
  MODIFY `o_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
