CREATE DATABASE bd_onboarding;



CREATE TABLE sistema_web (
	id_sistema_web INT AUTO_INCREMENT NOT NULL,
	logo VARCHAR (100) NOT NULL,
	telefono VARCHAR(25) NOT NULL,
	email VARCHAR (25) NOT NULL,
	url VARCHAR (50) NOT NULL,
	nombre VARCHAR (20) NOT NULL,
	fec_insercion TIMESTAMP NOT NULL,
	fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	usuario INT NOT NULL,
	estado CHAR(1) NOT NULL,
	PRIMARY KEY (id_sistema_web)
)ENGINE=INNODB;



CREATE TABLE propietario_sistema(
	id_propietario_sistema INT AUTO_INCREMENT NOT NULL,
	id_sistema_web INT NOT NULL,
	nombres VARCHAR (25) NOT NULL,
	fecha_ingreso_cargo DATE NOT NULL,
	especialidad VARCHAR (30) NOT NULL,
	fec_insercion TIMESTAMP NOT NULL,
	fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	usuario INT NOT NULL,
	estado CHAR(1) NOT NULL,
	PRIMARY KEY (id_propietario_sistema),
	FOREIGN KEY (id_sistema_web) REFERENCES sistema_web (id_sistema_web)
)ENGINE=INNODB;

CREATE TABLE empresa(
	id_empresa INT AUTO_INCREMENT NOT NULL,
	id_sistema_web INT NOT NULL,
	razon_social VARCHAR(20) NOT NULL,
	telefonos VARCHAR (20) NOT NULL,
	ubicacion VARCHAR (20) NOT NULL,
	correo_electronico VARCHAR (25) NOT NULL,
	sitio_web VARCHAR (25) NOT NULL,
	fec_insercion TIMESTAMP NOT NULL,
	fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	usuario INT NOT NULL,
	estado CHAR(1) NOT NULL,
	PRIMARY KEY (id_empresa),
	FOREIGN KEY (id_sistema_web) REFERENCES sistema_web(id_sistema_web)
)ENGINE=INNODB;

CREATE TABLE gerentes_propietarios(
	id_gerente_propietario INT AUTO_INCREMENT NOT NULL,
	id_empresa INT NOT NULL,
	nombres VARCHAR(25) NOT NULL,
	apellidos VARCHAR(25) NOT NULL,
	telefono VARCHAR (25) NOT NULL,
	identificacion_tributaria INT NOT NULL,
	fec_insercion TIMESTAMP NOT NULL,
	fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	usuario INT NOT NULL,
	estado CHAR(1) NOT NULL,
	PRIMARY KEY (id_gerente_propietario),
	FOREIGN KEY (id_empresa) REFERENCES empresa(id_empresa)
)ENGINE=INNODB;

CREATE TABLE tareas(
	id_tarea INT AUTO_INCREMENT NOT NULL,
	id_empresa INT NOT NULL,
	fecha_inicio DATE NOT NULL,
	fecha_finalizacion DATE NOT NULL,
	descripcion_actividad TEXT NOT NULL,
	fec_insercion TIMESTAMP NOT NULL,
	fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	usuario INT NOT NULL,
	estado CHAR(1) NOT NULL,
	PRIMARY KEY (id_tarea),
	FOREIGN KEY (id_empresa) REFERENCES empresa(id_empresa)
)ENGINE=INNODB;

CREATE TABLE asesores(
	id_asesor INT AUTO_INCREMENT NOT NULL,
	nombres VARCHAR(25) NOT NULL,
	apellidos VARCHAR(25) NOT NULL,
	telefono VARCHAR(25) NOT NULL,
	email VARCHAR (50) NOT NULL,
	cedula_identidad VARCHAR (15) NOT NULL,
	registro_universitario INT NOT NULL,
	fec_insercion TIMESTAMP NOT NULL,
	fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	usuario INT NOT NULL,
	estado CHAR(1) NOT NULL,
	PRIMARY KEY (id_asesor)
)ENGINE=INNODB;

CREATE TABLE tipos_especialidades(
	id_tipo_especialidad INT AUTO_INCREMENT NOT NULL,
	especializacion VARCHAR(25) NOT NULL,
	fec_insercion TIMESTAMP NOT NULL,
	fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	usuario INT NOT NULL,
	estado CHAR(1) NOT NULL,
	PRIMARY KEY (id_tipo_especialidad)
)ENGINE=INNODB;

