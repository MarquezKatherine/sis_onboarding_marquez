DELIMITER //
	CREATE FUNCTION minimos_ingresos()
		RETURNS FLOAT
		BEGIN
			DECLARE resultado FLOAT;

			SELECT min(monto_asignado) INTO resultado
			FROM ingresos
			WHERE monto_asignado>500;

			RETURN resultado;

		END //

DELIMITER;


SELECT minimos_ingresos();