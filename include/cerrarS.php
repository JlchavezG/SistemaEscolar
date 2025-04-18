<?php
include 'db.php';
session_start();
$id = $_SESSION['id_usuario'];
// 3. Actualizar el campo "Online" en la base de datos
$Online = "UPDATE usuarios SET Online = 0 WHERE id_usuario = '$id'";
$conexion->query($Online);
session_unset();
session_destroy();
header("Location: ../index");
exit();
?>