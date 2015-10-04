-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-12-2014 a las 09:20:17
-- Versión del servidor: 5.5.40-cll
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `adrianet_admin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria`
--

CREATE TABLE IF NOT EXISTS `auditoria` (
`id_auditoria` int(10) NOT NULL,
  `nom_client` varchar(50) NOT NULL,
  `accion` text NOT NULL,
  `correo` text NOT NULL,
  `hora` time NOT NULL,
  `fecha` date NOT NULL,
  `perfil` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=294 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `auditoria`
--

INSERT INTO `auditoria` (`id_auditoria`, `nom_client`, `accion`, `correo`, `hora`, `fecha`, `perfil`) VALUES
(236, 'gabriela', 'Inicio session', 'l1804@hotmail.com', '14:16:55', '2014-12-06', 'usuario'),
(237, 'gabriela', 'Cerro session', 'l1804@hotmail.com', '15:34:13', '2014-12-06', 'usuario'),
(238, 'Pedro', 'Inicio session', 'adrianetadrianet@gmail.com', '15:34:22', '2014-12-06', 'Administrador'),
(239, 'Pedro', 'Cerro session', 'adrianetadrianet@gmail.com', '15:34:54', '2014-12-06', 'Administrador'),
(240, 'gabriela', 'Inicio session', 'l1804@hotmail.com', '16:10:55', '2014-12-06', 'usuario'),
(241, 'gabriela', 'Modifico su email', 'l1804@hotmail.com', '16:40:14', '2014-12-06', 'usuario'),
(242, 'gabriela', 'Modifico su email', 'l1804@hotmail.com', '16:41:43', '2014-12-06', 'usuario'),
(243, 'gabriela', 'Cerro session', 'l1804@hotmail.com', '16:57:29', '2014-12-06', 'usuario'),
(244, 'Pedro', 'Inicio session', 'adrianetadrianet@gmail.com', '16:57:40', '2014-12-06', 'Administrador'),
(245, 'Pedro', 'Cerro session', 'adrianetadrianet@gmail.com', '17:22:20', '2014-12-06', 'Administrador'),
(246, 'gabriela', 'Inicio session', 'l1804@hotmail.com', '17:22:30', '2014-12-06', 'usuario'),
(247, 'Jose', 'Inicio session', 'jaus31@hotmail.com', '19:19:49', '2014-12-06', 'usuario'),
(248, 'Jose', 'Realizo un pedido', 'jaus31@hotmail.com', '19:20:45', '2014-12-06', 'usuario'),
(249, 'Pedro', 'Inicio session', 'adrianetadrianet@gmail.com', '19:36:22', '2014-12-06', 'Administrador'),
(250, 'Jose', 'Inicio session', 'jaus31@hotmail.com', '18:06:36', '2014-12-07', 'usuario'),
(251, 'Pedro', 'Inicio session', 'adrianetadrianet@gmail.com', '20:06:41', '2014-12-08', 'Administrador'),
(252, 'Pedro', 'Cerro session', 'adrianetadrianet@gmail.com', '20:16:13', '2014-12-08', 'Administrador'),
(253, 'Jose', 'Inicio session', 'jaus31@hotmail.com', '21:29:49', '2014-12-08', 'usuario'),
(254, 'Jose', 'Cerro session', 'jaus31@hotmail.com', '21:33:02', '2014-12-08', 'usuario'),
(255, 'Pedro', 'Inicio session', 'adrianetadrianet@gmail.com', '21:34:37', '2014-12-08', 'Administrador'),
(256, 'Pedro', 'Cerro session', 'adrianetadrianet@gmail.com', '21:47:02', '2014-12-08', 'Administrador'),
(257, 'Pedro', 'Inicio session', 'adrianetadrianet@gmail.com', '21:53:25', '2014-12-08', 'Administrador'),
(258, 'Pedro', 'Cerro session', 'adrianetadrianet@gmail.com', '21:53:39', '2014-12-08', 'Administrador'),
(259, 'Jose', 'Inicio session', 'jaus31@hotmail.com', '21:53:49', '2014-12-08', 'usuario'),
(260, 'Jose', 'Cerro session', 'jaus31@hotmail.com', '21:54:12', '2014-12-08', 'usuario'),
(261, 'Alirio', 'Inicio session', 'aliriorivero@hotmail.com', '14:53:21', '2014-12-09', 'usuario'),
(262, 'Pedro', 'Inicio session', 'adrianetadrianet@gmail.com', '15:32:37', '2014-12-09', 'Administrador'),
(263, 'Pedro', 'Cerro session', 'adrianetadrianet@gmail.com', '15:36:10', '2014-12-09', 'Administrador'),
(264, 'carlos', 'Inicio session', 'carlosss_8123@hotmail.com', '15:52:56', '2014-12-09', 'usuario'),
(265, 'Pedro', 'Inicio session', 'adrianetadrianet@gmail.com', '09:56:16', '2014-12-10', 'Administrador'),
(266, 'carlos', 'Inicio session', 'carlosss_8123@hotmail.com', '15:23:14', '2014-12-10', 'usuario'),
(267, 'carlos', 'Inicio session', 'carlosss_8123@hotmail.com', '15:24:55', '2014-12-10', 'usuario'),
(268, 'Pedro', 'Inicio session', 'adrianetadrianet@gmail.com', '16:57:04', '2014-12-10', 'Administrador'),
(269, 'Pedro', 'Cerro session', 'adrianetadrianet@gmail.com', '17:01:01', '2014-12-10', 'Administrador'),
(270, 'carlos', 'Inicio session', 'carlosss_8123@hotmail.com', '17:11:14', '2014-12-10', 'usuario'),
(271, 'carlos', 'Cerro session', 'carlosss_8123@hotmail.com', '17:12:01', '2014-12-10', 'usuario'),
(272, 'Pedro', 'Inicio session', 'adrianetadrianet@gmail.com', '20:18:23', '2014-12-10', 'Administrador'),
(273, 'Pedro', 'Inicio session', 'adrianetadrianet@gmail.com', '21:14:06', '2014-12-10', 'Administrador'),
(274, 'Pedro', 'Cerro session', 'adrianetadrianet@gmail.com', '23:30:25', '2014-12-10', 'Administrador'),
(275, 'Pedro', 'Inicio session', 'adrianetadrianet@gmail.com', '23:30:39', '2014-12-10', 'Administrador'),
(276, 'Pedro', 'Cerro session', 'adrianetadrianet@gmail.com', '23:34:51', '2014-12-10', 'Administrador'),
(277, 'Pedro', 'Inicio session', 'adrianetadrianet@gmail.com', '23:35:05', '2014-12-10', 'Administrador'),
(278, 'Pedro', 'Cerro session', 'adrianetadrianet@gmail.com', '23:35:47', '2014-12-10', 'Administrador'),
(279, 'Pedro', 'Inicio session', 'adrianetadrianet@gmail.com', '23:36:16', '2014-12-10', 'Administrador'),
(280, 'Pedro', 'Cerro session', 'adrianetadrianet@gmail.com', '23:37:08', '2014-12-10', 'Administrador'),
(281, 'Pedro', 'Inicio session', 'adrianetadrianet@gmail.com', '23:39:19', '2014-12-10', 'Administrador'),
(282, 'Pedro', 'Cerro session', 'adrianetadrianet@gmail.com', '23:39:51', '2014-12-10', 'Administrador'),
(283, 'Pedro', 'Inicio session', 'adrianetadrianet@gmail.com', '23:41:50', '2014-12-10', 'Administrador'),
(284, 'Pedro', 'Cerro session', 'adrianetadrianet@gmail.com', '23:42:16', '2014-12-10', 'Administrador'),
(285, 'carlos', 'Inicio session', 'carsosigloxxi@gmail.com', '10:17:52', '2014-12-11', 'usuario'),
(286, 'carlos', 'Realizo un pedido', 'carsosigloxxi@gmail.com', '10:20:31', '2014-12-11', 'usuario'),
(287, 'carlos', 'Cerro session', 'carsosigloxxi@gmail.com', '10:23:37', '2014-12-11', 'usuario'),
(288, 'Pedro', 'Inicio session', 'adrianetadrianet@gmail.com', '10:23:59', '2014-12-11', 'Administrador'),
(289, 'Pedro', 'Cerro session', 'adrianetadrianet@gmail.com', '10:27:21', '2014-12-11', 'Administrador'),
(290, 'carlos', 'Inicio session', 'carsosigloxxi@gmail.com', '10:28:16', '2014-12-11', 'usuario'),
(291, 'carlos', 'Modifico sus datos personales', 'carsosigloxxi@gmail.com', '10:34:06', '2014-12-11', 'usuario'),
(292, 'carlos', 'Cerro session', 'carsosigloxxi@gmail.com', '10:34:16', '2014-12-11', 'usuario'),
(293, 'carlos', 'Inicio session', 'carlosss_8123@hotmail.com', '12:01:22', '2014-12-11', 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banco`
--

CREATE TABLE IF NOT EXISTS `banco` (
  `nom_admi` varchar(50) NOT NULL,
  `cedula` int(11) NOT NULL,
  `num_deposit` varchar(50) NOT NULL,
  `tipo_cuenta` varchar(50) NOT NULL,
  `banco` varchar(255) NOT NULL,
`id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `banco`
--

INSERT INTO `banco` (`nom_admi`, `cedula`, `num_deposit`, `tipo_cuenta`, `banco`, `id`) VALUES
('Pedro Sosa', 12334759, '01340866120001071710', 'Corriente', 'Banesco', 7),
('Pedro Sosa', 12334759, '01340866120001071710', 'Corriente', 'Banesco', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banco2`
--

CREATE TABLE IF NOT EXISTS `banco2` (
  `id_fact` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `tipo_pago` varchar(100) NOT NULL,
  `num_baucher` varchar(100) NOT NULL,
  `nom_clien` varchar(100) NOT NULL,
  `cedula_deposit` int(9) NOT NULL,
  `foto_baucher` varchar(255) NOT NULL,
`id_ban2` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `banco2`
--

INSERT INTO `banco2` (`id_fact`, `fecha`, `tipo_pago`, `num_baucher`, `nom_clien`, `cedula_deposit`, `foto_baucher`, `id_ban2`) VALUES
(13, '2014-12-07', 'Transferencia', '358212064', 'JOSE USECHE', 23627326, 'fotos/Dibujo.bmp', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id_cate` varchar(20) NOT NULL,
  `des_cate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_cate`, `des_cate`) VALUES
('1', 'componentes de pc'),
('10', 'tarjeta de video'),
('11', 'proyectores'),
('12', 'disco duro'),
('13', 'tarjeta de sonido'),
('14', 'tarjeta de red'),
('15', 'scaners'),
('2', 'memoria ram'),
('3', 'procesadores'),
('4', 'tarjeta madre'),
('5', 'unidad dvd/cd'),
('6', 'monitores'),
('7', 'impresoras'),
('8', 'routers'),
('9', 'pendrive');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `nom_clie` varchar(50) NOT NULL,
  `dire_clie` varchar(150) NOT NULL,
  `telf_clie` varchar(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_perfil` int(11) DEFAULT NULL,
  `cedula` int(9) NOT NULL,
  `num_deposit` varchar(20) NOT NULL,
  `tipo_cuenta` varchar(30) NOT NULL,
  `banco` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`nom_clie`, `dire_clie`, `telf_clie`, `password`, `email`, `id_perfil`, `cedula`, `num_deposit`, `tipo_cuenta`, `banco`) VALUES
('JUNIA ANDRADE DE CARUSO', 'Barrio san jose pasaje 13 numero 158 maracay edo. aragua', '02432342788', '$1$NM5.SP/.$83QTVUIMkAO7jnzqu0sqS.', 'jumnia-26@hotmail.com', 1, 3844371, '', '', ''),
('irma martinez', 'Barrio san jose calle 14 numero 128 maracay edo. aragua', '04162430402', '$1$/E2.a85.$4JazXcXLRb4Orw1Flfaka/', 'linma-26@hotmail.com', 1, 4226629, '', '', ''),
('mercedes clemente', 'turmero san juaquin, casa 193.', '04163448953', '$1$UmTuoh6K$2LN9Yt2y0e4dyaq5XlPg20', 'mercedesclemente1960@gmail.com', 1, 5961682, '', '', ''),
('carlos sosa', 'mariara carabobo ', '04244061581', '$1$w62UGPCq$AScPOLeoO7YUv8RoXzZb/1', 'carsosigloxxi@gmail.com', 1, 11984810, '', '', ''),
('Pedro Sosa', 'MARIARA Edo. CARABOBO SECTOR PUEBLO NUEVO CALLE EL CARMEN LOCAL No. 18-B   ', '04143409205', '$1$mv..1Z2.$jIfyhLpFY55D8.QUCgOqE.', 'adrianetadrianet@gmail.com', 2, 12334759, '01340866120001071710', 'Corriente', 'Banesco'),
('Nazliebh Briceno', 'CARACAS', '04142679769', '$1$0TWmyTGp$GPy/xSSzvy0o5MVKxSVCm1', 'nbc1206@yahoo.es', 1, 18022638, '', '', ''),
('Alirio Rivero', 'Urb. La Barraca calle Nº5', '04263116220', '$1$zcKMYXvC$r5NKoX0raQxjMaNZGGovf.', 'aliriorivero@hotmail.com', 1, 20174607, '', '', ''),
('gabriela fernandez', 'barrio san jose pasaje 14 numero 76 maracay edo. aragua \r\nPrueba', '04243455822', '$1$.X4ewtEI$BiMZ7YOhdWi5Co/3LZ6x./', 'l1804@hotmail.com', 1, 20335939, '', '', ''),
('carlos sosa', 'mariara edo carabobo', '04149458317', '$1$ogDGxjud$0bCYmbiybuqFcVhXs4clG1', 'carlosss_8123@hotmail.com', 1, 23425848, '', '', ''),
('Jose Useche', 'La barraca calle 5 edificio nadia piso 7 apto 7-d', '04243484269', '$1$l4Ps3uYY$iWULmogib8LOzVaQpY9hc0', 'jaus31@hotmail.com', 1, 23627326, '', '', ''),
('karin florez', 'santa rita', '04162347910', '$1$ud2.f6/.$CNDjGNhJHux6pzvwxFENG/', 'dayanna_19_92@hotmail.com', 1, 23801559, '', '', ''),
('miguel martinez', 'barrio la pica, casa numero 24', '02432347910', '$1$42j64/yr$LU/JUXssuAQxY/Gye.4MY/', 'jammy1804@hotmail.com', 1, 23801995, '', '', ''),
('slehyder martinez', 'san jose calle 14 numero 128 maracay estado aragua', '04269346223', '$1$0NdR7Xp.$EnUzSyjOJzzn5VUnKWDWK0', 'jammy1804@gmail.com', 1, 23802995, '', '', ''),
('Jose ortiz', 'Barrio piñonal por la av 15, aragua maracay', '04243819199', '$1$NEHiM9WE$nkoXuE1fFONg6J0ifuvab0', 'toxic.norfe@gmail.com', 1, 26055937, '', '', ''),
('Joselyn urrutia', 'Urbanización girardot. Aragua maracay.', '04261366667', '$1$P2i.rGfx$aVFpthS1mDlBcgwiY3PQ01', 'urrutia1996.klo@hotmail.com', 1, 26280085, '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE IF NOT EXISTS `contacto` (
  `contacto` text NOT NULL,
`id_contacto` int(10) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `rif` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`contacto`, `id_contacto`, `telefono`, `rif`) VALUES
('MARIARA Edo. CARABOBO SECTOR PUEBLO NUEVO CALLE EL CARMEN LOCAL No. 18-B      ', 1, 'TLF: 0414 3409205/0412-8977421', 'j-30844693-9');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_factu`
--

CREATE TABLE IF NOT EXISTS `detalle_factu` (
`id_detall` double NOT NULL,
  `id_pieza` varchar(10) NOT NULL,
  `cant` int(10) NOT NULL,
  `sub_total` int(11) NOT NULL,
  `precio` double NOT NULL,
  `id_fact` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_factu`
--

INSERT INTO `detalle_factu` (`id_detall`, `id_pieza`, `cant`, `sub_total`, `precio`, `id_fact`) VALUES
(16, 'Pen16-30', 1, 420, 420, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE IF NOT EXISTS `factura` (
  `fecha_venta` date NOT NULL,
  `cedula` int(9) NOT NULL,
  `total` float NOT NULL,
`id_fact` int(10) NOT NULL,
  `hora` time NOT NULL,
  `iva` float NOT NULL,
  `sub_total` double NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`fecha_venta`, `cedula`, `total`, `id_fact`, `hora`, `iva`, `sub_total`, `id`) VALUES
('2014-12-06', 23627326, 420, 13, '19:20:45', 45, 375, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE IF NOT EXISTS `inventario` (
`id_inventa` int(10) NOT NULL,
  `cant_invent` varchar(30) NOT NULL,
  `stock_max` float NOT NULL,
  `stock_min` float NOT NULL,
  `id_pieza` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id_inventa`, `cant_invent`, `stock_max`, `stock_min`, `id_pieza`) VALUES
(1, '30', 30, 5, 'Tar414-1'),
(2, '10', 10, 5, 'ROU81-2'),
(3, '5', 5, 2, 'Dis1223-3'),
(4, '6', 6, 3, 'Ada141-4'),
(21, '40', 40, 10, 'Cab114-5'),
(22, '3', 5, 2, 'Imp73-8'),
(23, '1', 9, 3, 'mem26-9'),
(24, '4', 5, 2, 'Nvi1016-10'),
(25, '2', 2, 1, 'Tec14-11'),
(26, '40', 50, 5, 'Cab114-12'),
(27, '40', 50, 5, 'Cab11-13'),
(28, '40', 50, 5, 'Cab11-14'),
(29, '123', 10, 20, 'asa1011-15'),
(30, '5', 5, 1, 'Enf125-16'),
(31, '3', 3, 1, 'Bas127-17'),
(32, '1', 1, 1, 'Bat13-18'),
(33, '0', 1, 1, 'Tec13-19'),
(34, '4', 4, 1, 'Mem26-20'),
(35, '3', 3, 1, 'Mem26-21'),
(36, '2', 3, 1, 'Mem26-22'),
(37, '2', 2, 1, 'Mem228-23'),
(38, '2', 2, 1, 'Mem26-24'),
(39, '1', 1, 1, 'Mon612-25'),
(40, '1', 1, 1, 'Mon62-26'),
(41, '1', 1, 1, 'Mon62-27'),
(42, '1', 1, 1, 'Mic132-28'),
(43, '2', 2, 1, 'Mou133-29'),
(44, '1', 2, 1, 'Pen16-30'),
(45, '3', 3, 1, 'Mou14-31'),
(46, '5', 5, 1, 'Mou14-32'),
(47, '3', 3, 1, 'Min93-33'),
(48, '1', 1, 1, 'Pen96-34'),
(49, '2', 2, 1, 'Pen928-35'),
(50, '2', 2, 1, 'Pen934-36'),
(51, '3', 3, 1, 'Mem934-37'),
(52, '2', 2, 1, 'Mem935-38'),
(53, '5', 5, 1, 'Lec934-39'),
(54, '5', 5, 1, 'Aud14-40'),
(55, '2', 2, 1, 'Aud14-41'),
(56, '5', 5, 1, 'Aud14-42'),
(57, '3', 3, 1, 'Aud132-43'),
(58, '2', 2, 1, 'Con132-44'),
(59, '5', 5, 1, 'Cab132-45'),
(60, '4', 4, 1, 'cab132-46'),
(61, '7', 7, 1, 'Ada11-47'),
(62, '3', 3, 1, 'Com136-48'),
(63, '6', 6, 1, 'Com132-49'),
(64, '4', 4, 1, 'Tec14-50'),
(65, '3', 3, 1, 'Com14-51'),
(66, '1', 1, 1, 'Com14-52'),
(67, '5', 5, 1, 'Con16-53'),
(68, '4', 4, 1, 'Con14-54'),
(69, '3', 3, 1, 'Con132-55'),
(70, '10', 10, 1, 'Mou136-56'),
(71, '4', 4, 1, 'Cam132-57'),
(72, '6', 6, 1, 'Cám132-58'),
(73, '11', 11, 1, 'Pro315-59'),
(74, '3', 3, 1, 'Pro314-60'),
(75, '7', 7, 1, 'Pro315-61'),
(76, '4', 4, 1, 'Amd315-62'),
(77, '5', 5, 1, 'Pro315-63'),
(78, '1', 1, 1, 'Pro315-64'),
(79, '4', 4, 1, 'Pro314-65'),
(80, '3', 3, 1, 'Pro314-66'),
(81, '4', 4, 1, 'Que522-67'),
(82, '3', 3, 1, 'Que537-68'),
(83, '2', 2, 1, 'Que52-69'),
(84, '2', 2, 1, 'Ada81-70'),
(85, '15', 15, 1, 'Ant81-71'),
(86, '17', 17, 1, 'Rou81-72'),
(87, '5', 5, 1, 'Rou81-73'),
(88, '4', 4, 1, 'Tar81-74'),
(89, '15', 15, 1, 'Com73-75'),
(90, '3', 3, 1, 'Cpu414-76'),
(91, '2', 2, 1, 'Dis438-77'),
(92, '5', 5, 1, 'Dis414-78'),
(93, '5', 5, 1, 'Fue139-79'),
(94, '3', 3, 1, 'Fue140-80'),
(95, '14', 14, 1, 'Cab439-81'),
(96, '1', 1, 1, 'Com114-82'),
(97, '1', 1, 1, 'Com114-83'),
(98, '1', 1, 1, 'Com115-84'),
(99, '2', 2, 1, 'Dis1223-85'),
(100, '1', 1, 1, 'Dis1223-86'),
(101, '1', 1, 1, 'Lap13-87'),
(102, '1', 1, 1, 'Lap13-88'),
(103, '1', 1, 1, 'Lap17-89'),
(104, '1', 1, 1, 'Imp73-90'),
(105, '1', 1, 1, 'Com114-91'),
(106, '1', 1, 1, 'Com115-92');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE IF NOT EXISTS `marca` (
  `id_marca` varchar(20) NOT NULL,
  `des_mar` varchar(20) NOT NULL,
  `popularidad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `des_mar`, `popularidad`) VALUES
('1', 'tp link', '10'),
('10', 'asus', '10'),
('11', 'toshiba', '10'),
('12', 'compaq', '10'),
('13', 'siragon', '10'),
('14', 'intel', '10'),
('15', 'amd', '10'),
('16', 'nvidia', '10'),
('17', 'ibm', '10'),
('18', 'lenovo', '10'),
('19', 'canon', '10'),
('2', 'samsung', '10'),
('20', 'epson', '10'),
('21', 'radeon', '10'),
('22', 'lg', '10'),
('23', 'western digital', '10'),
('24', 'apple', '10'),
('25', 'strong cooler', '10'),
('27', 'targus', '10'),
('28', 'a-data', '10'),
('29', 'gateway', '10'),
('3', 'hp', '10'),
('30', 'beats', '10'),
('32', 'microsoft', '10'),
('33', 'laser', '10'),
('34', 'sandisk', '10'),
('35', 'okystar', '10'),
('36', 'wash', '10'),
('37', 'pioneer', '10'),
('38', 'cooler master', '10'),
('39', 'atx', '10'),
('4', 'genius', '10'),
('40', 'omega', '10'),
('6', 'kingston', '10'),
('7', 'dell', '10'),
('8', 'sony', '10'),
('9', 'acer', '10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificaciones`
--

CREATE TABLE IF NOT EXISTS `notificaciones` (
`id` int(10) NOT NULL,
  `cedula` int(9) NOT NULL,
  `id_fact` int(10) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `vista` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `notificaciones`
--

INSERT INTO `notificaciones` (`id`, `cedula`, `id_fact`, `tipo`, `vista`, `fecha`, `hora`) VALUES
(20, 23627326, 13, 'pedido', 'visto', '2014-12-06', '19:20:45'),
(21, 12334759, 13, 'baucher', 'visto', '2014-12-06', '19:38:48'),
(22, 23627326, 13, 'numdeposito', 'visto', '2014-12-08', '21:32:35'),
(23, 12334759, 13, 'vendido', 'sin ver', '2014-12-08', '21:46:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `num`
--

CREATE TABLE IF NOT EXISTS `num` (
  `id_pieza` varchar(10) NOT NULL,
`num_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `num`
--

INSERT INTO `num` (`id_pieza`, `num_id`) VALUES
('Ada11-47', 47),
('Ada141-4', 4),
('Ada81-70', 70),
('Amd315-62', 62),
('Ant81-71', 71),
('asa1011-15', 15),
('Aud132-43', 43),
('Aud14-40', 40),
('Aud14-41', 41),
('Aud14-42', 42),
('Bas127-17', 17),
('Bat13-18', 18),
('Cab11-13', 13),
('Cab11-14', 14),
('Cab114-12', 12),
('Cab114-5', 7),
('Cab132-45', 45),
('cab132-46', 46),
('Cab439-81', 81),
('Cam132-57', 57),
('Cám132-58', 58),
('Com114-82', 82),
('Com114-83', 83),
('Com114-91', 91),
('Com115-84', 84),
('Com115-92', 92),
('Com132-49', 49),
('Com136-48', 48),
('Com14-51', 51),
('Com14-52', 52),
('Com73-75', 75),
('Con132-44', 44),
('Con132-55', 55),
('Con14-54', 54),
('Con16-53', 53),
('Cpu414-76', 76),
('Dis1223-3', 3),
('Dis1223-85', 85),
('Dis1223-86', 86),
('Dis414-78', 78),
('Dis438-77', 77),
('Enf125-16', 16),
('Fue139-79', 79),
('Fue140-80', 80),
('Imp73-8', 8),
('Imp73-90', 90),
('Lap13-87', 87),
('Lap13-88', 88),
('Lap17-89', 89),
('Lec934-39', 39),
('Mem228-23', 23),
('Mem26-20', 20),
('Mem26-21', 21),
('Mem26-22', 22),
('Mem26-24', 24),
('mem26-9', 9),
('Mem934-37', 37),
('Mem935-38', 38),
('Mic132-28', 28),
('Min93-33', 33),
('Mon612-25', 25),
('Mon62-26', 26),
('Mon62-27', 27),
('Mou133-29', 29),
('Mou136-56', 56),
('Mou14-31', 31),
('Mou14-32', 32),
('Nvi1016-10', 10),
('Pen16-30', 30),
('Pen928-35', 35),
('Pen934-36', 36),
('Pen96-34', 34),
('Pro314-60', 60),
('Pro314-65', 65),
('Pro314-66', 66),
('Pro315-59', 59),
('Pro315-61', 61),
('Pro315-63', 63),
('Pro315-64', 64),
('Que52-69', 69),
('Que522-67', 67),
('Que537-68', 68),
('ROU81-2', 2),
('Rou81-72', 72),
('Rou81-73', 73),
('Tar414-1', 1),
('Tar81-74', 74),
('Tec13-19', 19),
('Tec14-11', 11),
('Tec14-50', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `id_fact` int(10) NOT NULL,
  `estatus` varchar(30) NOT NULL,
`id_pedido` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_fact`, `estatus`, `id_pedido`) VALUES
(13, 'vendido', 13),
(14, 'procesando', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `id_pieza` varchar(10) NOT NULL,
  `dec_pro` text NOT NULL,
  `cant_pro` varchar(10) NOT NULL,
  `precio_pro` float NOT NULL,
  `nom_pro` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_marca` varchar(20) NOT NULL,
  `id_cate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_pieza`, `dec_pro`, `cant_pro`, `precio_pro`, `nom_pro`, `foto`, `id_marca`, `id_cate`) VALUES
('Ada11-47', '<p><strong>Permite crear extensi&oacute;n&nbsp; usb mediante&nbsp; rj45 , utp,cat5/5e/6 hasta 30mm</strong></p>', '7', 1490, 'Adaptador Extensión Usb 2.0 Por Cable Rj45 Utp Hasta 45mts', 'fotos/31.jpg', '1', '1'),
('Ada81-70', '<p><strong><em>Basado en la tecnolog&iacute;a IEEE 820.11n permite conectar a una computadora a una red inal&aacute;mbrica a alta velocidad </em></strong></p>', '2', 1499, 'Adaptador Usb Inalámbrico Tp-link Tl-wn722n 150mbps Wifi Usb', 'fotos/55.jpg', '1', '8'),
('Amd315-62', '<p><em><strong>Vive tu vida en alta definici&oacute;n. El procesador AMD Phenom&trade; II es para el entretenimiento en alta definici&oacute;n</strong></em></p>', '4', 13000, 'Amd Phenom Ii X6 Black Editions Nucleos Modelo 1090t 3.2 Ghz', 'fotos/46.jpg', '15', '3'),
('Ant81-71', '<p><strong><em>Antena de escritorio TL-ANT2408CL opera en banda 2.4 a 2.5 ghz</em></strong></p>', '15', 1500, 'Antena Omnidireccional Tp-link Tl-ant2408cl 8bdi 2.4ghz Bagc', 'fotos/57.jpg', '1', '8'),
('Aud132-43', '<p>Sonido estereof&oacute;nico claro</p>\r\n<p>Micr&oacute;fono con eliminaci&oacute;n de ruidos Controles de micr&oacute;fono y volumen en el cable</p>', '3', 2500, 'Audifonos Microsoft Lifechat', 'fotos/27.jpg', '32', '1'),
('Aud14-40', '<p>Aud&iacute;fonos Genius Hs-300n Negro con Micr&oacute;fono y Control de Volumen</p>\r\n<p>Ergon&oacute;micos para mayor comodidad</p>\r\n<p>Dise&ntilde;o plegable y f&aacute;cil de guardar</p>', '5', 1100, 'Audifonos Genius Hs-300n Negro+microfono+control De Volumen', 'fotos/24.jpg', '4', '1'),
('Aud14-41', '<p><strong>Auriculares</strong></p>\r\n<p>Frecuencia de auricular&nbsp;20 - 20000 Hz</p>\r\n<p>Audifonos &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Supraaural</p>\r\n<p>Obstrucci&oacute;n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 32 Ohmio</p>\r\n<p>Sensibilidad de auricular &nbsp; &nbsp; &nbsp; 105 Db</p>\r\n<p>Micr&oacute;fono mudo</p>\r\n<p>Interfaz del dispositivo &nbsp; &nbsp; &nbsp; &nbsp; 1/8pulg</p>\r\n<p>Longitud de cable &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 1,8 m</p>\r\n<p>Conectividad del dispositivo &nbsp;&nbsp;Al&aacute;mbrico</p>\r\n<p>&nbsp;&nbsp;</p>', '2', 2250, 'Audifonos Genius Hs-05a', 'fotos/25.jpg', '4', '1'),
('Aud14-42', '<p><strong>Aud&iacute;fonos pegables y s&uacute;per livianos para un f&aacute;cil trasporte&nbsp; potencia de 30 mm alta calidad de sonido</strong></p>', '5', 800, 'Audifonos Genius Ghp-400f 3.5mm Negro Y Blanco', 'fotos/26.jpg', '4', '1'),
('Bas127-17', '<p>Convierte tu port&aacute;til en una estaci&oacute;n de trabajo 4 puertos usb&nbsp; regula la</p>\r\n<p>temperatura de su port&aacute;til y los cuatro puerto extras le permite conectar todo sus</p>\r\n<p>perif&eacute;ricos adem&aacute;s de un bue apoyo.</p>', '3', 1995, 'Base Para Laptop Targus Inclinable 4 Puertos Usb Hasta 17 Pu', 'fotos/2.jpg', '27', '1'),
('Bat13-18', '<p>Bater&iacute;a secudario tipo base modelo 395793-311 compatible con varios modelos laptop hp</p>', '1', 1995, 'Batería Secundaria Laptop Hp Tipo Base 395793-311', 'fotos/3.jpg', '3', '1'),
('Cab132-45', '<p><strong>Para conectar pc, notebook y similares con conexi&oacute;n vga hembra&nbsp; a monitores y proyectores</strong></p>', '5', 249, 'Cable De Video Vga Macho A Macho 1.5 Mts', 'fotos/29.jpg', '32', '1'),
('cab132-46', '<p><strong>Convierte tu disco duro de 3.5 o 2.5 cd/dvd rom a puerto usb</strong></p>', '4', 1000, 'cable Convertidor Disco Duro Sata O Ide A Usb', 'fotos/30.jpg', '32', '1'),
('Cab439-81', '<p><em>Extension cable&nbsp; ATX de cpu de 4 pines.</em></p>', '14', 199, 'Cable Extension Fuente Atx Cpu 4 Pines A 4 Pines', 'fotos/77.jpg', '39', '4'),
('Cam132-57', '<p><em>C&aacute;mara Web 1.3 Mpx, ideal para utilizar con laptops. Posee cable USB y macho 3.5 de audio. Tiene micr&oacute;fono incluido y aro para tapar el lente cuando deje de usarlo</em></p>', '4', 350, 'Camara Web 1.3 Mpx Usb Con Microfono Pc Laptop Computadora', 'fotos/41.jpg', '32', '1'),
('Cám132-58', '<p><em>C&aacute;mara Web 1.3 Mpx, ideal para utilizar con laptops. Posee cable USB y macho 3.5 de audio. Tiene micr&oacute;fono incluido y aro para tapar el lente cuando deje de usarlo</em></p>', '6', 800, 'Cámara Web Angry Birds En Tienda Marcesca', 'fotos/42.jpg', '32', '1'),
('Com114-82', '<p><em><strong>Intel Pentium G2030 2.9 GHZ</strong></em></p>\r\n<p><em><strong>&nbsp;500GB DE DISCO DURO,&nbsp;2 GB DE RAM</strong></em></p>\r\n<p><em>DVD RW DE 20X</em></p>\r\n<p><em>&nbsp;</em></p>\r\n<p><em>Y UN SUPER MONITOR DE 18.5 PULGADAS LED.</em></p>', '1', 45000, 'Computadora Intel Dual Core 500gb Con Monitor Led Y 2gb Ram', 'fotos/78.jpg', '14', '1'),
('Com114-83', '<p><em>Computador:&nbsp;<strong>Pentium IV de &nbsp;2.8 &nbsp;GHz&nbsp;</strong></em></p>\r\n<p><em>Memoria RAM:&nbsp;<strong>512 GB (DDR 400) Expandible&nbsp;</strong></em></p>\r\n<p><em>Disco Duro:&nbsp;<strong>20 GB&nbsp;</strong></em></p>\r\n<p><em>Accesorios:&nbsp;<strong>Teclado usados BENQ , mouse, cornetas multimedia internas y cables de corriente, Lector de CD. Ademas cuenta con todos los Programas necesarios instalados (Office 2010), Window XP Sp 3 , recien Formateada.</strong></em></p>', '1', 8000, 'Computadora Pentium Iv 2.8 Ghz Ibm', 'fotos/81.jpg', '14', '1'),
('Com114-91', '<p><strong><em>COMBO DE TARJETA MADRE BIOSTAR H61MGV3 (VERSION 7.7) + PROCESADOR INTEL DUAL CORE G2030 3.0 GHZ / 3MB CACHE</em></strong></p>', '1', 15999, 'Combo Tarjeta Madre H61 + Procesador Intel Dual Core G2030', 'fotos/98.jpg', '14', '1'),
('Com115-84', '<p><em>AMD seprom2650 Dual core 1.40 ghz/sokect AM1/usb3.0/SATA&nbsp; 6gbs/DD 500GB SATA/Ram 2gbs DDR3 1333 MHz</em></p>\r\n<p><em>Case ATX negro con fuente de poder incluida</em></p>', '1', 22112, 'Computador Amd Sempron 145 2.8ghz 2gb Ddr3 500gb Disco Duro', 'fotos/82.jpg', '15', '1'),
('Com115-92', '<p><em><strong>MICRO ATX: 8.5-in x 7.2-in, 21.6 cm x 18.3 cm</strong></em></p>\r\n<p><em><strong>SOCKET FM2+ 95W / FM2 100W processors</strong></em></p>\r\n<p><em><strong>2 SLOT PARA MEMORIAS DDR3 soporta Dual Channel DDR3 1866/1600/1333/1066</strong></em></p>\r\n<p><em><strong>1 x ranura PCIe 3.0 x16</strong></em></p>\r\n<p><em><strong>1 PCI</strong></em></p>\r\n<p><em><strong>5.1 CH HD CH HD Audio (Realtek ALC662 Audio Codec)</strong></em></p>\r\n<p><em><strong>1 Gigabit LAN 10/100/1000 Mb/s</strong></em></p>\r\n<p><em><strong>4 SATA 2</strong></em></p>\r\n<p><em><strong>4 USB 2.0</strong></em></p>', '1', 11850, 'Combo Tarjeta Madre Fm2+ Cpu Amd Apu 3.2ghz Video Ati 7480', 'fotos/97.jpg', '15', '1'),
('Com132-49', '<p><strong>COMBO MOUSE+TECLADO</strong></p>\r\n<p><strong>MICROSOFT USB</strong></p>\r\n<p><strong>MODELO: DESKTOP 400</strong></p>', '6', 1850, 'Combo Mouse Teclado Microsoft Desktop 400 Alambrico Usb Xtc', 'fotos/33.jpg', '32', '1'),
('Com136-48', '<p><strong>TECLADO - &nbsp;MOUSE - &nbsp;</strong></p>\r\n<p><strong>CORNETAS - &nbsp;</strong></p>\r\n<p><strong>CONEXION USB</strong></p>', '3', 1899, 'Combo Teclado Mouse Cornetas Mousepad Marca wash', 'fotos/32.jpg', '36', '1'),
('Com14-51', '<p><strong>El m&aacute;s reciente teclado y mouse para escritorio</strong></p>', '3', 1390, 'Combo Teclado Mouse Genius Slimstar C110 Anti derrame', 'fotos/35.jpg', '4', '1'),
('Com14-52', '<p><em>Marca: Genius</em></p>\r\n<p><em>Contenido de la Caja: Moda multimedia 4 en 1 Kit de escritorio</em></p>\r\n<p><em>Un ( 1 ) Combo multimedia KMSW110 que comprende:</em></p>\r\n<p><em>Un ( 1 ) Teclado de elegante dise&ntilde;o con Funciones Multimedia Keyboard KB-09e</em></p>\r\n<p><em>Un ( 1 ) Mouse Optico de alta resoluci&oacute;n para trabajar eficientemente Mouse NS 120</em></p>\r\n<p><em>Dos ( 2 ) Parlantes Multimedia Stereo de 100 Watts Speaker SP-S11</em>0</p>', '1', 2999, 'Combo 4 En 1 Genius Kmsw 110 Teclado,mouse,cornetas Y Cámara', 'fotos/36.jpg', '4', '1'),
('Com73-75', '<p><strong><em>Modelo Ch562Hl</em></strong></p>\r\n<p><strong><em>Negro-tricolor de 120 a 150 pag de rendimiento </em></strong></p>', '15', 2800, 'Combo Cartuchos Hp 122 Originales Negro Y Tricolor 2050 3050', 'fotos/62.jpg', '3', '7'),
('Con132-44', '<p><strong>Conecta cualquier equipo con salida hadmi a cualquier entrada con equipo vga</strong></p>', '2', 1500, 'Convertidor Hdmi A Vga Video Monitor Laptop Ps3 Ps4 Xbox', 'fotos/28.jpg', '32', '1'),
('Con132-55', '<p><em>Anal&oacute;gico para pc&nbsp; conexi&oacute;n usb&nbsp; es plug play incluye cd con drives</em></p>', '3', 799, 'Control Usb Joystick Para Computadoras, Laptops, Pc, Juegos', 'fotos/39.jpg', '32', '1'),
('Con14-54', '<p><strong>Para pc de mesa y lapto 8botones ,puerto usb&nbsp; no necesita drives</strong></p>', '4', 520, 'Control Genius Max Fire G-08xu Alambrico Cable Pc Usb Ccc', 'fotos/38.jpg', '4', '1'),
('Con16-53', '<p><strong>Excelente control para Pc con Dualshock (vibracion) Interfaz USB 1.0/2.0 (conecte y use) Compatible con USB 1.0/1.1/2.0. Compatible con Windows 98/ME/2000/XP</strong></p>', '5', 750, 'Control De Juegos Game Usb Pc Double Shock 2 Joystick ', 'fotos/37.jpg', '6', '1'),
('Cpu414-76', '<p><strong><em>Fan cooler disipador de calor para procesadores socket de 775 intel, mantenga su procesador a buena temperatura, Fabricado en aluminio con acabado de espejo en la base parea mejor absorci&oacute;n del calor</em></strong></p>', '3', 599, 'Cpu Cooler Intel, P4 Socket 775 Ventilador Pentium Iv Fan', 'fotos/65.jpg', '14', '4'),
('Dis1223-85', '<p><em>Disco duro para pc de 3.5 pulgadas con capacidad 320 gb marca wester digit</em>al</p>', '2', 4500, 'Disco Duro Para Pc 320gb Sata', 'fotos/83.jpg', '23', '12'),
('Dis1223-86', '<p><em>Especificaciones f&iacute;sicas</em></p>\r\n<p><em>Buffer Size: 16 MB</em></p>\r\n<p><em>Capacidad formateada 500.107 MB</em></p>\r\n<p><em>Capacidad 500GB</em></p>\r\n<p><em>Interfaz SATA 6Gb/s</em></p>\r\n<p><em>Velocidad de rotaci&oacute;n: 7.200 RPM</em></p>\r\n<p><em>Dimensiones f&iacute;sicasCompatible con placas con SATA2</em></p>\r\n<p><em>Altura 25.4 mm (M&aacute;x)</em></p>\r\n<p><em>Longitud 147 mm (Max)</em></p>\r\n<p><em>Ancho 101.6 mm</em></p>\r\n<p><em>Peso 0.60 k</em></p>', '1', 6999, 'Disco Duro Western Digital De 500gb (3.5 , Sata) 7200rpm ', 'fotos/84.jpg', '23', '12'),
('Dis414-78', '<p>.</p>', '5', 699, 'Disipador Calor 1155 Intel I3 I5 7 Fan Cooler', 'fotos/67.jpg', '14', '4'),
('Dis438-77', '<p><em>M&aacute;xima&nbsp; compatibilidad con potencia de cpu 70 w</em></p>\r\n<p><em>2* heatpipes con contacto directo opci&oacute;n para a&ntilde;adir un segundo ventilador</em></p>', '2', 3499, 'Disipador Cooler Master Hyper 101a Amd Am3+ Am2 Fm2 939', 'fotos/66.jpg', '38', '4'),
('Enf125-16', 'Este producto funciona&nbsp; como extractor&nbsp; del aire caliente m&aacute;s r&aacute;pido para laptop ,notebook&nbsp; y mejora el rendimiento', '5', 699, 'Enfriador Extractor USB Ventilador Laptop Pc Portá', 'fotos/1.jpg', '25', '1'),
('Fue139-79', '<p><em>Capacidad 500w</em></p>\r\n<p><em>1 conector sata power</em></p>\r\n<p><em>1conector pci-e</em></p>\r\n<p><em>1conector de poder de 20* pines+4pine</em>s</p>', '5', 1500, 'Fuente De Poder Atx 500w 20/24 Pines Conector Sata', 'fotos/75.jpg', '39', '1'),
('Fue140-80', '<p><em>Cable de poder incluido</em></p>\r\n<p><em>Doble ventilador </em></p>', '3', 2199, 'Fuente De Poder Omega 750w 20/24 Sata Dual Fan', 'fotos/76.jpg', '40', '1'),
('Imp73-90', '<p><em>Imprime/copia/escanea</em></p>\r\n<p><em>Comparable con l&aacute;ser ISO</em></p>\r\n<p><em>Conectivida est&aacute;ndar 1*usb 2.0</em></p>', '1', 6060, 'Impresora Multifuncional A Color Hp Deskjet 2050', 'fotos/90.jpg', '3', '7'),
('Lap13-87', '<p><em>HP PORTATIL 14 INTEL CELERON 1000M&nbsp;</em></p>\r\n<p><em>NOTEBOOK HP 240</em></p>\r\n<p><em>&nbsp;</em></p>\r\n<p><em>&nbsp;</em></p>\r\n<p><em>&nbsp;DESCRIPCION</em></p>\r\n<p><em>Categor&iacute;a:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Notebook</em></p>\r\n<p><em>Marca:&nbsp; HP</em></p>\r\n<p><em>Serie:&nbsp;&nbsp;&nbsp; HP 200</em></p>\r\n<p><em>Modelo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 240 G1</em></p>\r\n<p><em>Sistema Operativo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Free DOS</em></p>\r\n<p><em>&nbsp;</em></p>\r\n<p><em>&nbsp;</em></p>\r\n<p><em>&nbsp;</em></p>\r\n<p><em>&nbsp;CPU / PROCESADOR</em></p>\r\n<p><em>Marca:&nbsp; INTEL</em></p>\r\n<p><em>Serie:&nbsp;&nbsp;&nbsp; Celeron</em></p>\r\n<p><em>N&uacute;mero de Procesador:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1000M</em></p>\r\n<p><em>Frecuencia CPU:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1.8 GHz</em></p>\r\n<p><em>Cantidad de N&uacute;cleos:&nbsp;&nbsp;&nbsp; 2 un</em></p>\r\n<p><em>Cache L3:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2 MB</em></p>\r\n<p><em>&nbsp;MEMORIA RAM</em></p>\r\n<p><em>Tipo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DDR3</em></p>\r\n<p><em>RAM:&nbsp;&nbsp;&nbsp; 4 GB</em></p>\r\n<p><em>Frecuencia:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1600 MHz</em></p>\r\n<p><em>Ranuras de Memoria:&nbsp;&nbsp; 2 un</em></p>\r\n<p><em>Formato:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SO-DIMM</em></p>\r\n<p><em>&nbsp;VIDEO</em></p>\r\n<p><em>Tarjeta Dedicada:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NO</em></p>\r\n<p><em>Modelo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Intel HD Graphics</em></p>\r\n<p><em>&nbsp;PANTALLA</em></p>\r\n<p><em>Tama&ntilde;o Pantalla:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 14 in</em></p>\r\n<p><em>Tipo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; LED</em></p>\r\n<p><em>Resoluci&oacute;n:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1366 x 768 px</em></p>\r\n<p><em>Tipo Resoluci&oacute;n:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HD</em></p>\r\n<p><em>Hp 240 Intel Celeron 1000m (nueva En Su Caja)</em></p>\r\n<p><em>&nbsp;</em></p>\r\n<p><em>ALMACENAMIENTO</em></p>\r\n<p><em>Capacidad:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 320 GB</em></p>\r\n<p><em>Interfaz:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; S-ATA I</em></p>\r\n<p><em>RPM:&nbsp;&nbsp;&nbsp;&nbsp; 5400 rpm</em></p>\r\n<p><em>Tipo de Disco:&nbsp;&nbsp; HDD</em></p>\r\n<p><em>Optical Disc Drive (ODD):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DVD?RW</em></p>\r\n<p><em>&nbsp;MULTIMEDIOS</em></p>\r\n<p><em>C&aacute;mara:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SI</em></p>\r\n<p><em>&nbsp;RED</em></p>\r\n<p><em>LAN Ethernet:&nbsp;&nbsp; 10 / 100 / 1000 Mbps</em></p>\r\n<p><em>Wifi:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1x1 802.11 b/g/n</em></p>\r\n<p><em>Bluetooth:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SI</em></p>\r\n<p><em>&nbsp;PUERTOS I/O</em></p>\r\n<p><em>VGA:&nbsp;&nbsp;&nbsp;&nbsp; SI</em></p>\r\n<p><em>HDMI:&nbsp;&nbsp; SI</em></p>\r\n<p><em>USB 2.0:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3 un</em></p>\r\n<p><em>Ranura Tarjetas:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SD</em></p>\r\n<p><em>RJ45:&nbsp;&nbsp;&nbsp;&nbsp; SI</em></p>\r\n<p><em>&nbsp;CARACTERISTICAS FISICAS</em></p>\r\n<p><em>Peso:&nbsp;&nbsp;&nbsp; 2. 0Kg</em></p>\r\n<p><em>Alto:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3.6 cm</em></p>\r\n<p><em>Ancho: 34.2 cm</em></p>\r\n<p><em>Largo:&nbsp;&nbsp; 23.1 cm</em></p>\r\n<p><em>Color:&nbsp;&nbsp;&nbsp; NEGRO</em></p>\r\n<p><em>Hp 240 Intel Celeron 1000m (nueva En Su Caja)</em></p>\r\n<p><em>&nbsp;</em></p>\r\n<p><em>ALIMENTACION</em></p>\r\n<p><em>Potencia Adaptador AC:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 65 watts</em></p>', '1', 29999, 'Laptop Hp 14 Intel Celeron 1000 240 Serie G1 Intel 4gb 320dd', 'fotos/87.jpg', '3', '1'),
('Lap13-88', '<p>Modelo&nbsp; 15-d035dx</p>\r\n<p>Super multi DVD burner</p>\r\n<p>Teclado complete con pad num&eacute;rico</p>\r\n<p>Puertos externo 1*usb 3.0</p>\r\n<p>2*usb2.0</p>\r\n<p>1 HDMI</p>\r\n<p>1*VGA</p>\r\n<p>1*RJ-45</p>', '1', 38999, 'Laptop Hp 15-d035dx &gt; 2014 N3520 A 2.7 / 750gb / 4gb / Win8', 'fotos/88.jpg', '3', '1'),
('Lap17-89', '<p><em>4 GB Ram</em></p>\r\n<p><em>Patella de 15 pulgadas web cam</em></p>\r\n<p><em>Puertos HDMI / RJ-45</em></p>\r\n<p><em>Auricular / usb 2.0</em></p>', '1', 37999, 'Laptop Dell Inspiron 15 Dual Core 4gb Ram 500gb Mouse Gratis', 'fotos/89.jpg', '7', '1'),
('Lec934-39', '<p><strong>Lector de memorias micro sd compatible con cualquier marcas</strong></p>', '5', 150, 'Lector De Memoria Micro Sd Y Sdhc Tipo Pen Drive Usb 2.0', 'fotos/22.jpg', '34', '9'),
('Mem228-23', '<p><strong>Memoria 2gb Ddr3 &nbsp;marca A-data 1333mhz para pc de escritorio.</strong></p>', '2', 2699, 'Memoria 2gb Ddr3 A-data 1333mhz Pc', 'fotos/7.jpg', '28', '2'),
('Mem26-20', '<p><strong>Memoria 2gb Ddr2 800 Compatible 667 / 533&nbsp; marca kingston&nbsp; para pc de escritorio.</strong></p>', '4', 2799, 'Memoria 2gb Ddr2 800 Compatible 667 / 533 ', 'fotos/5.jpg', '6', '2'),
('Mem26-22', '<p><strong>Memoria Ram Ddr3 4gb Kingston 10600</strong></p>\r\n<p><strong>Para pc de escritoori</strong></p>', '2', 4860, 'Memoria Ram Ddr3 4gb Kingston 10600', 'fotos/6.jpg', '6', '2'),
('Mem26-24', '<p><strong>Memoria Kingston Ddr2 De 1gb / 800mhz&nbsp;para pc de escritorio.</strong></p>', '2', 1510, 'Memoria Kingston Ddr2 De 1gb / 800mhz ', 'fotos/8.jpg', '6', '2'),
('Mem934-37', '<p>Memoria Micro SD de 8GB de Almacenamiento para distintos dispositivos y terminales.</p>\r\n<p>Compatibile con Telefonos, Camaras, Tablets, Reproductores y otros</p>', '3', 800, 'Memoria 8 Gb Con Adaptador En Blister Sellado', 'fotos/20.jpg', '34', '9'),
('Mem935-38', '<p><em>Memoria Micro SD de 8GB de Almacenamiento para distintos dispositivos y terminales.</em></p>\r\n<p><em>Compatibile con Telefonos, Camaras, Tablet</em>s</p>', '2', 619, 'Memoria Micro Sd 8gb Okystar', 'fotos/21.jpg', '35', '9'),
('Mic132-28', '<p><strong>RATON INALAMBRICO MICROSOFT COLOR VERDE MILITAR, ULTRAPORTATIL, SIN CABLES, SE PUEDE DOBLAR PARCIALMENTE PARA FACILITAR SU TRANSPORTE Y ALMACENAJE DURANTE EL TRASLADO. NUEVO, TOTALMENTE SELLADO EN SU CAJA DE PLASTICO TIPO EXHIBICION.</strong></p>', '1', 1200, 'Microsoft Arc Mouse Nalambrico Color Verde Militar Sellado!', 'fotos/12.jpg', '32', '1'),
('Min93-33', '<p><strong>Pendriver con capacidad de 8 gb compatible con puertos 2.0 de color azul 100% originales </strong></p>', '3', 538, 'Minipendrive 8gb Hp V165w ', 'fotos/16.jpg', '3', '9'),
('Mon612-25', '<p><strong>monitor COMPAQ de 17" en perfecto estado</strong></p>\r\n<p><strong>Con su cable VGA y Corriente</strong>.</p>', '1', 4900, 'Monitor COMPAQ Y Aoc 17 ', 'fotos/9.jpg', '12', '6'),
('Mon62-26', '<p><strong>Monitor SAMSUNG muy poco uso, excelente estado ,</strong></p>\r\n<p><strong>14"</strong></p>\r\n<p><strong>&nbsp;Energy Star</strong></p>\r\n<p><strong>15000: 1 dynamic contrast</strong></p>\r\n<p><strong>Base circular.</strong></p>\r\n<p><strong>Control t&aacute;ctil</strong></p>\r\n<p><strong>SyncMaster540 N</strong></p>\r\n<p><strong>incluye cables</strong></p>', '1', 5500, 'Monitor Samsung Lcd 14', 'fotos/10.jpg', '2', '6'),
('Mon62-27', '<p><strong>Monitor Samsung Syncmaster Modelo 300SA de 20 Pulgadas</strong></p>', '1', 10000, 'Monitor Samsung 20 Led', 'fotos/11.jpg', '2', '6'),
('Mou133-29', '<p><strong>Mouse dise&ntilde;ado para el confort de gamer con adaptaci&oacute;n a sus manos c&oacute;modo &nbsp;usb peso de 130 g&nbsp; tipo &oacute;ptico.</strong></p>', '2', 850, 'Mouse Laser Gamer Midio Usb 1000 Dpi', 'fotos/13.jpg', '33', '1'),
('Mou136-56', '<p>Mouse Pad De Goma Recubierto De Tela Color Gris Oscuro</p>', '10', 265, 'Mouse Pad De Goma Recubierto De Tela Color Gris Oscuro', 'fotos/40.jpg', '36', '1'),
('Mou14-31', '<p>NAVIGATOR NS-6000</p>\r\n<p>N&uacute;mero de Parte&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 31030089102</p>\r\n<p>Color&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; BLACK</p>\r\n<p>Tecnolog&iacute;a&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Inalambrico 2.4 Ghz, USB</p>\r\n<p>Tipo de sensor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Optico</p>\r\n<p>Resoluci&oacute;n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1000 dpi</p>\r\n<p>Botones&nbsp;&nbsp;&nbsp;&nbsp; 3, (izquierdo, derecho, medio con desplazamiento)</p>\r\n<p>Alimentaci&oacute;n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1 AA</p>\r\n<p>Interruptor de encendido&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Si</p>\r\n<p>Sistema OperativoWindows 8 / 7/ Vista /XP</p>', '3', 549, 'Mouse Genius Navigator Ns-6000 Usb Black Inalambrico', 'fotos/14.jpg', '4', '1'),
('Mou14-32', '<p>MOUSE GENIUS TRAVELER 900 INALAMBRICO</p>\r\n<p>&nbsp;</p>\r\n<p>NUEVO EN SU BLISTER!!!</p>', '5', 1200, 'Mouse Genius Traveler 900 Inalambrico', 'fotos/15.jpg', '4', '1'),
('Pen16-30', '<p>DataTraveler 101 (G2)<br /> Con el DataTraveler&reg; 101G2, los usuarios que buscan aprovechar al m&aacute;ximo su dinero obtienen una combinaci&oacute;n de &uacute;tiles caracter&iacute;sticas y funciones, gran capacidad (hasta 2GB) y una manera sencilla de almacenar, transportar y transferir archivos entre computadoras y otros dispositivos.&nbsp;<br /> Con el software urDrive opcional, usted puede aprovechar la practicidad de un navegador incorporado4 y las ventajas de AppZone para probar nuevas aplicaciones4.&nbsp;<br /> El DataTraveler 101G2 incorpora un dise&ntilde;o pivotante sin tapa, y se puede personalizar con el logotipo de su compa&ntilde;&iacute;a &mdash; una excelente manera de promocionar su negocio.</p>\r\n<p>Caracter&iacute;sticas y Beneficios:<br /> Capacidad maxima - 2GB<br /> Velocidad - 16GB: 9mb/sec. lectura y 7mb/sec<br /> Dimensiones:(57.18mm x 17.28mm x 10.00mm)<br /> Temperatura de funcionamiento - ( 0&deg;c ~ 60 &deg;C )<br /> Temperatura de almacenamiento - ( -20&deg;c ~ 85&deg;C )<br /> Conveniente - tama&ntilde;o de bolsillo para su f&aacute;cil transportar<br /> Simple - Solo plug and play por el puerto USB<br /> Pr&aacute;ctico - Dise&ntilde;o compacto giratorio<br /> Resistencia de retenci&oacute;n de datos: 10 a&ntilde;os&nbsp;<br /> Color verde<br /> Software soportado: Windows&reg; 98, Windows&reg; Me, Windows&reg; 2000, Windows&reg; XP, Mac OS 9.XX, 10.XX</p>', '1', 420, 'Pendrive Kingston 2 Gb Data Traveler 101 Gen 2 Green', 'fotos/pendrive-kingston-2-gb-data-traveler-101-gen-2-green-17392-MLV20135784049_072014-O.jpg', '6', '1'),
('Pen928-35', '<p><strong>ADATA&nbsp; 8 gb retr&aacute;ctil&nbsp; tipo: usb flash&nbsp; 2.0</strong></p>', '2', 449, 'Pendrive 8gb Adata ', 'fotos/18.jpg', '28', '9'),
('Pen934-36', '<p><strong>Pendrive sandisk con capacidad de&nbsp; 8gb&nbsp; puerto tipo fash&nbsp; 2.0 compatible con w xp Linux ,mac, w 7</strong></p>', '2', 450, 'Pendrive 8gb Sandisk Con Blister', 'fotos/19.jpg', '34', '9'),
('Pen96-34', '<p>Compatible con Windows&reg; 8.1, Windows 8, Vista&reg;; y con Mac</p>\r\n<p>Dise&ntilde;o pivotante, sin tapa</p>\r\n<p>Disponible en varios colores</p>', '1', 849, 'Pendrive 16gb Usb 2.0 Memoria Portatil Flash Drive', 'fotos/17.jpg', '6', '9'),
('Pro314-60', '<p><em>PROCESADOR INTEL</em></p>\r\n<p><em>CORE 2 QUAD</em></p>\r\n<p><em>+</em></p>\r\n<p><em>DISIPADOR</em></p>\r\n<p><em>QUAD CORE 2.33GHZ</em></p>\r\n<p><em>SOCKET 775</em></p>\r\n<p><em>MODELO Q8200</em></p>', '3', 7300, 'Procesador Intel Quad Core 775 Q8200 2.33ghz 4mb Core 2 Q', 'fotos/44.jpg', '14', '3'),
('Pro314-65', '<p>N&uacute;mero de procesador</p>\r\n<p>G3220</p>\r\n<p># De corazones</p>\r\n<p>2</p>\r\n<p>Cantidad de subprocesos</p>\r\n<p>2</p>\r\n<p>Velocidad del reloj</p>\r\n<p>3 GHz</p>\r\n<p>Cache</p>\r\n<p>3 MB</p>\r\n<p>DMI2</p>\r\n<p>5 GT / s</p>\r\n<p>N &ordm; de QPI Links</p>\r\n<p>0</p>\r\n<p>Conjunto de instrucciones</p>', '4', 8599, 'Procesador Intel Pentium G3220 4ta Gen 3.0ghz 3mb Ddr3 1150', 'fotos/49.jpg', '14', '3'),
('Pro314-66', '<p><strong><em>Modelo Pentium g550 2 nucleo/2600ghz + graficas integrada/65w/3mb de cache</em></strong></p>', '3', 6500, 'Procesador Intel Celeron Dual Core G550 2.6 Ghz Socker 1155', 'fotos/50.jpg', '14', '3'),
('Pro315-59', '<p>Amd&nbsp; l&iacute;nea 8 velocidad 3.9 ghz</p>\r\n<p>Cache 4mgb sokect fm2</p>', '11', 15000, 'Procesador Amd Quad Core A8-6600k Fm2', 'fotos/43.jpg', '15', '3'),
('Pro315-61', '<p><em>Procesadores AMD Sempron 145</em></p>\r\n<p><em>Socket AM3, 1.0MB Cache, 2.8 Ghz</em></p>', '7', 4999, 'Procesadores Amd Sempron 145 2.8ghz Socket Am3 Sellados', 'fotos/45.jpg', '15', '3'),
('Pro315-63', '<p><strong><em>El APU amd&nbsp; A6 combina el dual core&nbsp; y una unidad grafica amd randeon 7450d</em></strong></p>', '5', 9399, 'Procesador Dual-core Amd A6-5400k Apu Socket Fm2 Radeon Hd', 'fotos/47.jpg', '15', '3'),
('Pro315-64', '<p><strong><em>6 nucleos para mejorar la eficiencia y velocidad de las aplicaciones y juegos m&aacute;s exigentes</em></strong></p>', '1', 19000, 'Procesador Amd Fx 6300 Turbo Vishera 6 Núcleos Black Edition', 'fotos/48.jpg', '15', '3'),
('Que52-69', '<p><em><strong>Sansug DVR+R 24* SATA</strong></em></p>', '2', 2199, 'Quemadora Dvd Samsung Sh-224 24x Sata Bebe Oferta', 'fotos/54.jpg', '2', '5'),
('Que522-67', '<p><em>Serial ATA graba DVDs en formato +/- R a una velocidad de hasta 24* y CD a una velocidad de hasta 48*</em></p>', '4', 2500, 'Quemadora Marca Lg Samsung 24x Dvd Cd - Dvd Dl Doble Capa', 'fotos/52.jpg', '22', '5'),
('Que537-68', '<p><strong><em>Modelo BDR-207DBK quema disco BLUE-RAY/DVDs/CDs velocidad de escritura de hasta&nbsp; 12*</em></strong></p>', '3', 7000, 'Quemadora Interno Pioneer Blu-ray Bdr-207dbk Dvd Cd Sata Pc', 'fotos/53.jpg', '37', '5'),
('Rou81-72', '<p><em><strong>El router inal&aacute;mbrico N300 mbps dispositivo de conexi&oacute;n por cable dise&ntilde;ado para requisito de conexi&oacute;n de redes de oficinas y casas</strong></em></p>', '17', 4500, 'Router Inalámbrico Tp-link Tl-wr841nd 300mbps Wifi 802.11n', 'fotos/58.jpg', '1', '8'),
('Rou81-73', '<p><strong><em>Swicht de 4 puertos 100 mbsp/permite conexiones inal&aacute;mbricas/cables</em></strong></p>', '5', 2500, 'Router Inalambrico  Tp-link Tl-wr741nd 150mbps Wifi Wan Lan', 'fotos/59.jpg', '1', '8'),
('Tar81-74', '<p><strong><em>Tarjeta PCI Inalambrica TP-LINK</em></strong></p>\r\n<p><strong><em>MODELO TL-WN851ND</em></strong></p>\r\n<p><strong><em>&nbsp;</em></strong></p>\r\n<p><strong><em>2 ANTENAS EXTRAIBLES</em></strong></p>\r\n<p><strong><em>VELOCIDAD EN RED DE 300Mbps</em></strong></p>', '4', 1899, 'Tarjeta Pci Inalambrica Tp-link- Tl-wn851nd- 2 Antenas', 'fotos/60.jpg', '1', '8'),
('Tec13-19', '<p><strong>Teclado con su base para laptop HP TX2 solo compatible con este modelo de laptop</strong></p>', '0', 1500, 'Teclado Con Su Base Para Laptop Hp Tx2', 'fotos/4.jpg', '3', '1'),
('Tec14-50', '<p><strong>TECLADO Y MOUSE EN COMBO , TOTALMENTE NUEVO DE PAQUETE 3 MESES DE GARANTIA</strong></p>', '4', 2150, 'Teclado Y Mouse Inalambrico Genius I820', 'fotos/34.jpg', '4', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auditoria`
--
ALTER TABLE `auditoria`
 ADD PRIMARY KEY (`id_auditoria`);

--
-- Indices de la tabla `banco`
--
ALTER TABLE `banco`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `banco2`
--
ALTER TABLE `banco2`
 ADD PRIMARY KEY (`id_ban2`), ADD KEY `id_fact` (`id_fact`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
 ADD PRIMARY KEY (`id_cate`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
 ADD PRIMARY KEY (`cedula`), ADD KEY `email` (`email`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
 ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `detalle_factu`
--
ALTER TABLE `detalle_factu`
 ADD PRIMARY KEY (`id_detall`), ADD KEY `id_pieza` (`id_pieza`,`id_fact`), ADD KEY `id_fact` (`id_fact`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
 ADD PRIMARY KEY (`id_fact`), ADD KEY `cedula` (`cedula`), ADD KEY `id` (`id`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
 ADD PRIMARY KEY (`id_inventa`), ADD KEY `id_pieza` (`id_pieza`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
 ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
 ADD PRIMARY KEY (`id`), ADD KEY `cedula` (`cedula`,`id_fact`), ADD KEY `id_fact` (`id_fact`);

--
-- Indices de la tabla `num`
--
ALTER TABLE `num`
 ADD PRIMARY KEY (`num_id`), ADD KEY `id_pieza` (`id_pieza`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
 ADD PRIMARY KEY (`id_pedido`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
 ADD PRIMARY KEY (`id_pieza`), ADD KEY `precio_pro` (`precio_pro`), ADD KEY `nom_pro` (`nom_pro`), ADD KEY `id_marca` (`id_marca`), ADD KEY `id_cate` (`id_cate`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `auditoria`
--
ALTER TABLE `auditoria`
MODIFY `id_auditoria` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=294;
--
-- AUTO_INCREMENT de la tabla `banco`
--
ALTER TABLE `banco`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `banco2`
--
ALTER TABLE `banco2`
MODIFY `id_ban2` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
MODIFY `id_contacto` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `detalle_factu`
--
ALTER TABLE `detalle_factu`
MODIFY `id_detall` double NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
MODIFY `id_fact` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
MODIFY `id_inventa` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `num`
--
ALTER TABLE `num`
MODIFY `num_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
MODIFY `id_pedido` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `banco2`
--
ALTER TABLE `banco2`
ADD CONSTRAINT `banco2_ibfk_1` FOREIGN KEY (`id_fact`) REFERENCES `factura` (`id_fact`);

--
-- Filtros para la tabla `detalle_factu`
--
ALTER TABLE `detalle_factu`
ADD CONSTRAINT `detalle_factu_ibfk_3` FOREIGN KEY (`id_fact`) REFERENCES `factura` (`id_fact`),
ADD CONSTRAINT `detalle_factu_ibfk_4` FOREIGN KEY (`id_pieza`) REFERENCES `producto` (`id_pieza`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`cedula`) REFERENCES `cliente` (`cedula`);

--
-- Filtros para la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
ADD CONSTRAINT `notificaciones_ibfk_1` FOREIGN KEY (`cedula`) REFERENCES `cliente` (`cedula`),
ADD CONSTRAINT `notificaciones_ibfk_2` FOREIGN KEY (`id_fact`) REFERENCES `factura` (`id_fact`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_cate`) REFERENCES `categoria` (`id_cate`),
ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id_marca`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
