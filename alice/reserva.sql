CREATE DATABASE reserva;
use reserva;



CREATE TABLE reserva (
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR (30),
email VARCHAR (35),
senha VARCHAR (20),
criado_em TIMESTAMP default CURRENT_TIMESTAMP
);
