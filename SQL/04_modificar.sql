# Modificar
UPDATE pokemons
SET trainers_id = 4
WHERE id = 15
OR id = 17
OR id = 19;

UPDATE pokemons
SET trainers_id = 5
WHERE id >= 12 AND id <=14;