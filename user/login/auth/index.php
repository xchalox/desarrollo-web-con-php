<?php

session_start();

if (isset($_SESSION['user_id'])) {
    // el usuario ya está logueado
    header("Location: ../../../dashboard/");
    exit(); // siempre que haya un redireccionamiento
} 

$formUsernsame = $_POST['username'];
$formPassword = $_POST['password'];

$user = 'proyecto@web.cl';
$pass = 'holaMundo!';

if ($user === $formUsernsame && $pass === $formPassword){
    $_SESSION['user_id'] = 1;
    $_SESSION['username'] = 'Profe :)';

    $_SESSION['error'] = ['login' => ''];
    $_SESSION['errores'] = ['items' => ''];

    header("Location: ../../../backoffice/");
    exit(); // siempre que haya un redireccionamiento
} 

$_SESSION['error'] = ['login' => 'Usuario o contraseña incorrectos'];
header("Location: ../");


    
