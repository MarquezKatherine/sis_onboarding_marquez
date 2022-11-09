DELIMITER //
 CREATE PROCEDURE listado_egreso (IN egr_minimo FLOAT, IN egr_maximo FLOAT)
 	BEGIN

 		SELECT *
 		FROM egresos
 		WHERE monto_asignado BETWEEN egr_minimo AND egr_maximo
 		AND forma_pago = 'CONTADO';

 	END //

 	DELIMITER;

 	CALL listado_egreso( 1000, 5000);