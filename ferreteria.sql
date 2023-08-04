-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2023 at 08:46 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ferreteria`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `id_cat` int(11) NOT NULL,
  `nom_cat` varchar(50) DEFAULT NULL,
  `descripcion_cat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`id_cat`, `nom_cat`, `descripcion_cat`) VALUES
(1, 'Clavos', 'Asagsagsa'),
(2, 'asfasg', 'a'),
(3, 'sdajgbsadk', 'asdgjsagljag');

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `id_cli` int(11) NOT NULL,
  `cedula_cli` varchar(10) DEFAULT NULL,
  `apellido_cli` varchar(50) DEFAULT NULL,
  `nombre_cli` varchar(50) DEFAULT NULL,
  `telefono_cli` varchar(10) DEFAULT NULL,
  `direccion_cli` varchar(50) DEFAULT NULL,
  `email_cli` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id_cli`, `cedula_cli`, `apellido_cli`, `nombre_cli`, `telefono_cli`, `direccion_cli`, `email_cli`) VALUES
(1, '1721266581', 'Quinaluisa', 'Leonardo', '3118251', 'Quito', 'leo@gmail.co');

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `id_pro` int(11) NOT NULL,
  `fk_id_cat` int(11) DEFAULT NULL,
  `codigo_pro` varchar(50) DEFAULT NULL,
  `nombre_pro` varchar(50) DEFAULT NULL,
  `precio_pro` varchar(2) DEFAULT NULL,
  `stock_pro` varchar(10) DEFAULT NULL,
  `foto_pro` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`id_pro`, `fk_id_cat`, `codigo_pro`, `nombre_pro`, `precio_pro`, `stock_pro`, `foto_pro`) VALUES
(6, 1, '1', 'ASASG', '22', '121', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usu` int(11) NOT NULL,
  `email_usu` varchar(300) DEFAULT NULL,
  `password_usu` varchar(500) DEFAULT NULL,
  `apellido_usu` varchar(250) DEFAULT NULL,
  `nombre_usu` varchar(250) DEFAULT NULL,
  `perfil_usu` varchar(50) DEFAULT NULL,
  `creacion_usu` datetime DEFAULT current_timestamp(),
  `actualizacion_usu` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usu`, `email_usu`, `password_usu`, `apellido_usu`, `nombre_usu`, `perfil_usu`, `creacion_usu`, `actualizacion_usu`) VALUES
(1, 'david@gmail.com', '123', 'Quinaluisa', 'David', 'ADMINISTRADOR', '2023-07-20 10:55:18', '2023-07-20 10:55:18'),
(2, 'stalin@gmail.com', '123', 'Manoba', 'Stalin', 'SECRETARIO', '2023-07-20 10:56:05', '2023-07-20 10:56:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cli`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_pro`),
  ADD KEY `fk_id_cat` (`fk_id_cat`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usu`),
  ADD UNIQUE KEY `email_usu` (`email_usu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`fk_id_cat`) REFERENCES `categoria` (`id_cat`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
