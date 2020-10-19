-- crear una base de datos
CREATE DATABASE examen;
USE examen;
-- crear las tablas de la base de datos
create table academico (
    ci int primary key,
    nombre varchar(40) NOT null,
    fecha_nacimiento date NOT null,
    depto varchar(2) NOT null
);
create table usuario (ci int primary key, clave varchar(40) NOT null);
create table notas (
    ci int,
    materia varchar(40) NOT null,
    notas int(3) NOT null
);

-- llenar dato de la tabla academico
INSERT INTO `academico`(`ci`, `nombre`, `fecha_nacimiento`, `depto`) VALUES (2103547,'Maria Huanca','1985-02-21','08');
INSERT INTO `academico`(`ci`, `nombre`, `fecha_nacimiento`, `depto`) VALUES (2154789,'Gonzalo Gamarra','2002-01-10','04');
INSERT INTO `academico`(`ci`, `nombre`, `fecha_nacimiento`, `depto`) VALUES (1597894,'Arturo Linera','1996-11-30','03');
INSERT INTO `academico`(`ci`, `nombre`, `fecha_nacimiento`, `depto`) VALUES (3587456,'Silvia Mendoza','1997-06-04','02');
INSERT INTO `academico`(`ci`, `nombre`, `fecha_nacimiento`, `depto`) VALUES (9654120,'Alejandra Luz','1998-04-10','02');
INSERT INTO `academico`(`ci`, `nombre`, `fecha_nacimiento`, `depto`) VALUES (2030258,'Juan Pinto','1991-03-08','01');
INSERT INTO `academico`(`ci`, `nombre`, `fecha_nacimiento`, `depto`) VALUES (5685202,'Gimena Tola','1997-12-25','07');
INSERT INTO `academico`(`ci`, `nombre`, `fecha_nacimiento`, `depto`) VALUES (2010520,'Kevin Quispe','2004-03-06','09');
INSERT INTO `academico`(`ci`, `nombre`, `fecha_nacimiento`, `depto`) VALUES (3698398,'Marco Cordero','2001-08-15','01');
INSERT INTO `academico`(`ci`, `nombre`, `fecha_nacimiento`, `depto`) VALUES (5874512,'Miguel Aguirre','2001-02-20','02');
INSERT INTO `academico`(`ci`, `nombre`, `fecha_nacimiento`, `depto`) VALUES (6565984,'Yolanda Choque','1994-06-06','05');
INSERT INTO `academico`(`ci`, `nombre`, `fecha_nacimiento`, `depto`) VALUES (8562331,'Miguel Cuellar','1998-11-11','06');

--llenar datos de la tabla usuario
INSERT INTO `usuario`(`ci`, `clave`) VALUES (2103547,'123456');
INSERT INTO `usuario`(`ci`, `clave`) VALUES(2154789,'456987');
INSERT INTO `usuario`(`ci`, `clave`) VALUES (1597894,'753159');
INSERT INTO `usuario`(`ci`, `clave`) VALUES (3587456,'abc123');
INSERT INTO `usuario`(`ci`, `clave`) VALUES (9654120,'852abc');
INSERT INTO `usuario`(`ci`, `clave`) VALUES (2030258,'qazxsw');
INSERT INTO `usuario`(`ci`, `clave`) VALUES (5685202,'qwedssa');
INSERT INTO `usuario`(`ci`, `clave`) VALUES (2010520,'poijkl');
INSERT INTO `usuario`(`ci`, `clave`) VALUES (3698398,'753acb');
INSERT INTO `usuario`(`ci`, `clave`) VALUES (5874512,'000000');
INSERT INTO `usuario`(`ci`, `clave`) VALUES (6565984,'000111');
INSERT INTO `usuario`(`ci`, `clave`) VALUES (8562331,'222111');

--llenar datos de la tabla notas

INSERT INTO `notas`(`ci`, `materia`, `notas`) VALUES (2103547,'inf-111',52);
INSERT INTO `notas`(`ci`, `materia`, `notas`) VALUES (2154789,'inf-112',70);
INSERT INTO `notas`(`ci`, `materia`, `notas`) VALUES (2154789,'inf-121',70);
INSERT INTO `notas`(`ci`, `materia`, `notas`) VALUES (1597894,'inf-142',80);
INSERT INTO `notas`(`ci`, `materia`, `notas`) VALUES (1597894,'inf-141',20);
INSERT INTO `notas`(`ci`, `materia`, `notas`) VALUES (3587456,'inf-153',48);
INSERT INTO `notas`(`ci`, `materia`, `notas`) VALUES (9654120,'inf-163',51);
INSERT INTO `notas`(`ci`, `materia`, `notas`) VALUES (2030258,'inf-272',30);
INSERT INTO `notas`(`ci`, `materia`, `notas`) VALUES (2030258,'inf-271',80);
INSERT INTO `notas`(`ci`, `materia`, `notas`) VALUES (5685202,'inf-271',60);
INSERT INTO `notas`(`ci`, `materia`, `notas`) VALUES (2010520,'inf-391',61);
INSERT INTO `notas`(`ci`, `materia`, `notas`) VALUES (3698398,'inf-281',20);
INSERT INTO `notas`(`ci`, `materia`, `notas`) VALUES (3698398,'inf-282',49);
INSERT INTO `notas`(`ci`, `materia`, `notas`) VALUES (5874512,'inf-113',78);
INSERT INTO `notas`(`ci`, `materia`, `notas`) VALUES (5874512,'inf-112',53);
INSERT INTO `notas`(`ci`, `materia`, `notas`) VALUES (6565984,'inf-142',20);
INSERT INTO `notas`(`ci`, `materia`, `notas`) VALUES (8562331,'inf-111',10);
INSERT INTO `notas`(`ci`, `materia`, `notas`) VALUES (8562331,'inf-112',49);