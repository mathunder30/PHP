create DATABASE prontuario_medico;

USE prontuario_medico;

CREATE TABLE dados_pacientes (
id int auto_increment primary key,
nome VARCHAR (100),
data_de_nascimento timestamp default current_timestamp,
idade int,
genero varchar(10),
cpf varchar(20),
telefone varchar(15),
endereco varchar(100)
);

CREATE TABLE medicamento(
    id int auto_increment primary key,
    dados_pacientes_id int,
    nome_medicamento VARCHAR(255) not null,
    dosagem VARCHAR(255) not null,
    frequencia varchar (255) not null,
    data_inicio DATE,
    data_fim DATE,
    foreign key (dados_pacientes_id) REFERENCES dados_pacientes(id)
);