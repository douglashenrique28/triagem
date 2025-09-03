CREATE DATABASE triagem;
USE triagem;

CREATE TABLE pacientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR (150) NOT NULL,
    idade INT NOT NULL,
    cpf VARCHAR (20) NOT NULL,
    sexo VARCHAR (10) NOT NULL,
    data_de_nascimento DATE, 
    telefone VARCHAR (20) NOT NULL,
    endereco VARCHAR (200) NOT NULL,
    sintomas VARCHAR (30) NOT NULL,
    inicio_dos_sintomas DATE,
    doencas_pre_existentes VARCHAR (30) NOT NULL,
    uso_de_medicamentos VARCHAR (20) NOT NULL,
    alergias VARCHAR (20) NOT NULL,
    pressao_arterial VARCHAR (10) NOT NULL,
    temperatura VARCHAR (10) NOT NULL,
    frequencia_cardiaca VARCHAR (10) NOT NULL,
    saturacao VARCHAR (10) NOT NULL,

    observacao TEXT NOT NULL

);
