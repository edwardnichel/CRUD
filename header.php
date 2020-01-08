<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <script src="https://kit.fontawesome.com/a14d946087.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="img/favicon.png" />
  <title>CRUD</title>
</head>

<body>
  <div class="geral">
  <header>
    <nav class=" navbar navbar-expand-md navbar-dark bg-dark fixed-top ">
      <a class="navbar-brand" href="?pagina=home"><i class="fas fa-home"></i></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse " id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto  ">
          <li class="nav-item active ">
            <a class="nav-link " href="?pagina=cursos">Cursos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?pagina=alunos">Alunos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?pagina=matricula">Matrículas</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto  ">
          <?php if (isset($_SESSION['login'])) { ?>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">
                <?php echo $_SESSION['usuario']; ?> (sair)
              </a>
            </li>
        </ul>
      <?php } ?>
      </ul>
      </div>
    </nav>
  </header>

  <div id="conteudo" class="container">