-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-08-2017 a las 04:32:33
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `yeapdata`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `NombreCliente` varchar(55) NOT NULL,
  `TipoProyecto` varchar(255) NOT NULL,
  `TipoRol` int(5) NOT NULL,
  `Rol` varchar(99) NOT NULL,
  `User` varchar(55) NOT NULL,
  `Pass` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `NombreCliente`, `TipoProyecto`, `TipoRol`, `Rol`, `User`, `Pass`) VALUES
(1, 'Administrador', '', 0, 'administrador', 'admin', 'admin'),
(2, 'Coomeva', 'Proyecto de Telefonía', 1, 'cliente', 'coomeva', 'coomeva'),
(3, 'Yeapdata', 'telefonia, redes', 1, 'cliente', 'yeap', 'yeap'),
(4, 'Teleperformance', 'Telefonia IP', 1, 'cliente', 'telep', 'telep');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generador`
--

CREATE TABLE `generador` (
  `id_texto` int(99) NOT NULL,
  `Texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `generador`
--

INSERT INTO `generador` (`id_texto`, `Texto`) VALUES
(1, 'Ingeniero buen día,\r\nAnexo la información para agendar el proceso de mantenimientos preventivos para el viernes 11 de agosto, solicitamos amablemente adjuntar la dirección de las sedes.\r\n\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimientos`
--

CREATE TABLE `mantenimientos` (
  `id_mantenimiento` int(255) NOT NULL,
  `FechaPropuesta` date NOT NULL,
  `NombreSede` varchar(55) NOT NULL,
  `Ip` varchar(50) NOT NULL,
  `TipoEquipos` varchar(255) NOT NULL,
  `EmpresaSede` varchar(155) NOT NULL,
  `DireccionSede` varchar(55) NOT NULL,
  `FechaRealizado` date NOT NULL,
  `FechaProgramado` date NOT NULL,
  `Realizado` int(5) NOT NULL,
  `Programado` int(5) NOT NULL,
  `Documentado` varchar(5) NOT NULL,
  `Confirmado` varchar(5) NOT NULL,
  `ObservacionCliente` text NOT NULL,
  `DireccionActa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `mantenimientos`
--

INSERT INTO `mantenimientos` (`id_mantenimiento`, `FechaPropuesta`, `NombreSede`, `Ip`, `TipoEquipos`, `EmpresaSede`, `DireccionSede`, `FechaRealizado`, `FechaProgramado`, `Realizado`, `Programado`, `Documentado`, `Confirmado`, `ObservacionCliente`, `DireccionActa`) VALUES
(1, '2017-02-18', 'Sede Nacional', '10.12.12.9', 'BSM, MG', 'CSA', 'Calle 13 # 57-50', '2017-05-05', '0000-00-00', 1, 0, '1', 'on', '0', '60_Mantenimiento_Preventivo_Coomeva_Cali_Sede_Nacional_12_05_2017'),
(2, '2017-02-18', 'Bancoomeva Sogamoso', '10.134.20.20', 'IPO', 'BANCO', 'Carrera 14 No. 16-51 ', '2017-03-04', '0000-00-00', 1, 0, 'on', 'on', 'Organizar Cableado', '01_Mantenimiento_Preventivo_Bancoomeva_Sogamoso_04_03_2017\r'),
(3, '2017-02-18', 'Bancoomeva Pereira El lago', '10.132.62.20', 'IPO', 'BANCO', 'Calle 23 # 8-55 Local 216', '2017-03-04', '0000-00-00', 1, 0, 'on', 'on', 'No hay Tierra', '02_Mantenimiento_Preventivo_Coomeva_Pereira _El_Lago_04_03_2017\r'),
(4, '2017-02-18', 'Bancoomeva Apartado', '10.134.0.20', 'IPO', 'BANCO', 'Calle 98 No. 103-111, Local 101-201', '2017-03-04', '0000-00-00', 1, 0, 'on', 'on', '0', '03_Mantenimiento_Preventivo_Bancoomeva_Apartado _04_03_2017\r'),
(5, '2017-02-18', 'Bancoomeva Barrancabermeja', '10.134.1.20', 'IPO', 'BANCO', 'Carrera 16 No. 48 - 41, Local 101', '2017-03-04', '0000-00-00', 1, 0, 'on', 'on', '0', '04_Mantenimiento_Preventivo_Bancoomeva_Barrancabermeja_04_03_2017\r'),
(6, '2017-02-25', 'HEC Cartagena', '10.30.49.10', 'IPO', 'HEC', 'Avenida Jiménez Cra 18 No.25-142 Manga, local 1 del seg', '2017-03-11', '0000-00-00', 1, 0, 'on', 'on', 'No hay Tierra en el chasis', '06_Mantenimiento_Preventivo_HEC_Cartagena_11_03_2017\r'),
(7, '2017-02-25', 'Bancoomeva Bogota Zona Industrial', '10.132.20.20', 'IPO', 'BANCO', 'Calle 13 No. 65-71, Local 6, Centro Comercial Paseo Cen', '2017-03-11', '0000-00-00', 1, 0, 'on', 'on', '0', '07_Mantenimiento_Preventivo_Bancoomeva_Bogota_Zona_Industrial\r'),
(8, '2017-02-25', 'Bancoomeva Cali Imbanaco', '10.132.28.20', 'IPO', 'BANCO', 'Calle 5 # 38D - 153', '2017-03-11', '0000-00-00', 1, 0, 'on', 'on', 'El IPO no se encuentra en el rack', '08_Mantenimiento_Preventivo_Bancoomeva_Cali_Imbanaco_11_03_2017\r'),
(9, '2017-02-25', 'EPS Barranquilla Centro de Operaciones', '10.120.12.20', 'IPO', 'EPS', 'Calle 39 # 41 -07', '2017-03-11', '0000-00-00', 1, 0, 'on', 'on', 'No hay Tierra en el chasis', '05_Mantenimiento_Preventivo_EPS_Barranquilla_Centro_de_Operaciones_10_03_2017\r'),
(10, '2017-02-25', 'Bancoomeva Cartago', '10.134.4.20', 'IPO', 'BANCO', 'Carrera 4 No. 11-14, Segundo Piso', '2017-03-11', '0000-00-00', 1, 0, 'on', 'on', '0', '09_Mantenimiento_Preventivo_Bancoomeva_Cartago_11_03_2017\r'),
(11, '2017-03-04', 'Bancoomenva Barranquilla Prado', '10.132.54.9', 'BSM, MG', 'BANCO', 'Carrera 54 No.72-147 - Local 104 y 105', '2017-03-21', '0000-00-00', 1, 0, 'on', 'on', '0', '10_Mantenimiento_Preventivo_Bancoomeva_Bquilla_Prado_28_03_2017\r'),
(12, '2017-03-04', 'Bancoomeva Cali CAC Vida', '10.132.27.20', 'IPO', 'BANCO', 'Calle 5 D No. 38 A - 35', '2017-03-18', '0000-00-00', 1, 0, 'on', 'on', '0', '11_Mantenimiento_Preventivo_Bancoomeva_Cali_CAC_Vida_18_03_2017\r'),
(13, '2017-03-04', 'Bancoomeva Mushaisa', '10.134.11.20', 'IPO', 'BANCO', 'Carrera 4 No. 20, Esquina, Complejo Carbonifero Interco', '2017-03-18', '0000-00-00', 1, 0, 'on', 'on', '0', '12_Mantenimiento_Preventivo_Bancoomeva_Cartagena _Mushaisa_17_03_2017\r'),
(14, '2017-03-04', 'Bancoomeva Bogotá Calle 80', '10.132.7.20', 'IPO', 'BANCO', 'Calle 80 No. 73A-29, Centro Comercial San Francisco', '2017-03-18', '0000-00-00', 1, 0, 'on', 'on', '0', '13_Mantenimiento-Preventivo_Bancoomeva_Calle80_18_03_2017\r'),
(15, '2017-03-04', 'Bancoomeva Itagui', '10.132.37.20', 'IPO', 'BANCO', 'Cra  50 N° 52 – 12', '2017-03-21', '0000-00-00', 1, 0, 'on', 'on', 'Cuarto sin aire acondicionado, extractores de aire', '14_Mantenimiento_Preventivo_Bancoomeva-Itagui_28_03_2017\r'),
(16, '2017-03-11', 'Bancoomeva Plaza de las Américas', '10.134.27.20', 'IPO', 'BANCO', 'Transversal 71D No. 26-94 Sur, Local 3505', '2017-03-25', '0000-00-00', 1, 0, 'on', 'on', '0', '16_Mantenimiento_Preventivo_Bancoomeva_Plaza_De_las_Americas_25_03_2017\r'),
(17, '2017-03-11', 'Banccomeva Duitama Recaudos', '10.134.24.20', 'IPO', 'BANCO', 'Carrera 15 No 17 - 12', '2017-03-25', '0000-00-00', 1, 0, 'on', 'on', 'Organizar Cableado', '17_Mantenimiento_Preventivo_Coomeva_Duitama_Recaudos_24_03_2017\r'),
(18, '2017-03-11', 'Bancoomeva Medellín Las Americas', '10.132.41.20', 'IPO', 'BANCO', 'Diagonal 75B No. 2A-120, Local 113', '2017-03-25', '0000-00-00', 1, 0, 'on', 'on', '0', '18_Mantenimiento_Preventivo_Bancoomeva_Medellin_Las_Americas_25_03_2017\r'),
(19, '2017-03-11', 'Bancoomeva Ipiales', '10.134.7.19', 'IPO', 'BANCO', 'Carrera 7 No. 15-59', '2017-03-25', '0000-00-00', 1, 0, 'on', 'on', '0', '19_Mantenimiento_Preventivo_Bancoomeva_Ipiales_25_03_2017\r'),
(20, '2017-03-11', 'Bancoomeva Cali Unico', '10.132.31.20', 'IPO', 'BANCO', 'Carrera 100 No. 5-169 Local 133', '2017-03-25', '0000-00-00', 1, 0, 'on', 'on', '0', '20_Mantenimiento_Preventivo_Bancooomeva_Cali_CC_Unico_25_03_2017\r'),
(21, '2017-03-18', 'Bancoomeva Pasto', '10.134.15.20', 'IPO', 'BANCO', 'Calle 12 No. 35-38 Barrio La Aurora Primer Piso', '2017-04-01', '0000-00-00', 1, 0, 'on', 'on', '0', '33_Mantenimiento_Preventivo_Bancoomeva_Pasto_01_04_2017\r'),
(22, '2017-03-18', 'EPS San Juan del Cesar Guajira', '10.120.101.20', 'IPO', 'EPS', 'Calle 7 # 2-82', '2017-04-01', '0000-00-00', 1, 0, 'on', 'on', '0', '21_Mantenimiento_Preventivo_EPS_San_Juan_Del_Cesar_Guajira_01_04_2017\r'),
(23, '2017-03-18', 'EPS Cali Holguines', '10.131.112.9', 'BSM, MG', 'EPS', 'Carrera 100 No. 11-90, Local 250, Piso 2', '2017-04-01', '0000-00-00', 1, 0, 'on', 'on', '0', '22_Mantenimiento_Preventivo_Coomeva_EPS_Holguines_TC_Cali_01_04_2017\r'),
(24, '2017-03-18', 'sedes EPS Bogotá Edificio Héroes', '10.120.132.9', 'BSM, MG', 'EPS', 'Cra. 19A # 78 - 80', '2017-04-11', '0000-00-00', 1, 0, 'on', 'on', 'No hay Tierra para los MG', '24_Mantenimiento_Preventivo_Coomeva_Sedes_EPS_Bogota_Ed._Heroes_11_04_2017\r'),
(25, '2017-03-18', 'Clínica Palmira Palma Real', '10.12.110.61', 'BSM, MG', 'EPS', 'Calle 32 No. 28-23 ', '2017-04-22', '0000-00-00', 1, 0, 'on', 'on', '0', '25_Mantenimiento_Preventivo_Coomeva_Clinica_Palmira_Palma_Real_22_04_2017\r'),
(26, '2017-03-25', 'CSA Medellín', '10.32.9.10', 'IPO', 'CSA', 'Diag. 75C No. 32 EE - 37', '2017-04-03', '0000-00-00', 1, 0, 'on', 'on', 'Rack no asegurado al piso', '34_Mantenimiento_Preventivo_CSA_Medellin_03_04_2017\r'),
(27, '2017-03-25', 'CSA Bucaramanga', '10.32.3.10', 'IPO', 'CSA', 'Carrera 35 No. 46-67 Piso 2 Cabecera del Llano', '2017-04-08', '0000-00-00', 1, 0, 'on', 'on', '0', '35_Mantenimiento_Preventivo_CSA_Bucaramanga_10_04_2017\r'),
(28, '2017-03-25', 'EPS Florencia UBA', '10.120.46.20', 'IPO', 'EPS', 'Calle 15 # 15- 17', '2017-04-08', '0000-00-00', 1, 0, 'on', 'on', '0', '36_Mantenimiento_Preventivo_EPS_Florencia_UBA_08_04_2017\r'),
(29, '2017-03-25', 'Bancoomeva Manizales Principal', '10.134.9.20', 'IPO', 'BANCO', 'Calle 20 No. 22-27, Local 1', '2017-04-08', '0000-00-00', 1, 0, 'on', 'on', '0', '23_Mantenimiento_Preventivo_Coomeva_Manizales_Principal_08_04_2017\r'),
(30, '2017-03-25', 'Bancoomeva  Palmira Complejo Palma Real', '10.12.110.9', 'BSM, MG', 'BANCO', 'Calle 32 No. 28-23 ', '2017-04-22', '0000-00-00', 1, 0, 'on', 'on', '0', '26_Mantenimiento_Preventivo_Bancoomeva_Palmira_Complejo_Palma_Real_22_04_2017\r'),
(31, '2017-04-01', 'Bancoomeva Tunja', '10.132.49.20', 'IPO', 'BANCO', 'Calle 20 No. 13-10, Local 126, Centro Comercial Plaza R', '2017-04-22', '0000-00-00', 1, 0, 'on', 'on', '0', '27_Mantenimiento_Preventivo_Bancoomeva_Tunja_22_04_2017\r'),
(32, '2017-04-01', 'SMP Medellín Sede Administrativa', '10.132.3.20', 'IPO', 'MP', 'Calle 27#46-70 L 259 y 271 Centro Comercial Punto Clave', '2017-04-26', '0000-00-00', 1, 0, 'on', 'on', 'Faltan Tornillos laterales Tapa IPO', '29_Mantenimiento_Preventivo_Coomeva_SMP_Medellin_Administrativa_26_04_2017\r'),
(33, '2017-04-01', 'Bancoomeva Pereira Prometeo', '10.134.16.20', 'IPO', 'BANCO', 'Carrera 13 # 13-09', '2017-04-22', '0000-00-00', 1, 0, 'on', 'on', '0', '28_Mantenimiento_Preventivo_Bancoomeva_Pereira_Prometeo_22_04_2017\r'),
(34, '2017-04-01', 'EPS Palmira Complejo Palma Real', '10.12.110.60', 'MG', 'EPS', 'Calle 32 No. 28-23 ', '2017-08-11', '0000-00-00', 1, 0, '1', 'on', '0', '0'),
(35, '2017-04-01', 'CSA Holguines', '192.168.92.23 ', 'BSM, MG', 'CSA', 'Cra 100 # 11-60 L 200', '2017-04-25', '0000-00-00', 1, 0, 'on', 'on', '0', '37_Mantenimiento_Preventivo_Coomeva _CSA_Holguines_Cali_25_04_2017\r'),
(36, '2017-04-08', 'Bancoomeva Barranquilla Norte', '10.132.253.20', 'IPO', 'BANCO', 'Carrera 14 No. 21-38', '2017-04-29', '0000-00-00', 1, 0, 'on', 'on', '0', '30_Mantenimiento_Preventivo_Bancoomeva_Bquilla_Norte_29_04_2017\r'),
(37, '2017-04-08', 'Bancoomeva Santa Marta', '10.132.46.20', 'IPO', 'BANCO', 'Calle 29 No. 15 -97, Local 2, Avenida Ferrocarril con A', '2017-04-29', '0000-00-00', 1, 0, 'on', 'on', '0', '31_Mantenimiento_Preventivo_Bancoomeva_Santa_Marta_29_04_2017\r'),
(38, '2017-04-08', 'Bancoomeva Envigado', '10.132.35.20', 'IPO', 'BANCO', 'Calle 33B Sur No. 47-71', '2017-05-12', '0000-00-00', 1, 0, 'on', 'on', 'Inconvenientes con aire acondicionado, se apaga ', '46_Mantenimiento_Preventivo_Bancoomeva_Envigado_12_05_2017\r'),
(39, '2017-04-08', 'EPS Medellín la 33', '10.120.240.9', 'BSM, MG', 'EPS', 'Calle 33 No. 74E - 69, Primer Piso', '2017-04-29', '0000-00-00', 1, 0, 'on', 'on', '0', '32_Mantenimiento_Preventivo_Coomeva_EPS_Medellin_la33_29_04_2017\r'),
(40, '2017-04-08', 'SMP Cali CEM', '10.131.8.20', 'IPO', 'MP', 'Centro Comercial Premier Local 235, Cl. 5 #69-03', '2017-05-02', '0000-00-00', 1, 0, 'on', 'on', '0', '38_Mantenimiento_Preventivo_Bancoomeva_SMP_Cali_CEM_02_05_2017\r'),
(41, '2017-04-15', 'Bancoomeva Cartagena Centro', '10.132.83.20', 'IPO', 'BANCO', 'Calle 38 # 8 -10', '2017-03-18', '0000-00-00', 1, 0, 'on', 'on', '0', '15_Mantenimiento_Preventivo_Bancoomeva_Cartagena_Centro18_03_2017\r'),
(42, '2017-04-15', 'SMP Bogotá CEM', '10.131.5.20', 'IPO', 'MP', 'Carrera 28B No. 78-41 ', '2017-05-02', '0000-00-00', 1, 0, 'on', 'on', 'Anclado no es correcto, equipo sobrepuesto, solo dos tornillos', '39_Mantenimiento_Preventivo_Bancoomeva_SMP_Bogota_CEM_03_05_2017\r'),
(43, '2017-04-15', 'Bancoomeva Ibagué', '10.132.36.20', 'IPO', 'BANCO', 'Carrera 5 No. 38-14', '2017-05-06', '0000-00-00', 1, 0, 'on', 'on', '0', '40_Mantenimiento_Preventivo_Bancoomeva_Ibague_06_05_2017\r'),
(44, '2017-04-15', 'Bancoomeva Valledupar', '10.132.50.20', 'IPO', 'BANCO', 'CALLE 12N° 17-11 LOCAL 2', '2017-05-06', '0000-00-00', 1, 0, 'on', 'on', '0', '41_Mantenimiento_Preventivo-Bancoomeva_Valledupar_06_05_2017\r'),
(45, '2017-04-15', 'Bancoomeva Popayán', '10.132.45.20', 'IPO', 'BANCO', 'Calle 4 No. 7-22', '2017-05-06', '0000-00-00', 1, 0, 'on', 'on', '0', '42_Mantenimiento_Preventivo_Bancoomeva_Popayan_06_05_2017\r'),
(46, '2017-04-22', 'Bancoomeva Medellin La 33', '10.132.58.9', 'BSM, MG', 'BANCO', 'Cl 33 # 74B-267', '2017-05-16', '0000-00-00', 1, 0, 'on', 'on', '0', '44_Mantenimiento_Preventivo_Bancoomeva_Medellin_La33_16_05_2017\r'),
(47, '2017-04-22', 'Bancoomeva Cali Oasis Unicentro', '10.132.4.20', 'IPO', 'BANCO', 'Carrera 100 No. 5-169 Local 133', '2017-05-16', '0000-00-00', 1, 0, 'on', 'on', '0', '45_Mantenimiento_Preventivo_Bancoomeva_Cali_Oasis_Unicentro_16_05_2017\r'),
(48, '2017-04-22', 'Bancoomeva Barranquilla Centro', '10.132.2.20', 'IPO', 'BANCO', 'Calle 39 # 41 -07', '2017-05-06', '0000-00-00', 1, 0, 'on', 'on', '0', '43_Mantenimiento_Preventivo_Bancoomeva_Barranquilla_Centro_06_05_2017\r'),
(49, '2017-04-22', 'Bancoomeva Armenia Centro', '10.132.0.20', 'IPO', 'BANCO', 'Calle 8N No. 13-32 Edificio Monteverde', '2017-05-23', '0000-00-00', 1, 0, 'on', 'on', '0', '53_Mantenimiento_Preventivo_Bancoomeva_Armenia_23_05_2017\r'),
(50, '2017-04-22', 'Bancoomeva Pereira Centro', '10.132.44.20', 'IPO', 'BANCO', 'Cra 8 No. 23-52', '2017-05-16', '0000-00-00', 1, 0, 'on', 'on', 'No hay Tierra', '48_Mantenimiento_Preventivo_Bancoomeva_Pereira_Centro_16_05_2017\r'),
(51, '2017-04-29', 'Bancoomeva Rionegro', '10.134.19.19', 'IPO', 'BANCO', 'Calle 42 No 56-39 Bloque 3 Local 143 Centro Comercial S', '2017-05-23', '0000-00-00', 1, 0, 'on', 'on', 'No cuenta con aire acondicionado en optimas condiciones, sobrecalentamiento del cuarto', '54_Mantenimiento_Preventivo_Bancoomeva_Rionegro_23_05_2017\r'),
(52, '2017-04-29', 'Bancoomeva Chia', '10.132.34.20', 'IPO', 'BANCO', 'Avenida Pradilla No. 5-92, Local 30A', '2017-05-16', '0000-00-00', 1, 0, 'on', 'on', 'Ubicación del equipo no es óptima, se tienenequipos sobrepuestos sin anclaje', '49_Mantenimiento_Preventivo_Bancoomeva_Chia_16_05_2017\r'),
(53, '2017-04-29', 'Bancoomeva Cartagena Manga', '10.132.33.20', 'IPO', 'BANCO', 'Av. Jimenez Calle 26 No 18-69', '2017-05-16', '0000-00-00', 1, 0, 'on', 'on', '0', '47_Mantenimiento_Preventivo_Bancoomeva_Cartagena_Manga_16_05_2017\r'),
(54, '2017-04-29', 'Bancoomeva Medellín Oviedo', '10.132.42.20', 'IPO', 'BANCO', 'Carrera 43A No. 6 Sur-15, Local 102', '2017-05-27', '0000-00-00', 1, 0, 'on', 'on', 'Aire acondicionado no enfría bien', '55_Mantenimiento_Preventivo_Bancoomeva_Medellin_Oviedo_27_05_2017\r'),
(55, '2017-04-29', 'Bancoomeva Cali Depósitos Norte', '10.132.26.20', 'IPO', 'BANCO', 'Calle 5B NTE. No. 21-60', '2017-05-20', '0000-00-00', 1, 0, 'on', 'on', '0', '50_Mantenimiento_Preventivo_Bancoomeva_Cali_Deposito_Norte_20_05_2017\r'),
(56, '2017-05-06', 'Bancoomeva Yopal', '10.134.23.20', 'IPO', 'BANCO', 'Calle 7 No. 20-67, Local 101', '2017-05-20', '0000-00-00', 1, 0, 'on', 'on', '0', '51_Mantenimiento_Preventivo_Bancoomeva-Yopal_20_05_2017\r'),
(57, '2017-05-06', 'Bancoomeva BUGA', '10.134.3.20', 'IPO', 'BANCO', 'Carrera 14 No 5-15.', '2017-05-27', '0000-00-00', 1, 0, 'on', 'on', '0', '56_Mantenimiento_Preventivo_Bancoomeva_Buga_27_05_2017\r'),
(58, '2017-05-06', 'Bancoomeva Turbo', '10.134.32.20', 'IPO', 'BANCO', 'Calle 102 #  13-74', '2017-05-30', '0000-00-00', 1, 0, 'on', 'on', '0', '59_Mantenimiento_Preventivo_Bancoomeva_Turbo_ 30_05_2017\r'),
(59, '2017-05-06', 'SMP Cartagena CEM', '10.131.24.20', 'IPO', 'MP', 'Kra 6 No. 5A-126 -Barrio Boca Grande', '2017-06-20', '0000-00-00', 1, 0, 'on', 'on', '0', '71_Mantenimiento_Preventivo_SMP_Cartagena_CEM_20_06_2017\r'),
(60, '2017-05-06', 'Bancoomeva Bogotá Salitre', '10.132.16.20', 'IPO', 'BANCO', 'Diagonal 22B No. 68C-25, Local 19, Ciudad Salitre', '2017-05-20', '0000-00-00', 1, 0, 'on', 'on', 'No hay Tierra', '52_Mantenimiento_Preventivo_Bancoomeva_Bogota_Salitre_20_05_2017\r'),
(61, '2017-05-13', 'Bancoomeva Bello', '10.134.2.20', 'IPO', 'BANCO', 'Carrera 48 No. 47-58', '2017-06-05', '0000-00-00', 1, 0, 'on', 'on', '0', '63_Mantenimiento_Preventivo_Bancoomeva_Bello_05_06_2017\r'),
(62, '2017-05-13', 'Bancoomeva Bogotá Santa Bárbara', '10.132.17.20', 'IPO', 'BANCO', 'Carrera 7A No. 113-43, Local 102, Edificio Torre Samsum', '2017-05-27', '0000-00-00', 1, 0, 'on', 'on', '0', '58_Mantenimiento_Preventivo_Bancoomeva_Bogota_Santa_Barbara_27_05_2017\r'),
(63, '2017-05-13', 'SMP Cali Mutuales', '10.131.9.20', 'IPO', 'MP', 'Calle 22 No. 6A-19 ', '2017-06-05', '0000-00-00', 1, 0, 'on', 'on', '0', '64_Mantenimiento_Preventivo_SMP_Cali_Mutuales_05_06_2017\r'),
(64, '2017-05-13', 'Bancoomeva Bogotá Santa Fe', '10.132.18.20', 'IPO', 'BANCO', 'Calle 183 No. 45-03, Local 2–68, Centro Comercial Santa', '2017-06-03', '0000-00-00', 1, 0, 'on', 'on', '0', '61_Mantenimiento_Preventivo_Bancoomeva_Bogota_ Santa_Fe_03_06_2017\r'),
(65, '2017-05-13', 'EPS Cartagena UBA Santa Lucía', '10.131.51.20', 'IPO', 'EPS', 'Transversal 54 #31-121 Barrio La Cordialidad, junto al', '2017-06-03', '0000-00-00', 1, 0, 'on', 'on', '0', '62_Mantenimiento_Preventivo_EPS_Cartagena_UBA_Santa_Lucia_03_06_2017\r'),
(66, '2017-05-20', 'Bancoomeva Bogotá Centro Internacional', '10.132.9.20', 'IPO', 'BANCO', 'Carrera 10 No. 26-49', '2017-06-12', '0000-00-00', 1, 0, 'on', 'on', 'No hay Tierra', '69_Mantenimiento_Preventivo_Bancoomeva_Bogota_Centro_Internacional_12_06_2017\r'),
(67, '2017-05-20', 'EPS ARMENIA Sede Administrativa', '10.120.6.19', 'IPO', 'EPS', 'Calle 17N No. 11-70.', '2017-06-06', '0000-00-00', 1, 0, 'on', 'on', '0', '65_Mantenimiento_Preventivo_EPS_Armenia_Sede_Administrativa_06_06_2017\r'),
(68, '2017-05-20', 'Bancoomeva Buenaventura', '10.140.23.110', 'IPO', 'BANCO', 'Calle 8 No. 2B-21', '2017-06-14', '0000-00-00', 1, 0, 'on', 'on', '0', '70_Mantenimiento_Preventivo_Bancoomeva_Buenaventura_14_06_2017\r'),
(69, '2017-05-20', 'Bancoomeva Tulua', '10.134.21.20', 'IPO', 'BANCO', 'Carrerra 27 # 25 -100', '2017-06-20', '0000-00-00', 1, 0, 'on', 'on', '0', '72_Mantenimiento_Preventivo_Bancoomeva_Tulua_20_06_2017\r'),
(70, '2017-05-20', 'Bancoomeva Florencia', '10.134.6.20', 'IPO', 'BANCO', 'Carrera 13 No. 12-48', '2017-05-27', '0000-00-00', 1, 0, 'on', 'on', 'Equipo no anclado, no hay tierra', '57_Mantenimiento_Preventivo_Bancoomeva_Florencia_27_05_2017\r'),
(71, '2017-05-27', 'Bancoomeva Pamplona', '10.134.14.20', 'IPO', 'BANCO', 'Cl 9 # 0E-58', '2017-06-12', '0000-00-00', 1, 0, 'on', 'on', '0', '68_Mantenimiento_Preventivo_Bancoomeva_ Pamplona_12_06_2017\r'),
(72, '2017-05-27', 'Bancoomeva Bogotá Galerias', '10.132.11.20', 'IPO', 'BANCO', 'Carrera 21 No. 54A-92', '2017-06-27', '0000-00-00', 1, 0, 'on', 'on', 'No hay Tierra', '78_Mantenimiento_Preventivo_Bancoomeva_Galerias_27_06_2017\r'),
(73, '2017-05-27', 'Bancoomeva Cartagena La Castellana', '10.132.32.20', 'IPO', 'BANCO', 'Carrera 67 No. 31-13 Manzana E, Lote 3, Castellana', '2017-06-10', '0000-00-00', 1, 0, 'on', 'on', '0', '66_Mantenimiento_Preventivo_Bancoomeva_Cartagena_La_Castellana_10_06_2017\r'),
(74, '2017-05-27', 'Bancoomeva Neiva', '10.132.43.20', 'IPO', 'BANCO', 'Calle 10 No.7-38', '2017-06-10', '0000-00-00', 1, 0, 'on', 'on', '0', '67_Mantenimiento_Preventivo_Bancoomeva_Neiva_10_06_2017\r'),
(75, '2017-06-03', 'Bancoova Unicentro Bogota', '10.132.19.20', 'IPO', 'BANCO', 'Calle 122 No. 17 A -48', '2017-06-10', '0000-00-00', 1, 0, 'on', 'on', 'Cuarto sin aire acondicionado, calentamiento de cuarto técnico', '73_Mantenimiento_Preventivo_Bancoomeva_Unicentro_20_06_2017\r'),
(76, '2017-06-03', 'HEC Medellín', '10.131.144.20', 'IPO', 'HEC', 'CARRERA 80 # 32EE-7', '2017-06-20', '0000-00-00', 1, 0, 'on', 'on', '0', '74_Mantenimiento_Preventivo_Coomeva_Medellin_HEC_20_06_2017\r'),
(77, '2017-06-03', 'CSA Bogotá Sede Administrativa', '10.32.16.254', 'IPO', 'CSA', 'Carrera 18 No.84-14', '2017-07-05', '0000-00-00', 1, 0, 'on', 'on', 'No hay Tierra', '84_Mantenimiento_Preventivo_Coomeva_CSA_Bogota_05_07_2017\r'),
(78, '2017-06-03', 'SMP Medellin CEM -Punto Clave', '10.131.12.20', 'IPO', 'MP', 'Calle 27#46-70 L 259 y 271 Centro Comercial Punto Clave', '2017-06-27', '0000-00-00', 1, 0, 'on', 'on', 'Se tienen sobrepuestos 3 equipos sobre el IPO, lo cual impide la remoción del mismo', '80_Mantenimiento_Preventivo_Coomeva_SMP_Medellin_Punto_Clave-27_06_2017\r'),
(79, '2017-06-03', 'EPS Cúcuta', '10.131.56.20', 'IPO', 'EPS', 'Calle 13 # 0-52', '2017-06-16', '0000-00-00', 1, 0, 'on', 'on', '0', '75_Mantenimiento_Preventivo_ Coomeva_Cucuta_16_06_2017\r'),
(80, '2017-06-10', 'Bancoomeva Bogotá Principal', '10.132.52.9', 'BSM, MG', 'BANCO', 'Carrera 15 No. 93B-43', '2017-07-11', '0000-00-00', 1, 0, 'on', 'on', '0', '87_Mantenimiento_Preventivo_Bancoomeva_Bogota_Principal_11_07_2017\r'),
(81, '2017-06-10', 'Bancoomeva Medellín la 70', '10.132.40.20', 'IPO', 'BANCO', 'Carrera 70 No. 45E-103', '2017-07-01', '0000-00-00', 1, 0, 'on', 'on', '0', '81_Mantenimiento_Preventivo_Bancoomeva_Medellín_La_70_01_07_2017\r'),
(82, '2017-06-10', 'Bancoomeva Quibdó', '10.134.17.20', 'IPO', 'BANCO', 'Carrera 5 No. 29 - 44/46', '2017-08-11', '0000-00-00', 1, 0, '1', 'on', '0', '0'),
(83, '2017-06-10', 'Bancoomeva Bucaramanga', '10.132.22.20', 'IPO', 'BANCO', 'Calle 54 No. 31-154', '2017-06-24', '0000-00-00', 1, 0, 'on', 'on', '0', '76_Mantenimiento_Preventivo_Bancoomeva_Bmanga_24_06_2017\r'),
(84, '2017-06-17', 'Bancoomeva La Dorada', '10.134.29.20', 'IPO', 'BANCO', 'Carrera 3 No 13-40 Local 1 Edificio Colombia', '2017-07-11', '0000-00-00', 1, 0, 'on', 'on', 'No hay Tierra, varios equipos sobrepuestos en el IPO', '88_Mantenimiento_Preventivo_Bancoomeva_La_Dorada_11_07_2017\r'),
(85, '2017-06-17', 'CSA Pereira Sede Administrativa', '10.32.13.1', 'IPO', 'CSA', 'Avenida Circunvalar # 3B-16 ', '2017-06-27', '0000-00-00', 1, 0, 'on', 'on', '0', '79_Mantenimiento_Preventivo_CSA_Pereira_Sede_Administrativa_27_06_2017\r'),
(86, '2017-06-17', 'Bancoomeva Villavicencio', '10.134.22.20', 'IPO', 'BANCO', 'Calle 14 No. 38-40 Centro Comercial Llano Centro L-1007', '2017-07-01', '0000-00-00', 1, 0, 'on', 'on', 'No hay Tierra', '83_Mantenimiento_Preventivo_Bancoomeva_Villavicencio_Llanocentro_01_07_2017\r'),
(87, '2017-06-17', 'Bancoomeva Sincelejo', '10.132.47.20', 'IPO', 'BANCO', 'Calle 17 No.16B-61', '2017-07-01', '0000-00-00', 1, 0, 'on', 'on', '0', '82_Mantenimiento_Preventivo_Bancoomeva_Sincelejo_01_07_2017\r'),
(88, '2017-06-24', 'Bancoomeva Suba Plaza Imperial', '10.132.21.20', 'IPO', 'BANCO', 'Carrera 104 No. 148-07, Local 279-280, Centro Comercial', '2017-07-17', '0000-00-00', 1, 0, 'on', 'on', 'Se tienen sobrepuestos 2 equipos sobre el IPO, lo cual impide la remoción del mismo', '91_Mantenimiento_Preventivo_ Bancoomeva_Suba_Plaza_Imperial_17_07_2017\r'),
(89, '2017-06-24', 'Bancoomeva Cali Cosmocentro', '10.132.25.20', 'IPO', 'BANCO', 'Centro Comercial Cosmocentro - Local C-232, 2do Piso', '2017-07-08', '0000-00-00', 1, 0, 'on', 'on', '0', '85_Mantenimiento_Preventivo_Bancoomeva_Cali_Cosmocentro_08_07_2017\r'),
(90, '2017-06-24', 'Bancoomeva Medellín Ayacucho', '10.132.38.20', 'IPO', 'BANCO', 'Carrera 40 No. 49-24, Piso 3', '2017-07-11', '0000-00-00', 1, 0, 'on', 'on', ' Varios equipos sobrepuestos en el IPO', '89_Mantenimiento_Preventivo_Bancoomeva_Medellin_Ayacucho_13_07_2017\r'),
(91, '2017-06-24', 'Bancoomeva Armenia Norte', '10.132.1.20', 'IPO', 'BANCO', 'Carrera 14 No. 21-38', '2017-07-08', '0000-00-00', 1, 0, 'on', 'on', 'No hay Tierra', '86_Mantenimiento_Preventivo_Bancoomeva_Armenia_Norte_08_07_2017\r'),
(92, '2017-06-24', 'Bancoomeva Monteria', '10.134.10.20', 'IPO', 'BANCO', 'Calle 28 No. 4-21, Local 105', '2017-07-14', '0000-00-00', 1, 0, 'on', 'on', '0', '90_Mantenimiento_Preventivo_Bancoomeva_Monteria_14_07_2017\r'),
(93, '2017-07-10', 'Bancoomeva Bogotá Andino', '10.132.5.20', 'IPO', 'BANCO', 'Avenida 82 No. 10-50', '2017-07-25', '0000-00-00', 1, 0, 'on', 'on', '0', '98_Mantenimiento_Preventivo_ Bancoomeva_Andino_25_07_2017\r'),
(94, '2017-07-01', 'Bancoomeva Bogotá Cedritos', '10.132.8.20', 'IPO', 'BANCO', 'Diagonal 151 No. 32-19, Locales 2-107 a 109, Centro Com', '2017-08-02', '0000-00-00', 1, 0, 'on', 'on', '0', '101_Mantenimiento_Preventivo_Bancoomeva_Bogotá_Cedritos_02_08_2017\r'),
(95, '2017-07-01', 'EPS Cali Seres', '10.131.118.12', 'IPO', 'EPS', 'Carrera 61 #9-251 segundo piso', '2017-07-17', '0000-00-00', 1, 0, 'on', 'on', '0', '93_Mantenimiento_Preventivo_EPS_Cali_Seres_17_07_2017\r'),
(96, '2017-07-08', 'EPS Cartagena Sede Administrativa (Manga)', '10.120.27.20', 'IPO', 'EPS', 'CALLE 29D No. 22A-13 Local 3', '2017-07-17', '0000-00-00', 1, 0, 'on', 'on', '0', '94_Mantenimiento_Preventivo_EPS_Cartagena_Sede_Administrativa_17_07_2017\r'),
(97, '2017-07-08', 'Bancoomeva Bogotá Restrepo', '10.132.15.20', 'IPO', 'BANCO', 'Carrera 24 No. 15-16 Sur', '2017-08-03', '0000-00-00', 1, 0, 'on', 'on', 'Faltan dos tornillos en la unidad del rack donde esta ubicado el IPO', '103_Mantenimiento_Preventivo_Bancoomeva_Bogotá_Restrepo_03_08_2017\r'),
(98, '2017-07-08', 'Bancoomeva Bogotá Chapinero', '10.132.10.20', 'IPO', 'BANCO', 'Carrera 13 No. 53-52', '2017-08-03', '0000-00-00', 1, 0, 'on', 'on', '0', '102_Mantenimiento_Preventivo_Bancoomeva_Bogotá_Chapinero_03_08_2017\r'),
(99, '2017-07-08', 'Bancoomeva Cali Depósitos Centro', '10.132.24.20', 'IPO', 'BANCO', 'Carrera 4 Nº 8-73', '2017-07-25', '0000-00-00', 1, 0, 'on', 'on', '0', '99_Mantenimiento_Preventivo_Bancoomeva_Deposito_Centro_25_07_2017\r'),
(100, '2017-07-15', 'Bancoomeva Bogotá Avenida Chile', '10.132.6.20', 'IPO', 'BANCO', 'Carrera 7 No. 72-83', '2017-08-04', '0000-00-00', 1, 0, 'on', 'on', 'El equipo no cuenta con unidad propia, se encuentra ubicado enciam de otro servidor', '104_Mantenimiento_Preventivo_Bancoomeva_Bogotá_Avenida_Chile_04_08_2017\r'),
(101, '2017-07-15', 'CSA Barranquilla', '10.32.10.20', 'IPO', 'CSA', 'Carrera 53 No. 68B -135  - Local 137', '2017-07-25', '0000-00-00', 1, 0, 'on', 'on', '0', '97_Mantenimiento_Preventivo_Coomeva_CSA_Barranquilla_25_07_2017\r'),
(102, '2017-07-15', 'SMP Medellín UPP Laureles', '10.120.4.19', 'IPO', 'MP', 'Carrera 43A # 16B-138', '2017-07-17', '0000-00-00', 1, 0, 'on', 'on', '0', '95_Mantenimiento_Preventivo_SMP_Medellín_UPP_Laureles_17_07_2017\r'),
(103, '2017-07-15', 'Bancoomeva Riohacha Extensión de Caja', '10.134.18.20', 'IPO', 'BANCO', 'Cra 8 # 3- 27 Piso 1', '2017-07-26', '0000-00-00', 1, 0, 'on', 'on', '0', '92_Mantenimiento_Preventivo_Bancoomeva_Riohacha_Extensión_de_Caja_17_07_2017\r'),
(104, '2017-07-22', 'EPS Sincelejo Sede Administrativa, UBA Ford y Clínica S', '10.120.109.20', 'IPO', 'EPS', 'Carrera 19 con Calle 17 Esquina, Barrio Ford', '2017-08-02', '0000-00-00', 1, 0, 'on', 'on', '0', '100_Mantenimiento_Preventivo_EPS_Sincelejo_Sede_Administrativa,_UBA_Ford_01_08_2017\r'),
(105, '2017-07-22', 'Bancoomeva Bogotá Niza', '10.132.12.20', 'IPO', 'BANCO', 'Carrera 70D No. 127-60, Interior 6, Local 61', '2017-08-05', '0000-00-00', 1, 0, '1', 'on', '0', '105_Mantenimiento_Preventivo_Bancoomeva_Bogotá_Niza_05_08_2017'),
(106, '2017-07-22', 'SMP Medellín PyP Sao Paulo', '10.131.16.20', 'IPO', 'MP', 'CC Sao Paulo L 460 Cra 43 A # 18 Sur – 135', '2017-07-24', '0000-00-00', 1, 0, '1', 'on', '0', '96_Mantenimiento_Preventivo_ Coomeva_Medellín_SMP_Sao_Paulo_24_07_2017'),
(107, '2017-07-22', 'Bancoomeva Cucuta', '10.134.5.20', 'IPO', 'BANCO', 'Cra 15 # 49 34', '2017-08-05', '0000-00-00', 1, 0, '1', 'on', '0', '106_Mantenimiento_Preventivo_Preventivo_Bancoomeva_Cúcuta_05_08_2017');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `generador`
--
ALTER TABLE `generador`
  ADD PRIMARY KEY (`id_texto`);

--
-- Indices de la tabla `mantenimientos`
--
ALTER TABLE `mantenimientos`
  ADD PRIMARY KEY (`id_mantenimiento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `generador`
--
ALTER TABLE `generador`
  MODIFY `id_texto` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `mantenimientos`
--
ALTER TABLE `mantenimientos`
  MODIFY `id_mantenimiento` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
