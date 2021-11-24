 create database dbDixPhp;

use dbDixPhp;

create table news_letter(
    news_email_id int primary key not null auto_increment,
    news_email varchar(100) not null unique

);

create table fale_conosco(
    fale_id int primary key not null auto_increment,
    fale_nome varchar(100) not null,
    fale_email varchar(200) not null,
    fale_tel int(13) not null,
    fale_msg varchar(700) not null

);

create table func(
	cd_func int primary key auto_increment,
    status_func boolean not null,
    cpf_func varchar(14) not null,
    nome_func varchar(200) not null,
    sobrenome_func varchar(200) not null,
    data_nasc date not null,
    tel_func varchar(17) not null,
    email_func varchar(200) not null,
    senha_func varchar(20) not null,
    sexo_func char(20) not null,
    cargo_func varchar(50) not null,
	endereco_func varchar(200) not null    
);

insert into func values(
	default, 1, '45652472802', 'João Vítor', 'Boaventura', '2005-01-06', 11957465296, 'jvpeniza@gmail.com', 
    '06012005', 'Masculino', 'Desenvolvedor Back-End', 'Taboão da Serra, 1415, SP'

);

select * from funcionario;

drop table funcionario;

CREATE USER 'dixtech'@'localhost' IDENTIFIED WITH mysql_native_password BY '12345678';
GRANT ALL PRIVILEGES ON dbDixPhp.* TO 'dixtech'@' localhost' WITH GRANT OPTION;
