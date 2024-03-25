
CREATE DATABASE IF NOT EXISTS `fastparking`; 

USE fastparking;

CREATE TABLE preco (
    id INT PRIMARY KEY AUTO_INCREMENT,
    primeira_hora DECIMAL(10,2) NOT NULL,
    demais_horas DECIMAL(10,2) NOT NULL
);

CREATE TABLE cliente (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nomeCliente VARCHAR(255) NOT NULL,
    placaCarro VARCHAR(10) NOT NULL,
    dataHoraEntrada DATETIME NOT NULL,
    dataHoraSaida DATETIME,
    valorTotal DECIMAL(10,2),
    precoId INT,
    FOREIGN KEY (precoId) REFERENCES preco(id)
    );

    TRUNCATE registro;

    DELETE FROM preco WHERE ID <> 0;

    SELECT * FROM registro;

    SELECT * FROM preco;