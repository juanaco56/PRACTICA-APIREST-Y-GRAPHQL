create database atp;

use atp;

create table tenistas(
    id int primary key auto_increment not null,
    nombre varchar(200) not null,
    apellidos varchar(200),
    edad int not null,
    puntos_atp int not null,
    ranking_atp int not null,
    nacionalidad varchar(200)
);