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

CREATE USER 'dixtech'@'localhost' IDENTIFIED WITH mysql_native_password BY '12345678';
GRANT ALL PRIVILEGES ON dbDixPhp.* TO 'dixtech'@' localhost' WITH GRANT OPTION;
