-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2017 at 05:58 PM
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
(11, 'Lupsa', 'Mirela', 'Str. Sucevei bl. 13 sc. D ap. 34', '0745874654', 'mirela_l41@yahoo.com');

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
(6, 'Disco', '2016-04-02', 'caine', 'masculin', 'comuna', '6420099000281318', 'da', 'B8252186', 1, ''),
(10, 'Tito', '2004-09-20', 'pisica', 'masculin', 'comuna', '', 'da', 'B2547896', 0, 'necesita 3 persoane la injectii'),
(11, 'Mylo', '2013-09-05', 'caine', 'masculin', 'Bichon maltez', '5006609935687252', 'da', 'B7413896', 0, ''),
(12, 'Cuba', '2011-02-05', 'caine', 'feminin', 'Amstaff', '6120099010281314', 'da', 'B1443886', 0, ''),
(13, 'Lisa', '2009-04-05', 'caine', 'masculin', 'West Highland terrier', '5320198010281314', 'da', 'B7895584', 0, 'alergie la penicilina');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `pet_info`
--
ALTER TABLE `pet_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `vets`
--
ALTER TABLE `vets`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
