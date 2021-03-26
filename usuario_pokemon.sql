CREATE DATABASE usuario_pokemon;

CREATE TABLE usuario(
	codigo INT UNSIGNED AUTO_INCREMENT,
	nombre VARCHAR(29),
	apellidos  VARCHAR(32),
	cuenta VARCHAR(37),
	password VARCHAR(19),
	PRIMARY KEY(codigo)
)ENGINE=InnoDB;

INSERT INTO usuario(nombre, apellidos, cuenta, password) VALUES();
SELECT codigo FROM usuario WHERE cuenta = AND password =;