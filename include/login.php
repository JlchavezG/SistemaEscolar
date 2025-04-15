<?php
error_reporting(0);
session_start();
include 'db.php';
if (isset($_POST['BtnIngresar'])) {
    $Accion = "Ingreso a la plataforma";
    $Accion1 = "Salida de la plataforma";
    $usuario = $conexion->real_escape_string($_POST['EmailUser']);
    $password = $conexion->real_escape_string(md5($_POST['UserPass']));
    $q = "SELECT * FROM Usuarios WHERE EmailUser = '$usuario' and Password = '$password' and Estatus = 1";
    if ($resultado = $conexion->query($q)) {
        while ($row = $resultado->fetch_array()) {
            $userok = $row['EmailUser'];
            $passwordok = $row['Password'];
            $IdUserOk = $row['Id_Usuarios'];
        }
        $resultado->close();
    }
    $conexion->close();
    if (isset($usuario) && isset($password)) {
        if ($usuario == $userok && $password == $passwordok) {
            $_SESSION['loguin'] = TRUE;
            $_SESSION['Usuario'] = $usuario;
            header("location:app");
        } else {
                $alerta .= "<div class='alert alert-danger alert-dismissible fade show shadow' role='alert'>
                                <svg class='bi text-danger' width='20' height='20' role='img' aria-label='Tools'>
                                <use xlink:href='library/icons/bootstrap-icons.svg#x-circle-fill'/>
                                </svg>
                                <strong> Usuario y/o password invalido</strong> Por favor verifica tus credenciales.
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>";
        }
    } else {
        header("location:index");
    }
}
?>