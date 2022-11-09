/*VISTAS 1*/
CREATE VIEW vista_personas AS
SELECT ci, nombres, ap, am
FROM personas
WHERE estado ='1';

SELECT * FROM vista_personas;

/*VISTAS 2*/
CREATE VIEW vista_ingresos AS
SELECT fecha_ingreso, forma_cobro, descripcion_ingreso
FROM ingresos
WHERE monto_asignado>4000
AND estado='1';

SELECT * FROM vista_ingresos;

/*VISTAS 3*/
CREATE VIEW vista_ingresos_asesor_especialidad AS
SELECT ing.fecha_ingreso, ing.forma_cobro, ing.descripcion_ingreso, ase.grado_especialidad
FROM ingresos ing, asesores_especialidades ase
WHERE ing.monto_asignado>4000
AND ase.grado_especialidad<>"Licenciatura"
AND ing.id_asesor_especialidad=ase.id_asesor_especialidad;

SELECT * FROM vista_ingresos_asesor_especialidad;