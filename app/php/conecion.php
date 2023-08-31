<?php

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

// Variables del fomrulario
$Nombre = isset($_POST['Nombre']) ? $_POST['Nombre'] : '';
$Apellido = isset($_POST['Apellido']) ? $_POST['Apellido'] : '';
$Email = md5(isset($_POST['Email']) ? $_POST['Email'] : '');
$password = md5( isset($_POST['password']) ? $_POST['password'] : '');
$password1 =md5( isset($_POST['password1']) ? $_POST['password1'] : '');
// Conexion a Data
$con = new SQLite3("../data/cotCORSEC.db") or die("Problemas para conectar");

// Consulta a SQL
$cs = $con -> query("INSERT INTO registro (Nombre, Apellido, Email, password, password1) VALUES ('$Nombre', '$Apellido', '$Email', '$password', '$password1')");

// Close Conexion
$con -> close();

// html
echo "
<script>
    window.location='../../index.php'
</script>


";

?>