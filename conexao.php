<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "times_db";

$con = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!$con) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>