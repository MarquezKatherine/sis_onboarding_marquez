DELIMITER //
	CREATE FUNCTION contar_registros()
	RETURNS INT
	BEGIN
	DECLARE resultado INT;

	SELECT COUNT(id_persona) INTO resultado
	FROM personas
	WHERE estado='1';

	RETURN resultado;

	END //

	DELIMITER ;

SELECT contar_registros();

	/*BORRAR LA FUNCION
	drop FUNCTION contar_registros*/