<div id="conteudo">
    <?php if (!isset($_GET['editar'])) { ?>
        <h1>Inserir novo curso</h1>
        <form method="post" action="processa_curso.php">
            <br>
            <label class="badge badge-pill badge-secondary"> Nome curso:</label><br>
            <input type="text" class="form-control" name="nome_curso" placeholder="Insira o nome do curso">
            <br>
            <br>
            <label class="badge badge-pill badge-secondary"> Carga horária:</label><br>
            <input type="text" class="form-control" name="carga_horaria" placeholder="Insira a carga horária">
            <br>
            <br>
            <input type="submit" class="btn btn-success" value="Inserir curso">
        </form>
    <?php } else { ?>
        <?php
        while ($linha = mysqli_fetch_array($consulta_curso)) { ?>
            <?php if ($linha['ID_CURSO'] == $_GET['editar']) { ?>

                <h1>Editar curso</h1>
                <form method="post" action="edita_curso.php">
                    <input type="hidden" class="form-control" name="ID_CURSO" value="<?php echo $linha['ID_CURSO']; ?>">
                    <br>
                    <label class="badge badge-pill badge-secondary"> Nome curso:</label><br>
                    <input type="text" class="form-control" name="nome_curso" placeholder="Insira o nome do curso" value="<?php echo $linha['nome_curso']; ?>">
                    <br>
                    <br>
                    <label class="badge badge-pill badge-secondary"> Carga horária:</label><br>
                    <input type="text" class="form-control" name="carga_horaria" placeholder="Insira a carga horária" value="<?php echo $linha['carga_horaria']; ?>">
                    <br>
                    <br>
                    <input type="submit" class="btn btn-success" value="Editar curso">
                </form>
            <?php } ?>
        <?php } ?>
    <?php } ?>






</div>