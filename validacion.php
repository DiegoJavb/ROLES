<?php
include 'conection.php';
$usuario = $_POST['user'];
$password = $_POST['password'];
session_start();
// variable global
$_SESSION['correo'] = $user;

// consulta
$consulta = "SELECT * FROM usuarios WHERE user_email = '$usuario' and user_password='$password'";

//validadcion
$validacion = mysqli_query($conection, $consulta);

// guardado de array
$tuplas = mysqli_fetch_array($validacion);

//redireccion segun rol
if ($tuplas['id_rol' == 1]) {
    header('location: admin.php');
} else if ($tuplas['id_rol' == 2]) {
    header('location: index.php');
} else {
    echo "El usuario o contraseña ingresados so incorrectos";
}

// para que la sesion no quede abiuerta por siempre
mysqli_free_result($validacion);
mysqli_close($conection);
