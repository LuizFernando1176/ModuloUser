<?php

include_once '../util/conectaBD.php';
include_once '../util/config.php';
$coon = conecta();
$login = $_POST['login'];
$senha = $_POST['senha'];


$queryInseriUser = ("INSERT INTO `user`( `login`, `senha`) VALUES ('$login','$senha')");
$queryResposta = mysqli_query($coon, $queryInseriUser);
echo $queryInseriUser ;
if ($queryResposta) {

    header('Location: ../index.php');
} else {
    echo 'not add';
}


        