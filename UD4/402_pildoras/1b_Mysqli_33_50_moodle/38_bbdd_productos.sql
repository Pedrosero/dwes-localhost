
CREATE TABLE IF NOT EXISTS `dwes`.`productos` (`codigoarticulo` varchar(4), `seccion` varchar(18), `nombrearticulo` varchar(50), `precio` varchar(8), `fecha` varchar(10), `importado` varchar(9), `paisdeorigen` varchar(9), `foto` varchar(10)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
INSERT INTO `dwes`.`productos` (`codigoarticulo`, `seccion`, `nombrearticulo`, `precio`, `fecha`, `importado`, `paisdeorigen`, `foto`) 
VALUES
('AR50', 'ALTA COSTURA', 'TRAJE CABALLERO', '1.284,58', '11/03/2002', 'VERDADERO', 'ITALIA', NULL),
 ('AR51', 'DEPORTES DE RIESGO', 'RAQUETA TENIS', '1.093,47', '20/03/2000', 'VERDADERO', 'USA', NULL),
 ('AR52', 'DEPORTES DE RIESGO', 'MANCUERNAS', '1.060,00', '13/09/2000', 'VERDADERO', 'USA', NULL),
 ('AR53', 'ALTA COSTURA', 'SERRUCHO', '1.030,20', '23/03/2001', 'VERDADERO', 'FRANCIA', NULL),
 ('AR54', 'ALTA COSTURA', 'PANTALÓN SEÑORA', '1.174,23', '10/01/2000', 'VERDADERO', 'MARRUECOS', NULL),
 ('AR55', 'ALTA COSTURA', 'CAMISA CABALLERO', '1.067,13', '11/08/2002', 'FALSO', 'ESPAÑA', NULL),
 ('AR56', 'DEPORTES DE RIESGO', 'PISTOLA OLÍMPICA', '1.046,73', '02/02/2001', 'VERDADERO', 'SUECIA', NULL),
 ('AR57', 'ALTA COSTURA', 'BLUSA SRA.', '1.101,06', '18/03/2000', 'VERDADERO', 'CHINA', NULL),
 ('AR58', 'ALTA COSTURA', 'CAZADORA PIEL', '1.522,69', '10/07/2001', 'VERDADERO', 'ITALIA', NULL),
 ('AR59', 'DEPORTES DE RIESGO', 'BALÓN RUGBY', '1.111,64', '11/11/2000', 'VERDADERO', 'USA', NULL),
 ('AR60', 'DEPORTES DE RIESGO', 'BALÓN BALONCESTO', '1.075,27', '25/06/2001', 'VERDADERO', 'JAPÓN', NULL),
 ('AR61', 'ALTA COSTURA', 'ABRIGO CABALLERO', '1.500,00', '05/04/2002', 'VERDADERO', 'ITALIA', NULL),
 ('AR62', 'DEPORTES DE RIESGO', 'BALÓN FÚTBOL', '1.043,91', '04/07/2002', 'FALSO', 'ESPAÑA', NULL),
 ('AR63', 'ALTA COSTURA', 'ABRIGO SRA', '1.360,07', '03/05/2001', 'VERDADERO', 'MARRUECOS', NULL),
 ('AR64', 'DEPORTES DE RIESGO', 'CRONÓMETRO', '1.439,18', '03/01/2002', 'VERDADERO', 'USA', NULL),
 ('AR65', 'ALTA COSTURA', 'CINTURÓN DE PIEL', '1.004,33', '12/05/2002', 'FALSO', 'ESPAÑA', NULL),
 ('AR66', 'DEPORTES DE RIESGO', 'CAÑA DE PESCA', '1.270,00', '14/02/2000', 'VERDADERO', 'USA', NULL),
 ('AR67', 'DEPORTES DE RIESGO', 'BOTA ALPINISMO', '1.144,00', '05/05/2002', 'FALSO', 'ESPAÑA', NULL),
 ('AR68', 'DEPORTES DE RIESGO', 'PALAS DE PING PONG', '1.021,60', '02/02/2002', 'FALSO', 'ESPAÑA', NULL);