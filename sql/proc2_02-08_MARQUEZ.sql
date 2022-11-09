DELIMITER //
	CREATE PROCEDURE listado_informaciones(IN menor_utilidad FLOAT, IN mayor_utilidad FLOAT)
		BEGIN

			SELECT *
			FROM informaciones_complementarias
			WHERE utilidades_historicas BETWEEN menor_utilidad  AND mayor_utilidad
			AND perdidas_historicas>5000;

		END //

DELIMITER;


CALL listado_informaciones('3000000', '10000000');
