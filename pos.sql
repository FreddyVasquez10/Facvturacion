-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2022 a las 18:15:05
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apertura_de_centros_de_costos`
--

CREATE TABLE `apertura_de_centros_de_costos` (
  `Id` int(1) DEFAULT NULL,
  `cod_ceco` varchar(4) DEFAULT NULL,
  `nom_ceco` varchar(100) DEFAULT NULL,
  `responsable` varchar(100) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `telefono` int(20) DEFAULT NULL,
  `e_mail` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `apertura_de_centros_de_costos`
--

INSERT INTO `apertura_de_centros_de_costos` (`Id`, `cod_ceco`, `nom_ceco`, `responsable`, `direccion`, `telefono`, `e_mail`) VALUES
(1, '0001', 'Administracion', '', '', NULL, ''),
(2, '0002', 'ventas', '', '', 0, ''),
(1, '0001', 'Administracion', '', '', NULL, ''),
(2, '0002', 'ventas', '', '', 0, ''),
(NULL, '', '', '', '', 0, ''),
(NULL, '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aper_moneda`
--

CREATE TABLE `aper_moneda` (
  `id` int(11) NOT NULL,
  `moneda` varchar(50) NOT NULL,
  `identificador` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `aper_moneda`
--

INSERT INTO `aper_moneda` (`id`, `moneda`, `identificador`) VALUES
(1, 'PESOS', '$');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_bodegas`
--

CREATE TABLE `catalogo_bodegas` (
  `Id` int(3) NOT NULL,
  `codigo_bodega` int(4) DEFAULT NULL,
  `descripcion_bodega` varchar(100) DEFAULT NULL,
  `responsable` varchar(100) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `telefono` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `catalogo_bodegas`
--

INSERT INTO `catalogo_bodegas` (`Id`, `codigo_bodega`, `descripcion_bodega`, `responsable`, `direccion`, `telefono`) VALUES
(1, 1, 'Bodega Princiapl', '', 'cra 18', 634582),
(2, 2, 'Bodega centro', 'Freddy Vasquez', 'cra 5', 2147483647);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_productos`
--

CREATE TABLE `catalogo_productos` (
  `Id` int(1) DEFAULT NULL,
  `Linea` varchar(10) DEFAULT NULL,
  `Grupo` varchar(10) DEFAULT NULL,
  `Codigo_Producto` int(1) DEFAULT NULL,
  `Descripción_Producto` varchar(10) DEFAULT NULL,
  `Referencia` varchar(10) DEFAULT NULL,
  `Tipo_Inventario` varchar(10) DEFAULT NULL,
  `Iva_Incluido` varchar(5) DEFAULT NULL,
  `Precio_Publico` int(1) DEFAULT NULL,
  `Precio_X_Mayor` int(1) DEFAULT NULL,
  `Porcentaje_IVA` int(1) DEFAULT NULL,
  `Maximos_Minimos_Por_Bodegas` varchar(5) DEFAULT NULL,
  `Bodega` varchar(10) DEFAULT NULL,
  `Minimo` int(1) DEFAULT NULL,
  `Maximo` int(1) DEFAULT NULL,
  `Unidad` varchar(6) DEFAULT NULL,
  `Marca` varchar(10) DEFAULT NULL,
  `Modelo` varchar(10) DEFAULT NULL,
  `Codigo_De_Barras` int(1) DEFAULT NULL,
  `Factor_De_Conversión` varchar(5) DEFAULT NULL,
  `Activo` varchar(5) DEFAULT NULL,
  `Tarifa` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `catalogo_productos`
--

INSERT INTO `catalogo_productos` (`Id`, `Linea`, `Grupo`, `Codigo_Producto`, `Descripción_Producto`, `Referencia`, `Tipo_Inventario`, `Iva_Incluido`, `Precio_Publico`, `Precio_X_Mayor`, `Porcentaje_IVA`, `Maximos_Minimos_Por_Bodegas`, `Bodega`, `Minimo`, `Maximo`, `Unidad`, `Marca`, `Modelo`, `Codigo_De_Barras`, `Factor_De_Conversión`, `Activo`, `Tarifa`) VALUES
(1, '', '', 0, '', '', '', 'FALSO', 0, 0, 0, 'FALSO', '', 0, 0, 'Libras', '', '', 0, 'FALSO', 'FALSO', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_vendedores`
--

CREATE TABLE `catalogo_vendedores` (
  `Codigo` varchar(4) DEFAULT NULL,
  `Cedula/Nit` varchar(20) DEFAULT NULL,
  `Nombre` varchar(60) DEFAULT NULL,
  `pais` varchar(4) DEFAULT NULL,
  `Ciudad` varchar(4) DEFAULT NULL,
  `% Ventas` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centros_de_operacion`
--

CREATE TABLE `centros_de_operacion` (
  `Codigo` varchar(4) DEFAULT NULL,
  `Descripcion` varchar(60) DEFAULT NULL,
  `Activo` varchar(60) DEFAULT NULL,
  `Contacto` varchar(20) DEFAULT NULL,
  `Pais` varchar(4) DEFAULT NULL,
  `Ciudad` varchar(4) DEFAULT NULL,
  `Direccion` varchar(60) DEFAULT NULL,
  `Telefono` varchar(15) DEFAULT NULL,
  `Celular` varchar(15) DEFAULT NULL,
  `Codigo_Postal` varchar(8) DEFAULT NULL,
  `E_Mail` varchar(60) DEFAULT NULL,
  `Controla_Presupuesto_De_Consumo` varchar(4) DEFAULT NULL,
  `Fecha_a_Presupuestar` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `nit` int(20) NOT NULL,
  `e_mail` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `fecha_cumple` date NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

CREATE TABLE `configuracion` (
  `id` bigint(20) NOT NULL,
  `nit` varchar(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `razon_social` varchar(100) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `direccion` text NOT NULL,
  `iva` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallefactura`
--

CREATE TABLE `detallefactura` (
  `correlativo` bigint(20) NOT NULL,
  `nofactura` bigint(11) NOT NULL,
  `codproducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `preciototal` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_temp`
--

CREATE TABLE `detalle_temp` (
  `correlativo` int(11) NOT NULL,
  `token_user` varchar(50) NOT NULL,
  `codproducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_venta` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE `entradas` (
  `correlativo` int(11) NOT NULL,
  `codproducto` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` decimal(15,2) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `nofactura` bigint(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `usuario` int(11) NOT NULL,
  `totalfactura` decimal(15,2) NOT NULL,
  `estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_inve`
--

CREATE TABLE `grupo_inve` (
  `id` int(11) NOT NULL,
  `linea_inve` varchar(3) NOT NULL,
  `cod_grupo` varchar(4) NOT NULL,
  `nom_grupo` varchar(50) NOT NULL,
  `tipo_linea` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea_inven`
--

CREATE TABLE `linea_inven` (
  `id` int(11) NOT NULL,
  `cod_linea` varchar(3) NOT NULL,
  `nom_linea` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `linea_inven`
--

INSERT INTO `linea_inven` (`id`, `cod_linea`, `nom_linea`) VALUES
(1, '001', 'Automoviles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id` int(11) NOT NULL,
  `cod_pais` int(4) NOT NULL,
  `nomb_pais` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises_maestro`
--

CREATE TABLE `paises_maestro` (
  `id` int(11) NOT NULL,
  `cod_pais` varchar(4) NOT NULL,
  `nomb_pais` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `paises_maestro`
--

INSERT INTO `paises_maestro` (`id`, `cod_pais`, `nomb_pais`) VALUES
(1, '1', 'Colombia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `linea` int(11) NOT NULL,
  `grupo` int(11) NOT NULL,
  `cod_producto` int(11) NOT NULL,
  `nom_producto` varchar(100) NOT NULL,
  `des_producto` varchar(100) NOT NULL,
  `uni_medida` int(11) NOT NULL,
  `cantidad` int(20) NOT NULL,
  `pre_uni_compra` int(30) NOT NULL,
  `pre_uni_may` int(30) NOT NULL,
  `pre_uni_men` int(30) NOT NULL,
  `iva` int(10) NOT NULL,
  `iva_nota` varchar(10) NOT NULL,
  `depto` int(11) NOT NULL,
  `can_min_inv` int(20) NOT NULL,
  `codi_barras` varchar(30) NOT NULL,
  `pro` varchar(20) NOT NULL,
  `ref_fabrica` varchar(30) NOT NULL,
  `proveedor` int(20) NOT NULL,
  `existencia` int(11) NOT NULL,
  `date_add` datetime NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `estatus` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `nit` int(20) NOT NULL,
  `e_mail` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `fecha_cumple` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` int(11) NOT NULL,
  `rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uni_medida`
--

CREATE TABLE `uni_medida` (
  `id` int(11) NOT NULL,
  `sigla` varchar(10) NOT NULL,
  `unidad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `uni_medida`
--

INSERT INTO `uni_medida` (`id`, `sigla`, `unidad`) VALUES
(4, 'UN', 'Unidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `rol` int(11) NOT NULL,
  `estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aper_moneda`
--
ALTER TABLE `aper_moneda`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catalogo_bodegas`
--
ALTER TABLE `catalogo_bodegas`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Codigo_Bodega` (`codigo_bodega`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
  ADD PRIMARY KEY (`correlativo`);

--
-- Indices de la tabla `detalle_temp`
--
ALTER TABLE `detalle_temp`
  ADD PRIMARY KEY (`correlativo`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`nofactura`);

--
-- Indices de la tabla `grupo_inve`
--
ALTER TABLE `grupo_inve`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `linea_inven`
--
ALTER TABLE `linea_inven`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paises_maestro`
--
ALTER TABLE `paises_maestro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `uni_medida`
--
ALTER TABLE `uni_medida`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aper_moneda`
--
ALTER TABLE `aper_moneda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `catalogo_bodegas`
--
ALTER TABLE `catalogo_bodegas`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
  MODIFY `correlativo` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_temp`
--
ALTER TABLE `detalle_temp`
  MODIFY `correlativo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `nofactura` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grupo_inve`
--
ALTER TABLE `grupo_inve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `linea_inven`
--
ALTER TABLE `linea_inven`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `paises_maestro`
--
ALTER TABLE `paises_maestro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `uni_medida`
--
ALTER TABLE `uni_medida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
