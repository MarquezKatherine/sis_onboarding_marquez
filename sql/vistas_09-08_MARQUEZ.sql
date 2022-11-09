/*VISTAS 1*/
CREATE VIEW vista_personas AS
SELECT ci, nombres, ap, am
FROM personas
WHERE estado ='1';

SELECT * FROM vista_personas;

/*VISTAS 2*/
CREATE VIEW vista_tareas AS
SELECT fecha_inicio, fecha_finalizacion, descripcion_actividad
FROM tareas
WHERE fecha_inicio BETWEEN '2021-05-05' AND '2021-05-08';

SELECT * FROM vista_tareas;