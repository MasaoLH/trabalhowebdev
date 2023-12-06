<?php
$nomehost = '127.0.0.1';
$bancodedados = 'trabalhoweb';
$usuario = 'root';
$senha = '';

$mysqli = new mysqli($nomehost, $usuario, $senha, $bancodedados, 3306);

if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
}
