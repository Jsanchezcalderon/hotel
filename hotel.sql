

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `cedula` int(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` int(10) NOT NULL,
  `correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

/* INSERT INTO `cliente` (`id`, `cedula`, `nombre`, `telefono`, `correo`) VALUES
(1, 12345, 'juan carlos nieto', 314, 'juan.nieto@gmail.com'),
(2, 3463, 'carlos aguado', 317, 'carlitos@gmail.com'),
(3, 45678, 'jesus romero', 311, 'jesu@gmial.com'),
(4, 90123, 'carolina hernandez', 320, 'caro@gmail.com'),
(5, 456709, 'julio martinez', 300, 'julio@gmail.com'),
(6, 654378, 'javier sanchez', 314, 'javier@gmail.com'),
(7, 654378, 'javier sanchez', 314, 'javier@gmail.com'),
(8, 1, 'dfs', 4, 'k@gmial.com'); */

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE `habitacion` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `fecha_ingreso` datetime DEFAULT NULL,
  `fecha_salida` datetime DEFAULT NULL,
  `cambio_estado` datetime DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `habitacion`
--
/* 
INSERT INTO `habitacion` (`id`, `numero`, `estado`, `fecha_ingreso`, `fecha_salida`, `cambio_estado`, `id_cliente`) VALUES
(1, 101, 'ocupada', '2022-02-28 00:00:00', NULL, '2022-02-28 15:11:07', 1),
(2, 102, 'mantenimiento', '2022-02-28 00:00:00', '2022-02-28 00:00:00', '2022-02-28 15:11:07', 2),
(3, 103, 'ocupada', '2022-03-01 00:00:00', '2022-03-02 00:00:00', '2022-03-01 05:33:09', 2),
(4, 104, 'reservada', '2022-02-28 00:00:00', '2022-02-28 00:00:00', '2022-02-28 15:11:07', 4),
(5, 105, 'disponible', NULL, NULL, '2022-03-01 05:36:18', NULL),
(6, 106, 'reservada', '2022-03-04 00:00:00', '2022-03-05 00:00:00', '2022-03-01 05:28:53', 4),
(8, 108, 'mantenimiento', NULL, NULL, NULL, NULL),
(10, 107, 'disponible', NULL, NULL, '2022-03-01 05:22:26', NULL); */

--
-- Índices para tablas volcadas
--
