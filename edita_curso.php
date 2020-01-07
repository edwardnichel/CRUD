<?php 

include 'db.php';

$ID_CURSO = $_POST['ID_CURSO'];
$nome_curso = $_POST['nome_curso'];
$carga_horaria = $_POST['carga_horaria'];

$query = "UPDATE curso SET nome_curso = '$nome_curso', carga_horaria = $carga_horaria
            WHERE ID_CURSO = $ID_CURSO";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cursos');