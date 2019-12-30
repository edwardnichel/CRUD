<?php 

$servidor ="localhost";
$usuario = "root";
$senha ="usbw";
$db = "aula_php";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$query = "SELECT * FROM CURSO";
$consulta = mysqli_query($conexao, $query);