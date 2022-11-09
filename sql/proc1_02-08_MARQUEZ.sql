DELIMITER //
	CREATE PROCEDURE listado_personas_fechas(IN f_inicio DATE, IN f_fin DATE)
		BEGIN

			SELECT *
			FROM personas
			WHERE fec_insercion BETWEEN f_inicio AND f_fin
			AND estado ='1';

		END //

DELIMITER;


CALL listado_personas_fechas('2022-01-01 00:00:00', '2022-08-03 23:59:59');


