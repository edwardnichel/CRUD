<?php 

include 'db.php';

$ID_ALUNO = $_POST['ID_ALUNO'];
$nome_aluno = $_POST['nome_aluno'];
$data_nascimento = $_POST['data_nascimento'];

$query = "UPDATE aluno SET nome_aluno = '$nome_aluno', data_nascimento = '$data_nascimento'
            WHERE ID_ALUNO = $ID_ALUNO";

mysqli_query($conexao, $query);

header('location:index.php?pagina=alunos');