<?php
// Configuración de la base de datos
$host = 'localhost';
$usuario = 'root';
$contrasena = '';
$base_datos = 'SistemEscolar';

// Establecer la conexión
$conexion = mysqli_connect($host, $usuario, $contrasena, $base_datos);

// Verificar si hay errores en la conexión
if (!$conexion) {
    // Mensaje profesional de error para el desarrollador
    error_log("Error de conexión a la base de datos: " . mysqli_connect_error());
    die("Lo sentimos, hubo un error al conectar con la base de datos.");
}

// Establecer el conjunto de caracteres a UTF-8
if (!mysqli_set_charset($conexion, 'utf8')) {
    error_log("Error al establecer el charset UTF-8: " . mysqli_error($conexion));
    die("Error al configurar el conjunto de caracteres.");
}
?>
