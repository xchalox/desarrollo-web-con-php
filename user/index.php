<?php

session_start();

 if(!isset($_SESSION['user_id'])){
    // si no hay SESSION es pq no hay ususario
    header("Location: ../");
     exit(); // siempre que haya un redireccionamiento

}