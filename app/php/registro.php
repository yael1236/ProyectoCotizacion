<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Document</title>
</head>
<body>      
            <div class="col-md-10 mx-auto">
                <div class="row justify-content-center align-items-center vh-100">
    
                    <div class="col-md-6 mx-auto text-center">
                        <img src="../../img/register-image.png" class="img-fluid">
                    </div>
                    <div class="col-md-6 mx-auto">
    
                        <div class="mx-2 mx-md-5 my-md-5 my-3">
    
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">¡Crea una cuenta!</h1>
                              </div>
                              <form action="conecion.php" method="POST" >
                                <div class="form-group row">
                                  <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user mb-3" v-model="nUsr" placeholder="Nombre" name="Nombre" @keypress="soloLetras" required />
                                  </div>
                                  <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user mb-3" v-model="aUsr" placeholder="Apellido(s)" name="Apellido" @keypress="soloLetras" required />
                                  </div>
                                </div>
                                <div class="form-group">
                                  <input type="email" class="form-control form-control-user mb-3" v-model="nCorreo" placeholder="Correo electrónico" name="Email" required />
                                </div>
                                <div class="form-group" v-html="datos"></div>
                                <div class="form-group row">
                                  <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user mb-3" v-model="passUsr" placeholder="Contraseña" name="password" required />
                                  </div>
                                  <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user mb-3" v-model="passUsrDos" placeholder="Repetir contraseña" :disabled="estadoPass" name="password1" required />
                                  </div>
                                </div>
              
                               
                                <button type="submit" class="btn btn-primary form-control form-control-user my-3" :disabled="this.nomComer != '' && this.rfc != '' && this.nUsr != '' && this.aUsr != '' && this.nCorreo != '' && this.passUsr != '' && this.passUsrDos != '' && this.validaBtn === true ? this.estadoBtn = flase : this.estadoBtn = true">
                                  Registrar cuenta
                                </button>
              
                              </form>
                            <hr>
                            <div class="text-center">
                                <router-link class="a" to="/">¿Ya tienes una cuenta? ¡Iniciar sesión!</router-link>
                            </div>
    
                        </div>
                        
                    </div>
    
                </div>                   
    
            </div>
        
</body>
</html>