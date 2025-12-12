-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2025 at 08:34 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parsnashr`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `headabout` varchar(50) NOT NULL,
  `about` varchar(255) NOT NULL,
  `file` varchar(50) NOT NULL,
  `moreabout` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`headabout`, `about`, `file`, `moreabout`, `author`) VALUES
('test', 'test', '', '', ''),
('test', 'test', '', '', ''),
('test2', 'test2', 'Screenshot 2025-10-14 230603.png', '', ''),
('ewrq', 'wqre', 'Screenshot 2025-10-14 230603.png', '', ''),
('ایران نابود شد', 'اینم دلیل', 'Circle.png', 'ایران نابود شد چون مردم نابودش کردن', ''),
('اولین تست برای نشان دادن یوزرنیم بالای پست', 'ببینیم که چی میشه', '', '', ''),
('تست1 خیلی خوب پیش نرفت', 'پس اینم از تست2', 'WIN_20251127_00_35_31_Pro.jpg', 'منسشبت\r\nّ«»ـُِّ»«ـَّ,[]ٌٍ؛ريالـِّآُ\r\nِ»«ّـَّۀ&ٌٍ]؛ّآ', 'parsnashr');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `headabout` varchar(50) NOT NULL,
  `about` varchar(255) NOT NULL,
  `file` varchar(50) NOT NULL,
  `details` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`headabout`, `about`, `file`, `details`, `author`) VALUES
('test1', 'test1', 'qr.png', '', ''),
('تست', 'آقا این یه تستی هست', 'qr.png', 'آقا این یه تستی هستآقا این یه تستی هستآقا این یه تستی هستآقا این یه تستی هستآقا این یه تستی هستآقا این یه تستی هستآقا این یه تستی هستآقا این یه تستی هستآقا این یه تستی هستآقا این یه تستی هستآقا این یه تستی هستآقا این یه تستی هستآقا این یه تستی هستآقا این ', ''),
('تست2', 'این تست2 هست', 'qr.png', 'این تست 2 هست\r\nبرای اطلاعات و موارد بیشتر و توظیحات بیشتر و......\r\nمن اینجا همچین چیز هایی رو مینویسنم', ''),
('تست 1 برای اینکه ببینیم که یوزر نیم بالای پست میاد', 'بریم که ببینیم', 'WIN_20251127_00_35_31_Pro.jpg', 'با کدایی که کپی کردیم میخوایم ببینیم که کار میکنه یا نه؟', '<br />\r\n<b>Warning</b>:  Undefined variable $usern');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `surname`, `lastname`, `email`, `password`, `type`) VALUES
('', '', '', '', '$2y$10$VIdwgXB0iGCv0Eip6eZiHOgUbnBXA8WBzErH3JiD0f.1WNR29Arnq', 0),
('', '', '', '', '$2y$10$DdvmBBC.vvPw/SwgndDG.OREiY0LpGod9pyRSPsu7JP2gl5CmKeUW', 0),
('', '', '', '', '$2y$10$TXQKr9PO52GqTldpDByBCeAckPiIHEgJG0MHu9IDU74g9x4ypOFJq', 0),
('', '', '', '', '', 0),
('parham', 'parham', 'taghipour', 'parhamtaghipour9@gmail.com', 'Parham1391', 0),
('asdfasdfsd', 'sdfsadf', '', 'sdfsdfsadf@hjdgf.com', '12345678', 0),
('mmdparham', 'parham', 'taghipour', 'parhamtaghipour9@gmail.com', 'Parham1391', 0),
('adminparham', 'admin', 'admin', 'admin@admin.com', '$2y$10$Noik971HcmxZ4/kUANdpZuTpe4u5fUAly.lwFKc91GgUL8jKHYldK', 1),
('ali123', 'ali', 'ali', 'asfsadf@jkdf.com', '$2y$10$xNwkhyf9Q2Ta4Ak5reYjJ..AoIe4JJcYNxp8YIY5UmRCdHjIQm4Oq', 0),
('test1234', 'test', '', 'test@test.com', '$2y$10$OddtnBjLFG4jf2crq5qSWub1chsvepfCQf4QW01Feqep/MynNa4KS', 0),
('test123', 'test', '', 'testtest@293874cpjdfkml.cpm', 'Parham1391', 0),
('parsnashr', 'parsnashr', 'parsnashr', 'parhamtaghipour9@gmail.com', 'Parham1391', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
