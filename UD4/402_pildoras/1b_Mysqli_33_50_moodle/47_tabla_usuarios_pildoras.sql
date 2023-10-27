CREATE TABLE `usuarios_pildoras` (
  `usuario` varchar(50) NOT NULL,
  `contra` text DEFAULT NULL,
  `tfno` text DEFAULT NULL,
  `direccion` text DEFAULT NULL,
  PRIMARY KEY (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


 INSERT INTO `dwes`.`usuarios_pildoras`
VALUES
("Paco", "1234", "955111323", "P Vergara"),
("Maria", "1234", "956444333", "Gran Vía"),
("Ana", "1234", "988555777", "Serrano");