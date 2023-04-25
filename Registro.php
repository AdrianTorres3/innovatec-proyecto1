<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
</head>

<body>
    <!-- <div class="container">
       
    </div> -->
    <div class="container mx-auto tamDiv" style="width: 50%;">
        <div class="container">
            <img class="imagen mx-auto" src="assets/img/usuario1.png" alt="Usuario">
            <div class="col-auto">
                <form action="php/registroController.php" method="POST">
                    <div class="form-floating m-2">
                        
                        <input name="clave" type="text" class="form-control" id="clave" aria-describedby="emailHelp"
                            placeholder="Introduce Clave">
                        <label class="form-label" for="exampleInputEmail1">Clave de usuario</label>
                    </div>

                    <div class="form-floating m-2">
                        
                        <input name="nombre_completo" type="text" class="form-control" id="nombre" aria-describedby="emailHelp"
                            placeholder="Nombre">
                        <label class="form-label" for="exampleInputEmail1">Nombre completo</label>
                    </div>
                    <div class="form-floating m-2">
                        <input name="correo" type="email" class="form-control" id="correo" aria-describedby="emailHelp"
                            placeholder="correo@ejemplo.com">
                        <label class="form-label" for="exampleInputEmail1">Correo electrónico</label>
                    </div>
                    <div class="form-floating m-2">
                        <input name="contrasena" type="password" class="form-control" id="contrasena" placeholder="Contraseña">
                        <label for="exampleInputPassword1">Contraseña</label>
                    </div>

                    <div class="form-floating m-2">
                        <select name="departamento" class="form-select" id="departamento">
                            <option selected>--seleccione una opcion</option>
                            <option value="laboratorio">laboratorio</option>
                            <option value="mantenimiento">mantenimiento</option>
                        </select>
                        <label for="floatingSelectGrid">Seleccione departamento</label>
                    </div>
                    <div class="container m-4 mx-auto">
                        <button id="registrar" type="submit" class="btn btn-primary centrar mx-auto">Registrarse</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>