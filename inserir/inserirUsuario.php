<?php

include_once '../util/conectaBD.php';
$coon = conecta();
$login = $_POST('login');
$senha = $_POST('senha');


$queryInseriUser = ("INSERT INTO `user`( `login`, `senha`) VALUES ('$login','$senha')");
$queryResposta = mysqli_query($coon, $queryInseriUser);

if ($queryResposta) {

    header('Location: index.php');
} else {
    echo 'not add';
}


        