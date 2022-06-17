create table seguimiento
(
notramite integer,
usuario varchar(10),
flujo varchar(3),
proceso varchar(3),
fechainicio datetime,
fechafin datetime
)
insert into seguimiento values(100,'Moises','F1','P1','2021/10/13 10:00','2021/10/13 12:00');
insert into seguimiento values(100,'Moises','F1','P2','2021/10/13 12:00',null);
insert into seguimiento values(101,'German','F1','P1','2021/10/13 10:00','2021/10/13 12:00');
insert into seguimiento values(101,'German','F1','P2','2021/10/13 12:00',null);
insert into seguimiento values(102,'Melany','F2','P1','2021/10/13 08:00','2021/10/13 10:00');


create table proceso
(
flujo varchar(3),
cproceso varchar(3),
csiguiente varchar(3),
tipo varchar(3),
rol varchar(3),
pantalla varchar(25)
)
insert into proceso values('F1','p1','p2','i','c','index.inc.php');
insert into proceso values('F1','p2',NULL,'c','c','controlindex.php');
insert into proceso values('F1','p3','p5','p','c','peticion.inc.php');
insert into proceso values('F1','p4','p7','p','c','ordenar.inc.php');
insert into proceso values('F1','p5','p6','p','c','recepcion.inc.php');


create usuarios
(
usuario varchar(10),
contrasenia varchar(10),
rol varchar(10)
)
insert into usuarios values('Guisel','121','v');
insert into usuarios values('German','122','c');
insert into usuarios values('Pablo','123','c');
insert into usuarios values('Melany','124','c');