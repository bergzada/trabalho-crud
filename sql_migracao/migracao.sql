CREATE DATABASE escola;

CREATE TABLE aluno (
    id INT NOT NULL AUTO_INCREMENT,
    cpf VARCHAR(15) UNIQUE,
    nome VARCHAR(255),
    email VARCHAR(255),
    senha VARCHAR(255),
    endereco VARCHAR(255),
    cidade VARCHAR(255),
    estado VARCHAR(255),
    telefone VARCHAR(11),
    PRIMARY KEY (id)
);

CREATE TABLE administrador (
    usuario VARCHAR(255),
    senha VARCHAR(30)
);

INSERT INTO
    administrador (usuario, senha)
VALUES
    ("admin", "admin");
