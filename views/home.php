<div id="conteudo">
    <br>
    <h1 style="text-align:center">Bem vindo</h1>
</div>
    <?php if (!isset($_SESSION['login'])) { ?>


        <form method='post' action="login.php">

            <label class="badge badge-pill badge-secondary">Usuário:</label>
            <input type="text" name="usuario" placeholder="Nome do usuário" class="form-control">
            <br>
            <label class="badge badge-pill badge-secondary">Senha:</label>
            <input type="password" name="senha" placeholder="Digite a senha" class="form-control">
            <br>
            <input type="submit" value="Entrar" class="btn btn-success">

            <?php if (isset($_GET['erro'])) { ?>
                <br><br>
                <div class="alert alert-danger" role="alert">
                    Usuário e/ou senha inválidos.
                </div>

</form>
<?php } ?>
<?php } else { ?>
    
<?php } ?>