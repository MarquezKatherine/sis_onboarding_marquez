DELIMITER //
	CREATE TRIGGER inserta_registro_huellas
		BEFORE INSERT ON personas
		FOR EACH ROW
		BEGIN
			INSERT INTO registro_huellas (consulta, fec_insercion, usuario)VALUES
			("INSERT-PERSONAS",NEW.fec_insercion, NEW.usuario);

		END//

DELIMITER ;