CREATE TABLE especialidades(
	id_especialidad INT AUTO_INCREMENT NOT NULL,
	id_tipo_especialidad INT NOT NULL,
	experiencia VARCHAR(25) NOT NULL,
	lugar_especializacion VARCHAR(25) NOT NULL,
	especificacion VARCHAR (20) NOT NULL,
	curriculum VARCHAR (25) NOT NULL,
	datos_complementarios TEXT NOT NULL,
	fec_insercion TIMESTAMP NOT NULL,
	fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	usuario INT NOT NULL,
	estado CHAR(1) NOT NULL,
	PRIMARY KEY (id_especialidad),
	FOREIGN KEY (id_tipo_especialidad) REFERENCES tipos_especialidades (id_tipo_especialidad)
)ENGINE=INNODB;

CREATE TABLE asesores_especialidades(
	id_asesor_especialidad INT AUTO_INCREMENT NOT NULL,
	id_especialidad INT NOT NULL,
	id_asesor INT NOT NULL,
	fecha_adquisicion_especialidad DATE NOT NULL,
	grado_especialidad VARCHAR(25) NOT NULL,
	tipo_acreditacion VARCHAR (25) NOT NULL,
	fec_insercion TIMESTAMP NOT NULL,
	fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	usuario INT NOT NULL,
	estado CHAR(1) NOT NULL,
	PRIMARY KEY (id_asesor_especialidad),
	FOREIGN KEY (id_especialidad) REFERENCES especialidades(id_especialidad),
	FOREIGN KEY (id_asesor) REFERENCES asesores (id_asesor)
)ENGINE=INNODB;

CREATE TABLE horarios(
	id_horario INT AUTO_INCREMENT NOT NULL,
	turno_trabajo VARCHAR (20) NOT NULL,
	horario_entrada_y_salida VARCHAR (25)  NOT NULL,
	dias_trabajados_mes VARCHAR (30) NOT NULL,
	fec_insercion TIMESTAMP NOT NULL,
	fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	usuario INT NOT NULL,
	estado CHAR(1) NOT NULL,
	PRIMARY KEY (id_horario)
)ENGINE=INNODB;

CREATE TABLE desarrolladores(
	id_desarrollador INT AUTO_INCREMENT NOT NULL,
	id_horario INT NOT NULL,
	nombres VARCHAR (20) NOT NULL,
	apellidos VARCHAR (20) NOT NULL,
	email VARCHAR (25) NOT NULL,
	telefono VARCHAR (25) NOT NULL,
	fecha_ingreso DATE NOT NULL,
	genero VARCHAR (15) NOT NULL,
	fec_insercion TIMESTAMP NOT NULL,
	fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	usuario INT NOT NULL,
	estado CHAR(1) NOT NULL,
	PRIMARY KEY (id_desarrollador),
	FOREIGN KEY (id_horario) REFERENCES horarios (id_horario)
)ENGINE=INNODB;

CREATE TABLE tipos_egresos(
	id_tipo_egreso INT AUTO_INCREMENT NOT NULL,
	especificacion_egreso VARCHAR (20) NOT NULL,
	fec_insercion TIMESTAMP NOT NULL,
	fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	usuario INT NOT NULL,
	estado CHAR(1) NOT NULL,
	PRIMARY KEY (id_tipo_egreso)
)ENGINE=INNODB;/*YA ESTA*/

CREATE TABLE egresos (
	id_egreso INT AUTO_INCREMENT NOT NULL,
	id_asesor_especialidad INT NOT NULL,
	id_tipo_egreso INT NOT NULL,
	fecha_egreso DATE  NOT NULL,
	monto_asignado FLOAT NOT NULL,
	forma_pago VARCHAR (20) NOT NULL,
	descripcion_pago TEXT NOT NULL,
	fec_insercion TIMESTAMP NOT NULL,
	fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	usuario INT NOT NULL,
	estado CHAR(1) NOT NULL,
	PRIMARY KEY (id_egreso),
	FOREIGN KEY (id_asesor_especialidad) REFERENCES asesores_especialidades(id_asesor_especialidad),
	FOREIGN KEY  (id_tipo_egreso) REFERENCES tipos_egresos(id_tipo_egreso)
)ENGINE=INNODB;


CREATE TABLE tipos_ingresos (
	id_tipo_ingreso INT AUTO_INCREMENT NOT NULL,
	especificacion_ingreso VARCHAR (20) NOT NULL,
	fec_insercion TIMESTAMP NOT NULL,
	fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	usuario INT NOT NULL,
	estado CHAR(1) NOT NULL,
	PRIMARY KEY (id_tipo_ingreso)
)ENGINE=INNODB;


