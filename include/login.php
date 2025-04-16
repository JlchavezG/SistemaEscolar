<?php
error_reporting(0);
session_start();
include 'db.php';

if (isset($_POST['BtnIngresar'])) {
    $usuario = $conexion->real_escape_string($_POST['UserName']);
    $password = md5($conexion->real_escape_string($_POST['UserPass']));
    $alerta = "";

    $q = "SELECT * FROM usuarios WHERE nombre_usuario = '$usuario' AND contrasena = '$password' AND Activo = 1 LIMIT 1";
    $resultado = $conexion->query($q);

    if ($resultado && $resultado->num_rows > 0) {
        $row = $resultado->fetch_assoc();

        if ($password === $row['contrasena']) {
            // Inicio de sesión exitoso
            $_SESSION['loguin'] = TRUE;
            $_SESSION['nombre_usuario'] = $usuario;
            $_SESSION['id_usuario'] = $row['id_usuario'];
            $_SESSION['rol'] = $row['rol'];

            // Actualizar última conexión
            $id = $row['id_usuario'];
            $update = "UPDATE usuarios SET ultima_conexion = NOW() WHERE id_usuario = '$id'";
            $conexion->query($update);

            $conexion->close();
            header("location:app");
            exit;
        } else {
            // Contraseña incorrecta
            $alerta .= "
                <div class='alert alert-danger alert-dismissible fade show shadow' role='alert'>
                    <svg class='bi text-danger' width='20' height='20' role='img' aria-label='Error'>
                        <use xlink:href='library/icons/bootstrap-icons.svg#x-circle-fill'/>
                    </svg>
                    <strong> Contraseña incorrecta</strong>. Por favor verifica tus credenciales.
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
        }
    } else {
        // Usuario no encontrado o inactivo
        $alerta .= "
            <div class='alert alert-warning alert-dismissible fade show shadow' role='alert'>
                <svg class='bi text-warning' width='20' height='20' role='img' aria-label='Warning'>
                    <use xlink:href='library/icons/bootstrap-icons.svg#exclamation-triangle-fill'/>
                </svg>
                <strong> Usuario no encontrado o inactivo</strong>. Verifica tus datos.
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
    }

    $conexion->close();
}
?>