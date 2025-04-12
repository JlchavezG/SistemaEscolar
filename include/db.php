<?php
$host = 'localhost';
$db = 'sistema_escolar';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
?>