CREATE DATABASE IF NOT EXISTS JNMOURA;
USE JNMOURA;

CREATE TABLE IF NOT EXISTS Agenda(
ID SMALLINT AUTO_INCREMENT PRIMARY KEY,
Nome VARCHAR(60),
Telefone CHAR(20),
Endereco VARCHAR(100)
);