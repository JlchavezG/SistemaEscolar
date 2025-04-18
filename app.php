<?php 
session_start();
include 'include/confing.php';
// Verificamos si la variable de sesión 'usuario' está definida
if (!isset($_SESSION['nombre_usuario'])) {
    // Redireccionamos al login si no está iniciada la sesión
    header("Location: index");
    exit(); // Detenemos la ejecución del script
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/minimal.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" type="image/png" href="img/New_Logo_Gris.png">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <title> DashBoard | SistemEscolar</title>
</head>

<body>
<?php include 'element/navbar.php';?>
<?php include 'element/CerrarSesion.php';?>
<?php include 'element/MenuSistemas.php';?>
</body>
<script src="js/bootstrap.min.js"></script>
<script src="js/pace.js"></script>
</body>

</html>