CREATE DATABASE SistemaEscolar CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE SistemaEscolar;

CREATE TABLE grados (
    id_grado INT AUTO_INCREMENT PRIMARY KEY,
    nombre_grado VARCHAR(50) NOT NULL
);

CREATE TABLE grupos (
    id_grupo INT AUTO_INCREMENT PRIMARY KEY,
    nombre_grupo VARCHAR(10) NOT NULL,
    id_grado INT NOT NULL,
    turno ENUM('Matutino', 'Vespertino') NOT NULL,
    FOREIGN KEY (id_grado) REFERENCES grados(id_grado)
);

CREATE TABLE alumnos (
    id_alumno INT AUTO_INCREMENT PRIMARY KEY,
    matricula VARCHAR(20) UNIQUE NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    ap_paterno VARCHAR(50),
    ap_materno VARCHAR(50),
    fecha_nacimiento DATE,
    sexo ENUM('Masculino', 'Femenino', 'Otro'),
    direccion TEXT,
    telefono VARCHAR(15),
    correo VARCHAR(100),
    id_grupo INT NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_grupo) REFERENCES grupos(id_grupo)
);

CREATE TABLE credenciales (
    id_credencial INT AUTO_INCREMENT PRIMARY KEY,
    id_alumno INT NOT NULL,
    foto_url VARCHAR(255),
    fecha_emision DATE,
    estado ENUM('Activa', 'Inactiva') DEFAULT 'Activa',
    FOREIGN KEY (id_alumno) REFERENCES alumnos(id_alumno)
);

CREATE TABLE pagos (
    id_pago INT AUTO_INCREMENT PRIMARY KEY,
    concepto VARCHAR(100),
    monto DECIMAL(10,2) NOT NULL,
    fecha_pago DATE,
    metodo_pago ENUM('Efectivo', 'Transferencia', 'Tarjeta'),
    id_alumno INT NOT NULL,
    observaciones TEXT,
    FOREIGN KEY (id_alumno) REFERENCES alumnos(id_alumno)
);

CREATE TABLE adeudos (
    id_adeudo INT AUTO_INCREMENT PRIMARY KEY,
    id_alumno INT NOT NULL,
    concepto VARCHAR(100),
    monto DECIMAL(10,2) NOT NULL,
    fecha_registro DATE,
    pagado BOOLEAN DEFAULT 0,
    FOREIGN KEY (id_alumno) REFERENCES alumnos(id_alumno)
);

CREATE TABLE recibos (
    id_recibo INT AUTO_INCREMENT PRIMARY KEY,
    id_pago INT NOT NULL,
    folio VARCHAR(30) UNIQUE NOT NULL,
    fecha_emision DATE,
    archivo_pdf_url VARCHAR(255),
    FOREIGN KEY (id_pago) REFERENCES pagos(id_pago)
);

CREATE TABLE modulos (
    id_modulo INT AUTO_INCREMENT PRIMARY KEY,
    nombre_modulo VARCHAR(100) NOT NULL,
    descripcion TEXT
);

CREATE TABLE modulos_impartidos (
    id_impartido INT AUTO_INCREMENT PRIMARY KEY,
    id_modulo INT NOT NULL,
    id_alumno INT NOT NULL,
    calificacion DECIMAL(5,2),
    observaciones TEXT,
    fecha_imparticion DATE,
    FOREIGN KEY (id_modulo) REFERENCES modulos(id_modulo),
    FOREIGN KEY (id_alumno) REFERENCES alumnos(id_alumno)
);

