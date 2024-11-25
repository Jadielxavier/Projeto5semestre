CREATE database DPOS;

use DPOS;

Create table Agenda (
id_Agenda int auto_increment primary key,
Nome varchar(150) not null,
Cpf varchar(13) unique,
Telefone varchar(15),
Tipo_Servico varchar(100),
Data_Horario datetime
);


drop table Agenda;

create table CadastroCliente(
id int auto_increment primary key,
nome varchar(200) not null,
cpf varchar (15) not null,
email varchar (100) not null,
senha varchar (200) not null
);


select * from CadastroCliente;

insert into CadastroCliente (nome,cpf,email,senha) 
values ('Jose','44877874834','jadiel.155@hotmail.com','123456');
select * from LoginCadastro;

select * from login;

/*drop table login*/

create table login(
id_Login int auto_increment primary key,
constraint Fk_CadastroCliente  foreign key (id_login) references CadastroCliente (id),
constraint Fk_Agenda  foreign key (id_login) references Agenda (id_Agenda)
);




create table LoginADM(
id int auto_increment primary key,
usuario varchar(200) not null,
senha varchar(100) not null
);

insert into Login (Nome,Cpf,email,senha) 
values ('Jose','44877874834','jadiel.155@hotmail.com','123456');
select * from Login;

select * from Agenda;
drop table Agenda;
insert into Agenda (Nome,Cpf,E_mail,Telefone,Tipo_Servico,Data_Horario) 
values ('Jose','44877874834','Jose.santos@hotmail.com','11969339028','Degrade', '2023-10-18 13:08');

SELECT * FROM Agenda WHERE id_Agenda;

SELECT DATE_FORMAT('Data_Horario','%d/%m/%Y h:i') FROM Agenda


/*select count(*) from Agenda where Data_Horario = '2023-10-24 23:12';

DELETE FROM Agenda WHERE id_Agenda = 1;

select* from Agenda*/
