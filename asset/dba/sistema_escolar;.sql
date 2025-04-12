CREATE DATABASE sistema_escolar;
USE sistema_escolar;

-- Tabla alumnos
CREATE TABLE alumnos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    matricula VARCHAR(20) UNIQUE,
    grado VARCHAR(50),
    grupo VARCHAR(10),
    email VARCHAR(100),
    password VARCHAR(255)
);

-- Tabla maestros
CREATE TABLE maestros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    email VARCHAR(100),
    materia VARCHAR(50)
);

-- Tabla materias
CREATE TABLE materias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100)
);

-- Tabla clases (relación maestro-materia-grupo)
CREATE TABLE clases (
    id INT AUTO_INCREMENT PRIMARY KEY,
    materia_id INT,
    maestro_id INT,
    grado VARCHAR(50),
    grupo VARCHAR(10),
    FOREIGN KEY (materia_id) REFERENCES materias(id),
    FOREIGN KEY (maestro_id) REFERENCES maestros(id)
);

-- Tabla calificaciones
CREATE TABLE calificaciones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    alumno_id INT,
    clase_id INT,
    calificacion DECIMAL(5,2),
    FOREIGN KEY (alumno_id) REFERENCES alumnos(id),
    FOREIGN KEY (clase_id) REFERENCES clases(id)
);

-- Tabla pagos
CREATE TABLE pagos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    alumno_id INT,
    concepto VARCHAR(100),
    monto DECIMAL(10,2),
    fecha_pago DATE,
    pagado BOOLEAN DEFAULT 0,
    FOREIGN KEY (alumno_id) REFERENCES alumnos(id)
);