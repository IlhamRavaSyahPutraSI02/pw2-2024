-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2024 at 01:54 PM
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
-- Database: `dbweather`
--

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `latitude` decimal(10,6) NOT NULL,
  `longitude` decimal(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `latitude`, `longitude`) VALUES
(1, 'Jakarta', -6.208800, 106.845600),
(2, 'New York', 40.712800, -74.006000),
(3, 'London', 51.507400, -0.127800);

-- --------------------------------------------------------

--
-- Table structure for table `weather_forecasts`
--

CREATE TABLE `weather_forecasts` (
  `id` int(11) NOT NULL,
  `location_id` int(11) DEFAULT NULL,
  `weather_type_id` int(11) DEFAULT NULL,
  `high_temperature` decimal(5,2) NOT NULL,
  `low_temperature` decimal(5,2) NOT NULL,
  `forecast_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `weather_forecasts`
--

INSERT INTO `weather_forecasts` (`id`, `location_id`, `weather_type_id`, `high_temperature`, `low_temperature`, `forecast_date`) VALUES
(1, 1, 1, 32.00, 25.00, '2024-04-02'),
(2, 2, 2, 18.00, 10.00, '2024-04-02'),
(3, 3, 3, 22.00, 15.00, '2024-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `weather_reports`
--

CREATE TABLE `weather_reports` (
  `id` int(11) NOT NULL,
  `location_id` int(11) DEFAULT NULL,
  `weather_type_id` int(11) DEFAULT NULL,
  `temperature` decimal(5,2) NOT NULL,
  `humidity` decimal(5,2) NOT NULL,
  `wind_speed` decimal(5,2) NOT NULL,
  `observation_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `weather_reports`
--

INSERT INTO `weather_reports` (`id`, `location_id`, `weather_type_id`, `temperature`, `humidity`, `wind_speed`, `observation_time`) VALUES
(1, 1, 1, 30.00, 60.00, 5.00, '2024-04-01 12:00:00'),
(2, 2, 2, 15.00, 80.00, 10.00, '2024-04-01 12:00:00'),
(3, 3, 3, 20.00, 70.00, 8.00, '2024-04-01 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `weather_types`
--

CREATE TABLE `weather_types` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `weather_types`
--

INSERT INTO `weather_types` (`id`, `name`) VALUES
(1, 'Sunny'),
(2, 'Rainy'),
(3, 'Cloudy'),
(4, 'Windy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weather_forecasts`
--
ALTER TABLE `weather_forecasts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `location_id` (`location_id`),
  ADD KEY `weather_type_id` (`weather_type_id`);

--
-- Indexes for table `weather_reports`
--
ALTER TABLE `weather_reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `location_id` (`location_id`),
  ADD KEY `weather_type_id` (`weather_type_id`);

--
-- Indexes for table `weather_types`
--
ALTER TABLE `weather_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `weather_forecasts`
--
ALTER TABLE `weather_forecasts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `weather_reports`
--
ALTER TABLE `weather_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `weather_types`
--
ALTER TABLE `weather_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `weather_forecasts`
--
ALTER TABLE `weather_forecasts`
  ADD CONSTRAINT `weather_forecasts_ibfk_1` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`),
  ADD CONSTRAINT `weather_forecasts_ibfk_2` FOREIGN KEY (`weather_type_id`) REFERENCES `weather_types` (`id`);

--
-- Constraints for table `weather_reports`
--
ALTER TABLE `weather_reports`
  ADD CONSTRAINT `weather_reports_ibfk_1` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`),
  ADD CONSTRAINT `weather_reports_ibfk_2` FOREIGN KEY (`weather_type_id`) REFERENCES `weather_types` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
