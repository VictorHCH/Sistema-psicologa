-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: mariadb-sv
-- Tiempo de generación: 08-11-2022 a las 23:02:35
-- Versión del servidor: 10.9.3-MariaDB-1:10.9.3+maria~ubu2204
-- Versión de PHP: 8.0.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `piscologa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `numero_control` varchar(8) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(60) NOT NULL,
  `curp` varchar(18) NOT NULL,
  `peso` varchar(7) NOT NULL,
  `estatura` varchar(7) NOT NULL,
  `fecha_alta` date NOT NULL,
  `tipo_sangre` int(11) DEFAULT NULL,
  `id_psicologa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `numero_control`, `nombres`, `apellidos`, `curp`, `peso`, `estatura`, `fecha_alta`, `tipo_sangre`, `id_psicologa`) VALUES
(1, '99417869', 'Kippy', 'Tuhy', 'HTLG311898YQVWCS72', '25.0 Kg', '072 Cm', '2022-09-09', 3, 1),
(2, '25419538', 'Geoffrey', 'Astill', 'YQAQ322152JOSZNH76', '63.2 Kg', '176 Cm', '2022-03-31', 7, 1),
(3, '24410485', 'Vidovik', 'Le feaver', 'TOIJ265647KWCPZE57', '06.3 Kg', '876 Cm', '2022-01-15', 2, 1),
(4, '48417349', 'Peta', 'Gowthrop', 'IFFE776797DJRJLY01', '34.7 Kg', '973 Cm', '2022-09-02', 2, 1),
(5, '27417504', 'Ephraim', 'Jobling', 'JGQZ899512VWXHEX91', '37.9 Kg', '875 Cm', '2021-12-16', 4, 1),
(6, '66414683', 'Ilaire', 'Costellow', 'EBPT740784QSMAAU87', '29.1 Kg', '667 Cm', '2022-05-09', 5, 1),
(7, '39413807', 'Erskine', 'Stanislaw', 'NUXV909579SERNLJ88', '85.9 Kg', '389 Cm', '2022-03-27', 1, 1),
(8, '75416912', 'Maybelle', 'Passey', 'KOOH748643IMEHOK44', '18.5 Kg', '976 Cm', '2022-06-28', 8, 1),
(9, '33418283', 'Locke', 'Sneezem', 'HEPV155829EVXPDX52', '41.8 Kg', '373 Cm', '2022-08-11', 6, 1),
(10, '82416559', 'Theadora', 'Siney', 'YIHZ576671MNXYGK90', '28.3 Kg', '112 Cm', '2022-01-11', 4, 1),
(11, '25419033', 'Derek', 'Meenan', 'OXZZ895604JUIUGJ88', '55.2 Kg', '017 Cm', '2022-01-22', 6, 1),
(12, '84417385', 'Robena', 'Ruberti', 'GGDO056163YHWOFE37', '22.9 Kg', '815 Cm', '2022-11-05', 5, 1),
(13, '18411299', 'Loretta', 'Belsey', 'EUQC854972TTUGDG38', '90.7 Kg', '624 Cm', '2022-05-26', 8, 1),
(14, '05411996', 'Nadia', 'Scarse', 'WEYS098771PZVDTI84', '22.5 Kg', '958 Cm', '2022-07-10', 4, 1),
(15, '89415846', 'Chico', 'MacGrath', 'SZXX360075WMZSWG98', '39.8 Kg', '607 Cm', '2021-11-09', 6, 1),
(16, '54416443', 'Jemmy', 'Coverdale', 'CSMW515648XIGDMN26', '88.9 Kg', '130 Cm', '2021-12-22', 1, 1),
(17, '23418901', 'Luci', 'Coom', 'EZKL039222LNBXSJ51', '24.3 Kg', '926 Cm', '2022-05-12', 4, 1),
(18, '14412647', 'Burg', 'Tuma', 'QTDD311485UZVVBZ82', '90.1 Kg', '084 Cm', '2021-12-25', 4, 1),
(19, '50414981', 'Millie', 'Clarson', 'FSSW984990GZPSXO83', '66.7 Kg', '964 Cm', '2022-10-11', 2, 1),
(20, '96413313', 'Jase', 'Myrick', 'GBPJ723762KKMTER19', '38.2 Kg', '402 Cm', '2022-08-14', 8, 1),
(21, '57415370', 'Nalani', 'Iacopetti', 'NZPU256700VFDVWI59', '72.1 Kg', '828 Cm', '2022-08-20', 2, 1),
(22, '85411705', 'Pris', 'Kurton', 'FBVK840117CQZOPC60', '71.4 Kg', '612 Cm', '2022-11-01', 6, 1),
(23, '27410587', 'Cordie', 'Borghese', 'ZRCT616049ZZANGQ81', '05.1 Kg', '204 Cm', '2021-11-13', 7, 1),
(24, '00418828', 'Jenine', 'Rawdall', 'PRPY621268RJVKNR50', '96.6 Kg', '743 Cm', '2021-12-06', 2, 1),
(25, '38413424', 'Noach', 'Kempston', 'TNZL165005CHVMVV54', '38.6 Kg', '429 Cm', '2022-03-20', 4, 1),
(26, '08410901', 'Ofilia', 'Hammerich', 'WIYG555581FYURCB70', '55.6 Kg', '805 Cm', '2022-01-14', 5, 1),
(27, '51410220', 'Margit', 'Phizaclea', 'ASSP734810OFFBUG74', '31.7 Kg', '694 Cm', '2022-07-15', 3, 1),
(28, '79413325', 'Dolorita', 'Collihole', 'YRGY189387KGTKYD87', '49.4 Kg', '221 Cm', '2022-03-17', 3, 1),
(29, '95417073', 'Ansley', 'Tatchell', 'RJNK681614MGXVHA03', '85.1 Kg', '629 Cm', '2022-06-18', 3, 1),
(30, '01417737', 'Chandler', 'Sherrett', 'MKNE427965GMSLTU01', '57.4 Kg', '542 Cm', '2022-10-31', 4, 1),
(31, '23417283', 'Hamish', 'Hazley', 'FTON755991HGEITN29', '91.2 Kg', '699 Cm', '2022-01-26', 7, 1),
(32, '48411601', 'Kirk', 'Faulkener', 'JDVZ179573BRSTKU97', '20.4 Kg', '782 Cm', '2022-06-29', 7, 1),
(33, '02419783', 'Herman', 'Daily', 'DRYB815192NIVPPZ62', '91.9 Kg', '276 Cm', '2022-02-05', 2, 1),
(34, '33419703', 'Hillel', 'Peedell', 'MLGQ254840UBQWTU20', '14.9 Kg', '733 Cm', '2022-03-02', 2, 1),
(35, '76415874', 'Holly-anne', 'Gethouse', 'MOSK410412UQXQGP80', '07.9 Kg', '959 Cm', '2022-07-27', 1, 1),
(36, '77418649', 'Florrie', 'Aynsley', 'FQEV089903XHMMIM31', '76.7 Kg', '234 Cm', '2021-12-01', 6, 1),
(37, '33416476', 'Janel', 'Noice', 'YTUS672070WONXHC31', '74.2 Kg', '479 Cm', '2021-11-28', 2, 1),
(38, '16417021', 'Ana', 'Figura', 'SFXV843466PELLRX62', '97.8 Kg', '782 Cm', '2022-09-16', 5, 1),
(39, '86414865', 'Felice', 'Marns', 'SIVJ273333CRTLXY16', '08.9 Kg', '308 Cm', '2021-12-10', 4, 1),
(40, '05410189', 'Ashli', 'Spollen', 'SVZD853440PNZHEE56', '82.5 Kg', '537 Cm', '2022-09-05', 4, 1),
(41, '44413799', 'Maribeth', 'Munden', 'TSDK716221ZEFFRL97', '04.0 Kg', '945 Cm', '2022-03-13', 1, 1),
(42, '45417258', 'Tonie', 'Langhorne', 'GYTU445658MVHXPO47', '24.4 Kg', '246 Cm', '2022-09-10', 7, 1),
(43, '03416994', 'Selby', 'Lambole', 'SZTR192261KHNJWE21', '98.2 Kg', '130 Cm', '2021-12-26', 2, 1),
(44, '77418800', 'Brear', 'Grattan', 'IYVJ230871HJLDRB66', '68.7 Kg', '059 Cm', '2022-08-03', 7, 1),
(45, '84414785', 'Elane', 'Briskey', 'GNLA623514ZPESKW51', '24.4 Kg', '849 Cm', '2022-07-08', 8, 1),
(46, '62417972', 'Raffaello', 'Ramm', 'BHDQ677820NHMAQS08', '51.5 Kg', '349 Cm', '2022-08-29', 5, 1),
(47, '00419659', 'Marijo', 'Pfleger', 'FZCM683810IRPGJL64', '98.3 Kg', '128 Cm', '2022-03-02', 3, 1),
(48, '89418787', 'Gerek', 'Prangnell', 'YULH965337VDJGTE66', '67.8 Kg', '357 Cm', '2022-08-28', 6, 1),
(49, '88419283', 'Drusilla', 'Ingamells', 'LBFY636716KTWBWP56', '29.7 Kg', '368 Cm', '2022-02-28', 7, 1),
(50, '09413214', 'Bidget', 'Roalfe', 'DPPP172845CTGJTZ72', '96.6 Kg', '897 Cm', '2022-07-23', 1, 1),
(51, '70410127', 'Muriel', 'McKim', 'AIMA201414SZGGHQ76', '04.5 Kg', '649 Cm', '2021-11-25', 5, 1),
(52, '44416876', 'Lilia', 'Gannan', 'VWII202338KHUXEG30', '04.4 Kg', '173 Cm', '2022-02-21', 2, 1),
(53, '94414050', 'Jerrie', 'Burds', 'ZAFU349107CFZYOE26', '59.1 Kg', '888 Cm', '2022-10-24', 8, 1),
(54, '37410539', 'Stevana', 'Screeton', 'NGDY406113VAXEHJ72', '02.1 Kg', '980 Cm', '2022-05-06', 1, 1),
(55, '81419936', 'Elwira', 'Lacaze', 'RCRF101286ILDLNT31', '74.5 Kg', '291 Cm', '2022-03-03', 6, 1),
(56, '65416106', 'Bryanty', 'Reilly', 'QOXC232872JCNNOY13', '35.7 Kg', '335 Cm', '2021-11-28', 7, 1),
(57, '24411326', 'Jilleen', 'Hackly', 'QRUI303531FISXVL88', '77.2 Kg', '571 Cm', '2022-09-18', 7, 1),
(58, '43419513', 'Ashlan', 'Pidgeley', 'OCFN444326QRYFZN55', '06.7 Kg', '585 Cm', '2022-03-04', 7, 1),
(59, '84412350', 'Ranique', 'Stambridge', 'DWTD541964AKMDFV45', '92.9 Kg', '340 Cm', '2022-07-31', 3, 1),
(60, '13416386', 'Weston', 'Billingsly', 'DSWG155176WHCNWE58', '24.4 Kg', '424 Cm', '2022-10-25', 8, 1),
(61, '18414653', 'Brannon', 'Dudman', 'VFFV317950DDCGFI19', '87.2 Kg', '028 Cm', '2022-09-16', 2, 1),
(62, '90418701', 'Red', 'Lambertz', 'YIAQ414123AAKJUO11', '21.0 Kg', '616 Cm', '2021-12-26', 7, 1),
(63, '94417060', 'Neysa', 'Slane', 'QZXC512161KAYLBJ19', '24.7 Kg', '359 Cm', '2022-06-27', 1, 1),
(64, '59417813', 'Feodora', 'Jillis', 'URVZ543673HAXWMF69', '63.3 Kg', '594 Cm', '2022-11-02', 7, 1),
(65, '39413225', 'Denyse', 'Loweth', 'UIAD451673UXFJJF01', '94.2 Kg', '725 Cm', '2022-10-05', 2, 1),
(66, '51414230', 'Collie', 'Molineux', 'JGEH115939MAZSKJ85', '93.6 Kg', '169 Cm', '2021-12-20', 6, 1),
(67, '70418246', 'Timmi', 'Franck', 'YVFT818377BOWZDS23', '47.7 Kg', '551 Cm', '2021-11-25', 2, 1),
(68, '46413481', 'Alejoa', 'Renoden', 'GRIL512883NWCEMU19', '79.8 Kg', '884 Cm', '2022-07-07', 2, 1),
(69, '16410382', 'Trudey', 'Brosetti', 'FXXE283200AWNSJA38', '42.2 Kg', '667 Cm', '2022-02-08', 8, 1),
(70, '62414632', 'Grace', 'Baskerfield', 'NZQN309957MEIFQA45', '46.9 Kg', '346 Cm', '2022-04-29', 8, 1),
(71, '41411505', 'Judie', 'Rosgen', 'RMDT807833ZTFWWX60', '68.4 Kg', '659 Cm', '2022-09-06', 7, 1),
(72, '59410413', 'Sigismund', 'Streat', 'SDFO332277GXIRRK22', '46.5 Kg', '074 Cm', '2022-05-01', 2, 1),
(73, '45411269', 'Libbie', 'Fincham', 'FZKC535159YAXZXC06', '90.0 Kg', '365 Cm', '2022-04-18', 4, 1),
(74, '01416479', 'Aryn', 'Devas', 'KIGL070821TOWNKF15', '09.9 Kg', '862 Cm', '2022-02-12', 5, 1),
(75, '13413195', 'Horatius', 'Jackes', 'RFAD880367ITRKCD81', '38.8 Kg', '320 Cm', '2022-06-16', 1, 1),
(76, '44416088', 'Jdavie', 'Born', 'ZHCC347879GQTAQX17', '48.9 Kg', '433 Cm', '2022-03-30', 5, 1),
(77, '69415045', 'Dyanne', 'Willson', 'FOOA311977LXTUZI88', '23.5 Kg', '088 Cm', '2022-05-05', 4, 1),
(78, '48412086', 'Esme', 'Jepensen', 'NMLE569287UIGIJT92', '36.6 Kg', '035 Cm', '2022-06-30', 4, 1),
(79, '11416791', 'Tressa', 'Haws', 'PTWU665743DRZDIA99', '67.1 Kg', '484 Cm', '2022-07-20', 4, 1),
(80, '32410319', 'Marianne', 'Scotchford', 'AZHT911384IJOHNX77', '23.7 Kg', '439 Cm', '2022-05-29', 5, 1),
(81, '41415560', 'Devin', 'Assard', 'WJIK580907EWPYYD68', '66.8 Kg', '460 Cm', '2022-10-05', 3, 1),
(82, '28410501', 'Lyndsey', 'Kettridge', 'MGTW971643OIEXEI37', '25.8 Kg', '531 Cm', '2022-04-03', 7, 1),
(83, '35413703', 'Ilise', 'Dohrmann', 'IKIB665310DUPJVH34', '59.7 Kg', '107 Cm', '2022-01-01', 7, 1),
(84, '31413556', 'Giorgio', 'Bebb', 'NEPO045030NGRZXG56', '27.2 Kg', '259 Cm', '2022-03-24', 2, 1),
(85, '42412229', 'Nanette', 'Atkinson', 'EEVP778425WZCWRM45', '30.6 Kg', '608 Cm', '2022-10-03', 1, 1),
(86, '69416302', 'Terese', 'Petracek', 'JWGZ830563UKEOVK00', '27.9 Kg', '416 Cm', '2022-05-30', 7, 1),
(87, '74419976', 'Noelani', 'Treherne', 'OKRA714039QGTUWJ07', '95.5 Kg', '150 Cm', '2022-10-13', 8, 1),
(88, '74415044', 'Madelina', 'Rawlcliffe', 'UUSS563234JBVHGZ01', '24.3 Kg', '381 Cm', '2022-03-27', 1, 1),
(89, '23413070', 'Martie', 'Duignan', 'IRVS562065BWFYUU41', '51.2 Kg', '347 Cm', '2022-08-21', 6, 1),
(90, '97416191', 'Karrah', 'Cropton', 'QMMK157938VYSOMZ92', '10.9 Kg', '957 Cm', '2022-03-07', 8, 1),
(91, '51411803', 'Mauricio', 'Paroni', 'QHAH190640RKXJER14', '68.4 Kg', '172 Cm', '2022-03-17', 3, 1),
(92, '18413790', 'Erena', 'Trinkwon', 'DFYT313068JWSEPX25', '79.7 Kg', '527 Cm', '2022-02-27', 4, 1),
(93, '41417232', 'Alick', 'Liddell', 'PLFO686742IBYBGY62', '06.4 Kg', '011 Cm', '2022-06-22', 2, 1),
(94, '56414663', 'Kinnie', 'Furnival', 'FOGZ121259UQMYHV35', '69.3 Kg', '973 Cm', '2022-01-02', 7, 1),
(95, '89415764', 'Berri', 'Bridgett', 'EFVU780004QWFIFT88', '95.5 Kg', '582 Cm', '2022-03-09', 3, 1),
(96, '72410915', 'Hollyanne', 'Rawlin', 'WTRG668849QEQHHA33', '51.6 Kg', '011 Cm', '2022-04-20', 2, 1),
(97, '69416622', 'Karlens', 'Scopyn', 'RVWA861394ZADGKN59', '25.7 Kg', '259 Cm', '2022-07-09', 2, 1),
(98, '68419330', 'Osmund', 'Suart', 'NHLF529088LDKFBR03', '23.7 Kg', '471 Cm', '2022-05-08', 7, 1),
(99, '68410506', 'Fredrika', 'Haugh', 'JBNV628582URLEOB63', '73.2 Kg', '015 Cm', '2021-12-16', 2, 1),
(100, '20418801', 'Arley', 'Hanretty', 'YSJC845342GOHXBT20', '64.4 Kg', '691 Cm', '2022-05-18', 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `id` bigint(20) NOT NULL,
  `fecha` datetime NOT NULL,
  `alumno` int(11) NOT NULL,
  `asistio` tinyint(4) NOT NULL DEFAULT 0,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

CREATE TABLE `nota` (
  `id` bigint(20) NOT NULL,
  `nota` blob NOT NULL,
  `id_cita` bigint(20) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_sangre`
--

CREATE TABLE `tipos_sangre` (
  `id` int(11) NOT NULL,
  `nombre` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipos_sangre`
--

INSERT INTO `tipos_sangre` (`id`, `nombre`) VALUES
(2, 'A negativo (A-)'),
(1, 'A positivo (A+)'),
(6, 'AB negativo (AB-)'),
(5, 'AB positivo (AB+)'),
(4, 'B negativo (B-)'),
(3, 'B positivo (B+)'),
(8, 'O negativo (O-)'),
(7, 'O positivo (O+)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(25) NOT NULL,
  `pass` varchar(64) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `puede_entrar` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `pass`, `nombre`, `puede_entrar`) VALUES
(1, 'prueba1', '$2y$10$jKjTDZi3/ZOGD7a74tOT6O4f5Bxe8DZDPsS5w/T7AXV514t7Nod.6', 'usuario prueba je', 1),
(4, 'prueba2', '$2y$10$faFBJgsD3ivw/WbhwtYWReTiBFReKnMIdyi.xm0S3ENvyDfQa4yzW', 'usuario prueba je', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alumnos_tipo_sangre_tipos_sangre_id` (`tipo_sangre`),
  ADD KEY `alumno_psicologa` (`id_psicologa`),
  ADD KEY `id_psicologa` (`id_psicologa`);

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `consultas_alumno_alumnos_id` (`alumno`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nota_id_cita_consultas_id` (`id_cita`),
  ADD KEY `nota_id_usuario_usuarios_id` (`id_usuario`);

--
-- Indices de la tabla `tipos_sangre`
--
ALTER TABLE `tipos_sangre`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nota`
--
ALTER TABLE `nota`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipos_sangre`
--
ALTER TABLE `tipos_sangre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumno_psicologa` FOREIGN KEY (`id_psicologa`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `alumnos_tipo_sangre_tipos_sangre_id` FOREIGN KEY (`tipo_sangre`) REFERENCES `tipos_sangre` (`id`);

--
-- Filtros para la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD CONSTRAINT `consulta_creador` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `consultas_alumno_alumnos_id` FOREIGN KEY (`alumno`) REFERENCES `alumnos` (`id`);

--
-- Filtros para la tabla `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `nota_id_cita_consultas_id` FOREIGN KEY (`id_cita`) REFERENCES `consultas` (`id`),
  ADD CONSTRAINT `nota_id_usuario_usuarios_id` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
