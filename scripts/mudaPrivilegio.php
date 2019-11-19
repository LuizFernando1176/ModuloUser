<?php

include_once '../util/conectaBD.php';
$id = $_GET['id'];
$admin = $_GET['admin'];
$coon = conecta();
$queryEditaUser = "UPDATE `user` SET `admin`='$admin' WHERE id=$id";
$queryResposta = mysqli_query($coon, $queryEditaUser);

