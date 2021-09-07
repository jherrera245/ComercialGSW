-- Creando base de datos
CREATE DATABASE bd_comercial;

-- Usando base de datos
USE bd_comercial;

-- Creando tabla

CREATE TABLE cliente(
    id_cliente INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(75) NOT NULL,
    apellido VARCHAR(75) NOT NULL,
    direccion VARCHAR(100),
    telefono VARCHAR(9)
);