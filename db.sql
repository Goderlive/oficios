DROP DATABASE IF EXISTS ofi_metepec;
CREATE DATABASE ofi_metepec;
USE DATABASE ofi_metepec;

DROP TABLE IF EXISTS of_enviados;
CREATE TABLE of_enviados(
    id_of_enviado INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    no_oficio VARCHAR(10),
    id_dependencia_destino INT,
    otro_destino VARCHAR(255),
    asunto VARCHAR(255),
    id_solicitante INT,
    otro_solicitante VARCHAR(255),
    fecha_oficio TIMESTAMP NULL,
    fecha_acuse TIMESTAMP NULL,
    dir_acuse VARCHAR(255),
    id_acuse INT
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


DROP TABLE IF EXISTS of_recibidos;
CREATE TABLE of_recibidos(
    id_of_recibido INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    numero_oficio VARCHAR(255),
    id_dependencia_origen INT,
    otro_origen VARCHAR(255),
    descripcion VARCHAR(255),
    fecha_oficio TIMESTAMP NULL,
    fecha_recepcion TIMESTAMP NULL,
    dir_acuse VARCHAR(255),
    id_acuse INT
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


DROP TABLE IF EXISTS usuarios;
CREATE TABLE usuarios(
  id_usuario INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nombre VARCHAR(255),
  apellidos VARCHAR(255),
  correo_electronico VARCHAR(255) UNIQUE,
  tel VARCHAR(255),
  contrasena VARCHAR(255),
  fecha_creacion DATETIME DEFAULT CURRENT_TIMESTAMP(),
  id_registro INT,
  activo INT DEFAULT 1
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO usuarios (nombre, apellidos, correo_electronico, tel, contrasena) VALUES ("German","Guillen Sanchez", "goder@live.com", "7224531128", "123456");


DROP TABLE IF EXISTS permisos;
CREATE TABLE permisos(
  id_permiso INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  id_usuario INT,
  id_dependencia INT,
  id_area INT,
  nivel INT,
  rol INT,
  descentralizados INT,
  anio VARCHAR(5)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO permisos (id_usuario, id_dependencia, )



DROP TABLE IF EXISTS dependencias;
CREATE TABLE dependencias(
  id_dependencia INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nombre_dependencia VARCHAR(255) NOT NULL,
  id_dependencia_gen INT,
  fecha_alta DATETIME DEFAULT CURRENT_TIMESTAMP(),
  active INT,
  anio VARCHAR(4),
  id_administrador INT
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO dependencias (nombre_dependencia, id_dependencia_gen, active, anio, id_administrador) VALUES 
("Oficina de Presidencia", 1, 1,"2023",2),
("Secretaría Técnica", 1, 1,"2023",2),
("Secretaria Particular", 1, 1,"2023",2),
("Coordinación de Giras y Logística",1, 1,"2023",1),
("Coordinación de Asesores", 1, 1,"2023",2),
("Coordinación de Asuntos Religiosos", 1, 1,"2023",2),
("Secretaria Técnica del Consejo Municipal de Seguridad Publica", 1, 1,"2023",1),
("Coordinación de Comunicación Social", 2, 1,"2023",1),
("Defensoría Municipal de los Derechos Humanos", 3, 1,"2023",1),
("Sindicatura Municipal", 5, 1,"2023",1),
("Regiduría 1", 8, 1,"2023",2),
("Regiduría 2", 9, 1,"2023",2),
("Regiduría 3", 10, 1,"2023",2),
("Regiduría 4", 11, 1,"2023",2),
("Regiduría 5", 12, 1,"2023",2),
("Regiduría 6", 13, 1,"2023",2),
("Regiduría 7", 14, 1,"2023",2),
("Regiduría 8", 15, 1,"2023",2),
("Regiduría 9", 16, 1,"2023",2),
("Secretaria del Ayuntamiento", 20, 1,"2023",2),
("Dirección de Administración", 21, 1,"2023",1),
("Dirección de Gobierno Digital y Electrónico", 23, 1,"2023",2),
("Dirección de Desarrollo Urbano y Metropolitano", 25, 1,"2023",1),
("Dirección de Obras Públicas", 25, 1,"2023",1),
("Dirección de Medio Ambiente", 27, 1,"2023",1),
("Dirección de Servicios Públicos", 28, 1,"2023",2),
("Dirección de Desarrollo Social y Asuntos Indígenas", 37, 1,"2023",1),
("Dirección de Gobernación", 33, 1,"2023",1),
("Contraloría Interna Municipal", 34, 1,"2023",1),
("Tesorería Municipal", 35, 1,"2023",2),
("Consejería Jurídica", 36, 1,"2023",1),
("Dirección de Desarrollo Económico, Turístico y Artesanal", 37, 1,"2023",2),
("Dirección de Cultura", 39, 1,"2023",1),
("Dirección de Educación", 39, 1,"2023",1),
("Dirección de Gerencia de la Ciudad", 40, 1,"2023",2),
("Dirección de Seguridad Pública", 41, 1,"2023",1),
("Dirección de Gobierno Por Resultados", 43, 1,"2023",2),
("Dirección de Transparencia y Gobierno Abierto", 43, 1,"2023",2),
("Coordinación de Protección civil y bomberos", 44, 1,"2023",2),
("Dirección de Igualdad de Género", 46, 1,"2023",2),
("OPDAPAS",47,1,"2023",1),
("SMDIF",64,1,"2023",1),
("IMCUFIDEM",71,1,"2023",2);