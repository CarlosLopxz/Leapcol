-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 05, 2026 at 08:02 PM
-- Server version: 8.4.3
-- PHP Version: 8.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leapcol`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id` int NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_general_ci,
  `estado` enum('activo','inactivo') COLLATE utf8mb4_general_ci DEFAULT 'activo',
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `estado`, `fecha_creacion`, `fecha_actualizacion`) VALUES
(1, 'Software de Gestión', 'Sistemas de gestión empresarial y administrativa', 'activo', '2025-11-19 22:22:15', '2025-11-19 22:22:15'),
(2, 'Desarrollo Web', 'Servicios de desarrollo de sitios web y aplicaciones', 'activo', '2025-11-19 22:22:15', '2025-11-19 22:22:15'),
(3, 'Consultoría TI', 'Servicios de consultoría en tecnología', 'activo', '2025-11-19 22:22:15', '2025-11-19 22:22:15'),
(4, 'Soporte Técnico', 'Servicios de soporte y mantenimiento', 'activo', '2025-11-19 22:22:15', '2025-11-19 22:22:15');

-- --------------------------------------------------------

--
-- Table structure for table `chat_messages`
--

CREATE TABLE `chat_messages` (
  `id` int UNSIGNED NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `mensaje` text COLLATE utf8mb4_general_ci NOT NULL,
  `telegram_message_id` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint UNSIGNED NOT NULL,
  `version` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `namespace` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2024-01-01-000001', 'App\\Database\\Migrations\\CreateUsersTable', 'default', 'App', 1763533211, 1),
(2, '2025-01-01-000001', 'App\\Database\\Migrations\\CreateChatMessages', 'default', 'App', 1763943929, 2),
(3, '2025-11-23-000001', 'App\\Database\\Migrations\\CreateSuscripcionesTable', 'default', 'App', 1763943929, 2),
(4, '2024-11-24-000001', 'App\\Database\\Migrations\\AddNameToUsersTable', 'default', 'App', 1763955779, 3),
(5, '2024-01-01-000001', 'App\\Database\\Migrations\\CreatePruebasGratisTable', 'default', 'App', 1764238483, 4);

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int NOT NULL,
  `nombre` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `precio_oferta` decimal(10,2) DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_general_ci,
  `categoria_id` int NOT NULL,
  `mas_vendido` tinyint(1) DEFAULT '0',
  `imagen_principal` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `imagenes_adicionales` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `stock` int DEFAULT '0',
  `estado` enum('activo','inactivo') COLLATE utf8mb4_general_ci DEFAULT 'activo',
  `tipo_producto` enum('alquiler','venta','a_medida') COLLATE utf8mb4_general_ci DEFAULT 'alquiler',
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `precio_oferta`, `descripcion`, `categoria_id`, `mas_vendido`, `imagen_principal`, `imagenes_adicionales`, `stock`, `estado`, `tipo_producto`, `fecha_creacion`, `fecha_actualizacion`) VALUES
(1, 'Inventario', 25000.00, 30000.00, 'Sistema punto de venta completo con inventario, facturación y reportes\r\n\r\n- sistema pos\r\n- facturas', 1, 1, '1763862637_258a8d2b9c091cac02c1.jpg', '[\"1763890034_5cd9070cefa416dc36e2.png\",\"1763890034_f1f9687b5b7561f470ba.png\",\"1763890034_c3aec5cbb8cea1a066fa.png\",\"1763890034_2fc25d60c463b7fa073f.png\"]', 0, 'activo', 'alquiler', '2025-11-19 22:22:15', '2026-01-04 06:35:58');

-- --------------------------------------------------------

--
-- Table structure for table `pruebas_gratis`
--

CREATE TABLE `pruebas_gratis` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `producto_id` int UNSIGNED NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `fecha_expiracion` datetime NOT NULL,
  `estado` enum('activa','expirada','cancelada') COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'activa',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pruebas_gratis`
--

INSERT INTO `pruebas_gratis` (`id`, `user_id`, `producto_id`, `fecha_inicio`, `fecha_expiracion`, `estado`, `created_at`, `updated_at`) VALUES
(5, 2, 1, '2026-01-04 03:56:11', '2026-01-18 03:56:11', 'activa', '2026-01-04 03:56:11', '2026-01-04 03:56:11');

-- --------------------------------------------------------

--
-- Table structure for table `sistemas`
--

CREATE TABLE `sistemas` (
  `id` int NOT NULL,
  `producto_id` int NOT NULL,
  `nombre_sistema` varchar(100) NOT NULL,
  `codigo_sistema` varchar(50) NOT NULL,
  `ruta_login` varchar(255) NOT NULL,
  `ruta_dashboard` varchar(255) NOT NULL,
  `controlador` varchar(100) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sistemas`
--

INSERT INTO `sistemas` (`id`, `producto_id`, `nombre_sistema`, `codigo_sistema`, `ruta_login`, `ruta_dashboard`, `controlador`, `activo`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sistema de Inventario', 'inventario', 'inventario/login', 'inventario/dashboard', 'Sistemas\\InventarioController', 1, '2026-01-03 20:09:24', '2026-01-03 20:09:24');

-- --------------------------------------------------------

--
-- Table structure for table `suscripciones`
--

CREATE TABLE `suscripciones` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `producto_id` int NOT NULL,
  `fecha_compra` datetime NOT NULL,
  `fecha_expiracion` datetime NOT NULL,
  `estado` enum('activo','inactivo','expirado') COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'activo',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `estado` enum('activo','inactivo') COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'activo',
  `rol` enum('administrador','cliente') COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'cliente',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `estado`, `rol`, `created_at`, `updated_at`) VALUES
(1, 'Carlos Lopez', 'carloslxpxz@gmail.com', '$2y$10$tRF9WvmvYytfreLP4PWMPerWXyNxQ3nuPQrj2xs4uNu.SmWZaE/iC', 'activo', 'administrador', '2025-11-19 01:47:32', '2025-11-19 01:47:32'),
(2, 'carlos', 'carlos@gmail.com', '$2y$10$tRF9WvmvYytfreLP4PWMPerWXyNxQ3nuPQrj2xs4uNu.SmWZaE/iC', 'activo', 'cliente', '2025-11-19 01:47:32', '2025-11-19 01:47:32'),
(3, 'Leapcol', 'leapcol.soporte@gmail.com', '$2y$10$dX/gD1oHhymR3.n7I5ejceGZSylXswSQOJ/sI6zMyXREdjXkyTV7y', 'activo', 'cliente', '2025-11-24 03:43:22', '2025-11-24 03:43:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_messages`
--
ALTER TABLE `chat_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- Indexes for table `pruebas_gratis`
--
ALTER TABLE `pruebas_gratis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `producto_id` (`producto_id`);

--
-- Indexes for table `sistemas`
--
ALTER TABLE `sistemas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sistemas_producto_id_foreign` (`producto_id`);

--
-- Indexes for table `suscripciones`
--
ALTER TABLE `suscripciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `suscripciones_user_id_foreign` (`user_id`),
  ADD KEY `suscripciones_producto_id_foreign` (`producto_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chat_messages`
--
ALTER TABLE `chat_messages`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pruebas_gratis`
--
ALTER TABLE `pruebas_gratis`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sistemas`
--
ALTER TABLE `sistemas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `suscripciones`
--
ALTER TABLE `suscripciones`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `suscripciones`
--
ALTER TABLE `suscripciones`
  ADD CONSTRAINT `suscripciones_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `suscripciones_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
