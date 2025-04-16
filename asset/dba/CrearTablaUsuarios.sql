CREATE TABLE SistemEdu.usuarios (
    id_usuario INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    
    nombre VARCHAR(100) NOT NULL,
    apellido_paterno VARCHAR(100) NOT NULL,
    apellido_materno VARCHAR(100),
    
    correo VARCHAR(150) NOT NULL UNIQUE,
    telefono VARCHAR(15),
    
    nombre_usuario VARCHAR(50) NOT NULL UNIQUE,
    contrasena VARCHAR(255) NOT NULL, -- Aquí se guardan hashes (NO contraseñas planas)

    rol ENUM('admin', 'docente', 'alumno', 'coordinador', 'control_escolar') NOT NULL DEFAULT 'alumno',

    foto_perfil VARCHAR(255) DEFAULT 'default.png',
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    ultima_conexion DATETIME NULL,

    activo BOOLEAN DEFAULT TRUE,
    verificado BOOLEAN DEFAULT FALSE,

    token_recuperacion VARCHAR(255), -- Para recuperación de contraseña
    expiracion_token DATETIME,

    CONSTRAINT chk_rol CHECK (rol IN ('admin', 'docente', 'alumno', 'coordinador', 'control_escolar'))
) ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_spanish_ci;