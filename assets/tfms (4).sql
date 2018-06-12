-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 12, 2017 at 06:43 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tfms`
--
CREATE DATABASE IF NOT EXISTS `tfms` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tfms`;

-- --------------------------------------------------------

--
-- Table structure for table `defect`
--

CREATE TABLE IF NOT EXISTS `defect` (
  `Defect_id` int(11) NOT NULL AUTO_INCREMENT,
  `Defect_Code` varchar(45) DEFAULT NULL,
  `Defect_Name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Defect_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `defect`
--

INSERT INTO `defect` (`Defect_id`, `Defect_Code`, `Defect_Name`) VALUES
(1, '10234', 'Front camera fialure'),
(2, '230112', 'Top Housing broken');

-- --------------------------------------------------------

--
-- Table structure for table `line`
--

CREATE TABLE IF NOT EXISTS `line` (
  `Line_id` int(11) NOT NULL AUTO_INCREMENT,
  `Line_Code` varchar(45) DEFAULT NULL,
  `Line_Engineer` varchar(45) DEFAULT NULL,
  `Line_Leader` varchar(45) DEFAULT NULL,
  `Status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Line_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `line`
--

INSERT INTO `line` (`Line_id`, `Line_Code`, `Line_Engineer`, `Line_Leader`, `Status`) VALUES
(1, 'A1', 'Ayele', 'Kebede', 'active'),
(2, 'A2', 'Dawit', 'Dagne', 'active'),
(3, 'A3', 'Dereje', 'Damite', 'active'),
(4, 'A4', 'Estifanos', 'Gared', 'active'),
(5, 'A5', 'Dejen', 'Yohannes', 'active'),
(6, 'P1', 'Tekleab', 'Ayalew', 'active'),
(7, 'P2', 'Habite', 'Dubale', 'active'),
(8, 'P3', 'Solomon', 'Mokonen', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE IF NOT EXISTS `model` (
  `Model_id` int(11) NOT NULL AUTO_INCREMENT,
  `Model` varchar(45) DEFAULT NULL,
  `Model_Type` varchar(45) DEFAULT NULL,
  `status` varchar(250) NOT NULL DEFAULT 'new',
  PRIMARY KEY (`Model_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`Model_id`, `Model`, `Model_Type`, `status`) VALUES
(1, 'S32', 'Smart', 'new'),
(2, 'S31', 'Smart', 'new'),
(3, 'A6', 'Smart', 'ready'),
(4, 'K7', 'Smart', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `model_summary`
--

CREATE TABLE IF NOT EXISTS `model_summary` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `model` varchar(20) NOT NULL,
  `MUPH` varchar(20) NOT NULL,
  `TPSQ` varchar(20) NOT NULL,
  `UPPH` varchar(20) NOT NULL,
  `T/T` varchar(20) NOT NULL,
  `B/T` varchar(20) NOT NULL,
  `L/B` varchar(20) NOT NULL,
  `Total_Time` varchar(20) NOT NULL,
  `Owner` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `model_uph`
--

CREATE TABLE IF NOT EXISTS `model_uph` (
  `Modeluph_id` int(11) NOT NULL AUTO_INCREMENT,
  `Model` varchar(45) DEFAULT NULL,
  `Station_Code` varchar(45) DEFAULT NULL,
  `Station_Description` varchar(45) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Type` varchar(45) DEFAULT NULL,
  `Total_Time` varchar(45) DEFAULT NULL,
  `PFD` varchar(45) DEFAULT NULL,
  `C/T` varchar(45) DEFAULT NULL,
  `FPY` varchar(45) DEFAULT NULL,
  `UPH` varchar(45) DEFAULT NULL,
  `PSQ` varchar(250) NOT NULL,
  `T/T` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Modeluph_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `model_uph`
--

INSERT INTO `model_uph` (`Modeluph_id`, `Model`, `Station_Code`, `Station_Description`, `Date`, `Type`, `Total_Time`, `PFD`, `C/T`, `FPY`, `UPH`, `PSQ`, `T/T`) VALUES
(1, 'A6', 'A01', 'Receiver mold and Front camera foam paste', '2017-11-10 21:38:15', NULL, '33', '5', '34.65', '98', '102', '1', '34.65'),
(2, 'A6', 'A02', 'Flash lens and flasho goma mold', '2017-11-10 21:39:48', NULL, '17.5', '5', '18.38', '98', '192', '1', '18.38'),
(3, 'A6', 'A03', 'Sidekey FPC positionig', '2017-11-10 21:41:07', NULL, NULL, '5', NULL, '98', NULL, '1', NULL),
(4, 'A6', 'A04', 'Volume key mold', '2017-11-10 21:42:10', NULL, NULL, '5', NULL, '98', NULL, '1', NULL),
(5, 'A6', 'A05', 'Power key Mold', '2017-11-10 21:42:55', NULL, NULL, '5', NULL, '98', NULL, '1', NULL),
(6, 'A6', 'A06', 'Uphousing assembling', '2017-11-10 21:45:01', NULL, NULL, '5', NULL, '98', NULL, '1', NULL),
(7, 'A6', 'A07', 'Uphousing screw tightening', '2017-11-10 21:46:10', NULL, NULL, '5', NULL, '98', NULL, '2', NULL),
(8, 'A6', 'A08', 'Mic and earphone foam paste', '2017-11-10 21:46:43', NULL, NULL, '5', NULL, '98', NULL, '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE IF NOT EXISTS `plan` (
  `Plan_id` int(11) NOT NULL AUTO_INCREMENT,
  `Date` varchar(45) DEFAULT NULL,
  `wo` varchar(250) NOT NULL,
  `Line_id` int(11) NOT NULL,
  `Task_Order` varchar(45) DEFAULT NULL,
  `Model` varchar(45) DEFAULT NULL,
  `Code` varchar(250) NOT NULL,
  `Description` varchar(45) DEFAULT NULL,
  `Quantity` varchar(45) DEFAULT NULL,
  `UPH` varchar(45) DEFAULT NULL,
  `Time` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Plan_id`),
  KEY `Line_id_idx` (`Line_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`Plan_id`, `Date`, `wo`, `Line_id`, `Task_Order`, `Model`, `Code`, `Description`, `Quantity`, `UPH`, `Time`) VALUES
(1, '2017-11-12', '', 1, '', 'S31', '10983', 'ROSE_BLack', '350', '', NULL),
(2, '2017-11-12', '', 2, '', 'S31', '10983', 'ROSE_BLack', '200', '', '0'),
(3, '2017-11-12', '', 1, '', 'N2', '10983', 'ROSE_BLack', '400', '', '0'),
(4, '2017-11-12', '', 1, '', 'S31', '10983', 'ROSE_BLack', '200', '', '0'),
(5, '2017-11-11', '', 2, '', 'S31', '10983', 'ROSE_BLack', '200', '', '0'),
(6, '2017-11-11', '', 2, '', 'S31', '10983', '', '200', '100', '2');

-- --------------------------------------------------------

--
-- Table structure for table `plan_defect`
--

CREATE TABLE IF NOT EXISTS `plan_defect` (
  `Plandefect_id` int(11) NOT NULL AUTO_INCREMENT,
  `Productionlog_id` varchar(45) DEFAULT NULL,
  `Defect` varchar(45) DEFAULT NULL,
  `Defect_Quantity` varchar(45) DEFAULT NULL,
  `Type` varchar(45) DEFAULT NULL,
  `Rate` varchar(45) DEFAULT NULL,
  `Reason` varchar(45) DEFAULT NULL,
  `Improvement` varchar(45) DEFAULT NULL,
  `Result` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Plandefect_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `prodaction_log`
--

CREATE TABLE IF NOT EXISTS `prodaction_log` (
  `Productionlog_id` int(11) NOT NULL AUTO_INCREMENT,
  `Plan_id` int(11) DEFAULT NULL,
  `Quantity` varchar(45) DEFAULT NULL,
  `Finish` varchar(45) DEFAULT NULL,
  `Input` varchar(45) DEFAULT NULL,
  `Defect` varchar(45) DEFAULT NULL,
  `FPY` varchar(45) DEFAULT NULL,
  `Month` varchar(45) DEFAULT NULL,
  `Line_Leader` varchar(45) DEFAULT NULL,
  `Line_Engineer` varchar(45) DEFAULT NULL,
  `Abnormals` varchar(2500) NOT NULL,
  PRIMARY KEY (`Productionlog_id`),
  UNIQUE KEY `Productionlog_id_UNIQUE` (`Productionlog_id`),
  KEY `Plan_id_idx` (`Plan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `prodaction_log`
--

INSERT INTO `prodaction_log` (`Productionlog_id`, `Plan_id`, `Quantity`, `Finish`, `Input`, `Defect`, `FPY`, `Month`, `Line_Leader`, `Line_Engineer`, `Abnormals`) VALUES
(2, 1, '200', '198', '198', '2', '96.17%', '11', 'Kebede', 'Ayele', '');

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE IF NOT EXISTS `station` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Station_id` int(11) NOT NULL,
  `Sequence` varchar(45) DEFAULT NULL,
  `Sequence_Description` varchar(45) DEFAULT NULL,
  `Labor_Time` varchar(45) DEFAULT NULL,
  `Machin` varchar(45) DEFAULT NULL,
  `Fixture_Equipment` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Modeluph_id` (`Station_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`id`, `Station_id`, `Sequence`, `Sequence_Description`, `Labor_Time`, `Machin`, `Fixture_Equipment`) VALUES
(3, 1, '1', 'Receiver mold', '15', '', ''),
(4, 1, '2', 'Receiver mold', '18', '', ''),
(5, 2, '1', 'Receiver mold', '8', '', ''),
(6, 2, '2', 'Receiver mold', '9.5', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `uph_summary`
--

CREATE TABLE IF NOT EXISTS `uph_summary` (
  `UPH_id` int(11) NOT NULL AUTO_INCREMENT,
  `Update_Date` varchar(45) DEFAULT NULL,
  `Model` varchar(45) DEFAULT NULL,
  `Model_Type` varchar(250) NOT NULL,
  `B/R` varchar(45) DEFAULT NULL,
  `Type` varchar(45) DEFAULT NULL,
  `Previous_UPH` varchar(45) DEFAULT NULL,
  `Update_UPH` varchar(45) DEFAULT NULL,
  `8 Hour` varchar(45) DEFAULT NULL,
  `NBT` varchar(45) DEFAULT NULL,
  `PSQ` varchar(45) DEFAULT NULL,
  `QSQ` varchar(45) DEFAULT NULL,
  `TPQ` varchar(45) DEFAULT NULL,
  `UT` varchar(45) DEFAULT NULL,
  `Status` varchar(50) NOT NULL DEFAULT 'new',
  PRIMARY KEY (`UPH_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `uph_summary`
--

INSERT INTO `uph_summary` (`UPH_id`, `Update_Date`, `Model`, `Model_Type`, `B/R`, `Type`, `Previous_UPH`, `Update_UPH`, `8 Hour`, `NBT`, `PSQ`, `QSQ`, `TPQ`, `UT`, `Status`) VALUES
(1, NULL, 'S31', 'Smart', NULL, 'CKD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'new'),
(2, NULL, 'S32', 'Smart', NULL, 'SKD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'new'),
(3, NULL, 'A6', 'Smart', NULL, 'SKD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'new'),
(4, NULL, 'K7', 'Smart', NULL, 'CKD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'new');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `User_Id` int(11) NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(45) DEFAULT NULL,
  `Last_Name` varchar(45) DEFAULT NULL,
  `User_Name` varchar(45) DEFAULT NULL,
  `User_Type` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `Phone` varchar(45) DEFAULT NULL,
  `Status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`User_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_Id`, `First_Name`, `Last_Name`, `User_Name`, `User_Type`, `Email`, `Password`, `Phone`, `Status`) VALUES
(1, 'new', 'user', 'BobMarley', 'Line_Leader', 'newUser@fms.com', '', '0987654321', 'active'),
(2, 'new', 'user', 'AsterAwoke', 'Line_Engineer', 'newUser@fms.com', '', '0987654321', 'active'),
(3, 'Grows', 'up ', 'Kid', 'IE', 'to@fg.gf', '', 'a', 'active'),
(4, 'is', 'my', 'kidus', 'NPI', 'name@name.name', '', 'i', 'active'),
(5, 'is', 'my', 'kidus', 'PE', 'name@name.name', '', 'i', 'active'),
(6, 'sol', 'mok', 'sol', 'Repair_Engineer', 'sol@appdiv.com', '', '0987654321', 'active'),
(7, 'Grows', 'up ', 'Kid', 'Repair_Technician', 'to@fg.gf', '', 'a', 'active'),
(8, 'dflgkns', 'klfnl', 'kidus', 'Staff', 'lnkrnlqnlrn@oiuo.vo', '', 'a', 'active');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `plan`
--
ALTER TABLE `plan`
  ADD CONSTRAINT `Line_id` FOREIGN KEY (`Line_id`) REFERENCES `line` (`Line_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `prodaction_log`
--
ALTER TABLE `prodaction_log`
  ADD CONSTRAINT `Plan_id` FOREIGN KEY (`Plan_id`) REFERENCES `plan` (`Plan_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `station`
--
ALTER TABLE `station`
  ADD CONSTRAINT `Modeluph_id` FOREIGN KEY (`Station_id`) REFERENCES `model_uph` (`Modeluph_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
