DELIMITER //
	CREATE TRIGGER inserta_registro_huellas2
		BEFORE UPDATE ON personas
		FOR EACH ROW
		BEGIN
			INSERT INTO registro_huellas (consulta, fec_insercion, usuario)VALUES
			("MODIF-PERSONAS",NEW.fec_insercion, NEW.usuario);

		END//

DELIMITER ;
