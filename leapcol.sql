-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2025 a las 11:17:01
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `leapcol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `estado` enum('activo','inactivo') DEFAULT 'activo',
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_actualizacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `estado`, `fecha_creacion`, `fecha_actualizacion`) VALUES
(1, 'Software de Gestión', 'Sistemas de gestión empresarial y administrativa', 'activo', '2025-11-19 22:22:15', '2025-11-19 22:22:15'),
(2, 'Desarrollo Web', 'Servicios de desarrollo de sitios web y aplicaciones', 'activo', '2025-11-19 22:22:15', '2025-11-19 22:22:15'),
(3, 'Consultoría TI', 'Servicios de consultoría en tecnología', 'activo', '2025-11-19 22:22:15', '2025-11-19 22:22:15'),
(4, 'Soporte Técnico', 'Servicios de soporte y mantenimiento', 'activo', '2025-11-19 22:22:15', '2025-11-19 22:22:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat_messages`
--

CREATE TABLE `chat_messages` (
  `id` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mensaje` text NOT NULL,
  `telegram_message_id` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2024-01-01-000001', 'App\\Database\\Migrations\\CreateUsersTable', 'default', 'App', 1763533211, 1),
(2, '2025-01-01-000001', 'App\\Database\\Migrations\\CreateChatMessages', 'default', 'App', 1763943929, 2),
(3, '2025-11-23-000001', 'App\\Database\\Migrations\\CreateSuscripcionesTable', 'default', 'App', 1763943929, 2),
(4, '2024-11-24-000001', 'App\\Database\\Migrations\\AddNameToUsersTable', 'default', 'App', 1763955779, 3),
(5, '2024-01-01-000001', 'App\\Database\\Migrations\\CreatePruebasGratisTable', 'default', 'App', 1764238483, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `precio_oferta` decimal(10,2) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `categoria_id` int(11) NOT NULL,
  `mas_vendido` tinyint(1) DEFAULT 0,
  `imagen_principal` varchar(255) DEFAULT NULL,
  `imagenes_adicionales` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`imagenes_adicionales`)),
  `stock` int(11) DEFAULT 0,
  `estado` enum('activo','inactivo') DEFAULT 'activo',
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_actualizacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `precio_oferta`, `descripcion`, `categoria_id`, `mas_vendido`, `imagen_principal`, `imagenes_adicionales`, `stock`, `estado`, `fecha_creacion`, `fecha_actualizacion`) VALUES
(1, 'sistema de billar', 30.00, 249.99, 'Sistema punto de venta completo con inventario, facturación y reportes\r\n\r\n- sistema pos\r\n- facturas', 1, 1, '1763862637_258a8d2b9c091cac02c1.jpg', '[\"1763890034_5cd9070cefa416dc36e2.png\",\"1763890034_f1f9687b5b7561f470ba.png\",\"1763890034_c3aec5cbb8cea1a066fa.png\",\"1763890034_2fc25d60c463b7fa073f.png\"]', 0, 'activo', '2025-11-19 22:22:15', '2025-11-24 04:45:08'),
(2, 'Página Web Corporativa', 599.99, NULL, 'Desarrollo de página web corporativa responsive con panel administrativo', 2, 1, '1763862671_b952e7c2fcd1b58b5217.jpg', NULL, 0, 'activo', '2025-11-19 22:22:15', '2025-11-23 06:51:11'),
(3, 'Sistema de Inventarios', 199.99, 179.99, 'Control completo de inventarios con alertas y reportes automáticos', 1, 0, '1763862680_bfe75296ed1f89d589af.jpg', NULL, 0, 'activo', '2025-11-19 22:22:15', '2025-11-23 06:51:20'),
(4, 'Consultoría Digital', 149.99, NULL, 'Asesoría para transformación digital de tu empresa', 3, 0, '1763862689_e1568139406c61e8b401.jpg', NULL, 0, 'activo', '2025-11-19 22:22:15', '2025-11-23 06:51:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pruebas_gratis`
--

CREATE TABLE `pruebas_gratis` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `producto_id` int(11) UNSIGNED NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `fecha_expiracion` datetime NOT NULL,
  `estado` enum('activa','expirada','cancelada') NOT NULL DEFAULT 'activa',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pruebas_gratis`
--

INSERT INTO `pruebas_gratis` (`id`, `user_id`, `producto_id`, `fecha_inicio`, `fecha_expiracion`, `estado`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2025-11-27 10:14:52', '2025-12-11 10:14:52', 'activa', '2025-11-27 10:14:52', '2025-11-27 10:14:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscripciones`
--

CREATE TABLE `suscripciones` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `producto_id` int(11) NOT NULL,
  `fecha_compra` datetime NOT NULL,
  `fecha_expiracion` datetime NOT NULL,
  `estado` enum('activo','inactivo','expirado') NOT NULL DEFAULT 'activo',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `suscripciones`
--

INSERT INTO `suscripciones` (`id`, `user_id`, `producto_id`, `fecha_compra`, `fecha_expiracion`, `estado`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2025-11-24 01:33:08', '2025-11-24 01:33:08', 'activo', '2025-11-23 19:33:33', '2025-11-24 19:33:37'),
(3, 2, 1, '2025-11-23 19:55:27', '2026-11-23 19:55:27', 'activo', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `estado` enum('activo','inactivo') NOT NULL DEFAULT 'activo',
  `rol` enum('administrador','cliente') NOT NULL DEFAULT 'cliente',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `estado`, `rol`, `created_at`, `updated_at`) VALUES
(1, 'Carlos Lopez', 'carloslxpxz@gmail.com', '$2y$10$tRF9WvmvYytfreLP4PWMPerWXyNxQ3nuPQrj2xs4uNu.SmWZaE/iC', 'activo', 'administrador', '2025-11-19 01:47:32', '2025-11-19 01:47:32'),
(2, 'carlos', 'carlos@gmail.com', '$2y$10$tRF9WvmvYytfreLP4PWMPerWXyNxQ3nuPQrj2xs4uNu.SmWZaE/iC', 'activo', 'cliente', '2025-11-19 01:47:32', '2025-11-19 01:47:32'),
(3, 'Leapcol', 'leapcol.soporte@gmail.com', '$2y$10$dX/gD1oHhymR3.n7I5ejceGZSylXswSQOJ/sI6zMyXREdjXkyTV7y', 'activo', 'cliente', '2025-11-24 03:43:22', '2025-11-24 03:43:22');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `chat_messages`
--
ALTER TABLE `chat_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- Indices de la tabla `pruebas_gratis`
--
ALTER TABLE `pruebas_gratis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `producto_id` (`producto_id`);

--
-- Indices de la tabla `suscripciones`
--
ALTER TABLE `suscripciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `suscripciones_user_id_foreign` (`user_id`),
  ADD KEY `suscripciones_producto_id_foreign` (`producto_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `chat_messages`
--
ALTER TABLE `chat_messages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pruebas_gratis`
--
ALTER TABLE `pruebas_gratis`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `suscripciones`
--
ALTER TABLE `suscripciones`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `suscripciones`
--
ALTER TABLE `suscripciones`
  ADD CONSTRAINT `suscripciones_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `suscripciones_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
