-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2018 at 02:52 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gms`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `Customer_id` varchar(22) NOT NULL,
  `Region` varchar(150) NOT NULL,
  `Subcity` varchar(150) NOT NULL,
  `Wereda` varchar(150) NOT NULL,
  `Phone` varchar(25) NOT NULL,
  `Phone_O` varchar(25) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Web` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `Customer_id`, `Region`, `Subcity`, `Wereda`, `Phone`, `Phone_O`, `Email`, `Web`) VALUES
(1, '4', 'A.A.', 'Kirkose', '09', '0923026112', '', 'kidus@gmail.com', 'www.kidus.get'),
(2, '5', 'A.A.', 'Kirkose', '09', '0923026112', '', 'kidus@gmail.com', 'www.kidus.get'),
(3, '6', 'A.A.', 'Kirkose', '09', '0923026112', '', 'kidus@gmail.com', 'www.kidus.get'),
(4, '7', 'A.A.', 'Kirkose', '09', '0923026112', '', 'kidus@gmail.com', 'www.kidus.get'),
(5, '8', 'A.A.', 'Kirkose', '09', '0923026112', '', 'kidus@gmail.com', 'www.kidus.get'),
(6, '9', 'A.A.', 'Kirkose', '09', '0923026112', '', 'kidus@gmail.com', 'www.kidus.get'),
(7, '10', 'A.A.', 'Kirkose', '09', '0923026112', '', 'kidus@gmail.com', 'www.kidus.get'),
(8, '11', 'A.A.', 'Kirkose', '09', '0923026112', '', 'kidus@gmail.com', 'www.kidus.get'),
(9, '12', 'A.A.', 'Kirkose', '09', '0923026112', '', 'kidus@gmail.com', 'www.kidus.get'),
(10, '13', '??? ???', '????', '06', '0923026112', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `Employee_id` varchar(10) NOT NULL,
  `Day` varchar(4) NOT NULL,
  `Month` varchar(10) NOT NULL,
  `Year` varchar(4) NOT NULL,
  `Day_Time` varchar(2) NOT NULL,
  `Status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `Employee_id`, `Day`, `Month`, `Year`, `Day_Time`, `Status`) VALUES
(1, '7', '18', '04', '2017', '2', 'Ab'),
(2, '2', '18', '04', '2017', '1', 'O'),
(3, '4', '18', '04', '2017', '2', 'P'),
(4, '7', '18', '04', '2017', '1', 'Ab'),
(5, '1', '19', '04', '2017', '1', 'Ab'),
(6, '1', '19', '04', '2017', '2', 'P'),
(7, '7', '19', '04', '2017', '1', 'Ab');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `id` int(11) NOT NULL,
  `Vehicle_id` int(11) NOT NULL,
  `Date` varchar(25) NOT NULL,
  `Millage` varchar(150) NOT NULL,
  `Fuel` varchar(150) NOT NULL,
  `Engine` varchar(150) NOT NULL,
  `Drive` varchar(150) NOT NULL,
  `Transmission` varchar(150) NOT NULL,
  `injection` varchar(150) NOT NULL,
  `Fuel_Type` varchar(150) NOT NULL,
  `Tier` varchar(150) NOT NULL,
  `CC` varchar(150) NOT NULL,
  `HP` varchar(150) NOT NULL,
  `Cylinders` varchar(150) NOT NULL,
  `Dig` varchar(150) NOT NULL,
  `Oddo_Meter` varchar(150) NOT NULL,
  `Release_Date` varchar(150) NOT NULL,
  `Receive_Date` varchar(150) NOT NULL,
  `Payment` int(11) NOT NULL DEFAULT '0',
  `Status` varchar(100) NOT NULL DEFAULT 'Workshop'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `Vehicle_id`, `Date`, `Millage`, `Fuel`, `Engine`, `Drive`, `Transmission`, `injection`, `Fuel_Type`, `Tier`, `CC`, `HP`, `Cylinders`, `Dig`, `Oddo_Meter`, `Release_Date`, `Receive_Date`, `Payment`, `Status`) VALUES
(1, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017/02/02', '2018/09/09', 0, 'Done'),
(2, 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 'Workshop'),
(3, 2, '', '12000', '1/2', '', '', '', '', '', '', '', '', '', '', '', '2018/09/09', '2018/09/09', 0, 'Workshop'),
(4, 7, '2017-04-18', '200', '1/2', 'V8', 'F2', 'Manual', 'F1', 'bensin', '21`', '33', '33', '4', '4', '2003', '2017-04-25', '2017-04-18', 0, 'Workshop'),
(5, 8, '2017-04-18', '200', '1/2', 'V8', 'F2', 'Manual', 'F1', 'bensin', '21`', '33', '33', '4', '4', '2003', '2017-04-25', '2017-04-18', 0, 'Workshop'),
(6, 9, '2017-04-18', '200', '1/2', 'V8', 'F2', 'Manual', 'F1', 'bensin', '21`', '33', '33', '4', '4', '2003', '2017-04-25', '2017-04-18', 0, 'Workshop'),
(7, 10, '2017-04-18', '200', '1/2', 'V8', 'F2', 'Manual', 'F1', 'bensin', '21`', '33', '33', '4', '4', '2003', '2017-04-25', '2017-04-18', 0, 'Workshop'),
(8, 11, '2017-04-18', '200', '1/2', 'V8', 'F2', 'Manual', 'F1', 'bensin', '21`', '33', '33', '4', '4', '2003', '2017-04-25', '2017-04-18', 0, 'Workshop'),
(9, 12, '2017-04-18', '200', '1/2', 'V8', 'F2', 'Manual', 'F1', 'bensin', '21`', '33', '33', '4', '4', '2003', '2017-04-25', '2017-04-18', 0, 'Workshop'),
(10, 13, '2018-04-26', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-04-26', 0, 'Workshop');

-- --------------------------------------------------------

--
-- Table structure for table `card_follow`
--

CREATE TABLE `card_follow` (
  `id` int(11) NOT NULL,
  `Card_id` int(11) NOT NULL,
  `Card_Status` varchar(45) NOT NULL DEFAULT 'New',
  `Card_Followcol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `card_services`
--

CREATE TABLE `card_services` (
  `id` int(11) NOT NULL,
  `Card_id` varchar(45) NOT NULL,
  `Type` varchar(25) NOT NULL,
  `Catagory` varchar(45) NOT NULL,
  `Service` varchar(45) NOT NULL,
  `Remark` varchar(500) NOT NULL,
  `Due_Date` varchar(45) NOT NULL,
  `Labor_Time` varchar(45) DEFAULT NULL,
  `Employee_id` varchar(45) DEFAULT NULL,
  `Status` varchar(45) NOT NULL DEFAULT 'New'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `card_services`
--

INSERT INTO `card_services` (`id`, `Card_id`, `Type`, `Catagory`, `Service`, `Remark`, `Due_Date`, `Labor_Time`, `Employee_id`, `Status`) VALUES
(1, '1', '', 'Computerized Work', 'Dashboard', '', '2017-03-11', NULL, '', 'Done'),
(2, '1', '', 'Estimation', 'gimit', '', '2017-03-13', NULL, '', 'New'),
(3, '1', '', 'Repair', 'wheel', '', '2017-03-15', NULL, '', 'New'),
(4, '2', '', 'Computerized Work', 'Dashboard', '', '2017-03-11', NULL, '', 'New'),
(5, '2', '', 'Estimation', 'gimit', '', '2017-03-13', NULL, '', 'New'),
(6, '2', '', 'Repair', 'wheel', '', '2017-03-15', NULL, '', 'New'),
(7, '4', 'Customer', 'Estimation', 'Engine Status', '', '2017-04-18', NULL, '', 'New'),
(8, '5', 'Customer', 'Estimation', 'Engine Status', '', '2017-04-18', NULL, '', 'New'),
(9, '6', 'Customer', 'Estimation', 'Engine Status', '', '2017-04-18', NULL, '', 'New'),
(10, '7', 'Customer', 'Estimation', 'Engine Status', '', '2017-04-18', NULL, '', 'New'),
(11, '7', 'Customer', 'Computerized Work', 'Dignosis works', '', '2017-04-18', NULL, '', 'New'),
(12, '7', 'Professional', 'Body Work', 'iirkri', '', '2017-04-18', NULL, '', 'New'),
(13, '7', 'Professional', 'Choose Category', '', '', '2017-04-18', NULL, '', 'New'),
(14, '9', 'Customer', 'Inspection', 'Body', '', '2017-04-18', NULL, '', 'New'),
(15, '9', 'Customer', 'Electrical Work', 'Rewire ingition system, light and instrumenta', '', '2017-04-18', NULL, '', 'New'),
(16, '9', 'Professional', 'Body Work', 'iirkri', '', '2017-04-18', NULL, '', 'New'),
(17, '9', 'Professional', 'Choose Category', '', '', '2017-04-18', NULL, '', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Sex` varchar(45) NOT NULL,
  `Phone` varchar(45) NOT NULL,
  `R_Date` varchar(45) NOT NULL,
  `Company_Name` varchar(150) NOT NULL,
  `Profile` varchar(350) NOT NULL DEFAULT 'profile.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `First_Name`, `Last_Name`, `Sex`, `Phone`, `R_Date`, `Company_Name`, `Profile`) VALUES
(1, 'Damitew', 'Asinake', 'Male', '098765432', '1995/08/17', 'Addis Abeba', 'profile.png'),
(2, 'Damitew', 'Asinake', 'Male', '098765432', '1995/08/17', 'Addis Abeba', 'profile.png'),
(3, '', '', '', 'fjghkfg', '', '', 'profile.png'),
(4, 'Kiuds', 'Yohannes', 'Male', '0923026112', '2017-04-18', 'Abissinya Tech', 'profile.png'),
(5, 'Kiuds', 'Yohannes', 'Male', '0923026112', '2017-04-18', 'Abissinya Tech', 'profile.png'),
(6, 'Kiuds', 'Yohannes', 'Male', '0923026112', '2017-04-18', 'Abissinya Tech', 'profile.png'),
(7, 'Kiuds', 'Yohannes', 'Male', '0923026112', '2017-04-18', 'Abissinya Tech', 'profile.png'),
(8, 'Kiuds', 'Yohannes', 'Male', '0923026112', '2017-04-18', 'Abissinya Tech', 'profile.png'),
(9, 'Kiuds', 'Yohannes', 'Male', '0923026112', '2017-04-18', 'Abissinya Tech', 'profile.png'),
(10, 'Kiuds', 'Yohannes', 'Male', '0923026112', '2017-04-18', 'Abissinya Tech', 'profile.png'),
(11, 'Kiuds', 'Yohannes', 'Male', '0923026112', '2017-04-18', 'Abissinya Tech', 'profile.png'),
(12, 'Kiuds', 'Yohannes', 'Male', '0923026112', '2017-04-18', 'Abissinya Tech', 'profile.png'),
(13, 'ቅዱስ', 'ዮሃንስ', 'ወንድ', '0923026112', '2018-04-26', 'አቢሲንያ ቴክ', 'profile.png');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `First_Name` varchar(45) NOT NULL,
  `Middle_Name` varchar(150) NOT NULL,
  `Last_Name` varchar(45) NOT NULL,
  `Entry_Date` varchar(10) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Position` varchar(45) NOT NULL,
  `Salary` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `Status` varchar(10) NOT NULL DEFAULT 'New'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `First_Name`, `Middle_Name`, `Last_Name`, `Entry_Date`, `Phone`, `Email`, `Position`, `Salary`, `Password`, `Status`) VALUES
(1, 'Kebede', 'Ayalew', 'Debire', '2017-04-11', '0987654321', 'kebede@expl.com', 'Chief Mechanic', '12000', '', 'New'),
(2, 'Kebede', 'Ayalew', 'Debire', '2017-04-11', '0987654321', 'kebede@expl.com', 'Chief Mechanic', '12000', '', 'New'),
(3, 'Kebede', 'Ayalew', 'Debire', '2017-04-11', '0987654321', 'kebede@expl.com', 'Chief Mechanic', '12000', '', 'New'),
(4, 'Kebede', 'Ayalew', 'Debire', '2017-04-11', '0987654321', 'kebede@expl.com', 'Chief Mechanic', '12000', '', 'New'),
(5, 'Kebede', 'Ayalew', 'Debire', '2017-04-11', '0987654321', 'kebede@expl.com', 'Chief Mechanic', '12000', '', 'New'),
(6, 'Kidus', 'Yohanes', 'Kumato', '2017-04-11', '09876543212', 'kidus@gm.com', 'Cheif Manager', '15000', '', 'New'),
(7, 'Defisa', 'aseb', 'shire', '2017-04-11', '09876543212345', 'asura@sms.com', 'oih', '15000', '', 'Active'),
(8, 'Kidus', 'Yohanes', 'Yohannes', '2017-04-11', '0900000000', 'kidus@gmail.com', 'SD', '12000', '', 'Active'),
(9, 'Kidus', 'Yohanes', 'Yohannes', '2017-04-11', '0900000000', 'kidus@gmail.com', 'SD', '12000', '', 'Active'),
(10, 'Kidus', 'Yohanes', 'Yohannes', '2017-04-11', '0900000000', 'kidus@gmail.com', 'SD', '12000', '', 'Active'),
(11, 'Kidus', 'Yohanes', 'Yohannes', '2017-04-11', '0900000000', 'kidus@gmail.com', 'General Manager', '24000', '', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `emp_bgrd`
--

CREATE TABLE `emp_bgrd` (
  `id` int(11) NOT NULL,
  `Employee_id` int(11) NOT NULL,
  `Level` varchar(150) NOT NULL,
  `Institution` varchar(150) NOT NULL,
  `Field` varchar(150) NOT NULL,
  `Final_Grade` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_bgrd`
--

INSERT INTO `emp_bgrd` (`id`, `Employee_id`, `Level`, `Institution`, `Field`, `Final_Grade`) VALUES
(1, 11, 'Dimplom', 'Tegibared', 'AutoMchanics', '3.9'),
(2, 11, 'Degree', '???? ??', 'AutoMechanics', '4.0');

-- --------------------------------------------------------

--
-- Table structure for table `emp_experience`
--

CREATE TABLE `emp_experience` (
  `id` int(11) NOT NULL,
  `Employee_id` varchar(25) NOT NULL,
  `Position` varchar(250) NOT NULL,
  `Organization` varchar(250) NOT NULL,
  `Period` varchar(50) NOT NULL,
  `Remark` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_experience`
--

INSERT INTO `emp_experience` (`id`, `Employee_id`, `Position`, `Organization`, `Period`, `Remark`) VALUES
(1, '11', 'Chief Mechanic', 'NMC', '7 years', '');

-- --------------------------------------------------------

--
-- Table structure for table `estimation`
--

CREATE TABLE `estimation` (
  `id` int(11) NOT NULL,
  `Card_id` int(11) NOT NULL,
  `Employee_id` varchar(45) NOT NULL,
  `Payment` varchar(20) NOT NULL,
  `Remark` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `estimation`
--

INSERT INTO `estimation` (`id`, `Card_id`, `Employee_id`, `Payment`, `Remark`) VALUES
(1, 1, 'kiuds ', '600', 'PAID'),
(3, 7, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `est_parts`
--

CREATE TABLE `est_parts` (
  `id` int(11) NOT NULL,
  `Est_id` varchar(15) NOT NULL,
  `Part_Name` varchar(150) NOT NULL,
  `C_Status` varchar(150) NOT NULL,
  `F_Status` varchar(150) NOT NULL,
  `Remark` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `est_parts`
--

INSERT INTO `est_parts` (`id`, `Est_id`, `Part_Name`, `C_Status`, `F_Status`, `Remark`) VALUES
(1, '1', 'the ', 'first', 'trial', 'please work'),
(2, '1', 'the ', 'second', 'trial', 'just'),
(3, '1', 'the', 'last', 'trial', 'hopefully');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(11) NOT NULL,
  `Reason_Cat` varchar(250) NOT NULL,
  `Specification` varchar(250) NOT NULL,
  `Recipeint` varchar(250) NOT NULL,
  `Amount` varchar(250) NOT NULL,
  `Payment_Method` varchar(250) NOT NULL,
  `Payment_Status` varchar(250) NOT NULL,
  `Discount` varchar(150) NOT NULL,
  `Responssible` varchar(100) NOT NULL,
  `Paid_Amount` varchar(250) NOT NULL,
  `Date` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forgotten_tools`
--

CREATE TABLE `forgotten_tools` (
  `id` int(11) NOT NULL,
  `Card_id` varchar(12) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `Brand` varchar(150) NOT NULL,
  `Model` varchar(150) NOT NULL,
  `Size` varchar(150) NOT NULL,
  `Remark` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forgotten_tools`
--

INSERT INTO `forgotten_tools` (`id`, `Card_id`, `Name`, `Brand`, `Model`, `Size`, `Remark`) VALUES
(1, '1', 'crick', 'nokia', 'm8', 'small', 'used'),
(2, '1', 'tape', 'sony', 'uuh', '', 'used'),
(3, '2', 'crick', 'nokia', 'm8', 'small', 'used'),
(4, '2', 'tape', 'sony', 'uuh', '', 'used'),
(5, '1', 'tool', 'trial', 'the', 'first', 'one'),
(6, '1', 'tool', 'second', 'trial', 'please', 'work'),
(7, '1', 'tool', 'the', 'third', 'trial', 'ooo');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `Employee_id` int(11) NOT NULL,
  `Position` varchar(100) NOT NULL,
  `Salary` varchar(20) NOT NULL,
  `Start_Date` varchar(25) NOT NULL,
  `Status` varchar(10) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `Employee_id`, `Position`, `Salary`, `Start_Date`, `Status`) VALUES
(1, 1, 'Chief Mechanic', '12000', '2017-04-11', 'Active'),
(2, 3, 'Chief Mechanic', '12000', '2017-04-11', 'Active'),
(3, 4, 'Chief Mechanic', '12000', '2017-04-11', 'Active'),
(4, 5, 'Chief Mechanic', '12000', '2017-04-11', 'Active'),
(5, 6, 'Cheif Manager', '15000', '2017-04-11', 'Active'),
(6, 7, 'oih', '15000', '2017-04-11', 'Active'),
(7, 8, 'SD', '12000', '2017-02-11', 'Active'),
(8, 9, 'SD', '12000', '2017-02-11', 'Active'),
(9, 10, 'SD', '12000', '2017-02-11', 'Active'),
(10, 11, 'Cheif Manager', '19000', '2017-02-11', '2017-04-13'),
(11, 11, 'General Manager', '24000', '2017-04-13', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `id` int(11) NOT NULL,
  `Reason_Cat` varchar(250) NOT NULL,
  `Specification` varchar(350) NOT NULL,
  `Client` varchar(250) NOT NULL,
  `amount` varchar(25) NOT NULL,
  `Payment_Method` varchar(150) NOT NULL,
  `Payment_Status` varchar(100) NOT NULL,
  `Discount` varchar(100) NOT NULL,
  `Respossible` varchar(100) NOT NULL,
  `TIN_No` varchar(35) NOT NULL,
  `Date` varchar(45) NOT NULL,
  `Paid_Amount` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inspection`
--

CREATE TABLE `inspection` (
  `id` int(11) NOT NULL,
  `Card_id` int(11) NOT NULL,
  `Employee_id` varchar(15) NOT NULL,
  `Payment` varchar(25) NOT NULL,
  `Remark` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inspection`
--

INSERT INTO `inspection` (`id`, `Card_id`, `Employee_id`, `Payment`, `Remark`) VALUES
(1, 1, 'kiuds', '256', 'PAID'),
(3, 9, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ins_problems`
--

CREATE TABLE `ins_problems` (
  `id` int(11) NOT NULL,
  `Ins_id` varchar(15) NOT NULL,
  `Part_Name` varchar(150) NOT NULL,
  `C_Status` varchar(150) NOT NULL,
  `F_Status` varchar(150) NOT NULL,
  `Remark` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ins_problems`
--

INSERT INTO `ins_problems` (`id`, `Ins_id`, `Part_Name`, `C_Status`, `F_Status`, `Remark`) VALUES
(1, '1', 'the', 'first', 'trial', 'whic is enough');

-- --------------------------------------------------------

--
-- Table structure for table `lookup`
--

CREATE TABLE `lookup` (
  `id` int(11) NOT NULL,
  `Cat` varchar(150) NOT NULL,
  `Content` varchar(150) NOT NULL,
  `StaTus` varchar(150) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lookup`
--

INSERT INTO `lookup` (`id`, `Cat`, `Content`, `StaTus`) VALUES
(1, 'Services', 'Inspection', 'Active'),
(2, 'Services', 'Estimation', 'Active'),
(3, 'Services', 'Repair', 'Active'),
(4, 'Services', 'Sales', 'Active'),
(5, 'Services', 'Body Work', 'Active'),
(6, 'Services', 'Mechanical Work', 'Active'),
(7, 'Services', 'Electrical Work', 'Active'),
(8, 'Services', 'Computerized Work', 'Active'),
(12, 'Expense', 'Others', 'Active'),
(13, 'Income', 'Reapair & Maitenance', 'Active'),
(14, 'Income', 'Inspection', 'Active'),
(15, 'Income', 'Estimation', 'Active'),
(16, 'Income', 'Services', 'Active'),
(17, 'Income', 'Sales', 'Active'),
(18, 'Expense', 'To Buy Parts', 'Active'),
(19, 'Expense', 'Labor Fee', 'Active'),
(20, 'Expense', 'Tax', 'Active'),
(21, 'Expense', 'Salary', 'Active'),
(22, 'Expense', 'Rental', 'Active'),
(23, 'Expense', 'Utilities', 'Active'),
(24, 'Expense', 'Repair & Maintenance', 'Active'),
(25, 'Expense', 'Commission', 'Active'),
(26, 'Expense', 'Legal & Professional Worl', 'Active'),
(27, 'Mechanical Work', 'Engine General Service', 'Active'),
(28, 'Mechanical Work', 'Engine Overall Service', 'Active'),
(29, 'Mechanical Work', 'Blowers & Trubo charger services', 'Active'),
(30, 'Mechanical Work', 'Rebuild Crank Shaft & Cylinder Blocks', 'Active'),
(31, 'Mechanical Work', 'REpair manual & Automatic transmission', 'Active'),
(32, 'Mechanical Work', 'Align vehiclese front ends', 'Active'),
(33, 'Mechanical Work', 'Repair and Adjust Piston, Rods, Geears, Valves and bearing', 'Active'),
(34, 'Mechanical Work', 'Repair & Adjust belts & hoses', 'Active'),
(35, 'Mechanical Work', 'REpair & Replace clutches & suspenssions', 'Active'),
(36, 'Mechanical Work', 'Wheel Alignment', 'Active'),
(37, 'Body Work', 'General Body Work', 'Active'),
(38, 'Body Work', 'Painting', 'Active'),
(39, 'Body Work', 'Fiber Works', 'Active'),
(40, 'Body Work', 'Decor Color', 'Active'),
(41, 'Body Work', 'Bumper color', 'Active'),
(42, 'Body Work', 'Interior color painting', 'Active'),
(43, 'Body Work', 'Exterior', 'Active'),
(44, 'Body Work', 'Repairing Damage parts', 'Active'),
(45, 'Electrical Work', 'Battry Change', 'Active'),
(46, 'Electrical Work', 'Rewire ingition system, light and instrumental panels', 'Active'),
(47, 'Electrical Work', 'Replace and Adjust head lights', 'Active'),
(48, 'Electrical Work', 'Repair and Adjust air condition, fans, ACs, coolers & others', 'Active'),
(49, 'Computerized Work', 'Dignosis works', 'Active'),
(50, 'Computerized Work', 'Check & repair', 'Active'),
(51, 'Computerized Work', 'Change RPM', 'Active'),
(52, 'Computerized Work', 'Adjust Performance', 'Active'),
(53, 'Computerized Work', 'Adjust overall controlls', 'Active'),
(54, 'Services', 'General and Preventive Works', 'Active'),
(55, 'General and Preventive Works', 'Change oil & filters and Gress', 'Active'),
(56, 'General and Preventive Works', 'Polish cars', 'Active'),
(57, 'General and Preventive Works', 'Wash cars', 'Active'),
(58, 'General and Preventive Works', 'Check & Adjust control system', 'Active'),
(59, 'Inspection', 'Body', 'Active'),
(60, 'Inspection', 'Dahsboard', 'Active'),
(61, 'Inspection', 'Engine Status', 'Active'),
(62, 'Inspection', 'Electrical Parts', 'Active'),
(63, 'Inspection', 'Engine Performance', 'Active'),
(64, 'Inspection', 'RPM', 'Active'),
(65, 'Inspection', 'Suspension & wheel Hub', 'Active'),
(66, 'Estimation', 'Vehicle Condition', 'Active'),
(67, 'Estimation', 'Body', 'Active'),
(68, 'Estimation', 'Engine Status', 'Active'),
(69, 'Estimation', 'Electrical Parts', 'Active'),
(70, 'Estimation', 'Engine Performance', 'Active'),
(71, 'Estimation', 'color Status', 'Active'),
(72, 'Estimation', 'Suspenssion', 'Active'),
(73, 'Services', 'Final TRial', 'Active'),
(74, 'Services', 'truely final trial', 'Active'),
(75, 'Services', 'trial 1', 'Active'),
(76, 'Services', 'trial 2', 'Active'),
(77, 'Services', 'trial 3', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `id` int(11) NOT NULL,
  `Card_id` varchar(25) NOT NULL,
  `Name` varchar(350) NOT NULL,
  `Brand` varchar(150) NOT NULL,
  `Model` varchar(150) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Material_Status` varchar(150) NOT NULL,
  `Cost` varchar(15) NOT NULL,
  `date` varchar(20) NOT NULL,
  `Status` varchar(50) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`id`, `Card_id`, `Name`, `Brand`, `Model`, `Quantity`, `Material_Status`, `Cost`, `date`, `Status`) VALUES
(1, '1', 'Wheek', 'toyota', '32''''', 3, 'New', '2000', '2018-04-28', '?????'),
(2, '1', 'kidus', 'kiuds', 'kiuds', 0, 'kius', '', '', 'Pending'),
(3, '1', 'another', 'trial', 'fo', 0, 'materials', '', '', 'Pending'),
(4, '1', 'kidus ', 'is', 'the ', 0, 'ever', '', '', 'Pending'),
(5, '1', 'here', 'is', 'the', 0, 'trial', '', '', 'Pending'),
(6, '1', 'the', 'very', 'last', 0, 'hopefully', '', '', 'Pending'),
(7, '9', 'trial', '1', '1', 1, '1', '', '', 'Pending'),
(8, '9', 'trial', '2', '2', 2, '2', '', '', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `id` int(11) NOT NULL,
  `Employee_id` int(11) NOT NULL,
  `Position` varchar(100) NOT NULL,
  `Salary` varchar(20) NOT NULL,
  `Start_Date` varchar(25) NOT NULL,
  `Status` varchar(10) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `id` int(11) NOT NULL,
  `type` varchar(25) NOT NULL,
  `f_id` varchar(25) NOT NULL,
  `picture` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`id`, `type`, `f_id`, `picture`) VALUES
(1, 'Vehicle', '1', '0a51c9f7730b6f2931a4fc967a2fdc2d.jpg'),
(2, 'Vehicle', '1', '9e2e0ec4e6b5bcc2bbb981820ac6b0ba.jpg'),
(3, 'Vehicle', '1', 'd728ba8699357d43eacc45fec289a9d3.jpg'),
(4, 'Vehicle', '1', '82a2177c937dcb1e001c8f379de4c196.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pro_serives`
--

CREATE TABLE `pro_serives` (
  `id` int(11) NOT NULL,
  `Card` varchar(25) NOT NULL,
  `Cat` varchar(250) NOT NULL,
  `Service` varchar(250) NOT NULL,
  `Due_Date` varchar(25) NOT NULL,
  `Labor_Time` varchar(25) NOT NULL,
  `Employee_id` varchar(10) NOT NULL,
  `Status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `id` int(11) NOT NULL,
  `Card_id` int(11) NOT NULL,
  `Material_Name` varchar(45) NOT NULL,
  `Model` varchar(45) NOT NULL,
  `Make` varchar(45) NOT NULL,
  `Quantity` varchar(45) NOT NULL,
  `Condition` varchar(45) NOT NULL,
  `Status` varchar(45) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(16) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `Customer_id` int(11) NOT NULL,
  `Model` varchar(45) NOT NULL,
  `Make` varchar(45) NOT NULL,
  `Year` varchar(45) NOT NULL,
  `Color` varchar(45) NOT NULL,
  `Door` varchar(45) NOT NULL,
  `VIN_No` varchar(45) NOT NULL,
  `Plate_No` varchar(150) NOT NULL,
  `Chanssis` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `Customer_id`, `Model`, `Make`, `Year`, `Color`, `Door`, `VIN_No`, `Plate_No`, `Chanssis`) VALUES
(1, 1, 'Land Cruser V8', 'Japan', '2018', 'light gray', '4', '12345', '', ''),
(2, 2, 'Land Cruser V8', 'Japan', '2018', 'light gray', '4', '12345', '', ''),
(3, 3, '', '', 'choose year', '', '', '', '', ''),
(4, 4, 'Land Cruser V8', 'Japan', '2017', 'Silver', '4', '233442334', '2342ed43', '232123'),
(5, 5, 'Land Cruser V8', 'Japan', '2017', 'Silver', '4', '233442334', '2342ed43', '232123'),
(6, 6, 'Land Cruser V8', 'Japan', '2017', 'Silver', '4', '233442334', '2342ed43', '232123'),
(7, 7, 'Land Cruser V8', 'Japan', '2017', 'Silver', '4', '233442334', '2342ed43', '232123'),
(8, 8, 'Land Cruser V8', 'Japan', '2017', 'Silver', '4', '233442334', '2342ed43', '232123'),
(9, 9, 'Land Cruser V8', 'Japan', '2017', 'Silver', '4', '233442334', '2342ed43', '232123'),
(10, 10, 'Land Cruser V8', 'Japan', '2017', 'Silver', '4', '233442334', '2342ed43', '232123'),
(11, 11, 'Land Cruser V8', 'Japan', '2017', 'Silver', '4', '233442334', '2342ed43', '232123'),
(12, 12, 'Land Cruser V8', 'Japan', '2017', 'Silver', '4', '233442334', '2342ed43', '232123'),
(13, 13, '', '', 'choose year', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_follow`
--
ALTER TABLE `card_follow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_services`
--
ALTER TABLE `card_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_bgrd`
--
ALTER TABLE `emp_bgrd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_experience`
--
ALTER TABLE `emp_experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estimation`
--
ALTER TABLE `estimation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `est_parts`
--
ALTER TABLE `est_parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forgotten_tools`
--
ALTER TABLE `forgotten_tools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inspection`
--
ALTER TABLE `inspection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ins_problems`
--
ALTER TABLE `ins_problems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lookup`
--
ALTER TABLE `lookup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_serives`
--
ALTER TABLE `pro_serives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Customer_id_idx` (`Customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `card_follow`
--
ALTER TABLE `card_follow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `card_services`
--
ALTER TABLE `card_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `emp_bgrd`
--
ALTER TABLE `emp_bgrd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `emp_experience`
--
ALTER TABLE `emp_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `estimation`
--
ALTER TABLE `estimation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `est_parts`
--
ALTER TABLE `est_parts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `forgotten_tools`
--
ALTER TABLE `forgotten_tools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inspection`
--
ALTER TABLE `inspection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ins_problems`
--
ALTER TABLE `ins_problems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lookup`
--
ALTER TABLE `lookup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `payroll`
--
ALTER TABLE `payroll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pro_serives`
--
ALTER TABLE `pro_serives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `Customer_id` FOREIGN KEY (`Customer_id`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
