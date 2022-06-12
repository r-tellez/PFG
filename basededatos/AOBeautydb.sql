-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-01-2020 a las 19:13:02
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET AUTOCOMMIT = 0;

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;

/*!40101 SET NAMES utf8mb4 */
;

--
-- Base de datos: `AOBeautydb`
--
CREATE DATABASE IF NOT EXISTS AOBeautydb;

USE AOBeautydb;

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `tbladmin`
--
CREATE TABLE
    IF NOT EXISTS `tbladmin` (
        `ID` INT(10) NOT NULL,
        `AdminName` CHAR(50) DEFAULT NULL,
        `UserName` CHAR(50) DEFAULT NULL,
        `MobileNumber` VARCHAR (9) DEFAULT NULL,
        `Email` VARCHAR(200) DEFAULT NULL,
        `Password` VARCHAR(200) DEFAULT NULL,
        `Rol` enum('Admin', 'Owner', 'Employee') DEFAULT 'Employee',
        `AdminRegdate` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP
    ) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--
-- Volcado de datos para la tabla `tbladmin`
--
INSERT INTO
    `tbladmin` (
        `ID`,
        `AdminName`,
        `UserName`,
        `MobileNumber`,
        `Email`,
        `Password`,
        `Rol`,
        `AdminRegdate`
    )
VALUES (
        1,
        'allinbeauty',
        'admin',
        '644937576',
        'stelcas367@g.educaand.es',
        '4b67deeb9aba04a5b54632ad19934f26',
        'Admin',
        '2019-07-25 06:21:50'
    ), (
        2,
        'rebeca',
        'rtellez',
        '644937576',
        'stelcas367@g.educaand.es',
        '4b67deeb9aba04a5b54632ad19934f26',
        'Admin',
        '2019-07-25 06:21:50'
    ), (
        3,
        'nieves',
        'njimenez',
        '952500840',
        'stelcas367@g.educaand.es',
        '4b67deeb9aba04a5b54632ad19934f26',
        'Owner',
        '2019-07-25 06:21:50'
    ), (
        4,
        'empleado01',
        'empleado01',
        '952500840',
        'stelcas367@g.educaand.es',
        '4b67deeb9aba04a5b54632ad19934f26',
        'Employee',
        '2019-07-25 06:21:50'
    );

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `tblappointment`
--
CREATE TABLE
    IF NOT EXISTS `tblappointment` (
        `ID` INT(10) NOT NULL,
        `AptNumber` VARCHAR(80) DEFAULT NULL,
        `Name` VARCHAR(120) DEFAULT NULL,
        `Email` VARCHAR(120) DEFAULT NULL,
        `PhoneNumber` VARCHAR (9) DEFAULT NULL,
        `AptDate` VARCHAR(120) DEFAULT NULL,
        `AptTime` VARCHAR(120) DEFAULT NULL,
        `Services` VARCHAR(120) DEFAULT NULL,
        `ApplyDate` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
        `Remark` VARCHAR(250) NOT NULL,
        `Status` VARCHAR(50) NOT NULL,
        `RemarkDate` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00'
        ON
        UPDATE
            CURRENT_TIMESTAMP
    ) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--
-- Volcado de datos para la tabla `tblappointment`
--
INSERT INTO
    `tblappointment` (
        `ID`,
        `AptNumber`,
        `Name`,
        `Email`,
        `PhoneNumber`,
        `AptDate`,
        `AptTime`,
        `Services`,
        `ApplyDate`,
        `Remark`,
        `Status`,
        `RemarkDate`
    )
