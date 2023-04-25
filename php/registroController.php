<?php
include 'conexion.php';
   

   $clave = $_POST['clave'];
   $nombre = $_POST['nombre_completo'];
   $contrasena = $_POST['contrasena'];
   $correo = $_POST['correo'];
   $departamento = $_POST['departamento'];

   $query= "INSERT INTO empleados(clave,nombre_completo,correo,contrasena,departamento)
            VALUES('$clave','$nombre','$correo','$contrasena','$departamento')";
    $verificar_nombre = mysqli_query($conexion,"SELECT * FROM empleados where nombre_completo='$nombre'");
    $verificar_correo = mysqli_query($conexion,"SELECT * FROM empleados where correo='$correo'");
    if(mysqli_num_rows($verificar_nombre)>0){
        echo '
            <script> alert("Este nombre ya ha sido registrado")
            window.location = "../index.php"
            </script>
        ';
        exit();
    }
    if(mysqli_num_rows($verificar_correo)>0){
        echo '
            <script> alert("Este correo ya ha sido registrado")
            window.location = "../index.php"
            </script>
        ';
        exit();
    }
    $ejecutar = mysqli_query($conexion,$query);

    
    if($ejecutar){
        echo '
            <script>
            alert("usuario almacenado exitosamente");
            window.location= "../index.php";
            </script>
        ';
    }
    mysqli_close($conexion);
?>