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
	endereco_func varchar(200) not null,
    atividade_func boolean not null,
    foto_func varchar(250) not null
);

delete from func where cd_func = 1;
drop table func;


insert into func values(
	default, 1, '45652472802', 'João Vítor', 'Boaventura', '2005-01-06', 11957465296, 'jvpeniza@gmail.com', 
    '06012005', 'Masculino', 'Desenvolvedor Back-End', 'Av. Aprígio Bezerra da Silva, 1415, SP', 1, '002.png'
);

insert into func values(
    default, 1, '51521106633', 'Levi Ribeiro', 'Filho', '2005-03-09', 12991930172, 'dslevifilho@gmail.com', 
    '06012005', 'Masculino', 'Desenvolvedor Front-End', 'Rua Copacabana, 281, SP', 1, '003.png'
);

insert into func values( 
    default, 0, '34532157541', 'João Vicente', 'Soares', '2005-06-014', 11978456584, 'joaosoares@gmail.com', 
    '12345678', 'Masculino', 'Desenvolvedor  Mobile', 'Av. Francisco Morato, 205, SP', 0, '004.png'
);

insert into func values( 
    default, 0, '15247534531', 'Murilo Boaventura', 'Lemes', '2006-03-015', 11978484565, 'murilolemes@gmail.com', 
    '12345678', 'Masculino', 'Desenvolvedor ASP.NET', 'Av. Régis Bittencourt, 156, SP', 0, '005.png'
);

/* 

cd_func,
status_func,
cpf_func,
nome_func,
sobrenome_func,
data_nasc,
tel_func,
email_func,
senha_func,
sexo_func,
cargo_func,
endereco_func,
atividade_func,
foto_func

*/

select * from func;

CREATE USER 'dixtech'@'localhost' IDENTIFIED WITH mysql_native_password BY '12345678';
GRANT ALL PRIVILEGES ON dbDixPhp.* TO 'dixtech'@' localhost' WITH GRANT OPTION;
