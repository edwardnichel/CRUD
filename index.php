<?php
#base de dados
include 'db.php';

# cabeçalho
include 'header.php';

# Conteudo da página
if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
}
else{
    $pagina = 'home';
}
@$pagina = $_GET['pagina'];

if ($pagina == 'cursos') {
    include 'views/cursos.php';
}
elseif ($pagina == 'alunos') {
    include 'views/alunos.php';
}
elseif ($pagina == 'matricula') {
    include 'views/matricula.php';
}
else{
    include 'views/home.php';
}


# Rodape
include 'footer.php';
