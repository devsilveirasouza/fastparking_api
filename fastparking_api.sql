CREATE DATABASE IF NOT EXISTS `fastparking`; 

USE fastparking;

CREATE TABLE preco (
    id INT PRIMARY KEY AUTO_INCREMENT,
    primeira_hora DECIMAL(10,2) NOT NULL,
    demais_horas DECIMAL(10,2) NOT NULLid
);

CREATE TABLE registros (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome_cliente VARCHAR(255) NOT NULL,
    placa_carro VARCHAR(10) NOT NULL,
    data_hora_entrada DATETIME NOT NULL,
    data_hora_saida DATETIME,
    valor_total DECIMAL(10,2),
    preco_id INT
        FOREIGN KEY (preco_id) REFERENCES preco(id)
    );

    TRUNCATE registro;

    DELETE FROM preco WHERE ID <> 0;

    SELECT * FROM registro;

    SELECT * FROM preco;