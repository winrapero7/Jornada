create database if not exists `jornada`;

use `jornada`;

create table `usuarios`(
`idUsuario` smallint(5) not null auto_increment,
`nombre` varchar(50) not null,
`apPaterno` varchar(50) not null,
`apMaterno` varchar(50) not null,
`sexo` CHAR not null,
`email` varchar(50) not null,
`usuario` varchar(50) not null,
`pass` varchar(50) not null,
`tel` INT,
`tipoU` char not null DEFAULT 'e',
PRIMARY KEY (`idUsuario`)
);

create table `lugar`(
`idLugar` smallint not null auto_increment,
`nombre` varchar(30) not null,
`locacion` varchar(50) not null,
PRIMARY KEY (`idLugar`)
);

create table `plantel`(
`idPlantel` smallint not null auto_increment,
`nombre` varchar(50) not null,
`cuidad` varchar(50) not null,
`estado` varchar(50) not null,
PRIMARY KEY (`idPlantel`)
);

create table `sede`(
`idSede` smallint not null auto_increment,
`nombre` varchar(30) not null,
`noSede` smallint(3) not null,
`id_Plantel` smallint not null,
PRIMARY KEY (`idSede`),
foreign key (`id_Plantel`) references plantel (`idPlantel`)
);

create table `jornada`(
`idJornada` smallint not null auto_increment,
`noPartidos` smallint(3) not null,
`fechaInicio` date,
`fechaFin` date,
PRIMARY KEY (`idJornada`)
);

create table `diciplinas`(
`idDiciplina` smallint not null auto_increment,
`nombre` varchar(30) not null,
`idArea` smallint(3),
`noParticipantes` smallint(3),
PRIMARY KEY (`idDiciplina`)
);


create table `equipo`(
`idEquipo` smallint not null AUTO_INCREMENT,
`nombre` varchar(50) not null,
`integrantes` varchar(60),
`id_diciplina` smallint,
`id_plantel` smallint,
PRIMARY KEY (`idEquipo`),
FOREIGN KEY (`id_diciplina`) REFERENCES diciplinas(`idDiciplina`),
FOREIGN KEY (`id_plantel`) REFERENCES plantel(`idPlantel`)
);

create TABLE `participante`(
`idParticipante` smallint not null AUTO_INCREMENT,
`nombre` varchar(50) not null,
`aPaterno` varchar(50) not null,
`aMaterno` varchar(50) not null,
`email` varchar(50) not null,
`usuario` varchar(50) not null,
`pass` varchar(50) not null,
`id_plantel` smallint,
`id_equipo` smallint,
PRIMARY KEY (`idParticipante`),
foreign KEY (`id_plantel`) REFERENCES plantel(`idPlantel`),
FOREIGN KEY (`id_equipo`) references equipo(`idEquipo`)
);

create table `partidos`(
`idPartido` smallint not null auto_increment,
`local` smallint not null,
`visita` smallint not null,
`puntosL` smallint(3) not null,
`puntosV` smallint(3) not null,
`id_lugar` smallint not null,
`id_jornada` smallint not null,
PRIMARY KEY (`idPartido`),
FOREIGN KEY (`local`) REFERENCES equipo(`idEquipo`),
FOREIGN KEY (`visita`) REFERENCES equipo(`idEquipo`),
FOREIGN KEY (`id_lugar`) REFERENCES lugar(`idLugar`),
foreign key (`id_jornada`) references jornada(`idJornada`)
);