CREATE TABLE ingresos (
	id_ingreso INT AUTO_INCREMENT NOT NULL,
	id_asesor_especialidad INT NOT NULL,
	id_tipo_ingreso INT NOT NULL,
	fecha_ingreso DATE  NOT NULL,
	monto_asignado FLOAT  NOT NULL,
	forma_cobro VARCHAR (50) NOT NULL,
	descripcion_ingreso TEXT NOT NULL,
	fec_insercion TIMESTAMP NOT NULL,
	fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	usuario INT NOT NULL,
	estado CHAR(1) NOT NULL,
	PRIMARY KEY (id_ingreso),
	FOREIGN KEY (id_asesor_especialidad) REFERENCES asesores_especialidades(id_asesor_especialidad),
	FOREIGN KEY (id_tipo_ingreso) REFERENCES tipos_ingresos(id_tipo_ingreso)
)ENGINE=INNODB;

CREATE TABLE informes(
	id_informe INT AUTO_INCREMENT NOT NULL,
	id_ingreso INT NOT NULL,
	id_egreso INT NOT NULL,
	fecha_informe DATE NOT NULL,
	descripcion_informe TEXT NOT NULL,
	fec_insercion TIMESTAMP NOT NULL,
	fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	usuario INT NOT NULL,
	estado CHAR(1) NOT NULL,
	PRIMARY KEY (id_informe),
	FOREIGN KEY (id_ingreso) REFERENCES ingresos (id_ingreso),
	FOREIGN KEY (id_egreso) REFERENCES egresos (id_egreso)
)ENGINE=INNODB;

CREATE TABLE informaciones_complementarias(
	id_informacion_complementaria INT AUTO_INCREMENT NOT NULL,
	id_empresa INT NOT NULL,
	periodo_funcionamiento VARCHAR (30) NOT NULL,
	utilidades_historicas FLOAT NOT NULL,
	perdidas_historicas FLOAT NOT NULL,
	deudas_tributarias FLOAT NOT NULL,
	fec_insercion TIMESTAMP NOT NULL,
	fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	usuario INT NOT NULL,
	estado CHAR(1) NOT NULL,
	PRIMARY KEY (id_informacion_complementaria),
	FOREIGN KEY(id_empresa) REFERENCES empresa (id_empresa)
)ENGINE=INNODB;

CREATE TABLE tipo_regimen(
	id_tipo_regimen INT AUTO_INCREMENT NOT NULL,
	id_empresa INT NOT NULL,
	regimen VARCHAR (30) NOT NULL,
	fecha_cierre DATE NOT NULL,
	descripcion_tipo_empresa TEXT NOT NULL,
	fec_insercion TIMESTAMP NOT NULL,
	fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	usuario INT NOT NULL,
	estado CHAR(1) NOT NULL,
	PRIMARY KEY (id_tipo_regimen),
	FOREIGN KEY (id_empresa) REFERENCES empresa(id_empresa)
)ENGINE=INNODB;


CREATE TABLE muebleria(
id_muebleria INT NOT NULL AUTO_INCREMENT,
muebleria VARCHAR(30) NOT NULL,
direccion VARCHAR(30) NOT NULL,
telefono VARCHAR(30) NOT NULL,
logo_muebleria VARCHAR(100) NOT NULL,
PRIMARY KEY (id_muebleria)
)ENGINE=INNODB;

CREATE TABLE muebles(
	id_mueble INT NOT NULL AUTO_INCREMENT,
	id_muebleria INT NOT NULL ,
	tipo_mueble VARCHAR(20) NOT NULL,
	nombres VARCHAR(30) NOT NULL,
	codigo VARCHAR(10) NOT NULL,
	color VARCHAR(15),
	tamano  VARCHAR(15),
	PRIMARY KEY (id_mueble),
	FOREIGN KEY (id_muebleria) REFERENCES muebleria(id_muebleria)
)ENGINE=INNODB;


CREATE TABLE hoteles(
  id_hotel INT NOT NULL AUTO_INCREMENT,
  codigo VARCHAR(5) NOT NULL,
  nombre VARCHAR(30) NOT NULL,
  telefonos VARCHAR(15) NOT NULL,
  nro_plazas_disponibles INT NOT NULL,
  ciudad VARCHAR(20) NOT NULL,
  direccion VARCHAR(25) NOT NULL,
  PRIMARY KEY(id_hotel)
)ENGINE=INNODB;


CREATE TABLE vuelos(
  id_vuelo INT NOT NULL AUTO_INCREMENT,
  id_hotel INT NOT NULL,
  origen VARCHAR(20) NOT NULL,
  destino VARCHAR(20) NOT NULL,
  fecha DATE NOT NULL,
  horas TIME NOT NULL,
  PRIMARY KEY(id_vuelo),
  FOREIGN KEY(id_hotel) REFERENCES hoteles(id_hotel)
)ENGINE=INNODB;

