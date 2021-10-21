CREATE DATABASE empresa;

CREATE TABLE empleados(
    IdEmpleado tinyint UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    DNI char(9) NOT NULL UNIQUE,
    Nombre varchar(70) NOT NULL,
    Correo varchar(100) NULL,
    Telefono char(9) NOT NULL
);