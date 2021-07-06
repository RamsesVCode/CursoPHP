CREATE DATABASE NOTAS_MASTER

CREATE TABLE USUARIOS(
ID int(255) PRIMARY KEY AUTO_INCREMENT,
NOMBRE VARCHAR(100) NOT NULL,
APELLIDOS VARCHAR(100) NOT NULL,
EMAIL VARCHAR(255) UNIQUE NOT NULL,
PASSWORD VARCHAR(255) NOT NULL,
FECHA DATE NOT NULL
)ENGINE=InnoDB;
CREATE TABLE NOTAS(
ID INT(255) PRIMARY KEY AUTO_INCREMENT,
USUARIO_ID INT(255) REFERENCES USUARIOS(ID),
TITULO VARCHAR(255) NOT NULL,
DESCRIPCION MEDIUMTEXT,
FECHA DATE NOT NULL
)ENGINE=InnoDB;