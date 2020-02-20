#Insertar forma corta(No se especifica nombre de las columnas
CREATE TABLE trainers(
     id INT AUTO_INCREMENT,
     name VARCHAR(32) NOT NULL,
     level int NOT NULL,
     gym_id int NOT NULL,
     FOREIGN KEY(gym_id) REFERENCES gym(id),
     PRIMARY KEY (id));

CREATE TABLE type(
     id INT AUTO_INCREMENT,
     name VARCHAR(32) NOT NULL,
     PRIMARY KEY (id));


INSERT INTO trainers VALUES (
DEFAULT, "Ash Ketchum", 7 ,"Paleta");

INSERT INTO trainers VALUES (
DEFAULT, "Misty", 4 ,"Estrella");

INSERT INTO trainers VALUES (
DEFAULT, "Brock", 10 ,"Roca");


#Insertar forma larga(No se especifica nombre de las columnas


INSERT INTO trainers (id, name, level, gym) VALUES (
DEFAULT, "Serena", 4,"Diamante");

INSERT INTO trainers (id, name, level, gym) VALUES (
DEFAULT, "Oak", 9,"Escuela");


