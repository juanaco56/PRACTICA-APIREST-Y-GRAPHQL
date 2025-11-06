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

USE atp;

INSERT INTO tenistas (nombre, apellidos, edad, puntos_atp, ranking_atp, nacionalidad) VALUES
('Roger', 'Federer', 44, 8370, 1, 'Suiza'),
('Jannik', 'Sinner', 24, 11500, 1, 'Italia'),
('Carlos', 'Alcaraz', 22, 11250, 2, 'España'),
('Alexander', 'Zverev', 28, 5560, 3, 'Alemania'),
('Taylor', 'Fritz', 28, 4735, 4, 'Estados Unidos'),
('Novak', 'Djokovic', 38, 4580, 5, 'Serbia'),
('Ben', 'Shelton', 23, 3970, 6, 'Estados Unidos'),
('Alex', 'de Minaur', 26, 3935, 7, 'Australia'),
('Felix', 'Auger-Aliassime', 25, 3845, 8, 'Canadá'),
('Lorenzo', 'Musetti', 23, 3685, 9, 'Italia'),
('Casper', 'Ruud', 26, 3235, 10, 'Noruega'),
('Jack', 'Draper', 23, 3090, 11, 'Reino Unido'),
('Daniil', 'Medvedev', 29, 2960, 12, 'Rusia'),
('Alexander', 'Bublik', 28, 2870, 13, 'Kazajistán'),
('Alejandro', 'Davidovich Fokina', 26, 2635, 14, 'España'),
('Holger', 'Rune', 22, 2590, 15, 'Dinamarca'),
('Andrey', 'Rublev', 28, 2560, 16, 'Rusia'),
('Jiri', 'Lehecka', 23, 2415, 17, 'República Checa'),
('Karen', 'Khachanov', 29, 2320, 18, 'Rusia'),
('Jakub', 'Mensik', 20, 2180, 19, 'República Checa'),
('Tommy', 'Paul', 28, 2100, 20, 'Estados Unidos');