VALUES (
        8,
        '496532914',
        'Roman Garcia',
        'rgarcia@gmail.com',
        '3211076843',
        '1/23/2020',
        '6:30pm',
        'Fruit Facial',
        '2020-01-23 23:50:09',
        'Excelente Cliente',
        '1',
        '2020-01-23 23:52:03'
    ), (
        9,
        '304302609',
        'Lucia grajales',
        'lgrajales@gmail.com',
        '3065439781',
        '1/24/2020',
        '9:00am',
        'Fruit Facial',
        '2020-01-24 13:56:31',
        'La srta realizÃ³ el proceso correspondiente.',
        '1',
        '2020-01-24 13:57:43'
    ), (
        10,
        '604686038',
        'JUAN ARANGO',
        'JARANGO@gmail.com',
        '3147641979',
        '1/24/2020',
        '1:00pm',
        'Masaje Facial',
        '2020-01-24 14:54:02',
        'Excelente cliente, recomendado',
        '1',
        '2020-01-24 14:54:57'
    ), (
        11,
        '932355891',
        'Dilan cabal',
        'DCABAL@gmail.com',
        '3178674931',
        '1/24/2020',
        '10:30am',
        'Masaje Facial',
        '2020-01-24 15:11:49',
        'Se realizÃ³ el pedido a satisfacciÃ³n.',
        '1',
        '2020-01-24 15:12:54'
    ), (
        12,
        '182457009',
        'Juan Gallego',
        'JGALLEGO@gmail.com',
        '3163798467',
        '1/24/2020',
        '1:30am',
        'Masaje Facial',
        '2020-01-24 16:20:12',
        'Acepto',
        '1',
        '2020-01-24 16:21:20'
    ), (
        13,
        '958882735',
        'Rocio Calam',
        'rcalam@gmail.com',
        '3010123201',
        '1/24/2020',
        '10:30pm',
        'Layer Haircut',
        '2020-01-24 16:43:01',
        'Se le cobra',
        '2',
        '2020-01-24 16:44:55'
    );

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `tblcustomers`
--
CREATE TABLE
    IF NOT EXISTS `tblcustomers` (
        `ID` INT(10) NOT NULL,
        `Name` VARCHAR(120) DEFAULT NULL,
        `Email` VARCHAR(200) DEFAULT NULL,
        `MobileNumber` VARCHAR (9) DEFAULT NULL,
        `Gender` enum('Mujer', 'Hombre', 'No definido') DEFAULT NULL,
        `Details` mediumtext,
        `CreationDate` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
        `UpdationDate` TIMESTAMP NULL DEFAULT NULL
        ON
        UPDATE
            CURRENT_TIMESTAMP
    ) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--
-- Volcado de datos para la tabla `tblcustomers`
--
INSERT INTO
    `tblcustomers` (
        `ID`,
        `Name`,
        `Email`,
        `MobileNumber`,
        `Gender`,
        `Details`,
        `CreationDate`,
        `UpdationDate`
    )
VALUES (
        1,
        'Juan PÃ©rez',
        'jperez@gmail.com',
        '000000000',
        'Hombre',
        'Taking Hair Spa',
        '2019-07-26 11:09:10',
        '2020-01-24 15:08:36'
    ), (
        2,
        'Edith Velazco',
        'dgarzon@hotmail.com',
        '000000000',
        'Mujer',
        'Taken haircut by him',
        '2019-07-26 11:10:02',
        '2020-01-24 15:08:42'
    ), (
        3,
        'Daniel Garzon',
        'dgarzon@hotmail.com',
        '000000000',
        'Hombre',
        'Buen Cliente',
        '2019-07-26 11:10:28',
        '2020-01-24 15:08:50'
    ), (
        4,
        'Adrian Narvaez',
        'anarvaez@gmail.com',
        '000000000',
        'Hombre',
        'Taking Body Spa',
        '2019-08-19 13:38:58',
        '2020-01-24 15:08:07'
    ), (
        5,
        'Norman Palao',
        'npalao@gmail.com',
        '000000000',
        'Hombre',
        'Cliente frecuente,  le gusta los servicios premium tenerlo muy en cuenta',
        '2019-08-21 16:24:53',
        '2020-01-24 15:08:58'
    ), (
        6,
        'Roberto GalÃ¡n',
        'rgalan@gmail.com',
        '000000000',
        'Hombre',
        'Interesante cliente',
        '2020-01-24 14:56:35',
        '2020-01-24 18:12:27'
    ), (
        7,
        'Humberto Gonzalez',
        'hgonzalez@hotmail.com',
        '000000000',
        'Hombre',
        'Creado satisfactoriamente',
        '2020-01-24 17:06:53',
        '2020-01-24 17:09:40'
    );

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `tblinvoice`
--
CREATE TABLE
    IF NOT EXISTS `tblinvoice` (
        `id` INT(11) NOT NULL,
        `Userid` INT(11) DEFAULT NULL,
        `ServiceId` INT(11) DEFAULT NULL,
        `BillingId` INT(11) DEFAULT NULL,
        `PostingDate` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP
    ) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--
-- Volcado de datos para la tabla `tblinvoice`
--
INSERT INTO
    `tblinvoice` (
        `id`,
        `Userid`,
        `ServiceId`,
        `BillingId`,
        `PostingDate`
    )
