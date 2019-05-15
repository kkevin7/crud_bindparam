create database colegio;-
use colegio;

create table estudiantes(
id_estudiante int primary key not null auto_increment,
nombre varchar(64) not null,
apellidos varchar(64) not null,
fecha_nacimiento date not null,
sexo char(1) not null
);

INSERT INTO estudiantes VALUES (null, 'José', 'Gimenez', '1995-03-02', 'M');
INSERT INTO estudiantes VALUES (null, 'Walter', 'Ramirez', '1997-03-02', 'M');
INSERT INTO estudiantes VALUES (null, 'Maria', 'Estrada', '1998-03-02', 'M');
