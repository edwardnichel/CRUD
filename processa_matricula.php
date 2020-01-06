<?php

include 'db.php';

$ID_ALUNO = $_POST['escolha_aluno'];
$ID_CURSO = $_POST['escolha_curso'];

$query = "INSERT INTO aluno_curso(ID_ALUNO, ID_CURSO) VALUES($ID_ALUNO, $ID_CURSO)";

mysqli_query($conexao, $query);

header('location:index.php?pagina=matricula');
