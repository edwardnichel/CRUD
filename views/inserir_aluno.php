<div id="conteudo"></div>
<?php if (!isset($_GET['editar'])) { ?>
    <h1>Inserir novo aluno</h1>
    <form method="post" action="processa_aluno.php">
        <br>
        <label class="badge badge-pill badge-secondary"> Nome aluno:</label><br>
        <input type="text" class="form-control" name="nome_aluno" placeholder="Insira o nome do aluno">
        <br>
        <br>
        <label class="badge badge-pill badge-secondary"> Data de nascimento:</label><br>
        <input type="text" class="form-control" name="data_nascimento" placeholder="Insira a data de nascimento">
        <br>
        <br>
        <input type="submit" class="btn btn-success" value="Inserir aluno">
    </form>
<?php } else { ?>
    <?php
    while ($linha = mysqli_fetch_array($consulta_aluno)) { ?>
        <?php if ($linha['ID_ALUNO'] == $_GET['editar']) { ?>
            <h1>Editar aluno</h1>
            <form method="post" action="edita_aluno.php">
                <input type="hidden" class="form-control" name="ID_ALUNO" value="<?php echo $linha['ID_ALUNO']; ?>">
                <br>
                <label class="badge badge-pill badge-secondary"> Nome aluno:</label><br>
                <input type="text" class="form-control" name="nome_aluno" placeholder="Insira o nome do aluno" value="<?php echo $linha['nome_aluno']; ?>">
                <br>
                <br>
                <label class="badge badge-pill badge-secondary"> Data de nascimento:</label><br>
                <input type="text" class="form-control" name="data_nascimento" placeholder="Insira a data de nascimento" value="<?php echo $linha['data_nascimento']; ?>">
                <br>
                <br>
                <input type="submit" class="btn btn-success" value="Editar aluno">
            </form>
        <?php } ?>
    <?php } ?>
<?php } ?>