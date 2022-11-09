
/*procedimientos*/
DELIMITER //
	CREATE PROCEDURE listado_tareas(IN f_inicio DATE, IN f_inicio_1 DATE)
		BEGIN

			SELECT descripcion_actividad
			FROM tareas
			WHERE fecha_inicio BETWEEN f_inicio  AND f_inicio_1;
		END //

DELIMITER;


CALL listado_tareas('2021-02-05', '2021-05-05');
/*funciones*/
DELIMITER //
	CREATE FUNCTION max_dias_trabajados()
		RETURNS INT
		BEGIN
			DECLARE dias INT;

			SELECT max(dias_trabajados_mes) INTO dias
			FROM horarios
			WHERE turno_trabajo='tarde';

			RETURN dias;

		END //

DELIMITER;


SELECT max_dias_trabajados();
/*triggers*/
DELIMITER //
	CREATE TRIGGER inserta_registro_huellas2
		BEFORE UPDATE ON personas
		FOR EACH ROW
		BEGIN
			INSERT INTO registro_huellas (consulta, fec_insercion, usuario)VALUES
			("MODIF-PERSONAS",NEW.fec_insercion, NEW.usuario);

		END//

DELIMITER ;
/*VISTAS*/
CREATE VIEW vista_ingresos AS
SELECT fecha_ingreso, forma_cobro, descripcion_ingreso
FROM ingresos
WHERE monto_asignado>4000;

SELECT * FROM vista_ingresos;

CREATE VIEW vista_ingresos_asesor_especialidad AS
SELECT ing.fecha_ingreso, ing.forma_cobro, ing.descripcion_ingreso, ase.grado_especialidad
FROM ingresos ing, asesores_especialidades ase
WHERE ing.monto_asignado>4000
AND ase.grado_especialidad<>"Licenciatura"
AND ing.id_asesor_especialidad=ase.id_asesor_especialidad;

SELECT * FROM vista_ingresos_asesor_especialidad;