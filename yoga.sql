-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 14, 2016 at 02:59 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yoga`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `Nama` varchar(150) NOT NULL,
  `Kelas` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Jeniskelamin` varchar(50) NOT NULL,
  `Agama` varchar(50) NOT NULL,
  `Alamat` varchar(200) NOT NULL,
  `Tempat` date NOT NULL,
  `Alasan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`Nama`, `Kelas`, `email`, `Jeniskelamin`, `Agama`, `Alamat`, `Tempat`, `Alasan`) VALUES
('yoga pamungkas', 'balfelns', 'jl fleka ', 'laki-laki', 'aklwbnlk.a f', ' jf k', '0000-00-00', 'jl bl aw'),
('khvhv', 'vjh', 'fm,;welm', '-pilih-', 'wq', 'fwq', '0000-00-00', 'fw'),
('khvhv', 'vjh', 'fm,;welm', '-pilih-', 'wq', 'fwq', '0000-00-00', 'fw'),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('', '', '', '-pilih-', '', '', '0000-00-00', ''),
('fikri', 'ihdfias', 'jkbdfj', '-pilih-', 'bobq', 'odi', '0000-00-00', 'b;pi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
