DELIMITER //
	CREATE FUNCTION total_egresos()
	RETURNS FLOAT
	BEGIN
	DECLARE resultado FLOAT;

	SELECT sum(monto_asignado) INTO resultado
	FROM egresos
	WHERE monto_asignado>500;

	RETURN resultado;

	END //

	DELIMITER ;

SELECT total_egresos();