-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
<<<<<<< HEAD
-- Generation Time: Jan 30, 2019 at 04:12 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0
=======
-- Generation Time: Jan 30, 2019 at 11:26 AM
-- Server version: 5.7.25-0ubuntu0.16.04.2
-- PHP Version: 7.2.14-1+ubuntu16.04.1+deb.sury.org+1
>>>>>>> 48d6367c980c99adbc44c61abcb9f5865700523e

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `video_uploader`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'ledle', 'ledle'),
<<<<<<< HEAD
(2, 'leon', 'leon');
=======
(2, 'leon', 'leon'),
(69, 'admin', 'admin');
>>>>>>> 48d6367c980c99adbc44c61abcb9f5865700523e

-- --------------------------------------------------------

--
-- Table structure for table `video_training`
--

CREATE TABLE `video_training` (
  `id_video` int(11) NOT NULL,
  `nama_video` varchar(50) NOT NULL,
  `referensi_video` varchar(100) NOT NULL,
  `url_video` varchar(666) NOT NULL,
  `status_aktif` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_training`
--

INSERT INTO `video_training` (`id_video`, `nama_video`, `referensi_video`, `url_video`, `status_aktif`) VALUES
<<<<<<< HEAD
(9, 'Code Igniter Tutorial', 'code_igniter_tutorial', 'http://localhostvideos/video_5c50bf49446a73.86165117.mp4', 'active');
=======
(29, 'a jh jh hh 11', 'a_jh_jh_hh_11', 'http://localhost/video_uploader/videos/28.mp4', 'active'),
(30, 'coba aja deh', 'coba_aja_deh', 'http://localhost/video_uploader/videos/30.mp4', 'inactive');
>>>>>>> 48d6367c980c99adbc44c61abcb9f5865700523e

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `video_training`
--
ALTER TABLE `video_training`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
<<<<<<< HEAD
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
=======
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
>>>>>>> 48d6367c980c99adbc44c61abcb9f5865700523e

--
-- AUTO_INCREMENT for table `video_training`
--
ALTER TABLE `video_training`
<<<<<<< HEAD
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
=======
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
>>>>>>> 48d6367c980c99adbc44c61abcb9f5865700523e
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
