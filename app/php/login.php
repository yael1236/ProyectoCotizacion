<?php
error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");
session_start();

$con = new SQLite3("../data/cotCORSEC.db") or die("Problemas para conectar");


$Email = md5($_POST['Email']);
$password = md5($_POST['password']);

$query = "SELECT * FROM registro WHERE Email = '$Email' AND password = '$password'";
$result = $con->query($query);

if ($result->fetchArray()) {
    // Inicio de sesión exitoso
    header("location: menu.php");
} else {
    // Credenciales incorrectas
    echo "Credenciales incorrectas";
}


$con -> close();
?>