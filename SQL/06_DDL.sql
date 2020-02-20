#Agregar una llave foranea

ALTER TABLE pokemons
ADD FOREIGN KEY(trainers_id)
REFERENCES trainers(id);

#Modificar Tabla (RENOMBRAR COLUMNA)

ALTER TABLE trainers
CHANGE gym gym_id INT NOT NULL;

#Crear tabla 

CREATE TABLE gym (
id INT AUTO_INCREMENT,
name VARCHAR(32) NOT NULL,
PRIMARY KEY(id)
);

INSERT INTO gym VALUES(
DEFAULT, "Ciudad paleta");

INSERT INTO gym VALUES(
DEFAULT, "Ciudad Celeste");

INSERT INTO gym VALUES(
DEFAULT, "Ciudad Fucsia");

INSERT INTO gym VALUES(
DEFAULT, "Ciudad Azulona");

INSERT INTO gym VALUES(
DEFAULT, "Ciudad Olivo");

ALTER TABLE trainers
ADD FOREIGN KEY(gym_id)
REFERENCES gym(id);