CREATE TABLE cargos(
  pk_id int not null auto_increment,
  nombre VARCHAR(20),
  PRIMARY KEY(pk_id)
)ENGINE=INNODB;


CREATE TABLE personas1(
  pk_id int not null auto_increment,
  nombres varchar(20),
  ci int(4),
  telef int(4) zerofill,
  fk_cargo int not null,
  PRIMARY KEY(pk_id),
  FOREIGN KEY (fk_cargo) REFERENCES cargos(pk_id)
)ENGINE=INNODB;


CREATE TABLE personas(
	id_persona INT AUTO_INCREMENT NOT NULL,
	id_sistema_web INT NOT NULL,
	am VARCHAR (20) NOT NULL,
	ap VARCHAR (20) NOT NULL,
	nombres VARCHAR (20) NOT NULL,
	ci VARCHAR (20) NOT NULL,
	telefono VARCHAR (20) NOT NULL,
	direccion VARCHAR (50) NOT NULL,
	genero CHAR (1) DEFAULT 'F' NOT NULL, 
	fec_insercion TIMESTAMP NOT NULL,
	fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	usuario INT NOT NULL,
	estado CHAR(1) NOT NULL,
	PRIMARY KEY (id_persona),
	FOREIGN KEY (id_sistema_web) REFERENCES sistema_web(id_sistema_web)
)ENGINE=INNODB;

CREATE TABLE usuarios(
	id_usuario INT AUTO_INCREMENT NOT NULL,
	id_persona INT NOT NULL,
	usuario1 VARCHAR (30) NOT NULL,
	clave VARCHAR (100) NOT NULL,
	fec_insercion TIMESTAMP NOT NULL,
	fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	usuario INT NOT NULL,
	estado CHAR(1) NOT NULL,
	PRIMARY KEY (id_usuario),
	FOREIGN KEY (id_persona) REFERENCES personas(id_persona)
)ENGINE=INNODB;

CREATE TABLE roles(
	id_rol INT AUTO_INCREMENT NOT NULL,
	rol VARCHAR (30) NOT NULL,
	fec_insercion TIMESTAMP NOT NULL,
	fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	usuario INT NOT NULL,
	estado CHAR(1) NOT NULL,
	PRIMARY KEY (id_rol)
)ENGINE=INNODB;

CREATE TABLE usuarios_roles(
	id_usuario_rol INT AUTO_INCREMENT NOT NULL,
	id_rol INT NOT NULL,
	id_usuario INT NOT NULL,
	fec_insercion TIMESTAMP NOT NULL,
	fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	usuario INT NOT NULL,
	estado CHAR(1) NOT NULL,
	PRIMARY KEY(id_usuario_rol),
	FOREIGN KEY (id_rol) REFERENCES roles(id_rol),
	FOREIGN KEY(id_usuario) REFERENCES usuarios(id_usuario)
)ENGINE=INNODB;

CREATE TABLE grupos (
	id_grupo INT AUTO_INCREMENT NOT NULL,
	grupo VARCHAR (25) NOT NULL,
	fec_insercion TIMESTAMP NOT NULL,
	fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	usuario INT NOT NULL,
	estado CHAR(1) NOT NULL,
	PRIMARY KEY (id_grupo)
)ENGINE=INNODB;

CREATE TABLE opciones(
	id_opcion INT AUTO_INCREMENT NOT NULL,
	id_grupo INT NOT NULL,
	opcion VARCHAR (100) NOT NULL,
	contenido VARCHAR (100) NOT NULL,
	orden VARCHAR (100) NOT NULL,
	fec_insercion TIMESTAMP NOT NULL,
	fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	usuario INT NOT NULL,
	estado CHAR(1) NOT NULL,
	PRIMARY KEY (id_opcion),
	FOREIGN KEY (id_grupo) REFERENCES grupos(id_grupo)
)ENGINE=INNODB;

CREATE TABLE accesos(
	id_acceso INT AUTO_INCREMENT NOT NULL,
	id_opcion INT NOT NULL,
	id_rol INT NOT NULL,
	fec_insercion TIMESTAMP NOT NULL,
	fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	usuario INT NOT NULL,
	estado CHAR(1) NOT NULL,
	PRIMARY KEY (id_acceso),
	FOREIGN KEY (id_opcion) REFERENCES opciones(id_opcion),
	FOREIGN KEY (id_rol) REFERENCES roles(id_rol)
)ENGINE=INNODB;

CREATE TABLE registro_huellas(
	id_registro_huella INT NOT NULL AUTO_INCREMENT,
	consulta VARCHAR(50) NOT NULL,
	fec_insercion timestamp NOT NULL,
	usuario int NOT NULL,
	PRIMARY KEY (id_registro_huella)
)ENGINE=INNODB;