-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 16, 2011 at 11:08 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `so_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `usuario` varchar(50) NOT NULL,
  `instrumento` varchar(50) NOT NULL,
  `comentario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comentarios`
--

INSERT INTO `comentarios` (`usuario`, `instrumento`, `comentario`) VALUES
('Teban', 'Guitarra', 'Es lo mejor q hay. Es lo mejor q hay. Es lo mejor '),
('Luis', 'Bateria', 'Es lo mejor q puede haber');

-- --------------------------------------------------------

--
-- Table structure for table `inventario`
--

CREATE TABLE IF NOT EXISTS `inventario` (
  `id` int(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `cantidad` int(50) NOT NULL,
  `costo` int(50) NOT NULL,
  `proveedor` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventario`
--

INSERT INTO `inventario` (`id`, `nombre`, `marca`, `cantidad`, `costo`, `proveedor`) VALUES
(3, 'Bateria', 'Pearl', 3, 345678, 'La voz'),
(7, 'Guitarra', 'Gibson', 2, 300000, 'La voz'),
(8, 'Tumbas', 'Santana', 4, 590000, 'Banbach');

-- --------------------------------------------------------

--
-- Table structure for table `proveedores`
--

CREATE TABLE IF NOT EXISTS `proveedores` (
  `id` int(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `producto` varchar(50) NOT NULL,
  `ubicacion` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proveedores`
--

INSERT INTO `proveedores` (`id`, `nombre`, `tipo`, `producto`, `ubicacion`) VALUES
(1, 'La voz', 'nacional', 'guitarras', 'san jose'),
(2, 'Banbach', 'nacional', 'baterias', 'limon'),
(3, 'Mubndo', 'internacional', 'loras', 'San JosÃ©');
