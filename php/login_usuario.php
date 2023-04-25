<?php
session_start();
    include 'conexion.php';

    $clave= $_POST['clave'];
    $contrasena= $_POST['contrasena'];

    $validar_login= mysqli_query($conexion,"SELECT * FROM empleados where clave='$clave' and contrasena='$contrasena'");

    if(mysqli_num_rows($validar_login)>0){
        $_SESSION['clave']=$clave;
        header("location:../inicioAdmin.php");
        exit();
    }else{
        echo '
        <script>
            alert("contraseña o clave incorrectas")
            window.location = "../index.php"
        </script>
        ';
        exit();
    }
?>