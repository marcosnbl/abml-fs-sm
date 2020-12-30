-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-12-2020 a las 21:07:48
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `abml-fs`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--


CREATE TABLE `abml-fs-sm`.`alumnos` ( 
  `id` INT NOT NULL AUTO_INCREMENT ,
  `curso` VARCHAR(255) NOT NULL , 
  `nombre` VARCHAR(255) NOT NULL , 
  `email` VARCHAR(255) NOT NULL , 
  `dni` VARCHAR(255) NOT NULL , 
  `fecha_creacion` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , 
  PRIMARY KEY (`id`)) ENGINE = InnoDB;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
