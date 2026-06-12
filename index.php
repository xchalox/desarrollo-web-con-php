<?php

// iniciar o reanudar la sesión del usuario actual
session_start();

// echo '<pre>';
// var_dump($_SERVER);
// echo '</pre>';

if (isset($_SESSION['user_id'])) {
    // el usuario esta logueado
    header("Location: backoffice/");
    exit(); // siempre que haya un redireccionamiento
} else {
    // si no hay SESSION es pq no hay ususario
    header("Location: user/login");
     exit(); // siempre que haya un redireccionamiento

}
