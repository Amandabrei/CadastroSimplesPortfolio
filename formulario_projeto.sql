create database formulario_projeto;

use formulario_projeto;

create table usuarios(
	id int not null auto_increment,
    nome varchar(100),
    descricao varchar(500),
    data_projeto date,
    
    primary key (id)
);

show tables;

select * from usuarios;

