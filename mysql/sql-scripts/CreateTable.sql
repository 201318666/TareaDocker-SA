CREATE SCHEMA IF NOT EXISTS `tareadocker` DEFAULT CHARACTER SET utf8 ;
USE `tareadocker` ;

GRANT ALL PRIVILEGES ON tareadocker.* TO 'usuariobd'@'%';
FLUSH PRIVILEGES;


CREATE TABLE usuarios (
    nombre varchar(25),
    apellido varchar(25),
    departamento varchar(15)
);
