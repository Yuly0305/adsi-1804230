#Eliminar

DELETE FROM trainers
where id = 5;

#Eliminar todos los registros de una tabla
DELETE * FROM trainers;

#Vaciar tabla
TRUNCATE trainers;

#Transacciones;
BEGIN;

DELETE FROM trainers
where id > 2;

ROLLBACK;






