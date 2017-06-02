CREATE DATABASE usuarios;
use usuarios;
CREATE TABLE usuarios(
    id int AUTO_INCREMENT not null PRIMARY KEY,
    nombre varchar(60),
    contrasenya varchar(60),
    email varchar(100),
    asunto varchar(200), 
    mensaje text,
    hora time,
    fecha date
);
