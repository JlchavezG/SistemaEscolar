<?php 
// eliminar alertas no deseadas 
error_reporting(0);
// recordar la sesion 
session_start();
// validar que el usuari pase por el login 
$usuario = $_SESSION['nombre_usuario'];
if(!isset($usuario)){
header("location:index.php");
}
// extraer los datos del usuario que ingreso al sistema





// configurar la zona horaria de nuestro servidor
ini_Set('date.timezone','America/Mexico_City');
$fecha = date('Y-m-d');
$tiempo = date('H:i:s');
$hora = date('H');
$Accion = "Ingreso a la plataforma";
$Accion2 = "Salida de la plataforma";
// realizar saludo segun el horario en el servidor 
$hora_actual = date('H');
if ($hora_actual >= 5 && $hora_actual < 12) {
    $saludo = 'Buenos días';
} elseif ($hora_actual >= 12 && $hora_actual < 18) {
    $saludo = 'Buenas tardes';
} else {
    $saludo = 'Buenas noches';
}

?>