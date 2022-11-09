DELIMITER //
	CREATE TRIGGER insetar_registro_huellas
	BEFORE INSERT ON personas
	FOR EACH ROW
	BEGIN
	INSERT registro_huellas (consulta, fec_insercion, usuario)VALUES
	("INSERT PERSONAS", NEW.fec_insercion, NEW.usuario);

	END//

	DELIMITER;