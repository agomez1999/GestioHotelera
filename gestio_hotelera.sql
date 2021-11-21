-- phpMyAdmin SQL Dump
-- version 5.0.4deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 21-11-2021 a las 15:52:00
-- Versión del servidor: 10.5.12-MariaDB-0+deb11u1
-- Versión de PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestio_hotelera`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `client`
--

CREATE TABLE `client` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(84) NOT NULL,
  `Cognom` varchar(84) NOT NULL,
  `Email` varchar(84) NOT NULL,
  `Tarjeta` varchar(84) NOT NULL,
  `CP` varchar(84) NOT NULL,
  `Poblacio` varchar(84) NOT NULL,
  `Telefon` varchar(84) NOT NULL,
  `DNI` varchar(9) NOT NULL,
  `Missatge` varchar(500) NOT NULL,
  `IdLogin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `client`
--

INSERT INTO `client` (`Id`, `Nom`, `Cognom`, `Email`, `Tarjeta`, `CP`, `Poblacio`, `Telefon`, `DNI`, `Missatge`, `IdLogin`) VALUES
(62, 'Alex', 'Ka', 'alexalbons@hotmail.com', '2782', '525727', 'Albons', '452542', '41560165Q', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacte`
--

CREATE TABLE `contacte` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(84) NOT NULL,
  `Mail` varchar(84) NOT NULL,
  `Telefon` varchar(12) NOT NULL,
  `Assumpte` varchar(84) NOT NULL,
  `Missatge` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contacte`
--

INSERT INTO `contacte` (`Id`, `Nom`, `Mail`, `Telefon`, `Assumpte`, `Missatge`) VALUES
(1, 'Alex', 'mail@prova.com', '54232753', 'Assumpte de prova', 'djtyjydtj');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacio`
--

CREATE TABLE `habitacio` (
  `Numero` int(11) NOT NULL,
  `Tipo` int(11) NOT NULL,
  `Descripcio` varchar(500) NOT NULL,
  `Serveis` varchar(200) NOT NULL,
  `Imatge1` varchar(100) NOT NULL,
  `Imatge2` varchar(100) NOT NULL,
  `Imatge3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `habitacio`
--

INSERT INTO `habitacio` (`Numero`, `Tipo`, `Descripcio`, `Serveis`, `Imatge1`, `Imatge2`, `Imatge3`) VALUES
(10, 1, 'Disfruti unes magnifiques vistes sobre la ciutat i un nivell de luxe elevat en aquesta habitacio en els 3er fins 15e pis. Aquesta habitacio esta disponible amb un llit King-Size o dos llits individuals. Per dos adults.- 42 m2-Vistes sobre la ciutat', 'Wifi, Servei d\'habitacions, Minibar, Cafetera, Caixa forta, Smart TV 40\" OLED, Apple TV® Technologie', '../public/img/Habitacions/DeluxeRoom/4.jpg', '../public/img/Habitacions/DeluxeRoom/5.jpg', '../public/img/Habitacions/DeluxeRoom/6.jpg'),
(11, 1, 'Disfruti unes magnifiques vistes sobre la ciutat i un nivell de luxe elevat en aquesta habitacio en els 3er fins 15e pis. Aquesta habitacio esta disponible amb un llit King-Size o dos llits individuals. Per dos adults.- 42 m2-Vistes sobre la ciutat', 'Wifi, Servei d\'habitacions, Minibar, Cafetera, Caixa forta, Smart TV 40\" OLED, Apple TV® Technologie', '../public/img/Habitacions/DeluxeRoom/4.jpg', '../public/img/Habitacions/DeluxeRoom/5.jpg', '../public/img/Habitacions/DeluxeRoom/6.jpg'),
(12, 1, 'Disfruti unes magnifiques vistes sobre la ciutat i un nivell de luxe elevat en aquesta habitacio en els 3er fins 15e pis. Aquesta habitacio esta disponible amb un llit King-Size o dos llits individuals. Per dos adults.- 42 m2-Vistes sobre la ciutat', 'Wifi, Servei d\'habitacions, Minibar, Cafetera, Caixa forta, Smart TV 40\" OLED, Apple TV® Technologie', '../public/img/Habitacions/DeluxeRoom/4.jpg', '../public/img/Habitacions/DeluxeRoom/5.jpg', '../public/img/Habitacions/DeluxeRoom/6.jpg'),
(20, 3, 'Disfruti unes magnifiques vistes panoramiques sobre el parc de la ciutat / el zoo / la catedral i un nivell de luxe insuperable i espaiós en aquesta suite al 10e fins 12e pis. Aquesta suite esta disponible amb un llit King-Size i un llit individual. Per tres adults. - 62 m2 -Vistes panoramiques sobre la ciutat', 'Wifi, Servei d\'habitacions, Minibar, Cafetera, Caixa forta, Smart TV 40\" OLED, Apple TV® Technologie', '../public/img/Habitacions/DeluxeRoomVistas/1.jpg', '../public/img/Habitacions/DeluxeRoomVistas/2.jpg', '../public/img/Habitacions/DeluxeRoomVistas/3.jpg'),
(21, 3, 'Disfruti unes magnifiques vistes panoramiques sobre el parc de la ciutat / el zoo / la catedral i un nivell de luxe insuperable i espaiós en aquesta suite al 10e fins 12e pis. Aquesta suite esta disponible amb un llit King-Size i un llit individual. Per tres adults. - 62 m2 -Vistes panoramiques sobre la ciutat', 'Wifi, Servei d\'habitacions, Minibar, Cafetera, Caixa forta, Smart TV 40\" OLED, Apple TV® Technologie', '../public/img/Habitacions/DeluxeRoomVistas/1.jpg', '../public/img/Habitacions/DeluxeRoomVistas/2.jpg', '../public/img/Habitacions/DeluxeRoomVistas/3.jpg'),
(22, 3, 'Disfruti unes magnifiques vistes panoramiques sobre el parc de la ciutat / el zoo / la catedral i un nivell de luxe insuperable i espaiós en aquesta suite al 10e fins 12e pis. Aquesta suite esta disponible amb un llit King-Size i un llit individual. Per tres adults. - 62 m2 -Vistes panoramiques sobre la ciutat', 'Wifi, Servei d\'habitacions, Minibar, Cafetera, Caixa forta, Smart TV 40\" OLED, Apple TV® Technologie', '../public/img/Habitacions/DeluxeRoomVistas/1.jpg', '../public/img/Habitacions/DeluxeRoomVistas/2.jpg', '../public/img/Habitacions/DeluxeRoomVistas/3.jpg'),
(30, 2, 'Disfruti unes magnifiques vistes panoramiques sobre el parc de la ciutat / el zoo / la catedral i un nivell de luxe insuperable i espaiós en aquesta suite al 10e fins 12e pis. Aquesta suite esta disponible amb un llit King-Size i un llit individual. Per tres adults. - 62 m2 -Vistes panoramiques sobre la ciutat', 'Wifi, Servei d\'habitacions, Minibar, Cafetera, Caixa forta, Smart TV 40\" OLED, Apple TV® Technologie', '../public/img/Habitacions/JuniorSuite/11.jpg', '../public/img/Habitacions/JuniorSuite/12.jpg', '../public/img/Habitacions/JuniorSuite/13.jpg'),
(31, 2, 'Disfruti unes magnifiques vistes panoramiques sobre el parc de la ciutat / el zoo / la catedral i un nivell de luxe insuperable i espaiós en aquesta suite al 10e fins 12e pis. Aquesta suite esta disponible amb un llit King-Size i un llit individual. Per tres adults. - 62 m2 -Vistes panoramiques sobre la ciutat', 'Wifi, Servei d\'habitacions, Minibar, Cafetera, Caixa forta, Smart TV 40\" OLED, Apple TV® Technologie', '../public/img/Habitacions/JuniorSuite/11.jpg', '../public/img/Habitacions/JuniorSuite/12.jpg', '../public/img/Habitacions/JuniorSuite/13.jpg'),
(32, 2, 'Disfruti unes magnifiques vistes panoramiques sobre el parc de la ciutat / el zoo / la catedral i un nivell de luxe insuperable i espaiós en aquesta suite al 10e fins 12e pis. Aquesta suite esta disponible amb un llit King-Size i un llit individual. Per tres adults. - 62 m2 -Vistes panoramiques sobre la ciutat', 'Wifi, Servei d\'habitacions, Minibar, Cafetera, Caixa forta, Smart TV 40\" OLED, Apple TV® Technologie', '../public/img/Habitacions/JuniorSuite/11.jpg', '../public/img/Habitacions/JuniorSuite/12.jpg', '../public/img/Habitacions/JuniorSuite/13.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `loginDB`
--

CREATE TABLE `loginDB` (
  `id` int(11) NOT NULL,
  `usuari` varchar(20) NOT NULL,
  `contrasenya` varchar(20) NOT NULL,
  `rol` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `loginDB`
--

INSERT INTO `loginDB` (`id`, `usuari`, `contrasenya`, `rol`) VALUES
(1, 'alex', '1234', 1),
(2, 'simon', '1234', 1),
(29, 'Juanka', '1234', 2),
(30, 'Eric', '1234', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva_client`
--

CREATE TABLE `reserva_client` (
  `Id` int(11) NOT NULL,
  `IdClient` int(11) NOT NULL,
  `IdReserva` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reserva_client`
--

INSERT INTO `reserva_client` (`Id`, `IdClient`, `IdReserva`) VALUES
(41, 62, 69);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserves`
--

CREATE TABLE `reserves` (
  `Id` int(11) NOT NULL,
  `Arrivada` date DEFAULT NULL,
  `Sortida` date DEFAULT NULL,
  `Persones` int(20) DEFAULT NULL,
  `TipoHabitacio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reserves`
--

INSERT INTO `reserves` (`Id`, `Arrivada`, `Sortida`, `Persones`, `TipoHabitacio`) VALUES
(69, '2021-11-16', '2021-11-23', 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(20) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Editor'),
(3, 'Client');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoHabitacio`
--

CREATE TABLE `tipoHabitacio` (
  `Id` int(11) NOT NULL,
  `Tipo` varchar(48) NOT NULL,
  `nOcupants` int(11) NOT NULL,
  `Metres` int(11) NOT NULL,
  `Preu` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipoHabitacio`
--

INSERT INTO `tipoHabitacio` (`Id`, `Tipo`, `nOcupants`, `Metres`, `Preu`) VALUES
(1, 'Individual', 2, 42, '140.00'),
(2, 'Doble', 4, 62, '160.00'),
(3, 'Doble amb vistes', 4, 62, '300.00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdLogin` (`IdLogin`);

--
-- Indices de la tabla `contacte`
--
ALTER TABLE `contacte`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `habitacio`
--
ALTER TABLE `habitacio`
  ADD PRIMARY KEY (`Numero`),
  ADD KEY `Tipo` (`Tipo`);

--
-- Indices de la tabla `loginDB`
--
ALTER TABLE `loginDB`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rol` (`rol`);

--
-- Indices de la tabla `reserva_client`
--
ALTER TABLE `reserva_client`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `reserva_client_ibfk_2` (`IdReserva`),
  ADD KEY `reserva_client_ibfk_1` (`IdClient`);

--
-- Indices de la tabla `reserves`
--
ALTER TABLE `reserves`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `TipoHabitacio` (`TipoHabitacio`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipoHabitacio`
--
ALTER TABLE `tipoHabitacio`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `client`
--
ALTER TABLE `client`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de la tabla `contacte`
--
ALTER TABLE `contacte`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `habitacio`
--
ALTER TABLE `habitacio`
  MODIFY `Numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `loginDB`
--
ALTER TABLE `loginDB`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `reserva_client`
--
ALTER TABLE `reserva_client`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `reserves`
--
ALTER TABLE `reserves`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`IdLogin`) REFERENCES `loginDB` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `habitacio`
--
ALTER TABLE `habitacio`
  ADD CONSTRAINT `habitacio_ibfk_2` FOREIGN KEY (`Tipo`) REFERENCES `tipoHabitacio` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `loginDB`
--
ALTER TABLE `loginDB`
  ADD CONSTRAINT `loginDB_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `rol` (`id`);

--
-- Filtros para la tabla `reserva_client`
--
ALTER TABLE `reserva_client`
  ADD CONSTRAINT `reserva_client_ibfk_1` FOREIGN KEY (`IdClient`) REFERENCES `client` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reserva_client_ibfk_2` FOREIGN KEY (`IdReserva`) REFERENCES `reserves` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reserves`
--
ALTER TABLE `reserves`
  ADD CONSTRAINT `reserves_ibfk_1` FOREIGN KEY (`TipoHabitacio`) REFERENCES `tipoHabitacio` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
