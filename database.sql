CREATE DATABASE Clinica;
USE Clinica;

CREATE TABLE Usuario(
  usrID INT(11) NOT NULL AUTO_INCREMENT,
  email VARCHAR(100) NOT NULL UNIQUE,
  nome VARCHAR(200) NOT NULL,
  password VARCHAR(100) NOT NULL,
  password_reset_token VARCHAR(100) DEFAULT NULL UNIQUE,
  auth_key VARCHAR(100) NOT NULL,
  tipo ENUM('USER','ADMIN') DEFAULT 'USER',
  numeroIdentificacao INT,
  contato VARCHAR(20),
  criado_em DATE NOT NULL,
  atualizado_em DATE NOT NULL,
  autenticado BIT(1),
  PRIMARY KEY(usrID)
);


CREATE TABLE Paciente(
  pacienteID INT(11) NOT NULL AUTO_INCREMENT,
  cpf VARCHAR(11) NOT NULL,
  cnh VARCHAR(11) DEFAULT NULL,
  identidade VARCHAR(20) NOT NULL,
  emissor VARCHAR(20) DEFAULT NULL,
  nascimento DATE NOT NULL,
  criado_em DATE NOT NULL,
  contato VARCHAR(20),
  PRIMARY KEY(pacienteID)
);
