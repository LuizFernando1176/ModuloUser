<?php
include_once '../util/conectaBD.php';
$id = $_GET['id'];
$excluido = $_GET['excluido'];
$coon = conecta();
$queryEditaUser = "UPDATE `user` SET `excluido`='$excluido' WHERE id=$id";
$queryResposta = mysqli_query($coon, $queryEditaUser);

