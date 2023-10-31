
CREATE TABLE IF NOT EXISTS `dwes`.`clientes` (`codcliente` varchar(4), `nombre` varchar(50), `correo` varchar(50), `telefono` int(9), `localidad` varchar(50)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
INSERT INTO `dwes`.`clientes` (`codcliente`, `nombre`, `correo`, `telefono`, `localidad`) 
VALUES
('0001', 'Paco', 'paco@hotmail.es', '666666666', 'Córdoba'),
 ('0002', 'Ramón', 'ramon@gmail.com', '777777777', 'Madrid'),
 ('0003', 'Carlos', 'carlos@hotmail.es', '612345689', 'Bilbao'),
  ('0004', 'Maria', 'maria@hotmail.com', '697812350', 'Valencia'),