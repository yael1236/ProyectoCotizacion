<?php
if(!empty($_POST['entrar'])){
    if(empty($_POST['email1']) and empty($_POST['password1'])){
        echo "LOS CAMPOS ESTAN VACIOS";
    }else{
        $usuario=$_POST['email1'];
        $pass=$_POST['password1'];
        $sql=$conexion->query("SELECT * FROM registro WHERE Email='$usuario' AND password='password1'");
        if($datos=$sql->fetch_objet()){
            header("location:../buscador.php");
        }else{
            header("location:../index.php");
        }
    }

}
?>