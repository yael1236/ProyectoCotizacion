<?php

$conConTabla = new SQLite3("app/data/cotCORSEC.db");

$cs2 = $conConTabla -> query("SELECT * FROM registro ORDER BY id DESC LIMIT 1 ");
	while ($resul = $cs2 -> fetchArray()) {
        $password = isset($_POST['password']) ? $_POST['password'] : '';

$CONTRASENA=$password;
echo'contraseña '.$CONTRASENA;
echo"\n\n";
$encripMD5=md5($CONTRASENA);
echo'contraseña encriptada '.$encripMD5;
echo"\n\n";
$encripSHA1=sha1($CONTRASENA);
echo'contraseña encriptada '.$encripSHA1;
echo"\n\n";
    }
    $conConTabla -> close();
?>