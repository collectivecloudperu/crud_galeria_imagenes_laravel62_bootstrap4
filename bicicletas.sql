-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-04-2020 a las 22:32:08
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laravel6`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bicicletas`
--

CREATE TABLE `bicicletas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagenes` int(10) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `bicicletas`
--

INSERT INTO `bicicletas` (`id`, `nombre`, `precio`, `stock`, `imagenes`, `url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Bicicleta Trek Aro 29', '3500', '25', 2704201810, 'bicicleta-trek-aro-29', '2020-04-27 23:10:25', '2020-04-27 23:10:25', NULL),
(2, 'Bicicleta Santa Cruz Aro 29', '8000', '35', 2704201810, 'bicicleta-santa-cruz-aro-29', '2020-04-27 23:10:57', '2020-04-27 23:10:57', NULL),
(9, 'Bicicleta Giant Aro 27.5', '3500', '45', 2704202030, 'bicicleta-giant-aro-275', '2020-04-28 01:30:59', '2020-04-28 01:30:59', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_bicicletas`
--

CREATE TABLE `img_bicicletas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `formato` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bicicletas_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `img_bicicletas`
--

INSERT INTO `img_bicicletas` (`id`, `nombre`, `formato`, `bicicletas_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'trk3.jpg', 'jpg', 1, '2020-04-27 23:10:25', '2020-04-27 23:10:25', NULL),
(2, 'trk2.jpg', 'jpg', 1, '2020-04-27 23:10:25', '2020-04-27 23:10:25', NULL),
(3, 'trk1.jpg', 'jpg', 1, '2020-04-27 23:10:25', '2020-04-27 23:10:25', NULL),
(4, 'scz4.jpg', 'jpg', 2, '2020-04-27 23:10:57', '2020-04-27 23:10:57', NULL),
(5, 'scz3.jpg', 'jpg', 2, '2020-04-27 23:10:57', '2020-04-27 23:10:57', NULL),
(6, 'scz2.jpg', 'jpg', 2, '2020-04-27 23:10:57', '2020-04-27 23:10:57', NULL),
(7, 'scz1.jpg', 'jpg', 2, '2020-04-27 23:10:57', '2020-04-27 23:10:57', NULL),
(17, 'bg5.jpg', 'jpg', 9, '2020-04-28 01:30:59', '2020-04-28 01:30:59', NULL),
(18, 'bg4.jpg', 'jpg', 9, '2020-04-28 01:30:59', '2020-04-28 01:30:59', NULL),
(19, 'bg3.jpg', 'jpg', 9, '2020-04-28 01:30:59', '2020-04-28 01:30:59', NULL),
(20, 'bg2.jpg', 'jpg', 9, '2020-04-28 01:30:59', '2020-04-28 01:30:59', NULL),
(21, 'bg1.jpg', 'jpg', 9, '2020-04-28 01:30:59', '2020-04-28 01:30:59', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugos`
--

CREATE TABLE `jugos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_08_19_000000_create_failed_jobs_table', 1),
(2, '2019_12_04_165032_create_jugos_table', 1),
(3, '2019_12_05_153841_create_bicicletas_table', 1),
(4, '2020_01_20_170852_create_img_bicicletas_table', 1),
(5, '2020_04_27_180645_create_jugos_table', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bicicletas`
--
ALTER TABLE `bicicletas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `img_bicicletas`
--
ALTER TABLE `img_bicicletas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jugos`
--
ALTER TABLE `jugos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bicicletas`
--
ALTER TABLE `bicicletas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `img_bicicletas`
--
ALTER TABLE `img_bicicletas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `jugos`
--
ALTER TABLE `jugos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
