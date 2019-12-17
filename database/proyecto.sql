-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-12-2019 a las 20:02:59
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_asesor`
--

CREATE TABLE `tb_asesor` (
  `id_asesor` int(10) UNSIGNED NOT NULL,
  `nombre_asesor` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido_asesor` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `correo_asesor` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `genero` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `id_local` int(10) UNSIGNED NOT NULL,
  `id_rol` int(10) UNSIGNED NOT NULL,
  `telefono_asesor` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_naci_asesor` date NOT NULL,
  `tipo_docu_asesor` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tb_asesor`
--

INSERT INTO `tb_asesor` (`id_asesor`, `nombre_asesor`, `apellido_asesor`, `correo_asesor`, `genero`, `id_local`, `id_rol`, `telefono_asesor`, `fecha_naci_asesor`, `tipo_docu_asesor`, `created_at`, `updated_at`) VALUES
(1, 'Stevens', 'Garcia', 'Sgarcia5940@misena.edu.co', 'M', 202, 201, '3043277453', '2019-04-03', 'Cedula', '2019-12-13 11:16:14', '2019-12-15 12:00:34'),
(2, 'Jhon', 'David', 'jhon@gmail.com', 'F', 100, 201, '301457894', '2019-12-04', 'Cedula', '2019-12-12 05:00:00', '2019-12-15 20:28:28'),
(3, 'Felipe', 'Aranjo', 'sfasf@gmail.com', 'M', 102, 202, '919829898', '2019-12-01', 'Cedula ', '2019-12-04 13:19:14', '2019-12-19 14:24:17'),
(4, 'Tatiana', 'Torres', 'afoaf@gmail.com', 'F', 101, 202, '30285841', '2019-12-18', 'Cedula', '2019-12-15 20:29:01', '2019-12-15 20:29:01'),
(5, 'fafsafasfas', 'afafa', 'fasfasfasf@sfaf.com', 'M', 101, 201, '5156265', '2019-12-20', 'SAFSAFASF', '2019-12-16 03:58:27', '2019-12-16 03:58:27'),
(6, 'ffsfs', 'fsdfsdf', 'sfsf@fsdfdsf.com', 'F', 202, 201, '30285841', '2003-11-30', 'DSAFASF', '2019-12-16 04:29:53', '2019-12-16 04:29:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_local`
--

CREATE TABLE `tb_local` (
  `id_local` int(10) UNSIGNED NOT NULL,
  `descripcion_local` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `id_producto` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tb_local`
--

INSERT INTO `tb_local` (`id_local`, `descripcion_local`, `id_producto`, `created_at`, `updated_at`) VALUES
(100, 'aqaqaqaq', 502, '2019-12-11 16:29:12', '2019-12-15 04:49:39'),
(101, 'FSFSFDSGDSGDSGSDGSDGSGSDG', 500, '2019-12-17 09:17:14', '2019-12-15 04:52:51'),
(202, 'holas', 501, '2019-12-15 11:55:08', '2019-12-15 11:55:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_marcas`
--

CREATE TABLE `tb_marcas` (
  `id_marcas` int(10) UNSIGNED NOT NULL,
  `descripcion_marca` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tb_marcas`
--

INSERT INTO `tb_marcas` (`id_marcas`, `descripcion_marca`, `created_at`, `updated_at`) VALUES
(1100, 'sgdgdgfafsgsgsg', '2019-12-13 17:29:30', '2019-12-25 13:20:14'),
(1101, 'GFDGFDGFDGDFGFDGFD', '2019-12-18 13:21:18', '2019-12-11 10:17:18'),
(1102, 'aaaaaaaaaaaaaaa', '2019-12-17 12:19:15', '2019-12-15 21:25:45'),
(1103, 'Soy bonito y tengo novia', '2019-12-15 21:24:21', '2019-12-15 21:24:21'),
(1104, 'te amoooooooooooo', '2019-12-16 03:29:22', '2019-12-16 03:29:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_movimiento`
--

CREATE TABLE `tb_movimiento` (
  `id_movimiento` int(10) UNSIGNED NOT NULL,
  `id_producto` int(10) UNSIGNED NOT NULL,
  `fech_entrada` date NOT NULL,
  `asesor_entrada` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `local_entrada` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `imei` int(11) NOT NULL,
  `asesor_salida` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `local_salida` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `obser_movimi` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `id_proveedor` int(10) UNSIGNED NOT NULL,
  `id_asesor` int(10) UNSIGNED NOT NULL,
  `id_local` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tb_movimiento`
--

INSERT INTO `tb_movimiento` (`id_movimiento`, `id_producto`, `fech_entrada`, `asesor_entrada`, `local_entrada`, `imei`, `asesor_salida`, `local_salida`, `obser_movimi`, `id_usuario`, `id_proveedor`, `id_asesor`, `id_local`, `created_at`, `updated_at`) VALUES
(2001, 500, '2019-12-12', 'FDSFSDFSD', 'GDFFDSFSDF', 25285252, 'FSFDSFSDFSDF', 'SDFSDFDSFDSF', 'SFDSGSGSFGAGDGSDGSGSDG', 5000, 10000, 1, 100, '2019-12-14 10:29:23', '2019-12-25 11:14:16'),
(2002, 502, '2019-12-13', 'GSGSDGSDGDSG', 'SDGSDGSDG', 2525295, 'FDSFDSFSDF', 'SDFSDFSDF', 'SDFSDFSDFSDFDSF', 5001, 10001, 2, 102, '2019-12-15 16:24:20', '2019-12-15 13:18:18'),
(2003, 501, '1982-09-03', 'Chupame', 'Webo', 56464565, 'Pele', 'Esa', 'Ahora le metere el pene en la nalga de mi novia', 5001, 10001, 3, 202, '2019-12-16 04:35:08', '2019-12-16 04:50:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_productos`
--

CREATE TABLE `tb_productos` (
  `id_producto` int(10) UNSIGNED NOT NULL,
  `desc_producto` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `id_marcas` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tb_productos`
--

INSERT INTO `tb_productos` (`id_producto`, `desc_producto`, `id_marcas`, `created_at`, `updated_at`) VALUES
(500, 'sdsfsdfdsfdsfdsfsdfsdf', 1103, '2019-12-13 05:00:00', '2019-12-16 05:30:06'),
(501, 'DSGDSGSDGDSGSDGSDGSDGSDG', 1101, '2019-12-14 23:29:05', '2019-12-14 23:29:05'),
(502, 'SDFSKFMSDKFOIEJFPEWMFPSFSFS', 1102, '2019-12-18 09:12:14', '2019-12-16 09:16:17'),
(503, 'dgsdgdsgdsgsdgsg', 1100, '2019-12-16 05:25:59', '2019-12-16 05:25:59'),
(504, 'dsgsdgsfsfsfdsgdsg', 1100, '2019-12-16 05:30:24', '2019-12-16 05:30:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_proveedor`
--

CREATE TABLE `tb_proveedor` (
  `id_proveedor` int(10) UNSIGNED NOT NULL,
  `nombre_proveedor` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido_proveedor` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `correo_proveedor` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono_proveedor` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `genero_proveedor` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo_docu_proveedor` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tb_proveedor`
--

INSERT INTO `tb_proveedor` (`id_proveedor`, `nombre_proveedor`, `apellido_proveedor`, `correo_proveedor`, `telefono_proveedor`, `genero_proveedor`, `tipo_docu_proveedor`, `created_at`, `updated_at`) VALUES
(10001, 'sfsfsdfdsf', 'sdfdsfsdfs', 'dfsdfdsfsdfdsdf@afasd.com', '646841684', 'M', 'fasfasfaf', '2019-12-18 12:17:18', '2019-12-25 09:20:19'),
(10002, 'sdadsadas', 'addasda', 'sfafafa@gmail.com', '6511', 'M', 'SSAAFASF', '2019-12-16 18:58:45', '2019-12-16 18:58:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_roles`
--

CREATE TABLE `tb_roles` (
  `id_rol` int(10) NOT NULL,
  `nom_rol_usuario` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tb_roles`
--

INSERT INTO `tb_roles` (`id_rol`, `nom_rol_usuario`, `created_at`, `updated_at`) VALUES
(200, 'Steven', '2019-12-13 11:14:24', '2019-12-13 19:35:31'),
(201, 'Jhon', '2019-12-10 14:17:19', '2019-12-12 11:25:26'),
(202, 'Popeye', '2019-12-13 16:17:28', '2019-12-15 12:11:33'),
(203, 'sfsfdd', '2019-12-15 12:10:05', '2019-12-15 12:10:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_roles_x_usuarios`
--

CREATE TABLE `tb_roles_x_usuarios` (
  `id_roles_usuarios` int(10) UNSIGNED NOT NULL,
  `id_rol` int(10) UNSIGNED NOT NULL,
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tb_roles_x_usuarios`
--

INSERT INTO `tb_roles_x_usuarios` (`id_roles_usuarios`, `id_rol`, `id_usuario`, `created_at`, `updated_at`) VALUES
(9000, 201, 5001, '2019-12-14 23:33:54', '2019-12-16 06:40:01'),
(9001, 201, 5001, '2019-12-19 13:13:21', '2019-12-25 14:23:14'),
(9002, 201, 5000, '2019-12-16 06:31:32', '2019-12-16 06:31:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `nomb_usuario` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido_usuario` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo_docu_usuario` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `genero_usuario` varchar(3) COLLATE utf8_spanish2_ci NOT NULL,
  `id_rol` int(10) UNSIGNED NOT NULL,
  `telefono_usuario` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_crea_usuario` date NOT NULL,
  `fecha_naci_usuario` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usuario`, `nomb_usuario`, `apellido_usuario`, `tipo_docu_usuario`, `genero_usuario`, `id_rol`, `telefono_usuario`, `fecha_crea_usuario`, `fecha_naci_usuario`, `created_at`, `updated_at`) VALUES
(5000, 'afafafaf', 'afafassf', 'afasfasfasf', 'M', 200, '15151', '2019-12-03', '2019-12-25', '2019-12-14 17:17:27', '2019-12-14 12:17:23'),
(5001, 'dsdfsdf', 'sdfsdfsf', 'sdfsdfs', 'F', 201, '915119', '2019-12-03', '2019-12-10', '2019-12-19 13:17:17', '2019-12-20 14:24:24'),
(5002, 'Tatiana', 'Torres', 'Contraseña', 'F', 200, '304625911', '2003-08-28', '1988-07-22', '2019-12-16 18:40:16', '2019-12-16 18:40:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `api_token` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `api_token`, `password`, `remember_token`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Steven', 'sgarcia5940@misena.edu.co', '2019-12-12 05:00:00', '$2y$10$b0Eu4ePAeBnTYwUfuwuqke.inZbrmkNZ3Kvx.jLa3wzDa2Iy0qY1O', '$2y$10$b0Eu4ePAeBnTYwUfuwuqke.inZbrmkNZ3Kvx.jLa3wzDa2Iy0qY1O', 't0SatwN1BXEtAePWWS1jdPyvZI1hbzGPuOlEpNN3EY63lKlO1fcdIvYV4N9y', 'admin', '2019-12-15 03:48:52', '2019-12-15 03:48:52');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `tb_asesor`
--
ALTER TABLE `tb_asesor`
  ADD PRIMARY KEY (`id_asesor`);

--
-- Indices de la tabla `tb_local`
--
ALTER TABLE `tb_local`
  ADD PRIMARY KEY (`id_local`);

--
-- Indices de la tabla `tb_marcas`
--
ALTER TABLE `tb_marcas`
  ADD PRIMARY KEY (`id_marcas`);

--
-- Indices de la tabla `tb_movimiento`
--
ALTER TABLE `tb_movimiento`
  ADD PRIMARY KEY (`id_movimiento`);

--
-- Indices de la tabla `tb_productos`
--
ALTER TABLE `tb_productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `tb_proveedor`
--
ALTER TABLE `tb_proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `tb_roles`
--
ALTER TABLE `tb_roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tb_roles_x_usuarios`
--
ALTER TABLE `tb_roles_x_usuarios`
  ADD PRIMARY KEY (`id_roles_usuarios`);

--
-- Indices de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_api_token_unique` (`api_token`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_asesor`
--
ALTER TABLE `tb_asesor`
  MODIFY `id_asesor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tb_local`
--
ALTER TABLE `tb_local`
  MODIFY `id_local` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT de la tabla `tb_marcas`
--
ALTER TABLE `tb_marcas`
  MODIFY `id_marcas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1105;

--
-- AUTO_INCREMENT de la tabla `tb_movimiento`
--
ALTER TABLE `tb_movimiento`
  MODIFY `id_movimiento` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2004;

--
-- AUTO_INCREMENT de la tabla `tb_productos`
--
ALTER TABLE `tb_productos`
  MODIFY `id_producto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=505;

--
-- AUTO_INCREMENT de la tabla `tb_proveedor`
--
ALTER TABLE `tb_proveedor`
  MODIFY `id_proveedor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10003;

--
-- AUTO_INCREMENT de la tabla `tb_roles`
--
ALTER TABLE `tb_roles`
  MODIFY `id_rol` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT de la tabla `tb_roles_x_usuarios`
--
ALTER TABLE `tb_roles_x_usuarios`
  MODIFY `id_roles_usuarios` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9003;

--
-- AUTO_INCREMENT de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id_usuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5003;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
