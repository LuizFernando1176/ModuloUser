<?php

$conn = new mysqli('localhost', 'root', '', 'teste01');

if (!$conn) {
    die("Error: Erro ao conectar ao banco.");
}
?>