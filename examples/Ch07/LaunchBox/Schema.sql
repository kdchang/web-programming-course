-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Oct 16, 2014 at 06:10 AM
-- Server version: 5.5.38
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `launch_box`
--

-- --------------------------------------------------------

--
-- Table structure for table `meal_info`
--

CREATE TABLE `meal_info` (
`meal_id` int(30) unsigned NOT NULL,
  `meal_name` varchar(30) NOT NULL,
  `meal_price` int(12) unsigned NOT NULL,
  `meal_content` text NOT NULL,
  `meal_image` varchar(40) NOT NULL,
  `meal_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `meal_info`
--

INSERT INTO `meal_info` (`meal_id`, `meal_name`, `meal_price`, `meal_content`, `meal_image`, `meal_time`) VALUES
(1, '好吃便當', 200, '好吃又營養，好吃好吃好吃', 'logo.png', '0000-00-00 00:00:00'),
(4, '憤怒鳥便當', 100, '《憤怒鳥》是芬蘭公司推出的一款遊戲。在遊戲中玩家控制一架彈弓發射無翅小鳥來打擊建築物和小豬，並以摧毀關中所有的小豬為最終目的。', 'assets/uploads/angry_bird.jpg', '2014-10-15 20:45:02'),
(5, '鐵路懷舊好吃便當', 100, '真好吃真好吃，沒用地溝油，健康又安心', 'assets/uploads/rail_lunch.jpg', '2014-10-15 20:48:22'),
(6, '憤怒鳥便當', 200, '《憤怒鳥》是芬蘭公司推出的一款遊戲。在遊戲中玩家控制一架彈弓發射無翅小鳥來打擊建築物和小豬，並以摧毀關中所有的小豬為最終目的。', 'assets/uploads/angry_bird.jpg', '2014-10-15 20:50:33');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
`user_id` int(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_password` varchar(40) NOT NULL,
  `user_activated` tinytext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`user_id`, `user_name`, `user_email`, `user_password`, `user_activated`) VALUES
(1, 'admin', 'founder@launchbox.com', 'hereisadmin', '1'),
(14, 'KD', 'kdchang@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '1');

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
`order_id` int(30) NOT NULL,
  `meal_id` int(30) NOT NULL,
  `order_username` varchar(20) NOT NULL,
  `order_phone` varchar(20) NOT NULL,
  `order_address` varchar(40) NOT NULL,
  `order_time` datetime NOT NULL,
  `order_count` int(12) NOT NULL,
  `order_total_price` int(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_info`
--

INSERT INTO `order_info` (`order_id`, `meal_id`, `order_username`, `order_phone`, `order_address`, `order_time`, `order_count`, `order_total_price`) VALUES
(2, 6, '小朧女', '25317897', '終南山活死人木', '2014-10-16 05:22:11', 1, 200),
(6, 6, '洪九公', '0934789568', '華山', '2014-10-16 05:24:01', 5, 1000),
(8, 6, '黃戎', '0934789568', '華山', '2014-10-16 05:24:37', 1, 200),
(9, 6, '田駁胱', '09457896', '群玉樓', '2014-10-16 05:28:57', 5, 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meal_info`
--
ALTER TABLE `meal_info`
 ADD PRIMARY KEY (`meal_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `user_name` (`user_name`), ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
 ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meal_info`
--
ALTER TABLE `meal_info`
MODIFY `meal_id` int(30) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `user_id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `order_info`
--
ALTER TABLE `order_info`
MODIFY `order_id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;