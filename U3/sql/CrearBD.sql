-- UnADM Programacion Web 1

--DROP DATABASE compartiralimentos;
-- GRANT ALL PRIVILEGES ON *.* TO 'cesar'@'localhost' IDENTIFIED BY 'Conchita';

CREATE DATABASE IF NOT EXISTS CompartirAlimentos; USE
    CompartirAlimentos;
CREATE TABLE Usuario(
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Nombre VARCHAR(128) COLLATE utf8mb4_spanish2_ci NOT NULL,
    Contrasenia VARCHAR(128),
    Telefono VARCHAR(10) NOT NULL,
    CorreoElectronico VARCHAR(255),
    Notas VARCHAR(255) COLLATE utf8mb4_spanish2_ci
) ENGINE = MyISAM DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_spanish2_ci;

CREATE TABLE compartir(
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    alimento VARCHAR(60) COLLATE utf8mb4_spanish2_ci NOT NULL,
    cantidad INT NOT NULL,
    medida VARCHAR(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
    fecha_caducidad DATETIME NOT NULL,
    Notas VARCHAR(255) COLLATE utf8mb4_spanish2_ci
) ENGINE = MyISAM DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_spanish2_ci;

INSERT INTO Usuario(
    nombre,
    contrasenia,
    telefono,
    correoelectronico,
    notas
)
VALUES(
    'César A. V. Rodríguez',
    'Conchita',
    '1234567890',
    'cesar@unadm.mx',
    'Notas adicionales'
);
INSERT INTO Usuario(
    nombre,
    contrasenia,
    telefono,
    correoelectronico,
    notas
)
VALUES(
    'José Roberto Torres L.',
    'Roberto123',
    '2345678901',
    'jose@unadm.mx',
    'Es un buen maestro, me gustan sus clases'
);

INSERT INTO compartir(
    alimento,
    cantidad,
    medida,
    fecha_caducidad,
    notas
)
VALUES(
    'Queso crema',
    10,
    'Kg.',
    CURDATE(),
    'Cajitas de 1 Kg c/u'
);
