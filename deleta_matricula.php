<?php

include 'db.php';

$ID_ALUNO_CURSO = $_GET['ID_ALUNO_CURSO'];

$query = "DELETE FROM aluno_curso WHERE ID_ALUNO_CURSO = $ID_ALUNO_CURSO";

mysqli_query($conexao, $query);

header('location:index.php?pagina=matricula');