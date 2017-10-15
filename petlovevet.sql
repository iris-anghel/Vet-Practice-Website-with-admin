-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2017 at 10:55 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petlovevet`
--

-- --------------------------------------------------------

--
-- Table structure for table `owner_info`
--

CREATE TABLE `owner_info` (
  `id` int(11) NOT NULL,
  `owner_last_name` varchar(40) NOT NULL,
  `owner_first_name` varchar(40) NOT NULL,
  `owner_address` varchar(100) NOT NULL,
  `owner_phone` varchar(20) NOT NULL,
  `owner_email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `owner_info`
--

INSERT INTO `owner_info` (`id`, `owner_last_name`, `owner_first_name`, `owner_address`, `owner_phone`, `owner_email`) VALUES
(1, 'Anghel', 'Iris', 'Str Marasesti nr. 9 Bistrita', '0741249193', 'anghel.iris.bianca@gmail.com'),
(2, 'Onul', 'Adriana', 'Str Axente Sever nr. 1 ap. 24', '0745669887', 'adriana_o@yahoo.com'),
(4, 'Pop', 'Daniel', 'Al Plopilor nr 6 ap 2', '0753115687', 'pop_daniel@gmail.com'),
(5, 'Lup', 'Marius', 'Int Violetelor nr 1 ap 12', '0732558124', 'marius_lup83@yahoo.com'),
(6, 'Veres', 'Dana', 'Str Panait Cerna nr6 bl 3 ap36', '0752448556', 'me_dana_v@yahoo.com'),
(7, 'Craciun', 'Marian', 'Str. Dragos Voda bl. 2 sc. C ap. 24', '0736998742', 'marian_c@gmail.com'),
(8, 'Pop', 'Diana', 'Str. Iosif Vulcan bl3 scA ap8', '0758991442', 'dia_pop_78@yahoo.com'),
(9, 'Iuga', 'David', 'Aleea Tihutei nr14', '0765445665', 'iugadavid34@gmail.com'),
(10, 'Moldovan', 'Alin', 'Str Marasti nr3', '0745664124', 'moldo_alin44@gmail.com'),
(11, 'Lupsa', 'Mirela', 'Str. Sucevei bl. 13 sc. D ap. 34', '0745874654', 'mirela_l41@yahoo.com'),
(12, 'Borgovan', 'Iustin', 'Al. Margaretelor bl.1 sc.B ap.20', '0741255145', 'b.iustin33@gmail.com'),
(13, 'Popescu', 'Ana-Maria', 'Bld. Decebal nr.24', '0745884124', 'ana.maria.pop21@gmail.com'),
(14, 'Costescu', 'Cristina', 'Al Parcului nr. 4', '0751455654', 'cris_costescu@gmail.com'),
(15, 'Crisan', 'Andrei', 'Str. Carpati nr. 6', '0752683333', 'andrei-crisan11@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `pet_info`
--

CREATE TABLE `pet_info` (
  `id` int(11) NOT NULL,
  `pet_name` varchar(30) NOT NULL,
  `pet_dob` date NOT NULL,
  `pet_species` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `pet_breed` varchar(40) NOT NULL,
  `cip_data` varchar(40) DEFAULT NULL,
  `steryl` varchar(10) NOT NULL,
  `pet_pass` varchar(40) DEFAULT NULL,
  `id_owner` int(11) NOT NULL,
  `obs` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pet_info`
--

INSERT INTO `pet_info` (`id`, `pet_name`, `pet_dob`, `pet_species`, `gender`, `pet_breed`, `cip_data`, `steryl`, `pet_pass`, `id_owner`, `obs`) VALUES
(6, 'test', '2014-02-05', 'd', 'masculin', 'd', 'd', 'da', 'd', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `vets`
--

CREATE TABLE `vets` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vets`
--

INSERT INTO `vets` (`id`, `username`, `email`, `password`) VALUES
(2, 'Denisa', 'denisa@gmail.com', '$2y$10$juBs3bhskcAPRS/MT7HCauyC85PdT52E8MFildxXXyaIZnjinb3OW'),
(3, 'Paula', 'paula@gmail.com', '$2y$10$CTzqwQghI9gJuuH2XAlP0OQXT.UVyUoB73HUo0AUiBgM1D4EM3pJG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `owner_info`
--
ALTER TABLE `owner_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pet_info`
--
ALTER TABLE `pet_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_owner` (`id_owner`);

--
-- Indexes for table `vets`
--
ALTER TABLE `vets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `owner_info`
--
ALTER TABLE `owner_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `pet_info`
--
ALTER TABLE `pet_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `vets`
--
ALTER TABLE `vets`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pet_info`
--
ALTER TABLE `pet_info`
  ADD CONSTRAINT `pets_ibfk_1` FOREIGN KEY (`id_owner`) REFERENCES `owner_info` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
