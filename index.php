<?php

    session_start();
    
        if(isset($_SESSION['$Email'])){
        header("location: app/php/registro.php");
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sb-admin-2.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <title>Document</title>
</head>
<body>
<div class="row justify-content-center align-items-center vh-100 animate__animated animate__fadeIn">
<div class="col-md-10 mx-auto">
            <div class="row justify-content-center align-items-center vh-100">

                <div class="col-md-6 mx-auto text-center">
                    <img src="img/login-image.png" class="img-fluid">
                </div>
                <div class="col-md-6 mx-auto">

                    <div class="mx-2 mx-md-5 my-md-5 my-3">
                        <h1 class="fw-light h3 mb-4 text-center">¡Bienvenido!</h1>
                        <h2 class="fw-light h5 mb-4 text-center" style="font-size: 1.1em;">Sistema de Cotizaciones.</h2>
                        <form action="app/php/login.php" method="POST">
                            <input type="email" class="form-control form-control-user mb-3" placeholder="Correo Electrónico" name="Email">
                            <input type="password"  class="form-control form-control-user mb-3" placeholder="Contraseña" name="password" >

                            <div class="form-group" v-html="datos">
                            </div>
                            <button class="btn btn-primary form-control form-control-user1 my-3" type="submit" value="Iniciar sesión">Inicio</button>
                            <a class="btn btn-primary form-control form-control-user1 my-3" href="app/php/registro.php">Registrate</a>
                        </form>
                        <hr>
                        <div class="text-center">
                           <p>Grupo CORSEC le agradece su confianaza</p>
                        </div>

                    </div>
                    
                </div>

            </div>                   

        </div>
</body>
</html>