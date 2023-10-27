--tablas necesarias para el video 36 en adelante
USE dwes;
CREATE TABLE `datospersonales` (
  `nif` varchar(10) DEFAULT NULL,
  `nombre` varchar(15) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `edad` int(2) DEFAULT NULL,
   PRIMARY KEY (`nif`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `dwes`.`datospersonales` VALUES 
('123','Pepe','Torres','21'),
('456','Cristina','Marquez','35'),
('789','Juan','Diaz','42'),
('110','Carmen','Pino','29');