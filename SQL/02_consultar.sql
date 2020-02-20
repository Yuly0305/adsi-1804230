#consultar todos los registros
SELECT * FROM pokemons;

#Consultar un solo campo
SELECT name FROM pokemons;

#Consultar diferentes campos
SELECT name,speed FROM pokemons;

#Consultar valores distintos
SELECT DISTINCT type FROM pokemons;

#Consultar registro como criterio especifico
SELECT name ,strength FROM pokemons WHERE strength > 500;

SELECT *  FROM pokemons WHERE strength >  1000;

SELECT * FROM pokemons WHERE type = 'agua' OR type = 'electrico';

SELECT * FROM pokemons WHERE type = 'agua' AND speed > 80 ;

SELECT * FROM pokemons WHERE stamina BETWEEN 200 AND 300;

#Ordenar acendente
SELECT * FROM pokemons ORDER BY strength;
SELECT * FROM pokemons ORDER BY strength ASC;

#Ordenar descendente
SELECT * FROM pokemons ORDER BY strength DESC;

SELECT * FROM pokemons WHERE speed > 100 ORDER BY speed DESC;

#Limit y en que fila comienza
SELECT * FROM pokemons LIMIT 10;

SELECT * FROM pokemons LIMIT 5 OFFSET 10;

SELECT * FROM pokemons LIMIT 10, 5;

#Buscar
#Mostrar resultado que inician con 'A'
SELECT * 
FROM pokemons 
WHERE type
LIKE "A%";
#Mostrar resultado que terminen con 'A'
SELECT * 
FROM pokemons 
WHERE type
LIKE "%O";
#Mostrar resultado que contengan con '%ctr%'
SELECT * 
FROM pokemons 
WHERE name
LIKE "%ma%";
#Mostrar resultado que cumpla con '%pikachu%'
SELECT * 
FROM pokemons 
WHERE name
LIKE "p_k_ch_";
#No Mostrar resultado que tengan con '%ctr%'
SELECT * 
FROM pokemons 
WHERE type
NOT LIKE "%ma%";
#Mostrar resultados con varios valores
SELECT *
FROM pokemons
WHERE type
IN('Fuego', 'Electrico'); 
#Mostrar resultados dentro de un rango
SELECT *
FROM pokemons
WHERE speed
BETWEEN 90
AND 100;


#Alias

SELECT t.name AS nombre_entrenador , 
p.name AS nombre_pokemons,
p.type  AS tipo_pokemons
FROM pokemons AS p, trainers AS t
where t.id = p.trainers_id
ORDER BY t.name ASC;


SELECT t.name AS nombre_entrenador , 
p.name AS nombre_pokemons,
p.type  AS tipo_pokemons
FROM pokemons AS p, trainers AS t
where t.id = p.trainers_id 
AND p.type = "Agua" OR p.type = "Fuego"
ORDER BY t.name ASC;


SELECT COUNT(p.id) AS Numbers_pokemons
FROM pokemons AS p, trainers AS t
WHERE t.id= p.trainers_id and t.id= 1 ;

SELECT t.name AS NOMBRE , COUNT(p.id) AS Numbers_pokemons 
FROM pokemons AS p, trainers AS t
WHERE t.id= p.trainers_id and t.id >=1 
GROUP BY t.name;

# Inner Join
# name_trainer | name_gym | name_pokemon


SELECT t.name AS NOMBRE_ENTRENADOR, g.name AS NOMBRE_GYM, p.name  AS NOMBRE_POKEMONS
FROM pokemons AS p
INNER JOIN trainers AS t 
ON p.trainers_id = t.id
INNER JOIN gym AS g
ON t.gym_id = g.id
ORDER BY t.id;

# Left Join
SELECT t.name AS NOMBRE_ENTRENADOR, COUNT(p.id) AS CANTIDAD_POKEMONS, g.name AS NOMBRE_GYM
FROM trainers AS t
LEFT JOIN gym AS g
ON t.gym_id = g.id 
LEFT JOIN pokemons AS p
ON p.trainers_id = t.id
GROUP BY t.id;

# Rigth Join

SELECT t.name AS NOMBRE_ENTRENADOR, p.name AS NOMBRE_POKEMONS, g.name AS NOMBRE_GYM
FROM trainers AS t
RIGHT JOIN gym AS g
ON t.gym_id = g.id AND t.id=1
RIGHT JOIN pokemons AS p 
ON p.trainers_id = t.id
ORDER BY t.name;

# Join

SELECT t.name AS NOMBRE_ENTRENADOR, p.name AS NOMBRE_POKEMONS, g.name AS NOMBRE_GYM
FROM trainers AS t
JOIN gym AS g
ON t.gym_id = g.id AND t.id=1
JOIN pokemons AS p 
ON p.trainers_id = t.id
ORDER BY t.name;

# Con
# Union

SELECT name FROM trainers
Union
SELECT name FROM gym
Union
SELECT name FROM pokemons;

#vistas (Viwes)

CREATE VIEW num_pokemons AS 
SELECT t.name AS NOMBRE_ENTRENADOR, COUNT(p.id) AS CANTIDAD_POKEMONS, g.name AS NOMBRE_GYM
FROM trainers AS t
LEFT JOIN gym AS g
ON t.gym_id = g.id 
LEFT JOIN pokemons AS p
ON p.trainers_id = t.id
GROUP BY t.id;




