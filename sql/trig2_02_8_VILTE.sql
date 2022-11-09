DELIMITER //
	CREATE TRIGGER insetar_registro_huellas2
	BEFORE UPDATE ON personas
	FOR EACH ROW
	BEGIN
	INSERT registro_huellas (consulta, fec_insercion, usuario)VALUES
	("MODIF PERSONAS", NEW.fec_insercion, NEW.usuario);

	END//

	DELIMITER;