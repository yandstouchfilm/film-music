drop database if exists ystouch_db;
create database ystouch_db;
use ystouch_db;

create table user (
	iduser int(3) not null auto_increment,
	nom varchar (50),
	prenom varchar (50),
	email varchar (50),
	message varchar(180),
	primary key (iduser)
); 