VALUES (26, 1, 1, 535139230, '2020-01-23 23:55:32'), (27, 6, 1, 232733358, '2020-01-24 14:58:47'), (28, 4, 10, 635394484, '2020-01-24 16:51:26'), (29, 4, 15, 609822877, '2020-01-24 17:02:06'), (30, 4, 16, 609822877, '2020-01-24 17:02:06');

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `tblpage`
--
CREATE TABLE
    IF NOT EXISTS `tblpage` (
        `ID` INT(10) NOT NULL,
        `PageType` VARCHAR(200) DEFAULT NULL,
        `PageTitle` mediumtext,
        `PageDescription` mediumtext,
        `Email` VARCHAR(200) DEFAULT NULL,
        `MobileNumber` VARCHAR (9) DEFAULT NULL,
        `UpdationDate` DATE DEFAULT NULL,
        `Timing` VARCHAR(200) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--
-- Volcado de datos para la tabla `tblpage`
--
INSERT INTO
    `tblpage` (
        `ID`,
        `PageType`,
        `PageTitle`,
        `PageDescription`,
        `Email`,
        `MobileNumber`,
        `UpdationDate`,
        `Timing`
    )
VALUES (
        1,
        'aboutus',
        'Acerca de',
        'Disponemos de una amplia gama de productos y tratamientos extraordinariamente diseñados para satisfacer todas las necesidades del cabello y cuero cabelludo. Los ingredientes mediterráneos naturales y el envasado sostenible hacen que nuestra peluquería sea la mejor opción para cuidar el cabello respetando el medio ambiente..',
        NULL,
        NULL,
        NULL,
        ''
    ), (
        2,
        'contactus',
        'Contacto',
        'Vélez-Málaga (Málaga)',
        'peluqueria_laura@gmail.com',
        952500840,
        NULL,
        '08:00 am to 6:30 pm'
    );

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `tblservices`
--
CREATE TABLE
    IF NOT EXISTS `tblservices` (
        `ID` INT(10) NOT NULL,
        `ServiceName` VARCHAR(200) DEFAULT NULL,
        `Cost` DECIMAL (5, 2) DEFAULT NULL,
        `CreationDate` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP
    ) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--
-- Volcado de datos para la tabla `tblservices`
--
INSERT INTO
    `tblservices` (`ID`, `ServiceName`, `Cost`, `CreationDate`)
VALUES (1, 'Masaje Facial', 12.00, '2019-07-25 11:22:38'), (2, 'Facial de Fruta', 11.05, '2019-07-25 11:22:53'), (3, 'Facial de Pepino', 10.00, '2019-07-25 11:23:10'), (4, 'Manicura de Lujo', 15.00, '2019-07-25 11:23:34'), (
        5,
        'Integral de Pedicura y Coerte de Cabello',
        13.00,
        '2019-07-25 11:23:47'
    ), (
        6,
        'Manicura Precio Estudiantes',
        65.00,
        '2019-07-25 11:24:01'
    ), (
        7,
        'Depilado de Piernas',
        40.00,
        '2019-07-25 11:24:19'
    ), (
        8,
        'Corte de Cabello Hombre',
        15.00,
        '2019-07-25 11:24:38'
    ), (9, 'Corte de Barba', 11.00, '2019-07-25 11:24:53'), (10, 'Masaje Espalda', 40.00, '2019-07-25 11:25:08'), (
        11,
        'Teñido de Cabello',
        12.00,
        '2019-07-25 11:25:35'
    ), (
        12,
        'Peinado  con Rayos',
        54.00,
        '2019-08-19 13:36:27'
    ), (
        14,
        'Ondulado y Grafilado',
        43.00,
        '2019-08-21 15:45:50'
    ), (15, 'Blower y Alizer', 33.00, '2019-08-21 16:23:23'), (
        16,
        'Masaje Facial Vertido',
        50.00,
        '2020-01-23 19:47:52'
    ), (
        17,
        'Exfoliante de Avena',
        36.00,
        '2020-01-24 17:04:15'
    ), (
        18,
        'Exfoliante de Quinoa',
        43.00,
        '2020-01-24 17:04:27'
    );

--
-- Índices para tablas volcadas
--
--
-- Indices de la tabla `tbladmin`
--
ALTER TABLE `tbladmin`
ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tblappointment`
--
ALTER TABLE `tblappointment`
ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tblcustomers`
--
ALTER TABLE `tblcustomers`
ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tblinvoice`
--
ALTER TABLE `tblinvoice`
ADD PRIMARY KEY (`id`),
ADD KEY `id` (`id`);

--
-- Indices de la tabla `tblpage`
--
ALTER TABLE `tblpage`
ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tblservices`
--
ALTER TABLE `tblservices`
ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--
--
-- AUTO_INCREMENT de la tabla `tbladmin`
--
ALTER TABLE
    `tbladmin` MODIFY `ID` INT(10) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 2;

--
-- AUTO_INCREMENT de la tabla `tblappointment`
--
ALTER TABLE
    `tblappointment` MODIFY `ID` INT(10) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 14;

--
-- AUTO_INCREMENT de la tabla `tblcustomers`
--
ALTER TABLE
    `tblcustomers` MODIFY `ID` INT(10) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 8;

--
-- AUTO_INCREMENT de la tabla `tblinvoice`
--
ALTER TABLE
    `tblinvoice` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 31;

--
-- AUTO_INCREMENT de la tabla `tblpage`
--
ALTER TABLE
    `tblpage` MODIFY `ID` INT(10) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 3;

--
-- AUTO_INCREMENT de la tabla `tblservices`
--
ALTER TABLE
    `tblservices` MODIFY `ID` INT(10) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 19;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;