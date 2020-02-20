# Acceder a base de datos en el navegador:
#localhost/phpmyadmin

# Acceder a base de datos en la linea de comandos:
# cd/xampp\mysql\bin

#Mostrar version de Mysql
SELECT version();

#Mostrar Base de Datos
SHOW databases;

#Como crear una Base de Datos
CREATE DATABASE adsi1804230;

#Conectar a una Base de Datos
CONNECT mysql;

#Usar Base de Datos
USE adsi1804230;

#Mostrar tablas
SHOW TABLES;

#Crear tabla
CREATE TABLE pokemons(
     id INT AUTO_INCREMENT,
     name VARCHAR(32) NOT NULL,
     type VARCHAR(32) NOT NULL,
     strength INT NOT NULL,
     stamina INT NOT NULL,
     speed INT NOT NULL,
     accuracy INT NOT NULL,
     PRIMARY KEY (id));


CREATE TABLE pokemons2(
     id INT AUTO_INCREMENT,
     name VARCHAR(32) NOT NULL,
     type VARCHAR(32) NOT NULL,
     strength INT NOT NULL,
     stamina INT NOT NULL,
     speed INT NOT NULL,
     accuracy INT NOT NULL,
     trainers_id int NOT NULL,
     PRIMARY KEY (id));




	ALTER TABLE pokemons
	DROP COLUMN trainers_id;
	
	ALTER TABLE pokemons
	ADD COLUMN trainers_id int NOT null,
	AFTER accuracy;
#Descripcion de la tabla
DESCRIBE pokemons;

#Insertar Registro
INSERT INTO pokemons VALUES (DEFAULT,'pikachu','Electrico',90,80,96,70);

INSERT INTO pokemons VALUES (DEFAULT,'charmander','fuego',95,70,80,82);

INSERT INTO pokemons VALUES (DEFAULT,'bulbasaur','planta',80,88,70,75);

INSERT INTO pokemons VALUES (DEFAULT,'squirtle','agua',70,90,75,90);

INSERT INTO pokemons VALUES (DEFAULT,'snorlax','normal',180,320,50,180);

INSERT INTO pokemons VALUES (DEFAULT,'vaporeon','agua',180,260,90,180);

INSERT INTO pokemons VALUES (DEFAULT,'lapras','agua',1111,255,100,180);

INSERT INTO pokemons VALUES (DEFAULT,'blastoip','agua',724,150,70,222);

INSERT INTO pokemons VALUES (DEFAULT,'golem','roca',500,100,80,150);

INSERT INTO pokemons VALUES (DEFAULT,'dragonite','dragon',900,250,120,182);

INSERT INTO pokemons VALUES (DEFAULT,'Exsecutor','planta',596,190,90,232);

INSERT INTO pokemons VALUES (DEFAULT,'omastar','roca',1500,140,112,202);

INSERT INTO pokemons VALUES (DEFAULT,'mulk','veneno',1070,210,112,180);

INSERT INTO pokemons VALUES (DEFAULT,'onix','roca',662,70,80,90);

INSERT INTO pokemons VALUES (DEFAULT,'poLiwag','agua',815,80,70,122);

INSERT INTO pokemons VALUES (DEFAULT,'monkey','pelea',563,80,70,122);

INSERT INTO pokemons VALUES (DEFAULT,'magnamite','electrico',750,50,40,128);

INSERT INTO pokemons VALUES (DEFAULT,'pidgey','normal',818,80,95,90);

INSERT INTO pokemons VALUES (DEFAULT,'gastiny', 'fantasma',750,60,60,82);

INSERT INTO pokemons VALUES (DEFAULT,'rattata','normal',810,60,65,92);

#Crear copia de seguridad (Backup) de la BD:
$ mysqldump -u root adsi1804230 > C:\Users\EQUIPO\Desktop\Yuly\adsi-1804230\SQL\backup.sql

#Recuperar base de datos
mysql -u root adsi1804230 < C:\Users\EQUIPO\Desktop\Yuly\adsi-1804230\SQL\backup.sql

#Inserta datos de una tabla a otra

INSERT INTO pokemons_bk SELECT * FROM pokemons;

