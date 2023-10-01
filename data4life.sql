-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2023 at 05:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data4life`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('basil', 'basil'),
('vinay', 'vinay'),
('aman', 'aman');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `name` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `bloodgroup` varchar(5) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(3) NOT NULL,
  `weight` int(5) NOT NULL,
  `state` varchar(15) NOT NULL,
  `district` varchar(15) NOT NULL,
  `zipcode` int(10) NOT NULL,
  `area` varchar(30) NOT NULL,
  `landmark` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`name`, `phone`, `email`, `password`, `bloodgroup`, `birthdate`, `gender`, `weight`, `state`, `district`, `zipcode`, `area`, `landmark`) VALUES
('basil', '9831273', 'basil@gmail.com', 'basil', 'B+', '2023-09-12', 'Mal', 100, 'kerala', 'kottayam', 21342, 'my area', 'nil'),
('John Doe', '1234567890', 'johndoe@email.com', 'securepassword', 'A+', '1990-05-15', 'M', 70, 'Tamil Nadu', 'Chennai', 600001, 'T. Nagar', ''),
('Jane Smith', '9876543210', 'janesmith@email.com', 'strongpassword', 'O-', '1988-08-20', 'F', 65, 'Maharashtra', 'Mumbai', 400001, 'Colaba', 'Gateway of India'),
('Alice Johnson', '5555555555', 'alice@email.com', 'safepass', 'B+', '1995-12-10', 'F', 55, 'Karnataka', 'Bangalore', 560001, 'MG Road', ''),
('Bob Brown', '7777777777', 'bob@email.com', 'secretword', 'AB-', '1980-03-25', 'M', 80, 'Delhi', 'New Delhi', 110001, 'Connaught Place', 'India Gate'),
('Eva Lee', '8888888888', 'eva@email.com', 'hiddenpass', 'O+', '1998-09-05', 'F', 68, 'West Bengal', 'Kolkata', 700001, 'Park Street', 'Victoria Memorial'),
('David Wilson', '5551112222', 'david@email.com', 'securepass', 'A-', '1985-07-12', 'M', 75, 'Kerala', 'Kochi', 682001, 'Fort Kochi', ''),
('Sarah Davis', '9876543210', 'sarah@email.com', 'strongpass', 'B+', '1992-04-28', 'F', 58, 'Rajasthan', 'Jaipur', 302001, 'M.I. Road', ''),
('Michael Lee', '1234567890', 'michael@email.com', 'safepass', 'O+', '1997-10-05', 'M', 70, 'Gujarat', 'Ahmedabad', 380001, 'C.G. Road', ''),
('Emily Martin', '7777777777', 'emily@email.com', 'secretword', 'AB+', '1993-01-15', 'F', 64, 'Andhra Pradesh', 'Hyderabad', 500001, 'Banjara Hills', ''),
('James Johnson', '8888888888', 'james@email.com', 'hiddenpass', 'B-', '1982-09-20', 'M', 85, 'Uttar Pradesh', 'Lucknow', 226001, 'Hazratganj', ''),
('Olivia Brown', '5555555555', 'olivia@email.com', 'superpass', 'A-', '1999-03-30', 'F', 60, 'Odisha', 'Bhubaneswar', 751001, 'Janpath', ''),
('William Smith', '3333333333', 'william@email.com', 'ultrapass', 'O-', '1991-12-08', 'M', 72, 'Telangana', 'Secunderabad', 500003, 'Paradise Circle', ''),
('Sophia Patel', '2222222222', 'sophia@email.com', 'megapass', 'AB+', '1994-06-25', 'F', 78, 'Assam', 'Guwahati', 781001, 'Paltan Bazaar', ''),
('Alexander Miller', '7771112222', 'alex@email.com', 'hyperpass', 'B+', '1987-02-18', 'M', 92, 'Haryana', 'Gurgaon', 122001, 'Golf Course Road', ''),
('Ava Wilson', '8881112222', 'ava@email.com', 'extrapass', 'A+', '1996-11-10', 'F', 66, 'Chhattisgarh', 'Raipur', 492001, 'Telibandha', ''),
('Liam Davis', '9991112222', 'liam@email.com', 'ultrapassword', 'O-', '1990-08-17', 'M', 71, 'Punjab', 'Amritsar', 143001, 'Lawrence Road', ''),
('Mia Lee', '5556667777', 'mia@email.com', 'superpassword', 'AB-', '1989-05-22', 'F', 79, 'Bihar', 'Patna', 800001, 'Frazer Road', ''),
('Amelia Smith', '5559990000', 'amelia@email.com', 'gigapass', 'B-', '1995-09-07', 'F', 63, 'Kerala', 'Trivandrum', 695001, 'MG Road', ''),
('Daniel Wilson', '5552223333', 'daniel@email.com', 'terapass', 'A-', '1984-04-14', 'M', 77, 'West Bengal', 'Howrah', 711101, 'Howrah Bridge', ''),
('Sofia Davis', '5554443333', 'sofia@email.com', 'ultrapass', 'B+', '1997-06-19', 'F', 67, 'Maharashtra', 'Pune', 411001, 'FC Road', ''),
('Henry Johnson', '5553332222', 'henry@email.com', 'megapass', 'O-', '1981-11-26', 'M', 82, 'Gujarat', 'Surat', 395001, 'Ghod Dod Road', ''),
('Chloe Lee', '5552221111', 'chloe@email.com', 'superpass', 'AB-', '1999-02-23', 'F', 69, 'Rajasthan', 'Jodhpur', 342001, 'Sardarpura', ''),
('aa', '123', 'aa@gmail.com', '123', 'B+', '2023-09-15', 'Fem', 34, 'kerala', 'sdf', 12312, 'fasdf', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `name` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `bloodgroup` varchar(5) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(5) NOT NULL,
  `weight` int(5) NOT NULL,
  `state` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `zipcode` int(15) NOT NULL,
  `area` varchar(30) NOT NULL,
  `landmark` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`name`, `phone`, `email`, `password`, `bloodgroup`, `birthdate`, `gender`, `weight`, `state`, `district`, `zipcode`, `area`, `landmark`) VALUES
('aman', '436346336', 'aman@gmail.com', 'aman', 'B-', '2023-09-19', 'Other', 98, 'kerala', 'fdsfs', 1245, 'amreaa', 'dasdasd'),
('jojo', '3238197387', 'jojo@gmail.com', '12345', 'B+', '2023-09-07', 'Other', 54, 'tt', 'td', 5345, 'fbfdxv', 'dfsdfsd'),
('Elijah Patel', '5558889999', 'elijah@email.com', 'securepass', 'A+', '1988-12-14', 'M', 79, 'Andhra Pradesh', 'Vishakhapatnam', 530001, 'Diamond Park', ''),
('Aria Brown', '5556661111', 'aria@email.com', 'strongpass', 'O+', '1992-05-29', 'F', 62, 'Uttarakhand', 'Dehradun', 248001, 'Moti Bazar', ''),
('Grace Davis', '5556663333', 'grace@email.com', 'secretword', 'AB-', '1998-07-10', 'F', 68, 'Telangana', 'Warangal', 506001, 'Hanamkonda', ''),
('Liam Wilson', '5556664444', 'liamw@email.com', 'hiddenpass', 'A-', '1983-02-09', 'M', 84, 'Karnataka', 'Mysore', 570001, 'Devaraja Urs Road', ''),
('James Smith', '5556666666', 'jamess@email.com', 'strongpass', 'AB+', '1990-11-03', 'M', 74, 'Tamil Nadu', 'Coimbatore', 641001, 'RS Puram', ''),
('Ava Patel', '5556667777', 'avap@email.com', 'safepass', 'B+', '1985-08-27', 'F', 63, 'Maharashtra', 'Nagpur', 440001, 'Sadar Bazar', ''),
('Mason Johnson', '5556668888', 'masonj@email.com', 'secretword', 'AB-', '1982-04-22', 'M', 81, 'Gujarat', 'Vadodara', 390001, 'Alkapuri', ''),
('Scarlett Davis', '5556669999', 'scarlettd@email.com', 'hiddenpass', 'O+', '1995-06-15', 'F', 69, 'Madhya Pradesh', 'Bhopal', 462001, 'MP Nagar', ''),
('Oliver Brown', '5557771111', 'oliverb@email.com', 'securepass', 'O-', '1987-10-01', 'M', 71, 'Odisha', 'Cuttack', 753001, 'Bidanasi', ''),
('Sophia Wilson', '5557772222', 'sophiaw@email.com', 'strongpass', 'A+', '1993-03-07', 'F', 65, 'Uttar Pradesh', 'Varanasi', 221001, 'Sigra', ''),
('Lucas Patel', '5557773333', 'lucasp@email.com', 'safepass', 'AB+', '1991-01-30', 'M', 76, 'Chhattisgarh', 'Bhilai', 490001, 'Supela', ''),
('Mia Wilson', '5557775555', 'miaw@email.com', 'hiddenpass', 'O+', '1996-12-02', 'F', 68, 'Kerala', 'Kozhikode', 673001, 'Kallai', ''),
('Henry Smith', '5557776666', 'henrys@email.com', 'securepass', 'AB-', '1989-08-08', 'M', 72, 'Tamil Nadu', 'Madurai', 625001, 'Goripalayam', ''),
('Ethan Davis', '5557778888', 'ethand@email.com', 'safepass', 'A-', '1992-02-11', 'M', 78, 'Andhra Pradesh', 'Guntur', 522001, 'Brodipet', ''),
('Harper Patel', '5557779999', 'harperp@email.com', 'secretword', 'O+', '1986-07-05', 'F', 63, 'Punjab', 'Patiala', 147001, 'Rajpura Road', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
