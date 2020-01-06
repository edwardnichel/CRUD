<?php

$servidor = "localhost";
$usuario = "root";
$senha = "usbw";
$db = "aula_php";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$query = "SELECT * FROM curso";
$consulta_curso = mysqli_query($conexao, $query);

$query = "SELECT * FROM aluno";
$consulta_aluno = mysqli_query($conexao, $query);

$query = "SELECT aluno_curso.ID_ALUNO_CURSO, aluno.nome_aluno, curso.nome_curso
            FROM aluno, curso, aluno_curso
            WHERE aluno_curso.ID_ALUNO = aluno.ID_ALUNO
            AND aluno_curso.ID_CURSO = curso.ID_CURSO";
$consulta_matricula = mysqli_query($conexao, $query);
